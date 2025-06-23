<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - Kota Sumedang</title>
    <link href="CSS/style.css" rel="stylesheet">
    <link href="css/tentang.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <!-- Header -->
        <section class="page-header">
            <div class="container">
                <h1>Tentang Sumedang</h1>
                <p>Mengenal lebih dekat Kabupaten Sumedang</p>
            </div>
        </section>

        <!-- Sejarah singkat -->
        <section class="history-section">
            <div class="history-container">
                <div class="history-content">
                    <h2 class="section-title">Sejarah Singkat</h2>
                    <p>Sumedang berasal dari kata "Suci Medang" yang berarti tempat suci dalam tradisi Sunda kuno. Wilayah ini memiliki sejarah panjang mulai dari masa Kerajaan Sunda, berkembang menjadi Kerajaan Sumedang Larang pada abad ke-16, hingga menjadi kabupaten modern.</p>
                    <p>Dikenal sebagai pusat budaya dan pendidikan di Jawa Barat, Sumedang menyimpan banyak peninggalan bersejarah dari era kolonial. Kota ini juga terkenal dengan julukan "Kota Tahu" karena makanan khasnya yang mendunia, serta "Kota Pendidikan" karena memiliki kampus-kampus ternama seperti Universitas Padjadjaran dan IPDN.</p>
                </div>
                <img src="IMAGE/alun-alun.jpg" alt="Sejarah Sumedang" class="history-image">
            </div>
        </section>

        <!-- Data singkat -->
        <section class="stats-section">
            <div class="stats-container">
                <h2 class="stats-title">Data Singkat</h2>
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3>1.2 Juta</h3>
                        <p>Jumlah Penduduk</p>
                    </div>
                    <div class="stat-card">
                        <h3>1,558 km²</h3>
                        <p>Luas Wilayah</p>
                    </div>
                    <div class="stat-card">
                        <h3>26</h3>
                        <p>Jumlah Kecamatan</p>
                    </div>
                    <div class="stat-card">
                        <h3>1596</h3>
                        <p>Tahun Berdiri</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Budaya & Tradisi -->
        <section class="culture-section">
            <div class="culture-container">
                <h2 class="section-title">Budaya & Tradisi</h2>
                
                <div class="culture-grid">
                    <img src="IMAGE/budaya.webp" alt="Budaya Sumedang" class="culture-image">
                    
                    <div class="culture-content">
                        <h3 class="culture-category">Seni Tradisional</h3>
                        <ul class="culture-list">
                            <li><strong>Wayang Golek</strong> - Seni pertunjukan wayang khas Sunda dengan cerita epik</li>
                            <li><strong>Tari Jaipong</strong> - Tarian energik dengan kostum warna-warni</li>
                            <li><strong>Degung</strong> - Alat musik tradisional bernada lembut</li>
                            <li><strong>Angklung</strong> - Alat musik bambu yang mendunia</li>
                        </ul>
                        
                        <h3 class="culture-category">Kuliner Khas</h3>
                        <ul class="culture-list">
                            <li><strong>Tahu Sumedang</strong> - Renyah di luar, lembut di dalam</li>
                            <li><strong>Sate Maranggi</strong> - Sate khas dengan bumbu kecap spesial</li>
                            <li><strong>Dodol Gandum</strong> - Manisan tradisional yang kenyal</li>
                            <li><strong>Ubi Cilembu</strong> - Ubi madu alami yang manis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>         
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>