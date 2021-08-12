<?php
    require_once "header.php";  
     
      $id = $_GET["id"];
	  $c = Studentdelete($id);
   


	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
</head>
<body>
<table width="100%">
            <tr>
                <td width="18.5%"></td>
                <td width="63">
                    <table width="100%" height="830" valign="top" >
                        <tr>
                            <td width="23%" valign="top">
                                <?php include 'navbar.php';?>
                            </td>
                            <td width="77%" valign="top">
                                <table id="frame">
                                    <tr>
                                        <td colspan="3" id="title" valign="center">STUDENT PERSONAL INFORMATION DELETE</td>
                                    </tr>
                                    <tr>
                                        <td valign="top" align="center">

    <h5 class="text-danger"><?php echo $err_db;?></h5>

     <h1>Record has been Deleted form Table</h1> 


     <a href="17-35574-3_StudentAdmitted.php">Back</a>
     </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="18.5%"></td>
            </tr>
        </table>
   
</body>
</html>