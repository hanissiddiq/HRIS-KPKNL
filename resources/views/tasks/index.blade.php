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
                        List Task
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
                        <a href="{{ route('task.create') }}" class="btn btn-primary mb-3 ms-auto">Add New Task</a>
                        {{-- <a href="{{ route('task.create') }}" class="btn btn-primary mb-3 ms-auto">Add New Task</a> --}}
                    </div>
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th width=250>Title</th>
                                {{-- <th >Description</th> --}}
                                <th width=150>Assigned To</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($task as $t)
                                <tr>
                                    <td>{{ $t->title }}</td>
                                    {{-- <td>{{ $t->description }}</td> --}}
                                    {{-- <td>{{ $t->assigned_to }}</td> --}}
                                    <td>{{ ucwords($t->employee->fullname) }}</td>
                                    <td>{{ date('d-M-Y', strtotime($t->due_date)) }}</td>
                                    <td>
                                        @if ($t->status == 'pending')
                                            <span
                                                class="badge bg-light-secondary text-warning">{{ strtoupper($t->status) }}</span>
                                        @elseif ($t->status == 'done')
                                            <span
                                                class="badge bg-light-secondary text-success">{{ strtoupper($t->status) }}</span>
                                        @else
                                            <span
                                                class="badge bg-light-secondary text-info">{{ strtoupper($t->status) }}</span>
                                        @endif
                                    </td>


                                    <td>

                                        <div class="btn-group" role="group">
                                            @if ($t->status == 'pending')
                                                <a href="{{ route('task.done', $t->id) }}" class="btn btn-outline-info btn-sm">. Mark As Done ..</a>
                                            @else
                                                <a href="{{ route('task.pending', $t->id) }}" class="btn btn-outline-warning btn-sm">Mark As Pending</a>
                                            @endif
                                        </div>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('task.show', $t->id) }}" class="btn icon btn-outline-primary btn-sm" data-bs-toggle="tooltip"
                                                title="View">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ route('task.edit', $t->id) }}"
                                                class="btn btn-outline-success btn-sm" data-bs-toggle="tooltip"
                                                title="Edit">
                                                <i class="bi bi-pencil"> </i>
                                            </a>

                                            <form action="{{ route('task.destroy', $t->id) }}" method="POST"
                                                style="display: inline" class="btn btn-outline-danger btn-sm">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Yakin Menghapus Data?')"
                                                    class=""><i class="bi bi-trash">
                                                    </i></button>
                                            </form>

                                        </div>
                                    </td>
                                    {{-- <td>
                                    <span class="badge bg-success">Active</span>
                                </td> --}}
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
