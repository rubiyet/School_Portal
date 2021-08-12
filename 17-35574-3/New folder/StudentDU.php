<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STUDENT INFORMANTION PAGE</title>
</head>
<body>

<?php include 'admin_header.php';
	include 'Controllers/studentControl.php';
	$student = getallStudent();
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All STUDENT INFORMATION EDIT PAGE </h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> id</th>
      <th> Name</th>
      <th> Email</th>
			<th> </th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach($categories as $c){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["name"]."</td>";
						echo '<td><a href="Studentenroll.php?id='.$c["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
      
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>
  
</body>
</html>