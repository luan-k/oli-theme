const state = {};
const carouselItems = document.querySelectorAll(".wkode-carousel__item");
const elems = Array.from(carouselItems);

carouselItems.forEach((item) => {
  item.addEventListener("click", function (event) {
    var newActive = this;
    var isItem = newActive.closest(".wkode-carousel__item");

    if (
      !isItem ||
      newActive.classList.contains("wkode-carousel__item_active")
    ) {
      return;
    }

    update(newActive);
  });
});

const update = function (newActive) {
  const newActivePos = newActive.dataset.pos;

  const current = elems.find((elem) => elem.dataset.pos == 0);
  const prev = elems.find((elem) => elem.dataset.pos == -1);
  const next = elems.find((elem) => elem.dataset.pos == 1);
  const first = elems.find((elem) => elem.dataset.pos == -2);
  const last = elems.find((elem) => elem.dataset.pos == 2);

  current.classList.remove("wkode-carousel__item_active");

  [current, prev, next, first, last].forEach((item) => {
    var itemPos = item.dataset.pos;

    item.dataset.pos = getPos(itemPos, newActivePos);
  });
};

const getPos = function (current, active) {
  const diff = current - active;

  if (Math.abs(current - active) > 2) {
    return -current;
  }

  return diff;
};
