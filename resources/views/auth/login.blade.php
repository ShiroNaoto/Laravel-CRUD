<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-success">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Ticketing</b> System</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Your Form -->
                <form method="POST" action="{{ route('login') }}" id="formLogin">
                    @csrf
                    <!-- Email/Username -->
                    <div class="input-group mb-3">
                        <input id="input_type" type="text" name="input_type" class="form-control" placeholder="Email or Username" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Remember Me -->
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember_me" name="remember" class="form-check-input">
                            <label for="remember_me" class="form-check-label">Remember Me</label>
                        </div>
                    </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block">Sign In</button>
                        </div>
                    </div>
                </form>

                <!-- Additional Links -->
                <p class="mb-1">
                    <a href="{{ route('password.request')}}">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('auth.register')}}" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

<script>
    $(document).ready(function () {
        // Check for errors
        @if($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Error',
                html: '<span style="color: black;">{{ $errors->first() }}</span>',
            });
        @endif

        // Check for success message and redirect to home
        @if(session()->has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                html: '<span style="color: white;">{{ session('success') }}</span>',
                timer: 1500,
                showConfirmButton: false,
                onClose: function() {
                    window.location.href = "{{ route('home') }}";
                }
            });
        @endif
    });
</script>

</body>

</html>
