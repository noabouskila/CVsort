$(document).ready(function() {
    // Gérer la soumission du formulaire via AJAX
    $('form').submit(function(event) {
      event.preventDefault(); // Empêche le formulaire de se soumettre normalement
  
      // Récupérer les valeurs des champs du formulaire
      var email = $('#email').val();
      var password = $('#password').val();
  
      // Envoyer les données du formulaire à connexion.php via AJAX
      $.ajax({
        type: 'POST',
        url: 'connexion.php',
        data: {
          email: email,
          password: password
        },
        dataType: 'text',

        success: function(response) {
            // Traiter la réponse du serveur
            var responseData = JSON.parse(response);
            if (responseData.success) {
                // Authentification réussie, rediriger vers la page d'accueil
                
                // Vérifier si le paramètre return_url est présent dans l'URL
                var urlParams = new URLSearchParams(window.location.search);
                if (urlParams.has('return_url')) {
                    // Récupérer la valeur de return_url depuis l'URL
                    var returnUrl = urlParams.get('return_url');
                    // Rediriger l'utilisateur vers l'URL de retour
                    window.location.replace(returnUrl);
                }else{
                    // Aucun paramètre return_url, rediriger vers la page d'accueil
                    window.location.replace("index.php");
                }
               
            } else {
                // Afficher le message d'erreur
                $('#erreur-connexion').text(responseData.message);
            }
        },
             
        error: function() {
          // En cas d'erreur lors de l'envoi de la requête AJAX
          $('#erreur-connexion').text('Erreur lors de l\'envoi de la requête.');
        }
      });
    });
  });
  