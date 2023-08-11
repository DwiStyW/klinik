<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dr Sugi | Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../dist/img/favicon.ico">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="shortcut icon" type="image/x-icon" href="../../dist/img/favicon.ico">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>dr</b>Sugi</a>
                <h3>Clinic Aesthetic Center</h3>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan masukkan username dan password</p>
                <?php 
                  error_reporting(0);
                  $message = $_GET['error']; 
                ?>
                <div class="but_list">
                    <?php if ($message == 1) { ?>
                    <div class="alert alert-danger" role="alert">Username/Password salah, silahkan coba lagi.</div>
                    <?php } else if ($message == 2){ ?>
                    <div class="alert alert-danger" role="alert">Anda belum login, silahkan login.</div>
                    <?php } else if ($message == 3){ ?>
                    <div class="alert alert-success" role="alert">Anda berhasil logout.</div>
                    <?php } else if ($message == 4){ ?>
                    <div class="alert alert-success" role="alert">
                        <center>Username/Password berhasil diganti.<br /> Silahkan login ulang.<center>
                    </div>
                    <?php } ?>
                    <form action="../control/auth.php" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <br />
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->
        <div class="footer-copyright-area">
            <p>
                <center>Copyright &copy; <?php echo date("Y")?>. All rights reserved.</center>
            </p>
        </div>
        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>