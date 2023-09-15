<div class="col-lg-3" style="margin-left: 40%">
    <div class="card">
        <img src="{{ $profil->user->avatar }}" alt="..." style="width: 100%">
        <div class="card-body">
            <h5 class="card-title">
                <h1>{{ $profil->nom }} {{ $profil->prenom }}</h1>
            </h5>
            <h3 class="card-title">
                <h3>{{ optional($profil->competence)->name }}</h3>
            </h3>

            <p class="card-text"> {{ $profil->description }}
            </p>
            <button class="btn" style="background-color: rgb(100, 203, 112);margin-left:35%"><svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>{{ $profil->contact }} </button>
        </div>
    </div>
    <div class="card-footer">
        @if ($profil->user->id == Auth()->user()->id)
            <a href="{{ route('artisan.edit', $profil->id) }}" class="btn col-lg-12"
                style="background-color: rgb(100, 203, 112)">Editer mon
                profil</a>
        @endif
        @if (Auth()->user()->role_id == !3)
            <form action="{{ route('recruter', $profil->id) }}" method="post">
                @csrf
                <button class="btn  col-lg-12" style="background-color: rgb(100, 203, 112)"
                    type="submit">Recruter</button>
            </form>
        @endif
    </div>
</div>
