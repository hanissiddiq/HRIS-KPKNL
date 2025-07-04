@extends('layouts.frame_dashboard')
@section('content') 
    

        {{-- <div id="main"> --}}
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Dashboard</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon purple mb-2">
                                                    <i class="icon dripicons dripicons-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Departement</h6>
                                                <h5 class="font-extrabold mb-0">{{ $departementCount }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon blue mb-2">
                                                    <i class="icon dripicons dripicons-user-group"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Employee</h6>
                                                <h5 class="font-extrabold mb-0">{{ $employeeCount }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon green mb-2">
                                                    <i class="icon dripicons dripicons-alarm"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Presensi</h6>
                                                <h5 class="font-extrabold mb-0">{{ $presenceCount }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon red mb-2">
                                                    <i class="icon dripicons dripicons-article"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Payroll</h6>
                                                <h5 class="font-extrabold mb-0">{{ $payrollCount }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Presence</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            {{-- <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-primary" width="32" height="32"
                                                        fill="blue" style="width:10px">
                                                        <use
                                                            xlink:href="{{ asset('mazer/dist/assets/static/images/bootstrap-icons.svg#circle-fill') }}" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Europe</h5>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <h5 class="mb-0 text-end">862</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-europe"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-success" width="32" height="32"
                                                        fill="blue" style="width:10px">
                                                        <use
                                                            xlink:href="{{ asset('mazer/dist/assets/static/images/bootstrap-icons.svg#circle-fill') }}" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">America</h5>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <h5 class="mb-0 text-end">375</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-america"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-success" width="32" height="32"
                                                        fill="blue" style="width:10px">
                                                        <use
                                                            xlink:href="{{ asset('mazer/dist/assets/static/images/bootstrap-icons.svg#circle-fill') }}" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">India</h5>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <h5 class="mb-0 text-end">625</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-india"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-danger" width="32" height="32"
                                                        fill="blue" style="width:10px">
                                                        <use
                                                            xlink:href="{{ asset('mazer/dist/assets/static/images/bootstrap-icons.svg#circle-fill') }}" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <h5 class="mb-0 text-end">1025</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-indonesia"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-12 ">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Task</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Employee</th>
                                                        <th>Detail</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($task as $task)
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img
                                                                        src="https://ui-avatars.com/api/?name={{ $task->employee->fullname }}&background=random">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">{{ $task->employee->fullname }}</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">{{ $task->title }}</p>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">
                                                                 @if ($task->status == 'pending')
                                                                 <span class="badge bg-warning text-white"> {{ ucfirst($task->status) }}</span>
                                                                 @elseif ($task->status == 'done')
                                                                 <span class="badge bg-success text-white"> {{ ucfirst($task->status) }}</span>
                                                                 @else
                                                                 <span class="badge bg-info text-white"> {{ ucfirst($task->status) }}</span>
                                                                 @endif
                                                               
                                                            </p>
                                                        </td>
                                                    </tr> 
                                                    @endforeach                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('mazer/dist/assets/compiled/jpg/1.jpg') }}"
                                            alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">{{ auth()->user()->name }}</h5>
                                        <h6 class="text-muted mb-0">{{ auth()->user()->email }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Latest Add Employee</h4>
                            </div>
                            <div class="card-content pb-4">
                                @foreach ($employeeLatest as $e )
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="https://ui-avatars.com/api/?name={{ $e->fullname }}&background=random">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">{{ $e->fullname }}</h5>
                                        <h6 class="text-muted mb-0">{{ $e->email }}</h6>
                                    </div>
                                </div>                                    
                                @endforeach
                            </div>
                        </div>

                        {{-- <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div> --}}

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
        </div>
    {{-- </div> --}}
    @endsection

