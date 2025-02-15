console.log("hello2");

document.addEventListener("DOMContentLoaded", function () {
  /*----- OFFSET SMARTPHONE -----*/
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

  /*----- MENU SEARCH -----*/
  const menuLoupe = document.querySelector(".menu_loupe");
  const menuSearch = document.querySelector(".menu_search");
  const menuSearchClose = document.querySelector(".menu_search_close");

  // Fonction pour afficher le menu_search
  function showMenuSearch() {
    if (menuSearch) {
      menuSearch.style.display = "flex";
    }
  }

  // Fonction pour cacher le menu_search
  function hideMenuSearch() {
    if (menuSearch) {
      menuSearch.style.display = "none";
    }
  }

  // Ajoute les événements de clic
  if (menuLoupe) {
    menuLoupe.addEventListener("click", showMenuSearch);
  }
  if (menuSearchClose) {
    menuSearchClose.addEventListener("click", hideMenuSearch);
  }
});

function updateSearch(searchValue) {
  console.log(searchValue);
  const searchContainer = document.querySelectorAll(".search-container > a");
  for (item of searchContainer) {
    const title = item.querySelector(".item_title").innerText;
    const auteur = item.querySelector(".item_designer").innerText;

    const searchMatchWithTitle = title
      .toLowerCase()
      .includes(searchValue.toLowerCase());
    const searchMatchWithAuteur = auteur
      .toLowerCase()
      .includes(searchValue.toLowerCase());

    if (searchMatchWithTitle || searchMatchWithAuteur) {
      item.classList.remove("hidden");
      item.classList.add("show");
    } else {
      item.classList.add("hidden");
      item.classList.remove("show");
    }

    //console.log(title, auteur)
    console.log(auteur);
  }
}
