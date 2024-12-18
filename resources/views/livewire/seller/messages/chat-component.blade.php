<div>
    <section class="message_wrapper mt-12">
        <h2 class="message_title">Messages</h2>
        <div class="search_grid">
            <form action="" class="search_form_area">
                <input type="search" placeholder="Search" class="input_filed" />
                <button type="button" class="search_btn">
                    <img src="{{ asset('assets/app/icons/search-md.svg') }}" alt="search icon" />
                </button>
            </form>
            <div class="btn-group filter_dropdown_area filter_dropdown_grid_area">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/app/icons/Filter-icon.svg') }}" alt="filter icon" />
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('assets/app/icons/message.svg') }}" alt="message" />
                            <span>Unread</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('assets/app/icons/contracts.svg') }}" alt="contact" />
                            <span>Contracts</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="message_list_area mrn-24 pr-24">
            @if ($chats->count() > 0)
                @foreach ($chats as $chat)
                    <a href="{{ route('seller.sellerMessages', ['chat_id' => $chat->id]) }}" class="user_msg_grid">
                        @if ($chat->user->avatar)
                            <div class="user_img">
                                <img src="{{ asset($chat->user->avatar) }}" alt="user image">
                            </div>
                        @else
                            <div class="user_img name_img">
                                <h4>{{ Str::limit($chat->user->first_name, 1, '') }}
                                    {{ Str::limit($chat->user->last_name, 1, '') }}</h4>
                            </div>
                        @endif
                        <div>
                            <div class="msg_content_grid">
                                <h2 class="text-line-clamp1">{{ $chat->user->first_name }} {{ $chat->user->last_name }}
                                </h2>
                                <h6 class="d-flex justify-content-end">{{ Carbon\Carbon::parse($chat->updated_at)->format('d/m/Y') }}</h6>
                            </div>
                            <h4 class="text-line-clamp1">Car Engineer - Back part</h4>
                            <h5 class="text-line-clamp1"><span class="text-muted">
                                    @if ($chat->last_msg_sender == user()->id)
                                        Me:
                                    @endif
                                </span> {{ $chat->last_msg }}</h5>
                        </div>
                    </a>
                @endforeach
            @else
            @endif
        </div>
        @livewire('seller.layouts.inc.header')
    </section>
</div>
