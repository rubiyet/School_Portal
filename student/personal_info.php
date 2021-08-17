<?php

    include 'header.php';


?>
<html>
    <head>
        <link rel="stylesheet" href="css/personal_info.css">
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
                                            <td colspan="3" id="title" valign="center">PERSONAL INFORMATION</td>
                                        </tr>
                                        <tr>
                                            <td valign="top">
                                            <table id="frameitem">
                                                <tr>
                                                    <td align="right" width="40%" id="subtitle" height="30px">
                                                        Student ID: 
                                                    </td>
                                                    <td >
                                                        <?php if(!empty($student["userid"])){echo $student["userid"];} ?>
                                                    </td>
                                                    <td rowspan="20" width="20%" id="imagebox">
                                                        <img src="<?php if(!empty($student["img"])){ echo "image/admin/".$student["img"];} else{ echo "";}?>" id="image">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Name: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["name"])){echo $student["name"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Email: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["email"])){echo $student["email"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Gender: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["gender"])){echo $student["gender"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Birth Date: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["birthday"])){echo $student["birthday"];} ?>
                                                    </td>   
                                                <tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Nationality: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["nationality"])){echo $student["nationality"];} ?>  
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Religion: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["religion"])){echo $student["religion"];} ?>  
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Blood Group:
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["bloodgroup"])){echo $student["bloodgroup"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Father Name: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["fathername"])){echo $student["fathername"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Mother Name: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["mothername"])){echo $student["mothername"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                    Joining Date:
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["admissiondate"])){echo $student["admissiondate"];} ?>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Left Date:
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["graduationdate"])){echo $student["graduationdate"];} ?>
                                                    </td>   
                                                <tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Present Address: 
                                                    </td>
                                                    <td colspan="2">
                                                        <?php if(!empty($student["presentaddress"])){echo $student["presentaddress"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Parmanent address: 
                                                    </td>
                                                    <td colspan="2">
                                                        <?php if(!empty($student["parmanentaddress"])){echo $student["parmanentaddress"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Contact Number: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($student["contactnumber"])){echo $student["contactnumber"];} ?> 
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
    </body>
</html>