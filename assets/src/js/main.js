import "../scss/main";

// header js

const nav = document.querySelector("nav");

window.addEventListener("scroll", newNav);

function newNav {
    if (window.scrollY > nav.offsetHeight + 150) {
        nav.classList.add('click')
    } else {
        nav.classList.remove('click')
    }
}
