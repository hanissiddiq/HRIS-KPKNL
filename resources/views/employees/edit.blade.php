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
                            <li class="breadcrumb-item"><a href="{{ url('employee') }}">{{ $page }}</a></li>
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
                        Edit Employee
                    </h5>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger w-100">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="d-flex">
                        {{-- <a href="{{ route('employee.create') }}" class="btn btn-primary mb-3 ms-auto">Add New Employee</a> --}}
                    </div>

                    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-1">
                            <label for="fullname" class="form-label">Name</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" value="{{ $employee->fullname }}"
                                placeholder="Nama Pegawai" required>
                            @error('fullname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ $employee->email }}"
                                placeholder="E-Mail" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ $employee->phone_number }}"
                                placeholder="Nomer HP" required>
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control @error('address') is_invalid @enderror" name="address" id="address"
                                placeholder="Alamat" required>{{  $employee->address }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="birth_date" class="form-label">Birth Date</label>
                            <input type="date" class="form-control @error('birth_date') is_invalid @enderror"
                                name="birth_date" id="birth_date" placeholder="Tanggal Lahir"
                                value="{{ $employee->birth_date }}" required>
                            @error('birth_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="hire_date" class="form-label">Hire Date</label>
                            <input type="date" class="form-control @error('hire_date') is_invalid @enderror"
                                name="hire_date" id="hire_date" placeholder="Tanggal Bergabung"
                                value="{{ $employee->hire_date }}" required>
                            @error('hire_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label for="departement" class="form-label">Department</label>
                            <select name="departement_id" id="departement_id"
                                class="form-control  @error('departement_id') is_invalid @enderror">
                                @foreach ($departemen as $d)
                                    {{ $loop->iteration }}
                                    {{-- <option value="{{ $employee->departement_id == $d->id}}"> {{ ucwords($d->name) }}</option> --}}
                                    <option value="{{ $d->id }}" @if ($employee->departement_id == $d->id) selected @endif>
                                        {{ ucwords($d->name) }}
                                    </option>

                                @endforeach
                            </select>
                            @error('departement_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="role_id" class="form-label">Role</label>
                            <select name="role_id" id="role_id"
                                class="form-control  @error('role_id') is_invalid @enderror">
                                @foreach ($role as $r)
                                    {{ $loop->iteration }}
                                    <option value="{{ $r->id }}" @if ($employee->role_id == $r->id) selected @endif>
                                        {{ ucwords($r->title) }}
                                    </option>

                                    {{-- <option value="{{ $r->id }}"> {{ ucwords($r->title) }}</option> --}}
                                @endforeach
                            </select>
                            @error('role_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label for="salary" class="form-label">Salary</label>
                            <input type="number" class="form-control" name="salary" id="salary"  value="{{ (int) $employee->salary }}"
                            placeholder="Gaji" required>
                            @error('salary')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status"
                                class="form-control  @error('status') is_invalid @enderror">

                                <option value="active" @if (old('status',$employee->status) == 'active') selected @endif>ACTIVE</option>
                                <option value="unactive" @if (old('status',$employee->status) == 'unactive') selected @endif>UNACTIVE</option>


                            </select>

                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror



                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Update Employee</button>
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
