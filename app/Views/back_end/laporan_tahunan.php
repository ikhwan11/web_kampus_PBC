<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Laporan Tahunan</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Laporan Tahunan</li>
                </ol>
            </nav>
        </div>

        <?php if (session()->get('role') == 1) : ?>
            <a href="/Admin_lapTahunan/create" class="btn btn-primary my-3">Tambah data laporan tahunan</a>
        <?php endif; ?>

        <?= session()->get('pesan'); ?>
        <div class="row mb-3">
            <?php $no = 1 + (6 * ($currentPage - 1));
            foreach ($lap_data as $lap) : ?>
                <div class="col-md-4">
                    <div class="card my-2" style="width: 18rem;">
                        <img class="card-img-top" src="/assets/img/lapTahunan/<?= $lap['cover']; ?>" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lap['nama_lap']; ?></h5>
                        <p class="card-text"><?= $lap['paragraf_1']; ?></p>
                        <?php if (session()->get('role') == 1) : ?>
                            <a href="/admin_lapTahunan/ss/<?= $lap['id_lap']; ?>" class="btn btn-success my-2">Tambah Screenshoot</a><br>
                            <a href="/admin_lapTahunan/edit/<?= $lap['id_lap']; ?>" class="btn btn-warning my-2">Edit</a><br>
                        <?php endif; ?>
                        <a href="/admin_lapTahunan/download/<?= $lap['id_lap']; ?>" class="btn btn-dark my-2">Download</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?= $pager->links('tb_laptahunan', 'admin_pagination'); ?>
    </div>
</div>

<?= $this->endSection(); ?>