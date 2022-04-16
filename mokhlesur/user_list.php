<?php
include_once("config.php");
include_once("function.php");

check_login_user();

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE HTML>
<html>

<head>
	<title></title>

</head>

<body>
	
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Email</th>
					<th>Department</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($res = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td class='bg-danger'>" . $res['name'] . "</td>";
					echo "<td>" . $res['age'] . "</td>";
					echo "<td>" . $res['email'] . "</td>";
					echo "<td>" . $res['dept'] . "</td>";
					echo "<td><a href=\"edit.php?id=$res[id]\"></a>  <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td></tr>";
				}
				?>
			</tbody>
		</table>
		<a href="add.php" class="btn btn-info" role="button" style="float:right;">Add New</a>
		<a href="logout.php" class="btn btn-info" role="button" style="float:right;">Log Out</a>
	</div>
</body>

</html>