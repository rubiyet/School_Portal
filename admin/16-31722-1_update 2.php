<?php

include 'header.php';
$studentenrollmentinthecourse=studentenrollmentinthecourse();

?>

<html>
	<head>
	<link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
	</head>
	<table width="100%" id="inserttable">
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
                                        <td colspan="3" id="title" valign="center">STUDENT ENTRY IN THE COURSE</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
<table id="">
												<thead>
													<th>Student Enrollment id</th>
													<th>Student Id</th>
													<th>Course Id</th>
													<th>Result</th>
													
												</thead>
												</tbody>
													<?php
														$i=1;
														
														foreach($studentenrollmentinthecourse as $s){
															echo "<tr>";
															echo "<td>".$s["studentenrollmentid"]."</td>";
															echo "<td>".$s["studentid"]."</td>";
															echo "<td>".$s["course_semester_id"]."</td>";
															echo "<td>".$s["result"]."</td>";
															
															echo '<td><a href="16-31722-1_update 1.php?id='.$s["studentenrollmentid"].'"class="btn btn-success">Update</a></td>';
															echo "</tr>";
															$i++;
														}
													?>
												</tbody>
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

