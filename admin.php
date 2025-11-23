<?php
session_start();
require_once 'UTS-PWL/php/datasiswa.php'; // ambil data murid
require_once 'UTS-PWL/php/totaluser.php'; // total pendaftar

$products = getProducts([]);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Pelita Cahaya Abadi</title>
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>
  <div class="container">
      <div class="container">
    <aside class="sidebar">
      <div class="logo">
        <img src="foto/logo putih.png" alt="Logo">
        <h2>PELITA CAHAYA ABADI</h2>
        <p>Kalimantan Barat Kota Pontianak</p>
      </div>
<div style="gap: 0;">
      <nav class="menu">
        <a href="#" class="baru">Dashboard</a>
        <div class="menub"><a href="index.php">Homepage</a>
        <a href="pendaftaran.php">Tambah Pendaftar</a>
        <a href="#">Pengumuman</a>
        <a href="#">Pengaturan</a>
        <button class="logout" 
    onclick="if(confirm('Are you sure that you want to log out?')) { 
    window.location.href='UTS-PWL/php/logout.php'; 
    } return false;">
    Logout
    </button>
</div>
      </nav>
    </aside>

    <main class="main-content">
      <div class="stats">
        <div class="card">
          <div class="icon">👤</div>
          <div class="text">
            <p>Total Pendaftar</p>
            <h2><?= $totalusers ?> orang</h2>
          </div>
        </div>

        <div class="card">
          <div class="icon">✔</div>
          <div class="text">
            <p>Diterima</p>
            <h2><?= $totalusers ?> orang</h2>
          </div>
        </div>
      </div>

      <section class="table-section">
  <h3>Data Pendaftar Terbaru</h3>

  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Siswa</th>
          <th>Jenis Kelamin</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($products as $index => $product): ?>
        <tr onclick="window.location.href='profile2.php?user_id=<?= $product['user_id'] ?>'" style="cursor:pointer;">
  <td><?= $index + 1 ?></td>
  <td><?= htmlspecialchars($product['nama_siswa']) ?></td>
  <td><?= htmlspecialchars($product['gender']) ?></td>
</tr>

        <?php endforeach ?>
      </tbody>

    </table>
  </div>
</section>

    </main>
  </div></div>
</body>
</html>
