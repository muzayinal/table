<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
<form action="" method="post">
	<p>Masukkan Kolom</p>
	<input type="text" name="Kolom">
	<p>Masukkan Baris</p>
	<input type="text" name="Baris">
	<button type="submit" name="submit">Proses</button>
</form>
	<?php if(isset($_POST['submit'])) {
		$Kolom = $_POST['Kolom'];
		$Baris = $_POST['Baris'];
	} ?>

	<?php if (isset($_POST['submit'])) {?>
		<table>
			<?php for ($i=0; $i < $Baris; $i++) { ?>
			<tr>
				<?php for ($s=0; $s < $Kolom; $s++) { ?>
				<td>asdas</td>
				<?php } ?>
			</tr>
			<?php } ?>
		</table>
	<?php } ?>
</body>
</html>


<!-- author Muzayin Al Farosa -->
<!-- dipelajari yooo ojok dicopas tok -->