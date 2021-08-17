<?php
  
  require_once "header.php";  
  $ad_date="";
  $E_student=Enrollinfo($ad_date);

  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                        <td colspan="3" id="title" valign="center">STUDENT PERSONAL INFORMATION UPDATE</td>
                                    </tr>
                                    <tr>
                                        <td valign="top" align="center">

  <form action="" method="post" enctype="multipart/form-data" >

  <input type="text" placeholder="Search...."  onkeyup="searchStudent(this)" >
  <div id= "suggesstion"></div>
  <br>
  <br>
  <br>
  <div> <h3> Search For Date   </h3> </div>

  <input type="text" placeholder="search Dates by name...."  onkeyup="DateStudent(this)" >
  <div id= "suggesstion2"></div>
  <br>
  <br>
  <br>

  <?php
  
		
  echo "<table border=1>";	 
  echo "<tr>";
  echo "<td>S#NO</td>";
  echo "<td>Id</td>";
  echo "<td>UserId</td>";
  echo "<td>Name</td>";
  echo "<td>Email</td>";
  echo "<td>Date Of Birth</td>";
  echo "<td>admissiondate</td>";
  echo "<td>graduationdate</td>";
  echo "<td>Image</td>"; 
  echo  "<td>Operations</td>";
  echo  "<td>DATE OF STUDENT</td>";
  echo  "<td>UPDATE OF IMAGE</td>";

  echo "</tr>";
  
  
    $i = 1;
          foreach($E_student as $c){

               echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>".$c["id"]."</td>";
              echo "<td>".$c["userid"]."</td>";
              echo "<td>".$c["name"]."</td>";
              echo "<td>".$c["email"]."</td>";
              echo "<td>".$c["birthday"]."</td>"; 
              echo "<td>".$c["admissiondate"]."</td>";  
              echo "<td>".$c["graduationdate"]."</td>"; 
              echo "<td><img src='image/student/".$c["img"]."' width='50px' height='50px'></td>";   
              echo '<td><a href="17-35574-3_StudentUpdate.php?id= '.$c["id"].'">Update</a></td>';  
              echo '<td><a href="17-35574-3_Practice.php?id= '.$c["id"].'">ALL DATES UPDATE</a></td>';  
              echo '<td><a href="17-35574-3_ImageUpdate.php?id= '.$c["id"].'">FOR IMAGE UPDATE</a></td>';  
               echo "</tr>";
      
                      $i++;
          

          
                  }
                  echo"</table>";
                 
               //echo   '<td><a href="StudentAdmitted.php?id= '.$c["userid"].'"  onclick="return Studentdelete()">Delete</a></td>';         
              // echo '<td colspan="2" align="right"><button type="submit" name="up_student" value="submit">Delete</button> </td>';
              
  
      ?>
   

          <br>
          <br>
          <br>
          <br>



    


</form>

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

        <script src="js/17-35574-3_studentSearch.js"></script>

<script src="js/17-35574-3_DateSearch.js"></script>
    
</body>
</html>