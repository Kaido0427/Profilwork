@extends('layouts.app')

@section('content')


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


    <div style="text-align: center;">
        <header>
            <h1>PAYEMENT</h1>
        </header>
        @if (Auth()->user()->role_id == 1)
            <section>
                Pour Payer le freelance vous devez en prime abord les frais de notre site
            </section>
        @else
            <section>
                Pour créer un profil, vous devez payer un abonnement de 3 mois renouvelable.
                Le montant est de <strong>3000 XOF</strong> soit <strong>5 USD</strong>
            </section>
        @endif

        <div >
            <div >
                <div
                    style="width: 100%; padding: 20px; background-color: #f4eeee; display: flex; justify-content: center; align-items: center; ">
                    <div>

                        <form action="{{ route('paymentAdmin') }}" method="POST">
                            @csrf

                            @if (Auth()->user()->role_id ==1)
                            <div class="form-group">
                                <label for="amount">Montant :</label>
                                <input type="number" value="5000" name="amount" id="amount" class="form-control col-lg-8" required>
                            </div>
                            @else
                            <div class="form-group">
                                <label for="amount">Montant :</label>
                                <input type="number" value="3000" name="amount" id="amount" class="form-control col-lg-8" required>
                            </div>
                            @endif
                          

                            <button type="submit" class="btn btn-primary">Payer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>
        // Sélectionnez l'élément du message de succès
        var successMessage = document.getElementById('error-message');
    
        // Définissez le délai en millisecondes (par exemple, 5000 pour 5 secondes)
        var delay = 5000;
    
        // Masquez le message après le délai spécifié
        setTimeout(function() {
            errorMessage.style.display = 'none';
        }, delay);
    </script>
       <script>
        // Sélectionnez l'élément du message de succès
        var successMessage = document.getElementById('success-message');
    
        // Définissez le délai en millisecondes (par exemple, 5000 pour 5 secondes)
        var delay = 5000;
    
        // Masquez le message après le délai spécifié
        setTimeout(function() {
            successMessage.style.display = 'none';
        }, delay);
    </script>
@endsection
