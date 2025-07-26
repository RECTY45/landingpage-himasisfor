    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HIMASISFOR - Kegiatan</title>
        <link rel="stylesheet" href="assets/css/kegiatan.css">
    </head>

    <body>
        <!-- Floating Particles -->
        <div class="particles" id="particles"></div>
        <!-- Overlay -->
        <div class="overlay" id="overlay"></div>

        <!-- Navigation -->
        <nav class="navbar">
            <div class="nav-content">
                <div class="logo">HIMASISFOR</div>
                <ul class="nav-links">
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="tentang.php">Tentang</a></li>
                    <li><a href="visimisi.php">Visi & Misi</a></li>
                    <li><a href="struktur.php">Struktur</a></li>
                    <li><a href="kegiatan.php" class="active">Kegiatan</a></li>
                    <li><a href="berita.php">Berita</a></li>
                    <li><a href="artikel.php">Artikel</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>


            </div>
        </nav>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <ul>
                <li><a href="index.php" onclick="closeMobileMenu()">Beranda</a></li>
                <li><a href="tentang.php" onclick="closeMobileMenu()">Tentang</a></li>
                <li><a href="visimisi.php" onclick="closeMobileMenu()">Visi & Misi</a></li>
                <li><a href="struktur.php" onclick="closeMobileMenu()">Struktur</a></li>
                <li><a href="kegiatan.php" class="active" onclick="closeMobileMenu()">Kegiatan</a></li>
                <li><a href="berita.php" onclick="closeMobileMenu()">Berita</a></li>
                <li><a href="artikel.php" onclick="closeMobileMenu()">Artikel</a></li>
            </ul>
        </div>


        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>Kegiatan HIMASISFOR</h1>
                <p>Beragam program dan aktivitas yang mendukung pengembangan mahasiswa sistem informasi</p>
            </div>
        </section>

        <!-- Main Content -->
        <main class="main-content">
            <div class="container">
                <!-- Filter Tabs -->
                <div class="filter-tabs">
                    <div class="filter-tab active" data-category="all">Semua Kegiatan</div>
                    <div class="filter-tab" data-category="academic">Akademik</div>
                    <div class="filter-tab" data-category="technology">Teknologi</div>
                    <div class="filter-tab" data-category="social">Sosial</div>
                    <div class="filter-tab" data-category="competition">Kompetisi</div>
                </div>

                <!-- Featured Activity -->
                <div class="featured-activity">
                    <div class="featured-content">
                        <div class="featured-info">
                            <h3>TECHNO FEST 2025</h3>
                            <p>Event teknologi terbesar HIMASISFOR periode ini yang menggabungkan kompetisi programming, workshop AI, dan expo startup. Bergabunglah dengan lebih dari 500 peserta dari seluruh Indonesia!</p>
                            <button class="featured-cta">Daftar Sekarang</button>
                        </div>
                        <div class="featured-visual">
                            <div class="feature-item">
                                <div class="icon">🏆</div>
                                <h4>10+ Kompetisi</h4>
                                <p>Berbagai kategori kompetisi teknologi</p>
                            </div>
                            <div class="feature-item">
                                <div class="icon">👨‍💻</div>
                                <h4>500+ Peserta</h4>
                                <p>Mahasiswa dari seluruh Indonesia</p>
                            </div>
                            <div class="feature-item">
                                <div class="icon">💰</div>
                                <h4>100 Juta</h4>
                                <p>Total hadiah kompetisi</p>
                            </div>
                            <div class="feature-item">
                                <div class="icon">🎯</div>
                                <h4>15+ Workshop</h4>
                                <p>Pelatihan teknologi terkini</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Academic Activities -->
                <div class="category-section academic" data-category="academic">
                    <div class="category-header">
                        <div class="category-icon">📚</div>
                        <div>
                            <h3>Kegiatan Akademik</h3>
                            <div class="category-description">Program pengembangan akademik dan penelitian untuk meningkatkan kompetensi mahasiswa</div>
                        </div>
                    </div>

                    <div class="activity-grid">
                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">📖</div>
                                <h4>Study Club Programming</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">Setiap Minggu</span>
                                <span class="activity-type">Rutin</span>
                            </div>
                            <p class="activity-description">Kegiatan belajar bersama untuk memperdalam pemahaman bahasa pemrograman dan algoritma. Dipandu oleh senior dan alumni berpengalaman.</p>
                            <ul class="activity-features">
                                <li>Materi dari dasar hingga advanced</li>
                                <li>Praktik coding langsung</li>
                                <li>Diskusi problem solving</li>
                                <li>Peer learning session</li>
                            </ul>
                            <span class="activity-status status-ongoing">Berlangsung</span>
                        </div>

                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">🔬</div>
                                <h4>Research Methodology Workshop</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">15 Maret 2025</span>
                                <span class="activity-type">Workshop</span>
                            </div>
                            <p class="activity-description">Pelatihan metodologi penelitian untuk mahasiswa yang akan mengerjakan tugas akhir atau proyek penelitian.</p>
                            <ul class="activity-features">
                                <li>Teknik penulisan ilmiah</li>
                                <li>Penggunaan tools riset</li>
                                <li>Analisis data statistik</li>
                                <li>Sertifikat pelatihan</li>
                            </ul>
                            <span class="activity-status status-upcoming">Akan Datang</span>
                        </div>

                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">🎓</div>
                                <h4>Seminar Skripsi</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">20 Feb 2025</span>
                                <span class="activity-type">Seminar</span>
                            </div>
                            <p class="activity-description">Sharing session dari alumni dan mahasiswa senior mengenai tips dan trik mengerjakan skripsi dengan efektif.</p>
                            <ul class="activity-features">
                                <li>Pemilihan topik skripsi</li>
                                <li>Manajemen waktu penelitian</li>
                                <li>Tips presentasi dan sidang</li>
                                <li>Q&A dengan narasumber</li>
                            </ul>
                            <span class="activity-status status-completed">Selesai</span>
                        </div>
                    </div>
                </div>

                <!-- Technology Activities -->
                <div class="category-section technology" data-category="technology">
                    <div class="category-header">
                        <div class="category-icon">💻</div>
                        <div>
                            <h3>Kegiatan Teknologi</h3>
                            <div class="category-description">Workshop dan pelatihan teknologi terkini untuk mengikuti perkembangan industri IT</div>
                        </div>
                    </div>

                    <div class="activity-grid">
                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">🤖</div>
                                <h4>AI & Machine Learning Workshop</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">25 Maret 2025</span>
                                <span class="activity-type">Workshop</span>
                            </div>
                            <p class="activity-description">Pelatihan intensif tentang kecerdasan buatan dan machine learning menggunakan Python dan framework populer seperti TensorFlow dan PyTorch.</p>
                            <ul class="activity-features">
                                <li>Pengenalan AI dan ML fundamentals</li>
                                <li>Hands-on dengan Python libraries</li>
                                <li>Project-based learning</li>
                                <li>Sertifikat dari instruktur profesional</li>
                            </ul>
                            <span class="activity-status status-upcoming">Akan Datang</span>
                        </div>

                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">🌐</div>
                                <h4>Web Development Bootcamp</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">10-12 Maret 2025</span>
                                <span class="activity-type">Bootcamp</span>
                            </div>
                            <p class="activity-description">Bootcamp intensif 3 hari untuk belajar web development dari dasar hingga advanced menggunakan teknologi modern.</p>
                            <ul class="activity-features">
                                <li>HTML, CSS, JavaScript fundamentals</li>
                                <li>React.js dan Node.js</li>
                                <li>Database integration</li>
                                <li>Deployment dan hosting</li>
                            </ul>
                            <span class="activity-status status-upcoming">Akan Datang</span>
                        </div>

                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">📱</div>
                                <h4>Mobile App Development</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">5 April 2025</span>
                                <span class="activity-type">Workshop</span>
                            </div>
                            <p class="activity-description">Workshop pengembangan aplikasi mobile menggunakan Flutter untuk Android dan iOS dengan satu codebase.</p>
                            <ul class="activity-features">
                                <li>Flutter framework introduction</li>
                                <li>Dart programming language</li>
                                <li>UI/UX design principles</li>
                                <li>App publishing guidelines</li>
                            </ul>
                            <span class="activity-status status-upcoming">Akan Datang</span>
                        </div>

                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">☁️</div>
                                <h4>Cloud Computing Seminar</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">18 Feb 2025</span>
                                <span class="activity-type">Seminar</span>
                            </div>
                            <p class="activity-description">Seminar tentang cloud computing dan layanan AWS untuk pengembangan aplikasi modern dan scalable.</p>
                            <ul class="activity-features">
                                <li>AWS services overview</li>
                                <li>Cloud architecture best practices</li>
                                <li>Cost optimization strategies</li>
                                <li>Hands-on AWS demo</li>
                            </ul>
                            <span class="activity-status status-completed">Selesai</span>
                        </div>
                    </div>
                </div>

                <!-- Social Activities -->
                <div class="category-section social" data-category="social">
                    <div class="category-header">
                        <div class="category-icon">🤝</div>
                        <div>
                            <h3>Kegiatan Sosial</h3>
                            <div class="category-description">Program pengabdian masyarakat dan kegiatan sosial untuk mengaplikasikan ilmu teknologi</div>
                        </div>
                    </div>

                    <div class="activity-grid">
                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">👨‍🏫</div>
                                <h4>Digital Literacy Program</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">Setiap Bulan</span>
                                <span class="activity-type">Pengabdian</span>
                            </div>
                            <p class="activity-description">Program pelatihan literasi digital untuk masyarakat umum, khususnya UMKM dan lansia di sekitar kampus.</p>
                            <ul class="activity-features">
                                <li>Pelatihan penggunaan smartphone</li>
                                <li>Workshop media sosial untuk bisnis</li>
                                <li>Edukasi keamanan digital</li>
                                <li>Pendampingan berkelanjutan</li>
                            </ul>
                            <span class="activity-status status-ongoing">Berlangsung</span>
                        </div>

                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">🏥</div>
                                <h4>Healthcare IT Solutions</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">22 Maret 2025</span>
                                <span class="activity-type">Proyek Sosial</span>
                            </div>
                            <p class="activity-description">Pengembangan sistem informasi sederhana untuk puskesmas daerah guna meningkatkan efisiensi layanan kesehatan.</p>
                            <ul class="activity-features">
                                <li>Analisis kebutuhan sistem</li>
                                <li>Pengembangan aplikasi custom</li>
                                <li>Pelatihan penggunaan sistem</li>
                                <li>Maintenance dan support</li>
                            </ul>
                            <span class="activity-status status-upcoming">Akan Datang</span>
                        </div>

                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">🎒</div>
                                <h4>School IT Support</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">15 April 2025</span>
                                <span class="activity-type">Volunteer</span>
                            </div>
                            <p class="activity-description">Program volunteer untuk membantu sekolah-sekolah dalam penggunaan teknologi dan maintenance komputer.</p>
                            <ul class="activity-features">
                                <li>Maintenance komputer sekolah</li>
                                <li>Setup jaringan internet</li>
                                <li>Pelatihan guru tentang IT</li>
                                <li>Instalasi software educational</li>
                            </ul>
                            <span class="activity-status status-upcoming">Akan Datang</span>
                        </div>
                    </div>
                </div>

                <!-- Competition Activities -->
                <div class="category-section competition" data-category="competition">
                    <div class="category-header">
                        <div class="category-icon">🏆</div>
                        <div>
                            <h3>Kompetisi & Lomba</h3>
                            <div class="category-description">Berbagai kompetisi teknologi untuk mengasah kemampuan dan meraih prestasi</div>
                        </div>
                    </div>

                    <div class="activity-grid">
                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">💻</div>
                                <h4>Competitive Programming</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">30 Maret 2025</span>
                                <span class="activity-type">Kompetisi</span>
                            </div>
                            <p class="activity-description">Kompetisi programming dengan soal-soal algoritma dan struktur data tingkat nasional.</p>
                            <ul class="activity-features">
                                <li>Individual dan team category</li>
                                <li>Online judge system</li>
                                <li>Hadiah total 25 juta rupiah</li>
                                <li>Sertifikat untuk semua peserta</li>
                            </ul>
                            <span class="activity-status status-upcoming">Akan Datang</span>
                        </div>

                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">🎨</div>
                                <h4>UI/UX Design Contest</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">8 April 2025</span>
                                <span class="activity-type">Kompetisi</span>
                            </div>
                            <p class="activity-description">Lomba desain antarmuka dan pengalaman pengguna untuk aplikasi mobile dan web.</p>
                            <ul class="activity-features">
                                <li>Kategori mobile dan web design</li>
                                <li>Prototype interactive required</li>
                                <li>Juri dari industri profesional</li>
                                <li>Workshop dengan design expert</li>
                            </ul>
                            <span class="activity-status status-upcoming">Akan Datang</span>
                        </div>

                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">🚀</div>
                                <h4>Startup Pitch Competition</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">20 April 2025</span>
                                <span class="activity-type">Kompetisi</span>
                            </div>
                            <p class="activity-description">Kompetisi pitch ide startup teknologi dengan mentoring dari investor dan entrepreneur berpengalaman.</p>
                            <ul class="activity-features">
                                <li>Business plan presentation</li>
                                <li>Mentoring session dengan investor</li>
                                <li>Funding opportunity untuk winner</li>
                                <li>Networking dengan startup ecosystem</li>
                            </ul>
                            <span class="activity-status status-upcoming">Akan Datang</span>
                        </div>

                        <div class="activity-card">
                            <div class="activity-header">
                                <div class="activity-icon">🔒</div>
                                <h4>Cybersecurity CTF</h4>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-date">12 Jan 2025</span>
                                <span class="activity-type">Kompetisi</span>
                            </div>
                            <p class="activity-description">Capture The Flag competition focusing on cybersecurity challenges and ethical hacking.</p>
                            <ul class="activity-features">
                                <li>Web security challenges</li>
                                <li>Cryptography puzzles</li>
                                <li>Network forensics</li>
                                <li>Real-world scenario simulation</li>
                            </ul>
                            <span class="activity-status status-completed">Selesai</span>
                        </div>
                    </div>
                </div>

                <!-- Statistics Section -->
                <div class="stats-section">
                    <div class="section-title">
                        <h2>Statistik Kegiatan 2025</h2>
                        <p>Pencapaian dan partisipasi dalam berbagai program kegiatan</p>
                    </div>

                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number" data-target="45">0</div>
                            <div class="stat-label">Total Kegiatan</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-target="1200">0</div>
                            <div class="stat-label">Peserta Aktif</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-target="25">0</div>
                            <div class="stat-label">Workshop & Seminar</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-target="8">0</div>
                            <div class="stat-label">Kompetisi</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-target="15">0</div>
                            <div class="stat-label">Program Sosial</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-target="95">0</div>
                            <div class="stat-label">Tingkat Kepuasan (%)</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <p>&copy; 2025 HIMASISFOR UNITAMA. All rights reserved.</p>
                <p>Himpunan Mahasiswa Sistem Informasi - Universitas Teknologi Akba Makassar</p>
                <div class="footer-links">
                    <a href="index.html">Beranda</a>
                    <a href="about.html">Tentang</a>
                    <a href="vision.html">Visi & Misi</a>
                    <a href="structure.html">Kepemimpinan</a>
                    <a href="activities.html">Kegiatan</a>
                </div>
            </div>
        </footer>

        <script>
            // Particle System
            function createParticles() {
                const particlesContainer = document.getElementById('particles');
                const particleCount = 30;

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

            // Filter functionality
            function initializeFilters() {
                const filterTabs = document.querySelectorAll('.filter-tab');
                const categories = document.querySelectorAll('.category-section');

                filterTabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        // Remove active class from all tabs
                        filterTabs.forEach(t => t.classList.remove('active'));
                        // Add active class to clicked tab
                        tab.classList.add('active');

                        const selectedCategory = tab.getAttribute('data-category');

                        // Show/hide categories based on filter
                        categories.forEach(category => {
                            if (selectedCategory === 'all' || category.classList.contains(selectedCategory)) {
                                category.style.display = 'block';
                                category.style.opacity = '0';
                                setTimeout(() => {
                                    category.style.opacity = '1';
                                }, 100);
                            } else {
                                category.style.opacity = '0';
                                setTimeout(() => {
                                    category.style.display = 'none';
                                }, 300);
                            }
                        });
                    });
                });
            }

            // Counter Animation
            function animateCounters() {
                const counters = document.querySelectorAll('.stat-number');

                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-target'));
                    const increment = target / 50;
                    let current = 0;

                    const updateCounter = () => {
                        if (current < target) {
                            current += increment;
                            counter.textContent = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    };

                    updateCounter();
                });
            }

            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.style.background = 'rgba(0, 0, 0, 0.98)';
                } else {
                    navbar.style.background = 'rgba(0, 0, 0, 0.95)';
                }
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

            // Staggered animation for activity cards
            function animateActivityCards() {
                const activitySections = document.querySelectorAll('.category-section');

                activitySections.forEach(section => {
                    const cards = section.querySelectorAll('.activity-card');
                    const sectionObserver = new IntersectionObserver(function(entries) {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                cards.forEach((card, index) => {
                                    setTimeout(() => {
                                        card.style.opacity = '1';
                                        card.style.transform = 'translateY(0)';
                                    }, index * 150);
                                });
                                sectionObserver.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.2
                    });

                    sectionObserver.observe(section);
                });
            }

            // Initialize
            document.addEventListener('DOMContentLoaded', function() {
                createParticles();
                initializeFilters();

                // Set initial states for animations
                const activityCards = document.querySelectorAll('.activity-card');
                activityCards.forEach(card => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(30px)';
                    card.style.transition = 'all 0.6s ease-out';
                });

                // Initialize staggered animations
                animateActivityCards();

                // Observe other elements for animation
                const animatedElements = document.querySelectorAll('.featured-activity, .stats-section');
                animatedElements.forEach(element => {
                    element.style.opacity = '0';
                    element.style.transform = 'translateY(30px)';
                    element.style.transition = 'all 0.8s ease-out';
                    observer.observe(element);
                });

                // Stats animation observer
                const statsObserver = new IntersectionObserver(function(entries) {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            setTimeout(animateCounters, 500);
                            statsObserver.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.3
                });

                const statsSection = document.querySelector('.stats-section');
                if (statsSection) {
                    statsObserver.observe(statsSection);
                }
            });

            const hamburger = document.querySelector('.hamburger');
            const mobileMenu = document.querySelector('.mobile-menu');
            const overlay = document.querySelector('.overlay');

            if (hamburger && mobileMenu && overlay) {
                hamburger.addEventListener('click', () => {
                    hamburger.classList.toggle('active');
                    mobileMenu.classList.toggle('active');
                    overlay.classList.toggle('active');
                });

                overlay.addEventListener('click', () => {
                    hamburger.classList.remove('active');
                    mobileMenu.classList.remove('active');
                    overlay.classList.remove('active');
                });
            }

            // Add click handlers for activity cards
            document.querySelectorAll('.activity-card').forEach(card => {
                card.addEventListener('click', function() {
                    // Add ripple effect
                    const ripple = document.createElement('div');
                    ripple.style.position = 'absolute';
                    ripple.style.borderRadius = '50%';
                    ripple.style.background = 'rgba(255, 255, 255, 0.3)';
                    ripple.style.transform = 'scale(0)';
                    ripple.style.animation = 'ripple 0.6s linear';
                    ripple.style.left = '50%';
                    ripple.style.top = '50%';
                    ripple.style.width = '20px';
                    ripple.style.height = '20px';
                    ripple.style.marginLeft = '-10px';
                    ripple.style.marginTop = '-10px';

                    this.style.position = 'relative';
                    this.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Add ripple keyframes
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