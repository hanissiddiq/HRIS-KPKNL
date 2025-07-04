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
                            <li class="breadcrumb-item active" aria-current="page">{{ $page }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        List Payroll
                    </h5>
                </div>
                <div class="card-body">


                    {{-- Alert Sukses --}}
                    @if (session('success'))
                        <div class="alert alert-success w-100">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Alert Error --}}
                    @if ($errors->any())
                        <div class="alert alert-danger w-100">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif




                    <div class="d-flex">
                        @if (session('role') == 'Admin' || session('role') == 'HRD' || session('role') == 'Manager')
                        <a href="{{ route('payroll.create') }}" class="btn btn-primary mb-3 ms-auto">Add New Payroll</a>
                        @endif
                    </div>
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th width=200>Employee</th>
                                <th >Salary</th>
                                <th >Bonus</th>
                                <th >Deductions</th>
                                <th >Net Salary</th>
                                <th >Pay Date</th>
                                {{-- <th width=150>Description</th> --}}

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payroll as $p)
                                <tr>
                                    <td>{{ ucwords($p->employee?->fullname ?? '-') }}</td>
                                    {{-- <td>{{ $p->salary }}</td> --}}
                                    <td>Rp {{ number_format($p->salary, 2, ',', '.') }}</td>
                                    {{-- <td>{{ $p->bonuses }}</td> --}}
                                    <td>Rp {{ number_format($p->bonuses, 2, ',', '.') }}</td>
                                    {{-- <td>{{ $p->deductions }}</td> --}}
                                    <td>Rp {{ number_format($p->deductions, 2, ',', '.') }}</td>
                                    {{-- <td>{{ $p->net_salary }}</td> --}}
                                    <td>Rp {{ number_format($p->net_salary, 2, ',', '.') }}</td>
                                    {{-- <td>{{ $p->pay_date }}</td> --}}
                                    <td>{{ date('d-M-Y', strtotime($p->pay_date))}}</td>
                                    <td>
                                        <a href="{{ route('payroll.show', $p->id) }}" class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="tooltip" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        @if (session('role') == 'Admin' || session('role') == 'HRD' || session('role') == 'Manager')

                                        <a href="{{ route('payroll.edit', $p->id) }}" class="btn btn-outline-success btn-sm"
                                            data-bs-toggle="tooltip" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        {{-- <form action="{{ route('payroll.destroy', $p->id) }}" method="POST" --}}
                                        <form action="{{ route('payroll.destroy', $p->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin menghapus data?');" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm"
                                                data-bs-toggle="tooltip" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
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
