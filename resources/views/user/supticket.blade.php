<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Support Tickets</title>

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
          <img src="{{ ('/dist/img/user10.jpg') }}" class="img-circle elevation-2" alt="User Image">
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
            <a href="#" class="nav-link active">
            <i class="fas fa-ticket-alt"></i>
              <p>
                Support Tickets
              </p>
            </a>
            <li class="nav-item">
            <a href="{{ route('user.compticket')}}" class="nav-link">
            <i class="fas fa-user-check"></i>
              <p>
                Completed Tickets
              </p>
            </a>
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
            <h1 class="m-0">Support Tickets</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <div class="breadcrumb float-sm-right">
          <button type="button" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#createTicket"><i class="fa fa-plus-circle mr-1"></i>Create Ticket</button>
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
                    <th>Status</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Division</th>
                    <th>Severity</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>

                  <tbody>
                  @foreach($tickets as $ticket)
                    @if(Auth::user()->id == $ticket->user_id)
                    <tr>
                        <td class="text-center sorting_1">
                        @switch($ticket->state)
                          @case('Pending')
                          <span class="right badge p-2 badge-danger">{{ $ticket->state }}</span>
                          @break
                        @case('Processing')
                          <span class="right badge p-2 badge-warning">{{ $ticket->state }}</span>
                          @break
                        @case('Resolved')
                          <span class="right badge p-2 badge-success">{{ $ticket->state }}</span>
                          @break
                        @default
                              <span class="right badge p-2 badge-secondary">{{ $ticket->state }}</span>
                        @endswitch
                        </td>
                        <td>{{ $ticket->staffname }}</td>
                        <td>{{ $ticket->email }}</td>
                        <td>
                        @if($ticket->divisioned)
                          {{ $ticket->divisioned->code }}
                        @else
                            <span class="text-warning">Division no longer exists.</span>
                        @endif
                        </td>
                          <td class="text-center sorting_1">
                        @switch($ticket->severity)
                          @case('Critical')
                              <span class="right badge p-2 badge-danger">{{ $ticket->severity }}</span>
                            @break
                          @case('High')
                              <span class="right badge p-2 badge-warning">{{ $ticket->severity }}</span>
                             @break
                          @case('Medium')
                              <span class="right badge p-2 badge-info">{{ $ticket->severity }}</span>
                             @break
                          @case('Low')
                              <span class="right badge p-2 badge-success">{{ $ticket->severity }}</span>
                             @break
                          @default
                              <span class="right badge p-2 badge-secondary">{{ $ticket->severity }}</span>
                        @endswitch
                        </td>
                        <td>{{ $ticket->description }}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-success">Action</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" data-toggle="modal" data-target="#viewTickets{{ $ticket->id }}" >View</a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#destroyTicket{{$ticket->id}}" >Delete</a>
                  </div>
                        </td>
                    </tr>
                   @endif
                 @endforeach
                 </tbody>
                  </thead>
                </table>
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

<!-- View Modal -->
@foreach($tickets as $ticket)

    <div class="modal fade" id="viewTickets{{ $ticket->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">View Ticket</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    <div class="col-lg-6">
                       <div class="input-group mb-2">
                            <div class="input-group-prepend">
                               <span class="input-group-text"><i class="fas fa-charging-station"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ticket->state }}" name="state" readonly>
                        </div>
                        </div>

                        <div class="col-lg-12">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-quote-right"></i></span>
                            </div>
                            <textarea class="form-control" name="remark" placeholder="No Remark" readonly>{{ $ticket->remark }}</textarea>
                        </div>
                        </div>

                        <p>Requested By:</p>

                        <div class="mb-1 row">
                        <div class="col-lg-8">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                               <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ticket->staffname }}" name="staffname" readonly>
                        </div>
                        </div>

                        <div class="col-lg-4">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                               <span class="input-group-text"><i class="fas fa-users"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ticket->divisioned ? $ticket->divisioned->code : 'N/A' }}" name="ticketdiv" readonly>
                        </div>
                        </div>

                        <div class="col-lg-12">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                               <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ticket->email }}" name="email" readonly>
                        </div>
                        </div>

                       <div class="col-lg-6">
                       <div class="input-group mb-2">
                            <div class="input-group-prepend">
                               <span class="input-group-text"><i class="fas fa-exclamation-triangle"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ticket->severity }}" name="severity" readonly>
                       </div>
                       </div>

                       <div class="col-lg-6">
                       <div class="input-group mb-2">
                            <div class="input-group-prepend">
                               <span class="input-group-text"><i class="fas fa-tv"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ticket->category }}" name="category" readonly>
                        </div>
                        </div>

                        <div class="col-lg-12">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-sticky-note"></i></span>
                            </div>
                            <textarea class="form-control" name="description" placeholder="No Description" readonly>{{ $ticket->description }}</textarea>
                        </div>
                        </div>
                        </div>
                        </div>
                        
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </div>
            </div>
        </div>
    </div>

