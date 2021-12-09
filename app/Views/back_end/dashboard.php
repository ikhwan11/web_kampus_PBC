<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">

    <div class="content-wrapper pb-0">
        <div class="page-header flex-wrap">
            <h3 class="mb-0"> Hi, welcome back! <?= session()->get('nama'); ?> <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">
                    <strong>
                        <?php date_default_timezone_set('Asia/Jakarta');
                        echo "" . date('l, d-M-Y');
                        ?>
                    </strong>
                </span>
            </h3>
            <?php if (session()->get('role') == '1') : ?>
                <div class="d-flex">
                    <a href="/admin_user" class="btn btn-sm ml-3 btn-success">Kelola User</a>
                </div>
            <?php endif; ?>
        </div>



        <div class="row">

            <?= $this->endSection(); ?>