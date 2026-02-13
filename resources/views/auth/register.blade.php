<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lantern — Create Account</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="auth-page-classic">
<div id="particles-js" aria-hidden="true"></div>

<div class="auth-card-classic">

    <aside class="auth-panel panel-left">
        <div class="auth-content">
            <a class="panel-brand brand-left" href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Lantern Logo">
                <span class="font-logo">LANTERN</span>
            </a>

            <h2 class="panel-title">Have an account?</h2>
            <p class="panel-text">
                Sign in to continue your journey with Lantern.
            </p>

            <div class="panel-actions">
                <button
                    type="button"
                    class="auth-btn auth-btn-outline"
                    data-auth-slide="to-login"
                    data-href="{{ route('login') }}"
                >
                    SIGN IN
                </button>
            </div>
        </div>
    </aside>

    <section class="auth-side">
        <div class="auth-content">
            <h1 class="auth-title">Create Account</h1>
            <p class="auth-sub">or use your email for registration</p>

            <form class="auth-form" method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Name --}}
                <input
                    class="auth-input"
                    id="name"
                    type="text"
                    name="name"
                    placeholder="Name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                >
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                {{-- Email --}}
                <input
                    class="auth-input"
                    id="email"
                    type="email"
                    name="email"
                    placeholder="Email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="username"
                >
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                {{-- Password --}}
                <div class="input-wrap">
                    <input
                        class="auth-input"
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                        autocomplete="new-password"
                    >

                    <span class="caps-indicator" data-caps-for="#password" hidden>⇪</span>

                    <button
                        type="button"
                        class="pass-toggle"
                        data-toggle-password
                        data-target="#password"
                        aria-label="Show password"
                        aria-pressed="false"
                    >👁</button>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                {{-- Confirm Password --}}
                <div class="input-wrap">
                    <input
                        class="auth-input"
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirm Password"
                        required
                        autocomplete="new-password"
                    >

                    <span class="caps-indicator" data-caps-for="#password_confirmation" hidden>⇪</span>

                    <button
                        type="button"
                        class="pass-toggle"
                        data-toggle-password
                        data-target="#password_confirmation"
                        aria-label="Show password"
                        aria-pressed="false"
                    >👁</button>
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <button class="auth-btn auth-btn-primary" type="submit">SIGN UP</button>

            </form>
        </div>
    </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</body>
</html>
