<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Upload dokumen</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Dokumen</li>
                </ol>
            </nav>
        </div>

        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form class="form-sample" method="POST" action="/admin_spmi/create_act" enctype="multipart/form-data">
                        <?= session()->get('pesan'); ?>
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label>Jenis Dokumen</label>
                                    <select name="id_spmi" class="form-control <?= ($validation->hasError('id_spmi')) ? 'is-invalid' : ''; ?>">
                                        <option value="">Select..</option>
                                        <option value="1">Standar Mutu</option>
                                        <option value="2">Laporan MONEV</option>
                                        <option value="3">Laporan AMI</option>
                                        <option value="4">Laporan RTM</option>
                                        <option value="5">Laporan Kinerja</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_doc'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label>Nama Dokumen</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama_dok')) ? 'is-invalid' : ''; ?>" name="nama_dok" autofocus autocomplete="off" value="<?= old('nama_dok'); ?>" />
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_dok'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Informasi tambahan jika ada :</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label>Jenis dokumen tambahan</label>
                                    <select name="j_tambahan" class="form-control">
                                        <option value="">Select..</option>
                                        <option value="SOP">SOP</option>
                                        <option value="Formulir">Formulir</option>
                                        <option value="Kebijakan Mutu">Kebijakan Mutu</option>
                                        <option value="Manual Mutu">Manual Mutu</option>
                                        <option value="Standar Mutu">Standar Mutu</option>
                                        <option value="Kegiatan">Kegiatan Monitoring, RPS, BAP, & Seat In</option>
                                        <option value="IKM">Indeks Kepuasan Mahasiswa</option>
                                        <option value="IKJD">Indeks Kinerja Dosen</option>
                                        <option value="IKD">Indeks Kepuasan Dosen</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 ml-2">
                                <div class="form-group row">
                                    <label>Tahun akademik</label>
                                    <select name="ta" class="form-control">
                                        <option value="">Select..</option>
                                        <option value="2019/2020">2019/2020</option>
                                        <option value="2020/2021">2020/2021</option>
                                        <option value="2021/2022">2021/2022</option>
                                        <option value="2022/2023">2022/2023</option>
                                        <option value="2022/2023">2023/2024</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-form-label">Dokumen:</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('dokumen')) ? 'is-invalid' : ''; ?>" id="dokumen" name="dokumen" onchange="previewDoc()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('dokumen'); ?>
                                    </div>
                                    <label class="custom-file-label dokumen-label" for="dokumen">Pilih Dokumen</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-block btn-success mt-3">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>