@extends('layouts.frame_dashboard')

{{-- <head>
    ...
    <meta name="office-lat" content="{{ $data->office_latitude ?? 0 }}">
    <meta name="office-lon" content="{{ $data->office_longitude ?? 0 }}">
</head> --}}

@section('content')
    {{-- <div id="main"> --}}
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <input type="hidden" id="inp-latitude" name="latitude" value="{{ $lokasi_kantor->office_latitude ?? old('latitude') }}">
    <input type="hidden" id="inp-longitude" name="longitude"
        value="{{ $lokasi_kantor->office_longitude ?? old('longitude') }}">
    {{-- @dd($lokasi_kantor->office_latitude, $lokasi_kantor->office_longitude) --}}

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Presences</h3>
                    <p class="text-subtitle text-muted">Handle Employee Presences.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('presence') }}">{{ $page }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Add Presence
                    </h5>
                </div>
                <div class="card-body">
                    {{-- <div class="d-flex">
                        <a href="{{ route('presence.create') }}" class="btn btn-primary mb-3 ms-auto">Add New presence</a>
                    </div> --}}

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('role') == 'Admin' || session('role') == 'HRD' || session('role') == 'Manager')
                        <form action="{{ route('presence.store') }}" method="POST">
                            @csrf
                            <div class="mb-1">
                                @if (session('role') == 'Admin' || session('role') == 'HRD' || session('role') == 'Manager')
                                    <label for="employee_id" class="form-label">Employee</label>
                                    <select class="form-control" name="employee_id" id="status">
                                        <option>=== Pilih Karyawan ===</option>
                                        @foreach ($employee as $e)
                                            <option value="{{ $e->id }}">{{ ucwords($e->fullname) }}</option>
                                        @endforeach
                                    </select>

                                    @error('employee_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                @endif
                            </div>
                            <div class="mb-1">
                                <label for="check_in" class="form-label">Check In</label>
                                <input type="text" class="form-control datetime" name="check_in" id="check_in"
                                    placeholder="2025-08-20 08:00:0" required>
                                @error('check_in')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="check_out" class="form-label">Check Out</label>
                                <input type="text" class="form-control datetime" name="check_out" id="check_out"
                                    placeholder="2025-08-20 17:00:0" required>
                                @error('check_out')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="date" class="form-label">Date</label>
                                <input type="text" class="form-control date" name="date" id="date"
                                    laceholder="2025-08-20" required>
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="present">Present</option>
                                    <option value="absent">Absent</option>
                                    <option value="leave">Leave</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-1">
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button class="btn btn-secondary"
                                        onclick="window.history.go(-1); return false;">Back</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <form action="{{ route('presence.store') }}" method="POST">
                            @csrf

                            <div class="mb-1 alert alert-info">
                                <i class="bi bi-exclamation-triangle">
                                    <b>Note</b> : Mohon Izinkan Akses Lokasi, Supaya Data Presensi Akurat </i>
                            </div>
                            <div class="mb-1">
                                <label for="latitude" class="form-label">Latitude</label>
                                <input type="text" class="form-control" name="latitude" id="latitude" required>
                                @error('latitude')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="longitude" class="form-label">Longitude</label>
                                <input type="text" class="form-control" name="longitude" id="longitude" required>
                                @error('longitude')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <iframe width="275" height="300" scrolling="no" marginheight="0" marginwidth="0"
                                    frameborder="0"></iframe>
                            </div>

                            <button type="submit" class="btn btn-primary" id="btn-present" disabled> Present</button>

                    @endif


                </div>
            </div>

        </section>
    </div>



    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">

                <p>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> &copy; Mazer
                </p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                    by <a href="https://saugi.me">Saugi</a></p>
            </div>
        </div>
    </footer>

    <script>
        const iframe = document.querySelector('iframe');


        // if ($data && $data->office_latitude && $data->office_longitude){

        //    kodingan chat gpt
        // const officeLat = parseFloat(document.querySelector('meta[name="office-lat"]').content);
        // const officeLon = parseFloat(document.querySelector('meta[name="office-lon"]').content);

        const officeLat = {{ $lokasi_kantor->office_latitude ?? 0 }};
        const officeLon = {{ $lokasi_kantor->office_longitude ?? 0 }};

        // if (officeLat && officeLon) {
        //     iframe.src = `https://maps.google.com/maps?q=${officeLat},${officeLon}&output=embed`;
        // } else {
        //     iframe.src = 'https://maps.google.com/maps?q=0,0&output=embed'; // Default location
        // }


        // const officeLat = {{ $data->office_latitude ?? 0 }};
        // const officeLon = {{ $data->office_longitude ?? 0 }};
        //    kodingan chat gpt


        // const officeLat = 5.180567;
        // const officeLon = 96.806673;
        const threshold = 0.01; // Adjust this value as needed

        navigator.geolocation.getCurrentPosition(function(position) {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;
            iframe.src = `https://maps.google.com/maps?q=${lat},${lon}&output=embed`;

        });

        document.addEventListener('DOMContentLoaded', (event) => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;

                    document.getElementById('latitude').value = lat;
                    document.getElementById('longitude').value = lon;

                    // Check if the user is within the threshold distance from the office
                    const distance = Math.sqrt(Math.pow(lat - officeLat, 2) + Math.pow(lon - officeLon, 2));

                    if (distance <= threshold) {
                        // //Presensi ada disekitar kantor
                        // alert('Kamu berada dekat kantor, silahkan lanjutkan presensi.');
                        // document.getElementById('btn-present').removeAttribute('disabled'); // Enable the submit button

                        Swal.fire({
                            icon: 'info',
                            title: 'Kamu berada dekat kantor',
                            text: 'Silahkan lanjutkan presensi.',
                            confirmButtonText: 'Oke'
                        });
                        document.getElementById('btn-present').removeAttribute('disabled'); // Enable the submit button

                    } else {
                        // alert('Kamu tidak berada di kantor, pastikan kamu berada dikantor untuk melakukan presensi.');

                        Swal.fire({
                            icon: 'warning',
                            title: 'Lokasi Diluar Kantor',
                            text: 'Pastikan kamu berada di kantor untuk melakukan presensi.',
                            confirmButtonText: 'Mengerti'
                        });

                    }
                });
            } else {
                alert('Geolocation tidak didukung oleh browser ini.');
            }

        });

        // } else {
        //     <div class="alert alert-danger">Lokasi kantor belum disetting.</div>
        //  }
    </script>
@endsection
