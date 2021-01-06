<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <img src="<?php echo base_url('assets/img/logo_itenas.png'); ?>" width="40px">

    <title><?php echo $title ?></title>

    <link href="<?= base_url() ?>assets/dist/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/plugin/sweetalert/sweetalert2.css">

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- <img src="<?php echo base_url(''); ?>" width="40px"> -->
        <a class="navbar-brand" href="dashboard">Tugas Akhir</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button></a><!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= site_url('logout') ?>">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="<?= site_url('admin') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>Arkademy
                        </a>

                        <!-- <div class="sb-sidenav-menu-heading">MASTER DATA</div> -->
                        
                        <a class="nav-link" href="<?= site_url('produk') ?>">
                            <div class="sb-nav-link-icon"><i class="fa fa-tasks"></i></div>
                            Produk
                        </a>
                        <!-- <a class="nav-link" href="<?= site_url('alumni') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Alumni
                        </a>
                        <a class="nav-link" href="<?= base_url('kuisioner') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Kuisioner
                        </a>
                        <a class="nav-link" href="<?= base_url('lowongan') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Lowongan
                        </a> -->
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= $this->session->userdata('nama_lengkap') ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4"><?= $title ?></h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><?= $menu ?></li>
                    </ol>

                    <?= $contents ?>

            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Archarios Lazaretto 2019</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/dist/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/dist/assets/demo/chart-area-demo.js"></script>
    <script src="<?= base_url() ?>assets/dist/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/dist/assets/demo/datatables-demo.js"></script>
    <script src="<?= base_url() ?>assets/dist/plugin/jquery.validate/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/dist/plugin/sweetalert/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/dist/js/chart/chart-page-init.js"></script>
    <?php if ($this->session->flashdata('login')) : ?>
        <script>
            Swal.fire(
                'Login!',
                'Selamat Datang.',
                'success'
            )
        </script>
    <?php endif; ?>
</body>

</html>