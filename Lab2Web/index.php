<!DOCTYPE html>
<html>
<head>
	<title>Program PHP Sederhana</title>
</head>
<body>
	<h2>Form Input Data</h2>
	<form method="post" action="">
		<label for="nama">Nama:</label>
		<input type="text" name="nama" required><br><br>
		<label for="tgl_lahir">Tanggal Lahir:</label>
		<input type="date" name="tgl_lahir" required><br><br>
		<label for="pekerjaan">Pekerjaan:</label>
		<select name="pekerjaan">
			<option value="Programmer">Programmer</option>
			<option value="Designer">Designer</option>
			<option value="Polisi">Polisi</option>
			<option value="Analyst">Analyst</option>
			<option value="Bidan">Bidan</option>
			<option value="Network Engineer">Network Engineer</option>
			<option value="Guru">Guru</option>
			<option value="Digital Marketing">Digital Marketing</option>
			<option value="Pengusaha">Pengusaha</option>
			<option value="Ahli Tata Kota">Ahli Tata Kota</option>
		</select><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$pekerjaan = $_POST['pekerjaan'];
		$umur = date_diff(date_create($tgl_lahir), date_create('now'))->y;
		// menghitung umur dengan fungsi date_diff
		switch ($pekerjaan) {
			case 'Programmer':
				$gaji = 50000000;
				break;
			case 'Designer':
				$gaji = 8000000;
				break;
			case 'Polisi':
				$gaji = 20000000;
				break;
			case 'Analyst':
				$gaji = 15000000;
				break;
			case 'Bidan':
				$gaji = 5000000;
				break;
			case 'Network Engineer':
				$gaji = 50000000;
				break;
			case 'Guru':
				$gaji = 7500000;
				break;
			case 'Digital Marketing':
				$gaji = 13000000;
				break;
			case 'Pengusaha':
				$gaji = 190000000;
				break;
			case 'Ahli Tata Kota':
				$gaji = 8000000;
				break;
			default:
				$gaji = 0;
				break;
		}
		// menentukan gaji sesuai pekerjaan dengan switch case
		echo "<h2>Output Data</h2>";
		echo "Nama: $nama<br>";
		echo "Tanggal Lahir: $tgl_lahir<br>";
		echo "Umur: $umur tahun<br>";
		echo "Pekerjaan: $pekerjaan<br>";
		echo "Gaji: Rp " . number_format($gaji, 0, ",", ".") . "<br>";
		// menampilkan output data beserta umur dan gaji
	}
	?>
</body>
</html>
