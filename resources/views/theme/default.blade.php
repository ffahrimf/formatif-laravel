<!DOCTYPE html>
<html lang="en">


<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>eDosen</title>


    <!-- Custom fonts for this template-->
    <link href="{!! asset('vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Custom styles for this template-->
    <link href="{!! asset('css/sb-admin-2.min.css') !!}" rel="stylesheet">
<link rel="shortcut icon" href="img/male-teacher.png" type="image/x-icon">

</head>


<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Sidebar -->
        @include('theme.sidebar')
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                @include('theme.header')
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> -->


                    <!-- Content Row -->
                    @yield('content')


                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->


        </div>
        <!-- End of Content Wrapper -->


    </div>
    <!-- End of Page Wrapper -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to log out?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="{!! asset('vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>


    <!-- Core plugin JavaScript-->
    <script src="{!! asset('vendor/jquery-easing/jquery.easing.min.js') !!}"></script>


    <!-- Custom scripts for all pages-->
    <script src="{!! asset('js/sb-admin-2.min.js') !!}"></script>


    <!-- Page level plugins -->
    <script src="{!! asset('vendor/chart.js/Chart.min.js') !!}"></script>


    <!-- Page level custom scripts -->
    <script src="{!! asset('js/demo/chart-area-demo.js') !!}"></script>
    <script src="{!! asset('js/demo/chart-pie-demo.js') !!}"></script>

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/dist/js/adminlte.min.js"></script>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(function() {
            var url = window.location;
            // for single sidebar menu
            $('ul.nav-sidebar a').filter(function() {
                return this.href == url;
            }).addClass('active');

            // for sidebar menu and treeview
            $('ul.nav-treeview a').filter(function() {
                    return this.href == url;
                }).parentsUntil(".nav-sidebar > .nav-treeview")
                .css({
                    'display': 'block'
                })
                .addClass('menu-open').prev('a')
                .addClass('active');
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                responsive: true
            });

        });
    </script>

    <script type="text/javascript">
        $(document).on('click', '#btn-delete', function(e) {
            e.preventDefault();
            var form = $(this).closest("form");
            Swal.fire({
                title: 'Are you sure?',
                text: "You will not be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#7367f0',
                cancelButtonColor: '#82868b',
                confirmButtonText: 'Yes, delete!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });
    </script>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <script>
        $(".log-out").on('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#7367f0',
                cancelButtonColor: '#82868b',
                confirmButtonText: 'Yes, Log Out !'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#logout-form').submit();
                }
            })
        });
    </script>



</body>


</html>
