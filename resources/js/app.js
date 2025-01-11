import './bootstrap';
import 'bootstrap';


document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    console.log("JavaScript caricato correttamente"); // Questo ci aiuterà a capire se il JS è correttamente caricato
    console.log("Valore di hamburger:", hamburger);
    console.log("Valore di navLinks:", navLinks);


    hamburger.addEventListener('click', () => {
        console.log("Hamburger cliccato");
        navLinks.classList.toggle('active');
    });
});

const swiper = new Swiper('.swiper-container', {
    loop: true, // Abilita lo scorrimento infinito
    pagination: {
        el: '.swiper-pagination',
        clickable: true, // Pallini cliccabili
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1, // Un'immagine visibile alla volta
    spaceBetween: 10, // Spazio tra le slide
});


document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
            navLinks.classList.toggle('active');
        }
    });
});
