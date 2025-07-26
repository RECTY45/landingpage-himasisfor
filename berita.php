<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita & Kegiatan - HIMASISFOR</title>
    <link rel="stylesheet" href="assets/css/berita.css">
</head>

<body>
    <!-- Floating Particles -->
    <div class="particles" id="particles"></div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-content">
            <div class="logo">HIMASISFOR</div>
            <ul class="nav-links">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="visimisi.php">Visi & Misi</a></li>
                <li><a href="struktur.php">Struktur</a></li>
                <li><a href="kegiatan.php">Kegiatan</a></li>
                <li><a href="berita.php" class="active">Berita</a></li>
                <li><a href="artikel.php">Artikel</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li><a href="index.php" class="active" onclick="closeMobileMenu()">Beranda</a></li>
            <li><a href="tentang.php" onclick="closeMobileMenu()">Tentang</a></li>
            <li><a href="visimisi.php" onclick="closeMobileMenu()">Visi & Misi</a></li>
            <li><a href="struktur.php" onclick="closeMobileMenu()">Struktur</a></li>
            <li><a href="kegiatan.php" onclick="closeMobileMenu()">Kegiatan</a></li>
            <li><a href="berita.php" class="active" onclick="closeMobileMenu()">Berita</a></li>
            <li><a href="artikel.php" onclick="closeMobileMenu()">Artikel</a></li>
        </ul>
    </div>


    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Berita & Kegiatan</h1>
            <p>Update terkini tentang aktivitas dan pencapaian HIMASISFOR UNITAMA</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section">
        <div class="filter-container">
            <div class="filter-categories">
                <button class="filter-btn active" data-category="all">Semua</button>
                <button class="filter-btn" data-category="prestasi">Prestasi</button>
                <button class="filter-btn" data-category="workshop">Workshop</button>
                <button class="filter-btn" data-category="kerjasama">Kerjasama</button>
                <button class="filter-btn" data-category="akademik">Akademik</button>
                <button class="filter-btn" data-category="kegiatan">Kegiatan</button>
                <button class="filter-btn" data-category="teknologi">Teknologi</button>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Cari berita..." id="searchInput">
                <button class="search-btn" onclick="searchNews()">🔍</button>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="container">
            <div class="news-grid" id="newsGrid">
                <!-- Featured News -->
                <article class="news-card featured" data-category="prestasi">
                    <div class="news-image">
                        <div class="news-badge">TERBARU</div>
                        <div class="news-icon">🏆</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">25 Juli 2025</span>
                            <span class="news-category">Prestasi</span>
                        </div>
                        <h3>HIMASISFOR Raih Juara 1 Kompetisi Aplikasi Mobile se-Sulawesi</h3>
                        <p>Tim mahasiswa Sistem Informasi UNITAMA berhasil meraih juara pertama dalam kompetisi
                            pengembangan aplikasi mobile dengan tema "Smart Campus Solution". Aplikasi yang dikembangkan
                            berhasil memukau juri dengan inovasi dan fungsionalitas yang luar biasa.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>

                <!-- Regular News Cards -->
                <article class="news-card" data-category="workshop">
                    <div class="news-image">
                        <div class="news-icon">💻</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">20 Juli 2025</span>
                            <span class="news-category">Workshop</span>
                        </div>
                        <h3>Workshop "AI & Machine Learning for Students"</h3>
                        <p>HIMASISFOR mengadakan workshop tentang penerapan AI dan Machine Learning dengan pembicara
                            dari industri teknologi terkemuka.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>

                <article class="news-card" data-category="kerjasama">
                    <div class="news-image">
                        <div class="news-icon">🤝</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">15 Juli 2025</span>
                            <span class="news-category">Kerjasama</span>
                        </div>
                        <h3>MoU dengan PT. Telkom Indonesia</h3>
                        <p>HIMASISFOR menandatangani MoU dengan PT. Telkom Indonesia untuk program magang dan
                            pengembangan skill mahasiswa.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>

                <article class="news-card" data-category="akademik">
                    <div class="news-image">
                        <div class="news-icon">📚</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">10 Juli 2025</span>
                            <span class="news-category">Akademik</span>
                        </div>
                        <h3>Seminar Nasional "Future of Information Systems"</h3>
                        <p>Seminar nasional yang menghadirkan para ahli sistem informasi untuk membahas tren dan masa
                            depan teknologi informasi.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>

                <article class="news-card" data-category="kegiatan">
                    <div class="news-image">
                        <div class="news-icon">🎓</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">5 Juli 2025</span>
                            <span class="news-category">Kegiatan</span>
                        </div>
                        <h3>Pelantikan Pengurus HIMASISFOR Periode 2025-2026</h3>
                        <p>Acara pelantikan pengurus baru HIMASISFOR dengan agenda penyampaian visi misi dan program
                            kerja.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>

                <article class="news-card" data-category="teknologi">
                    <div class="news-image">
                        <div class="news-icon">🌐</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">1 Juli 2025</span>
                            <span class="news-category">Teknologi</span>
                        </div>
                        <h3>Launching Website Resmi HIMASISFOR</h3>
                        <p>Website resmi HIMASISFOR telah diluncurkan dengan fitur-fitur modern dan informasi lengkap.
                        </p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>

                <article class="news-card" data-category="workshop">
                    <div class="news-image">
                        <div class="news-icon">🔧</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">28 Juni 2025</span>
                            <span class="news-category">Workshop</span>
                        </div>
                        <h3>Pelatihan Web Development dengan Framework Modern</h3>
                        <p>Workshop intensif tentang pengembangan web menggunakan React, Node.js, dan teknologi terdepan
                            lainnya.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>

                <article class="news-card" data-category="prestasi">
                    <div class="news-image">
                        <div class="news-icon">🥇</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">25 Juni 2025</span>
                            <span class="news-category">Prestasi</span>
                        </div>
                        <h3>Mahasiswa SI Juara Hackathon Nasional 2025</h3>
                        <p>Tim dari program studi Sistem Informasi berhasil meraih juara dalam hackathon nasional dengan
                            solusi inovatif.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>

                <article class="news-card" data-category="akademik">
                    <div class="news-image">
                        <div class="news-icon">📖</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">20 Juni 2025</span>
                            <span class="news-category">Akademik</span>
                        </div>
                        <h3>Kuliah Tamu: "Digital Transformation in Business</h3>
                        <p>Kuliah tamu dengan pembicara dari industri yang membahas transformasi digital dalam bisnis dan
                            teknologi informasi.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>
                <article class="news-card" data-category="kegiatan">
                    <div class="news-image">
                        <div class="news-icon">🎉</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">15 Juni 2025</span>
                            <span class="news-category">Kegiatan</span>
                        </div>
                        <h3>Festival Teknologi HIMASISFOR 2025</h3>
                        <p>Festival tahunan yang menampilkan inovasi teknologi mahasiswa dengan berbagai lomba dan
                            pameran.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>
                <article class="news-card" data-category="teknologi">
                    <div class="news-image">
                        <div class="news-icon">🖥️</div >
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">10 Juni 2025</span>
                            <span class="news-category">Teknologi</span>
                        </div>
                        <h3>Webinar "Tren Teknologi Informasi 2025"</h3>
                        <p>Webinar yang membahas tren terbaru dalam teknologi informasi dan dampaknya terhadap industri.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>
                <article class="news-card" data-category="workshop">
                    <div class="news-image">
                        <div class="news-icon">📊</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">5 Juni 2025</span>
                            <span class="news-category">Workshop</span>
                        </div>
                        <h3>Workshop "Data Science dan Big Data"</h3>
                        <p>Workshop tentang penerapan data science dan big data dalam pengambilan keputusan bisnis.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>
                <article class="news-card" data-category="prestasi">
                    <div class="news-image">
                        <div class="news-icon">🏅</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">1 Juni 2025</span>
                            <span class="news-category">Prestasi</span>
                        </div>
                        <h3>HIMASISFOR Raih Penghargaan Inovasi Teknologi 2025</h3>
                        <p>Penghargaan untuk HIMASISFOR atas kontribusi dalam inovasi teknologi dan pengembangan aplikasi
                            berbasis sistem informasi.</p>
                        <div class="news-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <button class="share-btn">📤 Share</button>
                        </div>
                    </div>
                </article>
            </div>
        </div>

           <nav class="pagination">
                <button class="pagination-btn" id="prevPage" disabled>← Sebelumnya</button>
                <button class="pagination-btn active" id="page1">1</button>
                <button class="pagination-btn" id="page2">2</button>
                <button class="pagination-btn" id="page3">3</button>
                <button class="pagination-btn" id="nextPage">Selanjutnya →</button>
            </nav>
        </div>
        
    </section>
   
    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Hubungi Kami</h2>
                <p>Jangan ragu untuk menghubungi kami untuk informasi lebih lanjut</p>
            </div>
            <div class="about-grid">
                <div class="about-card">
                    <h3>Alamat</h3>
                    <p>Universitas Teknologi Akba Makassar<br>Jl. Perintis Kemerdekaan KM.9<br>Makassar, Sulawesi Selatan</p>
                </div>
                <div class="about-card">
                    <h3>Email</h3>
                    <p>himasisfor@unitama.ac.id<br>info.himasisfor@gmail.com</p>
                </div>
                <div class="about-card">
                    <h3>Media Sosial</h3>
                    <p>Instagram: @himasisfor_unitama<br>Facebook: HIMASISFOR UNITAMA<br>WhatsApp: +62 812-3456-7890</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 HIMASISFOR UNITAMA. All rights reserved.</p>
            <p>Himpunan Mahasiswa Sistem Informasi - Universitas Teknologi Akba Makassar</p>
            <div class="footer-links">
                <a href="#home">Beranda</a>
                <a href="#about">Tentang</a>
                <a href="#vision">Visi & Misi</a>
                <a href="struktur.php">Kepemimpinan</a>
                <a href="#divisions">Divisi</a>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const hamburger = document.getElementById('hamburger');
            const mobileMenu = document.getElementById('mobileMenu');
            const overlay = document.getElementById('overlay');
            
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            overlay.classList.toggle('active');
        }

        function closeMobileMenu() {
            const hamburger = document.getElementById('hamburger');
            const mobileMenu = document.getElementById('mobileMenu');
            const overlay = document.getElementById('overlay');
            
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
        }

        // Particle System
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.width = Math.random() * 4 + 2 + 'px';
                particle.style.height = particle.style.width;
                particle.style.animationDelay = Math.random() * 6 + 's';
                particle.style.animationDuration = (Math.random() * 3 + 3) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Smooth scroll function
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
            closeMobileMenu(); // Close mobile menu after navigation
        }

        // Navbar scroll effect and active section detection
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(0, 0, 0, 0.95)';
            } else {
                navbar.style.background = 'rgba(0, 0, 0, 0.9)';
            }

            // Update active nav link based on scroll position
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-links a, .mobile-menu a');
            
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= sectionTop - 200) {
                    currentSection = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + currentSection) {
                    link.classList.add('active');
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            
            // Hamburger menu event listener
            document.getElementById('hamburger').addEventListener('click', toggleMobileMenu);
            
            // Overlay click to close menu
            document.getElementById('overlay').addEventListener('click', closeMobileMenu);
            
            // Close menu on window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    closeMobileMenu();
                }
            });
            
            // Observe all cards for animation
            const cards = document.querySelectorAll('.about-card, .leader-card, .division-card, .vision-card, .mission-card');
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'all 0.6s ease-out';
                observer.observe(card);
            });
        });

        // Add click ripple effect to CTA button
        document.querySelector('.cta-button').addEventListener('click', function(e) {
            const button = e.target;
            const ripple = document.createElement('span');
            const rect = button.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(255, 255, 255, 0.3)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'ripple 0.6s linear';
            ripple.style.pointerEvents = 'none';
            
            button.style.position = 'relative';
            button.style.overflow = 'hidden';
            button.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });

        // Add ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>