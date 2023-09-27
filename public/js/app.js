// var

const toggle = document.querySelector("#toggle");
const menuMobile = document.querySelector("#menuMobile");
const name = document.querySelector("#profile-name");
const logout = document.querySelector("#btn-logout");

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

window.onload = () => {
    logout.classList.toggle("hidden");
};
name.addEventListener("click", () => {
    logout.classList.toggle("hidden");
});
