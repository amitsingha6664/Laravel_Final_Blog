<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Font/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Assets/css/BackendStyle.css') }}">
</head>
<body>

    @if (session('success'))
        <div id="successMessage" class="alert alert-success custom-alert shadow">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="errorMessage" class="alert alert-danger custom-alert shadow">
            {{ session('error') }}
        </div>
    @endif

    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    
    <div class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <span class="fs-4 fw-bold"><i class="fas fa-blog me-2"></i> <span class="nav-link-text">Blog Admin</span></span>
        </div>
        <div class="sidebar-nav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('Dashboard-View') ? 'active' : '' }}" href="{{ route('Dashboard-View') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('All-Post-View') || request()->routeIs('Search-Post')  ? 'active' : '' }}" href="{{ route('All-Post-View') }}">
                        <i class="fas fa-file-alt"></i>
                        <span class="nav-link-text">All Blog Posts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('Rejected-Post-View') ? 'active' : '' }}" href="{{ route('Rejected-Post-View') }}">
                        <i class="fa-solid fa-xmark"></i>
                        <span class="nav-link-text">Rejected Posts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('Create-Post-View') ? 'active' : '' }}" href="{{ route('Create-Post-View') }}">
                        <i class="fas fa-plus-circle"></i>
                        <span class="nav-link-text">Add New Post</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Users-Post-Management-View') }}">
                        <i class="fas fa-newspaper"></i>
                        <span class="nav-link-text">Users Post Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('Categories-Management-View') ? 'active' : '' }}" href="{{ route('Categories-Management-View') }}">
                        <i class="fa-solid fa-tag"></i>
                        <span class="nav-link-text">Categories Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('Comments-Management-View') ? 'active' : '' }}" href="{{ route('Comments-Management-View') }}">
                        <i class="fas fa-comments"></i>
                        <span class="nav-link-text">Comments Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('Users-Management-View') ? 'active' : '' }}" href="{{ route('Users-Management-View') }}">
                        <i class="fas fa-users"></i>
                        <span class="nav-link-text">Users Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-photo-video"></i>
                        <span class="nav-link-text">Media Library</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Settings-View') }}">
                        <i class="fas fa-cog"></i>
                        <span class="nav-link-text">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content" id="mainContent">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button id="mobileSidebarToggle" aria-label="Toggle sidebar">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <button id="desktopSidebarToggle" aria-label="Toggle sidebar">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <a class="navbar-brand text-light" href="#"><i class="fas fa-blog me-2"></i>Blog Admin</a>
                
                <div class="ms-auto d-flex align-items-center">
                    <div class="dropdown me-3">
                        <button class="btn btn-light dropdown-toggle" type="button" id="notificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-bell"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                                <span class="visually-hidden">unread notifications</span>
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown">
                            <li><h6 class="dropdown-header text-secondary">Notifications</h6></li>
                            <li><a class="dropdown-item" href="#">New order received</a></li>
                            <li><a class="dropdown-item" href="#">System update available</a></li>
                            <li><a class="dropdown-item" href="#">New user registered</a></li>
                        </ul>
                    </div>
                    
                    <div class="dropdown profile-dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-light" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile Picture" class="rounded-circle me-2">
                            <span class="d-none d-lg-inline text-light">John Doe</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('Login') }}"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="content-area">
            <div class="container-fluid">
                        <p class="d-flex justify-content-end">Dashboard / All Post View</p>
                @yield('Content')
            </div>
        </div>
    </div>

    <script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        // DOM Elements
        const mobileSidebarToggle = document.getElementById('mobileSidebarToggle');
        const desktopSidebarToggle = document.getElementById('desktopSidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const mainContent = document.getElementById('mainContent');
        const navbar = document.querySelector('.navbar');
        const successMessage = document.getElementById('successMessage');
        const errorMessage = document.getElementById('errorMessage');

        // Auto hide alerts after 5 seconds
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.opacity = '0';
                setTimeout(() => successMessage.remove(), 500);
            }, 5000);
        }

        if (errorMessage) {
            setTimeout(() => {
                errorMessage.style.opacity = '0';
                setTimeout(() => errorMessage.remove(), 500);
            }, 5000);
        }

        // Mobile sidebar toggle function
        function toggleMobileSidebar() {
            sidebar.classList.toggle('show');
            sidebarOverlay.classList.toggle('show');
            document.body.style.overflow = sidebar.classList.contains('show') ? 'hidden' : '';
        }

        // Desktop sidebar toggle function
        function toggleDesktopSidebar() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
            navbar.classList.toggle('collapsed');
            
            // Update chevron icon
            const icon = desktopSidebarToggle.querySelector('i');
            icon.classList.toggle('fa-chevron-left');
            icon.classList.toggle('fa-chevron-right');
            
            // Save state to localStorage
            localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
        }

        // Initialize sidebar state from localStorage
        function initializeSidebar() {
            const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
            
            if (window.innerWidth >= 992) {
                if (isCollapsed) {
                    sidebar.classList.add('collapsed');
                    mainContent.classList.add('collapsed');
                    navbar.classList.add('collapsed');
                    desktopSidebarToggle.querySelector('i').classList.replace('fa-chevron-left', 'fa-chevron-right');
                }
            } else {
                sidebar.classList.remove('collapsed');
                mainContent.classList.remove('collapsed');
                navbar.classList.remove('collapsed');
            }
        }

        // Event listeners
        mobileSidebarToggle.addEventListener('click', toggleMobileSidebar);
        desktopSidebarToggle.addEventListener('click', toggleDesktopSidebar);
        sidebarOverlay.addEventListener('click', toggleMobileSidebar);

        // Close mobile sidebar when clicking outside
        document.addEventListener('click', (event) => {
            if (window.innerWidth < 992 && 
                !sidebar.contains(event.target) && 
                !mobileSidebarToggle.contains(event.target)) {
                if (sidebar.classList.contains('show')) {
                    toggleMobileSidebar();
                }
            }
        });

        // Handle window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 992) {
                sidebar.classList.remove('show');
                sidebarOverlay.classList.remove('show');
                document.body.style.overflow = '';
            }
            initializeSidebar();
        });

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', initializeSidebar);
    </script>
</body>
</html>