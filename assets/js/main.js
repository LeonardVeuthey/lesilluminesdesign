console.log("hello")

/* MENU */
document.addEventListener("DOMContentLoaded", function () {
  const offsetElement = document.querySelector(".offset");
  const triggerButton = document.querySelector(".offset_trigger");
  const closeButton = document.querySelector(".nav_link.is-close");

  // Fonction pour afficher .offset en flex
  function showOffset() {
      if (offsetElement) {
          offsetElement.style.display = "flex";
      }
  }

  // Fonction pour cacher .offset
  function hideOffset() {
      if (offsetElement) {
          offsetElement.style.display = "none";
      }
  }

  // Ajout des événements
  if (triggerButton) {
      triggerButton.addEventListener("click", showOffset);
  }
  if (closeButton) {
      closeButton.addEventListener("click", hideOffset);
  }
});
