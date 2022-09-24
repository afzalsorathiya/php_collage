<html>
	<center>
	<head> <h1>Case Conversion</h1> </head>
	</center>

	<body>
		
		<form method="POST" align="center" name="f1" action="">
			<table border="1" align="center">
				<tr>
					<td>Enter String 1:</td>
					<td> <input type="text" name="txtstr1" placeholder="Enter the string 1"></td>
				</tr>
				
				<tr>
					<td>Enter String 2:</td>
					<td> <input type="text" name="txtstr2" placeholder="Enter the string 2"></td>
				</tr>

				<tr>
					<td>Select String Operation</td>
					<td>
						<select name="listing">
							<option value="1">Find the Length</option>
							<option value="2">Concat</option>
							<option value="3">Convert Lowercase</option>
							<option value="4">Convert Uppercasecase</option>
							<option value="5">ASCII value of first character</option>	
							<option value="6">count the Words</option>
							<option value="7">First character to lower</option>
							<option value="8">First character to upper</option>
							<option value="9">Compare</option>
							<option value="10">Compare without ignoring case</option>
						</select> 
					</td>
				</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Perform Operation" />
				</td>
			</tr>
			</table>
			<br/>

			
			<center>
			<table border="1">
			<tr>
				<th>String 1</th>
				<th>String 2</th>
				<th>Operation</th>
				<th>Result</th>
			</tr>
			</center>
		</form>
		<?php
		
			if(isset($_POST['submit']))
			{
				
				$string1 = $_POST['txtstr1'];			
				$string2 = $_POST['txtstr2'];
				$op = $_POST['listing'];

				switch($op)
				{
					case 1:
						echo "<tr>
							<td>$string1</td>
							<td>$string2</td>
							<td>Find Length</td>	
							<td> $string1=" . strlen($string1) . " <br> $string2= " . strlen($string2) . "</td>	
							</tr>	
							</table>";
							break;
					
					case 2: 
						echo "<tr>
							<td>$string1</td>
							<td>$string2</td>
							<td>Concat Two String</td>	
							<td> $string1 and $string2 = " . $string1 . "" . $string2 . "</td>	
							</tr>	
							</table>";
							break;

					case 3: 
						echo "<tr>
							<td>$string1</td>
							<td>$string2</td>
							<td>Convert to LowerCase</td>	
							<td> $string1 = " . strtolower($string1) . " <br> $string2 =" . strtolower($string2) . "</td>	
							</tr>	
							</table>";
							break;

					case 4: 
						echo "<tr>
							<td>$string1</td>
							<td>$string2</td>
							<td>Convert to UpperCase</td>	
							<td> $string1 = " . strtoupper($string1) . "  <br> $string2 =" . strtoupper($string2) . "</td>	
							</tr>	
							</table>";
							break;

					case 5: 
						echo "<tr>
							<td>$string1</td>
							<td>$string2</td>
							<td>ASCII value of first character</td>	
							<td> $string1 = " . ord($string1) . "  <br> $string2 =" . ord($string2) . "</td>	
							</tr>	
							</table>";
							break;
	
					case 6:
						echo "<tr>
							<td>$string1</td>
							<td>$string2</td>
							<td>Count the Words</td>	
							<td> $string1 = " . str_word_count($string1) . "   $string2 =" . str_word_count($string2) . "</td>	
							</tr>	
							</table>";
							break;

					case 7: 
						echo "<tr>
							<td>$string1</td>
							<td>$string2</td>
							<td>Convert First character to Lowercase</td>	
							<td> $string1 = " . lcfirst($string1) . "   $string2 =" . lcfirst($string2) . "</td>	
							</tr>	
							</table>";
							break;

					case 8: 
						echo "<tr>
							<td>$string1</td>
							<td>$string2</td>
							<td>Convert First character to Uppercase</td>	
							<td> $string1 = " . ucfirst($string1) . "   $string2 =" . ucfirst($string2) . "</td>	
							</tr>	
							</table>";
							break;

					 case 9: 
						echo "<tr>
							<td>$string1</td>
							<td>$string2</td>
							<td>Compare the strings</td>	
							<td> $string1 and $string2 = " . strcmp($string1,$string2) . "</td>	
							</tr>	
							</table>";
							break;

					case 10: 
						echo "<tr>
							<td>$string1</td>
							<td>$string2</td>
							<td>Compare without ignoring strings</td>	
							<td> $string1 and $string2 = " . strcasecmp($string1,$string2) . "</td>	
							</tr>	
							</table>";
							break;
				}
			}
	
		?>
	</body>

</html>