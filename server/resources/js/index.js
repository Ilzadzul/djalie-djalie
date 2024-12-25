const hero = document.getElementById("home");
const nav = document.getElementById("header");
const navbarLogo = document.getElementById("navbar-logo");
const navLinks = document.querySelectorAll(".nav-link");
const navIcons = document.querySelectorAll(".header .icons i");
const navHeight = nav.getBoundingClientRect().height;

let curr = document.querySelectorAll(".currency");

// navbar visibility depending on scroll
function updateNavColor(entries) {
    const [entry] = entries;
    if (!entry.isIntersecting) {
        nav.classList.add("header-colored");
        navbarLogo.style.visibility = "visible";
        navLinks.forEach(el => el.classList.remove('white'));
        navIcons.forEach(el => el.classList.remove('white'));
    } else {
        navbarLogo.style.visibility = "hidden";
        nav.classList.remove("header-colored");
        navLinks.forEach(el => el.classList.add('white'));
        navIcons.forEach(el => el.classList.add('white'));
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
    let num = Number(curr[i].innerHTML)
        .toLocaleString('en');
    curr[i].innerHTML = num;
}