<!DOCTYPE html>
<html>
<head>
	<title>hitung berat badan ideal</title>
</head>
<body>
	<h2>Hitung Berat Badan Ideal</h2>
	<table>
	<form>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"><br></td>
	</tr>

	<tr>
		<td>Tinggi</td>
		<td><input type="text" name="tinggi"><br></td>
	</tr>

	<tr>
		<td>Berat badan</td>
		<td><input type="text" name="bb"><br></td>
	</tr>

	<tr>
		<td>Jenis kelamin</td>
		<td><input type="radio" name="jk" value="laki-laki">Laki-laki</td>
		<td><input type="radio" name="jk" value="perempuan">Perempuan</td>
		<br>
	</tr>

	<tr>
		<td><input type="submit" name="submit"></input></td>
	</tr>
</form>
</table>

</body>
</html>

<?php

if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $tinggi = $_GET['tinggi']/100;
    $jk = $_GET['jk'];
    $bb = $_GET['bb'];

    $bmi = $bb / ($tinggi * $tinggi);
   
    echo "<h3>Hasil perhitungan BMI</h3>";
    echo "Nama Anda: $nama<br>";
    echo "Jenis kelamin: $jk<br>";
    echo "Tinggi Badan: $tinggi meter<br>";
    echo "Berat Badan: $bb kilogram<br>";
    echo "<hr>BMI Anda: ".number_format($bmi);
    echo "<h4>Kesimpulan:</h4>";
    // Menghitung dan mencetak kesimpulan
    if($bmi < 18) {
        echo "Underweight";
    }elseif ($bmi <= 25) {
        echo "Normal";
    }elseif ($bmi <= 27 ) {
        echo "Overweight";
    }elseif ($bmi > 27 ) {
        echo "Obesitas";
    }
}
?>