<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
<form method="post">
	<h2>Silahkan Registrasi</h2>
	<pre>
		Nama	: <input type="text" name="nama" maxlength="25" required>

		NIM	: <input type="text" name="nim" pattern="\d*" maxlength="10" >

		Email 	: <input type="Email" name="email">

		<input type="submit" name="submit">
	</pre>
</form>
<?php
if (isset($_POST['nama'])) {
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$email = $_POST['email'];
}
?>
<script type="text/javascript">
	alert("Yee berhasil!")
</script>
</body>
</html>
