<div id="demo"></div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    console.log('response', localStorage.getItem("payment_response"));
    var session_data = localStorage.getItem("payment_response");
    $.ajax({
      /* the route pointing to the post function */
      url: 'http://localhost/stripe-sample-code/dbquery.php',
      type: 'POST',
      /* send the csrf-token and the input to the controller */
      data: { response : session_data},
      dataType: 'JSON',
      /* remind that 'data' is the response of the AjaxController */
      success: function (data) { 
          console.log('Successful response');
      }
  });  
</script>