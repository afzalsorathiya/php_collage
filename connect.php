<?php
	$con = mysqli_connect("localhost","root","","dbdemo") or die("Connection Problem");
?>
<html>
	<head>
		<title>DB Connectivity</title>
	</head>
	<body>
		<center>
			<form name="f1" method="post" action="insert.php">
				<table border="1">
					<tr>
						<td> Enter Name: </td>
						<td> <input type="text" name="txtname" placeholder="Enter Name" /></td>
					</tr>
					<tr>
						<td> Enter Course: </td>
						<td> <input type="text" name="txtcourse" placeholder="Enter Course" /></td>
					</tr>
					<tr>
						<td> Enter City: </td>
						<td> <input type="text" name="txtcity" placeholder="Enter City" /></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="Insert Data" name="btnsave" />
						</td>
					</tr>
				</table>
				<br/>
				<br />
				<table border = "1">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Course</th>
					<th>city</th>
				</tr>
				<?php
					$q = "SELECT * FROM demo_master";
					$d = mysqli_query($con,$q);
					while($n = mysqli_fetch_array($d))
					{
				?>
					<tr>
					<td><?php echo $n['id'];?></td>
					<td><?php echo $n['name'];?></td>
					<td><?php echo $n['course'];?></td>
					<td><?php echo $n['city'];?></td>
					</tr>
					<?php
					}
					?>
					
				</table>
				
			</form>
		</center>
	</body>
</html>
