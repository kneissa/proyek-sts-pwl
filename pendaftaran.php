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
    <h2>Pendaftaran Murid Baru Sekolah Pelita Cahaya Abadi</h2>
  </div>
</div>
 
 
  <main>
    <h2>Pendaftaran Murid Baru Sekolah Pelita Cahaya Abadi</h2>
    <p>
    <b>Isi form sesuai dengan informasi yang dibutuhkan</b>. Setiap langkah menuju pendidikan adalah langkah menuju masa depan yang lebih baik. Jangan ragu untuk mendaftar, karena hari ini bisa jadi awal dari perjalanan besar menuju cita-cita.
    </p>
 
<form id="formPendaftaran" method="post" action="UTS-PWL/php/data1.php">    
      <h3>Data 1</h3>
      <label>Nama Siswa</label>
      <input type="text" name="namaSiswa" required>
 
      <label>Nama Panggilan</label>
      <input type="text" name="namaPanggilan">
 
      <label>Tempat & Tanggal Lahir</label>
      <input type="text" name="ttl">
 
      <label>Agama</label>
      <input type="text" name="agama">
 
      <label>Email</label>
      <input type="email" name="email" required>
 
      <label>Nomor Aktif Anak</label>
      <input type="number" name="nomorAktif">

      <h3>Data 2</h3>
      <label>Nama Ayah</label>
      <input type="text" name="namaAyah">
 
      <label>Nama Ibu</label>
      <input type="text" name="namaIbu">
 
      <label>Alamat</label>
      <input type="text" name="alamat">
 
      <label>Nomor Orang Tua/Wali</label>
      <input type="text" name="noOrtu">
 
      <h3>Data 3</h3>
      <label>NISN atau Nomor Siswa Nasional</label>
      <input type="text" name="nisn">
 
      <label>Jenis Kelamin</label>
      <div class="radio-group">
  <label>
    <input type="radio" name="gender" value="Laki-laki">
    Laki-laki
  </label>
  <label>
    <input type="radio" name="gender" value="Perempuan">
    Perempuan
  </label>
</div>
 
      <label>Sekolah Asal</label>
      <input type="text" name="asalSekolah">
 
      <h3>Alasan Masuk Sekolah Ini</h3>
      <textarea name="alasan"></textarea>
 
      <button type="submit">Kirim</button>
    </form>
  </main>
</body>
</html>
 