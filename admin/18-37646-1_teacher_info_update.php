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
				<td width="63">
					<table width="100%" height="830" valign="top" >
						<tr>
							<td width="23%" valign="top">
								<?php include 'navbar.php';?>
							</td>
							<td width="77%" valign="top">
								<table id="frame">
									<tr>
										<td colspan="3" id="title" valign="center">TEACHER PERSONAL INFORMATION UPDATE</td>
									</tr>
									<tr>
										<td valign="top" height="10px">Search: <input type="text" name="adminid1" onkeyup="teacher_search(this)"></td>
									</tr>
									<tr>
										<td><div id="teacher_suggesstion1"></div></td>
									</tr>
									</tr>
									<tr>
										<td valign="top" align="center">
											<table id="">
												<thead>
													<th>Teacher ID</th>
													<th>Name</th>
													<th>Email</th>
													<th>Birthday</th>
													<th>Joining Date</th>
													<th>Left Date</th>
													<th>Contact</th>
												</thead>
												</tbody>
													<?php
														$i=1;
														foreach($teachers as $t){
															echo "<tr>";
															echo "<td>".$t["userid"]."</td>";
															echo "<td>".$t["name"]."</td>";
															echo "<td>".$t["email"]."</td>";
															echo "<td>".$t["birthday"]."</td>";
															echo "<td>".$t["joiningdate"]."</td>";
															echo "<td>".$t["leftdate"]."</td>";
															echo "<td>".$t["contactnumber"]."</td>";
															echo '<td><a href="18-37646-1_teacher_info_update1.php?id='.$t["id"].'"class="btn btn-success">Update</a></td>';
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
		<<script>
			function get(id){
				return document.getElementById(id);
			}
			function teacher_search(e){
				if(e.value == ""){
					get("teacher_suggesstion1").innerHTML = "";
				}
				else{
					var xhr = new XMLHttpRequest();
					xhr.open("GET","18-37646-1_teacher_info_update2.php?userid="+e.value,true);
					xhr.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
							document.getElementById("teacher_suggesstion1").style.overflowY = "scroll";
							get("teacher_suggesstion1").innerHTML = this.responseText;
						}
					};
					xhr.send();
				}
			}
		</script>
	</body>	
</html>

			
