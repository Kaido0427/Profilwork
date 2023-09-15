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
