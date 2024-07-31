"use strict";
const mobileMenu = document.getElementById("mobileMenu");
mobileMenu.addEventListener("click", () => {
  document.getElementById("mobileMenu").mobileMenu.style.display = "none";
});
const hideMenu = () => {
  // console.log(mobileMenu.style.display);
};

const showMenu = () => {
  document.getElementById("mobileMenu").mobileMenu.style.display = "block";
  // console.log(mobileMenu.style.display);
};

console.log("kmokmokm");
