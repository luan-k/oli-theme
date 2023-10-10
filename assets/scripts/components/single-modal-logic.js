// Function to toggle a modal and body classes
function toggleModal(modalId, openBtnId) {
  let modal = document.getElementById(modalId);
  let openModalBtn = document.getElementById(openBtnId);

  if (modal && openModalBtn) {
    function showModal() {
      modal.classList.add("modal-active");
      document.body.classList.add("modal-open");
    }

    function hideModal() {
      modal.classList.remove("modal-active");
      document.body.classList.remove("modal-open");
    }

    openModalBtn.addEventListener("click", function (event) {
      event.preventDefault();
      showModal();
    });

    let closeBtn = modal.querySelector(".close");
    if (closeBtn) {
      closeBtn.addEventListener("click", function () {
        hideModal();
      });
    }

    window.addEventListener("click", function (event) {
      if (event.target === modal) {
        hideModal();
      }
    });

    document.body.addEventListener("click", function (event) {
      if (event.target !== openModalBtn && !modal.contains(event.target)) {
        hideModal();
      }
    });
  }
}

// Initialize modals
toggleModal("myModal", "openModalBtn");
toggleModal("myModal2", "openModalBtn2");
// Add more modals as needed
