<html>
<head>
	<title></title>
	<!-- <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" /> -->
</head>
<body>
<div class="col-sm-8">

	<br><br><br><br><br>
	<table border=1>
		<tr>
			<td>id</td>
			<td>innovation_area</td>
			<td>asset_name</td>
			<td>asset_summary</td>
			<td>asset_poc</td>
			<td>asset_type</td>
			<td>asset_keywords</td>
			<td>video</td>
			<td></td>
			
		</tr>

	<?php
foreach($data as $key => $value)

		{
				echo "<tr><td>";
				echo "<br>".$value->id;
				echo "</td><td>";
				echo "<br>".$value->innovation_area;
				echo "</td><td>";
				echo "<br>".$value->asset_name;
				echo "</td><td>";
				echo "<br>".$value->asset_summary;
				echo "</td><td>";
				echo "<br>".$value->asset_poc;
				echo "</td><td>";
				echo "<br>".$value->asset_type;
				echo "</td><td>";
				echo "<br>".$value->asset_keywords;
				echo "</td><td>";
				echo "<br>".$value->video;
				echo "</td><td>";
				echo "<a href='search_edit/$value->id'><font color='green'><b>Edit</b></font></a>";
				
				echo "</td></tr>";
			
		}
		?>
	</table>
	<br><br>
	</div>
</body>
</html>