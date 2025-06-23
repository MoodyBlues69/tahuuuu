<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata - Kota Sumedang</title>
    <link href="CSS/style.css" rel="stylesheet">
    <link href="css/wisata.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <!-- Header -->
        <section class="page-header">
            <div class="container">
                <h1>Wisata Sumedang</h1>
                <p>Jelajahi keindahan dan keunikan destinasi wisata Sumedang</p>
            </div>
        </section>

        <!-- Wisata -->
        <section class="content">
            <div class="container">
                <div class="tourism-categories">
                    <div class="category-tabs">
                        <button class="tab-btn active" onclick="showCategory('wisata-alam')">Wisata Alam</button>
                        <button class="tab-btn" onclick="showCategory('wisata-budaya')">Wisata Budaya</button>
                        <button class="tab-btn" onclick="showCategory('wisata-kuliner')">Wisata Kuliner</button>
                    </div>

                    <div id="wisata-alam" class="category-content active">
                        <div class="tourism-grid">
                            <div class="tourism-card">
                                <img src="IMAGE/Hiking.jpg" alt="Gunung Tampomas" />
                                <div class="card-content">
                                    <h3>Gunung Tampomas</h3>
                                    <p>Gunung dengan ketinggian 1.684 mdpl yang menawarkan pemandangan spektakuler dan jalur pendakian yang menantang.</p>
                                    <div class="card-info">
                                        <span class="location"> Kec. Sukasari</span>
                                        <span class="rating">⭐ 4.5/5</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tourism-card">
                                <img src="IMAGE/jatigede.jpg" alt="Waduk Jatigede" />
                                <div class="card-content">
                                    <h3>Waduk Jatigede</h3>
                                    <p>Waduk terbesar di Jawa Barat dengan pemandangan yang indah dan berbagai aktivitas air.</p>
                                    <div class="card-info">
                                        <span class="location"> Kec. Jatigede</span>
                                        <span class="rating">⭐ 4.3/5</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tourism-card">
                                <img src="IMAGE/curug.jpg" alt="Curug Cigorobog" />
                                <div class="card-content">
                                    <h3>Curug Cigorobog</h3>
                                    <p>Air terjun yang tersembunyi dengan suasana alami dan udara yang sejuk.</p>
                                    <div class="card-info">
                                        <span class="location"> Kec. Cisitu</span>
                                        <span class="rating">⭐ 4.2/5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wisata-budaya" class="category-content">
                        <div class="tourism-grid">
                            <div class="tourism-card">
                                <img src="IMAGE/museum.jpg" alt="Museum Prabu Geusan Ulun" />
                                <div class="card-content">
                                    <h3>Museum Prabu Geusan Ulun</h3>
                                    <p>Museum yang menyimpan berbagai koleksi sejarah dan budaya Sumedang.</p>
                                    <div class="card-info">
                                        <span class="location"> Kec. Sumedang Utara</span>
                                        <span class="rating">⭐ 4.1/5</span>
                                    </div>
                                </div>
                            </div>

                             <div class="tourism-card">
                                <img src="IMAGE/benteng.jpeg" alt="benteng pasir" />
                                <div class="card-content">
                                    <h3>Benteng Pasir Kolecer</h3>
                                    <p>Benteng peninggalan Belanda yang dibangun pada tahun 1907 oleh pemerintah kolonial Belanda untuk menghadang musuh dari arah selatan.</p>
                                    <div class="card-info">
                                        <span class="location"> Kec. Sumedang selatan</span>
                                        <span class="rating">⭐ 4.5/5</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tourism-card">
                                <img src="IMAGE/naga.jpg" alt="Kampung Naga" />
                                <div class="card-content">
                                    <h3>Kampung Naga</h3>
                                    <p>Kampung yang masih mempertahankan tradisi dan budaya Sunda secara tradisional, termasuk rumah-rumah panggung yang terbuat dari bambu dan ijuk.</p>
                                    <div class="card-info">
                                        <span class="location"> Kec. Sumedang selatan</span>
                                        <span class="rating">⭐ 4.0/5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wisata-kuliner" class="category-content">
                        <div class="tourism-grid">
                            <div class="tourism-card">
                                <img src="IMAGE/saung.webp" alt="saung teko" />
                                <div class="card-content">
                                    <h3>Saung Teko</h3>
                                    <p>Rumah makan yang menyediakan banyak hidangan khas sunda seperti iga sapi, gepuk sapi, ikan gurame, ikan nila, olahan ayam, aneka sayur, sambal dan masih banyak lagi.</p>
                                    <div class="card-info">
                                        <span class="location"> Kec. Cimalaka</span>
                                        <span class="rating">⭐ 4.4/5</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tourism-card">
                                <img src="IMAGE/Sawargi.jpg" alt="Rumah Makan Sawargi" />
                                <div class="card-content">
                                    <h3>Rumah Makan Sawargi</h3>
                                    <p>Rumah makan yang satu ini memiliki menu istimewa yang terkenal akan kelezatannya, yaitu ayam presto dan ayam bakar bakakak. Seluruhnya menggunakan bahan dasar ayam kampung berukuran besar yang lezat  dan sangat menggugah selera.<p>
                                    <div class="card-info">
                                        <span class="location"> Kec. Sumedang Utara</span>
                                        <span class="rating">⭐ 4.4/5</span>
                                    </div>
                                </div>
                            </div>

                            <div class="tourism-card">
                                <img src="IMAGE/tahu.jpg" alt="tahu sumedang" />
                                <div class="card-content">
                                    <h3>Tahu Palasari Sumedang</h3>
                                    <p>Tempat untuk membeli oleh-oleh ataupun menikmati tahu Sumedang secara langsung di tempat yang nyaman.<p>
                                    <div class="card-info">
                                        <span class="location"> Kec. Sumedang Utara</span>
                                        <span class="rating">⭐ 4.4/5</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>