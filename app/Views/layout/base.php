<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advaithashramam</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>

<div class="py-1 border-bottom bg-light">
    <div class="container d-flex justify-content-between align-items-center">
        <small class="text-muted">
            <i class="fa-solid fa-shield-halved me-1" style="color: #D35400;"></i> Secure Digital Library
        </small>
        <div class="d-flex align-items-center">
           
                <a href="my_library" class="text-dark text-decoration-none me-3 small"><i class="fa-solid fa-book-open me-1"></i> My Library</a>
                <div class="dropdown" style="z-index: 1060;">
                    <a class="text-dark text-decoration-none dropdown-toggle small" href="#" role="button" data-bs-toggle="dropdown">
                        Hi, username
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                        <li><a class="dropdown-item" href="{% url 'profile' %}">Profile Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="{% url 'logout' %}">Logout</a></li>
                    </ul>
                </div>
          
                <a href="{% url 'login' %}" class="text-dark text-decoration-none me-3 small">Login</a>
                <a href="{% url 'register' %}" class="btn btn-sm text-white px-3" style="background-color: #D35400;">Register</a>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm" style="z-index: 1050;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="assets/img/logo.png" alt="Advaithashramam" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
             <form class="d-flex mx-auto w-50" role="search" id="navSearchForm">
    <div class="search-vault-wrapper w-100 d-flex align-items-center">
        
        <i class="fa-solid fa-magnifying-glass search-icon-left"></i>
        
        <input class="form-control vault-input flex-grow-1" 
               type="search" 
               placeholder="Search sacred texts..." 
               id="navSearchInput"
               autocomplete="off">

        <div class="d-flex align-items-center gap-2 pe-1">
            <button type="reset" class="btn-reset-hidden border-0 bg-transparent p-0" id="resetBtn" style="display: none;">
                <i class="fa-solid fa-xmark text-muted"></i>
            </button>
            
            <button class="btn btn-search-minimal border-0 bg-transparent p-0 fw-bold" type="submit">
                Search
            </button>
        </div>
        
    </div>
</form>         

            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link fw-bold" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link fw-bold" href="#">Publications</a></li>
                <li class="nav-item"><a class="nav-link fw-bold" href="#">Donate</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <?= $this->renderSection('content') ?>
</div>

<!--Footer-->

<footer class="super-footer mt-5">
    <div class="container py-5">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6">
                <img src="assets/img/logo.png" alt="Logo" class="footer-logo mb-3" height="60">
                <p class="text-muted small pe-lg-4">
                    Dedicated to the preservation and dissemination of sacred knowledge. 
                    Our digital vault provides lifetime secure access to profound publications 
                    and spiritual wisdom.
                </p>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <h5 class="footer-heading">Library</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="#">Best Sellers</a></li>
                    <li><a href="#">Recent Publications</a></li>
                    <li><a href="#">Sacred Texts</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="footer-heading">Member Support</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">My Library Access</a></li>
                    <li><a href="#">Subscription Help</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Reading</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="footer-heading">Secure Access</h5>
                <p class="small text-muted">Get updates on new digital releases.</p>
                <form class="mb-3">
                    <div class="input-group">
                        <input type="email" class="form-control form-control-sm bg-transparent border-secondary text-white shadow-none" placeholder="Email Address">
                        <button class="btn btn-brand-saffron btn-sm" type="button">Join</button>
                    </div>
                </form>
                <div class="d-flex align-items-center mt-3">
                    <i class="fa-solid fa-shield-halved fa-2x text-success me-2"></i>
                    <span class="small text-muted">SSL Encrypted<br>Secure PDF Viewing</span>
                </div>
            </div>

        </div>
    </div>

    <div class="copyright-bar py-3">
        <div class="container text-center">
            <p class="mb-0 small text-muted">
                &copy; 2026 Advaithashramam. All rights reserved. | Developed for Secure Spiritual Reading.
            </p>
        </div>
    </div>
</footer>


<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>



</body>
</html>