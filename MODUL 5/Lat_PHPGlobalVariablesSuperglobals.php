<!DOCTYPE html>
<html>
<body>

<h2>Form Data Mahasiswa</h2>

<form method="get" action="">
    <label>Nama Mahasiswa:</label>
    <input type="text" name="nama">

    <br><br>

    <input type="submit" value="Tampilkan Data">
</form>

<br>

<?php

if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']);

    echo "<h3>Data Berhasil Dikirim</h3>";
    echo "Nama Mahasiswa : " . $nama;
}

?>

</body>
</html>