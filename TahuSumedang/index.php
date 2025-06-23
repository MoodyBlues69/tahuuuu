<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota Sumedang - Beranda</title>
    <link href="CSS/style.css" rel="stylesheet">
    <link href="CSS/index.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <!-- Header beranda -->
        <section class="hero">
            <div class="hero-content">
                <h1>Selamat Datang di Kota Sumedang</h1>
                <p>Kota yang kaya akan sejarah, budaya, dan kuliner khas</p>
                <a href="wisata.php" class="btn btn-primary">Jelajahi Wisata</a>
            </div>
        </section>

        <!-- Quick info -->
        <section class="info-cards">
            <div class="container">
                <div class="cards-grid">
                    <div class="card">
                        <div class="card-icon">🏠</div>
                        <h3>Lokasi Strategis</h3>
                        <p>Terletak di Jawa Barat dengan akses mudah ke berbagai kota besar</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">👥</div>
                        <h3>Penduduk Ramah</h3>
                        <p>Masyarakat yang hangat dan menjunjung tinggi nilai budaya</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">📃</div>
                        <h3>Sejarah Panjang</h3>
                        <p>Kaya akan sejarah dan tradisi yang telah berlangsung berabad-abad</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">🚌</div>
                        <h3>Mudah Diakses</h3>
                        <p>Transportasi dan komunikasi yang memadai untuk kemudahan berkunjung</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Preview wisata -->
        <section class="tourism-preview">
            <div class="container">
                <h2>Destinasi Wisata</h2>
                <div class="tourism-grid">
                    <div class="tourism-card">
                        <img src="IMAGE/tahu.jpg" alt="Tahu Sumedang" />
                        <h3>Kuliner Tahu Sumedang</h3>
                        <p>Nikmati kelezatan tahu Sumedang yang terkenal</p>
                    </div>
                    <div class="tourism-card">
                        <img src="IMAGE/Hiking.jpg" alt="Gunung Tampomas" />
                        <h3>Gunung Tampomas</h3>
                        <p>Pendakian dengan pemandangan yang menakjubkan</p>
                    </div>
                    <div class="tourism-card">
                        <img src="IMAGE/jatigede.jpg" alt="Waduk Jatigede" />
                        <h3>Waduk Jatigede</h3>
                        <p>Waduk terbesar di Jawa Barat</p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="wisata.php" class="btn btn-primary">Lihat Semua Wisata</a>
                </div>
            </div>
        </section>

        <!-- Preview berita -->
        <section class="news-preview">
            <div class="container">
                <div class="section-header">
                    <h2>Berita Terkini</h2>
                </div>
                
                <div class="news-grid">
                    <article class="news-card">
                        <h3>Festival Tahu Sumedang 2024</h3>
                        <p class="news-date">📅 15 juni 2025</p>
                        <p>Festival kuliner tahu Sumedang akan diselenggarakan bulan depan dengan berbagai acara menarik...</p>
                    </article>
                    
                    <article class="news-card">
                        <h3>Pembangunan Infrastruktur Jalan raya</h3>
                        <p class="news-date">📅 12 april 2025</p>
                        <p>Pemerintah daerah terus mengembangkan infrastruktur pariwisata untuk mendukung pertumbuhan ekonomi...</p>
                    </article>
                </div>
                
                <div class="news-button-container">
                    <a href="berita.php" class="btn btn-primary">Berita Selanjutnya</a>
                </div>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>
</body>
</html>