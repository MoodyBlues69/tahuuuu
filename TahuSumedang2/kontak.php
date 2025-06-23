<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata - Kota Sumedang</title>
    <link href="CSS/style.css" rel="stylesheet">
    <link href="css/kontak.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <!-- Header -->
        <section class="page-header">
            <div class="container">
                <h1>Kontak Kami</h1>
                <p>Hubungi kami untuk kritik dan saran</p>
            </div>
        </section>

    <main>
    <!-- Kontak kami -->
    <section class="content">
            <div class="container">
                <div class="contact-layout">
                    <div class="contact-info">
                        <h2>Informasi Kontak</h2>
                        
                        <div class="contact-item">
                            <div class="contact-icon">🏢</div>
                            <div class="contact-details">
                                <h3>Alamat</h3>
                                <p>Jl. Mayor Abdurachman No. 1<br>Sumedang, Jawa Barat 45311</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">📞</div>
                            <div class="contact-details">
                                <h3>Telepon</h3>
                                <p>(0261) 201234<br>(0261) 205678</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">✉️</div>
                            <div class="contact-details">
                                <h3>Email</h3>
                                <p>info@sumedangkab.go.id<br>humas@sumedangkab.go.id</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">🕒</div>
                            <div class="contact-details">
                                <h3>Jam Operasional</h3>
                                <p>Senin - Jumat: 08:00 - 16:00<br>Sabtu: 08:00 - 12:00</p>
                            </div>
                        </div>

                        <div class="social-media">
                            <h3>Media Sosial</h3>
                        <div class="social-links">
                            <a href="https://m.facebook.com/dikominfosanditikkabsumedang/" target="_blank" class="social-link">
                                <img src="IMAGE/facebook-icon.png" alt="Facebook" width="20" height="20"> Facebook
                            </a>
                            <a href="https://www.instagram.com/diskominfosanditiksumedang?igsh=MW1laHZtM2w1YjMw" target="_blank" class="social-link">
                                <img src="IMAGE/instagram-icon.png" alt="Instagram" width="20" height="20"> Instagram
                            </a>
                            <a href="https://x.com/BpbdKabSumedang?t=dN2jneUYAOu84-3h2gzFqA&s=09" target="_blank" class="social-link">
                                <img src="IMAGE/twitter-icon.png" alt="Twitter" width="20" height="20"> Twitter
                            </a>
                            <a href="https://youtube.com/@diskominfosanditikkab.sume6625?si=Ka_9wk2jhnvE0VJe" target="_blank" class="social-link">
                                <img src="IMAGE/youtube-icon.png" alt="YouTube" width="20" height="20"> YouTube
                            </a>
                        </div>
                        </div>
                    </div>
                    
                    <!-- Kirim pesan -->
                    <div class="contact-form">
                        <h2>Kirim Pesan</h2>
                        <form id="contactForm" onsubmit="submitContact(event)">
                            <div class="form-group">
                                <label for="name">Nama Lengkap *</label>
                                <input type="text" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="tel" id="phone" name="phone">
                            </div>

                            <div class="form-group">
                                <label for="subject">Subjek *</label>
                                <select id="subject" name="subject" required>
                                    <option value="">Pilih Subjek</option>
                                    <option value="informasi">Permintaan Informasi</option>
                                    <option value="saran">Saran</option>
                                    <option value="kritik">Kritik</option>
                                    <option value="pengaduan">Pengaduan</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message">Pesan *</label>
                                <textarea id="message" name="message" rows="6" required placeholder="Tulis pesan Anda di sini..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body?>
</html>