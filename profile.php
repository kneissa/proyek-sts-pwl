<?php
require_once 'UTS-PWL/php/profile.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Murid Baru - Pelita Cahaya Abadi</title>
  <link rel="stylesheet" href="css/pendaftaran.css">
</head>
<body>
  <header>
    <a href="index.php" class="back-btn"><img src="foto/back.png" alt=""></a>
    <div class="header-right">
      <img src="foto/Frame 52.png" alt="Logo Sekolah" class="logo">
    </div>
  </header>
 
  <div class="hero">
  <img src="foto/sss.jpg" alt="Sekolah Pelita Cahaya Abadi">
  <div class="hero-text">
    <h2>Data Murid Sekolah Pelita Cahaya Abadi</h2>
  </div>
</div>
 
 
  <main style="margin-top: 50px;">
 
<form id="formPendaftaran" method="post" action="UTS-PWL/php/data1.php">    
     <h3>Data Siswa</h3>
<label>Nama Siswa</label>
<input type="text" value="<?= $data['nama_siswa'] ?>" readonly>

<label>Nama Panggilan</label>
<input type="text" value="<?= $data['nama_panggilan'] ?>" readonly>

<label>TTL</label>
<input type="text" value="<?= $data['tmpt/tgl_lahir'] ?>" readonly>

<label>Agama</label>
<input type="text" value="<?= $data['agama'] ?>" readonly>

<label>Email</label>
<input type="text" value="<?= $data['email'] ?>" readonly>

<h3>Data Orang Tua</h3>
<label>Nama Ayah</label>
<input type="text" value="<?= $data['nama_papa'] ?>" readonly>

<label>Nama Ibu</label>
<input type="text" value="<?= $data['nama_mama'] ?>" readonly>

<label>Alamat</label>
<input type="text" value="<?= $data['alamat'] ?>" readonly>

<h3>Data Sekolah</h3>
<label>NISN</label>
<input type="text" value="<?= $data['NISN'] ?>" readonly>

<label>Gender</label>
<input style="border:none;" type="text" value="<?= $data['gender'] ?>" readonly>

<label>Sekolah Asal</label>
<input type="text" value="<?= $data['sekolah_asal'] ?>" readonly>

<h3>Alasan Masuk</h3>
<textarea readonly class="marg"><?= $data['alasan'] ?></textarea>

    </form>
  </main>
</body>
</html>
 