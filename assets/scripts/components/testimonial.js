const carousel = document.querySelector(".testimonial-carousel");
const wrapper = carousel.querySelector(".testimonial-wrapper");
const testimonials = carousel.querySelectorAll(".testimonial");
const prevBtn = carousel.querySelector(".prev");
const nextBtn = carousel.querySelector(".next");
let currentIndex = 0;
let step = calculateStep();
const viewportWidth = window.innerWidth;

function calculateStep() {
  if (viewportWidth > 1200) {
    return 25;
  } else if (viewportWidth > 768) {
    return 50;
  } else {
    return 25;
  }
}

if (viewportWidth > 1200) {
  nextBtn.addEventListener("click", () => {
    if (currentIndex < testimonials.length - 3) {
      currentIndex++;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    } else {
      currentIndex = 0;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    }
  });
} else if (viewportWidth > 768) {
  nextBtn.addEventListener("click", () => {
    if (currentIndex < testimonials.length - 2) {
      currentIndex++;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    } else {
      currentIndex = 0;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    }
  });
} else {
  nextBtn.addEventListener("click", () => {
    if (currentIndex < testimonials.length - 1) {
      currentIndex++;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    } else {
      currentIndex = 0;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    }
  });
}

prevBtn.addEventListener("click", () => {
  if (currentIndex > 0) {
    currentIndex--;
    wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
  } else {
    currentIndex = testimonials.length - 3;
    wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
  }
});

window.addEventListener("resize", () => {
  step = calculateStep();
});

setInterval(() => {
  if (viewportWidth > 1200) {
    if (currentIndex < testimonials.length - 3) {
      currentIndex++;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    } else {
      currentIndex = 0;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    }
  } else if (viewportWidth > 768) {
    if (currentIndex < testimonials.length - 2) {
      currentIndex++;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    } else {
      currentIndex = 0;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    }
  } else {
    if (currentIndex < testimonials.length - 1) {
      currentIndex++;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    } else {
      currentIndex = 0;
      wrapper.style.transform = `translateX(-${step * currentIndex}%)`;
    }
  }
}, 20000);
