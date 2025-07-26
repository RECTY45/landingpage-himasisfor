<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/struktur.css">
      
    </style>
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
                <li><a href="struktur.php" class="active">Struktur</a></li>
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
            <li><a href="index.php" onclick="closeMobileMenu()">Beranda</a></li>
            <li><a href="tentang.php" onclick="closeMobileMenu()">Tentang</a></li>
            <li><a href="visimisi.php" onclick="closeMobileMenu()">Visi & Misi</a></li>
            <li><a href="struktur.php" class="active" onclick="closeMobileMenu()">Struktur</a></li>
            <li><a href="kegiatan.php" onclick="closeMobileMenu()">Kegiatan</a></li>
            <li><a href="berita.php" onclick="closeMobileMenu()">Berita</a></li>
            <li><a href="artikel.php" onclick="closeMobileMenu()">Artikel</a></li>
        </ul>
    </div>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Struktur Organisasi HIMASISFOR</h1>
            <p>Struktur Himpunan Mahasiswa Sistem Informasi Unitama</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <div class="main-container">

            <div class="headers">
                <h2>HIMPUNAN MAHASISWA SISTEM INFORMASI</h2>
                <h2>(HIMASISFOR) UNITAMA</h2>
                <p>PERIODE 2025-2026</p>
            </div>

            <div class="org-chart">
                <!-- BPPO -->
                <div class="bppo-section">
                    BPPO
                </div>
                <div class="division-content">
                    <div class="division-title ketua">Ketua Umum</div>
                <!-- Ketua Umum -->
                <div class="person-card special-glow">
                    <div class="person-card" onclick="showModal('Yohanes Angelo Kastro', 'Ketua Umum')">
                        <div class="avatar"><img src="assets/img/pengurus/yohan.jpg" alt="Yohanes Angelo Kastro"></div>
                        <div class="position">Ketua Umum</div>
                        <div class="name">Yohanes Angelo Kastro</div>
                    </div>
                </div>
                <div class="division-content">
                    <div class="division-title sekben">Sekertari Umum Dan Bendahara Umum</div>
                    <!-- Sekretaris dan Bendahara -->
                    <div class="sekretaris-bendahara">
                        <div class="person-card special-glow" onclick="showModal('Irwansya', 'Sekretaris Umum')">
                            <div class="avatar"><img src="assets/img/pengurus/anca.jpg" alt="Irwansya"></div>
                            <div class="position">Sekretaris Umum</div>
                            <div class="name">Irwansya</div>
                        </div>
                        <div class="person-card special-glow" onclick="showModal('Mutmainnah Dewi', 'Bendahara Umum')">
                            <div class="avatar"><img src="assets/img/pengurus/dewi.jpg" alt="Mutmainnah Dewi"></div>
                            <div class="position">Bendahara Umum</div>
                            <div class="name">Mutmainnah Dewi</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Divisi -->
            <div class="divisions-container">
                <!-- Divisi PAO -->
                <div class="division-content">
                    <div class="division-title pao">Divisi PAO</div>
                    <div class="person-card special-glow" onclick="showModal('Andi Alfian Rusani', 'Koordinator PAO')">
                        <div class="avatar"><img src="assets/img/pengurus/alfian.jpg" alt="Andi Alfian Rusani"></div>
                        <div class="position">Koordinator</div>
                        <div class="name">Andi Alfian Rusani</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Nurul Miftahul Khaerah', 'Anggota PAO')">
                        <div class="avatar"><img src="assets/img/pengurus/nurul.jpg" alt="Nurul Miftahul Khaerah"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Nurul Miftahul Khaerah</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Andika Jaya', 'Anggota PAO')">
                        <div class="avatar"><img src="assets/img/pengurus/dika.jpg" alt="Andika Jaya"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Andika Jaya</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Nursyafika', 'Anggota PAO')">
                        <div class="avatar"><img src="assets/img/pengurus/fikha.jpg" alt="Nursyafika"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Nursyafika</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Nailah Salsabila', 'Anggota PAO')">
                        <div class="avatar"><img src="assets/img/pengurus/naila.jpg" alt="Nailah Salsabila"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Nailah Salsabila</div>
                    </div>
                </div>

                <!-- Divisi IPTEK -->
                <div class="division-content">
                    <div class="division-title iptek">Divisi IPTEK</div>
                    <div class="person-card special-glow" onclick="showModal('I Gede Faiz Febrianto', 'Koordinator IPTEK')">
                        <div class="avatar"><img src="assets/img/pengurus/faiz.jpg" alt="I Gede Faiz Febrianto"></div>
                        <div class="position">Koordinator</div>
                        <div class="name">I Gede Faiz Febrianto</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Meisya Dary Putri', 'Anggota IPTEK')">
                        <div class="avatar"><img src="assets/img/pengurus/meisya.jpg" alt="Meisya Dary Putri"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Meisya Dary Putri</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Isni Fardilla', 'Anggota IPTEK')">
                        <div class="avatar"><img src="assets/img/pengurus/isni.jpg" alt="Isni Fardilla"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Isni Fardilla</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Jumrotun Layiliyah', 'Anggota IPTEK')">
                        <div class="avatar"><img src="assets/img/pengurus/layli.jpg" alt="Jumrotun Layiliyah"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Jumirotun Layiliyah</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Inri Dalulimbong', 'Anggota IPTEK')">
                        <div class="avatar"><img src="assets/img/pengurus/inri.jpg" alt="Inri Dalulimbong"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Inri Dalulimbong</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Nabila Fania Putri', 'Anggota IPTEK')">
                        <div class="avatar"><img src="assets/img/pengurus/nabila.jpg" alt="Nabila Fania Putri"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Nabila Fania Putri</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Ismi Muliani Iskandar', 'Anggota IPTEK')">
                        <div class="avatar"><img src="assets/img/pengurus/ismi.jpg" alt="Ismi Muliani Iskandar"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Isni Mufliani Iskandar</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Fery Fadlul Rahman', 'Anggota IPTEK')">
                        <div class="avatar"><img src="assets/img/pengurus/fery.jpg" alt="Fery Fadlul Rahman"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Fery Fadlul Rahman</div>
                    </div>
                </div>

                <!-- Divisi HUMAS -->
                <div class="division-content">
                    <div class="division-title humas">Divisi HUMAS</div>
                    <div class="person-card special-glow" onclick="showModal('NURHILMI', 'Koordinator HUMAS')">
                        <div class="avatar"><img src="assets/img/pengurus/hilmi.jpg" alt="NURHILMI"></div>
                        <div class="position">Koordinator</div>
                        <div class="name">NURHILMI</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Dwi Purnamasari Sulaiman', 'Anggota Humas')">
                        <div class="avatar"><img src="assets/img/pengurus/cantika.jpg" alt="Dwi Purnamasari Sulaiman"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Dwi Purnamasari Sulaiman</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Dwi Alfiana', 'Anggota Humas')">
                        <div class="avatar"><img src="assets/img/pengurus/dwi.jpg" alt="Dwi Alfiana"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Dwi Alfiana</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Andini', 'Anggota Humas')">
                        <div class="avatar"><img src="assets/img/pengurus/dini.jpg" alt="Andini"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Andini</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Muhammad Akib Alamsyah', 'Anggota Humas')">
                        <div class="avatar"><img src="assets/img/pengurus/akib.jpg" alt="Muhammad Akib Alamsyah"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Muhammad Akib Alamsyah</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Rana Zahra Aishilah Sainuddin', 'Anggota Humas')">
                        <div class="avatar"><img src="assets/img/pengurus/rana.jpg" alt="Rana Zahra Aishilah Sainuddin"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Rana Zahra Aishilah Sainuddin</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Amrita Pratiwi', 'Anggota Humas')">
                        <div class="avatar"><img src="assets/img/pengurus/mita.jpg" alt="Amrita Pratiwi"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Amrita Pratiwi</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Nanda Maharani', 'Anggota Humas')">
                        <div class="avatar"><img src="assets/img/pengurus/nanda.jpg" alt="Nanda Maharani"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Nanda Maharani</div>
                    </div>
                </div>

                <!-- Divisi Kesekretariatan -->
                <div class="division-content">
                    <div class="division-title kesektariatan">Divisi Kesekretariatan</div>
                    <div class="person-card special-glow" onclick="showModal('Sitti Amunarwati', 'Koordinator KESEK')">
                        <div class="avatar"><img src="assets/img/pengurus/narti.jpg" alt="Sitti Amunarwati"></div>
                        <div class="position">Koordinator</div>
                        <div class="name">Sitti Amunarwati</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Andi Sulfaeni', 'Anggota Kesek')">
                        <div class="avatar"><img src="assets/img/pengurus/sulfa.jpg" alt="Andi Sulfaeni"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Andi Sulfaeni</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Alya Baharuddin', 'Anggota Kesek')">
                        <div class="avatar"><img src="assets/img/pengurus/alya.jpg" alt="Alya Baharuddin"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Alya Baharuddin</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Aditya Adi Putra', 'Anggota Kesek')">
                        <div class="avatar"><img src="assets/img/pengurus/adit.jpg" alt="Aditya Adi Putra"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Aditya Adi Putra</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Muh Nur Ahzan', 'Anggota Kesek')">
                        <div class="avatar"><img src="assets/img/pengurus/ahzan.jpg" alt="Muh Nur Ahzan"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Muh Nur Ahzan</div>
                    </div>
                    <div class="connection-line"></div>
                    <div class="person-card" onclick="showModal('Maria Frida Usfal', 'Anggota Kesek')">
                        <div class="avatar"><img src="assets/img/pengurus/maria.jpg" alt="Maria Frida Usfal"></div>
                        <div class="position">Anggota</div>
                        <div class="name">Maria Frida Usfal</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div id="personModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="modal-avatar" id="modalAvatar">avatar</div>
            <h2 id="modalName">Nama</h2>
            <p id="modalPosition">Posisi</p>
        </div>
    </div>

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
                <a href="index.php">Beranda</a>
                <a href="tentang.php">Tentang</a>
                <a href="visimisi.php">Visi & Misi</a>
                <a href="struktur.php">Kepemimpinan</a>
                <a href="kegiatan.php">Kegiatan</a>
            </div>
        </div>
    </footer>

    <script>
        // Hamburger Menu Toggle
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
                hamburger.classList.remove('active');
                mobileMenu.classList.remove('active');
            }
        });

        // Close mobile menu function
        function closeMobileMenu() {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
        }

        // Modal Functions
        function showModal(name, position) {
            const modal = document.getElementById('personModal');
            const modalName = document.getElementById('modalName');
            const modalPosition = document.getElementById('modalPosition');
            const modalAvatar = document.getElementById('modalAvatar');

            modalName.textContent = name;
            modalPosition.textContent = position;
            modalAvatar.textContent = name.charAt(0).toUpperCase();

            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('personModal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('personModal');
            if (event.target == modal) {
                closeModal();
            }
        }

        // Particle Effect
        const particlesContainer = document.getElementById('particles');
        const particleCount = 50;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            particle.style.width = `${Math.random() * 4 + 2}px`;
            particle.style.height = particle.style.width;
            particle.style.left = `${Math.random() * 100}vw`;
            particle.style.top = `${Math.random() * 100}vh`;
            particle.style.animationDuration = `${Math.random() * 4 + 4}s`;
            particle.style.animationDelay = `${Math.random() * 2}s`;
            particlesContainer.appendChild(particle);
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add click animation to person cards
        document.querySelectorAll('.person-card').forEach(card => {
            card.addEventListener('click', function() {
                this.classList.add('clicked');
                setTimeout(() => {
                    this.classList.remove('clicked');
                }, 600);
            });
        });
    </script>
</body>

</html>