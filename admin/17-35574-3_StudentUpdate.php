<?php
           require_once "header.php";  
         $id = $_GET["id"];
      $c = StudentforUpdate1($id);
      $ad=StudentforUpdate1($id);
      

      
      $ad_date=explode(" ",$c["admissiondate"]);

      $UAdating=$ad_date[0];
      $UAMonth=$ad_date[1];
      $UAyear=$ad_date[2];

      


      ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Update</title>   

<link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
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
          get("err_email").innerHTML="*Email required";

        }




        
    if(get("fname").value == ""){
		hasError = true;
		get("err_fname").innerHTML = "* Father Name Required";
	}
	



  if(get("mname").value == ""){
		hasError = true;
		get("err_mname").innerHTML = "*Mother Name required ";
	}
	

        
//=========================================blood ,ddate, ===================================
      if(get("blood").selectedIndex == 0)
        {
          hasError = true;
          get("err_blood").innerHTML="*blood group required";
        }
        
        if(get("religion").selectedIndex == 0)
        {
          hasError = true;
          get("err_religion").innerHTML="*Religion required";
        }


       

      //===============================gender validation===================================================

        if(!validategender()){
        hasError = true;
        get("err_gender").innerHTML = "*Gender Must be Required";
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

if(!validateNation()){
        hasError = true;
        get("err_nation").innerHTML = "*Must be need nationality";
    }
  
    return !hasError;

     }


     function validateNation(){
        var na = document.querySelector('input[name="Nationality"]:checked');
        if(na == null){
            return false;
        }
           return true;
    }

    function validategender(){
        var gn = document.querySelector('input[name="gender"]:checked');
        if(gn == null){
            return false;
        }
         return true;
    }

     


      function refresh()
      {
        hasError=false;
 get("err_userid").innerHTML="";
get("err_name").innerHTML="";
get("err_email").innerHTML="";
get("err_email").innerHTML="";
get("err_blood").innerHTML="";
get("err_religion").innerHTML="";
get("err_gender").innerHTML="";
get("err_fname").innerHTML="";
get("err_mname").innerHTML="";
get("err_nation").innerHTML = "";
get("err_paddress").innerHTML = "";
get("err_address").innerHTML = "";
get("err_phone").innerHTML = ""; 
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
                                        <td colspan="3" id="title" valign="center">STUDENT PERSONAL INFORMATION UPDATE</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                        <table id="">


                                        <form action="" onsubmit="return vaildate()" method="post" enctype="multipart/form-data">      
 
 
 
 <input id="userid" type="hidden" name="id" value="<?php echo $c["id"];?>" >
   <tr>
   <td> <input id="userid" type="hidden" name="userid" value="<?php echo $c["userid"];?>" ></td>
 
   </tr>
   <tr>
 
   <td>Name</td>
   <td>: <input id="name" type="text" name="name" value="<?php echo $c["name"];?>" >  </td>
   <td><span id="err_name"> <?php echo $err_name;?> </span></td>
   </tr>
   <td>Email</td>
   <td>: <input type="text" id="email" name="email" value="<?php echo $c["email"];?>">  </td>
   <td><span id="err_email" > <?php echo $err_email;?> </span></td>
 </tr>
 
 
   <tr>
   <td>Gender</td>
   <td>: <input type="radio" value="Male" <?php if($c["gender"]=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($c["gender"]=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
   <td><span>  </span></td>
 </tr>
 <tr>
   <td>Blood Group </td>
    <!-- <input type="text" name="bloodgroup"  value="<?php echo $c["bloodgroup"];?>" -->
   <td>: <select id="bloodgroup" name="blood">
     <?php
 foreach($array2 as $k)
 {
   if($c["bloodgroup"]==$k)
   {
 echo "<option selected> $k </option>";}
 else
 {
   echo "<option> $k </option>";
 
 }
 
 }
 ?>
 
 
 </td>
 
   </tr>
 
 
   <tr>
 
   
   <td> <input type="hidden" name="birthday"  value="<?php echo $c["birthday"];?>" ></td>
     </td>
 
     </tr>
 
 
     </tr>
 
 
     <tr>
       <td>Religion :</td>
       <!-- <td>: <input type="text" name="religion"  value="<?php echo $c["religion"];?>" ></td> -->
       <td>
       : <select  id="religion" name="religion">
         <?php
     foreach($array3 as $l)
     {
       if($c["religion"]==$l)
           {echo "<option selected> $l </option>";}
           else{
             echo "<option> $l </option>";
           }
     }
     ?>
     </td>
       </tr>
    <tr>
      
       <td><input type="hidden" name="admissiondate"  value="<?php echo $c["admissiondate"];?>" ></td>
 
  
   </tr>
 
   <tr>
  
   <td><input type="hidden" name="graduationdate"  value="<?php echo $c["graduationdate"];?>" ></td>
   </tr>
 
       <tr>
         <td>Nationality</td>
         <td>: <input type="radio" name="Nationality" value="Bangladeshi" <?php if($c["nationality"]=="Bangladeshi") echo "checked"; ?>> Bangladeshi 
         <input name="Nationality" <?php if($c["nationality"]=="Forigner") echo "checked"; ?> value="Forigner" type="radio"> Foriger </td>
         <td><span> <?php echo $err_nation;?> </span></td>
       </tr>
 
       <tr>
         <td>Father's Name</td>
         <td>: <input id="fname" type="text" name="fname" value="<?php echo $c["fathername"];?>">  </td>
         <td><span id="err_fname" > <?php echo $err_fname;?> </span></td>
       </tr>
       <tr>
         <td>Mother's Name</td>
         <td>: <input type="text" id="mname" name="mname" value="<?php echo $c["mothername"];?>">  </td>
         <td><span id="err_mname" > <?php echo $err_mname;?> </span></td>
       </tr>
       
 
   <tr>
     <td>Present Address </td>
     <td>: <input type="text" id="address" name="address" value="<?php echo $c["presentaddress"];?>"> </td>
     <td><span id="err_address" > <?php echo $err_address;?> </span></td>
 
   </tr>
   <tr>
     <td>Parmanent Address </td>
     <td>: <input type="text" name="Paddress" id="paddress" value="<?php echo $c["parmanentaddress"];?>"> </td>
     <td><span id="err_paddress" > <?php echo $err_paddress;?> </span></td>
 
   </tr>
 
   <tr>
   <td>Contact Number </td>
   <td> : <input type="text" id="phone" name="phone" value="<?php echo $c["contactnumber"];?>"> </td>
   <td> <span id="phone" > <?php echo $err_phone;?> </span></td>
   </tr>
 <tr>
 <!-- <td>
    <input  type="file" name="image" id="image">
 
    </td>
     <td><img src="image/student/<?php echo $c["img"];?>" width="100px" height="100px" ></td>
     
   </tr>
              -->                                    
 
 
   <tr>
       <td colspan="2" align="right"><button type="submit" name="ed_student" value="submit">UPADETE STUDENT</button>
         <td colspan="2" align="right"><button type="reset" name="reset" value="Rest">  RESET   </button>
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
 

    <a href="17-35574-3_StudentUinfo.php">Back</a>
  </body>



  

    

</html>