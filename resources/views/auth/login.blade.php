<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-900">
        <!-- Particles Background -->
        <canvas id="particles-canvas" class="absolute inset-0"></canvas>

        <div class="max-w-md w-full mx-auto p-6 bg-gray-800 rounded-lg shadow-lg z-10">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-white">Welcome Back</h2>
                <p class="text-gray-400 mt-2">Sign in to your account</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-white" />
                    <x-text-input id="email" class="block mt-1 w-full bg-gray-700 border-gray-600 text-white"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-white" />

                    <x-text-input id="password" class="block mt-1 w-full bg-gray-700 border-gray-600 text-white"
                        type="password" name="password" required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded bg-gray-700 border-gray-600 text-indigo-600 focus:ring-indigo-500"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-300">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-400 hover:text-white"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ml-3 bg-indigo-600 hover:bg-indigo-700">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                <div class="mt-6 text-center">
                    <p class="text-gray-400">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-indigo-400 hover:text-indigo-300 font-medium">
                            Sign up
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Particles background script (sama seperti di layout utama)
        function initParticles() {
            const canvas = document.getElementById("particles-canvas");
            if (!canvas) return;

            const ctx = canvas.getContext("2d");
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            const particles = [];
            const particleCount = 30;

            class Particle {
                constructor() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.vx = (Math.random() - 0.5) * 0.5;
                    this.vy = (Math.random() - 0.5) * 0.5;
                    this.size = Math.random() * 2 + 1;
                    this.opacity = Math.random() * 0.3 + 0.1;
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

                requestAnimationFrame(animateParticles);
            }

            animateParticles();
        }

        document.addEventListener('DOMContentLoaded', initParticles);
    </script>
</x-guest-layout>
