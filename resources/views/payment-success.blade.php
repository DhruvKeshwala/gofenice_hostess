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
                <a href="{{ route('profile.edit') }}" class="signupbtn signupbtnDark back-button">Back</a>
                <span>Response : </span><div id="demo"></div>
            </div>        
        </main>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    // console.log('response', localStorage.getItem("payment_response"));
    document.querySelector("#demo").textContent = localStorage.getItem("payment_response");
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
    },
    success: function(result) {
    },
    error: function(xhr, status, error) {}
    });
</script>