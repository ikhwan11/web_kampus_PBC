<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<!-- hero -->
<!-- ======= Hero Section ======= -->
<section id="hero-tentang" class="d-flex align-items-center">
    <div class="container">
        <h1>Laporan Tahunan</h1>
        <h2>Politeknik Bintan Cakrawala</h2>
    </div>
</section><!-- End Hero -->

<main id="main">
    <div class="container">
        <?php foreach ($lap_data as $lap) : ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="card my-3" style="width: 18rem;">
                        <img class="card-img-top" src="/assets/img/lapTahunan/<?= $lap['cover']; ?>" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lap['nama_lap']; ?></h5>
                        <div class="small text-muted"><i class="far fa-user-circle"></i> <?= $lap['kreator']; ?> | <i class="far fa-calendar-alt"></i> <?= $lap['created_at']; ?></div>
                        <p class="card-text"><?= $lap['paragraf_1']; ?></p>
                        <a href="/lapTahunan/detail/<?= $lap['id_lap']; ?>" class="btn btn-dark my-2">Read more <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?= $pager->links('tb_laptahunan', 'admin_pagination'); ?>
    </div>
</main>
<?= $this->endSection(); ?>