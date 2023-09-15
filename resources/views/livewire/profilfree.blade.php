<div>

    <div class="fullscreen">
        @if ($step == 1)
            <h3 id="etapelive">Etape 1</h3>
        @elseif($step == 2)
            <h3 id="etapelive">Etape 2</h3>
        @elseif($step == 3)
            <h3 id="etapelive">Etape 3</h3>
        @endif
        <div class="center-div-free" style="display: flex; flex-direction: row;">
            <div class="multibox-blur">
                <div style="width: 80%;">
                    @if ($step == 1)


                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" wire:model="nom"
                                style="margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">
                            @error('nom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input type="text" class="form-control" id="prenom" wire:model="prenom"
                                style="margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">
                            @error('prenom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="date_nais">Date de naissance</label>
                            <input type="date" class="form-control" id="date_nais" wire:model="date_nais"
                                style="margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button style="align-self: flex-end;" wire:click="submitStep1">Suivant</button>
                        </div>
                    @elseif($step == 2)
                        <div class="form-group">
                            <label for="contact">Numéro de téléphone</label>
                            <input type="tel" class="form-control" id="contact" wire:model="contact"
                                style="margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">
                            @error('contact')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="compcat_id">Catégorie</label>
                            <select wire:model="compcat_id"
                                style="margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">
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
                            <select wire:model="competence_id"
                                style="margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">
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
                            <button style="align-self: flex-end;" wire:click="submitStep2">Suivant</button>
                            <button class="btn btn-secondary" wire:click="back">Retour</button>
                        </div>
                    @elseif($step == 3)
                        <div class="form-group">
                            <label for="localite_id">Localité</label>
                            <select class="form-control" id="localite_id" name="localite_id" wire:model="localite_id"
                                required
                                style="margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">
                                <option value="">Sélectionner Votre Zone</option>
                                @foreach ($localites as $localite)
                                    <option value="{{ $localite->id }}">{{ $localite->nom_loc }},
                                        {{ $localite->nom_ville }},
                                        {{ $localite->nom_dep }}
                                    </option>
                                @endforeach
                            </select>
                            @error('localite_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" wire:model="description"
                                style="margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;"></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if ($step == 3)
                            <button style="align-self: flex-end;" wire:click="submitStep3">Enregistrer</button>
                        @endif

                        <button class="btn btn-secondary" wire:click="back">Retour</button>
                    @endif

                </div>

            </div>

        </div>
    </div>
    <script>
        const etape = document.getElementById("etapelive");
        const texte = etape.innerHTML;
        etape.innerHTML = "";
        let i = 0;

        function afficherLettre() {
            if (i < texte.length) {
                etape.innerHTML += texte.charAt(i);
                i++;
                setTimeout(afficherLettre, 125);
            }
        }

        setTimeout(afficherLettre, 125);
    </script>
</div>
