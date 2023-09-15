<div>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav">
               <img src=" {{$jb->user->avatar}}" alt="" height="100" width="100" class="rounded-circle mx-5">
                <h4> Publication de <strong>{{ $jb->user->name }}</strong></h4>
                Posté il y {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $jb->created_at)->diffForHumans() }}

            </div>

            <div class="col-sm-9">
                <hr>
                <h2>{{ $jb->titre }}</h2>
                <p>{{ $jb->description }}</p>
                <br><br>

                <hr>
                
                @if (auth()->user()->role_id == 2)
                    <h4>Faire une proposition pour cette mission:</h4>
                    <form action="{{ route('propositions.store', $jb) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="text_mot">Lettre de Motivation:</label>
                            <textarea class="form-control @error('text_mot') is-invalid  @enderror" name="text_mot" id="" rows="5"></textarea>
                            @error('text_mot')
                                <div class="invalid-feedback">{{ $errors->first('text_error') }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cv">Uploader votre CV:</label>
                            <input type="file" class="form-control @error('cv') is-invalid  @enderror" name="cv">
                            @error('cv')
                                <div class="invalid-feedback">{{ $errors->first('cv') }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="prix">Faire une offre:</label>
                            @error('prix')
                                <div class="invalid-feedback">{{ $errors->first('text_error') }}</div>
                            @enderror
                            <input class="form-control @error('prix') is-invalid  @enderror" name="prix"
                                placeholder="offre$$">
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-primary">Soumettre ma proposition</button>
                    </form>
                    <br><br>
                    <hr>
                @else
                    <div></div>
                @endif

                @if ($jb->propositions->where('valid_status', 1)->isEmpty())
                    <p>
                    <h3>Dernieres Offres:</h3>
                    </p><br>
                    @forelse ($jb->propositions as $prop)
                        <div class="row">
                            <div class="col-sm-2 text-center">
                                <img src="{{$prop->user->avatar}}" class="rounded-circle" height="65" width="65" alt="Avatar">
                            </div>
                            <div class="col-sm-10">
                                <h4>{{ $prop->user->name }} <small>Editer le
                                        {{ $prop->created_at->format('d-M-Y ') }}</small>
                                </h4>
                                <p> {{ $prop->text_mot }}</p>
                                <p> {{ $prop->prix }}</p>
                                <br>
                                @if (Auth::user()->id == $prop->user_id)
                                    <div class="d-flex   pull-right">
                                        <a href="{{ route('propositions.edit', $prop) }}" style="text-decoration: none;"
                                            class="btn btn-warning">Modifier</a>
                                        <form method="post" action="{{ route('propositions.destroy', $prop) }}"
                                            id="destroy-prop-form">
                                            @method('DELETE')
                                            @csrf

                                            <button type="submit" class="btn btn-danger outline">supprimer</button>
                                        </form>
                                    </div>
                                @elseif(Auth::user()->id == $jb->user_id)
                                    <div class="pull-right">
                                        <form action="{{ route('confirm.prop', $prop->id) }}" method="post">
                                            @csrf
                                            <button class="btn btn-primary" type="submit">Valider la proposition</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <hr>
                    @empty

                        Aucune propositions pour l'instant!
                    @endforelse   
                @else
                    @forelse ($jb->propositions as $prop)
                        @if ($prop->valid_status)
                            <div class="row">
                                <div class="col-sm-2 text-center">
                                    <img src="{{$prop->user->avatar}}" class="rounded-circle" height="65" width="65"
                                        alt="Avatar">
                                </div>
                                <div class="col-sm-10">
                                    <h4>{{ $prop->user->name }} <small>Editer le
                                            {{ $prop->created_at->format('d-M-Y ') }}</small>
                                    </h4>
                                    <p> {{ $prop->text_mot }}</p>
                                    <p> {{ $prop->prix }}</p>
                                    <br>
                                    @if (Auth::user()->id == $prop->user_id)
                                        <div class="d-flex   pull-right">
                                            <a href="{{ route('propositions.edit', $prop) }}"
                                                style="text-decoration: none;" class="btn btn-warning">Modifier</a>
                                            <form method="post" action="{{ route('propositions.destroy', $prop) }}"
                                                id="destroy-prop-form">
                                                @method('DELETE')
                                                @csrf

                                                <button type="submit" class="btn btn-danger outline">supprimer</button>
                                            </form>
                                        </div>
                                    @elseif(Auth::user()->id == $jb->user_id)
                                        <span class="btn btn-success">Déjà validé</span>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @empty

                        Aucune propositions pour l'instant!
                    @endforelse
                @endif

            </div>
        </div>
    </div>

</div>
