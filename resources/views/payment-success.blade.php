@include('layouts.header')
<style>
    .success-body {
        text-align: center;
        color: #07b507;
    }
</style>
<div class="container">
    <div class="row">
        <main class="form-signin w-100 mx-auto mt-5">
            <div class="section text-center">
                {{-- <img src="{{ URL::asset('images/payment-success.png') }}" alt=""> --}}
                <h1 class="success-body mb-5">Your Payment done successfully..!</h1>
                {{-- <a href="{{ route('profile.edit') }}" class="signupbtn signupbtnDark back-button">Back</a> --}}
                {{-- <span>Response : </span>
                <div id="demo"></div> --}}
            </div>
        </main>
    </div>
</div>
<script>
    // console.log('response', localStorage.getItem("payment_response"));
    // console.log('response1', localStorage.getItem("payment_response1"));
    // console.log('paymentIntent', localStorage.getItem("paymentIntent"));
    // document.querySelector("#demo").textContent = localStorage.getItem("payment_response");
    var message_body = localStorage.getItem("message_body");
    var receiver_hostess_id = localStorage.getItem("receiver_hostess_id");
    var credits = localStorage.getItem("credits");
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "{{ url(app()->getLocale() . '/save_response') }}",
        type: "POST",
        data: {
            response: localStorage.getItem("payment_response"),
            message_body:message_body,
            receiver_hostess_id:receiver_hostess_id,
            credits:credits,
        },
        success: function(result) {
            window.location.href='../en/user-chat/'+receiver_hostess_id;
        },
        error: function(xhr, status, error) {}
    });
</script>