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
                    <h3>Task</h3>
                    <p class="text-subtitle text-muted">Handle Employee Tasks.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('task') }}">{{ $page }}</a></li>
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
                        Edit Task
                    </h5>
                </div>
                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger w-100">
                            {{ session('error') }}
                        </div>

                    @endif
                    <div class="d-flex">
                        <a href="{{ route('task.create') }}" class="btn btn-primary mb-3 ms-auto">Add New Task</a>
                    </div>

                    <form action="{{ route('task.update', $task->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-1">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ old('title', $task->title) }}" placeholder="Nama Title" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is_invalid @enderror" name="description" id="description"
                                placeholder="Deskripsi Title" required>{{ old('description', $task->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="due_date" class="form-label">Due Date</label>
                            <input type="date" class="form-control @error('due_date') is_invalid @enderror"
                                name="due_date" id="due_date" placeholder="Tanggal Pelaksanaan"
                                value="{{ old('due_date', $task->due_date) }}" required>
                            @error('due_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label for="assigned_to" class="form-label">Employee</label>
                            <select name="assigned_to" id="status"
                                class="form-control  @error('assigned_to') is_invalid @enderror">
                                @foreach ($pegawai as $pegawai)
                                    {{ $loop->iteration }}
                                    <option value="{{ $pegawai->id }}"
                                        @if (old('assigned_to',$pegawai->id == $task->assigned_to)) selected @endif>
                                        {{ ucwords($pegawai->fullname) }}</option>

                                @endforeach
                            </select>
                            @error('assigned_to')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status"
                                class="form-control  @error('status') is_invalid @enderror">
                                <option value="done" @if (old('status',$task->status) == 'done') selected @endif>DONE</option>

                                <option value="pending"  @if (old('status',$task->status) == 'pending') selected @endif>PENDING</option>
                                <option value="on progress"  @if (old('status',$task->status) == 'on progress') selected @endif>ON PROGRESS</option>

                            </select>
                            @error('due_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Update Task</button>
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
