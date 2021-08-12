<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Update</title>

    <script>
      var hasError=false;
      function get(id)
      {
        return document.getElementById(id);
      }
     function validate()
     {
       refresh();


       //===============================Name <Email , ID validations================================================
       
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
        get("err_nation").innerHTML = "*nationality must be greater then 2 letter";
    }


      return !hasError;

     }


      function refresh()
      {
        hasError=false;
      }

  </script>    



</head>
<body>
          <h1>Student Update Page</h1>
          <?php
      require_once "Controllers/studentControl.php";
      $id = $_GET["id"];
      $c = StudentforUpdate($id);


      ?>




<form action=""  onsubmit="return validate()" method="post" enctype="multipart/form-data" class="form-horizontal form-material">      
 
<table>
  <tr>
  <td>Name</td>
  <td>: <input id="name" type="text" name="name" value="<?php echo $c["name"];?>" >  </td>
  <td><span id="err_name"> <?php echo $err_name;?> </span></td>
  </tr>
  <td>Email</td>
  <td>: <input type="text" name="email" value="<?php echo $c["email"];?>">  </td>
  <td><span> <?php echo $err_email;?> </span></td>
</tr>


  <tr>
  <td>Gender</td>
  <td>: <input type="radio" value="Male" <?php if($c["gender"]=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($c["gender"]=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
  <td><span>  </span></td>
</tr>
<tr>
  <td>Blood Group :</td>
  <td>: <input type="text"  value="<?php echo $c["bloodgroup"];?>" ></td>

  </tr>


  <tr>

  <td>Date of Birth</td>
  <td>: <input type="text"  value="<?php echo $c["birthday"];?>" ></td>
    </td>

    </tr>


    </tr>


    <tr>
      <td>Religion :</td>
      <td>: <input type="text"  value="<?php echo $c["religion"];?>" ></td>
    
    </td>
      </tr>
   <tr>
      <td>Admission Date</td>
  <td>: <input type="text"  value="<?php echo $c["admissiondate"];?>" ></td>
  </tr>
  <tr>
  <td>Graduation Date :</td>
  <td>: <input type="text"  value="<?php echo $c["graduationdate"];?>" ></td>
  </tr>
      <tr>
        <td>Nationality</td>
        <td>: <input type="radio" name="Nationality" value="Bangladeshi" <?php if($c["nationality"]=="Bangladeshi") echo "checked"; ?> name="Nationality"> Bangladeshi <input name="Nationality" <?php if($c["nationality"]=="Forigner") echo "checked"; ?> value="Forigner" type="radio"> Foriger </td>
        <td><span> <?php echo $err_nation;?> </span></td>
      </tr>

      <tr>
        <td>Father's Name</td>
        <td>: <input type="text" name="fname" value="<?php echo $c["fathername"];?>">  </td>
        <td><span> <?php echo $err_fname;?> </span></td>
      </tr>
      <tr>
        <td>Mother's Name</td>
        <td>: <input type="text" name="mname" value="<?php echo $c["mothername"];?>">  </td>
        <td><span> <?php echo $err_mname;?> </span></td>
      </tr>
      

  <tr>
    <td>Present Address </td>
    <td>: <input type="text" name="address" value="<?php echo $c["presentaddress"];?>"> </td>
    <td><span> <?php echo $err_address;?> </span></td>

  </tr>
  <tr>
    <td>Parmanent Address </td>
    <td>: <input type="text" name="Paddress" value="<?php echo $c["parmanentaddress"];?>"> </td>
    <td><span> <?php echo $err_paddress;?> </span></td>

  </tr>

  <tr>
  <td>Contact Number </td>
  <td> : <input type="text" name="phone" value="<?php echo $c["contactnumber"];?>"> </td>
  <td> <span> <?php echo $err_phone;?> </span></td>
  </tr>
<tr>
<td>
   <input type="file" name="image" id="image">
   </td>
    <td><?php echo $c["img"];?></td>
    
  </tr>
                                                


  <tr>
      <td colspan="2" align="right"><button type="submit" name="ed_student" value="submit">UPADETE STUDENT</button>
        <td colspan="2" align="right"><button type="reset" name="reset" value="Rest">  RESET   </button>
      </tr>

      </table>
    </form>  
 

    <a href="StudentUinfo.php">Go to check Page</a>
  </body>



  

    

</html>