<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lantern — Sign In</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="auth-page-classic">

<div id="particles-js" aria-hidden="true"></div>

<div class="auth-card-classic">

    <section class="auth-side">
        <div class="auth-content">
            <h1 class="auth-title">Sign In</h1>
            <p class="auth-sub">or use your email password</p>

            {{-- ✅ Same as old Breeze: session status component --}}
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form class="auth-form" method="POST" action="{{ route('login') }}">
                @csrf

                {{-- ✅ Email (same name + old value + autocomplete) --}}
                <input
                    class="auth-input"
                    id="email"
                    type="email"
                    name="email"
                    placeholder="Email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    autocomplete="username"
                >
                {{-- ✅ Same as old Breeze: field error component --}}
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                {{-- ✅ Password (same name + autocomplete) --}}
                <div class="input-wrap">
                    <input
                        class="auth-input"
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                        autocomplete="current-password"
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

                {{-- ✅ Remember (same name/id as old) --}}
                <label class="remember-row" for="remember_me">
                    <input
                        id="remember_me"
                        type="checkbox"
                        name="remember"
                        {{ old('remember') ? 'checked' : '' }}
                    >
                    <span>Remember me</span>
                </label>

                {{-- ✅ Forgot password (same conditional as old) --}}
                <div class="auth-link-row">
                    @if (Route::has('password.request'))
                        <a class="auth-link" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>

                {{-- ✅ Submit --}}
                <button class="auth-btn auth-btn-primary" type="submit">
                    SIGN IN
                </button>
            </form>
        </div>
    </section>

    {{-- RIGHT: Blue panel --}}
    <aside class="auth-panel panel-right">
        <div class="auth-content">
            <a class="panel-brand brand-right" href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Lantern Logo">
                <span class="font-logo">LANTERN</span>
            </a>

            <h2 class="panel-title">Don't have an account?</h2>
            <p class="panel-text">
                Register with your personal details to use all site features
            </p>

            <div class="panel-actions">
                <button
                    type="button"
                    class="auth-btn auth-btn-outline"
                    data-auth-slide="to-register"
                    data-href="{{ route('register') }}"
                >
                    SIGN UP
                </button>
            </div>
        </div>
    </aside>

</div>

<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</body>
</html>
