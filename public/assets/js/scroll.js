const headerEL = document.querySelector(".navbar");

const tabLinks = document.querySelectorAll(".navbar .nav-links ul li a");

window.addEventListener("scroll", () => {
  if (window.scrollY > 1) {
    headerEL.classList.add("navbar-scrolled");
    tabLinks.forEach((link) => {
      if (!link.classList.contains("active")) {
        link.classList.add("nav-font");
      }
    });
  } else {
    headerEL.classList.remove("navbar-scrolled");
    tabLinks.forEach((link) => {
      if (!link.classList.contains("active")) {
        link.classList.remove("nav-font");
      }
    });
  }
});
