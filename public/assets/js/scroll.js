const headerEL = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
  if (window.scrollY > 75) {
    headerEL.classList.add("navbar-scrolled");
  } else {
    headerEL.classList.remove("navbar-scrolled");
  }
});
