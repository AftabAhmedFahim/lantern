<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lantern — Illuminate Learning</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

    <body class="font-body text-white bg-dynamic overflow-x-hidden welcome">
        <!-- ================= LOADER ================= -->
        <div id="page-loader">
            <div class="flex flex-col items-center gap-6">
                <div class="loader-ring"></div>
                <h1 class="font-logo text-3xl tracking-widest text-[#6EC1FF]">
                    LANTERN
                </h1>
            </div>
        </div>

        <!-- ================= NAVBAR ================= -->
        <nav class="flex justify-between items-center px-4 sm:px-8 lg:px-12 py-4 sm:py-6 relative">
            <div class="font-logo text-3xl tracking-widest text-[#6EC1FF]">
                LANTERN
            </div>
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

            <div class="hidden md:flex items-center gap-8 text-base md:text-lg">
                <a href="#" class="hover:text-[#6EC1FF] transition">How to Study</a>
                <a href="#" class="hover:text-[#6EC1FF] transition">About</a>
                <a href="{{ route('login') }}" class="hover:text-[#6EC1FF] transition">Login</a>
                <a href="{{ route('register') }}"
                class="hidden sm:inline-flex px-6 py-2 rounded-full bg-[#6EC1FF] text-black font-semibold hover:bg-[#4fb3ff] transition">
                    Sign Up
                </a>
            </div>

            <div id="mobile-menu"
                class="hidden md:hidden absolute right-4 sm:right-8 top-full mt-0 w-56
                        rounded-2xl border border-white/10 bg-black/50 backdrop-blur-xl p-4 z-50">
                <a href="#" class="block py-2 px-3 rounded-lg hover:bg-white/5 hover:text-[#6EC1FF] transition">How to Study</a>
                <a href="#" class="block py-2 px-3 rounded-lg hover:bg-white/5 hover:text-[#6EC1FF] transition">About</a>
                <a href="{{ route('login') }}" class="block py-2 px-3 rounded-lg hover:bg-white/5 hover:text-[#6EC1FF] transition">Login</a>

                <a href="{{ route('register') }}"
                class="mt-3 block text-center py-2.5 rounded-full bg-[#6EC1FF] text-black font-semibold hover:bg-[#4fb3ff] transition">
                    Sign Up
                </a>
            </div>
        </nav>

        <!-- ================= HERO ================= -->
        <section class="max-w-6xl mx-auto px-4 sm:px-8 lg:px-12 py-16 sm:py-24 grid md:grid-cols-2 gap-10 lg:gap-16 items-center">
            <div class="reveal">
                <p class="text-[#6EC1FF] font-semibold mb-4 text-lg sm:text-xl">
                    Illuminate your learning journey
                </p>

                <h1 class="font-logo text-4xl sm:text-5xl lg:text-6xl mb-6">
                    LANTERN
                </h1>

                <p class="text-gray-300 max-w-xl mb-10 leading-relaxed text-lg">
                    Light the way to knowledge with innovative study methods and
                    personalized learning experiences that transform how you learn.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 text-lg sm:text-xl">
                    <a href="{{ route('register') }}"
                    class="px-8 py-4 rounded-full bg-[#6EC1FF] text-black font-bold hover:scale-105 transition">
                        Get Started →
                    </a>
                    <a href="#"
                    class="px-8 py-4 rounded-full border border-white/30 hover:border-[#6EC1FF] hover:text-[#6EC1FF] transition">
                        Learn More
                    </a>
                </div>
            </div>

            <div class="relative flex justify-center reveal delay-2">
                <div class="lantern-drop">
                    <div class="lantern-hanger">
                        <div class="lantern-hook"></div>
                        <div class="lantern-chain"></div>

                        <div class="lantern-body">
                            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                                <div class="w-96 h-96 bg-[#6EC1FF]/30 blur-3xl rounded-full"></div>
                            </div>
                            <img src="{{ asset('images/logo.png') }}"
                                class="relative w-56 sm:w-72 lg:w-80 pixel-lantern"
                                alt="Lantern">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= FEATURES ================= -->
        <section class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12 py-20 sm:py-32">
            <div class="grid md:grid-cols-3 gap-10">

                <div class="feature-card reveal delay-1 text-lg md:text-xl">
                    <h3 class="text-xl font-bold mb-3">Smart Study Plans</h3>
                    <p class="text-gray-300">
                        Personalized schedules that adapt to your pace and goals.
                    </p>
                </div>

                <div class="feature-card reveal delay-2 text-lg md:text-xl">
                    <h3 class="text-xl font-bold mb-3">Focus & Clarity</h3>
                    <p class="text-gray-300">
                        Eliminate distractions and stay mentally sharp.
                    </p>
                </div>

                <div class="feature-card reveal delay-3 text-lg md:text-xl">
                    <h3 class="text-xl font-bold mb-3">Track Progress</h3>
                    <p class="text-gray-300">
                        Visual insights to keep you motivated and consistent.
                    </p>
                </div>

                <div class="feature-card reveal delay-4 text-lg md:text-xl">
                    <h3 class="text-xl font-bold mb-3">AI Assistance</h3>
                    <p class="text-gray-300">
                        Get smart recommendations based on your learning behavior.
                    </p>
                </div>

                <div class="feature-card reveal delay-5 text-lg md:text-xl">
                    <h3 class="text-xl font-bold mb-3">Study Reminders</h3>
                    <p class="text-gray-300">
                        Never miss a session with intelligent reminders.
                    </p>
                </div>

                <div class="feature-card reveal delay-6 text-lg md:text-xl">
                    <h3 class="text-xl font-bold mb-3">Clean Dashboard</h3>
                    <p class="text-gray-300">
                        Everything you need, beautifully organized.
                    </p>
                </div>

            </div>
        </section>

        <!-- ================= FOOTER ================= -->
        <footer class="text-center py-10 text-gray-400 reveal">
            © {{ date('Y') }} Lantern. All rights reserved.
        </footer>

        <!-- ================= SCROLL DOWN ARROW ================= -->
        <button id="scroll-arrow"
                aria-label="Scroll down"
                class="fixed bottom-8 right-8 z-50 w-14 h-14 rounded-full border-2 border-[#6EC1FF]
                    flex items-center justify-center bg-black/40 backdrop-blur
                    transition-all duration-500">
            <img src="{{ asset('images/icons/arrow-down.svg') }}"
                alt="Scroll Down"
                class="w-6 h-6">
        </button>
    </body>
</html>
