<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<!-- hero -->
<!-- ======= Hero Section ======= -->
<section id="hero-tentang" class="d-flex align-items-center">
    <div class="container">
        <h1>Laporan Tahunan Politeknik Bintan Cakrawala</h1>
        <a href="/lapTahunan" class="text-white scrollto"> Lebih banyak <i class="fas fa-angle-double-right"></i></a>
    </div>
</section><!-- End Hero -->

<main id="main">
    <div class="container mb-3">
        <div class="section-title mt-3">
            <h2><?= $lap_data['nama_lap']; ?></h2>
        </div>
        <p><?= $lap_data['paragraf_1']; ?></p>
        <p><?= $lap_data['paragraf_2']; ?></p>
        <p><?= $lap_data['paragraf_3']; ?></p>

        <?php foreach ($ss_data as $ss) : ?>
            <p class="mt-3">
                <?= $ss['nama_ss']; ?>
            </p>
            <img src="/assets/img/lapTahunan/ss/<?= $ss['file_ss']; ?>" alt="" width="500px">
        <?php endforeach; ?>
    </div>
</main>
<?= $this->endSection(); ?>