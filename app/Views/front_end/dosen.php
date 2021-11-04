<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero-dosen" class="d-flex align-items-center">
    <div class="container">
        <h1>Tenaga Pengajar <br> Politeknik Bintan Cakrawala</h1>
        <h2><q>Kami berdedikasi dan mengabdi untuk memberikan yang terbaik <br> serta menciptakan sdm yang mampu bersaing di dunia internasional</q></h2><br>
        <a href="#dosen-list" class="text-white scrollto">Dosen <i class="fas fa-grip-lines-vertical"></i></a>

    </div>
</section>

<main id="main">

    <!-- ======= Team Section ======= -->
    <section id="dosen-list" class="dosen-list">
        <div class="container">

            <div class="section-title" data-aos="zoom-in">
                <h2>Tenaga Pengajar Kami</h2>
                <h3>Our Hard Working <span>Lecturer</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>

            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="d-flexpx-5">
                        <div class="search"> <input type="text" class="search-input" placeholder="Tulis nama.." name=""> <a href="#" class="btn search-icon"> <i class="fa fa-search"></i> </a> </div>
                    </div>
                </div>
            </div> -->

            <div class="row">

                <?php foreach ($dosen_data as $dosen) : ?>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="dosen-member" data-aos="fade-up">
                            <div class="dosen-member-img">
                                <img src="/assets/img/dosen/<?= $dosen['foto']; ?>" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="dosen-member-info">
                                <h4><?= $dosen['nama']; ?></h4>
                                <span><?= $dosen['jabatan']; ?></span><br>
                                <a href="/dosen/dosen_detail/<?= $dosen['id_pengajar']; ?>" class="btn more-btn">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

</main>

<?= $this->endSection(); ?>