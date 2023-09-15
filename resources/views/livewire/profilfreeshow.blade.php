<div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>{{ $profil->nom }} {{ $profil->prenom }}</h1>
        <p>Âge : {{ \Carbon\Carbon::createFromFormat('Y-m-d', $profil->date_nais)->diffInYears() }} ans</p>
        <p>Localité : {{ $profil->localite->nom_loc }}</p>
        <p>Compétence : {{ optional($profil->competence)->name }}</p>
      </div>
      <div class="col-md-6">
        <p>Description : {{ $profil->description }}</p>
      </div>
      <a href="{{ route('Freelance.edit',  $profil->id) }}" class="btn btn-primary">Editer mon profil</a>


      <br> <br>  

      @include('rate')

    </div>
  </div>
  