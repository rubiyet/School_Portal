<?php

    include 'header.php';
    
?>
<html>
    <head>
        <link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
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
                                        <td colspan="3" id="title" valign="center">ADMIN PERSONAL INFORMATION INSERT</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table id="frameitem">
                                                <form action = "" onsubmit="return admininsertvalidatebyjs()" method = "POST" enctype="multipart/form-data" autocomplete="off">
                                                    <tr>
                                                        <td align="right" width="36%" id="subtitle">Admin ID<span id="star">* </span>: </td>
                                                        <td width="24%"><input type="text" id="adminid" name="adminid" placeholder="**-1***" value="<?php echo $adminid; ?>"></td>
                                                        <td width="40%"><span id="error_adminid"><?php echo $error_adminid?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">Name<span id="star">* </span>: </td>
                                                        <td><input id="name" type="text" name="name" value="<?php echo $name?>" autocomplete="on"></td>
                                                        <td><span id="error_name"><?php echo $error_name?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">Salary<span id="star">* </span>: </td>
                                                        <td><input id="salary" type="text" name="salary" value="<?php echo $salary?>"></td>
                                                        <td><span id="error_salary"><?php echo $error_salary?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">Email<span id="star">* </span>: </td>
                                                        <td><input id="email" type="text" name="email" placeholder="someone@gmail.com"value="<?php echo $email; ?>" ></td>
                                                        <td><span id="error_email"><?php echo $error_email?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">Gender<span id="star">* </span>: </td>
                                                        <td><input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> <span id="subtitle1">Male</span> <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> <span id="subtitle1">Female</span> </td>
                                                        <td><span id="error_gender"><?php echo $error_gender?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">Birth Date<span id="star">* </span>: </td>
                                                        <td>
                                                            <select id="inputbdday" name="inputbdday"><option disabled selected>Day</option><?php foreach($aday as $d){if($d == $inputbdday) echo "<option selected>$d</option>"; else echo "<option>$d</option>";}?></select> <select id="inputbdmonth" name="inputbdmonth"><option disabled selected>Month</option><?php foreach($amonth as $m){if($m == $inputbdmonth) echo "<option selected>$m</option>"; else  echo "<option>$m</option>";}?></select> <select id="inputbdyear" name="inputbdyear"><option disabled selected>Year</option><?php foreach($ayear1 as $y){if($y == $inputbdyear) echo "<option selected>$y</option>"; else  echo "<option>$y</option>";}?></select>
                                                        </td>   
                                                        <td><span id="error_inputbddaymonthyear"><?php echo $error_inputbddaymonthyear;?></span></td>
                                                    <tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">Nationality<span id="star">* </span>: </td>
                                                        <td><select id="inputnationality" name="inputnationality"><option disabled selected>Select</option><?php foreach($anationality as $n){if($n == $inputnationality) echo "<option selected>$n</option>"; else echo "<option>$n</option>";}?></select></td>
                                                        <td><span id="error_nationality"><?php echo $error_nationality;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">Religion<span id="star">* </span>: </td>
                                                        <td>
                                                            <select id="inputreligion" name="inputreligion"><option disabled selected>Select</option><?php foreach($areligion as $r){if($r == $inputreligion) echo "<option selected>$r</option>"; else echo "<option>$r</option>";}?></select>
                                                        </td>
                                                        <td><span id="error_religion"><?php echo $error_religion;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">
                                                            Blood Group<span id="star">* </span>:
                                                        </td>
                                                        <td>
                                                            <select id="inputbloodgroup" name="inputbloodgroup"><option disabled selected>Select</option><?php foreach($bloodgroup as $bg){if($bg == $inputbloodgroup) echo "<option selected>$bg</option>"; else echo "<option>$bg</option>";}?></select>
                                                        </td>
                                                        <td><span id="error_inputbloodgroup"><?php echo $error_inputbloodgroup;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">
                                                            Father Name<span id="star">* </span>: 
                                                        </td>
                                                        <td>
                                                            <input id="fathername" type="text" name="fathername" value="<?php echo $fathername?>">
                                                        </td>
                                                        <td><span id="error_fathername"><?php echo $error_fathername;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">
                                                            Mother Name<span id="star">* </span>: 
                                                        </td>
                                                        <td>
                                                            <input id="mothername" type="text" name="mothername" value="<?php echo $mothername?>">
                                                        </td>
                                                        <td><span id="error_mothername"><?php echo $error_mothername;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">
                                                        Joining Date<span id="star">* </span>:
                                                        </td>
                                                        <td>
                                                            <select id="inputjday" name="inputjday"><option disabled selected>Day</option><?php foreach($aday as $d){if($d == $inputjday) echo "<option selected>$d</option>"; else echo "<option>$d</option>";}?></select> <select id="inputjmonth" name="inputjmonth"><option disabled selected>Month</option><?php foreach($amonth as $m){if($m == $inputjmonth) echo "<option selected>$m</option>"; else  echo "<option>$m</option>";}?></select> <select id="inputjyear" name="inputjyear"><option disabled selected>Year</option><?php foreach($ayear1 as $y){if($y == $inputjyear) echo "<option selected>$y</option>"; else  echo "<option>$y</option>";}?></select>
                                                        </td>   
                                                        <td><span id="error_inputjdaymonthyear"><?php echo $error_inputjdaymonthyear;?></span></td>
                                                    <tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">
                                                        Left Date<span id="star">* </span>:
                                                        </td>
                                                        <td>
                                                            <select id="inputlday" name="inputlday"><option disabled selected>Day</option><?php foreach($aday as $d){if($d == $inputlday) echo "<option selected>$d</option>"; else echo "<option>$d</option>";}?></select> <select id="inputlmonth" name="inputlmonth"><option disabled selected>Month</option><?php foreach($amonth as $m){if($m == $inputlmonth) echo "<option selected>$m</option>"; else  echo "<option>$m</option>";}?></select> <select id="inputlyear" name="inputlyear"><option disabled selected>Year</option><?php foreach($ayear1 as $y){if($y == $inputlyear) echo "<option selected>$y</option>"; else  echo "<option>$y</option>";}?></select>
                                                        </td>   
                                                        <td><span id="error_inputldaymonthyear"><?php echo $error_inputldaymonthyear;?></span></td>
                                                    <tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">
                                                            Qualification<span id="star">* </span>:
                                                        </td>
                                                        <td><input type="checkbox" name="qualifications[]" value="SSC" <?php foreach($qualifications as $qu){if($qu == "SSC") echo "checked";} ?>> <span id="subtitle1">SSC</span> <input type="checkbox" name="qualifications[]" value="HSC" <?php foreach($qualifications as $qu){if($qu == "HSC") echo "checked";} ?>> <span id="subtitle1">HSC</span> <input type="checkbox" name="qualifications[]" value="Other" <?php foreach($qualifications as $qu){if($qu == "Other") echo "checked";} ?>> <span id="subtitle1">Other</span></td>
                                                        <td><span id="error_qualifications"><?php echo $error_qualifications;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">
                                                            Present Address<span id="star">* </span>: 
                                                        </td>
                                                        <td>
                                                            <input id="presentaddress" type="text" name="presentaddress" value="<?php echo $presentaddress?>">
                                                        </td>
                                                        <td><span id="error_presentaddress"><?php echo $error_presentaddress;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">
                                                            Parmanent address<span id="star">* </span>: 
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="sameaspresentaddress" <?php if($presentaddress != ""){if($presentaddress == $parmanentaddress) echo "checked";}?>> <span id="sameaspresentaddress">Same as present address</span> <br>
                                                            <input id="parmanentaddress" type="text" name="parmanentaddress" value="<?php echo $parmanentaddress?>">
                                                        </td>
                                                        <td><span id="error_parmanentaddress"><?php echo $error_parmanentaddress;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">
                                                            Contact Number<span id="star">* </span>: 
                                                        </td>
                                                        <td>
                                                            <input id="contactnumber" type="text" name="contactnumber" value="<?php echo $contactnumber?>">
                                                        </td>
                                                        <td><span id="error_contactnumber"><?php echo $error_contactnumber;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">
                                                            Image<span id="star">* </span>: 
                                                        </td>
                                                        <td>
                                                            <input type="file" name="image" id="image">
                                                        </td>
                                                        <td><span id="error_img"><?php echo $error_img;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td id="errormassage1"><?php if(!empty($error_massage1)){echo $error_massage1;}?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td id="errormassage2"><?php if(!empty($error_massage2)){echo $error_massage2;}?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td id="buttonbox" valign="middle">
                                                            <table width="80%">
                                                                <tr>
                                                                    <td><input type="submit" name="admininsert" value="Insert" id="button10"></td></form>
                                                                    <form method="POST"><td><input type="submit" name="admininsertclear" value="Clear" id="button10"></td></form>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
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
        <script src="../controller/js_controller/admin_controller.js"></script>
    </body>
</html>