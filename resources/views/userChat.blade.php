@extends('layouts.layout')
@section('title', 'Hostess Profile | Hostess')
@section('content')
<style>
    .jGrowl .changeCount {
        background-color: #4BB543 !important;
    }
</style>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://phpstack-957459-3413409.cloudwaysapps.com/stripe-sample-code/public/checkout.js" defer></script>
<style>
    .ModalbuttonGreen {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 16px 1px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 5%;
        /* margin-left: 3%; */
        /* margin-right: 5% !important; */
        width: 100% !important;
        cursor: pointer;
    }

    .ModalbuttonPink {
        background-color: #de2352;
        border: none;
        color: white;
        padding: 16px 1px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 5%;
        /* margin-left: 3%; */
        /* margin-right: 5% !important; */
        width: 100% !important;
        cursor: pointer;
    }

    .ModalbuttonOrange {
        background-color: #f39b03;
        border: none;
        color: white;
        padding: 16px 1px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 5%;
        /* margin-left: 3%; */
        /* margin-right: 5% !important; */
        width: 100% !important;
        cursor: pointer;
    }

    .logoImg1 {
        height: 50%;
        width: 42%;
        margin-left: 30%;
        margin-bottom: 5%;
        padding-top: 5%;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin-top: 147px;
        margin: 258px 700px;
        padding: 19px;
        border: 1px solid #888;
        width: 25%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    a:hover {
        color: #fff;
    }
</style>
<style>
    body {
        margin-top: 20px;
    }

    .chat-online {
        color: #34ce57
    }

    .chat-offline {
        color: #e4606d
    }

    .chat-messages {
        display: flex;
        flex-direction: column;
        max-height: 800px;
        overflow-y: scroll
    }

    .chat-message-left,
    .chat-message-right {
        display: flex;
        flex-shrink: 0
    }

    .chat-message-left {
        margin-right: auto
    }

    .chat-message-right {
        flex-direction: row-reverse;
        margin-left: auto
    }

    .py-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .px-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }

    .flex-grow-0 {
        flex-grow: 0 !important;
    }

    .border-top {
        border-top: 1px solid #dee2e6 !important;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<section>
    <div class="container">
        <main class="content">
            <div class="container p-0">
        
                <h1 class="h3 mb-3">Messages</h1>
        
                <div class="card">
                    <div class="row g-0">
                        <div class="col-12 col-lg-5 col-xl-3 border-right">
        
                            <div class="px-4 d-none d-md-block">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <input type="text" class="form-control my-3" placeholder="Search...">
                                    </div>
                                </div>
                            </div>
                            @if($users)
                            @foreach($users as $user)
                                <a href="{{ route('userChat', ['id' => @$user['id']]) }}" class="list-group-item list-group-item-action border-0">
                                    {{-- <div class="badge bg-success float-right">5</div> --}}
                                    <div class="d-flex align-items-start">
                                        @if(@$user['profilepic'] != null || @$user['profilepic'] != '')
                                            <img src="{{ URL::asset('upload/user/profile/' . @$user['profilepic']) }}" class="rounded-circle mr-1"
                                                alt="Profile Picture" width="40" height="40">
                                        @else
                                            <img src="{{ URL::asset('upload/user/profile/default.png') }}" class="rounded-circle mr-1"
                                                alt="Profile Picture" width="40" height="40">
                                        @endif
                                        <div class="flex-grow-1 ml-3">
                                            {{ @$user['name'] }}
                                            <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            @endif
                            <hr class="d-block d-lg-none mt-1 mb-0">
                        </div>
                        <div class="col-12 col-lg-7 col-xl-9">
                            <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                <div class="d-flex align-items-center py-1">
                                    <div class="position-relative">
                                        @if(@$selectedUser->profilepic != null || @$selectedUser->profilepic != '')
                                            <img src="{{ URL::asset('upload/user/profile/' . @$selectedUser->profilepic) }}"
                                            class="rounded-circle mr-1" alt="No Img" width="40" height="40">
                                        @else
                                            <img src="{{ URL::asset('upload/user/profile/default.png') }}" class="rounded-circle mr-1" alt="No Img" width="40" height="40">
                                        @endif
                                    </div>
                                    <div class="flex-grow-1 pl-3">
                                        <strong>{{ @$selectedUser->name }}</strong>
                                        {{-- <div class="text-muted small"><em>Typing...</em></div> --}}
                                    </div>
                                    {{-- <div>
                                        <button class="btn btn-primary btn-lg mr-1 px-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-phone feather-lg">
                                                <path
                                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                </path>
                                            </svg></button>
                                        <button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-video feather-lg">
                                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                            </svg></button>
                                        <button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal feather-lg">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg></button>
                                    </div> --}}
                                </div>
                            </div>
        
                            <div class="position-relative">
                                <div class="chat-messages p-4">
                                    
                                    @if(@$messages)
                                    <div id="div-reload-messages">
                                    @foreach($messages as $message)
                                    @if(@$selectedUser->id == @$message->receiver_id)
                                    <div class="chat-message-right pb-4">
                                        <div>
                                            @if(@$selectedUser->profilepic != null || @$selectedUser->profilepic != '')
                                                <img src="{{ URL::asset('upload/user/profile/' . @Auth::user()->profilepic) }}" class="rounded-circle mr-1"
                                                alt="No Img" width="40" height="40">
                                            @else
                                                <img src="{{ URL::asset('upload/user/profile/default.png') }}" class="rounded-circle mr-1" alt="No Img"
                                                width="40" height="40">
                                            @endif
                                            <div class="text-muted small text-nowrap mt-2">{{@$message->created_at->diffForHumans()}}</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                            <div class="font-weight-bold mb-1">You</div>
                                            {{@$message->message}}
                                        </div>
                                    </div>
                                    @else
                                    <div class="chat-message-left pb-4">
                                        <div>
                                            @if(@$selectedUser->profilepic != null || @$selectedUser->profilepic != '')
                                            <img src="{{ URL::asset('upload/user/profile/' . @$selectedUser->profilepic) }}" class="rounded-circle mr-1"
                                                alt="No Img" width="40" height="40">
                                            @else
                                            <img src="{{ URL::asset('upload/user/profile/default.png') }}" class="rounded-circle mr-1" alt="No Img" width="40"
                                                height="40">
                                            @endif
                                            <div class="text-muted small text-nowrap mt-2">{{@$message->created_at->diffForHumans()}}</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                            <div class="font-weight-bold mb-1">{{@$selectedUser->name}}</div>
                                            {{@$message->message}}
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
        
                            <div class="flex-grow-0 py-3 px-4 border-top">
                                <div class="input-group">
                                    {{-- <form action="" name="formConfirm" method="post"> --}}
                                        {{-- @csrf --}}
                                        {{-- hostess id --}}
                                        <input type="hidden" name="receiver_id" value="{{@$selectedUser->id}}">
                                        {{-- user id --}}
                                        <input type="hidden" name="sender_id" value="{{ Auth::user()->id }}">
                                    <input type="text" id="message" name="message" class="form-control" placeholder="Type your message">
                                    <button class="btn btn-primary" id="sendMessageToHostess">Send</button>
                                </div>
                                <div id="messageError"></div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
    


</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    $(document).ready(function () {
    
    $('#sendMessageToHostess').click(function(){
    var flag = 1;
    var message = $('#message').val();
    // var hostessCredit = $("input[name='hostessCredit']").val();
    // var userCredit = $("input[name='userCredit']").val();
    var receiver_id = $("input[name='receiver_id']").val();
    var sender_id = $("input[name='sender_id']").val();
    var fd = new FormData();
    
    fd.append('message', message);
    // fd.append('hostessCredit', hostessCredit);
    // fd.append('userCredit', userCredit);
    fd.append('receiver_id', receiver_id);
    fd.append('sender_id', sender_id);
    
    if (message == '' || message == null)
    {
        flag = 0;
        $("#messageError").html('<span class="errorMessage" style="color:red;">Message is Required</span>');
    }

    if (flag == 1)
    {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
                url: "{{ route('sendMessageToHostess') }}",
                type: "POST",
                data:fd,
                cache: false,
                processData: false,
                contentType: false,
                success: function(result) {
                var data = JSON.parse(result);
                if (data.success) {
                    //enable the button
                    // saveBtn.innerHTML = "SAVE";
                    // $('#saveBtn').removeClass('disabled');
                    // Add modal after success
                    // $("#myModal").hide();
                    // $.jGrowl("Message sent successfully.", { life: 10000, theme: 'changeCount'});
                    // location.reload();
                    $( "#div-reload-messages").load(" #div-reload-messages");
                    $('#message').val('');
                    // $("#myModal").show();
                    // $(".close").click(function(){
                    // });
                    // alert('Yes done..');
                }
            },
            error: function(xhr, status, error) {}
        });
    }
    });
});
setInterval(function () {
    $( "#div-reload-messages").load(" #div-reload-messages");
}, 5000);

</script>
@endsection