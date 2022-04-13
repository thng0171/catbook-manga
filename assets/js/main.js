// Login
const userDropdown = document.querySelector('#user-drop');
const userButtom = document.querySelector('#user-button');

userButtom.addEventListener('click', () => {
    userDropdown.classList.toggle('invisible')
});
//Menu
const menu = document.querySelector("#menu");
const menuButton = document.querySelector("#menu-button");

menuButton.addEventListener("click", () => {
    menu.classList.toggle("invisible");
});



// let defaultTransform = 0;

// function goNext() {
//     defaultTransform = defaultTransform - 398;
//     var slider = document.getElementById("slider");
//     if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7)
//         defaultTransform = 0;
//     slider.style.transform = "translateX(" + defaultTransform + "px)";
// }
// next.addEventListener("click", goNext);

// function goPrev() {
//     var slider = document.getElementById("slider");
//     if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
//     else defaultTransform = defaultTransform + 398;
//     slider.style.transform = "translateX(" + defaultTransform + "px)";
// }
// prev.addEventListener("click", goPrev);