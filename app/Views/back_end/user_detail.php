<?= $this->extend('layout/admin_main'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Detail User</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin_user">Kelola User</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> detail </li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Informasi User</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td><?= $user_data['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Role</td>
                                        <td>:</td>
                                        <?php if ($user_data['role'] == 1) { ?>
                                            <td>Adminstrator</td>
                                        <?php } else { ?>
                                            <td>Digital Marketing</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>:</td>
                                        <td><?= $user_data['username']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:</td>
                                        <td><?= $user_data['password']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Dibuat pada</td>
                                        <td>:</td>
                                        <td><?= $user_data['created_at']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="my-3">

                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                <i class="fa fa-trash"></i> Hapus
                            </button>

                            <a href="/admin_user/edit/<?= $user_data['id']; ?>" class="btn btn-warning"><i class="fa fa-eye"></i> Edit data </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


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
                <form action="/admin_user/<?= $user_data['id']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>