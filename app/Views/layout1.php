<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/transition.min.css') ?>">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/plugins/datatables-bs4/css/dataTables.bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/dist/css/adminlte.min.css') ?>">
    <script src="<?= base_url('bootstrap/plugins/alert.js') ?>"></script>
    <script src="<?= base_url('transition.min.js') ?>"></script>
</head>

<body class="hold-transition sidebar-mini">
    <?= $this->include('layout') ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->


    <!-- Main content -->
    <section class="content">

        <?= $this->renderSection('content') ?>

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('bootstrap/plugins/jquery/jquery.min.js') ?>">
    </script>
    <!--Bootstrap 4-->
    <script src="<?= base_url('bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>">
    </script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('bootstrap/dist/js/adminlte.min.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('bootstrap/dist/js/demo.js') ?>"></script>
</body>

</html>