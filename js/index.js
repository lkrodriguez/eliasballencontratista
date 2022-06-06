const navHamburguer = document.querySelector(".navbar__button-hamburger");
const navUl = document.querySelector(".nav-ul");

navHamburguer.addEventListener("click", () => {
    navUl.classList.toggle("nav_visible");
} )



