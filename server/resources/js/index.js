const hero = document.getElementById("home");
const navbar = document.getElementById("header");
const nav = document.getElementById("navbar");
const menuBtn = document.getElementById("menu");
const navbarLogo = document.getElementById("navbar-logo");
const navLinks = document.querySelectorAll(".nav-link");
const navIcons = document.querySelectorAll(".header .icons i");
const navHeight = navbar.getBoundingClientRect().height;

let intersecting = true;

let curr = document.querySelectorAll(".currency");

function colorNavbar() {
    navbar.classList.add("header-colored");
    navbarLogo.style.visibility = "visible";
    navLinks.forEach((el) => el.classList.remove("white"));
    navIcons.forEach((el) => el.classList.remove("white"));
}

function uncolorNavbar() {
    navbarLogo.style.visibility = "hidden";
    navbar.classList.remove("header-colored");
    navLinks.forEach((el) => el.classList.add("white"));
    navIcons.forEach((el) => el.classList.add("white"));
}

function toggleMenu() {
    if (nav.classList.contains("active")) {
        if (intersecting) uncolorNavbar();
    } else {
        colorNavbar();
    }
    menuBtn.classList.toggle("fa-times");
    nav.classList.toggle("active");
}

menuBtn.onclick = toggleMenu;

// window.onscroll = () => {
//     if (nav.classList.contains("active")) {
//         uncolorNavbar();
//     }
//     menuBtn.classList.remove("fa-times");
//     nav.classList.remove("active");
// };

// navbar visibility depending on scroll
function updateNavColor(entries) {
    const [entry] = entries;
    if (!entry.isIntersecting) {
        colorNavbar();
        intersecting = false;
    } else {
        if (!nav.classList.contains("active")) {
            uncolorNavbar();
        }
        intersecting = true;
    }
}

const headerObserver = new IntersectionObserver(updateNavColor, {
    root: null,
    threshold: 0,
    rootMargin: `-${navHeight}px`,
});

headerObserver.observe(hero);

// price formatting
for (let i = 0, len = curr.length; i < len; i++) {
    let num = Number(curr[i].innerHTML).toLocaleString("en");
    curr[i].innerHTML = num;
}
