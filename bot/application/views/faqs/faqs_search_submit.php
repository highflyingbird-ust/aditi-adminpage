<!DOCTYPE html>
<html>
<title>ADITI Admin Dashboard</title>
<!-- <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" /> -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href ="<?php echo base_url().'bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/font-awesome.min.csss';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/animate.css';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/overwrite.cs';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/animate.min.css';?>" rel="stylesheet">	
	<link href ="<?php echo base_url().'bootstrap/css/style.css';?>" rel="stylesheet">	
	<link href ="<?php echo base_url().'bootstrap/js/jquery-2.1.1.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/bootstrap.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/parallax.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/wow.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/jquery.easing.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/functions.js';?>" rel="stylesheet">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<body class="w3-light-grey">

<!-- Top container -->
<div class="row">
	<!-- <div class="col-sm-3"> -->
<?php $this->load->view('nav'); ?>
</div>


<?php echo form_open('seller_ctrl/faqs_search1');
?>
<!-- <div class="col-sm-8"> -->
<center>
	<br><br><br><br><br>
	<span style="font-weight:bold">&nbsp;&nbsp;&nbsp;<?php if(isset($message)) echo $message; ?>&nbsp;&nbsp;&nbsp;</span>
	
	<br><br>
<input type="text" name="search" placeholder="Enter the Client-ID" required="">
<br><br>
<input type="submit"  name="submit" value="search" >
</center>
<!-- </div> -->
<?php form_close(); ?>


</div>


</body>
</html>