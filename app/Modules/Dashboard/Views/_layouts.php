<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('uploaded_file/settings/favicon.png') ?>">
    <title id="main_title"><?= get_title() ?></title>

    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?= base_url("modules_assets/dashboard/css/simplebar.css") ?>">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?= base_url("modules_assets/dashboard/css/feather.css") ?>">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?= base_url("modules_assets/dashboard/css/daterangepicker.css") ?>">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?= base_url("modules_assets/dashboard/css/app-light.css") ?>" id="lightTheme" disabled>

    <link rel="stylesheet" href="<?= base_url("modules_assets/dashboard/css/app-dark.css") ?>" id="darkTheme">

    <!-- custom css  -->
    <link rel="stylesheet" href="<?= base_url("modules_assets/dashboard/css/custom.css") ?>">

    <?= $this->renderSection('css'); ?>
</head>

<body class="vertical dark">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                        <span class="fe fe-grid fe-16"></span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2">
                            <img src="<?= base_url('modules_assets/dashboard/assets/avatars/user.png') ?>" class="avatar-img rounded-circle">
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <p class="dropdown-item disabled"><?= getUsername() ?></p>
                        <a class="dropdown-item" href="#">Ubah Password</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <?= $this->include(dashboard_view("_menu")) ?>

        <main role="main" class="main-content">

            <?= $this->renderSection("content") ?>


            <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body px-5">
                            <div class="row align-items-center">
                                <div class="col-6 text-center">
                                    <div class="squircle bg-success justify-content-center">
                                        <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Control area</p>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="squircle bg-primary justify-content-center">
                                        <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Activity</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-6 text-center">
                                    <div class="squircle bg-primary justify-content-center">
                                        <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Droplet</p>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="squircle bg-primary justify-content-center">
                                        <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Upload</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-6 text-center">
                                    <div class="squircle bg-primary justify-content-center">
                                        <i class="fe fe-users fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Users</p>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="squircle bg-primary justify-content-center">
                                        <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Settings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="<?= base_url("modules_assets/dashboard/js/jquery.min.js") ?>"></script>
    <script src="<?= base_url("modules_assets/dashboard/js/popper.min.js") ?>"></script>
    <script src="<?= base_url("modules_assets/dashboard/js/moment.min.js") ?>"></script>
    <script src="<?= base_url("modules_assets/dashboard/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("modules_assets/dashboard/js/simplebar.min.js") ?>"></script>
    <script src="<?= base_url("modules_assets/dashboard/js/daterangepicker.js") ?>"></script>
    <script src="<?= base_url("modules_assets/dashboard/js/jquery.stickOnScroll.js") ?>"></script>
    <script src="<?= base_url("modules_assets/dashboard/js/tinycolor-min.js") ?>"></script>
    <script src="<?= base_url("modules_assets/dashboard/js/config.js") ?>"></script>
    <script src="<?= base_url("modules_assets/dashboard/js/apps.js") ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?= $this->renderSection('js'); ?>

    <script>
        $("#messages").fadeTo(2000, 500).slideUp(500, function() {
            $("#messages").slideUp(500);
        });

        <?php if (session('success')) : ?>
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: '<?= session('success') ?>',
                showConfirmButton: false,
                timer: 1500
            })
        <?php endif; ?>
        <?php if (session('error')) : ?>
            Swal.fire({
                icon: 'error',
                title: '<?= session('error') ?>',
                showConfirmButton: false,
                timer: 1500
            })
        <?php endif; ?>
    </script>

</body>

</html>