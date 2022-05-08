
//Show/hide navbar on click
function openSidebar() {
    document.querySelector('.sidebar').classList.toggle('-left-80');
    console.log('toggle sidebar');
    document.querySelector('.overlay').classList.toggle('hidden');    
    console.log('toggle overlay');
  }
// toggle searchbar
function toggleSearchbar() {
    document.querySelector('.searchbar').classList.toggle('hidden');
    console.log('toggle searchbar');
  }
// scroll to top button
var scrollToTopBtn = document.getElementById("scrollToTopBtn");
    var rootElement = document.documentElement;

    function scrollToTop() {
      // Scroll to top logic
      rootElement.scrollTo({
        top: 0,
        behavior: "smooth",
      });
      console.log('scroll to top');
    }
    scrollToTopBtn.addEventListener("click", scrollToTop);
 
