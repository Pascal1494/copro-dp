const menuHamburger = document.querySelector(".burger");
const navLinks = document.querySelector(".nav-links");
const connect = document.querySelector(".connect");

menuHamburger.addEventListener("click", () => {
  navLinks.classList.toggle("burger-menu");
  connect.classList.toggle("burger-menu");
});

