<?php
session_start();

error_reporting(0);
// 1. Cek apakah sudah login
if (!isset($_SESSION['username'])) {
    header("Location: php/login.php");
    exit();
}

// 2. Cek apakah sudah melewati welcome
if (!isset($_SESSION['welcome_done'])) {
    header("Location: welcome.html");
    exit();
}
?>

<?php include('php/navbar.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMDT 2025</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="welcome.html" class="back-button">Kembali</a>
  <!-- Navbar -->
  <header class="navbar">
    <div class="logo-text">HMDT</div>
   <div class="logo-container">
      <img src="image/gambar.jpg" alt="Logo HMDT" class="logo-img" />
    </div>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Student Info</a>
      <a href="#">Articles</a>
      <a href="contact.php">Contact</a>
    </nav>
    <div class="navbar-buttons">
      <button class="btn">Partnership</button>
      <button class="btn">Visit Store</button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <h1>Welcome to <br> <span>Himpunan Mahasiswa Diploma Teknik Telekomunikasi</span></h1>
      <p>Himpunan Mahasiswa Diploma Teknik Telekomunikasi atau bisa disingkat HMDT, merupakan sebuah Himpunan yang berada di prodi Teknik Telekomunikasi yang berada di Fakultas Ilmu Terapan</p>
    </div>
    <div class="hero-img">
      <img src="image/rektorat1.png" alt="Gedung Bangkit">
    </div>
  </section>

  <!-- Video Section -->
  <section class="video-profile">
    <div class="video-profile-container">
      <div class="video-profile-video">
        <iframe width="100%" height="315"
          src="https://www.youtube.com/embed/WpS9RMCMn5U?si=V59sjrr8UhlQc2ku"
          title="Video Profil HMDT"
          frameborder="0"
          allowfullscreen>
        </iframe>
      </div>
      <div class="video-profile-text">
        <h4 class="video-subtitle">Who We Are</h4>
        <h2 class="video-title">Video Profile</h2>
        <p class="video-desc">
          With the spirit of Empowering Inclusivity, BEM FEB UI is here to create a more inclusive space, empower every voice, and embrace diversity in all aspects of life.
        </p>
        <a href="https://youtu.be/WpS9RMCMn5U?si=V59sjrr8UhlQc2ku" class="video-button" target="_blank">Discover More</a>
      </div>
    </div>
  </section>

  <!-- Vision & Mission Section -->
  <section class="vision-mission">
    <div class="vision-mission-container">
      <div class="vision-mission-text">
        <h4 class="vision-mission-subtitle">Who We Are</h4>
        <h2 class="vision-mission-title">Our Vision</h2>
        <p class="vision-mission-paragraph">
          Menjadi program vokasi unggul dalam riset terapan dan kewirausahaan pada tahun 2028 yang berperan aktif dalam pengembangan teknologi terapan di bidang Telekomunikasi Digital
        </p>
        <h2 class="vision-mission-title">Our Mission</h2>
        <ul class="vision-mission-list">
          <li>➤ Mengembangkan dan menyelenggarakan pendidikan vokasi berstandar Internasional di bidang Teknologi Telekomunikasi dan menghasilkan lulusan yang mampu mengembangkan profesionalisme dalam bidang Telekomunikasi Digital.</li>
          <li>➤ Mengembangkan, menghasilkan, menyebarluaskan, dan menerapkan teknologi dan inovasi terapan di bidang Teknologi Telekomunikasi Digital pada industri berstandar Internasional.</li>
          <li>➤ Mengembangkan kerjasama dengan industri dan masyarakat nasional dan internasional.</li>
          <li>➤ Mengembangkan keterampilan untuk menjadi technopreneur yang mampu mengembangkan usaha secara mandiri di bidang Telekomunikasi.</li>
        </ul>
      </div>

      <div class="vision-mission-image-wrapper">
        <img src="image/Anggota.jpg" alt="Foto BEM" class="vision-mission-image">
        <div class="vision-mission-badge">
          <p class="year">2025</p>
          <p class="label">HMDT</p>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
