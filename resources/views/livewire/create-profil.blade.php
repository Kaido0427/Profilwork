<div class="center-div">
    
    @if ($message = Session::get('success'))
    <div id="success-message" class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif



@if ($message = Session::get('error'))
    <div id="error-message" class="alert alert-danger alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif
    <div>
        @if ($step == 1)


            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" wire:model="nom">
                @error('nom')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" wire:model="prenom">
                @error('prenom')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="date_nais">Date de naissance</label>
                <input type="date" class="form-control" id="date_nais" wire:model="date_nais">
                @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button class="btn btn-primary" wire:click="submitStep1">Suivant</button>
            </div>
        @elseif($step == 2)
            @if (auth()->user()->role_id == 3)
                <div class="form-group">
                    <label for="contact">Numéro de téléphone</label>
                    <input type="tel" class="form-control" id="contact" wire:model="contact">
                    @error('contact')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            @endif


            <div>
                <label for="compcat_id">Catégorie</label>
                <select wire:model="compcat_id">
                    <option value="">Sélectionner une catégorie</option>
                    @foreach ($compcats as $compcat)
                        <option value="{{ $compcat->id }}">{{ $compcat->name }}</option>
                    @endforeach
                </select>
                @error('compcat_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="competence_id">Compétence</label>
                <select wire:model="competence_id">
                    <option value="">Sélectionner une compétence</option>
                    @foreach ($competences as $competence)
                        @if ($compcat_id == $competence->compcat_id)
                            <option value="{{ $competence->id }}">{{ $competence->name }}</option>
                        @endif
                    @endforeach
                </select>
                @error('competence_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group">
                <button class="btn btn-primary" wire:click="submitStep2">Suivant</button>
                <button class="btn btn-secondary" wire:click="back">Retour</button>
            </div>
        @elseif($step == 3)
            @if (auth()->user()->role_id == 3)
                <div class="form-group">
                    <label for="localite_id">Localité</label>
                    <select class="form-control" id="localite_id" name="localite_id" wire:model="localite_id" required>
                        <option value="">Sélectionner Votre Zone</option>
                        @foreach ($localites as $localite)
                            <option value="{{ $localite->id }}">{{ $localite->nom_loc }}
                            </option>
                        @endforeach
                    </select>
                    @error('localite_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            @endif

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" wire:model="description"></textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            @if ($step == 3)
                <button class="btn btn-primary" wire:click="submitStep3">Enregistrer</button>
            @endif

            <button class="btn btn-secondary" wire:click="back">Retour</button>
        @endif
    </div>
    <script>
        // Sélectionnez l'élément du message de succès
        var successMessage = document.getElementById('success-message');
        var successMessage = document.getElementById('error-message');
    
        // Définissez le délai en millisecondes (par exemple, 5000 pour 5 secondes)
        var delay = 5000;
    
        // Masquez le message après le délai spécifié
        setTimeout(function() {
            successMessage.style.display = 'none';
            errorMessage.style.display = 'none';
        }, delay);
    </script>
</div>
