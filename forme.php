<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
.form-horizontal .form-group
{
margin-right: 45px;
margin-left: 100px;
}
.error {color: #FF0000;}

</style>
</head>
<body>
<div class="container">
<div class="row">
<form class="well form-horizontal" action="dbphp.php" method="post" onsubmit="return valid()" id="contact_form" autocomplete="off">
<fieldset>

<legend><center><h2><b>Dealer / Suppliers Registration Form</b></h2></center></legend><br>
<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
<label>Name</label>
<input type="text" class="form-control"  id="name" placeholder="Enter Name" name="name" required>
</div>

<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
<label>Company Name / Business</label>
<input type="text" class="form-control" name="company_name" placeholder="Company Name / Business">
</div>


<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
<label>Email address</label>
<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
</div>


<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
<label>Mobile No</label>
<input type="text" name="mobile" class="form-control" id="mobile" placeholder="Contact No" onkeypress="return isNumber(event)" required>
</div>

<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
<label>Door / Flat No</label>
<input type="text" class="form-control" name="door_no" id="door" placeholder="Door / Flat No" required>
</div>

<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
<label>Street Name</label>
<input type="text" class="form-control" name="street" id="street" placeholder="Street Name" required>
</div>

<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
<label>Area / Locality</label>
<input type="text" class="form-control" name="area" id="Area" placeholder="Area / Locality" required>
</div>

<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
<label>City</label>
<input type="text" class="form-control" name="city" id="City" placeholder="City" required>
</div>

<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
<label>State</label>
<input type="text" class="form-control" name="state" id="State" placeholder="State" required>
</div>


<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
<label>Pin Code</label>
<input type="text" class="form-control" name="pin_code" id="pin_code" placeholder="Pin Code" onkeypress="return isNumber(event)" required>
</div>

<div class="form-group">
<label for="comment" class="about">How did you hear about FarmersGen ?</label>
<textarea class="form-control" name="about_here" rows="4" id="comment" placeholder="Comment with 100 characters..."></textarea>
</div>

<div class="form-group">
<label for="comment" class="about">Please let us know if you any question ?</label>
<textarea class="form-control" name="question" rows="4" id="comment" placeholder="Comment with 100 characters..."></textarea>
</div>


<div class="form-group">

<label class="col-md-4 control-label">What is your interest in FarmersGen?</label>

<div class="col-md-4 selectContainer">

<div class="input-group">
<select class="form-control selectpicker" id="FarmersGen" name="interest" >
<option value="">Select your Choice</option>
<option value="SOP">Wish to Supply for organic product</option>
<option value="DP">Dealership</option>
</select>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br><input type="submit" name="submit" class="btn btn-primary" value="submit">
</div>
</div>
</fieldset>

</form>
</div>
</div>

<script type="text/javascript">
function isNumber(evt) {
evt = (evt) ? evt : window.event;
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (charCode > 31 && (charCode < 48 || charCode > 57)) {
alert("Please enter only Numbers.");
return false;
}

return true;
}



function valid()
{
var pin_code=document.getElementById("pin_code");
var user_mobile=document.getElementById("mobile");
var user_id=document.getElementById("email");
var pat1=/^\d{6}$/;
var pattern=/^\d{10}$/;
var filter=/^([a-z A-Z 0-9 _\.\-])+\@(([a-z A-Z 0-9\-])+\.)+([a-z A-z 0-9]{3,3})+$/;
if(!filter.test(user_id.value))
{
alert("Email is in www.gmail.com format");
user_id.focus();
return false;
}
if(!pattern.test(user_mobile.value))
{
alert("Phone nubmer is not valid ");
user_mobile.focus();
return false;
}
if(!pat1.test(pin_code.value))
{
alert("Pin code should be 6 digits ");
pin_code.focus();
return false;
}
}
</script>
</body>
</html>
