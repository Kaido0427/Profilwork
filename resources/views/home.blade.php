<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">

    <title>{{ 'YIWA' }}</title>
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 90px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            z-index: 99;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 11.5rem;
                padding: 0;
            }
        }

        .navbar {
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
        }

        @media (min-width: 767.98px) {
            .navbar {
                top: 0;
                position: sticky;
                z-index: 999;
            }
        }

        .sidebar .nav-link {
            color: #333;
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
        }
    </style>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div class="app">
        <header class="app-header">
            <div class="app-header-logo">
                <div class="logo">
                    <span class="logo-icon">

                    </span>

                    <h1><span style="color:rgb(100, 203, 112);">Y</span>i<span
                            style="color:rgb(100, 203, 112);">W</span>a</h1>


                </div>
            </div>

            <h1 id="welcome-message" class="mx-5"></h1>
            <div class="app-header-actions" style="margin-left: 55%">
                <button class="user-profile">
                    <span> {{ Auth::user()->name }}</span>
                    <span>
                        <img src="{{ Auth::user()->avatar }}" class="rounded-circle" width="40" height="40">
                    </span>

                </button>

            </div>
            <div class="app-header-mobile">
                <button class="icon-button large">
                    <i class="ph-list"></i>
                </button>
            </div>

        </header>
        <div class="app-body">
            <div class="app-body-navigation">
                <nav class="navigation">
                    <a href="/">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-house" viewBox="0 0 16 16">
                            <path
                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                        </svg>
                        <span>Accueil</span>
                    </a>
                    @if (Auth()->user()->role_id != 3)
                        <a href="{{ route('jobs.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bullseye" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                                <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            </svg>
                            <span>Missions</span>
                        </a>
                        <a href="{{ route('conversations.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chat" viewBox="0 0 16 16">
                                <path
                                    d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                            </svg>
                            <span>Conversations</span>
                        </a>
                    @endif

                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd"
                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                        <span>Deconnexion</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                </nav>
                <footer class="footer">
                    <h1>YIWA<small>©</small></h1>
                    <div>
                        YIWA ©<br />
                        Tout droits resevés 2023
                    </div>
                </footer>
            </div>
            <div class="app-body-main-content">
                <section class="service-section">

                    <h2>Mes actions</h2>

                    <div class="mobile-only">
                        <button class="flat-button">
                            Toggle search
                        </button>
                    </div>
                    <div class="tiles">
                        @if (Auth()->user()->role_id == 1)
                            <article class="tile">
                                <div class="tile-header">
                                    <img width="50" height="50" src="/icones/create.png" alt="create-new" />
                                    <h3>
                                        <span>Création</span>
                                        <span>Mission</span>
                                    </h3>
                                </div>
                                <a href="{{ route('jobs.create') }}">
                                    <span>Créer une mission</span>
                                    <span class="icon-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </span>
                                </a>
                            </article>
                            <article class="tile">
                                <div class="tile-header">
                                    <img width="50" height="50" src="/icones/loupe.png" alt="create-new" />
                                    <h3>
                                        <span>Consultation</span>
                                        <span>Artisans</span>
                                    </h3>
                                </div>
                                <a href="{{ route('artisan.index') }}">
                                    <span>Consulter</span>
                                    <span class="icon-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </span>
                                </a>
                            </article>
                            <article class="tile">
                                <div class="tile-header">
                                    <img width="50" height="50" src="/icones/loupe.png" alt="create-new" />
                                    <h3>
                                        <span>Recherche</span>
                                        <span>Freelance</span>
                                    </h3>
                                </div>
                                <a href="{{ route('Freelance.index') }}">
                                    <span>Rechercher</span>
                                    <span class="icon-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </span>
                                </a>
                            </article>
                        @elseif(Auth()->user()->role_id == 2)
                            <article class="tile">
                                <div class="tile-header">
                                    <img width="50" height="50" src="/icones/create.png" alt="create-new" />
                                    <h3>
                                        <span>Consultation</span>
                                        <span>Missions</span>
                                    </h3>
                                </div>
                                <a href="{{ route('jobs.index') }}">
                                    <span>Consulter des missions</span>
                                    <span class="icon-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </span>
                                </a>
                            </article>

                            @if ($profils || $profil)
                                <article class="tile">
                                    <div class="tile-header">
                                        <img width="50" height="50" src="/icones/create.png"
                                            alt="create-new" />
                                        <h3>
                                            <span>Consultation</span>
                                            <span>Profil</span>
                                        </h3>
                                    </div>
                                    <a href="{{ route('artisan.show', $profil->id) }}">
                                        <span>Consulter mon profil</span>
                                        <span class="icon-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right-short"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </span>
                                    </a>
                                </article>
                            @else
                                <article class="tile">
                                    <div class="tile-header">
                                        <img width="50" height="50" src="/icones/create.png"
                                            alt="create-new" />
                                        <h3>
                                            <span>Création</span>
                                            <span>Profil</span>
                                        </h3>
                                    </div>
                                    <a href="{{ route('Freelance.create') }}">
                                        <span>Créer une profil</span>
                                        <span class="icon-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right-short"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </span>
                                    </a>
                                </article>
                            @endif
                            <section class="payment-section">
                                <h2>Mes statistiques</h2>
        
                                <div class="payments">
                                    <div class="payment">
                                        <div class="card green">
                                            <div style="padding-top: 25%;margin-left:50%"> {{ Auth()->user()->jobs->count() }}
                                            </div>
                                        </div>
                                        <div style="margin-left: 10px;">
                                            Propositions totales
                                        </div>
                                    </div>
                                    <div class="payment">
                                        <div class="card olive">
                                            <div style="padding-top: 25%;margin-left:50%">{{ $missionsV }}</div>
                                        </div>
                                        <div style="margin-left: 10px;">
                                            Propositions validées
                                        </div>
                                    </div>
        
                                </div>
        
                            </section>
                        @else
                            @if ($profils || $profil)
                                <article class="tile">
                                    <div class="tile-header">
                                        <img width="50" height="50" src="/icones/create.png"
                                            alt="create-new" />
                                        <h3>
                                            <span>Consultation</span>
                                            <span>Profil</span>
                                        </h3>
                                    </div>
                                    <a href="{{ route('artisan.show', $profil->id) }}">
                                        <span>Consulter mon profil</span>
                                        <span class="icon-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right-short"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </span>
                                    </a>
                                </article>
                            @else
                                <article class="tile">
                                    <div class="tile-header">
                                        <img width="50" height="50" src="/icones/create.png"
                                            alt="create-new" />
                                        <h3>
                                            <span>Création</span>
                                            <span>Profil</span>
                                        </h3>
                                    </div>
                                    <a href="{{ route('Payement.index') }}">
                                        <span>Créer mon profil</span>
                                        <span class="icon-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right-short"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </span>
                                    </a>
                                </article>
                            @endif

                        @endif

                    </div>
                    <div class="service-section-footer">

                    </div>
                </section>
                @if (Auth()->user()->role_id == 1)
                    <section class="transfer-section">
                        <div class="transfer-section-header">
                            <h2>Dernieres missions</h2>

                        </div>
                        @foreach ($jobs as $job)
                            <div class="transfers">
                                <div class="transfer">
                                    <dl class="transfer-details">
                                        <div>
                                            <dt>{{ $job->titre }}</dt>
                                            <dd>Titre</dd>
                                        </div>
                                        <div>
                                            <dt>{{ Illuminate\Support\Str::limit($job->description, 20) }}</dt>
                                            <dd>Details</dd>
                                        </div>
                                        <div>
                                            <dt>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $job->created_at)->diffForHumans() }}
                                            </dt>
                                            <dd>Date</dd>
                                        </div>
                                    </dl>
                                    <div class="transfer-details">
                                        <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-sm btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6" style="width:20px;">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>

                                        </a>
                                        <a href="{{ route('jobs.edit', $job->id) }}"
                                            class="btn btn-sm btn-warning"><svg xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6"
                                                style="width: 1.5em !important; height: 1.5em !important;">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>

                                        </a>
                                        <form method="post" action="{{ route('jobs.destroy', $job) }}"
                                            id="destroy-prop-form">
                                            @method('DELETE')
                                            @csrf

                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg>
                                            </button>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </section>
                @elseif(Auth()->user()->role_id == 2)
                    <section class="transfer-section">
                        <div class="transfer-section-header">
                            <h2>Dernières Propositions</h2>

                        </div>
                        @foreach ($props as $prop)
                            <div class="transfers">
                                <div class="transfer">
                                    <dl class="transfer-details">
                                        <div>
                                            <dt>{{ $prop->job->titre }}</dt>
                                            <dd>Titre</dd>
                                        </div>
                                        <div>
                                            <dt>{{ Illuminate\Support\Str::limit($prop->text_mot, 15) }}</dt>
                                            <dd>Details</dd>
                                        </div>
                                        <div>
                                            @if ($prop->valid_status == 1)
                                                <dt>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                                        <path
                                                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                                    </svg>
                                                </dt>
                                                <dd>Etat</dd>
                                            @else
                                                <dt>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-x-circle"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        <path
                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </dt>
                                                <dd>Etat</dd>
                                            @endif


                                        </div>
                                    </dl>
                                    <div class="transfer-details">
                                        <a href="{{ route('jobs.show', $prop->id) }}" class="btn btn-sm btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6" style="width:20px;">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>

                                        </a>
                                        <a href="{{ route('propositions.edit', $prop) }}"
                                            class="btn btn-sm btn-warning"><svg xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6"
                                                style="width: 1.5em !important; height: 1.5em !important;">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>

                                        </a>
                                        <form method="post" action="{{ route('propositions.destroy', $prop) }}"
                                            id="destroy-prop-form">
                                            @method('DELETE')
                                            @csrf

                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6" style="width:20px;">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg></button>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </section>
                @endif

            </div>
            <div class="app-body-sidebar">
                @if (Auth()->user()->role_id == 1)
                    <section class="payment-section">
                        <h2>Mes statistiques</h2>

                        <div class="payments">
                            <div class="payment">
                                <div class="card green">
                                    <div style="padding-top: 25%;margin-left:50%"> {{ Auth()->user()->jobs->count() }}
                                    </div>
                                </div>
                                <div style="margin-left: 10px;">
                                    Missions totales
                                </div>
                            </div>
                            <div class="payment">
                                <div class="card olive">
                                    <div style="padding-top: 25%;margin-left:50%">{{ $missionsV }}</div>
                                </div>
                                <div style="margin-left: 10px;">
                                    Missions validées
                                </div>
                            </div>

                        </div>

                    </section>
                @elseif(Auth()->user()->role_id == 2)
                   
                @else
                @endif

            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            var welcomeMessage = document.getElementById('welcome-message');
            var status = "{{ session('status') }}";

            if (status) {
                var message = '';

                for (var i = 0; i < status.length; i++) {
                    message += '<span>' + status.charAt(i) + '</span>';
                }

                welcomeMessage.innerHTML = message;
            }
        }
    </script>
    @livewireScripts
</body>

</html>
