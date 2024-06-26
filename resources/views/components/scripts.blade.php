<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>

<script>
    document.addEventListener('scroll', () => {
        const navbar = document.querySelector('.nav-bar');
        console.log(navbar);
        if (window.scrollY > 0) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    $(document).ready(function() {
        let autoplayTimeout = 1000;
        let loops = 2;
        $('.owl-carousel').owlCarousel({
            loop: true,
            autoplay:true,
            dots: true,
            margin: 10,
            nav: false,
            items: 1,
            autoplayTimeout: autoplayTimeout,
            smartSpeed: 800,
            mouseDrag: true,
            margin: 10,
            navigation: true,
            slideBy: 1,
            responsive: {
                0: {
                    items: 1
                }
            }
        });
    });
</script>
