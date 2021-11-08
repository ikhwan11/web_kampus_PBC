<?= $this->extend('layout/admin_main'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">Blog/Artikel</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Blog/Artikel </li>
                </ol>
            </nav>
        </div>

        <!-- data -->
        <div class="row">
            <div class="container">
                <a href="/admin_blog/create" class="btn btn-outline-dark my-2"><i class="fa fa-plus"></i> Tambah Artikel</a>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Data Artikel</h4>

                                <!-- <form action="" method="POST">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Cari artikel.." name="keyword" autocomplete="off" autofocus>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-danger" type="submit" name="submit">Cari</button>
                                        </div>
                                    </div>
                                </form> -->

                            </div>
                        </div>
                        <?= session()->get('pesan'); ?>
                        <div class="table-responsive mb-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Admin</th>
                                        <th>Tanggal</th>
                                        <th>Judul Artikel</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $no = 1 + (5 * ($currentPage - 1));
                                foreach ($blog_data as $blog) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $blog['admin']; ?></td>
                                            <td><?= $blog['tanggal']; ?></td>
                                            <td><?= $blog['judul']; ?></td>

                                            <td>
                                                <a href="/admin_blog/edit/<?= $blog['id_blog']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"> Hapus
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                        <?= $pager->links('tb_blog', 'admin_pagination'); ?>
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
                Apakah anda yakin ingin menghapus Artikel?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form action="/admin_blog/<?= $blog['id_blog']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>