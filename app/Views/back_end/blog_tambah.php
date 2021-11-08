<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Tambah Blog/Artikel</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin_blog">Blog/Artikel</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Tambah Blog/Artikel </li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="/admin_blog/create_act" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="judul">Judul Artikel</label>
                                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" value="<?= old('judul'); ?>" autocomplete="off" />
                                <div class="invalid-feedback">
                                    <?= $validation->getError('judul'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" />
                            </div>
                            <div class="form-group">
                                <label for="admin">Nama Admin</label>
                                <input type="text" class="form-control <?= ($validation->hasError('admin')) ? 'is-invalid' : ''; ?>" name="admin" value="<?= (old('admin')) ? old('admin') : session()->get('nama'); ?>" />
                                <div class="invalid-feedback">
                                    <?= $validation->getError('admin'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select class="form-control" name="kategori">
                                    <option value="event">event</option>
                                    <option value="mahasiswa">mahasiswa</option>
                                    <option value="wisata">wisata</option>
                                    <option value="kuliner">kuliner</option>
                                    <option value="perhotelan">perhotelan</option>
                                    <option value="prodi">prodi</option>
                                    <option value="berita">berita</option>
                                    <option value="prestasi">prestasi</option>
                                    <option value="olahraga">olahraga</option>
                                    <option value="fotografi">fotografi</option>
                                </select>
                            </div>


                            <div class="row">
                                <div class="col-md-2">
                                    <img src="/assets/img/default.png" class="img-thumbnail img-preview">
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 col-form-label">banner :</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="banner" name="banner" onchange="previewBanner()">
                                        <label class="custom-file-label" for="banner">Pilih banner</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label for="p-1">Paragraf</label>
                                <textarea class="form-control" name="p_1" rows="4"><?= old('p_1'); ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="p-1">Paragraf</label>
                                <textarea class="form-control" name="p_2" rows="4"><?= old('p_2'); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="p-1">Paragraf</label>
                                <textarea class="form-control" name="p_3" rows="4"><?= old('p_3'); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="p-1">Paragraf</label>
                                <textarea class="form-control" name="p_4" rows="4"><?= old('p_4'); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="p-1">Paragraf</label>
                                <textarea class="form-control" name="p_5" rows="4"><?= old('p_5'); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="p-1">Paragraf</label>
                                <textarea class="form-control" name="p_6" rows="4"><?= old('p_6'); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="p-1">Paragraf</label>
                                <textarea class="form-control" name="p_7" rows="4"><?= old('p_7'); ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit </button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>