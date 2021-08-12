<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STUDENT ADMISSON</title>
    <?php
      require_once "Controllers/studentControl.php";


      ?>
  <script>
  

  </script>    

  </head>
  <body>
    <h1 align="middle"><b> STUDENT ADMISSION PAGE</b>  </h1>


<form class="" onsubmit="validate()" action="" method="post" enctype="multipart/form-data">

<table>

  <tr>
  <td>Id</td>
  <td>: <input type="text" name="id" value="<?php echo $userid;?>" placeholder="Your id ...."> </td>
  <td><span> <?php echo $err_userid;?> </span></td>
  </tr>


  <tr>
  <td>Name</td>
  <td>: <input type="text" name="name" value="<?php echo $name;?>" placeholder="Your Name........">  </td>
  <td><span> <?php echo $err_name;?> </span></td>
  </tr>
  <td>Email</td>
  <td>: <input type="text" name="email" value="<?php echo $email;?>" placeholder="Your Email........">  </td>
  <td><span> <?php echo $err_email;?> </span></td>
</tr>


  <tr>
  <td>Gender</td>
  <td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
  <td><span> <?php echo $err_gender;?> </span></td>
</tr>
<tr>
  <td>Blood Group :</td>
  <td>: <select name="blood"><option disabled selected>---select---</option>
    <?php
foreach($array2 as $k)
{
  if($array2==$k)
  {
echo "<option selected> $k </option>";}
else {
    echo "<option> $k </option>";
}

}
?>
  <td><span> <?php echo $err_blood;?> </span></td>

  </tr>

    <td>Date of Birth</td>
    <td>: <select name="date"><option disabled selected>---Date---</option>
      <?php
    for($i=1; $i<=31; $i++)
    {
       if($dating==$i){
         echo "<option selected>$i</option>";
        }
        else{
    echo "<option> $i </option>";
    }
    }
    ?>
    </select>

      <select name="Month"> <option disabled selected>---Month---</option>
        <?php
          foreach($array as $p){
            if($Month==$p){
              echo "<option selected>$p</option>";
            }
            else{
              echo "<option selected>$p</option>";
            }

          }
        ?>
      </select>
       <select name="year">
        <option disabled selected>---year---</option>
        <?php
    for($j=1920; $j<=2010; $j++)
    {
    if($year==$j){
    echo "<option selected> $j </option>";}
    else {
    echo "<option> $j </option>";
    }
    }
    ?>

      </select>
    </td>
    <td><span> <?php echo $err_dating;?></span>
      <span><?php echo $err_Month;?></span>
        <span><?php echo $err_year;?> </span></td>
    </tr>


    <tr>
      <td>Religion :</td>
      <td>: <select name="religion"><option disabled selected>---select---</option>
        <?php
    foreach($array3 as $l)
    {
      if($array3==$l)
          {echo "<option selected> $l </option>";}
          else{
            echo "<option> $l </option>";
          }
    }
    ?>
      </select>
      <td><span> <?php echo $err_religion;?> </span></td>
      </tr>

      <tr>
        <td>Nationality</td>
        <td>: <input type="radio" name="Nationality" value="Bangladeshi" <?php if($nation=="Bangladeshi") echo "checked"; ?> name="Nationality"> Bangladeshi <input name="Nationality" <?php if($nation=="Forigner") echo "checked"; ?> value="Forigner" type="radio"> Foriger </td>
        <td><span> <?php echo $err_nation;?> </span></td>
      </tr>

      <tr>
        <td>Father's Name</td>
        <td>: <input type="text" name="fname" value="<?php echo $fname;?>" placeholder="Fater's Name........">  </td>
        <td><span> <?php echo $err_fname;?> </span></td>
      </tr>
      <tr>
        <td>Mother's Name</td>
        <td>: <input type="text" name="mname" value="<?php echo $mname;?>" placeholder="Mother's Name........">  </td>
        <td><span> <?php echo $err_mname;?> </span></td>
      </tr>
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

        </select>
      </td>
      <td><span> <?php echo $err_Adating;?></span>
        <span><?php echo $err_AMonth;?></span>
          <span><?php echo $err_Ayear;?> </span></td>

    </tr>

    <tr>

  <tr>
  <td>Graduation Date </td>
  <td>: <select name="Gdate"><option disabled selected>---Date---</option>
    <?php
  for($i=1; $i<=31; $i++)
  {
  if($Gdating==$i){
  echo "<option selected> $i </option>";}
  else {
  echo  "<option>$i</option>";
  }
  }
  ?>
  </select>

    <select name="GMonth"> <option disabled selected>---Month---</option>
      <?php
        foreach($array as $p){
          if($GMonth==$p){
            echo "<option selected>$p</option>";
        }
        else {
            echo "<option> $p</option>";
        }
      }
      ?>
    </select>
     <select name="Gyear">
      <option disabled selected>---year---</option>
      <?php
  for($j=1920; $j<=2010; $j++)
  {
  if($Gyear==$j){
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

  <tr>
    <td>Present Address </td>
    <td>: <input type="text" name="address" value="<?php echo $address;?>" placeholder="Your address ...."> </td>
    <td><span> <?php echo $err_address;?> </span></td>

  </tr>
  <tr>
    <td>Parmanent Address </td>
    <td>: <input type="text" name="Paddress" value="<?php echo $paddress;?>" placeholder="Your permanent address ...."> </td>
    <td><span> <?php echo $err_paddress;?> </span></td>

  </tr>

  <tr>
    <td>Payment Statues </td>
    <td>: <input type="text" name="payment" value="<?php echo $payment;?>" placeholder="Amount ...."> </td>
    <td><span> <?php echo $err_payment;?> </span></td>

  </tr>

  <tr>
  <td>Contact Number </td>
  <td> : <input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Number...."> </td>
  <td> <span> <?php echo $err_phone;?> </span></td>
  </tr>
<tr>
<td>
   <input type="file" name="image" id="image">
   </td>
    <td><?php echo $error_img;?></td>
  </tr>
                                                


  <tr>
      <td colspan="2" align="right"><button type="submit" name="add_student" value="submit">ADD STUDENT</button>
        <td colspan="2" align="right"><button type="reset" name="reset" value="Rest">  RESET   </button>
      </tr>

      </table>
    </form>
  </body>
</html>
