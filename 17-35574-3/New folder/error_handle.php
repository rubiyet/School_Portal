<?php
      require_once "Controllers/studentControl.php";
      $id = $_GET["id"];
      $c = StudentforUpdate($id);


      ?>
      
      
      
      <tr>


      <td>Admission Date :</td>
      <td>: <select name="Adate">
      <?php
    for($i=1; $i<=31; $i++)
    {
       if($Adating==$c["admissiondate"]){
      echo "<option> $Adating </option>";
    }
    else {
  echo  "<option>$Adating</option>";
    }

    }
    ?>
      </select>

        <select name="AMonth"> 
          <?php
            foreach($array as $p){
                if($c["admissiondate"]==$p){
                echo "<option selected>$p</option>";
              }
                else {
                    echo "<option> $p </option>";
                }
            }
          ?>
        </select>
         <select name="Ayear">
          
          <?php
  for($c=1920; $c<=2010; $c++)
  {
    if($c["admissiondate"]==$c){
    echo "<option selected> $c </option>";
  }
  else {
    echo  "<option>$c</option>";
  }
  }

  ?>

        </select>
      </td>
      <td><span> <?php echo $err_Adating;?></span>
        <span><?php echo $err_AMonth;?></span>
          <span><?php echo $err_Ayear;?> </span></td>

    </tr>

    <tr>

  <tr>
  <td>Graduation Date </td>
  <td>: <select name="Gdate">
    <?php
  for($i=1; $i<=31; $i++)
  {
  if($c["graduationdate"]==$i){
  echo "<option selected> $i </option>";}
  else {
  echo  "<option>$i</option>";
  }
  }
  ?>
  </select>

    <select name="GMonth"> 
      <?php
        foreach($array as $p){
          if($c["graduationdate"]==$p){
            echo "<option selected>$p</option>";
        }
        else {
            echo "<option> $p</option>";
        }
      }
      ?>
    </select>
     <select name="Gyear">
     
      <?php
  for($j=1920; $j<=2010; $j++)
  {
  if($c["graduationdate"]==$j){
  echo "<option selected> $j </option>";
  }
  else {
  echo "<option> $j </option>";

  }
  }
  ?>

    </select>
  </td>
  <td><span> <?php echo $err_Gdating;?></span>
    <span><?php echo $err_GMonth;?></span>
      <span><?php echo $err_Gyear;?> </span></td>

  </tr>

