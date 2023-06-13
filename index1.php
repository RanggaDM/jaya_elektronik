<?php
session_start();
include "login-system/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaya Elektronik</title>
    <!--Link Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!--Link Icon-->
    <script src="https://unpkg.com/feather-icons"></script>
    <!--Link CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
    <!--Navbar Start-->
        <nav class="navbar">
            <a href="#" class="navbar-logo">Jaya<span>Elektronik<i data-feather="zap" class="icon-logo"></i></span></a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#produk">Produk</a>
            <a href="#contact">Kontak</a>
            <a class="nama">Welcome, <?php echo $_SESSION['user_name']?> </a>
            <a href="login-system/logout.php" class="tbl-biru">Logout</a>
        </div>

            <div class="navbar-extra">
                <a href="#" id="menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
    <!--Navbar End-->

    <!--Hero Section Start-->
    <section class="hero" id="home">
        <img src="img/HomeApplianceInstallation.jpg"/>
        <main class="content">
            <h1>Segala Kebutuan <span>Elektronik</span> Anda Berada Disini</h1>

            <a href="tabel.php" class="cta">Lihat Barang Disini</a>
        </main>
    </section>
    <!--Hero Section End-->

    <!--About Section Start-->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>
        <div class="row">
            <div class="about-img">
                <img src="img/JayaElektronik.png" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa anda harus memilih kami?</h3>
                <p>Jaya Elektronik adalah sebuah toko yang menjual alat-alat elektronik untuk kebutuhan sehari-hari dengan harga terjangaku </p>
                <p>Alat-alat yang kami jual sudah berkerja-sama dengan brand-brand luar yang terkenal seperti: Samsung, Polytron, Panasonic.</p>
                <p>Toko kami menjual beragam jenis alat-alat elektronik seperti: TV, Kulkas, Mesin Cuci.</p>
            </div>
        </div>
    </section>
    <!--About Section End-->

    <!--Menu Section Start-->
    <section id="produk" class="produk">
        <h2>Produk</h2>
        <div class="row">
            <div class="produk-card">
                <img src="img/Tv.png" alt="Tv" class="produk-card-img">
                <h3 class="produk-card-title">Tv</h3>
            </div>
            <div class="produk-card">
                <img src="img/mesin cuci.png" alt="Tv" class="produk-card-img">
                <h3 class="produk-card-title">Mesin Cuci</h3>
            </div>
            <div class="produk-card">
                <img src="img/Kulkas.png" alt="Tv" class="produk-card-img">
                <h3 class="produk-card-title">Kulkas</h3>
            </div>
            <div class="produk-card">
                <img src="img/micromave.png" alt="Tv" class="produk-card-img">
                <h3 class="produk-card-title">Oven</h3>
            </div> 
        </div>

    </section>
    <!--Menu Section End-->

    <!--Mitra Kerja Mulai-->
    <section id="mitrakerja">
        <div class="tengah">
            <div class="kolom">
                <h2>Mitra Kerja</h2>
            </div>
            <div class="mitrakerja-list">
                <div class="gambar-mitrakerja">
                    <img src="https://www.logolynx.com/images/logolynx/40/405a2a58f9abf3553fa96a29d2ae67c6.jpeg"/>
                    <p>Samsung</p> 
                </div>
                    <div class="gambar-mitrakerja">
                        <img src="https://infosumbar.net//aset/arsip/2012/12/logo-panasonic.jpg"/>
                        <p>Panasonic</p> 
                </div>
                <div class="gambar-mitrakerja">
                    <img src="https://1.bp.blogspot.com/-8ZdpoVgYFEU/Xz5sgEM9JNI/AAAAAAAACyc/AxgmtzLi-8E6p4fGl2jOz-R6HuSv_esOgCLcBGAsYHQ/s400/Logo%2BPhilips.png"/>
                    <p>Philips</p> 
                </div>
                    <div class="gambar-mitrakerja">
                        <img src="https://static.miraheze.org/avidwiki/thumb/3/34/LG_Electronics_%281995%29_%282%29.png/400px-LG_Electronics_%281995%29_%282%29.png"/>
                        <p>LG</p> 
                </div>
            </div>
        </div>
    </section>
    <!--Mitra Kerja Selesai-->

    <!--Kontak Section Start/-->
    <section id="contact" class="contact">
        <h2>Kontak Kami</h2>
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.818286668242!2d109.3082752144534!3d-0.007444135569248674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5899b6d7a20f%3A0x197e79a750be80ef!2sJaya%20Elektronik!5e0!3m2!1sid!2sid!4v1679338865677!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user" class="icon-map"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail" class="icon-map"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="input-group">
                    <i data-feather="phone" class="icon-map"></i>
                    <input type="text" placeholder="no hp">
                </div>
                <button href="https://wa.me/62895612353266/?text=Saya+ingin+tertarik+untuk+memesan+barang" type="submit" class="btn">kirim pesan</button>
                </div>
            </form>
        </div>
    </section>
    <!--Kontak Section End-->

    <!--Footer Mulai-->
    <footer>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#produk">Produk</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="credit">
            <p>Created by <a href="">Team JayaElektronik</a>. |&copy; 2023, All Rights Reserved.</p>
        </div>
    </footer>
    <!--Footer Selesai-->

    <!--Icon Feather-->
    <script>
      feather.replace()
    </script>

    <!--My Javascript-->
    <script src="js/script.js"></script>
</body>
</html>