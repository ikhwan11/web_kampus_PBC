<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">Kelola data tenaga pengajar (Dosen)</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Tenaga Pengajar </li>
                </ol>
            </nav>
        </div>

        <!-- data -->
        <div class="row">
            <div class="container">
                <a href="/admin_tenagapengajar/create" class="btn btn-outline-dark my-2"><i class="fa fa-plus"></i> Tambah Data Dosen</a>
                <a href="/admin_tenagapengajar/pengalaman" class="btn btn-outline-success my-2"><i class="fa fa-plus"></i> Tambah pengalaman</a>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Kelola Data Tenaga Pengajar</h4>

                                <form action="" method="POST">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Cari nama dosen.." name="keyword">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-danger" type="submit" name="submit">Cari</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <?= session()->get('pesan'); ?>
                        <div class="table-responsive mb-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $no = 1 + (5 * ($currentPage - 1));
                                foreach ($dosen_data as $dosen) : ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $no++; ?>
                                            </td>
                                            <td><?= $dosen['nama']; ?></td>
                                            <td><?= $dosen['jabatan']; ?></td>

                                            <td>
                                                <a href="/admin_tenagapengajar/detail/<?= $dosen['id_pengajar']; ?>" class="btn btn-sm btn-warning">Detail</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                        <?= $pager->links('tb_dosen', 'admin_pagination'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>