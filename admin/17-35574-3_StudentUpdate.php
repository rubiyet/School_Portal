<?php
           require_once "header.php";  
         $id = $_GET["id"];
      $c = StudentforUpdate($id);

      


      ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Update</title>   

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
                                        <td valign="top">
                                        <table id="">


<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">      
 
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