@endforeach
<!--View Modal END-->

<!--Delete Function Modal-->
@foreach($tickets as $ticket)

<div class="modal fade" id="destroyTicket{{$ticket->id}}">
    <div class="modal-dialog">
    <form method="POST" action="{{ route('destroyTicket')}}">
               @csrf
               @method('DELETE')
               <input type="hidden" name="id" value="{{ $ticket->id }}">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Delete Ticket</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete your request?</p>
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
  <!--Delete Division Modal END-->

<!-- Create Ticket Modal -->
<div class="modal fade" id="createTicket" tabindex="-1" role="dialog" aria-labelledby="createTicketLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <form method="post" action="{{ route('addTicket') }}">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title text-white" id="createTicketLabel">Create Ticket</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

            <!--PREDETERMINED STATE-->
            <div class="input-group mb-2" style="display: none;">
                <select name="state" id="state" class="form-control custom-select" required>
                  <option selected>Pending</option>
                </select>
            </div>

            <!--PREDETERMINED HIDDEN USER ID-->
            @auth
            <div class="input-group mb-2" style="display: none;">
                <input type="text" name="user_id" class="form-control" placeholder="email" value="{{ auth()->user()->id}}" required>
                    <div class="input-group-append">
                     <div class="input-group-text">
                         <span class="fas fa-user"></span>
                     </div>
                    </div>
            </div>
            @endauth

             <!--PREDETERMINED NAME-->
            @auth
            <div class="input-group mb-2" style="display: none;">
                <input type="text" name="staffname" class="form-control" placeholder="Full name" value="{{ auth()->user()->name}}" required>
                    <div class="input-group-append">
                     <div class="input-group-text">
                         <span class="fas fa-user"></span>
                     </div>
                    </div>
            </div>
            @endauth

            <!--PREDETERMINED HIDDEN EMAIL-->
            @auth
            <div class="input-group mb-2" style="display: none;">
                <input type="text" name="email" class="form-control" placeholder="email" value="{{ auth()->user()->email}}" required>
                    <div class="input-group-append">
                     <div class="input-group-text">
                         <span class="fas fa-user"></span>
                     </div>
                    </div>
            </div>
            @endauth

            <!--PREDETERMINED HIDDEN DIVISION-->
            @auth
            <div class="input-group mb-2" style="display: none;">
                <input type="text" name="ticketdiv" class="form-control" placeholder="division" value="{{ auth()->user()->division_id}}" required>
                    <div class="input-group-append">
                     <div class="input-group-text">
                         <span class="fas fa-user"></span>
                     </div>
                    </div>
            </div>
            @endauth

            <div class="input-group mb-2">
                <select name="severity" id="severity" class="form-control custom-select" required>
                  <option selected disabled>Select Severity</option>
                  <option value="Critical">Critical</option>
                  <option value="High">High</option>
                  <option value="Medium">Medium</option>
                  <option value="Low">Low</option>
                </select>
            </div>

            <div class="input-group mb-2">
                <select name="category" id="category" class="form-control custom-select" required>
                  <option selected disabled>Select Category</option>
                  <option value="Hardware">Hardware</option>
                  <option value="Website">Website</option>
                  <option value="Network">Network</option>
                </select>
            </div>

            <div class="input-group mb-3">
              <input type="text" name="description" class="form-control" placeholder="Enter Request" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-briefcase"></span>
                  </div>
                </div>
            </div>

              <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Create Ticket Modal END-->

<script>
    // Display SweetAlert if the success message is present
    $(document).ready(function () {
        @if(session()->has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                html: '<span style="color: white;">{{ session('success') }}</span>',
                timer: 1500, // Set the timer to 3000 milliseconds (3 seconds)
                showConfirmButton: false, // Hide the "OK" button
            });
        @endif
    });
</script>

  </body>
  </html>