<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pelita Cahaya Abadi</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <Nav id="nav">
        <div class="navtext">
        <div class="tulisan_nav"><a href="#home">HOME</a></div>
        <div class="tulisan_nav"><a href="#about">ABOUT</a></div>
        <div class="tulisan_nav"><a href="#news">NEWS</a></div>
        <div class="tulisan_nav"><a href="#masukan">MASUKAN</a></div>
        </div>
        <div class="hamburger" id="hamburger">
          ☰
        </div>
        <img src="foto/Frame 52.png" alt="">
    </Nav>

<section id="home">
</section>
    <div class="banner">
        <img src="foto/sss.jpg" alt="">
    </div>
<main class="contain">
    <p class="motivasilog">Setiap perjalanan besar selalu dimulai dengan satu langkah kecil. Dari sinilah arah baru terbentuk, membuka kesempatan yang mungkin tak pernah terbayangkan sebelumnya. Ketekunan dalam satu langkah sederhana bisa menjadi awal dari perubahan besar di masa depan. Login bukan sekadar rutinitas, tapi tanda dimulainya perjalanan untuk tumbuh dan berkembang tanpa henti.</p>

   <?php session_start(); ?>

<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>

    <button class="profil" 
        onclick="window.location.href='<?=
            ($_SESSION['role'] === 'admin') 
            ? 'admin.php' 
            : 'profile.php'
        ?>'">
        <?= htmlspecialchars($_SESSION['username']); ?>
    </button>

    <button class="logout" 
    onclick="if(confirm('Are you sure that you want to log out?')) { 
        window.location.href='UTS-PWL/php/logout.php'; 
    } return false;">
        Logout
    </button>

<?php else: ?>

    <button class="daftar" onclick="window.location.href='pendaftaran.php'">
        Mendaftar
    </button>
    <button class="login" onclick="window.location.href='login.php'">
        Login
    </button>

<?php endif; ?>

    <h1 style="margin-top: 95px; color: #ce8124; margin-bottom: 70px;" class="tulisan">Visi dan misi</h1>

    <div style="display: flex; flex-direction: column; gap: 100px; align-items: center;">
      <div id="box">
      <div><h2 style="margin-top: 70px;font-size: 50px;" class="tulisan">Visi</h2></div>
      <div><p style="font-family: 'roboto'; color: white; margin-right: 2rem; max-width: 55%;">“Menjadi sekolah unggul yang menghasilkan generasi berkarakter, berwawasan global, beriman, serta mampu menguasai ilmu pengetahuan dan teknologi untuk menghadapi tantangan zaman.”</p></div>
      </div>
      <div id="box2">
      <div><h2 style="margin-top: 60px;font-size: 50px;" class="tulisan">Misi</h2></div>
      <div><p style="font-family:'roboto'; color: white; max-width: 55%;">Menyelenggarakan pendidikan yang berkualitas dengan mengutamakan pembelajaran inovatif, membentuk karakter siswa yang beriman, disiplin, dan bertanggung jawab, mengembangkan potensi akademik maupun non-akademik, menguasai teknologi serta keterampilan abad 21, serta menjalin kerja sama harmonis dengan orang tua dan masyarakat demi terwujudnya generasi unggul dan berdaya saing.</p></div>
      </div>      
    </div>
    <div class="makna">
      <div>
      <h1 class="tulisan" style="font-size: 34px; color:black;">Makna Logo</h1>
      <p style="font-family:'roboto'; padding-right: 3rem;">Logo sekolah menampilkan perisai yang melambangkan perlindungan dan keteguhan iman dalam menghadapi tantangan. Di dalamnya terdapat salib berwarna kuning emas sebagai simbol iman Kristen, sumber terang, dan dasar seluruh kegiatan pendidikan. Kehadiran burung merpati melambangkan Roh Kudus yang menuntun setiap langkah dengan damai sejahtera dan kebijaksanaan. Sementara itu, lingkaran berwarna merah-oranye menggambarkan semangat, keberanian, serta kesatuan seluruh warga sekolah.</p>
      </div>
      <div>
        <img src="foto/logo.png" alt="">
      </div>
      </div>   
      <section id="about"></section>
        <section class="about-section">
    <h2>About</h2>
    <div class="card-container">
      <!-- Card 1 -->
      <div class="card">
        <div class="card-img" style="background-image: url('foto/sejarah.jpg');"></div>
        <div class="card-text">
          <h3>Sejarah</h3>
          <p>Dibangun sebelum segala peradaban dan sebelum semua legenda dimulai</p>
          <a href="about sejarah.html">Click For More</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <div class="card-img" style="background-image: url('foto/motto.jpg');"></div>
        <div class="card-text">
          <h3>Motto</h3>
          <p>"Kalau tidak ada roti makan kue saja."</p>
          <a href="about motto.html">Click For More</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <div class="card-img" style="background-image: url('foto/fondasi.jpg');"></div>
        <div class="card-text">
          <h3>Fondasi</h3>
          <p>Keyakinan pada diri supaya dapat nilai bagus agar tidak remedial</p>
          <a href="about fondasi.html">Click For More</a>
        </div>
      </div>
    </div>
  </section>

<section id="news">
</section>
  <div class="news">
  <h1 class="judul">
    News
  </h1>
  
<div class="newsbox">
  <div class="Hot">
    <p>HOT NEWS</p>
    <div class="kotak">
    <a href="n5.html"><div class="hotf">
      <img src="foto/kisaki ngun bobo.jpg" alt="">
      <p>Admire Kanna jadi anime??</p>
    </div>
    </a>
      <div class="now">
        <p>Berita Terkini</p>
