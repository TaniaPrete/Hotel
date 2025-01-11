import './bootstrap';
import 'bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    if (!hamburger || !navLinks) {
        console.error('Elemento hamburger o nav-links non trovato.');
        return;
    }

    console.log('JavaScript caricato correttamente');
    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        console.log('Menu hamburger aperto');
    });
});

// Per lo swiper
const swiper = new Swiper('.swiper-container', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1,
    spaceBetween: 10,
});
