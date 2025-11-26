<x-layout>
    <div class="floating-element floating-1"></div>
    <div class="floating-element floating-2"></div>
    <div class="floating-element floating-3"></div>
    <div class="floating-element floating-4"></div>
    <div class="floating-element floating-5"></div>
    <div class="floating-element floating-6"></div>

    <div id="load" class="load">
        <div class="load-content">
            <div id="load-status"></div>
            <h1 id="load-title"></h1>
            <h3 id="load-text"></h3>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    <span id="typing-text">Temukan Kamar Impian Anda</span>
                    <span class="cursor">|</span>
                </h1>
                <p class="hero-subtitle fade-in-element">
                    Platform terpercaya untuk menyewa kamar berkualitas di seluruh
                    Indonesia
                </p>
                <div class="hero-stats fade-in-element">
                    <div class="stat-item">
                        <span class="stat-number" data-target="10000">0</span>
                        <span class="stat-label">Kamar Tersedia</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="8">0</span>
                        <span class="stat-label">Kota Utama</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="25000">0</span>
                        <span class="stat-label">Pengguna Puas</span>
                    </div>
                </div>
                <div class="hero-buttons fade-in-element">
                    <button class="btn-primary magnetic-btn" onclick="location.href='login/'">
                        Mulai Pencarian 🔍
                    </button>
                    <button class="btn-secondary magnetic-btn" onclick="scrollToAbout()">
                        Pelajari Lebih Lanjut
                    </button>
                </div>
            </div>
            <div class="hero-visual fade-in-element">
                <div class="hero-card tilt-card">
                    <div class="card-header">
                        <div class="card-avatar">🏡</div>
                        <div class="card-info">
                            <h4>Hotel Terpopuler</h4>
                            <p>Nusa Dua Hotel</p>
                        </div>
                    </div>
                    <div class="card-image">
                        <img src="Assets/hotel/Bali/nusaduahotel.jpg" alt="Kamar Premium" class="room-photo" />
                    </div>
                    <div class="card-footer">
                        <span class="price">Rp 550.000 / malam</span>
                        <div class="rating">⭐ 4.9</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="tentang">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Mengapa Pilih StarRoom?</h2>
                <p class="section-subtitle">
                    Kami memberikan pengalaman terbaik dalam mencari dan menyewa kamar
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🔍</div>
                    <h3 class="feature-title">Pencarian Mudah</h3>
                    <p class="feature-description">
                        Temukan kamar sesuai kriteria Anda dengan filter canggih dan
                        pencarian yang intuitif
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">✅</div>
                    <h3 class="feature-title">Kamar Terverifikasi</h3>
                    <p class="feature-description">
                        Semua kamar telah melalui proses verifikasi ketat untuk memastikan
                        kualitas dan keamanan
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3 class="feature-title">Harga Transparan</h3>
                    <p class="feature-description">
                        Tidak ada biaya tersembunyi. Semua harga sudah termasuk listrik,
                        air, dan fasilitas
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3 class="feature-title">Transaksi Aman</h3>
                    <p class="feature-description">
                        Sistem pembayaran yang aman dan terpercaya dengan jaminan uang
                        kembali
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📞</div>
                    <h3 class="feature-title">Dukungan 24/7</h3>
                    <p class="feature-description">
                        Tim customer service kami siap membantu Anda kapan saja, dimana
                        saja
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3 class="feature-title">Proses Cepat</h3>
                    <p class="feature-description">
                        Booking instan tanpa ribet. Dari pencarian hingga kontrak hanya
                        dalam hitungan menit
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Siap Menemukan Kamar Impian Anda?</h2>
                <p class="cta-subtitle">
                    Bergabung dengan ribuan pengguna yang telah merasakan kemudahan
                    StarRoom
                </p>
                <div class="cta-buttons">
                    <button class="btn-primary large" onclick="location.href='login/'">
                        Mulai Sekarang 🚀
                    </button>
                </div>
            </div>
        </div>
    </section>
    <script>
        // ==================== SCROLL ANIMATIONS ====================
        function handleScrollAnimations() {
            const elements = document.querySelectorAll(
                ".fade-in-element, .slide-in-left, .slide-in-right, .slide-in-up"
            );

            elements.forEach((element) => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;

                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add("animate");
                }
            });
        }

        // ==================== TYPING ANIMATION ====================
        const typingTexts = [
            "Temukan Kamar Impian Anda",
            "Sewa Kamar Terbaik di Indonesia",
            "Platform Pencarian Kamar #1",
            "Booking Kamar Dalam Sekali Klik",
        ];

        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typingElement = document.getElementById("typing-text");
        const cursor = document.querySelector(".cursor");

        function typeWriter() {
            const currentText = typingTexts[textIndex];

            if (isDeleting) {
                typingElement.textContent = currentText.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingElement.textContent = currentText.substring(0, charIndex + 1);
                charIndex++;
            }

            let typeSpeed = isDeleting ? 50 : 100;

            if (!isDeleting && charIndex === currentText.length) {
                typeSpeed = 2000; // Pause at end
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % typingTexts.length;
                typeSpeed = 500; // Pause before next text
            }

            setTimeout(typeWriter, typeSpeed);
        }

        // ==================== COUNTER ANIMATION ====================
        function animateCounter(element) {
            const target = parseInt(element.getAttribute("data-target"));
            const increment = target / 100;
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }

                if (target >= 1000) {
                    element.textContent = Math.floor(current / 1000) + "K+";
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 20);
        }

        // ==================== 3D TILT EFFECT ====================
        function initTiltEffect() {
            const tiltCards = document.querySelectorAll(".tilt-card");

            tiltCards.forEach((card) => {
                card.addEventListener("mousemove", (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    const rotateX = (y - centerY) / 10;
                    const rotateY = (centerX - x) / 10;

                    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
                });

                card.addEventListener("mouseleave", () => {
                    card.style.transform =
                        "perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)";
                });
            });
        }

        // ==================== MAGNETIC BUTTONS ====================
        function initMagneticButtons() {
            const magneticBtns = document.querySelectorAll(".magnetic-btn");

            magneticBtns.forEach((btn) => {
                btn.addEventListener("mousemove", (e) => {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;

                    btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
                });

                btn.addEventListener("mouseleave", () => {
                    btn.style.transform = "translate(0px, 0px)";
                });
            });
        }

        // ==================== SMOOTH SCROLLING ====================
        function scrollToAbout() {
            document.getElementById("tentang").scrollIntoView({
                behavior: "smooth",
            });
        }

        // ==================== PARALLAX EFFECT ====================
        function handleParallax() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll(".hero-visual");

            parallaxElements.forEach((element) => {
                const speed = scrolled * 0.3;
                element.style.transform = `translateY(${speed}px)`;
            });

            // Floating elements parallax
            const floatingElements = document.querySelectorAll(".floating-element");
            floatingElements.forEach((element, index) => {
                const speed = scrolled * (0.1 + index * 0.05);
                element.style.transform = `translateY(${speed}px)`;
            });
        }

        // ==================== INITIALIZATION ====================
        window.addEventListener("load", () => {
            // Start typing animation
            setTimeout(typeWriter, 1000);

            // Start counter animation when visible
            const statNumbers = document.querySelectorAll(".stat-number");
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            });

            statNumbers.forEach((stat) => observer.observe(stat));
        });

        initTiltEffect();
        initMagneticButtons();
        window.addEventListener("scroll", () => {
            handleScrollAnimations();
            handleParallax();
        });
    </script>
</x-layout>