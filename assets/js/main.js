//Hide navbar/navbutton on scroll
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
    // document.getElementById("navbtn").style.bottom = "0";
    
  } else {
    document.getElementById("navbar").style.top = "-64px";
    // document.getElementById("navbtn").style.bottom = "-64px";
  }
  prevScrollpos = currentScrollPos;
}

//Show/hide navbar on click
function openSidebar() {
    document.querySelector('.sidebar').classList.toggle('-left-80');
    document.querySelector('.overlay').classList.toggle('hidden');    
  }

// scroll to top button
var scrollToTopBtn = document.getElementById("scrollToTopBtn");
    var rootElement = document.documentElement;

    function scrollToTop() {
      // Scroll to top logic
      rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    }
    scrollToTopBtn.addEventListener("click", scrollToTop);

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
