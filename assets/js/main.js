// user dropdowm
// const userDropdown = document.querySelector('#user-drop');
// const userButtom = document.querySelector('#user-button');

// userButtom.addEventListener('click', () => {
//     userDropdown.classList.toggle('invisible')
// });
// //===Menu===
// const menu = document.querySelector("#mobile-menu-3");
// const menuButton = document.querySelector("#menu-button");

// menuButton.addEventListener("click", () => {
//     menu.classList.toggle("invisible");
// });

// //===Login Modal===
// //set the modal menu element
// const Login = document.getElementById('login-modal');

// // options with default values
// const options = {
//   placement: 'bottom-right',
//   backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
//   onHide: () => {
//       console.log('modal is hidden');
//   },
//   onShow: () => {
//       console.log('modal is shown');
//       loginModal.hide()
//   },
//   onToggle: () => {
//       console.log('modal has been toggled');

//   }
// };
// const loginModal = new Modal(Login, option);

// ====DARK MODE TOGGLE ====

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
