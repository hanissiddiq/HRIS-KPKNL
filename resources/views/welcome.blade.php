<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRIS - Sistem Informasi Kepegawaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(to right, #0d6efd, #0a58ca);
            color: white;
            padding: 100px 0;
        }

        .feature-icon {
            font-size: 2rem;
            color: #0d6efd;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                <img src="{{ asset('HRIS-Logo.png') }}" width="100" height="50" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    {{-- <li class="nav-item"><a class="btn btn-primary ms-3" href="{{ route('login') }}">Login</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4">Selamat Datang di HRIS</h1>
            <p class="lead mt-3">Kelola data pegawai, absensi, gaji, dan lainnya secara mudah & efisien.</p>
            {{-- <a href="{{ route('login') }}" class="btn btn-light mt-4">Masuk Sekarang</a> --}}

            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="btn btn-success inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class=" btn btn-outline-warning inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class=" btn btn-outline-warning inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </section>

    <!-- Fitur -->
    <section id="fitur" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Fitur Utama</h2>
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="feature-icon mb-3"><i class="bi bi-people-fill"></i></div>
                            <h5 class="card-title">Manajemen Pegawai</h5>
                            <p class="card-text">Tambah, edit, dan kelola seluruh data pegawai secara terpusat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="feature-icon mb-3"><i class="bi bi-calendar-check-fill"></i></div>
                            <h5 class="card-title">Absensi Online</h5>
                            <p class="card-text">Rekam kehadiran harian secara real-time dan otomatis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="feature-icon mb-3"><i class="bi bi-cash-stack"></i></div>
                            <h5 class="card-title">Penggajian</h5>
                            <p class="card-text">Hitung dan distribusikan gaji secara cepat dan akurat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="feature-icon mb-3"><i class="bi bi-person-lines-fill"></i></div>
                            <h5 class="card-title">Manajemen Cuti</h5>
                            <p class="card-text">Kelola pengajuan dan persetujuan cuti dengan mudah.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Tentang -->
    <section id="tentang" class="bg-light py-5">
        <div class="container text-center">
            <h2>Tentang HRIS</h2>
            <p class="mt-3">HRIS adalah sistem informasi kepegawaian berbasis web yang dirancang untuk membantu perusahaan dalam mengelola data dan aktivitas karyawan secara efisien dan terstruktur.
                Dengan HRIS, proses administratif seperti pencatatan absensi, pengajuan cuti, dan pengelolaan data gaji dapat dilakukan secara otomatis dan real-time.
                Sistem ini juga mendukung pelacakan riwayat jabatan, manajemen user berdasarkan peran (Admin, HRD, Pegawai, dan Manajer), serta fitur laporan yang dapat diakses kapan saja.
                HRIS memberikan solusi terintegrasi untuk meningkatkan produktivitas HR dan menciptakan lingkungan kerja yang lebih transparan serta profesional.</p>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="py-5">
        <div class="container text-center">
            <h2>Kontak Kami</h2>
            <p>Email: Hanissiddiq10@gmail.com | Telp: (+62) 822-1188-7735</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            &copy; {{ date('Y') }} HRIS. All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>
