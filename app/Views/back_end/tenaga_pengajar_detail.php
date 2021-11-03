<?= $this->extend('layout/admin_main'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Detail tenaga pengajar</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard/">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin_tenagapengajar/">Tenaga Pengajar</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Detail Tenaga Pengajar </li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <img src="/assets/img/dosen/<?= $dosen_data['foto']; ?>" class="img-fluid" alt="">
                        <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#fotoModal">
                            Update Foto
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?= $dosen_data['nama']; ?></h3>
                        <p class="card-description text-danger"> <?= $dosen_data['jabatan']; ?> </p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>Tanggal lahir</td>
                                        <td>:</td>
                                        <td><?= $dosen_data['tempat_lahir']; ?>/<?= $dosen_data['tanggal_lahir']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Informasi Tambahan</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <?php if ($dosen_data['jenis_kelamin'] == 'L') { ?>
                                            <td>Laki-Laki</td>
                                        <?php } else { ?>
                                            <td>Perempuan</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td><?= $dosen_data['alamat_asal']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No Hp</td>
                                        <td>:</td>
                                        <td><?= $dosen_data['no_hp']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>E-Mail</td>
                                        <td>:</td>
                                        <td><?= $dosen_data['email']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="my-3">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                            <a href="/admin_tenagapengajar/edit/<?= $dosen_data['id_pengajar']; ?>" class="btn btn-warning"><i class="fa fa-eye"></i> Edit data </a>
                        </div>
                    </div>

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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form action="/admin_tenagapengajar/<?= $dosen_data['id_pengajar']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="fotoModal" tabindex="-1" role="dialog" aria-labelledby="fotoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fotoModalLabel">Upload Gambar Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin_tenagapengajar/update_foto/<?= $dosen_data['id_pengajar']; ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                    <label class="col-sm-3 col-form-label">Foto :</label>
                    <img src="/assets/img/<?= $dosen_data['foto']; ?>" class="img-thumbnail img-preview">
                    <div class="custom-file">
                        <input type="hidden" name="id" value="<?= $dosen_data['id_pengajar']; ?>">
                        <input type="hidden" name="fotoLama" value="<?= $dosen_data['foto']; ?>">
                        <input type="file" class="custom-file-input" id="foto" name="foto" onchange="previewImg()">
                        <label class="custom-file-label" for="foto">Pilih Foto</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>