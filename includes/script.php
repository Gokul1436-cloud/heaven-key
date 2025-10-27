<!-- Bootstrap JS (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery (required for Owl Carousel) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- GSAP CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.14.1/gsap.min.js"></script>

<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<!-- back to top btn -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const backToTop = document.getElementById('backToTop');

        if (!backToTop) return;

        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const windowHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight;

            if (scrollTop > 300) {
                backToTop.classList.add('show');

                const scrollPercentage = (scrollTop / (documentHeight - windowHeight)) * 100;
                const circumference = 118;
                const offset = circumference - (scrollPercentage / 100) * circumference;

                const circle = backToTop.querySelector('.progress-circle');
                if (circle) {
                    circle.style.strokeDashoffset = offset;
                }
            } else {
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', (e) => {
            createRipple(e);

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        function createRipple(event) {
            const button = event.currentTarget;
            const circle = document.createElement('span');
            const diameter = Math.max(button.clientWidth, button.clientHeight);
            const radius = diameter / 2;

            circle.style.width = circle.style.height = `${diameter}px`;
            circle.style.left = `${event.clientX - button.getBoundingClientRect().left - radius}px`;
            circle.style.top = `${event.clientY - button.getBoundingClientRect().top - radius}px`;
            circle.classList.add('ripple');

            const ripple = button.getElementsByClassName('ripple')[0];
            if (ripple) {
                ripple.remove();
            }

            button.appendChild(circle);
        }
    });
</script>

<!-- preloader -->
<script>
    window.addEventListener('load', function() {
        const preloader = document.getElementById('uniquePreloader');

        const fadeDuration = 1200;

        // Fade out
        preloader.style.transition = `opacity ${fadeDuration}ms ease`;
        preloader.style.opacity = '0';

        setTimeout(() => {
            preloader.style.display = 'none';
        }, fadeDuration);
    });
</script>




<!-- curset -->
<script>
    const cursorDot = document.querySelector('.cursor-dot');

    document.addEventListener('mousemove', (e) => {
        const x = e.clientX;
        const y = e.clientY;
        cursorDot.style.transform = `translate(${x}px, ${y}px) translate(-50%, -50%)`;
    });

    const hoverElements = document.querySelectorAll('a, button');

    hoverElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursorDot.classList.add('hovered');
        });
        el.addEventListener('mouseleave', () => {
            cursorDot.classList.remove('hovered');
        });
    });
</script>


<!-- Navbar scroll script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    });
</script>

<!-- year js -->
<script>
    const yearSpan = document.getElementById('year');
    const currentYear = new Date().getFullYear();
    yearSpan.textContent = currentYear;
</script>


<script>
    const offcanvas = document.getElementById("offcanvasMenu");
    const openBtn = document.querySelector(".navbar-toggler");
    const closeBtn = offcanvas.querySelector(".btn-close");

    // Backdrop
    const backdrop = document.createElement("div");
    backdrop.className = "offcanvas-backdrop-custom";
    document.body.appendChild(backdrop);

    // Open offcanvas
    openBtn.addEventListener("click", () => {
        offcanvas.classList.add("show");
        backdrop.classList.add("show");
    });

    // Close offcanvas
    closeBtn.addEventListener("click", () => {
        offcanvas.classList.remove("show");
        backdrop.classList.remove("show");
    });

    // Click on backdrop to close
    backdrop.addEventListener("click", () => {
        offcanvas.classList.remove("show");
        backdrop.classList.remove("show");
    });
</script>

<!-- services iameg changing -->
<!-- <script>
    const images = [
        './assets/image/services/services-1.png',
        './assets/image/services/services-2.png',
        './assets/image/services/services-3.png',
        './assets/image/services/services-4.png'
    ];

    const imgElements = document.querySelectorAll('.servicesImage'); // select all images
    let currentIndex = 0;

    function changeImages() {
        currentIndex = (currentIndex + 1) % images.length;
        imgElements.forEach((img, idx) => {
            let imgIndex = (currentIndex + idx) % images.length;
            img.src = images[imgIndex];
        });
    }
    setInterval(changeImages, 5000);
</script> -->


