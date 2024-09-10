const navigators = document.querySelectorAll(".navigators .navigator");

navigators.forEach((navigator) => {
  navigator.addEventListener("click", () => {
    navigators.forEach((nav) => {
      nav.classList.remove("active");
    });
    navigator.classList.add("active");
  });
});

const menuButton = document.querySelector(".menu");
const menuContent = document.querySelector(".nav-box");
menuButton.addEventListener("click", () =>{
    menuContent.style.display = menuContent.style.display === "block" ? "none" : "block";
    console.log(menuContent.style.display);
})