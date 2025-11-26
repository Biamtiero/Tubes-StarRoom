<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarRoom</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <canvas id="particles-canvas"></canvas>
    <x-navbar></x-navbar>

    {{ $slot }}

    <script>
        // ==================== PARTICLES SYSTEM ====================
        function initParticles() {
            const canvas = document.getElementById("particles-canvas");
            const ctx = canvas.getContext("2d");

            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            const particles = [];
            const particleCount = 50;

            class Particle {
                constructor() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.vx = (Math.random() - 0.5) * 0.5;
                    this.vy = (Math.random() - 0.5) * 0.5;
                    this.size = Math.random() * 2 + 1;
                    this.opacity = Math.random() * 0.5 + 0.2;
                }

                update() {
                    this.x += this.vx;
                    this.y += this.vy;

                    if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
                    if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
                }

                draw() {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                    ctx.fill();
                }
            }

            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }

            function animateParticles() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                particles.forEach((particle) => {
                    particle.update();
                    particle.draw();
                });

                // Draw connections
                particles.forEach((particle, i) => {
                    particles.slice(i + 1).forEach((otherParticle) => {
                        const dx = particle.x - otherParticle.x;
                        const dy = particle.y - otherParticle.y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        if (distance < 100) {
                            ctx.beginPath();
                            ctx.moveTo(particle.x, particle.y);
                            ctx.lineTo(otherParticle.x, otherParticle.y);
                            ctx.strokeStyle = `rgba(255, 255, 255, ${0.1 * (1 - distance / 100)
                })`;
                            ctx.lineWidth = 1;
                            ctx.stroke();
                        }
                    });
                });

                requestAnimationFrame(animateParticles);
            }

            animateParticles();

            window.addEventListener("resize", () => {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            });
        }

        initParticles();

        // ==================== EVENT LISTENERS ====================
        window.addEventListener("resize", () => {
            const canvas = document.getElementById("particles-canvas");
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
    </script>
</body>

</html>