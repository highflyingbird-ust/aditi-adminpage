<!DOCTYPE html>
<html>
<title>ADITI Admin Dashboard</title>
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
	<!-- <div class="col-sm-4"> -->
		 <?php $this->load->view('nav'); ?>
<!-- </div> -->

		 <?php echo form_open('seller_ctrl/clients1');
		?>
		
<!-- <div class="col-sm-8"> -->
		<center>
			<br><br><br>
			<span style="font-weight:bold">&nbsp;&nbsp;&nbsp;<?php if(isset($message)) echo $message; ?>&nbsp;&nbsp;&nbsp;</span>
			<br><br>
			<table border="1">

			<?php 
			foreach($data as $rw)
				{
					?>
				<tr>
					<td><center>&nbsp;&nbsp;&nbsp;<span style="font-weight:bold">ID</span>&nbsp;&nbsp;&nbsp;</center></td>
					<td>
						<input type="text" id="id" name="id" size=50 value="<?php echo $rw->id+1;?>"readonly>
					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				<tr>
					<td><center>&nbsp;&nbsp;&nbsp;<span style="font-weight:bold">Client</span>&nbsp;&nbsp;&nbsp;</center></td>
					<td>
						<textarea name="client" id="client" cols="50"></textarea>
					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				<tr>
					<td><center>&nbsp;&nbsp;&nbsp;<span style="font-weight:bold">Primary Poc</span>&nbsp;&nbsp;&nbsp;</center></td>
					<td>
						<textarea name="primary_poc" id="primary_poc" cols="50"></textarea>
					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				<tr>
					<td><center>&nbsp;&nbsp;&nbsp;<span style="font-weight:bold">Sector</span>&nbsp;&nbsp;&nbsp;</center></td>
					<td>
						<textarea name="sector" id="sector" cols="50"></textarea>
					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				<tr>
					<td height="50px"><center>&nbsp;&nbsp;&nbsp;<span style="font-weight:bold">Demo Type</span>&nbsp;&nbsp;&nbsp;</center></td>
					<td height="50px">
						<!-- <textarea name="demo_type" id="demo_type" cols="50"></textarea> -->
						&nbsp;&nbsp;&nbsp;&nbsp;
						<input name="demo_type" value="Quick" id="demo_type" type="radio" size=100>
						Quick&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input name="demo_type" value="Detailed" id="demo_type" type="radio" size=100>
						Detailed

					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				<tr>
					<td><center>&nbsp;&nbsp;&nbsp;<span style="font-weight:bold">Miscellaneous</span>&nbsp;&nbsp;&nbsp;</center></td>
					<td>
						<textarea name="miscellaneous" id="miscellaneous" cols="50"></textarea>
					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				
				<tr>
					<td colspan="2">
						<center>
							<input type="submit" name="insert" value="Store" class="w3-blue" style=font-size:20px;>
						</center>
					</td>

				</tr>
			<?php } ?>
			</table>
		</center>
<!-- </div> -->
<?php form_close(); ?>

</div>
</body>
</html>