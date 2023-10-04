<script>
function foo()
            {
               if(confirm('You\'re about to make a online payment. Click "Cancel" to review the data before proceeding or click "Ok" to confirm the details for payment.'))
               {
                 alert("confirm ok");
                 document.getElementById("form_id").submit();// Form submission
               }
               else {
                     return false;                   
               }                                      
            }
		

			</script>
			<form method="post" id="form_id" action="/actions.php/" data-js-validate="true" data-js-highlight-state-msg="true" data-js-show-valid-msg="true">
    <input type="text" name="amount[]" placeholder="Amount" class="inputChangeVal" data-js-input-type="number" />
    <button class="btn" type="submit" name="confirm" onclick="foo();" >Pay Now</button>
</form>