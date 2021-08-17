
  <?php
  include '../Controller/php_controller/17-35574-3_adminController.php';
 // $id = $_GET["id"];
 // echo $id;
  $c = StudentforUpdate1($id);
  $ad=StudentforUpdate1($id);
  

  
 // $ad_date=explode(" ",$c["admissiondate"]);

 // $UAdating=$ad_date[0];
  //$UAMonth=$ad_date[1];
 // $UAyear=$ad_date[2];
 // echo $UAdating;
 // echo $UAMonth;
 // echo $UAyear;

 



  ?>







<h1>Student Update Page</h1>

<h1> <?php echo $c["name"];?></h1>




<form action="" onsubmit="" method="post" enctype="multipart/form-data">
<table>


<tr>
<input id="userid" type="hidden" name="id" value="<?php echo $c["id"];?>" >
  <tr>
  <td>: <input id="userid" type="hidden" name="userid" value="<?php echo $c["userid"];?>" ></td>

  </tr>
  <tr>


  <td>: <input id="name" type="hidden" name="name" value="<?php echo $c["name"];?>" >  </td>
  <td><span id="err_name"> <?php echo $err_name;?> </span></td>
  </tr>
 
<tr>
<td>
   <input  type="file" name="image" id="image">
   </td>
  <td>: <input id="image" type="hidden" name="old_img" value="<?php echo $c["img"];?>" >  </td> 

   <!-- <td >  <span name="old_img" value="<?php $c["img"];?>"><?php echo $c["img"];?></span>  </td> -->
    <!-- <td><img src="image/student/<?php echo $c["img"];?>" width="100px" height="100px" ></td> -->
  </tr>
             
          <tr>
      <td colspan="2" align="right"><button type="submit" name="img_student" value="submit">UPADETE STUDENT</button>
        <td colspan="2" align="right"><button type="reset" name="reset" value="Rest">  RESET   </button>
      </tr>   


</table>      




<form action=""></form>



