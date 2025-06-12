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
                    <h3>Departement</h3>
                    <p class="text-subtitle text-muted">Handle Departement Data.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('departement') }}">{{ $page }}</a></li>
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
                        Edit Departement
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-flex">

                    </div>

                    <form action="{{ route('departement.update',  $departement->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-1">
                            <label for="fullname" class="form-label">Nama Departement</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Nama Departement" value="{{ old('name', $departement->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control" id="description" cols="60" rows="10" required>{{ old('name', $departement->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-1">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status"
                                class="form-control  @error('status') is_invalid @enderror">
                                <option value="active" @if (old('status',$departement->status) == 'active') selected @endif>ACTIVE</option>
                                <option value="unactive" @if (old('status',$departement->status) == 'unactive') selected @endif>UNACTIVE</option>

                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror



                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Update Departement</button>
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
