<form action="{{ route('avis.store', $profil->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="contenu"></label>
        <textarea class="form-control @error('contenu') is-invalid  @enderror" name="contenu" placeholder="Votre Avis"
            id="" rows="5"></textarea>
        @error('contenu')
            <div class="invalid-feedback">{{ $errors->first('contenu') }}</div>
        @enderror
    </div>
    </div>
    <button type="submit" class="btn btn-primary">OK</button>
</form>
