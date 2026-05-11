<nav class="navbar navbar-expand-lg fixed-top glass-nav">
    <div class="container justify-content-between">
        <a class="navbar-brand text-white navlogo" href="#">
            <img src="<?= $assetsPath ?? '' ?>assets/img/white-logo.png" class="img-fluid" alt="Emmatech Logo">
        </a>
        <!-- <a class="navbar-brand text-white" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
            aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Mobile offcanvas menu (visible only on < lg) -->
        <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu"
            aria-labelledby="mobileMenuLabel">
            <div class="offcanvas-header border-0">
                <h5 class="offcanvas-title text-white" id="mobileMenuLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex align-items-center justify-content-center">
                <ul class="navbar-nav gap-4 text-center">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="<?= $assetsPath ?? '' ?>index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= $assetsPath ?? '' ?>about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= $assetsPath ?? '' ?>projects">My Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white nav-btn" href="<?= $assetsPath ?? '' ?>contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="collapse navbar-collapse d-none d-lg-flex flex-grow-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="<?= $assetsPath ?? '' ?>index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= $assetsPath ?? '' ?>about">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= $assetsPath ?? '' ?>projects">My Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white nav-btn" href="<?= $assetsPath ?? '' ?>contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>