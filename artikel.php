<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - HIMASISFOR</title>
    <link rel="stylesheet" href="assets/css/artikel.css">
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
                <li><a href="artikel.php" class="active">Artikel</a></li>
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
            <li><a href="index.php" onclick="closeMobileMenu()">Beranda</a></li>
            <li><a href="tentang.php" onclick="closeMobileMenu()">Tentang</a></li>
            <li><a href="visimisi.php" onclick="closeMobileMenu()">Visi & Misi</a></li>
            <li><a href="struktur.php" onclick="closeMobileMenu()">Struktur</a></li>
            <li><a href="kegiatan.php" onclick="closeMobileMenu()">Kegiatan</a></li>
            <li><a href="berita.php" onclick="closeMobileMenu()">Berita</a></li>
            <li><a href="artikel.php" class="active" onclick="closeMobileMenu()">Artikel</a></li>
        </ul>
    </div>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Artikel & Tutorial</h1>
            <p>Kumpulan artikel, tutorial, dan insights seputar sistem informasi dan teknologi</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section">
        <div class="filter-container">
            <div class="filter-categories">
                <button class="filter-btn active" data-category="all">Semua</button>
                <button class="filter-btn" data-category="teknologi">Teknologi</button>
                <button class="filter-btn" data-category="tutorial">Tutorial</button>
                <button class="filter-btn" data-category="akademik">Akademik</button>
                <button class="filter-btn" data-category="organisasi">Organisasi</button>
                <button class="filter-btn" data-category="tips">Tips & Trik</button>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Cari artikel..." id="searchInput">
                <button class="search-btn" onclick="searchArticles()">🔍</button>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="articles-section">
        <div class="container">
            <div class="articles-grid" id="articlesGrid">
                <!-- Featured Article -->
                <article class="article-card featured" data-category="teknologi">
                    <div class="article-image">
                        <div class="article-badge">UNGGULAN</div>
                        <div class="article-icon">🚀</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">25 Juli 2025</span>
                            <span class="article-category">Teknologi</span>
                        </div>
                        <h3>Tren Artificial Intelligence dalam Sistem Informasi 2025</h3>
                        <p>Eksplorasi mendalam tentang bagaimana AI mengubah landscape sistem informasi modern, dari
                            machine learning hingga implementasi praktis dalam berbagai industri. Artikel ini membahas
                            perkembangan terbaru dan prediksi masa depan AI.</p>
                        <div class="article-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <div class="article-author">
                                <div class="author-avatar">YA</div>
                                <span class="author-name">Yohanes Angelo</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Regular Articles -->
                <article class="article-card" data-category="tutorial">
                    <div class="article-image">
                        <div class="article-icon">💻</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">23 Juli 2025</span>
                            <span class="article-category">Tutorial</span>
                        </div>
                        <h3>Step-by-Step Membuat API RESTful dengan Node.js</h3>
                        <p>Tutorial lengkap membuat API RESTful menggunakan Node.js dan Express, lengkap dengan
                            authentication dan database integration untuk pemula.</p>
                        <div class="article-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <div class="article-author">
                                <div class="author-avatar">I</div>
                                <span class="author-name">Irwansya</span>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="article-card" data-category="akademik">
                    <div class="article-image">
                        <div class="article-icon">🎓</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">20 Juli 2025</span>
                            <span class="article-category">Akademik</span>
                        </div>
                        <h3>Strategi Efektif Menghadapi Ujian Akhir Semester</h3>
                        <p>Berbagai tips dan trik untuk mempersiapkan ujian akhir semester dengan
                            baik, termasuk manajemen waktu, teknik belajar, dan cara mengatasi stres.</p>
                        <div class="article-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <div class="article-author">
                                <div class="author-avatar">A</div>
                                <span class="author-name">Aditya</span>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="article-card" data-category="organisasi">
                    <div class="article-image">
                        <div class="article-icon">🤝</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">18 Juli 2025</span>
                            <span class="article-category">Organisasi</span>
                        </div>
                        <h3>Peran Organisasi Mahasiswa dalam Pengembangan Karir</h3>
                        <p>Bagaimana organisasi mahasiswa dapat membantu pengembangan karir, networking, dan skill
                            building bagi mahasiswa di era digital.</p>
                        <div class="article-actions">
                            <a href="#" class="read-more">Baca Selengkapnya →</a>
                            <div class="article-author">
                                <div class="author-avatar">R</div>
                                <span class="author-name">Rizky</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- More articles can be added here -->
            </div>

            <!-- Pagination -->
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
                    <p>Universitas Teknologi Akba Makassar<br>Jl. Perintis Kemerdekaan KM.9<br>Makassar, Sulawesi
                        Selatan</p>
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
        // Hamburger Menu Toggle
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('overlay');

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

        // Search Articles Functionality
        function searchArticles() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const articles = document.querySelectorAll('.article-card');

            articles.forEach(article => {
                const title = article.querySelector('h3').textContent.toLowerCase();
                if (title.includes(searchInput)) {
                    article.style.display = 'block';
                } else {
                    article.style.display = 'none';
                }
            });
        }
        // Pagination Functionality
        const articlesGrid = document.getElementById('articlesGrid');
        const paginationBtns = document.querySelectorAll('.pagination-btn');
        let currentPage = 1;
        const articlesPerPage = 4;
        const totalArticles = articlesGrid.children.length;
        const totalPages = Math.ceil(totalArticles / articlesPerPage);
        function updatePagination() {
            paginationBtns.forEach(btn => btn.classList.remove('active'));
            document.getElementById(`page${currentPage}`).classList.add('active');

            const start = (currentPage - 1) * articlesPerPage;
            const end = start + articlesPerPage;

            Array.from(articlesGrid.children).forEach((article, index) => {
                article.style.display = (index >= start && index < end) ? 'block' : 'none';
            });

            document.getElementById('prevPage').disabled = currentPage === 1;
            document.getElementById('nextPage').disabled = currentPage === totalPages;
        }
        paginationBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.id === 'prevPage' && currentPage > 1) {
                    currentPage--;
                } else if (btn.id === 'nextPage' && currentPage < totalPages) {
                    currentPage++;
                } else if (btn.id.startsWith('page')) {
                    currentPage = parseInt(btn.id.replace('page', ''));
                }
                updatePagination();
            });
        });
        // Initial Pagination Setup
        updatePagination();
        // Newsletter Form Submission
        document.getElementById('newsletterForm').addEventListener('submit', function (event) {
            event.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            alert(`Terima kasih telah berlangganan dengan email: ${email}`);
            this.reset();
        });
    </script>
    <script>
        // Particle Effect
        const particlesContainer = document.getElementById('particles');
        const particleCount = 100;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            particle.style.width = `${Math.random() * 5 + 2}px`;
            particle.style.height = particle.style.width;
            particle.style.left = `${Math.random() * 100}vw`;
            particle.style.top = `${Math.random() * 100}vh`;
            particle.style.animationDuration = `${Math.random() * 5 + 3}s`;
            particlesContainer.appendChild(particle);
        }
    </script>
</body>

</html>