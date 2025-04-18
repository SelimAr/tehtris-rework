export function initNavigation() {
  const menuToggle = document.getElementById("menu_toggle");
  const navPanel = document.getElementById("nav_panel");

  if (!menuToggle || !navPanel) {
    console.error("Menu elements not found");
    return;
  }

  menuToggle.addEventListener("click", () => {
    toggleMenu();
  });

  document.addEventListener("click", (event) => {
    const isClickInside =
      menuToggle.contains(event.target) || navPanel.contains(event.target);

    if (!isClickInside && menuToggle.classList.contains("active")) {
      toggleMenu();
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && menuToggle.classList.contains("active")) {
      toggleMenu();
    }
  });

  window.addEventListener(
    "resize",
    debounce(() => {
      if (window.innerWidth > 1024 && menuToggle.classList.contains("active")) {
        toggleMenu();
      }
    }, 250)
  );

  function toggleMenu() {
    menuToggle.classList.toggle("active");
    navPanel.classList.toggle("active");

    const isExpanded = menuToggle.classList.contains("active");
    menuToggle.setAttribute("aria_expanded", isExpanded);

    document.body.style.overflow = isExpanded ? "hidden" : "";
  }
}

function debounce(func, wait) {
  let timeout;

  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };

    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}
