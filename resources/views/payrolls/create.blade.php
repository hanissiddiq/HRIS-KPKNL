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
                    <h3>Payrolls</h3>
                    <p class="text-subtitle text-muted">Handle Employee Payrolls.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('payroll') }}">{{ $page }}</a></li>
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
                        Add Payroll
                    </h5>
                </div>
                <div class="card-body">
                    {{-- <div class="d-flex">
                        <a href="{{ route('payroll.create') }}" class="btn btn-primary mb-3 ms-auto">Add New payroll</a>
                    </div> --}}

                    <form action="{{ route('payroll.store') }}" method="POST">
                        @csrf
                        <div class="mb-1">
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
                        </div>
                        <div class="mb-1">
                            <label for="salary" class="form-label">Salary</label>
                            <input type="number" class="form-control" name="salary" id="salary"
                           placeholder="3800500"  required>
                            @error('salary')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="bonuses" class="form-label">Bonuses</label>
                            <input type="number" class="form-control" name="bonuses" id="bonuses"
                            placeholder="150000">
                            @error('bonuses')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="deductions" class="form-label">Deductions</label>
                            <input type="number" class="form-control" name="deductions" id="deductions"
                            placeholder="150000">
                            @error('deductions')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="net_salary" class="form-label">Net Salary</label>
                            <input type="number" class="form-control" name="net_salary" id="net_salary" disabled
                            placeholder="150000">
                            @error('net_salary')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="pay_date" class="form-label">Pay Date</label>
                            <input type="text" class="form-control date" name="pay_date" id="pay_date"
                            laceholder="2025-08-20" required>
                            @error('pay_date')
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
@endsection
