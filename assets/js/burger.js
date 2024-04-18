document.addEventListener("DOMContentLoaded", function () {
  const burger = document.querySelector(".burger");
  const navMenu = document.querySelector(".navig-menu");

    burger.addEventListener("click", function () {
      console.log("Burger menu clicked");
    // Toggle the 'active' class on the burger
    burger.classList.toggle("active");

    // Toggle the 'open' class on the nav menu
    navMenu.classList.toggle("open");
  });
});
