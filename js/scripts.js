var x = window.matchMedia("(max-width: 768px)")
/*-----------SIDENAV-----------*/
var isotipo = document.getElementsByClassName("isotipo-nav")[0];
var navplate = document.getElementsByClassName("nav-plate")[0];
var menunav = document.getElementsByClassName("menu")[0];
var burger = document.getElementsByClassName("hamburguesa")[0];
var closenav = document.getElementsByClassName("close-nav")[0];
var logoMt = document.getElementsByClassName("logo-mt")[0];
var flechaB = document.getElementsByClassName("flechaB")[0];
function openNav() {
    if (x.matches) {
        navplate.style.width = "12%";
      } else {
        navplate.style.width = "99%";
    }
    isotipo.style.opacity = "1";
    menunav.style.opacity = "1";
    menunav.style.marginRight = "0";
    navplate.style.pointerEvents = "all";
    burger.style.opacity = "0";
    burger.style.pointerEvents = "none";
    closenav.style.opacity = "1";
    closenav.style.pointerEvents = "all";
    logoMt.style.opacity = "1";
    logoMt.style.left = "8vw";
    flechaB.style.opacity = "1";
}
function closeNav() {
    isotipo.style.opacity = "0";
    menunav.style.opacity = "0";
    menunav.style.marginRight = "8vw";
    navplate.style.pointerEvents = "none";
    navplate.style.width = "0%";
    burger.style.opacity = "1";
    burger.style.pointerEvents = "all";
    closenav.style.opacity = "0";
    closenav.style.pointerEvents = "none";
    logoMt.style.left = "35vw";
    logoMt.style.opacity = "0";
    flechaB.style.opacity = "0";
}