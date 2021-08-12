<?php
	include 'header.php';
	$users=getAllUsers();
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
                                        <td colspan="3" id="title" valign="center">USER ACCOUNT INSERT</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table id="">
			<thead>
				<th>User ID</th>
				<th>Type</th>
				<th>Status</th>
			</thead>
			</tbody>
				<?php
					$i=1;
					foreach($users as $u){
						echo "<tr>";
							echo "<td>".$u["uname"]."</td>";
							echo "<td>".$u["type"]."</td>";
							echo "<td>".$u["status"]."</td>";
							echo '<td><a href="18-37646-1_user_acc_update1.php?id='.$u["id"].'"class="btn btn-success">Edit</a></td>';
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

			
