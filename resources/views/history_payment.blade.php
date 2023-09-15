@extends('layouts.app')

@section('content')
    <style>
        #success-message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            opacity: 0;
            transition: opacity 1s ease-out;
        }

        #success-message.fade-out {
            opacity: 1;
        }

        /* Masquer le message après un certain délai */
        #success-message.fade-out::after {
            content: '';
            display: inline-block;
            height: 100%;
            animation: fadeOutAnimation 5s ease-out;
        }

        @keyframes fadeOutAnimation {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                display: none;
            }
        }
    </style>
    @if ($message = Session::get('success'))
        <div id="success-message" class="alert alert-success ">
            <div>
                <strong>{{ $message }}</strong>
            </div>
            
        </div>
        <script>
            // Récupérer l'élément de message
            var messageElement = document.getElementById('success-message');

            // Définir la durée d'affichage en millisecondes (par exemple, 3000 pour 5 secondes)
            var displayDuration = 3000;

            // Ajouter une classe pour l'effet de disparition
            messageElement.classList.add('fade-out');

            // Masquer le message après la durée spécifiée
            setTimeout(function() {
                messageElement.style.display = 'none';
            }, displayDuration);
        </script>
    @endif




    @if ($message = Session::get('error'))
        <div id="error-message" class="alert alert-danger alert-block"
            style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; opacity: 0;
    transition: opacity 1s ease-out;">
            <strong>{{ $message }}</strong>
        </div>
        <script>
            // Récupérer l'élément de message
            var messageElement = document.getElementById('error-message');

            // Définir la durée d'affichage en millisecondes (par exemple, 3000 pour 5 secondes)
            var displayDuration = 3000;

            // Ajouter une classe pour l'effet de disparition
            messageElement.classList.add('fade-out');

            // Masquer le message après la durée spécifiée
            setTimeout(function() {
                messageElement.style.display = 'none';
            }, displayDuration);
        </script>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Historique des paiements</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Référence</th>
                                        <th>Montant</th>
                                        <th>Date et heure</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $transaction->amount }} USD</td>
                                            <td>{{ $transaction->created_at }}</td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection
