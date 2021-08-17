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
                                                        Teacher ID: 
                                                    </td>
                                                    <td >
                                                        <?php if(!empty($teacher["userid"])){echo $teacher["userid"];} ?>
                                                    </td>
                                                    <td rowspan="20" width="20%" id="imagebox">
                                                        <img src="<?php if(!empty($admin["img"])){ echo "image/admin/".$admin["img"];} else{ echo "";}?>" id="image">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Name: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["name"])){echo $teacher["name"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Salary: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["salary"])){echo $teacher["salary"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Email: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["email"])){echo $teacher["email"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Gender: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["gender"])){echo $teacher["gender"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Birth Date: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["birthday"])){echo $teacher["birthday"];} ?>
                                                    </td>   
                                                <tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Nationality: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["nationality"])){echo $teacher["nationality"];} ?>  
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Religion: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["religion"])){echo $teacher["religion"];} ?>  
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Blood Group:
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["bloodgroup"])){echo $teacher["bloodgroup"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Father Name: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["fathername"])){echo $teacher["fathername"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Mother Name: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["mothername"])){echo $teacher["mothername"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                    Joining Date:
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["joiningdate"])){echo $teacher["joiningdate"];} ?>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Left Date:
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["leftdate"])){echo $teacher["leftdate"];} ?>
                                                    </td>   
                                                <tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Qualification:
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["qualification"])){echo $teacher["qualification"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Present Address: 
                                                    </td>
                                                    <td colspan="2">
                                                        <?php if(!empty($teacher["presentaddress"])){echo $teacher["presentaddress"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Parmanent address: 
                                                    </td>
                                                    <td colspan="2">
                                                        <?php if(!empty($teacher["parmanentaddress"])){echo $teacher["parmanentaddress"];} ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" id="subtitle" height="30px">
                                                        Contact Number: 
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($teacher["contactnumber"])){echo $teacher["contactnumber"];} ?> 
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