<div class="scrolly" style="overflow-y: auto; overflow-x: hidden; gap: 20px; display: flex; flex-direction: column;">
        <a class="link" href="n2.html"><div class="terkini">
          <img src="foto/n2.jpg" alt="">
          <div style="height: 100%;">
          <p>Top universitas di kalbar</p>
          <p style="font-size: 14px; font-weight: 400; color: rgb(120, 120, 120);max-width: 250px;">Daftar Beasiswa di kampus-kampus kalbar sekarang melalui Pelita Cahaya Abadi</p>
          </div>
        </div></a>

        <a class="link" href="n2.html"><div class="terkini">
          <img src="foto/n2.jpg" alt="">
          <div style="height: 100%;">
          <p>Top universitas di kalbar</p>
          <p style="font-size: 14px; font-weight: 400; color: rgb(120, 120, 120);max-width: 250px;">Daftar Beasiswa di kampus-kampus kalbar sekarang melalui Pelita Cahaya Abadi</p>
          </div>
        </div></a>

        <a class="link" href="n2.html"><div class="terkini">
          <img src="foto/n2.jpg" alt="">
          <div style="height: 100%;">
          <p>Top universitas di kalbar</p>
          <p style="font-size: 14px; font-weight: 400; color: rgb(120, 120, 120);max-width: 250px;">Daftar Beasiswa di kampus-kampus kalbar sekarang melalui Pelita Cahaya Abadi</p>
          </div>
        </div></a>

        <a class="link" href="n2.html"><div class="terkini">
          <img src="foto/n2.jpg" alt="">
          <div style="height: 100%;">
          <p>Top universitas di kalbar</p>
          <p style="font-size: 14px; font-weight: 400; color: rgb(120, 120, 120);max-width: 250px;">Daftar Beasiswa di kampus-kampus kalbar sekarang melalui Pelita Cahaya Abadi</p>
          </div>
        </div></a>

        <a class="link" href="n2.html"><div class="terkini">
          <img src="foto/n2.jpg" alt="">
          <div style="height: 100%;">
          <p>Top universitas di kalbar</p>
          <p style="font-size: 14px; font-weight: 400; color: rgb(120, 120, 120);max-width: 250px;">Daftar Beasiswa di kampus-kampus kalbar sekarang melalui Pelita Cahaya Abadi</p>
          </div>
        </div></a>

        </div>
</div>
         
    </div>
  </div>

<div class="mungkin">
  <p style="font-size: 30px; font-weight: 600; margin-bottom: 5px; margin-top: 15px;">Mungkin Anda Suka</p>
  <div class="foto" style="overflow-x: scroll; overflow-y: hidden;"><div><a href="n1.html"><img src="foto/n1.jpg" alt=""></a><p>Criselle Margetha meraih posisi ke-1 pada lomba cerdas cermat</p></div>
                    <div><a href="n2.html"><img src="foto/n2.jpg" alt=""></a><p>Kelulusan tahun ajaran 2039/2040</p></div>
                    <div><a href="n3.html"><img src="foto/n3.jpg" alt=""></a><p>Informasi Universitas Amomdemon</p></div>
                    <div><a href="n4.html"><img src="foto/n3.jpg" alt=""></a><p>Informasi Universitas Azathoth</p></div>
                    <div style="margin-right: -24px;"><a href="n5.html"><img src="foto/kisaki ngun bobo.jpg" alt=""></a><p>Admire Kanna menjadi anime</p></div>
  </div>

</div>
</div>

<section id="masukan">
</section>
   <div class="container">
    <h2 class="judul">Masukan Terhadap Kami</h2>
    <form>
      <textarea style="font-family: 'roboto';" placeholder="isi di sini(hanya hiasan)"></textarea><br>
      <button class="button" type="submit" style="font-size: 1.2rem; font-weight: 600;">Kirim</button>
    </form>
  </div>

</main>
    <!-- FOOTER -->
  <footer class="footer">
    <div>
      <h3>Penemu</h3>
      <p>- Gervasio Velasques</p>
      <p>- Michael Leonardo</p>
      <p>- Kaneisha Eliorra</p>
    </div>
    <div>
      <h3>Hubungi Kami</h3>
      <p>📞 999-9999-9999</p>
      <p>📱 pelitacahayaabadi</p>
      <p>📧 sekolah@gmail.com</p>
    </div>
    <div>
      <h3>Kerja Sama</h3>
      <p>perintis asli no fek fek</p>
      <p>PT hama timur</p>
      <p>Wamanda Emas</p>
      <p>Wonder Wati</p>
      <p>Giblandert</p>
      <p>Badan Intelijen Belajar Dunia</p>
    </div>
    <div class="footer-logo">
      <img src="foto/logo putih.png" alt="Logo Sekolah">
    </div>
  </footer>

  <script>
    const ham = document.getElementById("hamburger");
const navtext = document.querySelector(".navtext");

ham.addEventListener("click", () => {
  navtext.style.display =
    navtext.style.display === "block" ? "none" : "block";
});

    let prevScroll = window.scrollY;
const navbar = document.getElementById("nav");

window.addEventListener("scroll", () => {
  let currentScroll = window.scrollY;

  if (currentScroll > prevScroll) {
    // scroll ke bawah -> sembunyikan navbar
    navbar.style.top = "-80px"; // tinggi navbar
  } else {
    // scroll ke atas -> munculin navbar
    navbar.style.top = "0";
  }

  prevScroll = currentScroll;
});
  </script>
</body>
</html>