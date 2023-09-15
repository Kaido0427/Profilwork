@extends('layouts.app')

@section('content')
<body>
    
@livewire('profilfreeshow',['id'=> $profil->id])

</body>

@endsection