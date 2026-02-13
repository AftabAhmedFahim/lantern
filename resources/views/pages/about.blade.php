<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About — Lantern</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="font-body text-white about-page overflow-x-hidden">

    <!-- ================= NAVBAR (copied style, removed Login + How to Study) ================= -->
    <nav class="flex justify-between items-center px-4 sm:px-8 lg:px-12 py-4 sm:py-6 relative">
        <!-- Brand (click -> welcome page) -->
        <a href="{{ url('/') }}" class="flex items-center gap-3 no-underline">
            <img src="{{ asset('images/logo.png') }}" alt="Lantern" class="about-nav-logo">
            <div class="font-logo text-3xl tracking-widest text-[#6EC1FF]">
                LANTERN
            </div>
        </a>

        <!-- Mobile menu button -->
        <button id="mobile-menu-btn"
                class="md:hidden w-11 h-11 rounded-full border border-white/20 bg-black/30 backdrop-blur
                    flex items-center justify-center hover:border-[#6EC1FF] transition"
                aria-label="Open menu"
                aria-expanded="false">
            <img src="{{ asset('images/icons/open.svg') }}"
                 alt="Open menu"
                 class="w-5 h-5">
        </button>

        <!-- Desktop menu -->
        <div class="hidden md:flex items-center gap-8 text-base md:text-lg">
            <a href="{{ route('register') }}"
               class="hidden sm:inline-flex px-6 py-2 rounded-full bg-[#6EC1FF] text-black font-semibold hover:bg-[#4fb3ff] transition">
                Sign Up
            </a>
        </div>
        </div>
    </nav>

    <!-- ================= HERO + CONTENT ================= -->
    <main class="max-w-6xl mx-auto px-4 sm:px-8 lg:px-12 pb-16">

        <!-- HERO BOX -->
        <section class="about-hero reveal">
            <div class="about-hero-arc" aria-hidden="true"></div>

            <div class="about-hero-inner">
                <h1 class="about-title">
                    Illuminate Your<br>
                    Learning Journey
                </h1>

                <p class="about-subtitle">
                    Lantern helps students plan tasks, track progress, and stay consistent —
                    all in one clean dashboard.
                </p>

                <div class="about-actions">
                    <a href="#mission"
                       class="px-8 py-4 rounded-full bg-[#6EC1FF] text-black font-bold hover:scale-105 transition">
                        Learn More
                    </a>

                    <a href="{{ url('/') }}"
                       class="px-8 py-4 rounded-full border border-white/30 hover:border-[#6EC1FF] hover:text-[#6EC1FF] transition">
                        Back to Home
                    </a>
                </div>

            </div>
        </section>

        <!-- Mission -->
        <section id="mission" class="about-section reveal delay-1">
            <h2 class="text-center text-3xl font-bold mt-14">Our Mission</h2>
            <p class="text-center text-gray-300 max-w-2xl mx-auto mt-3 leading-relaxed">
                Lantern exists to reduce study stress by turning goals into a simple daily plan.
            </p>
        </section>

        <!-- What Lantern Solves (ONE BOX, 3 separated points, NO inner boxes) -->
        <section class="about-section reveal delay-2">
            <div class="about-solves-box">
                <h3 class="text-center text-2xl font-bold mb-8">What Lantern Solves</h3>

                <div class="about-solves-grid">
                    <div class="about-solve">
                        <div class="about-solve-title">Chaos → Clarity</div>
                        <div class="about-solve-desc">Organize tasks and deadlines in one place.</div>
                    </div>

                    <div class="about-divider" aria-hidden="true"></div>

                    <div class="about-solve">
                        <div class="about-solve-title">Plans → Progress</div>
                        <div class="about-solve-desc">Track completion and study time clearly.</div>
                    </div>

                    <div class="about-divider" aria-hidden="true"></div>

                    <div class="about-solve">
                        <div class="about-solve-title">Consistency → Results</div>
                        <div class="about-solve-desc">Build daily habits that actually stick.</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= FOOTER (same as welcome) ================= -->
        <footer class="text-center py-10 text-gray-400 reveal">
            © {{ date('Y') }} Lantern. All rights reserved.
        </footer>

    </main>

</body>
</html>
