<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

<section id="hero-kerjasama" class="d-flex align-items-center">
    <div class="container">
        <h1>Lembaga dan Instansi kerjasama <br> Politeknik Bintan Cakrawala</h1>
        <h2> dalam menjalankan Tri Dharma Perguruan Tinggi <br> Politeknik Bintan Cakrawala melakukan kerjasama baik dengan industri, instansi pemerintah, institusi pendidikan dan lembaga lainnya.</h2><br>
    </div>
</section>

<main id="main">
    <section class="kerjasama">
        <div class="container">
            <div class="section-title">
                <h2>Partnership <br> Politeknik Bintan Cakrawala</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/assets/img/logo-kerjasama/media/a.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/assets/img/logo-kerjasama/media/b.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <h3 class="title">Instansi Pemerintah</h3>
                    <ul>
                        <li>Dinas Pariwisata Kota Tanjungpinang</li>
                        <li>Dinas Pariwisata Kabupaten Bintan</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3 class="title">Universitas dan Perguruan Tinggi</h3>
                    <ul>
                        <li>Botam Tourism Pholythecnic</li>
                        <li>STP Trisakti</li>
                        <li>Poltekparprima</li>
                        <li>Universitas Negeri Padang</li>
                        <li>Universitas Putera Batam</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3 class=" title">Mitra Industri</h3>
                    <ul>
                        <li>Garuda Indonesia</li>
                        <li>Citylink Indonesia</li>
                        <li>Lion Air</li>
                        <li>Treasure bay Resort</li>
                        <li>Anmon Resort</li>
                        <li>Banyan Tree</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>