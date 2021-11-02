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
                <a href="/admin_tenagapengajar/create" class="btn btn-dark my-2"><i class="fa fa-plus"></i> Tambah Data Dosen</a>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kelola Data Tenaga Pengajar</h4>
                        <?= session()->get('pesan'); ?>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $no = 1;
                                foreach ($dosen_data as $dosen) : ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $no++; ?>
                                            </td>
                                            <td><?= $dosen['nama']; ?></td>
                                            <td><?= $dosen['alamat_asal']; ?></td>
                                            <?php if ($dosen['jabatan'] == 1) { ?>
                                                <td>Kaprodi</td>
                                            <?php } else { ?>
                                                <td>Dosen</td>
                                            <?php } ?>

                                            <td>
                                                <a href="/admin_tenagapengajar/detail/<?= $dosen['id_pengajar']; ?>" class="btn btn-sm btn-warning">Detail</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>