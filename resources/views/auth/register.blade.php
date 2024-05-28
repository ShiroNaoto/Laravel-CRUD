
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Ticketing</b> Service</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="POST" action="{{ route('auth.register') }}">
        @csrf

            <div class="input-group mb-3"> 
              <input type="text" name="name" class="form-control" placeholder="Full name" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
            </div>

            <div class="input-group mb-3">
              <input type="text" name="username" class="form-control" placeholder="Username" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
            </div>

            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
            </div>

            <div class="input-group mb-2">
                <select name="acctype" id="acctype" class="form-control custom-select" required>
                  <option value="" selected disabled>Select Role</option>
                  <option value="user">User Level</option>
                  <option value="admin">Admin Level</option>
                </select>
            </div>

            <div class="input-group mb-2">
              <select name="division_id" id="division_id" class="form-control custom-select" required>
              <option value="" disabled selected>Select Division</option>
              @foreach($divisions as $division)
                <option value="{{ $division->id }}">{{ $division->name }}</option>
              @endforeach
              </select>
            </div>

            <div class="input-group mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
              </div>

              <div class="input-group mb-3">
                  <input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control" placeholder="Retype Password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
              </div>

              <div class="row">
    <div class="col-8">
        <div class="icheck-primary">
            <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
            <label for="agreeTerms">
                I agree to the <a href="#">terms</a>
            </label>
        </div>
    </div>
    <div class="col-4">
        <button type="submit" id="registerButton" class="btn btn-success btn-block" disabled>Register</button>
    </div>
</div>

      <a href="{{ route('login')}}" class="text-center">I already have a membership</a>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<script>
    $(document).ready(function () {
        // Check if there are any errors
        @if($errors->any())
            // Display error message
            Swal.fire({
                icon: 'error',
                title: 'Error',
                html: '{!! implode("<br>", $errors->all()) !!}',
            });
            
            // Retrieve and populate form data
            var formData = localStorage.getItem('formData');
            if (formData) {
                formData = JSON.parse(formData);
                $.each(formData, function(name, value) {
                    $('[name="' + name + '"]').val(value);
                });
            }
        @endif
        
        // Listen for form submission
        $('form').submit(function() {
            // Store form data in local storage
            var formData = $(this).serializeArray();
            var data = {};
            $.each(formData, function(index, obj){
                data[obj.name] = obj.value;
            });
            localStorage.setItem('formData', JSON.stringify(data));
        });
        
        // Clear form data from local storage on successful submission
        @if(session()->has('success'))
            localStorage.removeItem('formData');
        @endif
        
        // Display success message
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


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const agreeTermsCheckbox = document.getElementById('agreeTerms');
        const registerButton = document.getElementById('registerButton');

        // Add event listener to the checkbox
        agreeTermsCheckbox.addEventListener('change', function () {
            // Toggle disabled attribute of register button based on checkbox checked state
            registerButton.disabled = !this.checked;
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#password_confirmation').on('input', function () {
            var password = $('#password').val();
            var confirmPassword = $(this).val();

            if (password === confirmPassword) {
                // Passwords match, remove any previous error styling
                $(this).removeClass('is-invalid');
            } else {
                // Passwords don't match, add error styling
                $(this).addClass('is-invalid');
            }
        });
    });
</script>

</body>
</html>
