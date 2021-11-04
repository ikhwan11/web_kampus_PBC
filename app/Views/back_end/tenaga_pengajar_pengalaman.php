<?= $this->extend('layout/admin_main'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Tambah data pengalaman</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard/">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin_tenagapengajar/">Tenaga Pengajar</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Tambah pengalaman </li>
                </ol>
            </nav>
        </div>

        <!-- form -->
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <?= session()->get('pesan'); ?>
                    <form class="form-sample" method="POST" action="/admin_tenagapengajar/pengalaman_create">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pilih Dosen</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="id_pengajar">
                                            <option value="1">Imam Ozali, AMTru, M.M</option>
                                            <option value="3">Adiguna Tumpuan, S.ST., M.Par</option>
                                            <option value="5">Welli Braham Kurniawan, SST.Par., M.Par</option>
                                            <option value="4">Yudi Sunantri, SE., M.Sc</option>
                                            <option value="6">Henricus Yayan Setyanto, S.TP., M.T.P</option>
                                            <option value="7">Dodi Setiawan, S.Kom., M.S.I</option>
                                            <option value="8">Dr. Hary Jocom, S.Si., M.Si</option>
                                            <option value="9">Ida Rahayu, S.Par., M.Par</option>
                                            <option value="10">Putri Fistyaning Army, S.Sn., M.Sn</option>
                                            <option value="11">Yoffie Kharisma Dewi, S.S., M.Hum</option>
                                            <option value="12">Sarwoto Dwi Admojo, S.Pd., M.Par</option>
                                            <option value="13">Hetty Yulianti Sihite, S.S., M.Parr</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : ''; ?>" name="jabatan" autofocus value="<?= old('jabatan'); ?>" autocomplete="off" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jabatan'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Perusahaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= ($validation->hasError('perusahaan')) ? 'is-invalid' : ''; ?>" name="perusahaan" autofocus value="<?= old('perusahaan'); ?>" autocomplete="off" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('perusahaan'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">tahun mulai</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= ($validation->hasError('tm')) ? 'is-invalid' : ''; ?>" name="tm" value="<?= old('tm'); ?>" autocomplete="off" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tm'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">tahun selesai</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= ($validation->hasError('ts')) ? 'is-invalid' : ''; ?>" name="ts" value="<?= old('ts'); ?>" autocomplete="off" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('ts'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>