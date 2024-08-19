<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    @vite('resources/css/admin.css')
    @vite('resources/js/admin.js')
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="bg-dark text-light">
            <div class="sidebar-header d-flex justify-content-center py-4">
                <h4>Admin Dashboard</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('dashboardAdmin') }}" class="nav-link text-light">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('informasi.index') }}" class="nav-link text-light">
                        <i class="fas fa-info-circle"></i> Informasi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('jabatan.index') }}" class="nav-link text-light">
                        <i class="fas fa-briefcase"></i> Jabatan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pegawai.index') }}" class="nav-link text-light">
                        <i class="fas fa-users"></i> Pegawai
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('rt.index') }}" class="nav-link text-light">
                        <i class="fas fa-list"></i> Daftar RT
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Page Content -->
        <div id="page-content-wrapper" class="flex-1">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary d-lg-none" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="navbar-brand d-none d-lg-block" href="#">Admin Dashboard</a>
                <div class="ms-auto">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                    <button href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();" class="btn btn-outline-secondary">Logout</button>
                    </form>
                </div>
            </nav>

            <div class="container-fluid mt-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