<!-- project cloud animation -->
<script>
    const section = document.querySelector('.inner-project');
    const overlays = [
        document.querySelector('.project-overlay-1'),
        document.querySelector('.project-overlay-2'),
        document.querySelector('.project-overlay-3')
    ];

    const originalPositions = overlays.map(overlay => {
        const rect = overlay.getBoundingClientRect();
        return {
            x: overlay.offsetLeft,
            y: overlay.offsetTop
        };
    });

    const depthFactors = [15, 30, 50];
    const targets = overlays.map(() => ({
        x: 0,
        y: 0
    }));
    const positions = overlays.map(() => ({
        x: 0,
        y: 0
    }));
    const speed = 0.1;
    section.addEventListener('mousemove', e => {
        const rect = section.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        overlays.forEach((overlay, index) => {
            const depth = depthFactors[index];
            targets[index].x = (x - centerX) / depth;
            targets[index].y = (y - centerY) / depth;
        });
    });

    function animate() {
        overlays.forEach((overlay, index) => {
            positions[index].x += (targets[index].x - positions[index].x) * speed;
            positions[index].y += (targets[index].y - positions[index].y) * speed;

            overlay.style.transform = `translate(-50%, -50%) translate(${positions[index].x}px, ${positions[index].y}px)`;
        });
        requestAnimationFrame(animate);
    }

    section.addEventListener('mouseleave', () => {
        overlays.forEach((overlay, index) => {
            targets[index].x = 0;
            targets[index].y = 0;
        });
    });

    animate();
</script>

<!-- -- about animation -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const innerAboutContainer = document.querySelector('.inner-about');
        const aboutLayerOverlays = [
            document.querySelector('.about-overlay-1'),
            document.querySelector('.about-overlay-2')
        ];

        const layerDepthFactors = [15, 30];
        const layerTargets = aboutLayerOverlays.map(() => ({
            x: 0,
            y: 0
        }));
        const layerPositions = aboutLayerOverlays.map(() => ({
            x: 0,
            y: 0
        }));
        const layerSpeed = 0.1;

        // mouse movement
        innerAboutContainer.addEventListener('mousemove', e => {
            const rect = innerAboutContainer.getBoundingClientRect();
            const mouseX = e.clientX - rect.left;
            const mouseY = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            aboutLayerOverlays.forEach((overlay, index) => {
                const depth = layerDepthFactors[index];
                layerTargets[index].x = (mouseX - centerX) / depth;
                layerTargets[index].y = (mouseY - centerY) / depth;
            });
        });

        // smooth animation loop
        function animateAboutLayers() {
            aboutLayerOverlays.forEach((overlay, index) => {
                layerPositions[index].x += (layerTargets[index].x - layerPositions[index].x) * layerSpeed;
                layerPositions[index].y += (layerTargets[index].y - layerPositions[index].y) * layerSpeed;

                overlay.style.transform = `translate(${layerPositions[index].x}px, ${layerPositions[index].y}px)`;
            });

            requestAnimationFrame(animateAboutLayers);
        }

        // reset on mouse leave
        innerAboutContainer.addEventListener('mouseleave', () => {
            aboutLayerOverlays.forEach((overlay, index) => {
                layerTargets[index].x = 0;
                layerTargets[index].y = 0;
            });
        });

        animateAboutLayers();
    });
</script>

<!-- about animation 2  -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const inspiredContainer = document.querySelector('.inner-inspired');
        const inspiredLayers = [
            document.querySelector('.about-shape-4'),
            document.querySelector('.about-shape-5'),
            document.querySelector('.about-shape-6'),
            document.querySelector('.about-shape-7'),
            document.querySelector('.about-shape-8')
        ];

        // Different depth factors for each layer
        const depthFactors = [10, 20, 30, 40, 50];

        // Targets and positions
        const targetPositions = inspiredLayers.map(() => ({
            x: 0,
            y: 0
        }));
        const currentPositions = inspiredLayers.map(() => ({
            x: 0,
            y: 0
        }));

        const smoothing = 0.08;

        // Mouse movement listener
        inspiredContainer.addEventListener('mousemove', e => {
            const rect = inspiredContainer.getBoundingClientRect();
            const mouseX = e.clientX - rect.left;
            const mouseY = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            inspiredLayers.forEach((layer, index) => {
                const depth = depthFactors[index];
                targetPositions[index].x = (mouseX - centerX) / depth;
                targetPositions[index].y = (mouseY - centerY) / depth;
            });
        });

        // Reset positions when mouse leaves
        inspiredContainer.addEventListener('mouseleave', () => {
            inspiredLayers.forEach((layer, index) => {
                targetPositions[index].x = 0;
                targetPositions[index].y = 0;
            });
        });

        // Animation loop
        function animateLayers() {
            inspiredLayers.forEach((layer, index) => {
                currentPositions[index].x += (targetPositions[index].x - currentPositions[index].x) * smoothing;
                currentPositions[index].y += (targetPositions[index].y - currentPositions[index].y) * smoothing;

                layer.style.transform = `translate(${currentPositions[index].x}px, ${currentPositions[index].y}px)`;
            });

            requestAnimationFrame(animateLayers);
        }

        animateLayers();
    });
</script>


<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<!-- WOW.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


