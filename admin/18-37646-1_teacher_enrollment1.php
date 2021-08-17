<?php
	include 'header.php';
	$jy=joiningyear($joining_year);
?>
<html>
	<head>
		<link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
		<style>

		</style>
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
										<td colspan="3" id="title" valign="center">TEACHER ENROLLMENT</td>
									</tr>
									<tr>
										<td valign="top" align="center">
		<table class="table table-stripad">
			<thead>
				<th>Teacher ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Birth Date</th>
				<th>Joining Date</th>
				<th>Left Date</th>
				<th>Contact</th>
			</thead>
			</tbody>
				<?php
					foreach($jy as $t){
						echo "<tr>";
							echo "<td>".$t["userid"]."</td>";
							echo "<td>".$t["name"]."</td>";
							echo "<td>".$t["email"]."</td>";
							echo "<td>".$t["birthday"]."</td>";
							echo "<td>".$t["joiningdate"]."</td>";
							echo "<td>".$t["leftdate"]."</td>";
							echo "<td>".$t["contactnumber"]."</td>";
						echo "</tr>";
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