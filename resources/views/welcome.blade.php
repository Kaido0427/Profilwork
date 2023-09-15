<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <title>YIWA</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased ">

    <div>


        <!-- Header -->
        <section id="header">
            <div class="header container">
                <div class="nav-bar">
                    <div class="brand">
                        <a href="/">
                            <h1> <img src="/icones/Y.png" style="width: 50px;height:50px;margin-bottom:10px;"
                                    alt=""> i<span>W</span>a</h1>
                        </a>
                    </div>
                    <div class="nav-list">
                        <div class="hamburger">
                            <div class="bar"></div>
                        </div>
                        <ul>
                            <li>

                                <a href="{{ route('artisan.index') }}" data-after="Artisans">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 217.229 217.229"
                                        style="enable-background:new 0 0 217.229 217.229;width: 1.5em !important; height: 1.5em !important;margin-bottom:5px;"
                                        xml:space="preserve" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <g>
                                            <g id="group-12svg">
                                                <path id="path-1_23_" style="fill:#142A3B;"
                                                    d="M69.22,138.546H49.169c-3.866,0-6.999,2.285-6.999,5.102
                                            c0,2.819,3.133,5.103,6.999,5.103h0.933c3.866,0,7,2.285,7,5.102c0,2.818-3.134,5.102-7,5.102H7c-3.866,0-7,2.286-7,5.103
                                            c0,2.818,3.134,5.103,7,5.103h51.798h105.875c3.866,0,7-2.285,7-5.103c0-2.817-3.134-5.103-7-5.103h-11.962
                                            c-3.866,0-7-2.284-7-5.102c0-2.817,3.134-5.102,7-5.102h46.983c3.866,0,7-2.284,7-5.103c0-2.817-3.134-5.102-7-5.102h-3.507H69.22
                                            z" />
                                                <path id="path-2_23_" style="fill:#142A3B;"
                                                    d="M192.472,169.618c-2.723,0-4.931-1.616-4.931-3.609
                                            c0-1.993,2.208-3.609,4.931-3.609h15.111c2.723,0,4.931,1.616,4.931,3.609c0,1.993-2.208,3.609-4.931,3.609H192.472z" />
                                                <path id="path-3_23_" style="fill:#FBB713;"
                                                    d="M211.377,141.594H31.105c-3.231,0-5.852-2.62-5.852-5.852l0,0
                                            c0-3.231,2.621-5.851,5.852-5.851h180.272c3.231,0,5.852,2.62,5.852,5.851l0,0C217.229,138.975,214.608,141.594,211.377,141.594z" />
                                                <path id="path-4_23_" style="fill:#FBB713;"
                                                    d="M202.548,129.891c-2.687-42.577-38.052-76.282-81.307-76.282
                                            s-78.62,33.705-81.307,76.282H202.548z" />
                                                <path id="path-5_23_" style="fill:#EDEDED;"
                                                    d="M55.834,107.947c-0.52,0-1.047-0.11-1.546-0.347
                                            c-1.81-0.858-2.58-3.016-1.722-4.823c6.891-14.545,18.711-26.351,33.278-33.246c1.81-0.858,3.97-0.081,4.823,1.724
                                            c0.855,1.806,0.081,3.965-1.726,4.82c-13.061,6.182-23.653,16.766-29.833,29.803C58.489,107.184,57.191,107.947,55.834,107.947z" />
                                                <path id="path-6_23_"
                                                    style="opacity:0.25;fill:#090908;enable-background:new    ;"
                                                    d="M146.724,57.753
                                            c19.817,13.792,32.751,30.774,34.364,56.346l-140.394,8.749c-0.669,3.428-0.534,3.476-0.76,7.043h162.614
                                            C200.415,96.086,177.65,67.944,146.724,57.753z" />
                                                <path id="path-7_22_"
                                                    style="opacity:0.25;fill:#090908;enable-background:new    ;"
                                                    d="M113.306,94.101
                                            c3.52,0,6.374-2.853,6.374-6.374V53.983c0-0.102-0.025-0.197-0.03-0.298c-4.332,0.084-8.578,0.501-12.718,1.235v32.807
                                            C106.932,91.248,109.785,94.101,113.306,94.101z" />
                                                <path id="path-8_16_"
                                                    style="opacity:0.25;fill:#090908;enable-background:new    ;"
                                                    d="M144.72,94.101
                                            c3.52,0,6.374-2.853,6.374-6.374V59.286c-4.096-1.614-8.359-2.885-12.748-3.824v32.265
                                            C138.346,91.248,141.199,94.101,144.72,94.101z" />
                                                <path id="path-9_15_" style="fill:#FBB713;"
                                                    d="M137.739,94.101L137.739,94.101c-3.521,0-6.374-2.853-6.374-6.374V53.984
                                            c0-3.521,2.853-6.374,6.374-6.374l0,0c3.52,0,6.374,2.853,6.374,6.374v33.743C144.113,91.248,141.259,94.101,137.739,94.101z" />
                                                <path id="path-10_13_" style="fill:#FBB713;"
                                                    d="M104.743,94.101L104.743,94.101c-3.52,0-6.374-2.853-6.374-6.374V53.984
                                            c0-3.521,2.854-6.374,6.374-6.374l0,0c3.521,0,6.375,2.853,6.375,6.374v33.743C111.118,91.248,108.264,94.101,104.743,94.101z" />
                                                <path id="path-11_11_"
                                                    style="opacity:0.25;fill:#090908;enable-background:new    ;"
                                                    d="M31.105,141.596h180.271
                                            c3.232,0,5.853-2.621,5.853-5.854H25.253C25.253,138.975,27.874,141.596,31.105,141.596z" />
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>Les Artisans</a>
                            </li>
                            @guest
                                @if (Route::has('login'))
                                    <li><a href="{{ route('login') }}" data-after="Se connecter">Se connecter</a></li>
                                @endif

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" data-after="S'enregistrer">S'enregistrer</a></li>
                                @endif
                            @else
                                <li>
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div style="background-color: #29323c" class="dropdown-menu"
                                        aria-labelledby="navbarDropdown">

                                        <a class="dropdown-item" href="{{ route('home') }}">
                                            {{ __('Tableau de bord') }}
                                        </a>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Se Deconnecter') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Header -->

        <!-- Hero Section  -->
        <section id="hero">
            <div class="hero container">
                <div>
                    <h1>Rencontrez les talents <span></span></h1>
                    <h1> qui feront la différence, <span></span></h1>
                    <h1>Simplement & Rapidement <span></span></h1>
                    <div class="d-flex">
                        <a style="margin: 5px;text-decoration:none;" href="#services" type="button" class="cta">Nos
                            Services</a>
                        <a style="margin: 5px;text-decoration:none;" href="#tarifs" type="button"
                            class="cta">Nos
                            Tarifs</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Hero Section  -->

        <!-- Service Section -->
        <section id="services">
            <div class="services container">
                <div class="service-top">
                    <h1 class="section-title">Nos Serv<span>i</span>ces</h1>
                    <p>Découvrez notre plateforme web spécialisée dans le recrutement ,le freelance et
                        l'artisanat.Trouver
                        facilement les talents pour vos demandes,accédez à des missions freelances et contactez les
                        artisans de vos choix pour vos divers chantiers.
                    </p>
                </div>
                <div class="service-bottom">
                    <div class="service-item">
                        <div class="icon"><img src="/icones/self-employed.png" /></div>
                        <h2>Freelances</h2>
                        <p>un espace pour créer un profil, des offres de missions à pourvoir,
                            un espace pour communiquer avec les recruteurs et clients potentiels.</p>
                    </div>
                    <div class="service-item">
                        <div class="icon"><img src="/icones/artisan.png" /></div>
                        <h2>Artisans</h2>
                        <p>un annuaire pour présenter votre profil ,
                            trouver un client potentiel dans un bref delai,
                            trouver des annonces compatible à vos comptences.</p>
                    </div>
                    <div class="service-item">
                        <div class="icon"><img src="/icones/hire.png" /></div>
                        <h2>Recruteurs</h2>
                        <p>
                            des offres de missions dans différents domaines,
                          trouver des opportunités correspondant à leurs compétences,
                            et  un espace de communication dédié.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Section -->


        <!-- tarrifs Section -->
        <section id="tarifs">
            <div class="tarifs container">
                <div class="tarif-top">
                    <h1 class="section-title">Nos <span>Tarifs</span></h1>
                    <p>Nous proposons des tarifs dans les domaines du recrutement,du freelance et de l'atisanat.
                        Des tarifs qui vous sont avantageux tant bien pour nous que pour vous.
                    </p>
                </div>
                <div class="d-flex">
                    <div class="tarif-item">
                        <div class="icon">
                            <svg id="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="width: 10em !important; height: 10em !important">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #fcd8c0;
                                        }

                                        .cls-2 {
                                            fill: #ef9e86;
                                        }

                                        .cls-3 {
                                            fill: #aabc80;
                                        }

                                        .cls-4 {
                                            fill: #c7dba2;
                                        }

                                        .cls-5 {
                                            fill: #e0edc3;
                                        }

                                        .cls-6 {
                                            fill: #4d4d4d;
                                        }
                                    </style>
                                </defs>
                                <title>pay cash</title>
                                <path class="cls-1"
                                    d="M143.64,103,253,32.8a35.59,35.59,0,0,1,30.24-3.88L381,60.76h79.48V167.87H412.37s-15.95,30.86-53.54,30.86H143.64Z" />
                                <path class="cls-2"
                                    d="M405.28,137.77,243.77,91.86h76.77v-2A12.5,12.5,0,0,0,308,77.32H183.62l-40,25.65v95.76H358.83a60.85,60.85,0,0,0,25.81-5.54C405,170.43,405.28,137.77,405.28,137.77Z" />
                                <path class="cls-3"
                                    d="M51.55,105.49v146.2A14.11,14.11,0,0,0,65.66,265.8H359.75a14.11,14.11,0,0,0,14.11-14.11V91.38H65.66A14.11,14.11,0,0,0,51.55,105.49Z" />
                                <path class="cls-4"
                                    d="M51.55,105.49v67.77a65.16,65.16,0,0,0,86.13-81.88h-72A14.11,14.11,0,0,0,51.55,105.49Z" />
                                <path class="cls-4"
                                    d="M346.61,213.79a24.76,24.76,0,0,0-24.76,24.76H103.56a24.76,24.76,0,0,0-24.75-24.76v-70.4a24.75,24.75,0,0,0,24.75-24.75H321.85a24.75,24.75,0,0,0,24.76,24.75Z" />
                                <path class="cls-1"
                                    d="M399.62,138.39c-12.6,24.08-43,24.7-43,24.7-40.74,0-52.23-29.88-52.23-29.88H250.89A20.91,20.91,0,0,1,230,112.3h0a20.92,20.92,0,0,1,20.91-20.92H314.8l60.61-9.21a22,22,0,0,1,25.32,22.51Z" />
                                <path class="cls-1"
                                    d="M52,484.85l63.89-94.43a87.34,87.34,0,0,1,81.76-38,134.23,134.23,0,0,1,30,6.64,53.6,53.6,0,0,0,17.81,3.13h58.1a22.49,22.49,0,0,1,22.49,22.49h0l56.18-60.73a21.17,21.17,0,0,1,28.71-2.2h0a21.18,21.18,0,0,1,3.23,30l-62.76,76.74a34.51,34.51,0,0,1-21.78,12.32L208.21,458.35a34.76,34.76,0,0,0-25.42,17.57l-4.94,8.93Z" />
                                <path class="cls-2"
                                    d="M304.57,410.23H238.18l-22,17.73v3.88l8.59-.11a23.64,23.64,0,0,0,15.44-6l.71-.63a16.82,16.82,0,0,1,11.26-4.31h58.36A25.12,25.12,0,0,0,334,405.37c2.54-6.31,2.86-14.65-2.58-25.19l-.83-.41-4.52,4.89C325.83,403.54,304.57,410.23,304.57,410.23Z" />
                                <path class="cls-5"
                                    d="M141.09,118.64H103.56a24.75,24.75,0,0,1-24.75,24.75V178A65.13,65.13,0,0,0,141.09,118.64Z" />
                                <path class="cls-6"
                                    d="M460.45,55.06H381.88L285,23.5A41.13,41.13,0,0,0,249.92,28L191.55,65.46a5.7,5.7,0,1,0,6.16,9.59L256.07,37.6a29.75,29.75,0,0,1,25.4-3.26l97.74,31.84a5.84,5.84,0,0,0,1.76.28h73.78v95.71H412.37a5.7,5.7,0,0,0-5.06,3.08,57.27,57.27,0,0,1-27.75,23.93V163.53c9.13-3.9,18.92-10.68,25.1-22.49a5.7,5.7,0,1,0-10.09-5.29c-10.84,20.71-37.78,21.63-37.92,21.64-36.08,0-46.49-25.18-46.91-26.23a5.69,5.69,0,0,0-5.32-3.65H250.89a15.22,15.22,0,1,1,0-30.43H314.8a5.7,5.7,0,0,0,0-11.4H250.89a26.62,26.62,0,0,0,0,53.23h50c4.76,8.73,20,29.88,55.91,29.88a62.35,62.35,0,0,0,11.39-1.59v84.49a8.42,8.42,0,0,1-8.41,8.41H65.66a8.42,8.42,0,0,1-8.41-8.41V105.49a8.42,8.42,0,0,1,8.41-8.41H211a5.7,5.7,0,0,0,0-11.4H65.66a19.84,19.84,0,0,0-19.81,19.81v146.2A19.83,19.83,0,0,0,65.66,271.5H359.75a19.83,19.83,0,0,0,19.81-19.81V201.26c20.43-6.51,31.87-21.24,36-27.69h44.85a5.7,5.7,0,0,0,5.7-5.7V60.76A5.7,5.7,0,0,0,460.45,55.06Z" />
                                <path class="cls-6"
                                    d="M84.51,208.63V148.56a30.53,30.53,0,0,0,24.21-24.22H206a5.7,5.7,0,1,0,0-11.4H103.56a5.7,5.7,0,0,0-5.7,5.7,19.08,19.08,0,0,1-19,19,5.7,5.7,0,0,0-5.7,5.7v70.4a5.7,5.7,0,0,0,5.7,5.7,19.08,19.08,0,0,1,19,19.06,5.7,5.7,0,0,0,5.7,5.7H321.85a5.7,5.7,0,0,0,5.7-5.7,19.08,19.08,0,0,1,19.06-19.06,5.7,5.7,0,0,0,5.69-5.7V188a5.7,5.7,0,1,0-11.39,0v20.6a30.53,30.53,0,0,0-24.22,24.22h-208A30.52,30.52,0,0,0,84.51,208.63Z" />
                                <path class="cls-6"
                                    d="M205.22,159.84h13.71a5.7,5.7,0,1,0,0-11.4h-4.48v-3.67a5.7,5.7,0,0,0-11.4,0v3.81a17.92,17.92,0,0,0,2.17,35.71h7.07a6.53,6.53,0,0,1,0,13.06H198.58a5.7,5.7,0,1,0,0,11.39h4.47v3.67a5.7,5.7,0,0,0,11.4,0V208.6a17.92,17.92,0,0,0-2.16-35.71h-7.07a6.53,6.53,0,1,1,0-13Z" />
                                <path class="cls-6"
                                    d="M145.92,174.57a5.7,5.7,0,0,0-1.67,4,6,6,0,0,0,.11,1.13,5.56,5.56,0,0,0,.33,1,4.55,4.55,0,0,0,.53,1,5.26,5.26,0,0,0,.7.86,4.91,4.91,0,0,0,.87.71,6.18,6.18,0,0,0,1,.53,6.3,6.3,0,0,0,1.07.32,5.21,5.21,0,0,0,1.11.1,5.71,5.71,0,0,0,4-1.66,5.9,5.9,0,0,0,.71-.86,7.28,7.28,0,0,0,.53-1,6.33,6.33,0,0,0,.31-1,4.72,4.72,0,0,0,.12-1.13,5.7,5.7,0,0,0-9.73-4Z" />
                                <path class="cls-6"
                                    d="M270.72,181.76a6.49,6.49,0,0,0,.71.86,5.67,5.67,0,0,0,8.76-.86,4.55,4.55,0,0,0,.53-1,5.56,5.56,0,0,0,.33-1,6,6,0,0,0,.11-1.11,5.7,5.7,0,0,0-11.4,0,6,6,0,0,0,.12,1.11,5.53,5.53,0,0,0,.32,1A6.29,6.29,0,0,0,270.72,181.76Z" />
                                <path class="cls-6"
                                    d="M414.52,317.26a27,27,0,0,0-36.43,2.8l-36,39a5.7,5.7,0,0,0,8.37,7.74l36-39a15.48,15.48,0,0,1,26.74,8.85,15.34,15.34,0,0,1-3.41,11.46L347,424.85a28.8,28.8,0,0,1-18.19,10.28L207.4,452.71a40.66,40.66,0,0,0-29.59,20.45l-3.32,6H62.76l57.87-85.54a81.45,81.45,0,0,1,76.42-35.55,129.29,129.29,0,0,1,28.75,6.35,59.15,59.15,0,0,0,19.7,3.46h58.1a16.82,16.82,0,0,1,16.79,16.79,18.15,18.15,0,0,1-18.13,18.13H249a37.31,37.31,0,0,0-23.79,8.59l-12.5,10.37a5.7,5.7,0,0,0,3.65,10.09,5.62,5.62,0,0,0,3.63-1.32l12.5-10.37a25.93,25.93,0,0,1,16.51-6h53.26a29.57,29.57,0,0,0,29.53-29.53,28.23,28.23,0,0,0-28.19-28.19H245.5a47.82,47.82,0,0,1-15.92-2.81,140.69,140.69,0,0,0-31.29-6.93,92.83,92.83,0,0,0-87.1,40.49L47.3,481.65A5.69,5.69,0,0,0,52,490.54H177.85a5.68,5.68,0,0,0,5-2.94l4.94-8.92A29.23,29.23,0,0,1,209,464l121.46-17.58a40.12,40.12,0,0,0,25.37-14.35l62.76-76.74a26.88,26.88,0,0,0-4.1-38.06Z" />
                            </svg>
                        </div>
                        <h2>Freelances & Recruteurs</h2>
                        <p>Notre politique de rémunération consiste à prélever une commission
                            de 10% sur les revenus générés par chaque mission accomplie via notre plateforme.</p>
                    </div>
                    <div class="tarif-item">
                        <div class="icon">

                            <svg enable-background="new 0 0 128 128"
                                style="width: 9em !important; height: 9em !important" version="1.1"
                                viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <g>
                                        <g>
                                            <path
                                                d="M112.8,64L15.2,49c-4.1,0-7.5-3.4-7.5-7.5v0c0-4.1,3.4-7.5,7.5-7.5h82.5c8.3,0,15,6.7,15,15V64z"
                                                fill="#E8E8E8" />
                                        </g>
                                        <g>
                                            <path
                                                d="M112.8,65.2c-0.1,0-0.1,0-0.2,0l-97.4-15c-4.8-0.1-8.7-4-8.7-8.7c0-4.8,3.9-8.8,8.8-8.8h82.5     c9,0,16.2,7.3,16.2,16.2v15c0,0.4-0.2,0.7-0.4,0.9C113.3,65.1,113,65.2,112.8,65.2z M15.2,35.2c-3.4,0-6.2,2.8-6.2,6.2     s2.8,6.2,6.2,6.2c0.1,0,0.1,0,0.2,0l96.1,14.8V49c0-7.6-6.2-13.8-13.8-13.8H15.2z"
                                                fill="#62355C" />
                                        </g>
                                        <g>
                                            <path
                                                d="M112.8,56.5h-7.9v15h7.9c4.1,0,7.5-3.4,7.5-7.5v0C120.2,59.9,116.9,56.5,112.8,56.5z"
                                                fill="#E8E8E8" />
                                        </g>
                                        <g>
                                            <path
                                                d="M112.8,72.8h-7.9c-0.7,0-1.2-0.6-1.2-1.2v-15c0-0.7,0.6-1.2,1.2-1.2h7.9c4.8,0,8.8,3.9,8.8,8.8     S117.6,72.8,112.8,72.8z M106.1,70.2h6.7c3.4,0,6.2-2.8,6.2-6.2s-2.8-6.2-6.2-6.2h-6.7V70.2z"
                                                fill="#62355C" />
                                        </g>
                                        <g>
                                            <g>
                                                <circle cx="60.2" cy="30.2" fill="#F6CD29"
                                                    r="26.2" />
                                            </g>
                                            <g>
                                                <circle cx="60.2" cy="30.2" fill="#FEE444"
                                                    r="26.2" />
                                            </g>
                                            <g>
                                                <path
                                                    d="M60.2,57.8c-15.2,0-27.5-12.3-27.5-27.5S45.1,2.8,60.2,2.8s27.5,12.3,27.5,27.5S75.4,57.8,60.2,57.8z       M60.2,5.2c-13.8,0-25,11.2-25,25s11.2,25,25,25s25-11.2,25-25S74,5.2,60.2,5.2z"
                                                    fill="#62355C" />
                                            </g>
                                            <g opacity="0.3">
                                                <path
                                                    d="M60.2,9.9C49,9.9,39.9,19,39.9,30.2S49,50.6,60.2,50.6s20.3-9.1,20.3-20.3S71.5,9.9,60.2,9.9z"
                                                    fill="#F6F7F6" />
                                            </g>
                                            <g>
                                                <path
                                                    d="M60.2,51.8c-11.9,0-21.6-9.7-21.6-21.6S48.3,8.7,60.2,8.7s21.6,9.7,21.6,21.6S72.2,51.8,60.2,51.8z       M60.2,11.2c-10.5,0-19.1,8.6-19.1,19.1s8.6,19.1,19.1,19.1s19.1-8.6,19.1-19.1S70.8,11.2,60.2,11.2z"
                                                    fill="#62355C" />
                                            </g>
                                            <g>
                                                <path
                                                    d="M64.4,30.4c-0.7-0.4-1.4-0.8-2.3-1c-0.7-0.2-1.4-0.4-2.2-0.6c-0.7-0.2-1.3-0.4-1.9-0.6      c-0.5-0.2-0.9-0.5-1.3-0.8c-0.3-0.3-0.6-0.6-0.8-1.1c-0.1-0.3-0.3-0.9-0.3-1.8c0-0.5,0.1-1,0.3-1.5c0.2-0.5,0.4-0.9,0.8-1.2      c0.3-0.4,0.8-0.7,1.4-0.9c0.6-0.2,1.3-0.4,2.1-0.4c0.8,0,1.5,0.1,2,0.4c0.5,0.2,1,0.6,1.3,0.9c0.3,0.4,0.6,0.9,0.8,1.4      c0.2,0.6,0.8,0.9,1.5,0.7c0.6-0.2,0.9-0.8,0.7-1.5c-0.3-0.8-0.7-1.6-1.2-2.2c-0.6-0.7-1.3-1.2-2.1-1.6c-0.5-0.2-1.2-0.4-1.8-0.5      v-0.8c0-0.6-0.5-1.2-1.2-1.2c-0.6,0-1.2,0.5-1.2,1.2v0.8c-0.7,0.1-1.3,0.2-1.8,0.5c-0.9,0.4-1.6,0.8-2.1,1.4      c-0.6,0.6-1,1.3-1.3,2c-0.3,0.7-0.4,1.5-0.4,2.3c0,1.1,0.2,2.1,0.5,2.8c0.3,0.8,0.8,1.4,1.4,1.9c0.6,0.5,1.2,0.9,2,1.2      c0.7,0.3,1.4,0.5,2.2,0.7c0.7,0.2,1.4,0.4,2.1,0.6c0.6,0.2,1.2,0.5,1.7,0.8c0.5,0.3,0.9,0.7,1.2,1.2c0.3,0.5,0.5,1.2,0.5,2      c0,0.6-0.1,1.2-0.3,1.7c-0.2,0.5-0.4,1-0.8,1.4c-0.3,0.4-0.8,0.7-1.3,0.9c-0.5,0.2-1.2,0.3-2,0.3c-0.7,0-1.3-0.1-1.8-0.3      c-0.6-0.2-1-0.5-1.5-0.9c-0.4-0.4-0.8-0.9-1.1-1.6c-0.3-0.6-0.9-0.9-1.5-0.6c-0.6,0.3-0.9,0.9-0.6,1.5c0.4,1,1,1.8,1.7,2.4      c0.7,0.6,1.5,1.1,2.3,1.4c0.3,0.1,0.7,0.2,1.1,0.3v0.9c0,0.6,0.5,1.2,1.2,1.2c0.6,0,1.2-0.5,1.2-1.2v-0.8c0.7-0.1,1.4-0.2,2-0.5      c0.9-0.4,1.6-0.9,2.2-1.5c0.6-0.6,1-1.4,1.3-2.2c0.3-0.8,0.4-1.6,0.4-2.4c0-1.3-0.3-2.4-0.8-3.2C65.8,31.6,65.2,30.9,64.4,30.4z      "
                                                    fill="#62355C" />
                                            </g>
                                            <g>
                                                <path d="      M60.2,39.9" fill="none" stroke="#404243"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="2.5" />
                                            </g>
                                        </g>
                                        <path d="M35.9,40c3.9,9.7,13.3,16.5,24.4,16.5S80.7,49.7,84.6,40H35.9z"
                                            fill="#593055" opacity="0.2" />
                                        <g>
                                            <path
                                                d="M97.8,49h-75h-7.5c-4.1,0-7.5-3.4-7.5-7.5V64v45c0,8.3,6.7,15,15,15h75c8.3,0,15-6.7,15-15V64     C112.8,55.7,106,49,97.8,49z"
                                                fill="#938993" />
                                        </g>
                                        <path
                                            d="M19.8,109V64V49h-4.5c-4.1,0-7.5-3.4-7.5-7.5V64v45c0,8.3,6.7,15,15,15h12    C26.5,124,19.8,117.3,19.8,109z"
                                            fill="#593055" opacity="0.2" />
                                        <g>
                                            <path
                                                d="M97.8,125.2h-75c-9,0-16.2-7.3-16.2-16.2V41.5c0-0.7,0.6-1.2,1.2-1.2S9,40.8,9,41.5     c0,3.4,2.8,6.2,6.2,6.2h82.5c9,0,16.2,7.3,16.2,16.2v45C114,118,106.7,125.2,97.8,125.2z M9,47.6V109c0,7.6,6.2,13.8,13.8,13.8     h75c7.6,0,13.8-6.2,13.8-13.8V64c0-7.6-6.2-13.8-13.8-13.8H15.2C12.8,50.2,10.6,49.2,9,47.6z"
                                                fill="#62355C" />
                                        </g>
                                        <g>
                                            <path
                                                d="M112.8,71.5h-7.9h-6.7c-8,0-14.9,6-15.4,14c-0.5,7.6,4.7,14.1,11.8,15.6h18.3c4.1,0,7.5-3.4,7.5-7.5V71.5     V64C120.2,68.1,116.9,71.5,112.8,71.5z"
                                                fill="#65C5B4" />
                                        </g>
                                        <g>
                                            <path
                                                d="M112.8,71.5h-7.9h-6.7c-8,0-14.9,6-15.4,14c-0.2,3.3,0.6,6.4,2.2,8.9c2.7,4.3,7.6,6.7,12.7,6.7h15.1     c4.1,0,7.5-3.4,7.5-7.5V71.5V64C120.2,68.1,116.9,71.5,112.8,71.5z"
                                                fill="#E8E8E8" />
                                        </g>
                                        <g>
                                            <path
                                                d="M112.8,102.4H97.7c-5.7,0-11-2.8-13.8-7.3c-1.8-2.9-2.6-6.2-2.4-9.6c0.5-8.5,7.9-15.2,16.7-15.2h14.6     c3.4,0,6.2-2.8,6.2-6.2c0-0.7,0.6-1.2,1.2-1.2s1.2,0.6,1.2,1.2v29.7C121.5,98.5,117.6,102.4,112.8,102.4z M98.1,72.8     c-7.5,0-13.7,5.6-14.2,12.9c-0.2,2.9,0.5,5.7,2,8.2c2.4,3.8,6.8,6.1,11.7,6.1h15.1c3.4,0,6.2-2.8,6.2-6.2V70.1     c-1.6,1.6-3.8,2.6-6.2,2.6H98.1z"
                                                fill="#62355C" />
                                        </g>
                                    </g>
                                    <g>
                                        <circle cx="97.7" cy="86.5" fill="#FEE444" r="7.5" />
                                    </g>
                                    <g>
                                        <circle cx="97.7" cy="86.5" fill="#65C5B4" r="7.5" />
                                    </g>
                                    <g>
                                        <path
                                            d="M97.7,95.2c-4.8,0-8.8-3.9-8.8-8.8s3.9-8.8,8.8-8.8s8.8,3.9,8.8,8.8S102.5,95.2,97.7,95.2z M97.7,80.2    c-3.4,0-6.2,2.8-6.2,6.2s2.8,6.2,6.2,6.2s6.2-2.8,6.2-6.2S101.1,80.2,97.7,80.2z"
                                            fill="#62355C" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h2>Artisans</h2>
                        <p> S'acquitter d'une somme de 3000 FCFA lors de la création de votre
                            profil, laquelle couvre une période de trois mois.</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Service Section -->

        <!-- Projects Section -->
        <section id="projects">
            <div class="projects container">
                <div class="projects-header">
                    <h1 class="section-title">Missions<span>recents</span></h1>
                </div>
                <div class="all-projects">

                    <div class="project-item">
                        @foreach ($missions as $mission)
                            <div class="project-info">
                                <h1>{{ $mission->titre }}</h1>
                                <p>{{ $mission->description }}</p>
                            </div>
                            <div class="project-img">
                                <img src="./img/img-1.png" alt="img">
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </section>
        <!-- End Projects Section -->

        <!-- About Section -->
        <section id="about">
            <div class="about container">
                <div class="col-left">
                    <div class="about-img">
                        <img src="/images/freelance.jpg" alt="img">
                    </div>
                </div>
                <div class="col-right">
                    <h1 class="section-title">PAR RAPPORT à <span>NOUS</span></h1>
                    <p>Que vous soyez à la recherche d'un développeur web compétent, d'un graphiste créatif, d'un
                        rédacteur expérimenté ou d'autres professionnels qualifiés, notre site met en relation les
                        freelances et les utilisateurs qui recherchent leurs compétences spécifiques.
                        Parallèlement, notre annuaire met en avant les artisans locaux qui excellent dans leur domaine.
                        Nous croyons en la valeur du travail artisanal et souhaitons promouvoir et soutenir ces
                        professionnels qui apportent un savoir-faire unique à leurs créations.
                        Rejoignez notre communauté dès maintenant pour découvrir des talents inspirants et collaborer
                        avec des professionnels passionnés. Que vous souhaitiez réaliser un projet professionnel ou
                        créatif, nous sommes là pour vous aider.</p>

                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Contact Section -->
        <section id="contact">
            <div class="contact container">
                <div>
                    <h1 class="section-title"> <span>CONTACTS</span></h1>
                </div>
                <div class="contact-items">
                    <div class="contact-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M 8.65625 3 C 8.132813 3 7.617188 3.1875 7.1875 3.53125 L 7.125 3.5625 L 7.09375 3.59375 L 3.96875 6.8125 L 4 6.84375 C 3.035156 7.734375 2.738281 9.066406 3.15625 10.21875 C 3.160156 10.226563 3.152344 10.242188 3.15625 10.25 C 4.003906 12.675781 6.171875 17.359375 10.40625 21.59375 C 14.65625 25.84375 19.402344 27.925781 21.75 28.84375 L 21.78125 28.84375 C 22.996094 29.25 24.3125 28.960938 25.25 28.15625 L 28.40625 25 C 29.234375 24.171875 29.234375 22.734375 28.40625 21.90625 L 24.34375 17.84375 L 24.3125 17.78125 C 23.484375 16.953125 22.015625 16.953125 21.1875 17.78125 L 19.1875 19.78125 C 18.464844 19.433594 16.742188 18.542969 15.09375 16.96875 C 13.457031 15.40625 12.621094 13.609375 12.3125 12.90625 L 14.3125 10.90625 C 15.152344 10.066406 15.167969 8.667969 14.28125 7.84375 L 14.3125 7.8125 L 14.21875 7.71875 L 10.21875 3.59375 L 10.1875 3.5625 L 10.125 3.53125 C 9.695313 3.1875 9.179688 3 8.65625 3 Z M 8.65625 5 C 8.730469 5 8.804688 5.035156 8.875 5.09375 L 12.875 9.1875 L 12.96875 9.28125 C 12.960938 9.273438 13.027344 9.378906 12.90625 9.5 L 10.40625 12 L 9.9375 12.4375 L 10.15625 13.0625 C 10.15625 13.0625 11.304688 16.136719 13.71875 18.4375 L 13.9375 18.625 C 16.261719 20.746094 19 21.90625 19 21.90625 L 19.625 22.1875 L 22.59375 19.21875 C 22.765625 19.046875 22.734375 19.046875 22.90625 19.21875 L 27 23.3125 C 27.171875 23.484375 27.171875 23.421875 27 23.59375 L 23.9375 26.65625 C 23.476563 27.050781 22.988281 27.132813 22.40625 26.9375 C 20.140625 26.046875 15.738281 24.113281 11.8125 20.1875 C 7.855469 16.230469 5.789063 11.742188 5.03125 9.5625 C 4.878906 9.15625 4.988281 8.554688 5.34375 8.25 L 5.40625 8.1875 L 8.4375 5.09375 C 8.507813 5.035156 8.582031 5 8.65625 5 Z" />
                            </svg>
                        </div>
                        <div class="contact-info">
                            <h1>Télephone</h1>
                            <h2>+229 53 833 899</h2>
                            <h2>+229 62 995 434</h2>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M 3 8 L 3 26 L 29 26 L 29 8 Z M 7.3125 10 L 24.6875 10 L 16 15.78125 Z M 5 10.875 L 15.4375 17.84375 L 16 18.1875 L 16.5625 17.84375 L 27 10.875 L 27 24 L 5 24 Z" />
                            </svg>
                        </div>
                        <div class="contact-info">
                            <h1>Email</h1>
                            <h2>kounoumarcus@gmail.com</h2>
                            <h2>aquilasoutingue@gmail.com</h2>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M 22 3 C 18.699219 3 16 5.699219 16 9 C 16 9.992188 16.382813 11.003906 16.875 12.125 C 17.367188 13.246094 17.988281 14.433594 18.625 15.53125 C 19.898438 17.726563 21.1875 19.5625 21.1875 19.5625 L 22 20.75 L 22.8125 19.5625 C 22.8125 19.5625 24.101563 17.726563 25.375 15.53125 C 26.011719 14.433594 26.632813 13.246094 27.125 12.125 C 27.617188 11.003906 28 9.992188 28 9 C 28 5.699219 25.300781 3 22 3 Z M 11.96875 4.9375 L 4 8.34375 L 4 27.53125 L 12.03125 24.0625 L 20.03125 27.0625 L 28 23.65625 L 28 14.9375 C 27.363281 16.160156 26.65625 17.332031 26 18.375 L 26 22.34375 L 21 24.46875 L 21 22.84375 L 19.53125 20.71875 C 19.375 20.492188 19.191406 20.222656 19 19.9375 L 19 24.5625 L 13 22.3125 L 13 7.4375 L 14.09375 7.84375 C 14.191406 7.167969 14.367188 6.515625 14.625 5.90625 Z M 22 5 C 24.21875 5 26 6.78125 26 9 C 26 9.386719 25.757813 10.300781 25.3125 11.3125 C 24.867188 12.324219 24.238281 13.472656 23.625 14.53125 C 22.808594 15.9375 22.457031 16.4375 22 17.125 C 21.542969 16.4375 21.191406 15.9375 20.375 14.53125 C 19.761719 13.472656 19.132813 12.324219 18.6875 11.3125 C 18.242188 10.300781 18 9.386719 18 9 C 18 6.78125 19.78125 5 22 5 Z M 11 7.5 L 11 22.34375 L 6 24.46875 L 6 9.65625 Z M 22 7.5 C 21.171875 7.5 20.5 8.171875 20.5 9 C 20.5 9.828125 21.171875 10.5 22 10.5 C 22.828125 10.5 23.5 9.828125 23.5 9 C 23.5 8.171875 22.828125 7.5 22 7.5 Z" />
                            </svg>
                        </div>
                        <div class="contact-info">
                            <h1>Addresses</h1>
                            <h2>Cotonou,Abomey-Calavi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

        <!-- Footer -->
        <section id="footer">
            <div class="footer container">
                <div class="brand">
                    <h1><span>Y</span>I<span>W</span>A</h1>
                </div>

                <div class="social-icon">
                    <div class="social-item">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M 19.253906 2 C 15.311906 2 13 4.0821719 13 8.8261719 L 13 13 L 8 13 L 8 18 L 13 18 L 13 30 L 18 30 L 18 18 L 22 18 L 23 13 L 18 13 L 18 9.671875 C 18 7.884875 18.582766 7 20.259766 7 L 23 7 L 23 2.2050781 C 22.526 2.1410781 21.144906 2 19.253906 2 z" />
                            </svg></a>
                    </div>
                    <div class="social-item">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path fill-rule="evenodd"
                                    d="M 16 4 C 9.371094 4 4 9.371094 4 16 C 4 21.300781 7.4375 25.800781 12.207031 27.386719 C 12.808594 27.496094 13.027344 27.128906 13.027344 26.808594 C 13.027344 26.523438 13.015625 25.769531 13.011719 24.769531 C 9.671875 25.492188 8.96875 23.160156 8.96875 23.160156 C 8.421875 21.773438 7.636719 21.402344 7.636719 21.402344 C 6.546875 20.660156 7.71875 20.675781 7.71875 20.675781 C 8.921875 20.761719 9.554688 21.910156 9.554688 21.910156 C 10.625 23.746094 12.363281 23.214844 13.046875 22.910156 C 13.15625 22.132813 13.46875 21.605469 13.808594 21.304688 C 11.144531 21.003906 8.34375 19.972656 8.34375 15.375 C 8.34375 14.0625 8.8125 12.992188 9.578125 12.152344 C 9.457031 11.851563 9.042969 10.628906 9.695313 8.976563 C 9.695313 8.976563 10.703125 8.65625 12.996094 10.207031 C 13.953125 9.941406 14.980469 9.808594 16 9.804688 C 17.019531 9.808594 18.046875 9.941406 19.003906 10.207031 C 21.296875 8.65625 22.300781 8.976563 22.300781 8.976563 C 22.957031 10.628906 22.546875 11.851563 22.421875 12.152344 C 23.191406 12.992188 23.652344 14.0625 23.652344 15.375 C 23.652344 19.984375 20.847656 20.996094 18.175781 21.296875 C 18.605469 21.664063 18.988281 22.398438 18.988281 23.515625 C 18.988281 25.121094 18.976563 26.414063 18.976563 26.808594 C 18.976563 27.128906 19.191406 27.503906 19.800781 27.386719 C 24.566406 25.796875 28 21.300781 28 16 C 28 9.371094 22.628906 4 16 4 Z" />
                            </svg></a>
                    </div>
                </div>
                <p>Copyright © 2023 YIWA. Tout droits reservés</p>
            </div>
        </section>
        <!-- End Footer -->
        <script>
            const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
            const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
            const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
            const header = document.querySelector('.header.container');

            hamburger.addEventListener('click', () => {
                hamburger.classList.toggle('active');
                mobile_menu.classList.toggle('active');
            });

            document.addEventListener('scroll', () => {
                var scroll_position = window.scrollY;
                if (scroll_position > 250) {
                    header.style.backgroundColor = '#29323c';
                } else {
                    header.style.backgroundColor = 'transparent';
                }
            });

            menu_item.forEach((item) => {
                item.addEventListener('click', () => {
                    hamburger.classList.toggle('active');
                    mobile_menu.classList.toggle('active');
                });
            });
        </script>


    </div>
    @livewireScripts

</body>
