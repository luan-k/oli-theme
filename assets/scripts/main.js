import "../styles/main.scss";
import "./components/counter";
import "./components/cards-slider";
import "./components/testimonial";
/* import "./blocks/slider"; */

let hamburger = document.querySelector(".wkode-header__hamburger-wrapper");
let menu = document.querySelector("#navbarNavAltMarkup");
let menuWrapper = document.querySelector("header.wkode-header");

console.log(hamburger);
hamburger.addEventListener("click", function () {
  if (!menu.classList.contains("active-menu")) {
    menu.classList.add("active-menu");
    menuWrapper.classList.add("active-menu-wrapper");
  } else {
    menu.classList.remove("active-menu");
    menuWrapper.classList.remove("active-menu-wrapper");
  }
});
