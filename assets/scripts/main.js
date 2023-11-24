import "../styles/main.scss";
import "./base/scroll-entrance";
import "./components/counter";
import "./components/cards-slider";
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

window.addEventListener("scroll", function () {
  var scrollPosition = window.scrollY || document.documentElement.scrollTop;

  var tag = document.getElementById("tag-black-friday");

  if (scrollPosition > 150) {
    tag.classList.add("tag-black-friday--top");
  } else {
    tag.classList.remove("tag-black-friday--top");
  }
});
// Function to initialize modal on page load
function initializeModalOnLoad(modalId) {
  // Get the modal element
  let modal = document.getElementById(modalId);

  if (modal) {
    // Function to toggle the modal and body classes
    function toggleModal() {
      modal.classList.toggle("modal-active");
      document.body.classList.toggle("modal-open");
    }

    // Event listener for clicks outside the modal to close it
    window.addEventListener("click", function (event) {
      if (event.target === modal) {
        toggleModal();
      }
    });

    // Event listener for clicks on the body to remove modal function
    document.body.addEventListener("click", function (event) {
      if (!modal.contains(event.target)) {
        modal.classList.remove("modal-active");
        document.body.classList.remove("modal-open");
      }
    });

    // Toggle the modal when the page finishes loading
    window.addEventListener("load", toggleModal);

    // Event listener for the link to close the modal
    let closeLink = modal.querySelector(".link-close");
    if (closeLink) {
      closeLink.addEventListener("click", function (event) {
        //event.preventDefault(); // Prevent the default link behavior
        toggleModal();
      });
    }
  }
}

// Wait for the DOM to be ready
document.addEventListener("DOMContentLoaded", function () {
  // Initialize modal on page load
  initializeModalOnLoad("blackFridayOpen");
});
