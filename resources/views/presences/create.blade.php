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

                    <form action="{{ route('presence.store') }}" method="POST">
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
                            <label for="check_in" class="form-label">Check In</label>
                            <input type="text" class="form-control datetime" name="check_in" id="check_in"
                           placeholder="2025-08-20 08:00:0"  required>
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
                            <select class="form-control" name="status" id="status" >
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
