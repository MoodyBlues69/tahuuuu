<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - Kota Sumedang</title>
    <link href="CSS/style.css" rel="stylesheet">
    <link href="css/berita.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <!-- Header -->
        <section class="page-header">
            <div class="container">
                <h1>Berita Sumedang</h1>
                <p>Informasi terkini seputar Kabupaten Sumedang</p>
            </div>
        </section>

        <!-- Berita utama -->
        <section class="featured-news">
            <div class="container">
                <h2>Berita Utama</h2>
                <div class="featured-news-card">
                    <img src="IMAGE/festiv.jpg" alt="Festival Tahu Sumedang 2024">
                    <div class="featured-news-content">
                        <div class="news-meta">
                            <span class="news-category">Event</span>
                            <span class="news-date">📅 15 Juni 2025</span>
                            <span class="news-views">👁️ 1250</span>
                        </div>
                        <h3>Festival Tahu Sumedang 2025 Siap Digelar</h3>
                        <p>Festival Tahu Sumedang 2025 akan diselenggarakan pada tanggal 20-7-2025 di Alun-alun Sumedang. Acara ini akan menampilkan berbagai kompetisi kuliner, pameran produk UMKM, dan pertunjukan seni budaya.</p>
                        <div class="news-footer">
                            <span class="news-author">👤 Atmin</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Berita lainnya -->
        <section class="news-grid-section">
            <div class="container">
                <!-- Header Berita Lainnya (style sama dengan featured news) -->
                <div class="featured-news-header">
                    <h2>Berita Lainnya</h2>
                </div>
                <div class="news-grid">
                    <div class="news-card">
                        <img src="IMAGE/jalan-raya.jpg" alt="Pembangunan Jalan Raya Sumedang-Bandung" class="news-thumbnail">
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-badge">Infrastruktur</span>
                                <span class="news-date">📅 12 April 2025</span>
                                <span class="news-views">👁️ 890</span>
                            </div>
                            <h3>Pembangunan Infrastruktur Jalan Raya Sumedang-Bandung</h3>
                            <p class="news-author">👤 Dinas Jalan</p>
                            <p>Proyek pembangunan dan perbaikan jalan raya Sumedang-Bandung memasuki tahap akhir dan diharapkan selesai pada akhir tahun 2025.</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <img src="IMAGE/beasiswa.jpg" alt="Program Beasiswa Pendidikan" class="news-thumbnail">
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-badge">Pendidikan</span>
                                <span class="news-date">📅 10 Juni 2025</span>
                                <span class="news-views">👁️ 1100</span>
                            </div>
                            <h3>Program Beasiswa Pendidikan untuk Siswa Berprestasi</h3>
                            <p class="news-author">👤 Dinas Pendidikan</p>
                            <p>Pemkab Sumedang meluncurkan program beasiswa pendidikan untuk 500 siswa berprestasi dari keluarga kurang mampu.</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <img src="IMAGE/penghargaan.jpg" alt="Penghargaan Kabupaten Terbersih" class="news-thumbnail">
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-badge">Lingkungan</span>
                                <span class="news-date">📅 8 Juni 2025</span>
                                <span class="news-views">👁️ 750</span>
                            </div>
                            <h3>Sumedang Raih Penghargaan Kabupaten Terbersih</h3>
                            <p class="news-author">👤 Dinas Lingkungan Hidup</p>
                            <p>Kabupaten Sumedang berhasil meraih penghargaan sebagai kabupaten terbersih tingkat Jawa Barat tahun 2025.</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <img src="IMAGE/pariwisata.png" alt="Website Pariwisata Sumedang" class="news-thumbnail">
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-badge">Pariwisata</span>
                                <span class="news-date">📅 5 Mei 2025</span>
                                <span class="news-views">👁️ 650</span>
                            </div>
                            <h3>Launching Website Resmi Pariwisata Sumedang</h3>
                            <p class="news-author">👤 Dinas Pariwisata</p>
                            <p>Dinas Pariwisata Sumedang meluncurkan website resmi untuk mempromosikan destinasi wisata dan produk lokal.</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <img src="IMAGE/umkm.jpg" alt="Pelatihan UMKM Digital Marketing" class="news-thumbnail">
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-badge">Ekonomi</span>
                                <span class="news-date">📅 3 Juni 2025</span>
                                <span class="news-views">👁️ 420</span>
                            </div>
                            <h3>Pelatihan UMKM Digital Marketing</h3>
                            <p class="news-author">👤 Dinas Koperasi</p>
                            <p>Dinas Koperasi dan UMKM menggelar pelatihan digital marketing untuk 200 pelaku UMKM di Sumedang.</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <img src="IMAGE/sekolah.jpg" alt="Pembangunan Sekolah Baru" class="news-thumbnail">
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-badge">Pendidikan</span>
                                <span class="news-date">📅 1 Juni 2025</span>
                                <span class="news-views">👁️ 380</span>
                            </div>
                            <h3>Pembangunan Sekolah Baru di Kecamatan Tanjungsari</h3>
                            <p class="news-author">👤 Dinas Pendidikan</p>
                            <p>Pemerintah daerah membangun sekolah dasar baru untuk meningkatkan akses pendidikan di daerah terpencil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>
</body>
</html>