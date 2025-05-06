<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- script untuk tampil di NGROK --}}
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    {{-- end script untuk tampil di NGROK --}}
    <title>Forgot Password Page</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-7/assets/css/login-7.css">
</head>

<body>
    <section class="bg-light p-3 p-md-4 p-xl-5 min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card border border-light-subtle rounded-4 shadow-sm">
                        <div class="card-body p-3 p-md-4 p-xl-5">

                            <div class="text-center mb-4">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('HRIS-Logo.png') }}" alt="Logo" width="100"
                                        height="55">
                                </a>
                            </div>

                            <h4 class="text-center mb-4">Forgot your password?</h4>
                            <p class="text-center text-muted mb-4">
                                No problem. Just let us know your email address and we will email you a password reset
                                link that will allow you to choose a new one.
                            </p>

                            <!-- Session Status -->
                            @if (session('status'))
                                <div class="alert alert-success mb-4" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="name@example.com"
                                        value="{{ old('email') }}" required autofocus>
                                    <label for="email">Email address</label>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-grid mb-3">
                                    <button type="submit" class="btn btn-primary bsb-btn-xl">
                                        Email Password Reset Link
                                    </button>
                                </div>

                                <div class="text-center">
                                    <a href="{{ route('login') }}" class="link-secondary text-decoration-none">Back to
                                        login</a>
                                </div>
                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
