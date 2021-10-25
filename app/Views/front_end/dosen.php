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

            <div class="row">
                <div class="col-md-6">
                    <div class="d-flexpx-5">
                        <div class="search"> <input type="text" class="search-input" placeholder="Tulis nama.." name=""> <a href="#" class="btn search-icon"> <i class="fa fa-search"></i> </a> </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="dosen-member" data-aos="fade-up">
                        <div class="dosen-member-img">
                            <img src="/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="dosen-member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span><br>
                            <a href="/dosen/dosen_detail/" class="btn more-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="dosen-member" data-aos="fade-up" data-aos-delay="100">
                        <div class="dosen-member-img">
                            <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="dosen-member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span><br>
                            <a href="/dosen/dosen_detail/" class="btn more-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="dosen-member" data-aos="fade-up" data-aos-delay="200">
                        <div class="dosen-member-img">
                            <img src="/assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="dosen-member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span><br>
                            <a href="/dosen/dosen_detail/" class="btn more-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="dosen-member" data-aos="fade-up" data-aos-delay="300">
                        <div class="dosen-member-img">
                            <img src="/assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="dosen-member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span><br>
                            <a href="/dosen/dosen_detail/" class="btn more-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>

<?= $this->endSection(); ?>