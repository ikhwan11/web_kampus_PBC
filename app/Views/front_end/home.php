<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>


<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url(/assets/img/hero_home/1.jpg)">

                <div class="container">
                    <div class="slide-right">
                        <h2 class="text-white">Welcome to <br><span>Politeknik Bintan Cakrawala</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-white">Kampus pariwisata yang terletak di daerah strategis yaitu di kawasan Bintan Resort International berdekatan dengan banyak hotel dan resort bintang 5.</p>
                        </div>
                    </div>
                    <a href="#why-us" class="btn btn-get-started scrollto">Selengkapnya <i class="bx bx-chevron-right"></i></a>
                </div>

            </div>
            <div class="carousel-item" style="background-image: url(/assets/img/hero_home/2.jpg)">
                <div class="container">
                    <div class="slide-right">
                        <h2 class="text-white">Bridging Excellence <br><span>for The Future</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-white">Sebagai kampus yang akan menjembatani keunggulan setiap individu demi meraih impian yang mulia.</p>
                        </div>
                    </div>

                    <a href="#info-PMB" class="btn btn-get-started scrollto">Info PMB <i class="bx bx-chevron-right"></i></a>
                </div>


            </div>
            <div class="carousel-item" style="background-image: url(/assets/img/hero_home/3.jpg)">
                <div class="container">
                    <div class="slide-right">
                        <h2 class="text-white">Didukung oleh <br><span>Tenaga pengajar yang berpengalaman di industri.</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-white">Tenaga pengajar PBC sudah berpengalaman di industri sektor pariwisata.</p>
                        </div>
                    </div>

                    <a href="#doctors" class="btn btn-get-started scrollto">Selengkapnya <i class="bx bx-chevron-right"></i></a>
                </div>

            </div>


        </div>

    </div>
</section>

