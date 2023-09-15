@extends('layouts.app')

@section('content')
<body>
    
@livewire('profil-show',['id'=> $profil->id])

</body>

@endsection