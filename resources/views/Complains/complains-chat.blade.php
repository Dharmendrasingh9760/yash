@extends('include.main')
@section('content')
    @php
        use Carbon\Carbon;
        use App\Models\User;
    @endphp
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        * {
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            width: 80%;
            margin: auto;
            margin-top: 2rem;
            letter-spacing: 0.5px;
            height: 80%;
        }

        .msg-header {
            border: 1px solid #ccc;
            width: 100%;
            height: 10%;
            border-bottom: none;
            display: inline-block;
            background-color: #efefef;
            margin: 0;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .msgimg {
            margin-left: 2%;
            float: left;
        }

        .container1 {
            width: 270px;
            height: auto;
            float: left;
            margin: 0;
        }

        .active {
            width: 150px;
            float: left;
            color: black;
            font-weight: bold;
            margin: 0 0 0 5px;
            height: 10%;

        }

        .chat-page {
            padding: 0 0 50px 0;
        }

        .msg-inbox {
            border: 1px solid #ccc;
            overflow: hidden;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }


        .chats {
            padding: 30px 15px 0 25px;
        }

        .msg-page {
            max-height: 500px;
            overflow-y: auto;
        }

        .msg-bottom {
            border-top: 1px solid #ccc;
            position: relative;
            height: 11%;
            background-color: #fff;
            margin-top: 80px;
        }

        .input-group>.form-control {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            margin-bottom: 0;
        }

        .form-control {
            width: 100%;
            border: none !important;
            border-radius: 20px !important;
            display: block;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .input-group-text {
            background: transparent !important;
            border: none !important;
            display: flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1.5rem;
            font-weight: b;
            line-height: 1.5;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            font-weight: bold !important;
            cursor: pointer;
        }

        input:focus {
            outline: none;
            border: none !important;
            box-shadow: none !important;
        }

        .send-icon {
            font-weight: bold !important;
        }

        received-chats-img {
            display: inline-block;
            width: 50px;
            float: left;
        }

        .received-msg {
            display: inline-block;
            padding: 0 0 0 10px;
            vertical-align: top;
            width: 92%;
        }

        .received-msg-inbox {
            width: 57%;
        }

        .received-msg-inbox p {
            background: #d8ebff;
            border-radius: 10px;
            color: black;
            font-size: 14px;
            margin-left: 1rem;
            padding: 1rem;
            width: 100%;
        }

        p {
            overflow-wrap: break-word;
        }

        .time {
            color: #777;
            display: block;
            font-size: 12px;
            margin: 8px 0 0;
        }

        .outgoing-chats {
            overflow: hidden;
            margin: 26px 20px;
        }

        .outgoing-chats-msg p {
            background: #efefef none repeat scroll 0 0;
            color: black;
            border-radius: 10px;
            font-size: 14px;
            padding: 5px 10px 5px 12px;
            width: 100%;
            padding: 1rem;
        }

        .outgoing-chats-msg {
            float: right;
            width: 46%;
        }

        /* Styling the avatar */
        .outgoing-chats-img {
            display: inline-block;
            width: 50px;
            float: right;
            margin-right: 1rem;
            margin-top: 24px;
            margin-left: 25px;
        }

        .received-chats {
            display: flex;
        }

        @media only screen and (max-device-width: 850px) {

            *,
            .time {
                font-size: 28px;
            }

            img {
                width: 65px;
            }

            .msg-header {
                height: 5%;
            }

            .msg-page {
                max-height: none;
            }

            .received-msg-inbox p {
                font-size: 28px;
            }

            .outgoing-chats-msg p {
                font-size: 28px;
            }
        }

        @media only screen and (max-device-width: 450px) {

            *,
            .time {
                font-size: 28px;
            }

            img {
                width: 65px;
            }

            .msg-header {
                height: 5%;
            }

            .msg-page {
                max-height: none;
            }

            .received-msg-inbox p {
                font-size: 28px;
            }

            .outgoing-chats-msg p {
                font-size: 28px;
            }
        }
    </style>
    <div class="container">

        <div class="chat-page">
            <div class="msg-inbox">
                <div class="chats">
                    <div class="msg-page">
                        <div class="received-chats">
                            <div class="received-chats-img">
                                @php
                                    $user_data = User::where('role', '1')->first();
                                @endphp
                                @if ($user_data->profile_image)
                                    <img src="{{ $user_data->profile_image }}" class="w-[44px]"
                                        style="border-radius: 50%;" />
                                @else
                                    <img src="{{ asset('admin-assets/images/user.jpg') }}" class="w-[44px]"
                                        style="border-radius: 50%;" />
                                @endif

                            </div>
                            <div class="received-msg">
                                <div class="received-msg-inbox">
                                    <p>
                                        Hi {{ Auth::user()->name }},
                                        How Can I Help You!
                                    </p>
                                    <span class="time">
                                        @php
                                            $created_at = $complains->created_at;
                                            $formatted_date = Carbon::parse($created_at)
                                                ->setTimezone('Asia/Kolkata')
                                                ->format('H:i:s A | F d, Y');
                                        @endphp
                                        {{ $formatted_date }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @foreach ($complains_messages as $complains_messages_list)
                            @if ($complains_messages_list->send == '8')
                                <div class="received-chats">
                                    <div class="received-chats-img">
                                        @php
                                            $user_data = User::where('id', '8')->first();
                                        @endphp
                                        @if ($user_data->profile_image)
                                            <img src="{{ $user_data->profile_image }}" class="w-[44px]"
                                                style="border-radius: 50%;" />
                                        @else
                                            <img src="{{ asset('admin-assets/images/user.jpg') }}" class="w-[44px]"
                                                style="border-radius: 50%;" />
                                        @endif

                                    </div>
                                    <div class="received-msg">
                                        <div class="received-msg-inbox">
                                            <p>
                                                {{ $complains_messages_list->message }}
                                            </p>
                                            <span class="time">
                                                @php
                                                    $created_at = $complains_messages_list->created_at;
                                                    $formatted_date = Carbon::parse($created_at)
                                                        ->setTimezone('Asia/Kolkata')
                                                        ->format('H:i:s A | F d, Y');
                                                @endphp
                                                {{ $formatted_date }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <!-- Outgoing messages -->
                                <div class="outgoing-chats">
                                    <div class="outgoing-chats-img">
                                        @if (Auth::user()->profile_image != null)
                                            <img src="{{ Auth::user()->profile_image }}" class="w-[44px]"
                                                style="border-radius: 50%;" />
                                        @else
                                            <img src="{{ asset('admin-assets/images/user.jpg') }}" class="w-[44px]"
                                                style="border-radius: 50%;" />
                                        @endif
                                    </div>
                                    <div class="outgoing-msg">
                                        <div class="outgoing-chats-msg">
                                            <br>
                                            <p class="multi-msg">
                                                {{ $complains_messages_list->message }}
                                            </p>

                                            <span class="time">@php
                                                $created_at = $complains_messages_list->created_at;
                                                $formatted_date = Carbon::parse($created_at)
                                                    ->setTimezone('Asia/Kolkata')
                                                    ->format('H:i:s A | F d, Y');
                                            @endphp
                                                {{ $formatted_date }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>

                <!-- msg-bottom section -->
                <div class="msg-bottom">
                    <div class="input-group">
                        <form action="{{ route('complains.message') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $complains->id }}">
                            <div class="flex">
                                <input name="message" type="text" class="form-control" placeholder="Write message..." />
                                <button type="submit" class="input-group-text send-icon">
                                    <i class="bi bi-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
