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

                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" style="color: #fff" href="{{ route('login') }}">{{ __('CONNEXION') }}</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>

        </nav>

        <div class="center-div-re" style="display: flex; flex-direction: row;">
            <div
                style="width: 40%; padding: 20px; background-color: #84e8a5; display: flex; justify-content: center; align-items: center;">
                <img src="/images/register.jpg" alt="" style="max-width: 100%; height: auto;">
            </div>
            <div
                style="width: 60%; padding: 20px; background-color: #f4eeee; display: flex; justify-content: center; align-items: center;">
                <div style="width: 80%;">
                    <h3 style="margin-bottom: 10px;">INSCRIPTION</h3>
                    <div class="barre-re"></div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="input-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16"
                                style="width: 1.5em !important; height: 1.5em !important;">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>


                            <input id="name" type="text"
                                class="@error('name') is-invalid @enderror form-controleur col-lg-9" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="Nom d'utilisateur"
                                style="padding:8px;border-radius:5px;margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="input-container">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6"
                                style="width: 1.5em !important; height: 1.5em !important;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>


                            <input id="email" type="email"
                                class="col-lg-9 form-controleur @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" placeholder="Adresse mail"
                                style="padding:8px;border-radius:5px;margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="input-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-image" viewBox="0 0 16 16"
                                style="width: 1.5em !important; height: 1.5em !important;">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                <path
                                    d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                            </svg>
                            <input id="avatar" type="file"
                                class="col-lg-9 form-controleur @error('avatar') is-invalid @enderror" name="avatar"
                                style="padding:8px;border-radius:5px;margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">
                            @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


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

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="input-container">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6"
                                style="width: 1.5em !important; height: 1.5em !important;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>


                            <input id="password-confirm" type="password" class="col-lg-9 form-controleur"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirmation"
                                style="margin-bottom: 20px;border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">

                        </div>
                        <div style="display: flex; align-items: center;">
                            <p for="role-select" style="padding-top:5px; margin-right: 16px;">{{ __('Je suis:') }}
                            </p>
                            <div style="display: flex; flex-wrap: wrap;">
                                <div class="" style="margin-right: 16px;">
                                    <label class="form-check-label" for="Recruteur">Recruteur
                                        <input class="form-check-input" type="radio" value="1" id="Recruteur"
                                            name="role_id">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="" style="margin-right: 16px;">
                                    <label class="form-check-label" for="Freelance">Freelance
                                        <input class="form-check-input" type="radio" value="2" id="Freelance"
                                            name="role_id">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="">
                                    <label class="form-check-label" for="Artisan">Artisan
                                        <input class="form-check-input" type="radio" value="3" id="Artisan"
                                            name="role_id">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>



                        @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror




                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" onclick="return changeContent('register')"
                                    style="align-self: flex-end;border-radius:5px">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
    </div>
    @livewireScripts
</body>

</html>
