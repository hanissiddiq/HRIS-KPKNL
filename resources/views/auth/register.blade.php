<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- script untuk tampil di NGROK --}}
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    {{-- end script untuk tampil di NGROK --}}
    <title>Register Page</title>
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
                            <h4 class="text-center mb-4">Create your account</h4>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" id="name" placeholder="Name" value="{{ old('name') }}"
                                        required autofocus>
                                    <label for="name">Name</label>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="name@example.com"
                                        value="{{ old('email') }}" required>
                                    <label for="email">Email</label>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" id="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-floating mb-4">
                                    <input type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" id="password_confirmation"
                                        placeholder="Confirm Password" required>
                                    <label for="password_confirmation">Confirm Password</label>
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-grid mb-4">
                                    <button class="btn btn-primary bsb-btn-xl" type="submit">Register</button>
                                </div>

                                <div class="text-center">
                                    <a href="{{ route('login') }}" class="link-secondary text-decoration-none">Already
                                        registered?</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
