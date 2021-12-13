<?= $this->extend('layout/admin_main'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Ubah Password</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Ubah Password </li>
                </ol>
            </nav>
        </div>

        <!-- form -->
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <?= session()->get('pesan'); ?>
                    <form class="form-sample" method="GET" action="/admin_user/Upass_act">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password" class="col-sm-3 col-form-label">Password baru</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="id" value="<?= session()->get('id'); ?>">
                                        <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" />
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"> Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>