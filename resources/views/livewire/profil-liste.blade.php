<div class="container py-5">
    <div class="row">
        @foreach ($profils as $profil)
            <div class="col-lg-4" style="border-radius: 5px;">
                <div class="text-center card-box">
                    <div class="member-card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto">
                            <img src="{{ $profil->user->avatar }}"
                                class="rounded-circle img-thumbnail bg-secondary custom-img" alt="profile-image">
                        </div>

                        <div class="">
                            <h4>{{ $profil->nom }} {{ $profil->prenom }}</h4>
                            <p class="text-muted">
                                <span>
                                    <a href="#" style="text-decoration: none;color:rgb(100, 203, 112);">{{ $profil->user->email }}</a>
                                </span>
                            </p>
                         </div>
                        <div>{{ $profil->contact }}</div>
                        <div>{{ $profil->competence->name }}</div>

                        <a type="button" href="{{ route('artisan.show', $profil->id) }}"
                            class="btn  mt-3 btn-rounded waves-effect w-md waves-light" style="background-color:rgb(100, 203, 112);">Details</a>


                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- end row -->



    <!-- end row -->
</div>
<!-- end container -->

<style>
    .custom-img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        object-position: center center;
        border-radius: 50%;
    }
</style>
