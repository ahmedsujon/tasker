<div>
    <section class="client_chat_wrapper pt-12">
        <div class="chat_header_grid">
            <a href="{{ route('seller.sellerChats') }}" type="button" class="page_back_btn">
                <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
            </a>
            <div class="user_area">
                <div class="user_img">
                    <img src="{{ asset($chat->user->avatar ? $chat->user->avatar : 'assets/images/placeholder.jpg') }}"
                        alt="user image" />
                </div>
            </div>
            <div>
                <h4>{{ $chat->user->first_name }} {{ $chat->user->last_name }}</h4>
                <h5>Online</h5>
            </div>
            <div class="btn-group filter_dropdown_area">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/app/icons/more-vertical-blakc.svg') }}" alt="filter icon" />
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <button type="button" class="dropdown-item" id="modalOpenBtn">
                            <span class="text-f00">Block User</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="message_chat_area">
            @if ($messages)
                @foreach ($messages as $message)
                    <h4 class="date">
                        @if (Carbon\Carbon::parse($message['date'])->isToday())
                            Today
                        @elseif (Carbon\Carbon::parse($message['date'])->isYesterday())
                            Yesterday
                        @else
                            {{ $message['date'] }}
                        @endif
                    </h4>
                    @foreach ($message['messages'] as $msg)
                        @if ($msg->sender == user()->id)
                            <div class="client_msg_grid">
                                <!--Don't remove this blank div tag  -->
                                <div></div>
                                <div class="text_area">
                                    <div class="d-flex justify-content-end">
                                        <p>{{ $msg->message }}</p>
                                    </div>
                                    <div class="time">{{ Carbon\Carbon::parse($msg->created_at)->format('h:i A') }}
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="client_msg_grid support_msg_grid">
                                <img src="{{ asset('assets/app/images/user/message_user1.png') }}" alt="support user"
                                    class="support_user" />
                                <div class="text_area">
                                    <div class="d-flex justify-content-start">
                                        <p>{{ $msg->message }}</p>
                                    </div>
                                    <div class="time text-start">
                                        {{ Carbon\Carbon::parse($msg->created_at)->format('h:i A') }}</div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            @endif

        </div>
        <form wire:submit.prevent='sendMessage' class="msg_send_area">
            <div class="type_area">
                <textarea name="" id="" wire:model.blur='message' placeholder="Type here..." class="input_field"></textarea>
                <label for="msgFileSelect" class="file_select_btn">
                    <img src="{{ asset('assets/app/icons/paperclip.svg') }}" alt="paperclip icon" />
                </label>
                <input type="file" id="msgFileSelect" hidden />
            </div>
            <button type="submit" class="send_btn">
                {!! loadingStateWithoutText('sendMessage', '<img src="' . asset('assets/app/icons/sent.svg') . '" />') !!}
            </button>
        </form>
    </section>
    <input type="text" value="{{ $chat->id }}" id="selected_chat_id" />
</div>
@push('scripts')
    <script src="https://cdn.socket.io/4.0.0/socket.io.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize socket.io connection if it hasn't been initialized
            if (!window.socket) {
                window.socket = io('{{ env('SOCKET_SERVER') }}'); // Change to your server URL

                // Remove any previous listener to avoid duplication
                window.socket.off('receive_message');

                window.socket.on('receive_message', function(data) {
                    var chat_id = $('#selected_chat_id').val();

                    if (data.content.user_id == {{ user()->id }} && data.content.chat_id == chat_id &&
                        data.content.type == 'chat') {
                        @this.selectChat(chat_id);
                    } else if (data.content.user_id == {{ user()->id }} && data.content.type ==
                        'chat') {
                        @this.reFreshOnMessageReceived();
                    }

                });
            }
        });
    </script>
@endpush
