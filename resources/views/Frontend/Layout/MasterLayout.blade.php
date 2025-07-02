<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Blog</title>
    <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets/css/FrontendStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('Font/css/all.min.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('Home') }}">My Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('Home') ? 'active' : '' }}" href="{{ route('Home')}}"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('Category') ? 'active' : '' }}" href="{{ route('Category')}}"></i>Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('Articles') ? 'active' : '' }}" href="{{ route('Articles')}}">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('About') ? 'active' : '' }}" href="{{ route('About')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('Contact') ? 'active' : '' }}" href="{{ route('Contact')}}">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-login" href="{{ route('Login') }}"><i class="fas fa-sign-in-alt me-1"></i> Login</a>
                </div>
            </div>
        </div>
    </nav>

@yield('Content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h3>My Blog</h3>
                    <p>A platform for sharing knowledge, information, and inspiration. Share your story with us.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="social-icon text-light text-decoration-none"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon text-light text-decoration-none"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon text-light text-decoration-none"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon text-light text-decoration-none"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3>Links</h3>
                    <ul class="footer-links ps-0">
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i> Home</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i> Categories</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i> Articles</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i> About</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i> Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3>Categories</h3>
                    <ul class="footer-links ps-0">
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i> Technology</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i> Health</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i> Travel</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i> Education</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i> Business</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3>Contact</h3>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Dhaka, Bangladesh</p>
                    <p><i class="fas fa-envelope me-2"></i> contact@amarblog.com</p>
                    <p><i class="fas fa-phone me-2"></i> +880 1XXX XXXXXX</p>
                </div>
            </div>

            <div class="text-center pt-4 mt-4 border-top border-light">
                <p class="mb-0">&copy; 2023 My Blog. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>