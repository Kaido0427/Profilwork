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
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md   shadow-sm" style="background-color: #29323c">
            <div class="container d-flex align-items-center">
                <a href="/" style="text-decoration: none;color:#fff">
                    <h1><span style="color:rgb(100, 203, 112);">Y</span>i<span
                            style="color:rgb(100, 203, 112);">W</span>a</h1>
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

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color: #fff"
                                    href="{{ route('artisan.index') }}">{{ __('Les Artisans') }}</a>
                            </li>
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #fff"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #fff"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" style="background-color: #29323c">

                                @if (Auth::user())
                                    <a id="navbarDropdown" style="color: #fff" class="nav-link dropdown-toggle"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        <img src="{{ Auth::user()->avatar }}" class="rounded-circle" width="40"
                                            height="40">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                                            </svg> {{ __('Page d\'acceuil') }}
                                        </a>
                                        <a class="dropdown-item" href="/home">

                                            <?xml version="1.0" ?>

                                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                            <svg width="16" height="16" viewBox="0 0 64 64"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <defs>

                                                    <style>
                                                        .cls-1 {
                                                            fill: #f2f2fc;
                                                        }

                                                        .cls-2 {
                                                            fill: #61729b;
                                                        }

                                                        .cls-3 {
                                                            fill: #2c3b73;
                                                        }

                                                        .cls-4 {
                                                            fill: #d8d8fc;
                                                        }

                                                        .cls-5 {
                                                            fill: #fdbf00;
                                                        }

                                                        .cls-6 {
                                                            fill: #4bb9ec;
                                                        }

                                                        .cls-7 {
                                                            fill: #f03800;
                                                        }
                                                    </style>

                                                </defs>

                                                <title />

                                                <g id="dashboard">

                                                    <path class="cls-1"
                                                        d="M57,15.008H53.061V45.992a1,1,0,0,1-1,1h-40a1,1,0,0,1-1-1V15.008H7v34H57Z" />

                                                    <path class="cls-2"
                                                        d="M37,51.008v3a1,1,0,0,1-1,1H28a1,1,0,0,1-1-1v-3H5.071a7.006,7.006,0,0,0,6.929,6H52a7,7,0,0,0,6.929-6Z" />

                                                    <rect class="cls-3" height="2" width="6" x="29"
                                                        y="51.008" />

                                                    <path class="cls-4"
                                                        d="M51.061,12.706h-38V44.992h38ZM22.434,15.787a1,1,0,0,1,1,1V23.24h6.453a1,1,0,0,1,1,1,8.453,8.453,0,1,1-8.453-8.453Zm10.688,26.2a1,1,0,0,1-1,1h-16a1,1,0,0,1-1-1v-6a1,1,0,0,1,1-1h16a1,1,0,0,1,1,1ZM32.123,23H24.67a1,1,0,0,1-1-1V14.551a1,1,0,0,1,1-1A8.457,8.457,0,0,1,33.123,22,1,1,0,0,1,32.123,23Zm5.018,18.987a1,1,0,0,1-2,0v-6a1,1,0,0,1,2,0Zm4,0a1,1,0,0,1-2,0v-8a1,1,0,0,1,2,0Zm4,0a1,1,0,0,1-2,0v-9.5a1,1,0,0,1,2,0Zm3.981,0a1,1,0,0,1-2,0v-12a1,1,0,0,1,2,0Zm.125-15H34.918a1,1,0,0,1,0-2H49.247a1,1,0,0,1,0,2Zm0-2.857H34.918a1,1,0,0,1,0-2H49.247a1,1,0,0,1,0,2Zm0-2.857H34.918a1,1,0,0,1,0-2H49.247a1,1,0,0,1,0,2Zm0-2.857H34.918a1,1,0,0,1,0-2H49.247a1,1,0,0,1,0,2Z" />

                                                    <path class="cls-3"
                                                        d="M51.061,6.992h-38v3.714h38ZM17.775,9.849H14.918a1,1,0,0,1,0-2h2.857a1,1,0,0,1,0,2Zm5.715,0H20.632a1,1,0,0,1,0-2H23.49a1,1,0,0,1,0,2Zm5.714,0H26.347a1,1,0,1,1,0-2H29.2a1,1,0,0,1,0,2Z" />

                                                    <path
                                                        d="M60,49.008H59v-35a1,1,0,0,0-1-1H53.061V5.992a1,1,0,0,0-1-1h-40a1,1,0,0,0-1,1v7.016H6a1,1,0,0,0-1,1v35H4a1,1,0,0,0-1,1,9,9,0,0,0,9,9H52a9,9,0,0,0,9-9A1,1,0,0,0,60,49.008Zm-8,8H12a7.006,7.006,0,0,1-6.929-6H27v3a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1v-3H58.929A7,7,0,0,1,52,57.008Zm-38.939-44.3h38V44.992h-38Zm0-5.714h38v3.714h-38ZM7,15.008h4.061V45.992a1,1,0,0,0,1,1h40a1,1,0,0,0,1-1V15.008H57v34H7Zm22,36h6v2H29Z" />

                                                    <path class="cls-4"
                                                        d="M17.775,7.849H14.918a1,1,0,0,0,0,2h2.857a1,1,0,0,0,0-2Z" />

                                                    <path class="cls-4"
                                                        d="M23.49,7.849H20.632a1,1,0,0,0,0,2H23.49a1,1,0,0,0,0-2Z" />

                                                    <path class="cls-4"
                                                        d="M29.2,7.849H26.347a1,1,0,1,0,0,2H29.2a1,1,0,0,0,0-2Z" />

                                                    <path class="cls-5"
                                                        d="M22.434,30.694A6.459,6.459,0,0,0,28.81,25.24H22.434a1,1,0,0,1-1-1V17.864a6.454,6.454,0,0,0,1,12.83Z" />

                                                    <path
                                                        d="M22.434,32.694a8.457,8.457,0,0,0,8.453-8.453,1,1,0,0,0-1-1H23.434V16.787a1,1,0,0,0-1-1,8.453,8.453,0,1,0,0,16.907Zm-1-14.83V24.24a1,1,0,0,0,1,1H28.81a6.454,6.454,0,1,1-7.376-7.376Z" />

                                                    <path class="cls-6"
                                                        d="M25.669,15.628V21h5.376A6.464,6.464,0,0,0,25.669,15.628Z" />

                                                    <path
                                                        d="M24.67,13.551a1,1,0,0,0-1,1V22a1,1,0,0,0,1,1h7.453a1,1,0,0,0,1-1A8.457,8.457,0,0,0,24.67,13.551Zm1,7.453V15.628A6.464,6.464,0,0,1,31.046,21Z" />

                                                    <path
                                                        d="M36.141,34.992a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0v-6A1,1,0,0,0,36.141,34.992Z" />

                                                    <path
                                                        d="M40.141,32.992a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0v-8A1,1,0,0,0,40.141,32.992Z" />

                                                    <path
                                                        d="M44.141,31.492a1,1,0,0,0-1,1v9.5a1,1,0,0,0,2,0v-9.5A1,1,0,0,0,44.141,31.492Z" />

                                                    <path
                                                        d="M48.122,28.992a1,1,0,0,0-1,1v12a1,1,0,0,0,2,0v-12A1,1,0,0,0,48.122,28.992Z" />

                                                    <path d="M49.247,16.421H34.918a1,1,0,0,0,0,2H49.247a1,1,0,0,0,0-2Z" />

                                                    <path d="M49.247,19.278H34.918a1,1,0,0,0,0,2H49.247a1,1,0,0,0,0-2Z" />

                                                    <path d="M49.247,22.135H34.918a1,1,0,0,0,0,2H49.247a1,1,0,0,0,0-2Z" />

                                                    <path d="M49.247,24.992H34.918a1,1,0,0,0,0,2H49.247a1,1,0,0,0,0-2Z" />

                                                    <rect class="cls-7" height="4" width="14" x="17.122"
                                                        y="36.992" />

                                                    <path
                                                        d="M32.122,34.992h-16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h16a1,1,0,0,0,1-1v-6A1,1,0,0,0,32.122,34.992Zm-1,6h-14v-4h14Z" />

                                                </g>

                                            </svg> {{ __('Tableau de bord') }}
                                        </a>


                                        @if (auth()->user()->role_id != 3)
                                            <a class="dropdown-item" href="{{ route('conversations.index') }}">


                                                <svg height="16px" width="16px" version="1.1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve"
                                                    fill="#000000" stroke="#000000" stroke-width="0.00512"
                                                    transform="matrix(-1, 0, 0, 1, 0, 0)rotate(0)">

                                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round" />

                                                    <g id="SVGRepo_iconCarrier">
                                                        <path style="fill:#88CC2A;"
                                                            d="M256,12.147C233.808,4.327,209.358,0,183.695,0C82.49,0,0.151,67.366,0.151,150.172 c0,44.829,24.773,87.556,66.743,115.933v84.297c0,6.752,4.06,12.837,10.301,15.418c6.129,2.547,13.349,1.212,18.188-3.615 l63.261-63.261c11.78,1.335,19.189-5.829,20.168-14.528c4.605-40.813,35.763-73.762,77.188-91.705 c27.71-12.003,60.002-17.286,92.017-13.716c9.133,1.057,17.398-5.551,18.443-14.695c0.523-4.55,0.779-9.3,0.779-14.127 C367.239,88.357,321.364,35.151,256,12.147z" />
                                                        <path style="fill:#7FB335;"
                                                            d="M367.239,150.172c0,4.828-0.256,9.578-0.779,14.127c-1.046,9.144-9.311,15.751-18.443,14.695 c-32.014-3.571-64.307,1.713-92.017,13.716V12.147C321.364,35.151,367.239,88.357,367.239,150.172z" />
                                                        <path style="fill:#FFE14D;"
                                                            d="M328.305,144.61c-25.774,0-50.191,4.238-72.305,11.903c-65.831,22.804-111.239,75.998-111.239,138.27 c0,61.815,45.875,115.021,111.239,138.025c22.192,7.82,46.642,12.147,72.305,12.147c8.51,0,16.908-0.467,25.073-1.391 c64.463,64.463,67.255,72.761,81.427,66.866c6.24-2.581,10.301-8.665,10.301-15.418v-84.297 c41.97-28.377,66.743-71.104,66.743-115.933C511.849,213.144,431.223,144.61,328.305,144.61z" />
                                                        <path style="fill:#FFCC33;"
                                                            d="M511.849,294.782c0,44.829-24.773,87.556-66.743,115.933v84.297c0,6.752-4.06,12.837-10.301,15.418 c-14.172,5.896-16.964-2.403-81.427-66.866c-8.165,0.923-16.563,1.39-25.073,1.39c-25.663,0-50.113-4.327-72.305-12.147V156.513 c22.114-7.664,46.531-11.903,72.305-11.903C431.223,144.61,511.849,213.144,511.849,294.782z" />
                                                    </g>

                                                </svg> {{ __('Mes conversations') }}
                                            </a>
                                        @endif
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                            <?xml version="1.0" encoding="utf-8"?>
                                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                            <svg width="18px" height="18public function pay(Request $request)
                                            {
                                                $amount = $request->input('amount');
                                                $user = Auth::user();
                                            
                                                // validate input
                                                if (!$amount || $amount < 0) {
                                                    return response()->json([
                                                        'error' => 'Invalid Amount'
                                                    ], 422);
                                                }
                                            
                                                // process payment
                                                $payment = Payment::create([
                                                    'amount' => $amount,
                                                    'user_id' => $user->id
                                                ]);
                                            
                                                // return success response
                                                return response()->json([
                                                    'success' => true,
                                                    'payment' => $payment
                                                ]);
                                            }px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.2929 14.2929C16.9024 14.6834 16.9024 15.3166 17.2929 15.7071C17.6834 16.0976 18.3166 16.0976 18.7071 15.7071L21.6201 12.7941C21.6351 12.7791 21.6497 12.7637 21.6637 12.748C21.87 12.5648 22 12.2976 22 12C22 11.7024 21.87 11.4352 21.6637 11.252C21.6497 11.2363 21.6351 11.2209 21.6201 11.2059L18.7071 8.29289C18.3166 7.90237 17.6834 7.90237 17.2929 8.29289C16.9024 8.68342 16.9024 9.31658 17.2929 9.70711L18.5858 11H13C12.4477 11 12 11.4477 12 12C12 12.5523 12.4477 13 13 13H18.5858L17.2929 14.2929Z"
                                                    fill="#323232" />
                                                <path
                                                    d="M5 2C3.34315 2 2 3.34315 2 5V19C2 20.6569 3.34315 22 5 22H14.5C15.8807 22 17 20.8807 17 19.5V16.7326C16.8519 16.647 16.7125 16.5409 16.5858 16.4142C15.9314 15.7598 15.8253 14.7649 16.2674 14H13C11.8954 14 11 13.1046 11 12C11 10.8954 11.8954 10 13 10H16.2674C15.8253 9.23514 15.9314 8.24015 16.5858 7.58579C16.7125 7.4591 16.8519 7.35296 17 7.26738V4.5C17 3.11929 15.8807 2 14.5 2H5Z"
                                                    fill="#323232" />
                                            </svg> {{ __('Se Deconnecter') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                @endif
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    @livewireScripts
</body>

</html>
