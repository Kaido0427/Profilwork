@extends('layouts.app')

@section('content')
<body>
    @livewire('workersearch')
@livewire('profil-liste',['profils' => $profils])

</body>

@endsection