<!-- wow animatin efect  -->
<script>
    new WOW({
        live: true,
        resetAnimation: true
    }).init();
</script>

<!-- iamge reveling efect  -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const curtains = document.querySelectorAll('.curtain');

        function revealCurtains() {
            curtains.forEach(curtain => {
                const rect = curtain.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    curtain.classList.add('reveal');
                } else {
                    curtain.classList.remove('reveal');
                }
            });
        }
        window.addEventListener('scroll', revealCurtains);
        revealCurtains();
    });
</script>

<!-- navigation active script -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const currentPath = window.location.pathname.split("/").pop();
        const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

        navLinks.forEach(link => {
            const linkPath = link.getAttribute("href").split("/").pop();

            if (linkPath === currentPath) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });
    });
</script>


<!-- video modal popup -->
<script>
    // Auto play / stop video on modal open/close
    const videoModal = document.getElementById('videoModal');
    const videoFrame = document.getElementById('videoFrame');

    videoModal.addEventListener('show.bs.modal', () => {
        let src = videoFrame.getAttribute('src');
        videoFrame.setAttribute('src', src + "&autoplay=1");
    });

    videoModal.addEventListener('hidden.bs.modal', () => {
        let src = videoFrame.getAttribute('src').replace("&autoplay=1", "");
        videoFrame.setAttribute('src', src); // stop video
    });
</script>

<!-- marque script -->
<script>
    const track = document.getElementById('scrollingTrack');
    let scrollSpeed = 1; // pixels per frame
    let scrollPos = 0;
    let isPaused = false;

    // Pause on hover
    track.parentElement.addEventListener('mouseenter', () => {
        isPaused = true;
    });
    track.parentElement.addEventListener('mouseleave', () => {
        isPaused = false;
    });

    function animateScroll() {
        if (!isPaused) {
            scrollPos -= scrollSpeed;
            // Reset position for seamless loop
            if (Math.abs(scrollPos) >= track.scrollWidth / 2) {
                scrollPos = 0;
            }
            track.style.transform = `translateX(${scrollPos}px)`;
        }
        requestAnimationFrame(animateScroll);
    }

    // Start from right
    scrollPos = track.scrollWidth / 2;
    animateScroll();
</script>



<!-- JS: Tab Filter Functionality -->
<script>
    const filterBtns = document.querySelectorAll('.filter-btns .btn');
    const projectSections = document.querySelectorAll('.project-items');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            projectSections.forEach(section => {
                if (filter === 'all' || section.getAttribute('data-category') === filter) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        });
    });
</script>

<!-- prohject fatacy box -->

<script>
    Fancybox.bind("[data-fancybox='gallery']", {
        Thumbs: true,
        Toolbar: true,
        loop: true,
        dragToClose: true,
        closeButton: "top",
    });
</script>


<!-- form validation -->
<script>
    document.getElementById('contact-ain').addEventListener('submit', function(event) {
        event.preventDefault();

        // Clear previous errors
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

        let isValid = true;
        const name = document.getElementById('name').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const email = document.getElementById('email').value.trim();
        const subject = document.getElementById('subject').value.trim();
        const message = document.getElementById('message').value.trim();

        if (name === '') {
            document.getElementById('name-error').textContent = 'Name is required';
            isValid = false;
        }

        if (phone === '' || !/^\d{10,15}$/.test(phone)) {
            document.getElementById('phone-error').textContent = 'Invalid phone number';
            isValid = false;
        }

        if (email === '' || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            document.getElementById('email-error').textContent = 'Invalid email format';
            isValid = false;
        }

        if (subject === '') {
            document.getElementById('subject-error').textContent = 'Subject is required';
            isValid = false;
        }

        if (message === '') {
            document.getElementById('message-error').textContent = 'Message is required';
            isValid = false;
        }

        if (!isValid) return;

        const formData = new FormData(document.getElementById('contact-ain'));

        fetch('mail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                Toastify({
                    text: data.message,
                    duration: 3000,
                    backgroundColor: data.status === 'success' ? 'green' : 'red'
                }).showToast();

                if (data.status === 'success') {
                    document.getElementById('contact-ain').reset();
                }
            })
            .catch(() => {
                Toastify({
                    text: 'Error submitting form',
                    duration: 3000,
                    backgroundColor: 'red'
                }).showToast();
            });
    });
</script>



<script>
    $(document).ready(function() {
        var owl = $('.project-owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 7000,
            smartSpeed: 800,
            dots: false
        });

        $('.custom-next').click(function() {
            owl.trigger('next.owl.carousel');
        });
        $('.custom-prev').click(function() {
            owl.trigger('prev.owl.carousel');
        });
    });
</script>