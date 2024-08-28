// ***** FADEIN DES TITRES ***** // utilise Intersection Observer
document.addEventListener("DOMContentLoaded", function(){
    const titleElements = this.querySelectorAll('.titleFade')     // Variable correspondant au titre
    function titleFading(entries,observer){                       // Fonction qui repère la variable et ajoute la classe qui permet le FadeIn
        entries.forEach(function(entry){                          // Pour chaques titres
            if(entry.isIntersecting && window.innerWidth > 780){  // Si ils sont visible et que la fenêtre est superieur a 780px
                entry.target.classList.add('animated');           // on leur rajoute la classe animated
                observer.unobserve(entry.target)                  // puis on arrête de les observer pour que les parametres ne se rejoue pas
            }
        })
    }
    const titleObserver = new IntersectionObserver(titleFading,{   // Si on voit l'élement à 50% on joue la fonction qui ajoute la classe
        threshold:0.5                                              // est cela créer l'animation
    });
    titleElements.forEach(function(element){           // Pour finir, pour chaque elements
        titleObserver.observe(element)                 // Nous les observons pour reproduire l'action du dessus sur chacun d'eux
        })
})
// ***** FIN FADEIN DES TITRES ***** //

// ***** SWIPPER JS POUR LA SECTIONS "PERSONNAGES" ***** //
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: false,
        slidesPerView: 3,
        spaceBetween: 100,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 80,
            modifier: 1,
            slideShadows: false,
        },
        loop: true,
        autoplay: {
            delay: 2000,
          },
    });
});

// ***** FIN SWIPPER JS POUR LA SECTIONS "PERSONNAGES" ***** //


// ***** MENU BURGER / NAVIGATION *****/
document.addEventListener("DOMContentLoaded", function() { 
    const menu = document.querySelector('.menu-burger');            // On cible le burger-menu
    const line = document.querySelectorAll('.line');                // les balise span contenant les lignes
    const burgerMenu = document.querySelector('.burger-open-menu'); // la page du menu ouvert.
    const linkBurger = document.querySelectorAll('.nav-items');     // et on cible les liens de ce menu
    const nav = document.querySelector('.main-navigation')          // *ajout* cible la balise nav
    
    // fonction pour afficher ou non le menu //
    function showOrNotBurgerMenu() {
        line.forEach(n => n.classList.toggle('animated'));      // les span obtienne la class animated qui permet de jouer leur animation
        menu.classList.toggle('active');                        // le menu obtient la class active / si on reclique ils les perdent                              
        burgerMenu.classList.toggle('show');                    // et le burger mebu obtient la classe qui le fait apparaître
    }

    menu.addEventListener('click', showOrNotBurgerMenu);                        // Si on clic sur le menu on joue la fonction
    linkBurger.forEach(r => r.addEventListener('click', showOrNotBurgerMenu))   // et si on clic sur les liens on jouent la fonction                    
    linkBurger.forEach(r => r.addEventListener('click', () => {        // ** pour pouvoir enlever la class toogle au clic
        nav.classList.remove('toggled')
    }))
})
