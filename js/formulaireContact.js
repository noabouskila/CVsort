$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault(); // Empêche le rafraîchissement de la page lors de la soumission du formulaire

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'), // URL du script PHP de traitement du formulaire
            data: $(this).serialize(), // Sérialise les données du formulaire
            dataType: 'json', // Attend une réponse JSON du serveur
            success: function(response) {
                // Met à jour le message de confirmation sans rafraîchir la page
                if (response.success) {
                    $('#confirmation-message').text(response.message);
                    // Réinitialise le formulaire après succès
                    $('form')[0].reset();
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                // Gère les erreurs éventuelles
                alert('Une erreur s\'est produite.');
            }
        });
    });
});


