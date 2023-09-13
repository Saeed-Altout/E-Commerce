// var

const toggle = document.querySelector("#toggle");
const menuMobile = document.querySelector("#menuMobile");

// // On Page Loaded
// window.onload = () => {
//     menuMobile.classList.add("translate-x-[100%]");
// };

// On Toggle Button Is Clicked
toggle.addEventListener("click", () => {
    console.log("clicked");
    console.log(menuMobile);
    menuMobile.classList.toggle("translate-x-[100%]");
});
