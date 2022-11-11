<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Today</title>
	<style>
	body
	{
		margin-left:20%;
		margin-right:25%;
		margin-top:3%;
		margin-bottom:0%;
	}
	input[type=submit]
	{
		background-color:#4CAF50;
		color:white;
		padding :12px 20px;
		border:none;
		width:100%;
		border-radius: 6px;
		cursor: pointer;
	}
	input[type=reset]
	{
		background-color:red;
		color:white;
		padding :12px 20px;
		border:none;
		width:100%;
		border-radius: 6px;
		cursor: pointer;
	}
	table
	{
		border:2px dotted black;
		text-align:left;
		padding:8px;
	}
	td, th
	{
		border:2px dotted black;
		text-align:left;
		padding:8px;
	}
	tr:nth-child(even)
	{
		background-color:lightgray;
	}
	input[type=email]
	{
		width:100%;
		padding:12px;
		border 1px solid #ccc;
		border-radius:6px;
		box-sizing:border-box;
		margin-top:6px;
		margin-bottom:16px;
		resize:vertical;
	}
	input[type=text]
	{
		width:100%;
		padding:12px;
		border 1px solid #ccc;
		border-radius:6px;
		box-sizing:border-box;
		margin-top:6px;
		margin-bottom:16px;
		resize:vertical;
	}
	input[type=number]
	{
		width:100%;
		padding:12px;
		border 1px solid #ccc;
		border-radius:6px;
		box-sizing:border-box;
		margin-top:6px;
		margin-bottom:16px;
		resize:vertical;
	}
	select
	{
		width:100%;
		padding:12px;
		border 1px solid #ccc;
		border-radius:6px;
		box-sizing:border-box;
		margin-top:6px;
		margin-bottom:16px;
		resize:vertical;
	}
	</style>
</head>
<body>
	<center><h1>Today</h1>
	<Table>
		<tr>
		<td>Firstname</td>
		<td><input type="text" name="txtname" placeholder="Please enter your firtname">	</td>
		</tr>
		<tr>
		<td>middlename</td>
		<td><input type="text" name="txtmidd" placeholder="Please enter your middlename"></td>
		</tr>
		<tr>
		<td>Lastname</td>
		<td><input type="text" name="txtlast" placeholder="Please enter your lastname">	</td>
		</tr><tr>
		<td>Gender</td>
		<td><input type="radio" name="gender">male 
			<input type="radio" name="gender">female
			<input type="radio" name="gender">other</td>
		</tr>
		<tr>
		<td>mobile numnber</td>
		<td><input type="number" name="txtcont" placeholder="Please enter your contact number"></td>
		</tr><tr>
		<td>email</td>
		<td><input type="email" name="txtemail" placeholder="Please enter your emailid"></td>
		</tr>
		<tr>
		<td>DOB</td>
		<td><input type="date" name="datetxt" ></td>
		</tr>
		<tr>
		<td>
		city
		</td>
		<td>
			<select>
			<Option>Surat</option>
			<Option>Vadodara</option>
			</select>
		</td>
		</tr>
		<tr>
		<td>Address</td>
		<td><textarea name="address" rows="10" cols="86"></textarea></td>
		</tr>
		<tr>
		<td><input type="reset" name="submit" value="cancel"></td>
		<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</Table>
	</center>
</body>
</html>