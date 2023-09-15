<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'YIWA' }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/job.css') }}">
    <link rel="stylesheet" href="{{ asset('css/multiform.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md   shadow-sm">
            <div class="container d-flex align-items-center" style="background-color: #29323c">
                <a href="/" style="text-decoration: none;color:#fff">
                    <h1><span style="color:rgb(100, 203, 112);">Y</span>i<span  style="color:rgb(100, 203, 112);">W</span>a</h1>
    
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" style="background-color: #29323c" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">


                        <li class="nav-item">
                            <a class="nav-link" style="color: #fff" href="{{ route('artisan.index') }}">{{ __('ARTISANS') }}</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" style="color: #fff" href="{{ route('register') }}">{{ __('INSCRIPTION') }}</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>

        </nav>

        <div class="center-div" style="display: flex; flex-direction: row;">
            <div
                style="width: 40%; padding: 20px; background-color: #84e8a5; display: flex; justify-content: center; align-items: center;">
                <img src="/images/login-img.webp" alt="" style="max-width: 100%; height: auto;">
            </div>
            <div
                style="width: 60%; padding: 20px; background-color: #f4eeee; display: flex; justify-content: center; align-items: center;">
                <div style="width: 80%;">
                    <h3 style="margin-bottom: 10px;">CONNEXION</h3>
                    <div class="barre"></div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div style="display: flex; flex-direction: column;">

                            <div class="input-container">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6"
                                    style="width: 1.5em !important; height: 1.5em !important;">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>

                                <input id="email" type="email"
                                    class="col-lg-9 form-controleur @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Adresse mail"
                                    style="padding:8px;border-radius:5px;margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">
                            </div>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="input-container">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6"
                                    style="width: 1.5em !important; height: 1.5em !important;">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>

                                <input id="password" type="password"
                                    class="form-controleur col-lg-9 @error('password') is-invalid @enderror"
                                    name="password" required placeholder="Mot de passe" autocomplete="new-password"
                                    style="margin-bottom: 20px;border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" onclick="return changeContent('login')"
                                style="align-self: flex-end;">Se
                                connecter</button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            const loginContainer = document.getElementById('login-container');
            const imageContainer = document.getElementById('image-container');

            // Animate login container
            loginContainer.style.opacity = 0;
            loginContainer.style.transform = 'translateX(-100%)';
            loginContainer.style.transition = 'opacity 0.5s ease-in-out, transform 0.5s ease-in-out';
            setTimeout(() => {
                loginContainer.style.opacity = 1;
                loginContainer.style.transform = 'translateX(0)';
            }, 500);

            // Animate image container
            imageContainer.style.opacity = 0;
            imageContainer.style.transform = 'translateX(100%)';
            imageContainer.style.transition = 'opacity 0.5s ease-in-out, transform 0.5s ease-in-out';
            setTimeout(() => {
                imageContainer.style.opacity = 1;
                imageContainer.style.transform = 'translateX(0)';
            }, 500);

            // Submit login form
            const loginForm = document.getElementById('login-form');
            loginForm.addEventListener('submit', (event) => {
                event.preventDefault();
                alert('Connexion réussie !');
            });
        </script>
    </div>
    @livewireScripts
</body>

</html>
