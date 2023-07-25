<?php
session_start();

// $_SESSION['utilisateur_id']; 
// $_SESSION['inscription_complete'];

// VERIFIER SI LUTILISATEUR EST CONNECTE
// if (!isset($_SESSION['utilisateur_id'])) {
//     $response = [
//         'status' => 'error',
//         'message' => 'Vous devez d\'abord vous connecter.'
//     ];
//     echo json_encode($response);
//     exit;
// }

// if (!isset($_SESSION['inscription_complete']) || !$_SESSION['inscription_complete']) {
//     $response = [
//         'status' => 'error',
//         'message' => 'Vous devez d\'abord terminer votre inscription.'
//     ];
//     echo json_encode($response);
//     exit;
// }




// STRIPE
require_once 'vendor/autoload.php';
require_once 'secretKeyStripe.php';

\Stripe\Stripe::setApiKey($stripeSecretKey);
\Stripe\Stripe::setApiVersion('2022-11-15');

function createCheckoutSession($priceId, $successUrl, $cancelUrl)
{
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price' => $priceId,
            'quantity' => 1
        ]],
        'mode' => 'subscription',
        'success_url' => $successUrl,
        'cancel_url' => $cancelUrl,
        'billing_address_collection' => 'required',
        'shipping_address_collection' => ['allowed_countries' => ['FR']]
        // a ajouter sil le faut metadata et customer
    ]);

    return $session;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $priceId = $_POST['priceId'];
    $successUrl = 'http://localhost/cvSortLivrable/successPayement.php';
    $cancelUrl = 'http://localhost/cvSortLivrable/cancelPayement.php';

    $session = createCheckoutSession($priceId, $successUrl, $cancelUrl);

    header('Content-Type: application/json');
    header("HTTP/1.1 303 See Other");
    header("Location: " . $session->url);
  
    echo json_encode(['id' => $session->id]);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <style>
        body {
            background: linear-gradient(to right, #34E1DF, #0876D9);
            overflow-x: hidden;
        }
    </style>
</head>
<body>
<div>
    <?php include "header.php"; ?>
</div>

<main>
    <div id="tarifications" class=" py-5">

        <h1 class="fs- fw-semibold text-center mb-5 text-white">Souscrire au logiciel CvSort</h1> 

        <div class="d-flex flex-column justify-content-center align-items-center h-75 text-center bg-white col-6 rounded shadow-lg m-auto py-3">
            <h3>Prix de l'abbonnement CvSort : </h3>
            <h2>30 € / an </h2>
            <h4 class="m-2">Le service CvSort comprenant: </h4>
            <ul class="lh-lg fst-italic  py-4">
                <li>Tri des CV par mots-clés</li>
                <li>Affichage conditionné de contenu</li>
                <li>Capacité jusqu'a 500 cv</li>
                <li>Accès pendant 1 an renouvlable</li>
            </ul>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <script src="https://js.stripe.com/v3/"></script>
                    <input type="hidden" name="priceId" value="price_1NUs43Gn0mgpWdiDkByuxHTg" />
                  
                    <?php
                        if(!isset($_SESSION['utilisateur_id'])){
                            echo "<p class='text-danger'>Vous devez d'abord vous <a class='text-danger' href='pageConnexion.php'>connecter</a> / <a class='text-danger' href='pageInscription.php'>inscrire</a></p>
                            <button id='checkout-button' class='border-0 px-4 py-2 rounded shadow-lg fs-5  text-white btn btn-secondary' disabled>Payer &gt;&gt;</button>
                            ";
                        }
                        else if (!isset($_SESSION['inscription_complete']) || !$_SESSION['inscription_complete']){
                            echo "<p class='text-danger'>Vous devez d\'abord terminer votre</p>
                            <button id='checkout-button' class='border-0 px-4 py-2 rounded shadow-lg fs-5  text-white btn btn-secondary'  disabled>Payer &gt;&gt;</button>";
                        }
                        else{
                            echo "<button id='checkout-button' class='border-0 px-4 py-2 rounded shadow-lg fs-5  text-white bg-primary'>Payer &gt;&gt;</button>";
                        }
                       
                    ?>
                </form>
        </div>
    
    </div>
</main>

<footer id="footer" class="bg-white">
			<div class="d-flex flex-column flex-md-row justify-content-around w-90 m-auto  py-5 px-5" >
				<ul class="list-unstyled">
					<li><img src="img/logo.png" alt="logo cvSort" class="w-25 mb-3 mb-md-0"></li>
					<li> <a href="#" class="text-decoration-none text-black"> Mentions légales </a> </li>
					<li> <a href="#" class="text-decoration-none text-black"> Politique de confidentialité </a> </li>
					<li> <a href="#" class="text-decoration-none text-black"> Politique des Cookies </a> </li>
				</ul>
				
				<ul class="list-unstyled mt-3 mt-md-0">
					<li><h5 class="text-primary">CVSORT COMPANY</h5></li>
					<li class="mb-3">92 Quai de la Loire, 75019 Paris</li>

					<li> <h6 class="text-primary">Adresse email</h6></li>
					<li class="mb-3">
						<a href="mailto:contact@cvsort.com" class="text-decoration-none text-black" >contact@cvsort.com
						</a>
					</li>

					<li><h6 class="text-primary">Téléphone </h6></li>
					<li>00 00 00 00 00</li>
				</ul>
			</div>
			
		</footer>


<script>
    var stripe = Stripe('pk_test_51ISsN8Gn0mgpWdiDdJC7WUo8FN04V4fV8YIpFjf4eGrkn1CdMubjUcnJ2Yifn4t4xiIR7ERTvd4Y5MZr95xJJjVB003aCFxdJo');
    var checkoutButton = document.getElementById('checkout-button');

    checkoutButton.addEventListener('click', function() {
       
        fetch(window.location.href, {
            method: 'POST'
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(session) {
            return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(function(result) {
            if (result.error) {
                // Gérer les erreurs de redirection
                console.error(result.error);
            }
        })
        .catch(function(error) {
            console.error('Erreur:', error);
        });
    });

</script>


<script src="js/header.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>



