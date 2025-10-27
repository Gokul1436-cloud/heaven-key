<!-- click to top btn -->
<button class="back-to-top" id="backToTop" aria-label="Back to Top">
    <svg class="progress-ring" width="49" height="64">
        <circle class="progress-circle" cx="32" cy="32" r="25" />
    </svg>
</button>

<!-- Custom cursor dot -->
<div class="cursor-dot"></div>


<!-- preloader -->
<!-- <div id="uniquePreloader" class="unique-preloader">
    <div class="unique-ball"></div>
    <div class="unique-shadow"></div>
</div> -->




<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">

        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php">
                <img src="./assets/image/heavenkey.png" class="img-fluid logo" alt="Logo">
            </a>
            <button class="navbar-toggler  d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="projectsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Projects
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="projectsDropdown">
                            <li><a class="dropdown-item" href="project.php">All Projects</a></li>
                            <li><a class="dropdown-item" href="project-raaga.php">Raaga</a></li>
                            <li><a class="dropdown-item" href="project-swara.php">Swara</a></li>
                            <li><a class="dropdown-item" href="project-veena.php">Veena</a></li>
                            <li><a class="dropdown-item" href="project-kuzhal.php">Kuzhal</a></li>
                            <li><a class="dropdown-item" href="project-tala.php">Tala</a></li>

                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- Offcanvas Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header border-bottom">
            <a class="offcanvas-brand" href="#">
                <img src="./assets/image/heavenkey.png" class="img-fluid" alt="Logo" style="max-height:50px;">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between">
            <ul class="navbar-nav w-100">
                <li class="nav-item mb-3">
                    <a class="nav-link d-flex align-items-center p-2 rounded hover-bg" href="index.php">
                        <img src="./assets/image/icon/logo-icon.png" alt="Home" class="me-2" style="width:24px;">
                        Home
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link d-flex align-items-center p-2 rounded hover-bg" href="about.php">
                        <img src="./assets/image/icon/logo-icon.png" alt="About" class="me-2" style="width:24px;">
                        About
                    </a>
                </li>
                <li class="nav-item dropdown mb-3">
                    <a class="nav-link dropdown-toggle d-flex align-items-center p-2 rounded hover-bg" href="#" id="projectsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./assets/image/icon/logo-icon.png" alt="Projects" class="me-2" style="width:24px;">
                        Projects
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="projectsDropdown">
                        <li><a class="dropdown-item" href="all-projects.php">All Projects</a></li>
                        <li><a class="dropdown-item" href="project-raaga.php">Raaga </a></li>
                        <li><a class="dropdown-item" href="comming-soon.php">Swara</a></li>
                        <li><a class="dropdown-item" href="comming-soon.php">Veena</a></li>
                        <li><a class="dropdown-item" href="comming-soon.php">Kuzhal</a></li>
                        <li><a class="dropdown-item" href="comming-soon.php">Tala</a></li>

                    </ul>

                </li>

                <li class="nav-item mb-3">
                    <a class="nav-link d-flex align-items-center p-2 rounded hover-bg" href="services.php">
                        <img src="./assets/image/icon/logo-icon.png" alt="Services" class="me-2" style="width:24px;">
                        Services
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link d-flex align-items-center p-2 rounded hover-bg" href="contact.php">
                        <img src="./assets/image/icon/logo-icon.png" alt="Contact" class="me-2" style="width:24px;">
                        Contact
                    </a>
                </li>
            </ul>
            <!-- Footer -->
            <div class="offcanvas-footer mt-4 pt-4 border-top ">
                <ul class="list-unstyled mb-3">
                    <li class="d-flex align-items-center mb-2">
                        <a href="tel:917373337773"> <i class="bi bi-telephone-fill me-2 text-pink "></i>
                            <span>+91 73733 37773</span></a>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <a href="mailto:info@example.com" target="_blank"> <i class="bi bi-envelope-fill me-2 text-pink"></i>
                            <span>info@example.com</span></a>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <a href="#" target="_blank"> <i class="bi bi-geo-alt-fill me-2 text-pink "></i>
                            <span>123 Main Street, Coimbatore, India</span></a>
                    </li>
                </ul>
                <div class="d-flex offcanvas-social justify-content-center gap-3 mt-2">
                    <a href="https://www.facebook.com/profile.php?id=61582227082291" class="social-icon" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://x.com/Heaven_Key_" class="social-icon" target="_blank"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.instagram.com/_heaven_key_/" class="social-icon" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://in.pinterest.com/heavenkeycbe/" class="social-icon" target="_blank"> <i class="bi bi-pinterest"></i> </a>
                </div>
            </div>
        </div>
    </div>
</header>



<!-- WhatsApp Floating Button -->
<div class="app-icon-wrap">

    <a
        href="https://wa.me/+917373337773"
        target="_blank"
        class="Btn">
        <div class="sign">
            <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16">
                <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
            </svg>
        </div>
        <div class="text">Whatsapp</div>
    </a>
</div>