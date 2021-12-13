<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Standar Mutu</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">SPMI</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dokumen standar mutu</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="color-card">
                                <h4>Kebijakan Mutu</h4>
                            </div>
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalKebijakanMutu">
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
                                <h4>Manual Mutu</h4>
                            </div>
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalManualMutu">
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
                                <h4>SOP</h4>
                            </div>
                            <a href="/admin_spmi/sop_menu" class="btn btn-dark"><i class="mdi mdi-download "></i> Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="color-card">
                                <h4>Standar Mutu</h4>
                            </div>
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalStandarMutu">
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
                                <h4>Formulir</h4>
                            </div>
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalFormulir">
                                <i class="mdi mdi-download "></i> Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalKebijakanMutu" tabindex="-1" role="dialog" aria-labelledby="modalKebijakanMutuLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKebijakanMutuLabel">Download Dokumen Kebijakan Mutu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php foreach ($kebijakan_data as $kebijakan) : ?>
                    <a href="/admin_spmi/download_dokumen/<?= $kebijakan['id_dk']; ?>"> <?= $kebijakan['nama_dk']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalStandarMutu" tabindex="-1" role="dialog" aria-labelledby="modalStandarMutuLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalStandarMutuLabel">Download Dokumen Standar Mutu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php foreach ($standar_data as $standar) : ?>
                    <a href="/admin_spmi/download_dokumen/<?= $standar['id_dk']; ?>"> <?= $standar['nama_dk']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalManualMutu" tabindex="-1" role="dialog" aria-labelledby="modalManualMutuLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalManualMutuLabel">Download Dokumen Manual Mutu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php foreach ($manual_data as $manual) : ?>
                    <a href="/admin_spmi/download_dokumen/<?= $manual['id_dk']; ?>"> <?= $manual['nama_dk']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalFormulir" tabindex="-1" role="dialog" aria-labelledby="modalFormulirLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormulirLabel">Download Formulir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php foreach ($formulir_data as $formulir) : ?>
                    <a href="/admin_spmi/download_dokumen/<?= $formulir['id_dk']; ?>"> <?= $formulir['nama_dk']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>