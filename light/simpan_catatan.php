<?php

    session_start();
    $nik            =$_SESSION['nik'];
    $nama_lengkap   =$_SESSION['nama_lengkap'];
    $lokasi         =$_POST['lokasi'];
    $suhu           =$_POST['suhu'];
    $jam            =$_POST['jam'];
    $tanggal        =$_POST['tanggal'];

$format = "\n$nik|$nama_lengkap|$lokasi|$suhu|$jam|$tanggal";

//Membuka file Catatan.txt
$file = fopen('catatan.txt', 'a');
fwrite($file, $format);

//menutup file catatan
fclose($file);

?>
<script type="text/javascript">
    alert('Data Berhasil Disimpan.');
    window.location.assign('user.php');
</script>