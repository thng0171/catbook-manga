// Login
const userDropdown = document.querySelector('#user-drop');
const userButtom = document.querySelector('#user-button');

userButtom.addEventListener('click',()=>{
    userDropdown.classList.toggle('invisible')
});
//Menu
const menu = document.querySelector("#menu");
const menuButton = document.querySelector("#menu-button");

menuButton.addEventListener("click",()=>{
    menu.classList.toggle("invisible");
});
