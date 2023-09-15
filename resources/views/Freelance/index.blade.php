@extends('layouts.app')

@section('content')
<body>
    @livewire('workersearch')
@livewire('profilfreelist',['profils' => $profils])

</body>

@endsection