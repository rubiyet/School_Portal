

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stusdent Admitted Confirm</title>
</head>
<body>
<?php
  
  require_once "Models/db_config.php";
  require_once "Controllers/studentControl.php";
  $ad_date="";
  $E_student=Enrollinfo($ad_date);

  ?>


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
                    echo "<td>".$c["admissiondate"]."</td>";   
                    echo '<td><a href="17-35574-3_StudentDel.php?id= '.$c["id"].'">Delete</a></td>';  
                     echo "</tr>";
            
                            $i++;
                

                
                        }
                        echo"</table>";
                       
                     //echo   '<td><a href="StudentAdmitted.php?id= '.$c["userid"].'"  onclick="return Studentdelete()">Delete</a></td>';         
                    // echo '<td colspan="2" align="right"><button type="submit" name="del_student" value="submit">Delete</button> </td>';
                    
        
            ?>

     

            <br>
            <br>
            <br>
            <br>



       <a href="student.php">Go To Student Page</a> 
        
    
</body>
</html>


 <?php
		

        
        