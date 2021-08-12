<?php
      require_once "header.php";


      ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
    <meta charset="utf-8">

  <script>
      var hasError=2;
      function get(id)
      {
        return document.getElementById(id);
      }
     function validate()
     {
       refresh();


       //===============================Name <Email , ID validations================================================
       if(get("userid").value=="")
        {
          hasError = true;
          get("err_userid").innerHTML="*userid required";
        }
        if(get("name").value=="")
        {
          hasError = true;
          get("err_name").innerHTML="*Name required";
        }
        if(get("email").value=="")
        {
          hasError = true;
          get("err_email").innerHTML="*email required";



        }


        if(get("fname").value == ""){
		error = 1;
		get("err_fname").innerHTML = "* Father Name Required";
	}
	else if(get("fame").value.length < 3){
		error = 1;
		get("err_fname").innerHTML = "*Father Name greater then 2 letter";
	}

  if(get("mname").value == ""){
		error = 1;
		get("err_mname").innerHTML = "*Mother Name required ";
	}
	else if(get("mname").value.length < 3){
		error = 1;
		get("err_mname").innerHTML = "*Mother Name must be greater then 2 letter";
	}
        
//=========================================blood ,ddate, ===================================

        if(get("blood").value=="")
        {
          hasError = true;
          get("err_blood").innerHTML="*blood group required";
        }

        if(get("date").value=="")
        {
          hasError = true;
          get("err_date").innerHTML="*Date required";
        }
        if(get("Month").value=="")
        {
          hasError = true;
          get("err_Month").innerHTML="*Month required";
        }
 
        if(get("year").value=="")
        {
          hasError = true;
          get("err_year").innerHTML="*year required";
        }
      
      //===============================gender validation===================================================

        if(!validategender()){
        hasError = true;
        get("err_gender").innerHTML = "*Gender Must be Required";
    }
    function validategender(){
        var gender = document.querySelector('input[name="gender"]:checked');
        if(gender == null){
            return false;
        }
        else{
            return true;
        }
    }

    //==============================contact number ,  address ,image ==========================

    if(get("phone").value == ""){
        hasError = true;
        get("phone").innerHTML = "*Contact Number Must be Required";
    }
    else if(isNaN(get("phone").value) == true){
        hasError = true;
        get("err_phone").innerHTML = "*Contact Number Must be Number";
    }

    if(get("address").value == ""){
        hasError = true;
        get("err_address").innerHTML = "*Present Address Must be Required";
    }
    if(get("paddress").value == ""){
        hasError = true;
        get("err_paddress").innerHTML = "*Present Address Must be Required";
    }



    if(get("img").files.length == 0){
        hasError = true;
        get("err_img").innerHTML = "*Image required";
    }
    else if(get("img").files[0].size >= 524288){
       hasError = true;
        get("err_img").innerHTML = "*File size must be excately .5 MB or 512 KB";
    }

    if(get("nation").value == ""){
        hasError = 1;
        get("err_nation").innerHTML = "*Must be need nationality";
    }
    else if(get("nation").value.length < 3){
        hasError = 1;
        get("err_nation").innerHTML = "*nationality  2 letter";
    }


      return !hasError;

     }


      function refresh()
      {
        hasError=2;
      }

  </script>    

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
                                        <td colspan="3" id="title" valign="center">STUDENT PERSONAL INFORMATION INSERT</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table id="">


<form class="" onsubmit=" return validate()" action="" method="post" enctype="multipart/form-data">



  <tr>
  <td>Id</td>
  <td>: <input  id="userid"  type="text" name="id" value="<?php echo $userid;?>" placeholder="Your id ...."> </td>
  <td><span  id="err_userid" > <?php echo $err_userid;?> </span></td>
  </tr>


  <tr>
  <td>Name</td>
  <td>: <input id="name" type="text" name="name" value="<?php echo $name;?>" placeholder="Your Name........">  </td>
  <td><span id="err_name"> <?php echo $err_name;?> </span></td>
  </tr>
  <td>Email</td>
  <td>: <input  id="email" type="text" name="email" value="<?php echo $email;?>" placeholder="Your Email........">  </td>
  <td><span id="err_email"  >  <?php echo $err_email;?> </span></td>
</tr>


  <tr>
  <td>Gender</td>
  <td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
  <td><span id="err_gender"  > <?php echo $err_gender;?> </span></td>
