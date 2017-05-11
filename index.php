<?php
require_once('header.php');

/*
$qry = "SELECT * FROM accounts";
$row = mysql_query($qry);
$getrow = mysql_fetch_assoc($row);
*/
?>
<script type="text/javascript">
 
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
<div class="row">
	<div class="col-md-12">
		  <form action="" name="registration" method="POST">
	<div class="row">
		<div class="col-md-6">
		    <label for="firstname">First Name&nbsp;<span class="error">*</span></label>
		    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="John"/>
		   </div>
   </div>

   <div class="row">
		<div class="col-md-6">
		    <label for="lastname">Last Name</label>
		    <input type="text"  class="form-control" name="lastname" id="lastname" placeholder="Doe"/>
	
     </div>
   </div>
   <div class="row">
		<div class="col-md-6">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="john@doe.com"/>
     </div>
   </div>
    <div class="row">
		<div class="col-md-6">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"/>
     </div>
   </div>	
    <button type="submit" class="btn btn-default">Register</button>

  </form>
	</div>
</div>
<?php
require_once('footer.php');
?>
