<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=1.0, initial-scale=1.0">
  <title>Enroll</title>
</head>
<body>
    <h1> STUDENT MONTLY AND YERLY INFO </h1>


  <?php
  
  require_once "Models/db_config.php";
  require_once "Controllers/studentControl.php";
  $ad_date="";
  $E_student=Enrollinfo($ad_date);

  ?>
  
  <table>
       <tr>
       <tr>
      <td>Admission Date :</td>
      <td>: <select name="Adate"><option disabled selected>---Date---</option>
        <?php
    for($i=1; $i<=31; $i++)
    {
       if($Adating==$i){
      echo "<option> $i </option>";
    }
    else {
  echo  "<option>$i</option>";
    }

    }
    ?>
      </select>

        <select name="AMonth"> <option disabled selected>---Month---</option>
          <?php
            foreach($array as $p){
                if($AMonth==$p){
                echo "<option selected>$p</option>";
              }
                else {
                    echo "<option> $p </option>";
                }
            }
          ?>
        </select>
         <select name="Ayear">
          <option disabled selected>---year---</option>
          <?php
  for($c=1920; $c<=2010; $c++)
  {
    if($Ayear==$c){
    echo "<option selected> $c </option>";
  }
  else {
    echo  "<option>$c</option>";
  }
  }

  ?>
    <form action="" method="post" enctype="multipart/form-data">
        </select>
      </td>
      <td><span> <?php echo $err_Adating;?></span>
        <span><?php echo $err_AMonth;?></span>
          <span><?php echo $err_Ayear;?> </span></td>

    </tr>

    <tr>
      <td colspan="2" align="right"><button type="submit" name="enroll_year" value="submit">SEE INFORMATION</button>

       </tr>

  </table>
  </form>  

  <?php
 echo "<table>";			

if(isset($_POST["enroll_year"])) {     
echo "<tr>";
echo "<td>S#NO1</td>";
echo "<td>UserId</td>";
echo "<td>Name</td>";
echo "<td>Email</td>";
echo "<td>admissiondate</td>";
echo "</tr>";


  $i = 1;
				foreach($E_student as $c){
					echo "<tr>";
						echo "<td>$i</td>";
            echo "<td>".$c["id"]."</td>";
            echo "<td>".$c["Name"]."</td>";
            echo "<td>".$c["Email"]."</td>";
						echo "<td>".$c["admissiondate"]."</td>";
					echo "</tr>";
					$i++;
				}
      }
			
	echo"</table>";
	?>


  
</body>
</html>