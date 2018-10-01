<form method="post">
<table align="center">
	<tr align="center">
		<td>
			Kolom Komentar
		</td>
	</tr>
	<tr>
		<td width="500px">
			<textarea cols="70" rows="10" placeholder="Masukan komentar minimal 5 karakter." name="komentar"></textarea>
		</td>
	</tr>
	<tr>
		<td align="right">	
			<input type="submit" name="submit">
		</td>
	</tr>
</table>
</form>
<?php
 if (isset($_POST['komentar'])) {
 	$komentar = $_POST['komentar'];
 	$hitung	= strlen($komentar);

 	if ($hitung < 5) {
 		echo "Masukan komentar sesuai dengan karakter minimal! (5)";
 	}else{
 		echo "Jumlah karakter komentar anda : ".$hitung;
 	}
 }
?>
