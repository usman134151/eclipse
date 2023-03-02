<?php
namespace app\Services;


class ChatService 
{
    public static function chatRoom( $user )
    {
        return array( 
        [
            'room_id' => 1,
            'customer_id' => 2,
            'user_id' => $user->id,
            'message' => 'amg this is amazing',
            'last_message_at' => api_date_formate(date('Y-m-d h:sa')),
            'unread_message_count' => 2,
            'customer' =>  [
                'uid'           =>  1,
                'user_name'     => 'Cameron Williamson',
                'role'          =>  'Supervisor' , 
                'status'        =>  'active',
                'gender'        => 'male',
                'profile_pic' => $user->gravatar_url,
                'created_at' => api_date_formate($user->created_at),
            ]
        ],
        [
            'room_id' => 2,
            'customer_id' => 3,
            'user_id' => $user->id,
            'message' => 'I will be there in 2 mints',
            'last_message_at' => api_date_formate(date('Y-m-d h:sa')),
            'unread_message_count' => 2,
            'customer' =>  [
                'uid'           =>  3,
                'user_name'     => 'Arlene McCoy',
                'role'          =>  'Billing Manager' , 
                'status'        =>  'active',
                'gender'        => 'male',
                'profile_pic' => $user->gravatar_url,
                'created_at' => api_date_formate($user->created_at),
            ]
        ],[
            'room_id' => 3,
            'customer_id' => 3,
            'user_id' => $user->id,
            'message' => 'I will be there in 2 mints',
            'last_message_at' => api_date_formate(date('Y-m-d h:sa')),
            'unread_message_count' => 2,
            'customer' =>  [
                'uid'           =>  3,
                'user_name'     => 'Darlene Robertson',
                'role'          =>  'Manager' , 
                'status'        =>  'active',
                'gender'        => 'female',
                'profile_pic' => $user->gravatar_url,
                'created_at' => api_date_formate($user->created_at),
            ]
        ]);
    }  
    
    public static function chatMessages( $user )
    {
        return array( 
            'room_id' => 1,
            'customer_id' => 2,
            'user_id' => $user->id,
            'message' => 'amg this is amazing',
            'last_message_at' => api_date_formate(date('Y-m-d h:sa')),
            'unread_message_count' => 2,
            'customer' =>  [
                'uid'           =>  1,
                'user_name'     => 'Cameron Williamson',
                'role'          =>  'Supervisor' , 
                'status'        =>  'active',
                'gender'        => 'male',
                'profile_pic' => $user->gravatar_url,
                'created_at' => api_date_formate($user->created_at),
            ],
            'messages' => [
                [
                    'message_id'  => 1,
                    'message'  => 'What you means?',
                    'created_at' => api_date_formate(date('Y-m-d h:sa')),
                    'sender_id' => $user->id,
                    'receiver_id' => 1,
                    'assignment_id'         =>  1,
                    'assignment_no'         =>  '101787-1',
                    'accommondation'        =>  'Sign Language Interpreting Services',
                    'service'               =>  'American Sign Language Interpreting',
                ]
                ,
                [
                    'message_id'  => 2,
                    'message'  => 'I think the idea that thing are chaning isnt good',
                    'created_at' => api_date_formate(date('Y-m-d h:sa')),
                    'sender_id' => $user->id,
                    'receiver_id' => 1,
                    'assignment_id'         =>  null,
                    'assignment_no'         =>  null,
                    'accommondation'        =>  null,
                    'service'               =>  null,
                ]
                ,
                [
                    'message_id'  => 3,
                    'message'  => 'What you means?',
                    'created_at' => api_date_formate(date('Y-m-d h:sa')),
                    'sender_id' => $user->id,
                    'receiver_id' => 1,
                    'assignment_id'         =>  null,
                    'assignment_no'         =>  null,
                    'accommondation'        =>  null,
                    'service'               =>  null,
                ]
            ]
         );
    }

    public static function chatRoomCreate( $user )
    {
        return array( 
            'room_id' => 1,
            'customer_id' => 2,
            'user_id' => $user->id,
            'message' => '',
            'last_message_at' => api_date_formate(date('Y-m-d h:sa')),
            'unread_message_count' => 0,
            'customer' =>  [
                'uid'           =>  1,
                'user_name'     => 'Cameron Williamson',
                'role'          =>  'Supervisor' , 
                'status'        =>  'active',
                'gender'        => 'male',
                'profile_pic' => $user->gravatar_url,
                'created_at' => api_date_formate($user->created_at),
            ],
            'messages' => null
        );
    }

    public static function message( $user )
    {
        return array(
            'message_id'  => 4,
            'message'  => 'What you means?',
            'created_at' => api_date_formate(date('Y-m-d h:sa')),
            'sender_id' => $user->id,
            'receiver_id' => 1,
            'assignment_id'         =>  1,
            'assignment_no'         =>  '101787-1',
            'accommondation'        =>  'Sign Language Interpreting Services',
            'service'               =>  'American Sign Language Interpreting',
        );
    }    
}
