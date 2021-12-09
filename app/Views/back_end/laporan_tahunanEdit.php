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
                    <li class="breadcrumb-item active" aria-current="page">Edit Laporan Tahunan</li>
                </ol>
            </nav>
        </div>

        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form class="form-sample" method="POST" action="/admin_lapTahunan/edit_act/<?= $lap_data['id_lap']; ?>" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Laporan</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="id_lap" value="<?= $lap_data['id_lap']; ?>">
                                        <input type="hidden" name="creator" value="<?= (session()->get('role') == 1) ? 'Adminstrator' : 'Digital Marketing'; ?>">

                                        <input type="text" class="form-control <?= ($validation->hasError('nama_lap')) ? 'is-invalid' : ''; ?>" name="nama_lap" autofocus value="<?= (old('nama_lap')) ? old('nama_lap') : $lap_data['nama_lap']; ?>" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_lap'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <img src="/assets/img/lapTahunan/<?= $lap_data['cover']; ?>" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label">Gambar Cover:</label>
                                <div class="custom-file">
                                    <input type="hidden" name="fotoLama" value="<?= $lap_data['cover']; ?>">

                                    <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('foto'); ?>
                                    </div>
                                    <label class="custom-file-label foto-label" for="foto"><?= $lap_data['cover']; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-form-label">Dokumen Laporan:</label>
                                <div class="custom-file">
                                    <input type="hidden" name="dokumenLama" value="<?= $lap_data['file_laporan']; ?>">

                                    <input type="file" class="custom-file-input <?= ($validation->hasError('dokumen')) ? 'is-invalid' : ''; ?>" id="dokumen" name="dokumen" onchange="previewDoc()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('dokumen'); ?>
                                    </div>
                                    <label class="custom-file-label dokumen-label" for="dokumen"><?= $lap_data['file_laporan']; ?></label>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-warning mt-3" type="button" data-toggle="collapse" data-target="#collapseParagraf" aria-expanded="false">
                            Edit Paragraf
                        </button>

                        <div class="collapse" id="collapseParagraf">
                            <div class="card card-body">
                                <div class="form-group mt-3">
                                    <label for="p-1">Paragraf</label>
                                    <textarea class="form-control" name="p_1" rows="4"><?= (old('p_1')) ? old('p_1') : $lap_data['paragraf_1']; ?></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="p-2">Paragraf</label>
                                    <textarea class="form-control" name="p_2" rows="4"><?= (old('p_1')) ? old('p_1') : $lap_data['paragraf_2']; ?></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="p-3">Paragraf</label>
                                    <textarea class="form-control" name="p_3" rows="4"><?= (old('p_1')) ? old('p_1') : $lap_data['paragraf_3']; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <button type="submit" class="btn btn-success">Update</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                    Hapus
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModal">Tunggu Sebentar!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">tidak</button>
                <form action="/admin_lapTahunan/<?= $lap_data['id_lap']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">iya</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>