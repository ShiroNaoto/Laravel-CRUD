<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Users</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ ('/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ ('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ ('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ ('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ ('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ ('/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ ('/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ ('/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ ('/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ ('/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ticketing Service</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ ('/dist/img/user9.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
         @auth
            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        @else
            <!-- Display some default content or nothing if needed -->
        @endauth
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href="{{ route('admin.supticket')}}" class="nav-link">
            <i class="fas fa-ticket-alt"></i>
              <p>
                Support Tickets
              </p>
            </a>
            <li class="nav-item">
            <a href="{{ route('admin.compticket')}}" class="nav-link">
            <i class="fas fa-user-check"></i>
              <p>
                Completed Tickets
              </p>
            </a>
            
          <li class="nav-header">Admin Page</li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="fas fa-users"></i>
              <p> Manage Users </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.divtable') }}" class="nav-link">
              <i class="fas fa-object-group"></i>
              <p> Manage Division </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" id="logout-button" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p> Sign out </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User lists</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <div class="breadcrumb float-sm-right">
          <button type="button" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#modal-primary"><i class="fa fa-plus-circle mr-1"></i>Create User</button>
          </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!--Data Tables-->
        <div class="card-tools">
        </div>
        <div class="card-body">
                <table id="table1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Division</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>

                  <tbody>
                  @foreach($users as $user)
                    <tr>
                        <td class="text-center sorting_1"><span class="right badge p-2 badge-success">{{ $user->acctype }}</span></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        @if($user->division)
                            {{ $user->division->name}}
                        @else
                            <span class="text-warning">Division no longer exists.</span>
                        @endif
                        </td>
                        <td>{{ $user->created_at->format('F d, Y') }}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-success">Action</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" data-toggle="modal" data-target="#updateUser{{$user->id}}" >Update</a>
                           <a class="dropdown-item" data-toggle="modal" data-target="#destroyUser{{$user->id}}" >Delete</a>
                  </div>
                        </td>
                    </tr>
                 @endforeach
                 </tbody>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ ('/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ ('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ ('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ ('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ ('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ ('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ ('/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ ('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ ('/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ ('/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ ('/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ ('/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ ('/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ ('/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ ('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ ('/dist/js/adminlte.js') }}"></script>

<script>
    $(document).ready(function() {
        // Add a click event listener to the logout button
        $("#logout-button").on("click", function(e) {
            e.preventDefault(); // Prevent the default behavior (e.g., following the link)

            // Perform the logout action here
            // You may want to make an AJAX request to the logout route or redirect to the logout page

            // For example, if using Laravel, you can make an AJAX request to the logout route
            $.ajax({
                url: "{{ route('logout') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response) {
                    // Handle the success response (e.g., redirect to the login page)
                    window.location.href = "{{ route('home') }}";
                },
                error: function(xhr) {
                    // Handle the error response
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<!-- DataTable Search script -->
<script>
  $(function () {
    $("#table1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
    });
  });
</script>
<!-- DataTable Search script END-->

<!--Create User Modal-->

<div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
          <form method="post" action="{{ route('addUser') }}">
               @csrf
            <div class="modal-header">
              <h4 class="modal-title">Create User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

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
                  <option selected disabled>Select Role</option>
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
              <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light">Save changes</button>
              </div>
            </div>
          </div>
     </div>
</div>
             </form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
     <!--Create User Modal END-->

<!--Create Update Modal-->
@foreach($users as $user)

<div class="modal fade" id="updateUser{{$user->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
          <form method="post" action="{{ route('updateUser') }}">
               @csrf  
          <input type="hidden" name="id" value="{{ $user->id }}">
          
            <div class="modal-header">
              <h4 class="modal-title">Update User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="input-group mb-3">
              
              <input type="text" name="name" class="form-control" placeholder="Full name" value="{{$user->name}}" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
            </div>

            <div class="input-group mb-3">
              <input type="text" name="username" class="form-control" placeholder="Username" value="{{$user->username}}" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
            </div>

            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email" value="{{$user->email}}" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
            </div>

            <div class="input-group mb-2">
                <select name="acctype" id="acctype" class="form-control custom-select" required >
                  <option selected>{{$user->acctype}}</option>
                  <option value="user">User Level</option>
                  <option value="admin">Admin Level</option>
                </select>
            </div>

            <div class="input-group mb-2">
                <select name="division_id" id="division_id" class="form-control custom-select" required>
                @if($user->division)
                  <option value="{{ $user->division->id }}" selected>{{ $user->division->name }}</option>
                @else
                  <option value="" selected disabled>Select Division</option>
                @endif

                  @foreach($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                  @endforeach
                  </select>
            </div>

            <div class="input-group mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Enter New Password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
              </div>

              <div class="input-group mb-3">
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Retype New Password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
              </div>
              <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" wire:click="registerUpdate" class="btn btn-outline-light" data-dismiss="modal">Save changes</button>
              </div>
            </div>
          </div>
     </div>
</div>
             </form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach
     <!--Create Update Modal END-->

<!--Delete Function Modal-->
@foreach($users as $user)

<div class="modal fade" id="destroyUser{{$user->id}}">
    <div class="modal-dialog">
    <form method="POST" action="{{ route('destroyUser')}}">
               @csrf
               @method('DELETE')
               <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Delete User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the user: {{ $user->name }}?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-outline-light">Delete</button>
            </div>
        </div>
      </form>
    </div>
</div>
@endforeach
  <!--Delete User Modal END-->

<script>
    // Display SweetAlert for success or error messages
    $(document).ready(function () {
        @if(session()->has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                html: '<span style="color: white;">{{ session('success') }}</span>',
                timer: 1500, // Set the timer to 1500 milliseconds (1.5 seconds)
                showConfirmButton: false, // Hide the "OK" button
            });
        @endif

        @if($errors->any())
            // Display error message
            Swal.fire({
                icon: 'error',
                title: 'Error',
                html: '<span style="color: white;">{!! implode("<br>", $errors->all()) !!}</span>'
            });
        @endif
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