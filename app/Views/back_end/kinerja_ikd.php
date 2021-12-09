<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">Indeks Kepuasan Dosen</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Indeks Kepuasan Dosen </li>
                </ol>
            </nav>
        </div>

        <!-- data -->
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-2">Dokumen</h4>

                        <?= session()->get('pesan'); ?>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dokumen</th>
                                        <th>Download</th>
                                    </tr>
                                </thead>
                                <?php $no = 1;
                                foreach ($dokumen_data as $dok) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $dok['nama_dk']; ?></td>
                                            <td>
                                                <a href="/admin_spmi/download_dokumen/<?= $dok['id_dk']; ?>" class="btn btn-sm btn-warning">Download</a>
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