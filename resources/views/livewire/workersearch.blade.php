<div class="search-worker">
    <div class="container">
        <h3>Rechecher...</h3>
        <div class="search-form">
            <div class="search-by-category">
                <label for="category">Catégorie :</label>
                <select id="category" class="form-control" wire:model="selectedCategory">
                    <option value="">cliquez ici</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="search-by-category">
                <label for="category">Compétences :</label>
                <select id="category" class="form-control" wire:model="selectedCompetence">
                    <option value="">Cliquez ici</option>
                    @foreach ($competences as $competence)
                        <option value="{{ $competence->name }}">{{ $competence->name }}</option>
                    @endforeach
                </select>
            </div>
         
        </div>
        <div class="search-results">
            @if (count($users) > 0)
                <ul class="list-group">
                    @foreach ($users as $user)
                        <li class="list-group-item">{{ $user->nom }} {{ $user->prenom }} ({{ $user->competence->name }})</li>
                    @endforeach
                </ul>
            @else
                <p>Aucun utilisateur trouvé.</p>
            @endif
        </div>
    </div>
</div>
