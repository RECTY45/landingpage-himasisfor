<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMASISFOR - Profile Organisasi</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
                <li><a href="index.php" class="active">Beranda</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="visimisi.php">Visi & Misi</a></li>
                <li><a href="struktur.php">Struktur</a></li>
                <li><a href="kegiatan.php">Kegiatan</a></li>
                <li><a href="berita.php">Berita</a></li>
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
            <li><a href="#berita.php" onclick="closeMobileMenu()">Berita</a></li>
            <li><a href="artikel.php" onclick="closeMobileMenu()">Artikel</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>HIMASISFOR</h1>
            <h2>Himpunan Mahasiswa Sistem Informasi</h2>
            <p>Universitas Teknologi Akba Makassar (UNITAMA)</p>
            <p>Periode 2025-2026</p>
            <button class="cta-button" onclick="scrollToSection('about')">Jelajahi Lebih Lanjut</button>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Tentang HIMASISFOR</h2>
                <p>Organisasi mahasiswa yang berfokus pada pengembangan bidang sistem informasi dan teknologi</p>
            </div>
            <div class="about-grid">
                <div class="about-card">
                    <h3>Sejarah</h3>
                    <p>HIMASISFOR didirikan sebagai wadah aspirasi mahasiswa Sistem Informasi UNITAMA untuk mengembangkan potensi akademik dan non-akademik dalam bidang teknologi informasi.</p>
                </div>
                <div class="about-card">
                    <h3>Tujuan</h3>
                    <p>Menjadi organisasi yang mampu mencetak lulusan Sistem Informasi yang berkualitas, berkarakter, dan siap menghadapi tantangan era digital.</p>
                </div>
                <div class="about-card">
                    <h3>Komitmen</h3>
                    <p>Berkomitmen untuk terus berinovasi dalam mengembangkan kegiatan yang bermanfaat bagi kemajuan program studi dan universitas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section id="vision" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Visi & Misi</h2>
                <p>Landasan filosofis yang mengarahkan setiap langkah organisasi</p>
            </div>
            <div class="vision-mission">
                <div class="vision-card">
                    <h3>VISI</h3>
                    <p>Menjadi organisasi mahasiswa yang unggul dalam bidang sistem informasi dan teknologi, yang mampu menghasilkan lulusan yang kompeten, inovatif, dan berkarakter, serta berkontribusi positif bagi kemajuan bangsa dan negara.</p>
                </div>
                <div class="mission-card">
                    <h3>MISI</h3>
                    <p>• Mengembangkan potensi akademik dan non-akademik mahasiswa<br>
                    • Memfasilitasi kegiatan yang mendukung pembelajaran teknologi informasi<br>
                    • Menjalin kerjasama dengan berbagai pihak untuk pengembangan organisasi<br>
                    • Menjadi wadah aspirasi dan kreativitas mahasiswa sistem informasi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section id="leadership" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Kepemimpinan</h2>
                <p>Struktur kepemimpinan periode 2025-2026</p>
            </div>
            <div class="leadership-grid">
                <div class="leader-card">
                    <div class="leader-avatar">YA</div>
                    <h4>Yohanes Angelo Kastro</h4>
                    <p>Ketua Umum</p>
                </div>
                <div class="leader-card">
                    <div class="leader-avatar">I</div>
                    <h4>Irwansya</h4>
                    <p>Sekretaris Umum</p>
                </div>
                <div class="leader-card">
                    <div class="leader-avatar">MD</div>
                    <h4>Mutmainnah Dewi</h4>
                    <p>Bendahara Umum</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Divisions Section -->
    <section id="divisions" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Divisi Organisasi</h2>
                <p>Struktur divisi yang menjalankan program kerja organisasi</p>
            </div>
            <div class="divisions-grid">
                <div class="division-card pao">
                    <div class="division-icon">📚</div>
                    <h4>Divisi PAO</h4>
                    <p>Divisi Pengembangan Akademik dan Organisasi yang fokus pada kegiatan akademik dan pengembangan organisasi internal.</p>
                </div>
                <div class="division-card iptek">
                    <div class="division-icon">💻</div>
                    <h4>Divisi IPTEK</h4>
                    <p>Divisi Ilmu Pengetahuan dan Teknologi yang mengelola kegiatan teknologi informasi dan inovasi digital.</p>
                </div>
                <div class="division-card humas">
                    <div class="division-icon">🤝</div>
                    <h4>Divisi HUMAS</h4>
                    <p>Divisi Hubungan Masyarakat yang menjalin komunikasi dan kerjasama dengan pihak eksternal.</p>
                </div>
                <div class="division-card kesek">
                    <div class="division-icon">📋</div>
                    <h4>Divisi Kesekretariatan</h4>
                    <p>Divisi yang mengelola administrasi, dokumentasi, dan kegiatan sekretariat organisasi.</p>
                </div>
            </div>
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