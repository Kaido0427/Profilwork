@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Proposition</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/home">Revenir à la mission</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @foreach ($mtv as $motv)
        <div class="">
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-bold text-green-800">{{ $motv->text_mot }}</h3>
                <h3 class="text-xl font-bold text-green-800">{{ $motv->prix }}</h3>
            </div>
            <div class="flex items-center justify-between">
               
            </div>
            <div class="flex items-center mt-2">
                <a href=""
                    class="ml-1 text-gray-800 font-semibold hover:text-green-800">Voir</a>
            </div>

        </div>
    @endforeach
@endsection