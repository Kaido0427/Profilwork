@extends('layouts.app')

@section('content')
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="">
        <div class="">
            <div class="text-center my-5">
                <h1 class="fw-bolder py-2">Les dernieres Missions</h1>
                @if (auth()->user()->role_id == 2)
                    @livewire('search')
                @endif

            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <div class="row">
                @foreach ($jobs as $job)
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="small text-muted">Publié par
                                {{ $job->user->name }}||il y a
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $job->created_at)->diffForHumans() }}
                            </div>
                            <h2 class="card-title h4">{{ $job->titre }}</h2>
                            <p class="card-text">{{ Illuminate\Support\Str::limit($job->description, 25) }}</p>

                            <div class="d-flex justify-content-between">
                                <a class="btn btn-primary" href="{{ route('jobs.show', $job->id) }}">Read more →</a>
                                @if (auth()->user()->role_id == 1)
                                    <button type="button" class="btn btn-primary position-relative">
                                        Propositions
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle d-flex justify-content-center align-items-center"
                                            style="font-size: 10px; width: 20px; height: 20px; margin: auto; top: 0; right: 0; bottom: 0; left: 0; text-align: center; line-height: 1;">
                                            {{ $job->propositions->count() }}
                                        </span>
                                    </button>
                                @endif

                            </div>


                        </div>

                    </div>
                @endforeach
            </div>
        </div>


    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
@endsection
