@extends('layouts.frame_dashboard')
@section('content')
    {{-- <div id="main"> --}}
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Employee</h3>
                    <p class="text-subtitle text-muted">Handle Employee Data.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('employee') }}">Employee</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Detail </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Detail Employee
                    </h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <p>{{ $employee->fullname }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <p>{{ $employee->email }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Phone Number</label>
                        <p>{{ $employee->phone_number }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Address</label>
                        <p>{{ $employee->address }}</p>
                    </div>

                    <div class="mb-3">
                        <label for="">Birth Date</label>
                        <p>{{\Carbon\Carbon::parse($employee->birth_date)->format('d F Y') }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Hire Date</label>
                        <p>{{\Carbon\Carbon::parse($employee->hire_date)->format('d F Y') }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Departement</label>
                        <p>{{$employee->departement->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Role</label>
                        <p>{{$employee->role->title }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Salary</label>
                        <p>{{'Rp. ' . number_format( $employee->salary) }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label>
                        <p>{{ strtoupper( $employee->status) }}</p>
                    </div>

                    <a href="{{ route('employee') }}">Back to Home</a>

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
@endsection
