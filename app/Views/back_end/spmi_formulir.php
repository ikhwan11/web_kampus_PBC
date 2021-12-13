<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Formulir PBC</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">SPMI</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dokumen Formulir</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <?= session()->get('pesan'); ?>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Formulir</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <?php $no = 1;
                            foreach ($formulir_data as $formulir) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $formulir['nama_dk']; ?></td>
                                        <td>
                                            <a href="/admin_spmi/download_dokumen/<?= $formulir['id_dk']; ?>" class="btn btn-sm btn-dark">Download</a>
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

<?= $this->endSection(); ?>