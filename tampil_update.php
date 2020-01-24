<?php

include 'koneksi.php';
$idx = $_GET['id_panitia'];
$query =mysqli_query($koneksi,"SELECT * FROM panitia where id_panitia='$idx'");
$m = mysqli_fetch_array($query);
?>


<form method="POST" action="formupdate.php">
<p> ID_Panitia:<input type="text" name="id_panitia" value="<?php echo $m['id_panitia']; ?>"></p>
<p> Nama :<input type="text" name="nama" value="<?php echo $m['nama']; ?>"></p>
<p> status:
	<input type="radio" name="statuss" value="Operator" <?php if ($m['statuss']=="Operator") {echo "checked";}?>>Operator
	<input type="radio" name="statuss" value="Admin" <?php if ($m['statuss']=="Admin") {echo "checked";}?>>Admin
	
	</p>

<p> Password: <input type="password" name="password_panitia" value="<?php echo $m['password_panitia']; ?>"> </p>

<input type="submit" name="submit" value="UPDATE">

</form>
