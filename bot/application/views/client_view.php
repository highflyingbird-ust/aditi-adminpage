<!DOCTYPE html>
<html>
<title>BOT</title>
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
	<div class="w3-col s1">
    
  <?php $this->load->view('nav'); ?>
</div>

<div class="w3-col s7 ">

	<br><br><br><br><br><br>

    <table border=1 align=center><caption style=color:white;background-color:Tomato;>&nbsp;&nbsp;&nbsp;&nbsp;CLIENT DETAILS</caption>
       <tr bgcolor=#87cefa;>
			<th>id</th>
			<th>client_name</th>
			<th>primary_poc</th>
			<th>sector</th>
			<th>demo_type</th>
			<th>&nbsp;&nbsp;miscellaneous</th>
			<!-- <th></th> -->
			
		</tr>
        
	<?php
foreach($data as $key => $value)

		{
				echo "<tr><td><center>";
				echo "<br>".$value->id;
				echo "</center></td><td><center>";
				echo "<br>".$value->client_name;
				echo "</center></td><td><center>";
				echo "<br>".$value->primary_poc;
				echo "</center></td><td><center>";
				echo "<br>".$value->sector;
				echo "</center></td><td><center>";
				echo "<br>".$value->demo_type;
				echo "</center></td><td><center>";
				echo "<br>".$value->miscellaneous;
				echo "</center></td></tr>";
				// echo "<a href='search_edit/$value->id'><font color='green'><b>Edit</b></font></a>";
				
				// echo "</td></tr>";
			
		}
		?>
	</table>
<br><br>

</div>


</div>

</body>
</html>
<!-- 
echo "</td><td>";
				echo "<a href='search_delete/$value->id'><font color='red'><b>Remove</b></font></a>"; -->