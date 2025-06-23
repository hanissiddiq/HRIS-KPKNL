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
                    <h3>Leave Request</h3>
                    <p class="text-subtitle text-muted">Handle Employee Leave Requests.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('leave-request') }}">{{ $page }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Edit Leave Request
                    </h5>
                </div>
                <div class="card-body">
                    {{-- <div class="d-flex">
                        <a href="{{ route('leave-request.create') }}" class="btn btn-primary mb-3 ms-auto">Add New Leave Request</a>
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

                    <form action="{{ route('leave-request.update', $leave->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-1">
                            <label for="employee_id" class="form-label">Employee</label>
                            <select class="form-control" name="employee_id" id="employee_id" required>
                                <option>=== Pilih Karyawan ===</option>
                                @foreach ($employee as $e)
                                    <option value="{{ $e->id }}" {{ ($e->id == $leave->employee_id) ? 'selected' : ''}}>    {{ ucwords($e->fullname) }}</option>
                                @endforeach
                            </select>
                        </div>



                        <div>
                            <label for="leave_type" class="form-label">Leave Type</label>
                            <select class="form-control" name="leave_type" id="leave_type">
                                <option>=== Jenis Cuti ===</option>
                                <option value="Cuti Tahunan"                    {{ ($leave->leave_type == 'Cuti Tahunan') ? 'selected' : '' }}>         Cuti Tahunan</option>
                                <option value="Cuti Sakit"                      {{ ($leave->leave_type == 'Cuti Sakit') ? 'selected' : '' }}>           Cuti Sakit</option>
                                <option value="Cuti Melahirkan"                 {{ ($leave->leave_type == 'Cuti Melahirkan') ? 'selected' : '' }}>      Cuti Melahirkan</option>
                                <option value="Cuti Besar"                      {{ ($leave->leave_type == 'Cuti Besar') ? 'selected' : '' }}>           Cuti Besar</option>
                                <option value="Cuti Alasan Penting"             {{ ($leave->leave_type == 'Cuti Alasan Penting') ? 'selected' : '' }}>  Cuti Alasan Penting</option>
                                <option value="Cuti Ibadah"                     {{ ($leave->leave_type == 'Cuti Ibadah') ? 'selected' : '' }}>          Cuti Ibadah</option>
                                <option value="Cuti di Luar Tanggungan Negara"  {{ ($leave->leave_type == 'Cuti di Luar Tanggungan Negara') ? 'selected' : '' }}>Cuti di Luar Tanggungan Negara</option>
                            </select>
                        </div>

                        <div class="mb-1">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="text" class="form-control date" name="start_date" id="start_date"
                                placeholder="2025-08-20" required value="{{ old('start_date', $leave->start_date) }}">
                            @error('start_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="text" class="form-control date" name="end_date" id="end_date"
                                placeholder="2025-08-22" required value="{{ old('end_date', $leave->end_date) }}">
                            @error('end_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status"
                                class="form-control  @error('status') is_invalid @enderror">
                                <option value="">=== Pilih Status ===</option>
                                <option value="approved" {{ ($leave->status == 'approved') ? 'selected' : '' }}>APPROVED</option>
                                <option value="pending" {{ ($leave->status == 'pending') ? 'selected' : '' }}>PENDING</option>
                                <option value="rejected" {{ ($leave->status == 'rejected') ? 'selected' : '' }}>REJECTED</option>

                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Update Leave Request</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
                            </div>
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
