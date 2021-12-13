<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Standard Operating Procedure PBC</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">SPMI</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dokumen SOP</li>
                </ol>
            </nav>
        </div>
        <span style="color: red;">*Ctrl+f untuk mencari dokumen</span>
        <div class="col-lg-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">

                    <!-- <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="cari dokumen.." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="submit" name="submit">Cari</button>
                            </div>
                        </div>
                    </form> -->

                    <?= session()->get('pesan'); ?>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis SOP</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <?php $no = 1;
                            foreach ($sop_data as $sop) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $sop['nama_dk']; ?></td>
                                        <td>
                                            <a href="/admin_spmi/download_dokumen/<?= $sop['id_dk']; ?>" class="btn btn-sm btn-dark">Download</a>
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