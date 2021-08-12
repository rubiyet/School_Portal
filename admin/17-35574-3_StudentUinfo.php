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

  <?php
		
        echo "<table border=1>";	 
      echo "<tr>";
      echo "<td>S#NO</td>";
      echo "<td>Id</td>";
      echo "<td>UserId</td>";
      echo "<td>Name</td>";
      echo "<td>Email</td>";
      echo "<td>Date Of Birth</td>";
      echo "<td>Blood Group</td>";
      echo "<td>admissiondate</td>";
      echo "<td>graduationdate</td>";
      echo "<td>religion</td>";
      echo "<td>Nationality</td>"; 
      echo "<td>Image</td>"; 
      echo  "<td>Operations</td>";
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
                  echo "<td>".$c["bloodgroup"]."</td>";  
                  echo "<td>".$c["admissiondate"]."</td>";  
                  echo "<td>".$c["graduationdate"]."</td>"; 
                  echo "<td>".$c["religion"]."</td>"; 
                  echo "<td>".$c["nationality"]."</td>"; 
                  echo "<td>".$c["img"]."</td>";   
                  echo '<td><a href="17-35574-3_StudentUpdate.php?id= '.$c["id"].'">Update</a></td>';  
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


    
</body>
</html>