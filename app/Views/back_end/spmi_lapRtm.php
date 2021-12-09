<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Laporan RTM</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">SPMI</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dokumen laporan RTM</li>
                </ol>
            </nav>
        </div>

        <h3>Periode</h3>
        <div class="row">
            <?php foreach ($rtm_data as $rtm) : ?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <h4><?= $rtm['tahun_akademik']; ?></h4>
                                </div>
                                <a href="/admin_spmi/download_dokumen/<?= $rtm['id_dk']; ?>" class="btn btn-dark"><i class="mdi mdi-download "></i> Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>