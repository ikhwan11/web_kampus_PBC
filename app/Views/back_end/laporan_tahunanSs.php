<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Laporan Tahunan</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin_lapTahunan">Laporan Tahunan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Screenshoot</li>
                </ol>
            </nav>
        </div>

        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="/admin_laporanTahunan/edit_ss/<?= $lap_data['id_lap']; ?>" class="btn btn-warning mb-3">Edit</a>
                    <?= session()->get('pesan'); ?>
                    <h3>Tambah Screenshot Laporan:</h3>
                    <form class="form-sample" method="POST" action="/admin_lapTahunan/create_ss" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Nama Gambar</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="id_lap" value="<?= $lap_data['id_lap']; ?>">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_ss')) ? 'is-invalid' : ''; ?>" name="nama_ss" autofocus value="<?= old('nama_ss'); ?>" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_ss'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <img src="/assets/img/default.png" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label">Screenshot:</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('foto'); ?>
                                    </div>
                                    <label class="custom-file-label foto-label" for="foto">Tambah Screenshoot</label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>