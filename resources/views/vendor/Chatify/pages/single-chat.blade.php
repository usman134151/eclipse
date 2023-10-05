<div class="chat-container" style="display: none">
    {{-- header title [conversation name] amd buttons --}}
    <div class="m-header m-header-messaging">
        <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
            {{-- header back button, avatar and user name --}}
            <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                <div class="avatar av-s header-avatar"
                     style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                </div>
                <a href="#" class="user-name"></a>
            </div>
            {{-- header buttons --}}
            <nav class="m-header-right">
                <a href="#" class="minimize-chat"><i class="fas fa-minus"></i></a>
                <a href="#" class="close-chat"><i class="fas fa-times"></i></a>
            </nav>
        </nav>
        {{-- Internet connection --}}
        <div class="internet-connection">
            <span class="ic-connected">Connected</span>
            <span class="ic-connecting">Connecting...</span>
            <span class="ic-noInternet">No internet access</span>
        </div>
    </div>
    <div class="messenger box-shadow-chat">
        {{-- ----------------------Messaging side---------------------- --}}
        <div class="messenger-messagingView" style="max-height: 400px">
            {{-- Messaging area --}}
            <div class="m-body messages-container app-scroll">
                <div class="messages">
                    <p class="message-hint center-el"><span>Please select a chat to start messaging</span></p>
                </div>
                {{-- Typing indicator --}}
                <div class="typing-indicator">
                    <div class="message-card typing">
                        <div class="message">
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                        </div>
                    </div>
                </div>

            </div>
            {{-- Send Message Form --}}
            @include('Chatify::layouts.sendForm')
        </div>
    </div>
</div>
@include('Chatify::layouts.modals')
@include('Chatify::layouts.footerLinksSingle')
