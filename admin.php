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
<form class="well form-horizontal" action="adminview.php" method="post" onsubmit="return valid()" id="contact_form" autocomplete="off">
<fieldset>

<legend><center><h2><b>Dealer / Suppliers Registration Details</b></h2></center></legend><br>
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
</body>
</html>
