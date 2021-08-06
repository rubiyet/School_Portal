<?php
	include 'header.php';
	$teachers=getAllTeachers();
?>
<html>
	<head>
		<link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
	</head>
	<body>
		<table width="100%">
			<tr>
				<td width="18.5%"></td>
				<td width="63%">
					<table width="100%" height="830" valign="top" >
						<tr>
							<td width="23%" valign="top">
								<?php include 'navbar.php';?>
							</td>
							<td width="77%" valign="top">
								<table id="frame">
									<tr>
										<td colspan="3" id="title" valign="center">TEACHER PERSONAL INFORMATION DELETE</td>
									</tr>
									<tr>
										<td valign="top">
											<table id="">
												<thead>
													<th>Teacher ID</th>
													<th>Name</th>
												</thead>
												</tbody>
													<?php
														$i=1;
														foreach($teachers as $t){
															echo "<tr>";
																echo "<td>".$t["userid"]."</td>";
																echo "<td>".$t["name"]."</td>";
																echo '<td><a href="18-37646-1_teacher_info_delete1.php?id='.$t["id"].'"class="btn btn-success">Delete</a></td>';
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
			
