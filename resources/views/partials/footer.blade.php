<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-widget">
                        <h4>Gyan Jyoti Vidya Niketan</h4>
                        <p>Providing quality education and nurturing future leaders since 1999.</p>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-widget">
                        <h4>Quick Links</h4>
                        <ul class="footer-links">
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#programs">Programs</a></li>
                            <li><a href="#campus">Campus</a></li>
                            <li><a href="#faculty">Faculty</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-widget">
                        <h4>Resources</h4>
                        <ul class="footer-links">
                            <li><a href="#">School Calendar</a></li>
                            <li><a href="#">Parent Portal</a></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Alumni</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-widget">
                        <h4>Contact Us</h4>
                        <ul class="footer-links">
                            <li><i class="bi bi-geo-alt me-2"></i> <b>GYAN JYOTI VIDYA NIKETAN</b>
                              W-21, Anupam Garden, Ignou Road, Saidulazab, New Delhi -110068</li>
                            <li><i class="bi bi-telephone me-2"></i> +91 9212747235</li>
                            <li><i class="bi bi-envelope me-2"></i> gyanjyotimail@rediffmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
            <p>
            &copy; 2024 Gyan Jyoti Vidya Niketan. All rights reserved. |
            Developed by <a href="https://akwebservice.in" target="_blank" style="color: #fff; text-decoration: underline;">AK Web Service</a>
            </p>
            </div>

        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Initialize Full Screen Hero Slider
        // Initialize Full Screen Hero Slider
        $('.hero-slider').owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            navText: ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
            responsive: {
                0: {
                    nav: false
                },
                768: {
                    nav: true
                }
            }
        });

        // Initialize Magnific Popup for Gallery
        $('.image-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-with-zoom',
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            },
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1],
                tCounter: '%curr% of %total%'
            },
            image: {
                titleSrc: function(item) {
                    return item.el.attr('title');
                }
            },
            callbacks: {
                open: function() {
                    $('body').css('overflow', 'hidden');
                },
                close: function() {
                    $('body').css('overflow', 'auto');
                }
            }
        });
        





        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active navigation link on scroll
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section');

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').slice(1) === current) {
                    link.classList.add('active');
                }
            });
        });

        // Counter animation for stats
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200;

        const countUp = (counter) => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(() => countUp(counter), 10);
            } else {
                counter.innerText = target;
                // Add appropriate symbols
                if (target === 25 || target === 1200 || target === 20) {
                    counter.innerText += '+';
                } else if (target === 100) {
                    counter.innerText += '%';
                }
            }
        };

        // Trigger counter animation when stats section is in view
        const statsSection = document.querySelector('.stats-section');
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counters.forEach(counter => {
                        countUp(counter);
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        statsObserver.observe(statsSection);




        // filter gallery 
$('.filters ul li').click(function(){
    $('.filters ul li').removeClass('active');
    $(this).addClass('active');
    
    var data = $(this).attr('data-filter');
    $grid.isotope({
      filter: data
    })
  });
  
  var $grid = $(".grid").isotope({
    itemSelector: ".all",
    percentPosition: true,
    masonry: {
      columnWidth: ".all"
    }
  })

//   popup 
$(document).ready(function() {
	$(".gallery").magnificPopup({
		delegate: "a",
		type: "image",
		tLoading: "Loading image #%curr%...",
		mainClass: "mfp-img-mobile",
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
	});
});
    </script>