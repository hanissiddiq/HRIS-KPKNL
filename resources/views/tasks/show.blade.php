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
                            <li class="breadcrumb-item"><a href="{{ url('Task') }}">Task</a></li>
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
                        Detail Task
                    </h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">Title</label>
                        <p>{{ $task->title }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Employee</label>
                        <p>{{ucwords($task->employee->fullname) }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Due Date</label>
                        <p>{{\Carbon\Carbon::parse($task->due_date)->format('d F Y') }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label>
                        <p>{{ strtoupper( $task->status) }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <p>{{ $task->description }}</p>
                    </div>
                    <a href="{{ route('task') }}">Back to Home</a>

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
