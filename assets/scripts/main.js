import "../styles/main.scss";
import "./base/scroll-entrance";
import "./components/counter";
// import "./components/cards-slider";
import "./components/testimonial";
import "./components/single-modal-logic";
/* import "./blocks/slider"; */

let hamburger = document.querySelector(".wkode-header__hamburger-wrapper");
let menu = document.querySelector("#navbarNavAltMarkup");
let menuWrapper = document.querySelector("header.wkode-header");

hamburger.addEventListener("click", function () {
  if (!menu.classList.contains("active-menu")) {
    menu.classList.add("active-menu");
    menuWrapper.classList.add("active-menu-wrapper");
  } else {
    menu.classList.remove("active-menu");
    menuWrapper.classList.remove("active-menu-wrapper");
  }
});

// JavaScript code
document.querySelector('a[href^="#"]').addEventListener("click", function (e) {
  e.preventDefault();

  document.querySelector(this.getAttribute("href")).scrollIntoView({
    behavior: "smooth",
  });
});
