<?php
	$id = $_GET["id"];
    include 'header.php';
    $s = getTeacher($id);
?>
<html>
	<head>
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
										<td colspan="3" id="title" valign="center">ADMIN PERSONAL INFORMATION INSERT</td>
									</tr>
									<tr>
										<td valign="top">
											<table id="">
												<form method="POST">
													<tr>
														<td>Teacher ID:</td>
														<td><?php echo $s["userid"]?></td>
													</tr>
													<tr>
														<td>Name:</td>
														<td><?php echo $s["name"]?></td>
													</tr>
													<tr>
														<td>Salary:</td>
														<td><?php echo $s["salary"]?></td>
													</tr>
													<tr>
														<td>Email:</td>
														<td><?php echo $s["email"]?></td>
													</tr>
													<tr>
														<td>Gender:</td>
														<td><?php echo $s["gender"]?></td>
													</tr>
													<tr>
														<td>Birth of Date:</td>
														<td><?php echo $s["birthday"]?></td>
													</tr>
													<tr>
														<td>Nationality:</td>
														<td><?php echo $s["nationality"]?></td>
													</tr>
													<tr>
														<td>Religion:</td>
														<td><?php echo $s["religion"]?></td>
													</tr>
													<tr>
														<td>Blood Group:</td>
														<td><?php echo $s["bloodgroup"]?></td>
													</tr>
													<tr>
														<td>Father Name:</td>
														<td><?php echo $s["fathername"]?></td>
													</tr>
													<tr>
														<td>Mother Name:</td>
														<td><?php echo $s["mothername"]?></td>
													</tr>
													<tr>
														<td>Join Date:</td>
														<td><?php echo $s["joiningdate"]?></td>
													</tr>
													<tr>
														<td>left Date:</td>
														<td><?php echo $s["leftdate"]?></td>
													</tr>
													<tr>
														<td>Qualification:</td>
														<td><?php echo $s["qualification"]?></td>
													</tr>
													<tr>
														<td>Present Address:</td>
														<td><?php echo $s["presentaddress"]?></td>
													</tr>
													<tr>
														<td>Parmanent Address:</td>
														<td><?php echo $s["parmanentaddress"]?></td>
													</tr>
													<tr>
														<td>Contact Number:</td>
														<td><?php echo $s["contactnumber"]?></td>
													</tr>
													<tr>
														<td></td>
														<td><input type="submit" name="btn_deleteteacher" value="Delete teacher"></td>
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
