<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Laporan MONEV</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">SPMI</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dokumen laporan MONEV</li>
                </ol>
            </nav>
        </div>

        <h3>Periode</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="color-card">
                                <h4>2019/2020</h4>
                            </div>
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal1920">
                                <i class="mdi mdi-download "></i> Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="color-card">
                                <h4>2020/2021</h4>
                            </div>
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal2021">
                                <i class="mdi mdi-download "></i> Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal1920" tabindex="-1" role="dialog" aria-labelledby="1920Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="1920Label">Download Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <?php foreach ($monev1920_data as $m1920) : ?>
                        <li><a href="/admin_spmi/download_dokumen/<?= $m1920['id_dk']; ?>"><?= $m1920['nama_dk']; ?></a><br></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal2021" tabindex="-1" role="dialog" aria-labelledby="2021Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="2021Label">Download Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <?php foreach ($monev2021_data as $m2021) : ?>
                        <li>
                            <a href="/admin_spmi/download_dokumen/<?= $m2021['id_dk']; ?>"><?= $m2021['nama_dk']; ?></a><br>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>