@section('content')
<div class="card">

    <div class="card-body">
      
        <div class="flex items-center justify-between">
            {{ $prop->text_mot }}
            {{ $prop->prix }}
        </div>
        
        <div class="d-flex flex-row-reverse">
            @if (auth()->user()->id == 2)
                <form action="{{ route('propositions.destroy', $prop->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <a href="{{ route('propositions.edit', $prop->id) }}" class="btn btn-secondary">Modifier</a>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>

        </div>
    @else
        <div class="d-flex flex-row-reverse">
            <a href="#" class="btn btn-primary ">Valider la proposition</a>
        </div>
        @endif

    </div>
</div><br>
@endsection