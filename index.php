<?php

$nama = "Renaldy Galih Arayaji";
$ttl = "Pemalang , 7 April 2002";
$alamat = "Jl.KH.Jawad Faqih MG III Brontokusuman Mergangsan Kota Yogyakarta";
$riwayatPendidikan = "STMIK El Rahma Yogyakarta";
$hobi = "Rebahan";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Pertemuan 16</title>
</head>

<body>
    <center>
        <div class="card">
            <div class="img">
                <img src="assets/imgs/renaldy.jpg" alt="">
            </div>
            <div class="dataDiri">
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?= $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Tempat , Tanggal Lahir</td>
                        <td>:</td>
                        <td><?= $ttl; ?></td>
                    </tr>
                    <tr>
                        <td>Riwayat Pendidikan</td>
                        <td>:</td>
                        <td><?= $riwayatPendidikan; ?></td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>:</td>
                        <td><?= $hobi; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $alamat; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </center>
</body>

</html>