</tr>
<tr>
  <td>Blood Group :</td>
  <td>: <select id="blood" name="blood"><option disabled selected>---select---</option>
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
  <td><span id=err_blood> <?php echo $err_blood;?> </span></td>

  </tr>

    <td>Date of Birth</td>
    <td>: <select id="date" name="date"><option disabled selected>---Date---</option>
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

      <select name="Month" id="Month" > <option disabled selected>---Month---</option>
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
       <select name="year" id="year" >
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
    <td><span id="err_date" > <?php echo $err_dating;?></span>
      <span id="err_Month" > <?php echo $err_Month;?></span>
        <span id="err_year"><?php echo $err_year;?> </span></td>
    </tr>


    <tr>
      <td>Religion :</td>
      <td>: <select id ="religion" name="religion"><option disabled selected>---select---</option>
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
      <td><span id="err_religion"  > <?php echo $err_religion;?> </span></td>
      </tr>

      <tr>
        <td>Nationality</td>
        <td>: <input type="radio" name="Nationality" value="Bangladeshi" <?php if($nation=="Bangladeshi") echo "checked"; ?> name="Nationality"> Bangladeshi <input name="Nationality" <?php if($nation=="Forigner") echo "checked"; ?> value="Forigner" type="radio"> Foriger </td>
        <td><span id="err_nation" > <?php echo $err_nation;?> </span></td>
      </tr>

      <tr>
        <td>Father's Name</td>
        <td>: <input  id="fname" type="text" name="fname" value="<?php echo $fname;?>" placeholder="Fater's Name........">  </td>
        <td><span id="err_fname" > <?php echo $err_fname;?> </span></td>
      </tr>
      <tr>
        <td>Mother's Name</td>
        <td>: <input id="mname" type="text" name="mname" value="<?php echo $mname;?>" placeholder="Mother's Name........">  </td>
        <td><span id="err_mname" > <?php echo $err_mname;?> </span></td>
      </tr>
      <tr>


    <tr>
      <td>Admission Date :</td>
      <td>: <select id="date" name="Adate"><option disabled selected>---Date---</option>
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

        <select  id="Month" name="AMonth"> <option disabled selected>---Month---</option>
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
         <select id="year" name="Ayear">
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
      <td><span id="err_date" > <?php echo $err_Adating;?></span>
        <span id="err_Month" ><?php echo $err_AMonth;?></span>
          <span id="err_year" ><?php echo $err_Ayear;?> </span></td>

    </tr>

    <tr>

  <tr>
  <td>Graduation Date </td>
  <td>: <select id="date" name="Gdate"><option disabled selected>---Date---</option>
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

    <select id="Month" name="GMonth"> <option disabled selected>---Month---</option>
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
     <select id="year" name="Gyear">
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
  <td><span  id="err_date" > <?php echo $err_Gdating;?></span>
    <span id="err_Month" ><?php echo $err_GMonth;?></span>
      <span id="err_year" ><?php echo $err_Gyear;?> </span></td>

  </tr>

  <tr>
    <td>Present Address </td>
    <td>: <input id="address" type="text" name="address" value="<?php echo $address;?>" placeholder="Your address ...."> </td>
    <td><span id="err_address"  > <?php echo $err_address;?> </span></td>

  </tr>
  <tr>
    <td>Parmanent Address </td>
    <td>: <input id="paddress" type="text" name="Paddress" value="<?php echo $paddress;?>" placeholder="Your permanent address ...."> </td>
    <td><span id="err_paddress" > <?php echo $err_paddress;?> </span></td>

  </tr>

 <!--  <tr>
    <td>Payment Statues </td>
    <td>: <input type="text" name="payment" value="<?php echo $payment;?>" placeholder="Amount ...."> </td>
    <td><span> <?php echo $err_payment;?> </span></td>

  </tr>
 -->
  <tr>
  <td>Contact Number </td>
  <td> : <input id="phone" type="text" name="phone" value="<?php echo $phone;?>" placeholder="Number...."> </td>
  <td> <span id="err_phone" > <?php echo $err_phone;?> </span></td>
  </tr>
<tr>
<td>
   <input id="img" type="file" name="image" id="image">
   </td>
    <td> <span id=" err_img" > <?php echo $error_img;?></span> </td>
  </tr>
                                                


  <tr>
      <td colspan="2" align="right"><button type="submit" name="add_student" value="submit" id="button10">Insert</button>
        <td colspan="2" align="right"><button type="reset" name="reset" value="Rest" id="button10">Reset</button>
      </tr>

      
    </form>
    </table>
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
