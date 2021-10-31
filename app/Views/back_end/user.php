<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">Kelola User</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> User </li>
                </ol>
            </nav>
        </div>

        <!-- data -->
        <div class="row">
            <div class="container">
                <a href="/admin_user/create" class="btn btn-dark my-2"><i class="fa fa-plus"></i> Tambah User</a>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-2">Kelola Data User</h4>

                        <?= session()->get('pesan'); ?>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>username</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $no = 1;
                                foreach ($user_data as $user) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $user['nama']; ?></td>
                                            <td><?= $user['username']; ?></td>
                                            <?php if ($user['role'] == 1) { ?>
                                                <td>Adminstrator</td>
                                            <?php } else { ?>
                                                <td>Digital Marketing</td>
                                            <?php } ?>
                                            <td>
                                                <a href="/admin_user/detail/<?= $user['id']; ?>" class="btn btn-sm btn-warning">Detail</a>
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
</div>

<?= $this->endSection(); ?>