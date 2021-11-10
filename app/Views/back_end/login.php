<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>
    <link rel="stylesheet" href="/assets/admin/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/assets/admin/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="/assets/admin/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="/assets/admin/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="/assets/admin/css/style.css" />
    <link rel="stylesheet" href="/assets/admin/css/login_style.css" />
    <link rel="shortcut icon" href="/assets/img/icon_pbc.png" />
</head>

<body>

    <section class="body">
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper">
                <div class="main-panel">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Login Form</h4>
                                    <form action="/auth/login_act" method="POST">
                                        <?= session()->get('pesan'); ?>
                                        <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username" name="username" id="username" autofocus autocomplete="off" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                                        <a type="button" href="/" class="btn btn-warning">Cancel</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assets/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets/admin/vendors/chart.js/Chart.min.js"></script>
    <script src="/assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/admin/vendors/flot/jquery.flot.js"></script>
    <script src="/assets/admin/vendors/flot/jquery.flot.resize.js"></script>
    <script src="/assets/admin/vendors/flot/jquery.flot.categories.js"></script>
    <script src="/assets/admin/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="/assets/admin/vendors/flot/jquery.flot.stack.js"></script>
    <script src="/assets/admin/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/admin/js/off-canvas.js"></script>
    <script src="/assets/admin/js/hoverable-collapse.js"></script>
    <script src="/assets/admin/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/assets/admin/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>