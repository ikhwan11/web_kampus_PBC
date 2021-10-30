<?= $this->extend('layout/admin_main'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Detail User</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard/">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin_user/">Kelola User</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> detail </li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <img src="/assets/img/dosen/1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Imam Ozali</h3>
                        <p class="card-description text-danger"> Kaprodi Seni Kuliner</p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>Tanggal lahir</td>
                                        <td>:</td>
                                        <td>27 Agustus 1976</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Informasi Tambahan</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>Menikah</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="my-3">
                            <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus data </a>
                            <a href="/admin_user/edit/" class="btn btn-warning"><i class="fa fa-eye"></i> Edit data </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>