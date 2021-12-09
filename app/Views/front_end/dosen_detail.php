<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<section id="hero-dosen" class="d-flex align-items-center">
    <div class="container">
        <h1>Detail Tenaga Pengajar <br> Politeknik Bintan Cakrawala</h1>
        <h2><q>Kami berdedikasi dan mengabdi untuk memberikan yang terbaik <br> serta menciptakan sdm yang mampu bersaing di dunia internasional</q></h2><br>

    </div>
</section>

<main id="main">
    <section class="isi">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="/assets/img/dosen/<?= $dosen_data['foto']; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-9">
                    <h1><?= $dosen_data['nama']; ?></h1>
                    <span><?= $dosen_data['jabatan']; ?></span>
                    <hr>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Alamat Asal</th>
                                <td>:</td>
                                <td><?= $dosen_data['tempat_lahir']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jabatan</th>
                                <td>:</td>
                                <td><?= $dosen_data['jabatan']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Curriculum -->
    <section id="cv">

        <div class="container">
            <div class="section-title-cv">
                <h2>Riwayat Pengalaman</h2>
            </div>

            <?php foreach ($pengalaman_data as $pengalaman) : ?>
                <!-- pengalaman list -->
                <div class="row section-title-cv">
                    <div class="col-md-2">
                        <p class="text-right"><?= $pengalaman['tahun_mulai']; ?> - <?= $pengalaman['tahun_selesai']; ?></p>
                    </div>
                    <div class="col-md-10">
                        <h3><?= $pengalaman['jabatan']; ?> <br><span class="text-white"><?= $pengalaman['perusahaan']; ?></span></h3>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>

    </section>
</main>

<?= $this->endSection(); ?>