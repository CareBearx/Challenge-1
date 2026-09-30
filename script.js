const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})


/* Product read more modal */

document.addEventListener("click", function(e) {
  // Check if a modal trigger was clicked
  if (e.target.matches("[data-modal-id]")) {
    const modalId = e.target.getAttribute("data-modal-id");
    const modal = document.getElementById(modalId);

    if (modal) {
      modal.style.display = "block";
      console.log(`Opened modal: ${modalId}`);
    }
  }

  // Close modal when clicking close button
  if (e.target.matches(".close-btn")) {
    const modal = e.target.closest(".modal");
    if (modal) {
      modal.style.display = "none";
      console.log(`Closed modal: ${modal.id}`);
    }
  }

  // Close modal when clicking outside content
  if (e.target.classList.contains("modal")) {
    e.target.style.display = "none";
    console.log(`Closed modal by clicking outside: ${e.target.id}`);
  }
});