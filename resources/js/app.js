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