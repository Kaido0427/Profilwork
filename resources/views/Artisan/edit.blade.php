@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mettre à jour le profil</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('artisan.update',$profil->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror"
                                    name="nom" value="{{ old('nom', $profil->nom) }}" required autocomplete="nom"
                                    autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input id="prenom" type="text"
                                    class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                    value="{{ old('prenom', $profil->prenom) }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="date_nais">Date de naissance</label>
                                <input id="date_nais" type="date"
                                    class="form-control @error('date_nais') is-invalid @enderror" name="date_nais"
                                    value="{{ old('date_nais', $profil->date_nais) }}" required autocomplete="date_nais"
                                    autofocus>

                                @error('date_nais')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                                <label for="contact" class="col-md-4 control-label">Numéro de téléphone</label>

                                <div class="col-md-6">
                                    <input id="contact" type="tel" class="form-control" name="contact"
                                        value="{{ old('contact', $profil->contact) }}" required>

                                    @if ($errors->has('contact'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                           

                
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" wire:model="description">{{$profil->description}}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">mettre à jour mon profil</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
