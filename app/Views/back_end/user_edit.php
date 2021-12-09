<?= $this->extend('layout/admin_main'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Edit user</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin_user">Kelola User</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Edit User </li>
                </ol>
            </nav>
        </div>

        <!-- form -->
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form class="form-sample" method="GET" action="/admin_user/edit_act/<?= $user_data['id']; ?>">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" value="<?= $user_data['id']; ?>" name="id">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" autofocus autocomplete="off" value="<?= (old('nama')) ? old('nama') : $user_data['nama']; ?>" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">

                                    <label for="role" class="col-sm-3 col-form-label">Role</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="role">

                                            <?php if ($user_data['role'] == 1) { ?>
                                                <option value="1">Adminstrator</option>
                                                <option value="2">Digital Marketing</option>
                                                <option value="3">Staff</option>
                                            <?php } elseif ($user_data['role'] == 2) { ?>
                                                <option value="2">Digital Marketing</option>
                                                <option value="1">Adminstrator</option>
                                                <option value="3">Staff</option>
                                            <?php } else { ?>
                                                <option value="3">Staff</option>
                                                <option value="1">Adminstrator</option>
                                                <option value="2">Digital Marketing</option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="username" class="col-sm-3 col-form-label ">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" name="username" autocomplete="off" value="<?= (old('username')) ? old('username') : $user_data['username']; ?>" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('username'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" value="<?= (old('password')) ? old('password') : $user_data['password']; ?>" autocomplete="off" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"> Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>