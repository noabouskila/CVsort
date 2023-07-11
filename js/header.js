
// Récupérez la référence de l'icône du burger menu
const burgerMenu = document.getElementById("burger-menu");

// // Récupérez la référence de l'icône du close menu
const closeMenu = document.getElementById("close-menu");

// Récupérez la référence de la liste de navigation
const navigation = document.getElementById("navigation");


// Ajoutez un gestionnaire d'événement pour le clic sur l'icône du burger menu
burgerMenu.addEventListener("click", function() {
    console.log('je clicke sur burger menu')
    // navigation.classList.toggle("show")
    navigation.classList.add('show');
    navigation.classList.add('fs-1');
    burgerMenu.style.display="none"
    closeMenu.style.display = "block"
});

// Ajoutez un gestionnaire d'événement pour le clic sur l'icône du close menu
closeMenu.addEventListener("click", function() {
    console.log('je clicke sur close menu')
    navigation.classList.remove("show");
    navigation.classList.remove('fs-1');
    burgerMenu.style.display="block"
    closeMenu.style.display = "none"
   
});




