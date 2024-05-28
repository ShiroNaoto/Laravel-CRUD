<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>

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
        <a href="#" class="nav-link">Home</a>
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
    <a href="#" class="brand-link">
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href=" {{ route('admin.supticket')}}" class="nav-link">
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
            <a href="{{ route('admin.usertable') }}" class="nav-link">
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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tickets Total</span>
                <span class="info-box-number">
                {{ $ticketCount }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tickets Resolved</span>
                <span class="info-box-number">{{ $resolvedTickets }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-truck-loading"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tickets Processing</span>
                <span class="info-box-number">{{ $processingTickets }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-pause"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tickets Pending</span>
                <span class="info-box-number">{{ $pendingTickets }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

<div class="card">
          <div class="card-header">
                <h3 class="card-title"><i class="fas fa-ticket-alt mt-2"></i> Tickets Requests</h3>
              <div class="card-tools">

                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#pending" data-toggle="tab">Ticket Pending | Process</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#process" data-toggle="tab">Request Resolved</a>
                    </li>
                  </ul>

               </div>
            </div>

  <div class="tab-content p-0">
    <div class="chart tab-pane active" id="pending">
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
                      @if(in_array($ticket->state, ['Pending', 'Processing']))
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
                            <a class="dropdown-item" data-toggle="modal" data-target="#updateTicket{{$ticket->id}}" >Update</a>
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
          </div>

      <div class="chart tab-pane" id="process">
         <div class="card-body">
                <table id="table2" class="table table-bordered table-hover">
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
                      @if($ticket->state === 'Resolved')
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
                            <a class="dropdown-item" data-toggle="modal" data-target="#updateTicket{{$ticket->id}}" >Update</a>
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
       </div>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.js')}}"></script>

<!--Log out Script-->
<script>
    $(document).ready(function() {
        // Add a click event listener to the logout button
        $("#logout-button").on("click", function(e) {
            e.preventDefault(); // Prevent the default behavior (e.g., following the link)

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
<!--Log out Script END-->

<!-- Page specific script -->
<script>
  $(function () {
    $("#table1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
    });
  });

  $(function () {
    $("#table2").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
    });
  });
</script>
<!-- Page specific script END-->

<!-- Update Function Modal-->
@foreach($tickets as $ticket)
    <div class="modal fade" id="updateTicket{{ $ticket->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('updateAdminTickethome') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $ticket->id }}">

                    <div class="modal-header">
                        <h4 class="modal-title">Edit Ticket</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="col-lg-5">
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-charging-station"></i></span>
                          </div>
                            <select name="state" id="state" class="form-control custom-select" required>
                                <option selected>{{ $ticket->state }}</option>
                                <option value="Pending">Pending</option>
                                <option value="Processing">Processing</option>
                                <option value="Resolved">Resolved</option>
                            </select>
                        </div>
                        </div>

                        <div class="col-lg-12">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-quote-right"></i></span>
                            </div>
                            <textarea class="form-control" name="remark" placeholder="Enter Remark">{{ $ticket->remark }}</textarea>
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
                            <textarea class="form-control" name="description" readonly>{{ $ticket->description }}</textarea>
                        </div>
                        </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
<!-- Update Function Modal-->

<!--Delete Function Modal-->
@foreach($tickets as $ticket)

<div class="modal fade" id="destroyTicket{{$ticket->id}}">
    <div class="modal-dialog">
    <form method="POST" action="{{ route('destroyAdminTickethome')}}">
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
                <p>Are you sure you want to delete {{ $ticket->staffname }}'s Ticket Request?</p>
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
