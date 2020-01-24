<html>
<head>
		<title>
		</title>
</head>
	<body>
	<h2> DATA PANITIA PENDAFTARAN  </h2>
	<form action ="insertpanitia.php" method ="POST"> <br> <br>
	<table>
		<tr>
			<td> ID_Panitia	 </td>
				<td> <input type = "text" name= "id_panitia" value=""> </td>
		</tr>
		<tr>
			<td>Nama	 </td>
				<td> <input type = "text" name= "nama" value=""> </td>
		</tr>
		<tr>
			<td>Status </td> 
				<td> <input type = "radio" name ="statuss" value="Operator">Operator </td>
		</tr>
		<tr>
			<td> </td>
				<td> <input type = "radio" name ="statuss" value="Admin">Admin </td>
		</tr>
		<tr>
			<td> Password </td>
				<td> <input type = "password" name= "password_panitia" value=""> </td>
		</tr>
		<tr> </tr>
		<td> <input type ="submit" value= "INPUT" name= "submit"> </td>
		</table>
		</form>
		
		
</body>
</html>
		