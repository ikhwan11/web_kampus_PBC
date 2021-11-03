<?= $this->extend('layout/admin_main'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Edit data</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard/">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin_tenagapengajar/">Tenaga Pengajar</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Edit data </li>
                </ol>
            </nav>
        </div>

        <!-- form -->
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Horizontal Two column</h4>
                    <form class="form-sample" method="POST" action="/admin_tenagapengajar/edit_act/<?= $dosen_data['id_pengajar']; ?>" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" value="<?= $dosen_data['id_pengajar']; ?>" name="id">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" autofocus value="<?= (old('nama')) ? old('nama') : $dosen_data['nama']; ?>" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="jk">
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" name="tempat_lahir" value="<?= (old('tempat_lahir')) ? old('tempat_lahir') : $dosen_data['tempat_lahir']; ?>" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tempat_lahir'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="tanggal_lahir" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No hp</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" name="no_hp" value="<?= (old('no_hp')) ? old('no_hp') : $dosen_data['no_hp']; ?>" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('no_hp'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" value="<?= (old('email')) ? old('email') : $dosen_data['email']; ?>" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('email'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="card-description">Alamat</p>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat Asal</label>
                                    <div class="col-sm-9">
                                        <input name="alamat" type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" value="<?= (old('alamat')) ? old('alamat') : $dosen_data['alamat_asal']; ?>" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="jabatan">
                                            <option value="Kaprodi Perjalanan Wisata">Kaprodi Perjalanan Wisata</option>
                                            <option value="Kaprodi Seni Kuliner">Kaprodi Seni Kuliner</option>
                                            <option value="Kaprodi Pengelolaan Perhotelan">Kaprodi Pengelolaan Perhotelan</option>
                                            <option value="Dosen Perjalanan Wisata">Dosen Perjalanan Wisata</option>
                                            <option value="Dosen Seni Kuliner">Dosen Seni Kuliner</option>
                                            <option value="Dosen Pengelolaan Perhotelan">Dosen Pengelolaan Perhotelan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>