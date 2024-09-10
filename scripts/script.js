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

// Initial state
menuContent.style.display = "none";
menuContent.style.transition = "max-height 0.5s ease-out";
menuContent.style.overflow = "hidden";
menuContent.style.maxHeight = "0";

menuButton.addEventListener("click", () => {
  if (menuContent.style.maxHeight === "0px") {
    menuContent.style.display = "block";
    menuContent.style.maxHeight = menuContent.scrollHeight + "px";
  } else {
    menuContent.style.maxHeight = "0";
    setTimeout(() => {
      menuContent.style.display = "none";
    }, 500); // Match the transition duration
  }
  console.log(menuContent.style.display);
});