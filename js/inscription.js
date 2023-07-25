  // Ajout du code JavaScript pour soumettre le formulaire via AJAX
  $(document).ready(function () {
    $('form').submit(function (e) {
        e.preventDefault(); // Empêche le rechargement de la page lors de la soumission du formulaire

        // Envoyer les données via AJAX
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {

                $('#confirmation-inscription').html(response.message);
                // Réinitialise le formulaire après succès
                $('form')[0].reset();
            },
            error: function () {
                // Gère les erreurs éventuelles
                $("#confirmation-inscription").text("Une erreur s'est produite.");
            }
        });
    });
});
