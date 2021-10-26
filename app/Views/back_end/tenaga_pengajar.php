<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">Kelola data tenaga pengajar (Dosen)</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Tenaga Pengajar </li>
                </ol>
            </nav>
        </div>

        <!-- data -->
        <div class="row">
            <div class="container">
                <a href="/admin_tenagapengajar/create/" class="btn btn-dark my-2"><i class="fa fa-plus"></i> Tambah Data Dosen</a>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kelola Data Tenaga Pengajar</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img src="/assets/img/dosen/1.jpg" alt="image" />
                                        </td>
                                        <td>Imam Ozali</td>
                                        <td>Jakarta Selatan</td>
                                        <td>Kaprodi Seni Kuliner</td>
                                        <td>
                                            <a href="/admin_tenagapengajar/detail/" class="btn btn-sm btn-warning">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>