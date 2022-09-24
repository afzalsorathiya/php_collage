<?php
	$a=array("green"=>"MScIT","cyan"=>"MCA","red"=>"IMCA","yellow"=>"BCA","blue"=>"BScIT");
	
?>
<html>
<head>
	<title>Course</title>
	<style>
		*{
			margin-top:20px;
			border-radius:5px;
		}
		
	</style>
</head>
<body>
		<center>
			<Table border="10px">
			<tr>
				<th>Sr.No</th>
				<th>Course</th>
				</tr>
				<?php
					$i=1;
					foreach($a as $k=>$v)
					{	
					echo"
						<tr bgcolor=$k>
						<td>$i</td>
						<td>$v</td>
						</tr>";
						$i++;
					}
				?>
			</Table>
		</center>
</body>
</html>