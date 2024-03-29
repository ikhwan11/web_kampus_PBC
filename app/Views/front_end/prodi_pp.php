<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero-prodi-pp" class="d-flex align-items-center">
    <div class="container">
        <h1>D4 <br> Pengelolaan Perhotelan</h1>
        <h2>Bridging Excellence For The Future</h2><br>
        <a href="#tentang" class="text-white scrollto">Tentang Prodi <i class="fas fa-grip-lines-vertical"></i></a>
        <a href="#profil" class="text-white scrollto">Profil Lulusan <i class="fas fa-grip-lines-vertical"></i></a>
    </div>
</section>

<main id="main">

    <!-- tentang prodi -->
    <section id="tentang" class="tentang">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Prodi Pengelolaan Perhotelan</h2>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <img src="/assets/img/prodi/tentang-pp.JPG" class="img-fluid" alt="">
                    <h2>Apa itu Pengelolaan Perhotelan?</h2>
                    <p>Adalah program studi yang menerapkan dan mengembangkan pengetahuan, keterampilan dan ilmu perhotelan khususnya dalam perencanaan, memproduksi, dan pengawasan pengelolaan jasa penginapan.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="/assets/img/dosen/<?= $dosen_data['foto']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $dosen_data['nama']; ?></h5>
                            <p class="card-text"><?= $dosen_data['jabatan']; ?></p>
                            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                                <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="Youtube"><i class="fab fa-linkedin"></i></a>
                            </div>
                            <a href="/dosen/dosen_detail/<?= $dosen_data['id_pengajar']; ?>" class="btn more-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- profil lulusan -->
    <section id="profil" class="profil-lulusan">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>Profil Lulusan <br> D4 Pengelolaan Perhotelan</h2>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3>Masa Studi:</h3>
                            <div class="d-style btn btn-brc-tp border-2 bgc-white btn-outline-blue btn-h-outline-blue btn-a-outline-blue w-100 my-2 py-3 shadow-sm">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <ul class="list-unstyled mb-0 col-12 col-md-8 text-dark-l1 text-90 text-left my-4 my-md-0">
                                            <li>
                                                <span>
                                                    <span class="text-white">
                                                        Lama Studi :
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="mt-25">
                                                <span class="text-white">
                                                    Lama Magang (Prakerin) :
                                                </span>
                                            </li>
                                            <li class="mt-25">
                                                <span class="text-white">
                                                    Gelar :
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="list-unstyled mb-0 col-12 col-md-8 text-dark-l1 text-90 text-left my-4 my-md-0">
                                        <li>
                                            <span>
                                                <span class="text-white">
                                                    8 Semester (4 Tahun)
                                                </span>
                                            </span>
                                        </li>

                                        <li class="mt-25">
                                            <span class="text-white">
                                                2 Semester (1 Tahun)
                                            </span>
                                        </li>
                                        <li class="mt-25">
                                            <span class="text-white">
                                                S.Tr.Par (Sarjana Terapan Pariwisata)
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">

                                    <div class="d-style btn btn-brc-tp border-2 bgc-white btn-outline-blue btn-h-outline-blue btn-a-outline-blue w-100 my-2 py-3 shadow-sm">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-md-4">
                                                <i class="fas fa-user-graduate"></i>
                                                <h4 class="pt-3 text-170 text-600 text-primary-d1 letter-spacing">
                                                    Profil Lulusan
                                                </h4>
                                            </div>

                                            <ul class="list-unstyled mb-0 col-12 col-md-8 text-dark-l1 text-90 text-left my-4 my-md-0">
                                                <li>
                                                    <i class="fa fa-check text-white  mr-2 mt-1"></i>
                                                    <span>
                                                        <span class="text-white">
                                                            Front Office Manager
                                                        </span>
                                                    </span>
                                                </li>

                                                <li class="mt-25">
                                                    <i class="fa fa-check text-white  mr-2 mt-1"></i>
                                                    <span class="text-white">
                                                        Restaurant Manager
                                                    </span>
                                                </li>
                                                <li class="mt-25">
                                                    <i class="fa fa-check text-white  mr-2 mt-1"></i>
                                                    <span class="text-white">
                                                        Housekeeping Manager
                                                    </span>
                                                </li>
                                                <li class="mt-25">
                                                    <i class="fa fa-check text-white  mr-2 mt-1"></i>
                                                    <span class="text-white">
                                                        Excecutive Chef, Pastry Chef
                                                    </span>
                                                </li>
                                                <li class="mt-25">
                                                    <i class="fa fa-check text-white  mr-2 mt-1"></i>
                                                    <span class="text-white">
                                                        Barista, Bartender
                                                    </span>
                                                </li>
                                                <li class="mt-25">
                                                    <i class="fa fa-check text-white  mr-2 mt-1"></i>
                                                    <span class="text-white">
                                                        Entrepreneur
                                                    </span>
                                                </li>
                                                <li class="mt-25">
                                                    <i class="fa fa-check text-white  mr-2 mt-1"></i>
                                                    <span class="text-white">
                                                        Consultant
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 bawah">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title m-b-0">News Updates</h4>
                        </div>
                        <ul class="list-style-none">
                            <li class="d-flex no-block card-body">
                                <div> <a href="#" class="m-b-0 font-medium p-0" data-abc="true">Version 2.5 released</a> <span class="text-muted">A new version 2.5 has been released. </span> </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">26</h5> <span class="text-muted font-16">FEB</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <div> <a href="#" class="m-b-0 font-medium p-0" data-abc="true">Congratulation to AAA For new investment</a> <span class="text-muted">AAA has invested $2M in MMM. we are happy to working forward with AAA.</span> </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">11</h5> <span class="text-muted font-16">MAR</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <div> <a href="#" class="m-b-0 font-medium p-0" data-abc="true">Hiring Android Developers</a> <span class="text-muted">We are hiring android developers to expend our mobile development team.</span> </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">19</h5> <span class="text-muted font-16">APR</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <div> <a href="#" class="m-b-0 font-medium p-0" data-abc="true">Hiring Android Developers</a> <span class="text-muted">We are hiring android developers to expend our mobile development team.</span> </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">19</h5> <span class="text-muted font-16">APR</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <div> <a href="#" class="m-b-0 font-medium p-0" data-abc="true">Hiring Android Developers</a> <span class="text-muted">We are hiring android developers to expend our mobile development team.</span> </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">19</h5> <span class="text-muted font-16">APR</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?= $this->endSection(); ?>