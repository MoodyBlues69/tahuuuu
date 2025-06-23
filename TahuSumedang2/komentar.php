<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar - Kota Sumedang</title>
    <link href="CSS/style.css" rel="stylesheet">
    <link href="css/komentar.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <!-- Header -->
        <section class="page-header">
            <div class="container">
                <h1>Komentar Pengunjung</h1>
                <p>Bagikan pengalaman dan kesan Anda tentang Sumedang</p>
            </div>
        </section>

        <!-- Kirim komentar -->
        <section class="content">
            <div class="container">
                <div class="comments-section">
                    <div class="comment-form-section">
                        <h2>Tulis Komentar</h2>
                        <form id="commentForm" onsubmit="addComment(event)">
                            <div class="form-group">
                                <label for="commentName">Nama *</label>
                                <input type="text" id="commentName" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="commentEmail">Email *</label>
                                <input type="email" id="commentEmail" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="rating">Rating *</label>
                                <select id="rating" name="rating" required>
                                    <option value="">Pilih rating</option>
                                    <option value="5">⭐⭐⭐⭐⭐ Sangat Baik</option>
                                    <option value="4">⭐⭐⭐⭐ Baik</option>
                                    <option value="3">⭐⭐⭐ Cukup</option>
                                    <option value="2">⭐⭐ Kurang</option>
                                    <option value="1">⭐ Sangat Kurang</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="commentText">Komentar *</label>
                                <textarea id="commentText" name="comment" rows="5" required placeholder="Bagikan pengalaman Anda tentang Sumedang..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                        </form>
                    </div>

                    <!-- Komentar pengunjung -->
                    <div class="comments-display">
                        <h2>Komentar Pengunjung</h2>
                        <div class="comments-stats">
                            <div class="total-comments">
                                <span id="totalComments">5</span> Komentar
                            </div>
                            <div class="average-rating">
                                Rating: <span id="averageRating">4.2</span> ⭐
                            </div>
                        </div>

                        <div id="commentsList" class="comments-list">
                            <!-- Hasil komentar -->
                            <div class="comment-item">
                                <div class="comment-header">
                                    <div class="comment-author">
                                        <div class="author-avatar">👤</div>
                                        <div class="author-info">
                                            <h4>Nethar Balawan</h4>
                                            <span class="comment-date">20 juni 2025</span>
                                        </div>
                                    </div>
                                    <div class="comment-rating">⭐⭐⭐⭐⭐</div>
                                </div>
                                <div class="comment-content">
                                    <p>Sumedang sangat indah damn! Tahu Sumedangnya enak banget dan Waduk Jatigede pemandangannya luar biasa. Pasti akan kembali lagi!</p>
                                </div>
                            </div>

                            <div class="comment-item">
                                <div class="comment-header">
                                    <div class="comment-author">
                                        <div class="author-avatar">👤</div>
                                        <div class="author-info">
                                            <h4>Farhan Lubis</h4>
                                            <span class="comment-date">18 mei 2025</span>
                                        </div>
                                    </div>
                                    <div class="comment-rating">⭐⭐⭐⭐</div>
                                </div>
                                <div class="comment-content">
                                    <p>Wisata kulinernya mantep! Tahu Sumedang dan dodolnya jadi oleh-oleh wajib. Tempatnya juga bersih dan nyaman.</p>
                                </div>
                            </div>

                            <div class="comment-item">
                                <div class="comment-header">
                                    <div class="comment-author">
                                        <div class="author-avatar">👤</div>
                                        <div class="author-info">
                                            <h4>Raihan Muara</h4>
                                            <span class="comment-date">15 maret 2025</span>
                                        </div>
                                    </div>
                                    <div class="comment-rating">⭐⭐⭐⭐⭐</div>
                                </div>
                                <div class="comment-content">
                                    <p>Gunung Tampomas cocok banget buat hiking! Pemandangannya spektakuler dan jalurnya tidak terlalu sulit. Recommended!</p>
                                </div>
                            </div>

                            <div class="comment-item">
                                <div class="comment-header">
                                    <div class="comment-author">
                                        <div class="author-avatar">👤</div>
                                        <div class="author-info">
                                            <h4>Jumeng</h4>
                                            <span class="comment-date">12 Desember 2024</span>
                                        </div>
                                    </div>
                                    <div class="comment-rating">⭐⭐⭐⭐</div>
                                </div>
                                <div class="comment-content">
                                    <p>Museum Prabu Geusan Ulun sangat informatif. Bisa belajar banyak tentang sejarah Sumedang. Cocok untuk wisata edukasi keluarga.</p>
                                </div>
                            </div>

                            <div class="comment-item">
                                <div class="comment-header">
                                    <div class="comment-author">
                                        <div class="author-avatar">👤</div>
                                        <div class="author-info">
                                            <h4>Ilham Kurniawan</h4>
                                            <span class="comment-date">10 Desember 2024</span>
                                        </div>
                                    </div>
                                    <div class="comment-rating">⭐⭐⭐⭐</div>
                                </div>
                                <div class="comment-content">
                                    <p>Sumedang punya potensi wisata yang besar. Infrastrukturnya juga terus diperbaiki. Semoga semakin berkembang!</p>
                                </div>
                            </div>
                        </div>

                        <div class="load-more">
                            <button class="btn btn-primary" onclick="loadMoreComments()">Muat Komentar Lainnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>