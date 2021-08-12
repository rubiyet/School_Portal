<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Deleted</title>
</head>
<body>
    <?php
     require_once "Models/db_config.php";
     require_once "Controllers/studentControl.php";
     
      $id = $_GET["id"];
	  $c = Studentdelete($id);
   


	?>
    <h5 class="text-danger"><?php echo $err_db;?></h5>

     <h1>Record has been Deleted form Table</h1> 


     <a href="StudentAdmitted.php">Go to previous page</a>
   
</body>
</html>