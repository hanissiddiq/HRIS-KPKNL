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
                    <h3>Payroll</h3>
                    <p class="text-subtitle text-muted">Handle Employee Payrolls.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('Payroll') }}">Payroll</a></li>
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
                        Detail Payroll
                    </h5>
                </div>
                <div class="card-body">

                    <div class="print-area">

                        <div class="mb-3">
                            <label for=""><strong>Employee Name</strong></label>
                            <p>{{ ucwords($payroll->employee->fullname) }}</p>
                        </div>

                        <div class="mb-3">
                            <label for=""><strong>Salary</strong></label>
                            <p>Rp {{ number_format($payroll->salary, 2, ',', '.') }}</p>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Bonuses</strong></label>
                            <p>Rp {{ number_format($payroll->bonuses, 2, ',', '.') }}</p>
                            {{-- <p>{{ $payroll->bonuses }}</p> --}}
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Deductions</strong></label>
                            <p>Rp {{ number_format($payroll->deductions, 2, ',', '.') }}</p>
                            {{-- <p>{{ $payroll->deductions }}</p> --}}
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Net Salary</strong></label>
                            <p>Rp {{ number_format($payroll->net_salary, 2, ',', '.') }}</p>
                            {{-- <p>{{ $payroll->net_salary }}</p> --}}
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Pay Date</strong></label>
                            <p>{{ date('d-M-Y', strtotime($payroll->pay_date)) }}</p>
                            {{-- <p>{{ $payroll->pay_date }}</p> --}}
                        </div>

                    </div>

                    <div class="mb-1">
                        <div class="mt-3">
                            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
                            <button type="button" id="btn-print" class="btn btn-primary"><span class="bi bi-printer">
                                </span>Print </button>
                            <a href="{{ route('payroll.cetakPDF', $payroll->id) }}" class="btn btn-warning text-white" target="_blank"><span class="bi bi-file-pdf"> </span>PDF</a>
                        </div>
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
        // Fungsi Print 
        document.getElementById('btn-print').addEventListener('click', function() {
            let printContent = document.querySelector('.print-area');
            let originalContent = document.body.innerHTML;
            document.body.innerHTML = printContent.innerHTML;

            window.print();
            document.body.innerHTML = originalContent;
            window.location.reload();
        });
    </script>
@endsection
