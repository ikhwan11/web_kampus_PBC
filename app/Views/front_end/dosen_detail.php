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
                                <th scope="row">Tempat/Tanggal Lahir</th>
                                <td>:</td>
                                <td><?= $dosen_data['tempat_lahir']; ?>/<?= $dosen_data['tanggal_lahir']; ?></td>
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

            <!-- pengalaman list -->
            <div class="row section-title-cv">
                <div class="col-md-2">
                    <hr size="10">
                </div>
                <div class="col-md-10">
                    <h3>Kaprodi Perjalanan Wisata <br><span class="text-white"> Universitas Poltekparprima</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, ab pariatur quisquam aliquid ipsam beatae earum natus vero. Dolorum, minus? Aperiam incidunt, officiis aspernatur velit distinctio totam temporibus aliquid unde!</p>
                </div>
            </div>

            <!-- pengalaman list -->
            <div class="row section-title-cv">
                <div class="col-md-2">
                    <hr size="10">
                </div>
                <div class="col-md-10">
                    <h3>Manager Marketing<br><span class="text-white"> Garuda Indonesia</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, ab pariatur quisquam aliquid ipsam beatae earum natus vero. Dolorum, minus? Aperiam incidunt, officiis aspernatur velit distinctio totam temporibus aliquid unde!</p>
                </div>
            </div>

            <!-- pengalaman list -->
            <div class="row section-title-cv">
                <div class="col-md-2">
                    <hr size="10">
                </div>
                <div class="col-md-10">
                    <h3>Supervisor divisi pemasaran <br><span class="text-white"> PT. Traveloka Indonesia</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, ab pariatur quisquam aliquid ipsam beatae earum natus vero. Dolorum, minus? Aperiam incidunt, officiis aspernatur velit distinctio totam temporibus aliquid unde!</p>
                </div>
            </div>


        </div>

    </section>
</main>

<?= $this->endSection(); ?>