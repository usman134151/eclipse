<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant\ChFavorite as Favorite;
use App\Models\Tenant\ChMessage as Message;
use App\Models\User;
use Chatify\ChatifyMessenger;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CustomChat extends ChatifyMessenger
{

    /**
     * Authentication for pusher
     *
     * @param User $requestUser
     * @param User $authUser
     * @param string $channelName
     * @param string $socket_id
     * @return string|JsonResponse
     */

    public function pusherAuth($requestUser, $authUser, $channelName, $socket_id)
    {
        // Auth data
        $authData = json_encode([
            'user_id' => $authUser->id,
            'user_info' => [
                'name' => $authUser->name
            ]
        ]);
        // check if user authenticated
        if (Auth::check()) {
            if ($requestUser->id == $authUser->id) {
                return json_decode($this->pusher->socket_auth(
                    $channelName,
                    $socket_id,
                    $authData
                ));
            }
            // if not authorized
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        // if not authenticated
        return response()->json(['message' => 'Not authenticated'], 403);
    }

    /**
     * Fetch & parse message and return the message card
     * view as a response.
     *
     * @param Message $prefetchedMessage
     * @param int $id
     * @return array
     */
    public function parseMessage($prefetchedMessage = null, $id = null)
    {
        $msg = null;
        $attachment = null;
        $attachment_type = null;
        $attachment_title = null;
        if (!!$prefetchedMessage) {
            $msg = $prefetchedMessage;
        } else {
            $msg = Message::where('id', $id)->first();
            if (!$msg) {
                return [];
            }
        }
        if (isset($msg->attachment)) {
            $attachmentOBJ = json_decode($msg->attachment);
            $attachment = $attachmentOBJ->new_name;
            $attachment_title = htmlentities(trim($attachmentOBJ->old_name), ENT_QUOTES, 'UTF-8');
            $ext = pathinfo($attachment, PATHINFO_EXTENSION);
            $attachment_type = in_array($ext, $this->getAllowedImages()) ? 'image' : 'file';
        }
        return [
            'id' => $msg->id,
            'from_id' => $msg->from_id,
            'to_id' => $msg->to_id,
            'message' => $msg->body,
            'attachment' => (object)[
                'file' => $attachment,
                'title' => $attachment_title,
                'type' => $attachment_type
            ],
            'timeAgo' => $msg->created_at->diffForHumans(),
            'created_at' => $msg->created_at->toIso8601String(),
            'isSender' => ($msg->from_id == Auth::user()->id),
            'seen' => $msg->seen,
        ];
    }

    /**
     * Return a message card with the given data.
     *
     * @param Message $data
     * @param boolean $isSender
     * @return string
     */
    public function messageCard($data, $renderDefaultCard = false)
    {
        if (!$data) {
            return '';
        }
        if ($renderDefaultCard) {
            $data['isSender'] = false;
        }
        return view('Chatify::layouts.messageCard', $data)->render();
    }

    /**
     * create a new message to database
     *
     * @param array $data
     * @return Message
     */
    public function newMessage($data)
    {
        $message = new Message();
        $message->from_id = $data['from_id'];
        $message->to_id = $data['to_id'];
        $message->body = $data['body'];
        $message->attachment = $data['attachment'];
        $message->save();
        return $message;
    }

    /**
     * Make messages between the sender [Auth user] and
     * the receiver [User id] as seen.
     *
     * @param int $user_id
     * @return bool
     */
    public function makeSeen($user_id)
    {
        Message::Where('from_id', $user_id)
            ->where('to_id', Auth::user()->id)
            ->where('seen', 0)
            ->update(['seen' => 1]);
        return 1;
    }

    /**
     * Get user list's item data [Contact Itme]
     * (e.g. User data, Last message, Unseen Counter...)
     *
     * @param int $messenger_id
     * @param Collection $user
     * @return string
     */
    public function getContactItem($user)
    {
        try {
            // get last message
            $lastMessage = $this->getLastMessageQuery($user->id);
            // Get Unseen messages counter
            $unseenCounter = $this->countUnseenMessages($user->id);
            if ($lastMessage) {
                $lastMessage->created_at = $lastMessage->created_at->toIso8601String();
                $lastMessage->timeAgo = $lastMessage->created_at->diffForHumans();
            }
            return view('Chatify::layouts.listItem', [
                'get' => 'users',
                'user' => $this->getUserWithAvatar($user),
                'lastMessage' => $lastMessage,
                'unseenCounter' => $unseenCounter,
            ])->render();
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }

    /**
     * Get last message for a specific user
     *
     * @param int $user_id
     * @return Message|Collection|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function getLastMessageQuery($user_id)
    {
        return $this->fetchMessagesQuery($user_id)->latest()->first();
    }

    /**
     * Default fetch messages query between a Sender and Receiver.
     *
     * @param int $user_id
     * @return Message|\Illuminate\Database\Eloquent\Builder
     */
    public function fetchMessagesQuery($user_id)
    {
        return Message::where('from_id', Auth::user()->id)->where('to_id', $user_id)
            ->orWhere('from_id', $user_id)->where('to_id', Auth::user()->id);
    }

    /**
     * Count Unseen messages
     *
     * @param int $user_id
     * @return Collection
     */
    public function countUnseenMessages($user_id)
    {
        return Message::where('from_id', $user_id)->where('to_id', Auth::user()->id)->where('seen', 0)->count();
    }

    /**
     * Count Unseen messages for all contacts
     * @return int
     */
    public function countTotalUnseenMessages()
    {
        return Message::where('to_id', Auth::user()->id)->where('seen', 0)->count();
    }

    /**
     * Get user with avatar (formatted).
     *
     * @param Collection $user
     * @return Collection
     */
    public function getUserWithAvatar($user)
    {
        if (!empty($user->userdetail->profile_pic)) {
            $user->avatar = url('/tenant' . tenant('id') . '/app/public/profile_pic/' . $user->userdetail->profile_pic);
        } else {
            $user->avatar = '/tenant-resources/images/portrait/small/avatar-s-1.jpg';
        }

        return $user;
    }

    /**
     * Check if a user in the favorite list
     *
     * @param int $user_id
     * @return boolean
     */
    public function inFavorite($user_id)
    {
        return Favorite::where('user_id', Auth::user()->id)
                ->where('favorite_id', $user_id)->count() > 0;
    }

    /**
     * Make user in favorite list
     *
     * @param int $user_id
     * @param int $star
     * @return boolean
     */
    public function makeInFavorite($user_id, $action)
    {
        if ($action > 0) {
            // Star
            $star = new Favorite();
            $star->user_id = Auth::user()->id;
            $star->favorite_id = $user_id;
            $star->save();
        } else {
            // UnStar
            $star = Favorite::where('user_id', Auth::user()->id)->where('favorite_id', $user_id)->delete();
        }
        return (bool)$star;
    }

    /**
     * Get shared photos of the conversation
     *
     * @param int $user_id
     * @return array
     */
    public function getSharedPhotos($user_id)
    {
        $images = array(); // Default
        // Get messages
        $msgs = $this->fetchMessagesQuery($user_id)->orderBy('created_at', 'DESC');
        if ($msgs->count() > 0) {
            foreach ($msgs->get() as $msg) {
                // If message has attachment
                if ($msg->attachment) {
                    $attachment = json_decode($msg->attachment);
                    // determine the type of the attachment
                    in_array(pathinfo($attachment->new_name, PATHINFO_EXTENSION), $this->getAllowedImages())
                        ? array_push($images, $attachment->new_name) : '';
                }
            }
        }
        return $images;
    }

    /**
     * Delete Conversation
     *
     * @param int $user_id
     * @return boolean
     */
    public function deleteConversation($user_id)
    {
        try {
            foreach ($this->fetchMessagesQuery($user_id)->get() as $msg) {
                // delete file attached if exist
                if (isset($msg->attachment)) {
                    $path = config('chatify.attachments.folder') . '/' . json_decode($msg->attachment)->new_name;
                    if (self::storage()->exists($path)) {
                        self::storage()->delete($path);
                    }
                }
                // delete from database
                $msg->delete();
            }
            return 1;
        } catch (Exception $e) {
            return 0;
        }
    }

    /**
     * Return a storage instance with disk name specified in the config.
     *
     */
    public function storage()
    {
        return Storage::disk(config('chatify.storage_disk_name'));
    }

    /**
     * Delete message by ID
     *
     * @param int $id
     * @return boolean
     */
    public function deleteMessage($id)
    {
        try {
            $msg = Message::where('from_id', auth()->id())->where('id', $id)->firstOrFail();
            if (isset($msg->attachment)) {
                $path = config('chatify.attachments.folder') . '/' . json_decode($msg->attachment)->new_name;
                if (self::storage()->exists($path)) {
                    self::storage()->delete($path);
                }
            }
            $msg->delete();
            return 1;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Get user avatar url.
     *
     * @param string $user_avatar_name
     * @return string
     */
    public function getUserAvatarUrl($user_avatar_name)
    {
        return self::storage()->url(config('chatify.user_avatar.folder') . '/' . $user_avatar_name);
    }

    /**
     * Get attachment's url.
     *
     * @param string $attachment_name
     * @return string
     */
    public function getAttachmentUrl($attachment_name)
    {
        return url('/tenant' . tenant('id') . '/app/public/' . config('chatify.attachments.folder') . $attachment_name)   ;
    }
}
