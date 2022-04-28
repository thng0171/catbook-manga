<script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            320: {
                slidesPerView: 1.2,
            },
            640: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1440: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            2560: {
                slidesPerView: 4.5,
                spaceBetween: 40,
            },
        }
    });
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-64px";
        }
        prevScrollpos = currentScrollPos;
    }
</script>