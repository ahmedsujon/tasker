<div>
    <section class="client_chat_wrapper pt-12">
        <div class="chat_header_grid">
            <a href="{{ route('client.chats') }}" type="button" class="page_back_btn">
                <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
            </a>
            <div class="user_area">
                <div class="user_img">
                    <img src="{{ asset($chat->user->avatar ? $chat->user->avatar : 'assets/images/placeholder.jpg') }}" alt="user image" />
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
                                <div class="time">{{ Carbon\Carbon::parse($msg->created_at)->format('h:i A') }}</div>
                            </div>
                        </div>
                        @else
                        <div class="client_msg_grid support_msg_grid">
                            <img src="{{ asset('assets/app/images/user/message_user1.png') }}" alt="support user" class="support_user" />
                            <div class="text_area">
                                <div class="d-flex justify-content-start">
                                    <p>{{ $msg->message }}</p>
                                </div>
                                <div class="time text-start">{{ Carbon\Carbon::parse($msg->created_at)->format('h:i A') }}</div>
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
                {!! loadingStateWithoutText('sendMessage', '<img src="'.asset('assets/app/icons/sent.svg').'" />') !!}
            </button>
        </form>
    </section>

    {{-- <section class="message_wrapper mt-12">
        <h2 class="message_title">Messages</h2>
        <div class="search_grid">
            <form action="" class="search_form_area">
                <input type="search" placeholder="Search" class="input_filed" />
                <button type="button" class="search_btn">
                    <img src="{{ asset('{{ asset('assets/app/app/icons/search-md.svg') }}" alt="search icon" />
                </button>
            </form>
            <div class="btn-group filter_dropdown_area filter_dropdown_grid_area">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('{{ asset('assets/app/app/icons/Filter-icon.svg') }}" alt="filter icon" />
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('{{ asset('assets/app/app/icons/message.svg') }}" alt="message" />
                            <span>Unread</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('{{ asset('assets/app/app/icons/contracts.svg') }}" alt="contact" />
                            <span>Contracts</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="message_list_area mrn-24 pr-24">
            <a href="#" class="user_msg_grid">
                <div class="user_img">
                    <img src="{{ asset('{{ asset('assets/app/app/images/user/message_user1.png') }}" alt="user image">
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Theresa Webb</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Car Engineer - Back part</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
            <a href="#" class="user_msg_grid">
                <div class="user_img">
                    <img src="{{ asset('{{ asset('assets/app/app/images/user/message_user2.png') }}" alt="user image">
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Jerome Bell</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Fjdf</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
            <a href="#" class="user_msg_grid">
                <div class="user_img">
                    <img src="{{ asset('{{ asset('assets/app/app/images/user/message_user3.png') }}" alt="user image">
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Cody Fisher</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Car Engineer - Back part</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
            <a href="#" class="user_msg_grid">
                <div class="user_img name_img">
                    <h4>KM</h4>
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Annette Black</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Car Engineer - Back part</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
            <a href="#" class="user_msg_grid">
                <div class="user_img">
                    <img src="{{ asset('{{ asset('assets/app/app/images/user/message_user1.png') }}" alt="user image">
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Theresa Webb</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Car Engineer - Back part</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
            <a href="#" class="user_msg_grid">
                <div class="user_img">
                    <img src="{{ asset('{{ asset('assets/app/app/images/user/message_user2.png') }}" alt="user image">
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Jerome Bell</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Fjdf</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
            <a href="#" class="user_msg_grid">
                <div class="user_img">
                    <img src="{{ asset('{{ asset('assets/app/app/images/user/message_user3.png') }}" alt="user image">
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Cody Fisher</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Car Engineer - Back part</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
            <a href="#" class="user_msg_grid">
                <div class="user_img name_img">
                    <h4>KM</h4>
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Annette Black</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Car Engineer - Back part</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
            <a href="#" class="user_msg_grid">
                <div class="user_img">
                    <img src="{{ asset('{{ asset('assets/app/app/images/user/message_user1.png') }}" alt="user image">
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Theresa Webb</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Car Engineer - Back part</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
            <a href="#" class="user_msg_grid">
                <div class="user_img">
                    <img src="{{ asset('{{ asset('assets/app/app/images/user/message_user2.png') }}" alt="user image">
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Jerome Bell</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Fjdf</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
            <a href="#" class="user_msg_grid">
                <div class="user_img">
                    <img src="{{ asset('{{ asset('assets/app/app/images/user/message_user3.png') }}" alt="user image">
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Cody Fisher</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Car Engineer - Back part</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
            <a href="#" class="user_msg_grid">
                <div class="user_img name_img">
                    <h4>KM</h4>
                </div>
                <div>
                    <div class="msg_content_grid">
                        <h2 class="text-line-clamp1">Annette Black</h2>
                        <h6 class="d-flex justify-content-end">3/1/24</h6>
                    </div>
                    <h4 class="text-line-clamp1">Car Engineer - Back part</h4>
                    <h5 class="text-line-clamp1">Kazi Mahbub : Are you online now</h5>
                </div>
            </a>
        </div>
        @livewire('client.layouts.inc.header')
    </section> --}}
</div>
