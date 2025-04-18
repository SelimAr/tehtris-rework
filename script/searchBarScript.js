const searchWrapper = document.querySelector(".search_wrapper");
const searchIcon = document.querySelector(".search_icon");
const searchInput = document.querySelector(".search_input");

searchIcon.addEventListener("click", () => {
  searchWrapper.classList.toggle("active");
  if (searchWrapper.classList.contains("active")) {
    searchInput.focus();
  }
});

document.addEventListener("click", (e) => {
  if (!searchWrapper.contains(e.target)) {
    searchWrapper.classList.remove("active");
  }
});
