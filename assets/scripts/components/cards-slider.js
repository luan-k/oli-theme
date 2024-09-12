const state = {};
const carouselItems = document.querySelectorAll(".wkode-carousel__item");
const elems = Array.from(carouselItems);
const prevBtn = document.querySelector(".wkode-carousel__arrow_prev");
const nextBtn = document.querySelector(".wkode-carousel__arrow_next");

console.log("Initial carousel items:", elems);

prevBtn.addEventListener("click", function () {
  console.log("Prev button clicked");

  const current = elems.find((elem) => elem.dataset.pos == 0);
  const prev = elems.find((elem) => elem.dataset.pos == -1);

  console.log("Current item:", current);
  console.log("Previous item:", prev);

  if (!prev) {
    console.log("No previous item found.");
    return;
  }

  update(prev);
});

nextBtn.addEventListener("click", function () {
  console.log("Next button clicked");

  const current = elems.find((elem) => elem.dataset.pos == 0);
  const next = elems.find((elem) => elem.dataset.pos == 1);

  console.log("Current item:", current);
  console.log("Next item:", next);

  if (!next) {
    console.log("No next item found.");
    return;
  }

  update(next);
});

carouselItems.forEach((item) => {
  item.addEventListener("click", function (event) {
    var newActive = this;
    var isItem = newActive.closest(".wkode-carousel__item");

    console.log("Item clicked:", newActive);

    if (
      !isItem ||
      newActive.classList.contains("wkode-carousel__item_active")
    ) {
      console.log("Clicked item is already active or not a carousel item.");
      return;
    }

    update(newActive);
  });
});

const update = function (newActive) {
  console.log("Update called with new active item:", newActive);

  const newActivePos = parseInt(newActive.dataset.pos);
  console.log("New active position:", newActivePos);

  const totalItems = elems.length;

  const current = elems.find((elem) => elem.dataset.pos == 0);
  const prev =
    elems.find((elem) => elem.dataset.pos == -1) || elems[totalItems - 1];
  const next = elems.find((elem) => elem.dataset.pos == 1) || elems[0];

  console.log("Current item:", current);
  console.log("Previous item:", prev);
  console.log("Next item:", next);

  current.classList.remove("wkode-carousel__item_active");

  elems.forEach((item) => {
    var itemPos = parseInt(item.dataset.pos);

    // Update the positions by shifting them based on the new active position
    let newPos =
      ((itemPos - newActivePos + totalItems) % totalItems) -
      Math.floor(totalItems / 2);

    console.log(
      `Updating position for item with current position ${itemPos} to new position ${newPos}`
    );

    item.dataset.pos = newPos;

    if (newPos === 0) {
      item.classList.add("wkode-carousel__item_active");
    }
  });
};