<main id="main">
    <!-- tentang kami -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Kami</h2>
            </div>
            <div class="jumbotron">
                <div class="row">
                    <div class="col-sm-4">
                        <ul class="nav nav-tabs flex-column tombol">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Sambutan Direktur</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Sejarah</a>
                                <!-- </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Visi dan Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Fasilitas</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Selamat datang di website kami</h3>
                                        <p>Sebagai pionir pendidikan tinggi di Indonesia, PBC memiliki akar yang kuat dalam tradisi kebebasan akademik, di mana keberagaman pemikiran mendapatkan ruang apresiasi yang tinggi. Dengan lingkungan pembelajaran yang penuh semangat dan potensi dalam inovasi, kami berkomitmen dalam mendidik mahasiswa kami menjadi pemimpin global yang inovatif.</p><br>
                                        <a href="/about/" class="btn btn-sm btn-more">Selengkapnya <i class="bx bx-chevron-right"></i></a>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="/assets/img/tentang/dir.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>PBC</h3>
                                        <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. </p><br>
                                        <a href="/about/" class="btn btn-sm btn-more">Selengkapnya <i class="bx bx-chevron-right"></i></a>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="/assets/img/tentang/about-bg.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Sejarah PBC</h3>
                                        <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. </p><br>
                                        <a href="/about/" class="btn btn-sm btn-more">Selengkapnya <i class="bx bx-chevron-right"></i></a>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="/assets/img/tentang/sejarah.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Visi</h4>
                                        <p>Menjadi perguruan tinggi yang unggul dan terkemuka di indonesia untuk menghasilkan tenaga profesional dan wirausahawan yang memiliki kompetensi terbaik dan berwawasan global serta berlandaskan pada kearifan lokal.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Misi</h4>
                                        <p>
                                        <ol>
                                            <li>
                                                Melaksanakan pendidikan vokasi di bidang pariwisata dengan luaran menghasilkan tenaga kerja profesional dan memiliki jiwa wirausahawan yang berkualitas, berkarakter, dan beretika;
                                            </li>
                                            <li>
                                                Melaksanakan dan mengembangkan penelitian serta pengabdian kepada masyarakat pada bidang pariwisata;
                                            </li>
                                            <li>
                                                Meningkatkan kualitas tata kelola institusi, dengan menjalankan peningkatan yang berkelanjutan dan berdasarkan pada prinsip tata kelola yang baik;
                                            </li>
                                            <li>
                                                Membentuk tenaga pendidik dan kependidikan yang kompoten, profesional, berkarakter, dan beretika;
                                            </li>
                                            <li>
                                                Mengembangkan kerjasama timbal balik dengan pemangku kepentingan (stakeholders) untuk mendukung proses Tri Dharma Perguruan Tinggi.
                                            </li>
                                        </ol>
                                        </p>
                                    </div>
                                </div>

                                <br>
                                <a href="/about/" class="btn btn-sm btn-more">Selengkapnya <i class="bx bx-chevron-right"></i></a>

                            </div> -->
                            <!-- <div class="tab-pane" id="tab-5">

                                <h3>Fasilitas PBC</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>
                                        <ul>
                                            <li>
                                                Ruang kelas full AC
                                            </li>
                                            <li>
                                                Area kampus full WiFi
                                            </li>
                                            <li>
                                                Perpustakaan
                                            </li>
                                            <li>
                                                Lab. Komputer
                                            </li>
                                            <li>
                                                Lab. Bahasa
                                            </li>
                                            <li>
                                                Lab. Kitchen
                                            </li>
                                            <li>
                                                Lab. Pastry
                                            </li>
                                            <li>
                                                Lab. Front Office
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>
                                                Lab. Housekeeping
                                            </li>
                                            <li>
                                                Lab. Laindry
                                            </li>
                                            <li>
                                                Restaurant
                                            </li>
                                            <li>
                                                Mock Up Room
                                            </li>
                                            <li>
                                                Lab. Airlines Ticketing
                                            </li>
                                            <li>
                                                Lab. Perjalanan Wisata
                                            </li>
                                            <li>
                                                Lab. Tour & Travel
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <br>
                                <a href="/about/" class="btn btn-sm btn-more">Selengkapnya <i class="bx bx-chevron-right mb-3"></i></a>

                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 d-flex align-items-stretch">
                    <div class="content">
                        <div class="slide-right">
                            <h3>Why Choose <br> Politeknik Bintan Cakrawala?</h3>
                        </div>
                        <p>
                            Kampus pariwisata yang terletak di daerah strategis yaitu di kawasan Bintan Resort International berdekatan dengan hotel dan resort bintang 5 serta suasana alam yang indah dan asri.

                            Politeknik Bintan Cakrawala memberikan jaminan pekerjaan dan peluang karir yang sangat menjanjikan karena telah bekerja sama dengan berbagai perusahaan ternama di indonesia.
                        </p>
                        <!-- <div class="text-center">
                        <a href="#" class="btn more-btn">Selengkapnya <i class="bx bx-chevron-right"></i></a>
                    </div> -->
                    </div>
                </div>
                <div class="col-lg-9 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="fas fa-chart-line"></i>
                                    <h4>Career Path</h4>
                                    <p>Jaminan penempatan kerja.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="fas fa-umbrella-beach"></i>
                                    <h4>Kampus Resort</h4>
                                    <p>Berlokasi dikawasan resort internasional.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="fas fa-passport"></i>
                                    <h4>International Internship Programs</h4>
                                    <p>Berkesempatan magang di luar negeri.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="fas fa-user-tie"></i>
                                    <h4>Entrepreneurship Program</h4>
                                    <p>Adanya program inkubasi bisnis dan pendidikan kewirausahaan.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                    <h4>Tenaga Pengajar Profesional</h4>
                                    <p>Dosen dan instruktor yang berasal dari industri</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="fas fa-school"></i>
                                    <h4>Boarding School</h4>
                                    <p>Biaya kuliah sudah termasuk asrama di sekitar kampus.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section>

    <!-- dosen -->
    <section id="doctors" class="doctors ">
        <div class="container">

            <div class="section-title">
                <h2>Dosen Profesional</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/assets/img/dosen/pak-imam.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Imam Ozali, AMTru, M.M</h4>
                            <span>Kaprodi Perjalanan Wisata</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="my-2">
                                <a href="/dosen/dosen_detail" class="btn btn-sm more-btn">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                            </div>
                            <div class="social">
                                <a href="" class="btn"><i class="fab fa-facebook"></i></a>
                                <a href="" class="btn"><i class="fab fa-instagram"></i></a>
                                <a href="" class="btn"> <i class="fab fa-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/assets/img/dosen/pak-adi.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Adiguna Tumpuan, S.ST., M.Par</h4>
                            <span>Kaprodi Seni Kuliner</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="my-2">
                                <a href="/dosen/dosen_detail" class="btn btn-sm more-btn">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                            </div>
                            <div class="social">
                                <a href="" class="btn"><i class="fab fa-facebook"></i></a>
                                <a href="" class="btn"><i class="fab fa-instagram"></i></a>
                                <a href="" class="btn"> <i class="fab fa-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/assets/img/dosen/pak-welli.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Welli Braham Kurniawan, SST.Par., M.Par</h4>
                            <span>Kaprodi Pengelolaan Perhotelan</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="my-2">
                                <a href="/dosen/dosen_detail" class="btn btn-sm more-btn">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                            </div>
                            <div class="social">
                                <a href="" class="btn"><i class="fab fa-facebook"></i></a>
                                <a href="" class="btn"><i class="fab fa-instagram"></i></a>
                                <a href="" class="btn"> <i class="fab fa-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/assets/img/dosen/pak-yudi.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Yudy Sunatri, SE., M.Sc</h4>
                            <span>Dosen</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="my-2">
                                <a href="/dosen/dosen_detail" class="btn btn-sm more-btn">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                            </div>
                            <div class="social">
                                <a href="" class="btn"><i class="fab fa-facebook"></i></a>
                                <a href="" class="btn"><i class="fab fa-instagram"></i></a>
                                <a href="" class="btn"> <i class="fab fa-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <!-- ======= berita Section ======= -->
    <section id="berita" class="berita">
        <div class="container">

            <div class="section-title">
                <h2>Berita dan Info terkini</h2>
            </div>

            <div class="berita-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="berita-wrap">
                            <div class="berita-item">
                                <div class="profile-card-6"><img src="/assets/img/berita.JPG" class="img img-responsive">
                                    <div class="profile-name">
                                        Mahasiswa PBC Mengikuti Lomba Memasak International di Singapura
                                    </div>
                                    <div class="profile-overview">
                                        <div class="profile-overview">
                                            <p class="mx-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam nobis fugit voluptatem ipsa inventore fuga impedit! Qui inventore suscipit non corporis perferendis nihil dignissimos eos rerum quisquam, odit ut architecto?</p><br>
                                            <a href="/news/detail_news" class="more-btn">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="berita-wrap">
                            <div class="berita-item">
                                <div class="profile-card-6"><img src="/assets/img/news/berita-2.JPG" class="img img-responsive">
                                    <div class="profile-name">
                                        Serah Terima Jabatan Direktur Politeknik Bintan Cakrawala
                                    </div>
                                    <div class="profile-overview">
                                        <div class="profile-overview">
                                            <p class="mx-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam nobis fugit voluptatem ipsa inventore fuga impedit! Qui inventore suscipit non corporis perferendis nihil dignissimos eos rerum quisquam, odit ut architecto?</p><br>
                                            <a href="/news/detail_news" class="more-btn">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="berita-wrap">
                            <div class="berita-item">
                                <div class="profile-card-6"><img src="/assets/img/news/berita-3.JPG" class="img img-responsive">
                                    <div class="profile-name">
                                        Cuaca Hari Ini Pulau Bintan Termasuk Cuaca Besok, BMKG: Waspada Potensi Hujan
                                    </div>
                                    <div class="profile-overview">
                                        <div class="profile-overview">
                                            <p class="mx-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam nobis fugit voluptatem ipsa inventore fuga impedit! Qui inventore suscipit non corporis perferendis nihil dignissimos eos rerum quisquam, odit ut architecto?</p><br>
                                            <a href="/news/detail_news" class="more-btn">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="berita-wrap">
                            <div class="berita-item">
                                <div class="profile-card-6"><img src="/assets/img/news/berita-4.JPG" class="img img-responsive">
                                    <div class="profile-name">
                                        Saat Tanjungpinang Naik Jadi Level 2, Gubernur Tegaskan Kepri Masih PPKM Level 1
                                    </div>
                                    <div class="profile-overview">
                                        <div class="profile-overview">
                                            <p class="mx-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam nobis fugit voluptatem ipsa inventore fuga impedit! Qui inventore suscipit non corporis perferendis nihil dignissimos eos rerum quisquam, odit ut architecto?</p><br>
                                            <a href="/news/detail_news" class="more-btn">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-berita-pagination"></div>
            </div>

        </div>
    </section>

    <!-- ======= promosi Section ======= -->
    <section id="info-PMB" class="promosi">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 flyer">
                    <img src="/assets/img/banner-pmb-website.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-4 flyer-kanan">
                    <h3>PMB Tahun Akademik 2022/2023</h3><br>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, natus. Itaque, reiciendis error magnam voluptatum temporibus dolorum quas libero odio voluptas ad provident. Eum autem voluptate veritatis repellendus molestiae error.</p>
                    <a href="" class="more-btn my-3">Tahap Mendaftar PBC <i class="fas fa-chevron-right"></i></a>
                    <a href="https://s.id/pmbpbc" class="more-btn">Daftar Sekarang <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="section-title">
                <h2>PBC Latest Data</h2>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="fas fa-user-tie"></i>
                        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Dosen</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="fas fa-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Prestasi Mahasiswa</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fas fa-university"></i>
                        <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Lab</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fas fa-handshake"></i>
                        <span data-purecounter-start="0" data-purecounter-end="31" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Partnership</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= partner Section ======= -->
    <section id="partner" class="partner">
        <div class="container">

            <div class="section-title">
                <h2>Our Partnership</h2>
                <p>Politeknik Bintan Cakrawala telah berkerja sama dengan berbagai perusahaan ternama.</p>
            </div>

            <div class="partner-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/1.png" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/2.png" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/3.png" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/4.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/5.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/6.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/7.png" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/8.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/9.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/10.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/11.png" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/12.png" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/13.png" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/14.jpeg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/15.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/16.png" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/17.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/18.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/19.png" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/20.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/21.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/22.png" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/23.png" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="/assets/img/logo-kerjasama/24.jpg" class="img-fluid partner-img" alt="">
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>

    <!-- ======= Gallery Section ======= -->
    <!-- <section id="gallery" class="gallery">
        <div class="container">

            <div class="section-title">
                <h2>Gallery PBC</h2>
                <p>visualisasi seputar tentang Politeknik Bintan Cakrawala</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="/assets/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                            <img src="/assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="/assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                            <img src="/assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="/assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                            <img src="/assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="/assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                            <img src="/assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="/assets/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                            <img src="/assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="/assets/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                            <img src="/assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="/assets/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                            <img src="/assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="/assets/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                            <img src="/assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <a href="#" class="more-btn">Lebih Banyak Lagi <i class="fas fa-chevron-right"></i></a>
    </section> -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Politeknik Bintan Cakrawala</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0142652902987!2d104.32490791430641!3d1.1503003625056039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d97f7927c4669d%3A0xbdecc4ad7485fab!2sPoliteknik%20Bintan%20Cakrawala!5e0!3m2!1sen!2sid!4v1635000679735!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

    </section>

    <!-- ----------------------------------------------------------------------  -->

</main><!-- End #main -->

<?= $this->endSection(); ?>