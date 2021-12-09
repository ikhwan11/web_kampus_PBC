<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard PBC</title>
    <link rel="stylesheet" href="/assets/admin/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/assets/admin/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="/assets/admin/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="/assets/admin/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="/assets/admin/css/style.css" />
    <link rel="shortcut icon" href="/assets/img/icon_pbc.png" />
</head>

<body>

    <?= $this->include('layout/admin_sidebar'); ?>
    <?= $this->include('layout/admin_topbar'); ?>
    <?= $this->renderSection('content'); ?>


    </div>
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a> from Bootstrapdash.com</span>
        </div>
    </footer>
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
    <script>
        function previewImg() {
            const foto = document.querySelector('#foto');
            const fotoLabel = document.querySelector('.foto-label');
            const imgPreview = document.querySelector('.img-preview');

            fotoLabel.textContent = foto.files[0].name;

            const fileFoto = new FileReader();
            fileFoto.readAsDataURL(foto.files[0]);

            fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        function previewDoc() {
            const foto = document.querySelector('#dokumen');
            const fotoLabel = document.querySelector('.dokumen-label');

            fotoLabel.textContent = foto.files[0].name;

            const fileFoto = new FileReader();
            fileFoto.readAsDataURL(foto.files[0]);

            fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
    <!-- End custom js for this page -->
</body>

</html>