<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.from-control{
padding: 6px 40px;

}
.about
	{
		margin-left: 350px;
		margin-top: 20px;
	}

	textarea
	{
		width:70px;
	}


	textarea.form-control
	{

		    width: 350px;
		margin-left: 320px;
	}
</style>
</head>
<body>
<div></div>
<div class="container">

<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Dealer Registration Form</b></h2></center></legend><br>





<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">First Name</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">

<input  name="first_name" placeholder="First Name" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Last Name</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">What is your interest in FormersGen?</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
<select name="department" class="form-control selectpicker">
<option value="">Select your Choice</option>
<option>Suppliers for organic product</option>
<option>Dealership</option>
</select>
</div>
</div>
</div>






<div class="form-group">
<label class="col-md-4 control-label">Company Name</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
<input name="Company Name" placeholder="Company Name" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Door / Flat No</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input  name="Door / Flat No" placeholder="Username" class="form-control"  type="text">
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Street Name</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input  name="Street Name" placeholder="Street Name" class="form-control"  type="text">
</div>
</div>
</div>



<div class="form-group">
<label class="col-md-4 control-label">Area / Locality</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input  name="Area / Locality" placeholder="Area / Locality" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >City</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input name="City" placeholder="City" class="form-control"  type="password">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >State</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input name="confirm_password" placeholder="State" class="form-control"  type="password">
</div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Contact No.</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input name="contact_no" placeholder="(639)" class="form-control" type="text">
</div>
</div>
</div>

<div class="form-group">
  <label for="comment" class="about">How did you hear about FormersGen ?</label>
  <textarea class="form-control" rows="4" id="comment"></textarea>
</div>


	<div class="form-group">
  <label for="comment" class="about">Please let us know if you any question ?</label>
  <textarea class="form-control" rows="4" id="comment"></textarea>
</div>




<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->
<script>


$(document).ready(function() {
$('#contact_form').bootstrapValidator({
// To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
feedbackIcons: {
valid: 'glyphicon glyphicon-ok',
invalid: 'glyphicon glyphicon-remove',
validating: 'glyphicon glyphicon-refresh'
},
fields: {
first_name: {
validators: {
stringLength: {
min: 2,
},
notEmpty: {
message: 'Please enter your First Name'
}
}
},
last_name: {
validators: {
stringLength: {
min: 2,
},
notEmpty: {
message: 'Please enter your Last Name'
}
}
},
user_name: {
validators: {
stringLength: {
min: 8,
},
notEmpty: {
message: 'Please enter your Username'
}
}
},
user_password: {
validators: {
stringLength: {
min: 8,
},
notEmpty: {
message: 'Please enter your Password'
}
}
},
confirm_password: {
validators: {
stringLength: {
min: 8,
},
notEmpty: {
message: 'Please confirm your Password'
}
}
},
email: {
validators: {
notEmpty: {
message: 'Please enter your Email Address'
},
emailAddress: {
message: 'Please enter a valid Email Address'
}
}
},
contact_no: {
validators: {
stringLength: {
min: 12,
max: 12,
notEmpty: {
message: 'Please enter your Contact No.'
}
}
},
department: {
validators: {
notEmpty: {
message: 'Please select your Department/Office'
}
}
},
}
}
})
.on('success.form.bv', function(e) {
$('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
$('#contact_form').data('bootstrapValidator').resetForm();

// Prevent form submission
e.preventDefault();

// Get the form instance
var $form = $(e.target);

// Get the BootstrapValidator instance
var bv = $form.data('bootstrapValidator');

// Use Ajax to submit form data
$.post($form.attr('action'), $form.serialize(), function(result) {
console.log(result);
}, 'json');
});
});</script>
</body>
</html>
