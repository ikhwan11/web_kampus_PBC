<?= $this->extend('layout/main'); ?>
<?= $this->Section('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero-news" class="d-flex align-items-center">
    <div class="container">
        <h1>Welcome to <br> Politeknik Bintan Cakrawala News</h1>
        <br>
        <a href="#latest" class="text-white scrollto">Berita terbaru <i class="fas fa-grip-lines-vertical"></i></a>

    </div>
</section>

<main id="main">

    <section id="latest" class="konten">
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <h2>Berita Teratas</h2>
                    <hr>
                    <div class="card mb-4">
                        <a href="/news/detail_news/<?= $blog_terbaru['id_blog']; ?>"><img class="card-img-top" src="/assets/img/blog/<?= $blog_terbaru['gambar']; ?>" class="img-fluid" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted tanggal"><i class="far fa-calendar-alt"></i> <?= $blog_terbaru['tanggal']; ?></div>
                            <h2 class="card-title"><?= $blog_terbaru['judul']; ?></h2>
                            <p class="card-text"><?= $blog_terbaru['paragraf_1']; ?></p>
                            <a class="btn more-btn" href="/news/detail_news/<?= $blog_terbaru['id_blog']; ?>">Selengkapnya →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <h2>Lebih banyak</h2>
                        <hr>
                        <?php foreach ($blog_data as $blog) : ?>
                            <div class="col-lg-6">
                                <!-- Blog post-->
                                <div class="card mb-4">
                                    <a href="/news/detail_news/<?= $blog['id_blog']; ?>"><img class="card-img-top" src="/assets/img/blog/<?= $blog['gambar']; ?>" alt="..." /></a>
                                    <div class="card-body">
                                        <div class="small text-muted tanggal"><i class="far fa-calendar-alt"></i> <?= $blog['tanggal']; ?></div>
                                        <h2 class="card-title h4"><?= $blog['judul']; ?></h2>
                                        <p class="card-text"><?= $blog['paragraf_1']; ?></p>
                                        <a class="btn more-btn" href="/news/detail_news/<?= $blog['id_blog']; ?>">Selengkapnya →</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <!-- Pagination-->
                    <?= $pager->links('tb_blog', 'admin_pagination'); ?>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <!-- <div class="card mb-4">
                        <div class="card-header">Temukan Berita</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn more-btn" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div> -->
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Mahasiswa</a></li>
                                        <li><a href="#!">Event</a></li>
                                        <li><a href="#!">Wisata</a></li>
                                        <li><a href="#!">Kuliner</a></li>
                                        <li><a href="#!">Perhotelan</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Prodi</a></li>
                                        <li><a href="#!">Berita</a></li>
                                        <li><a href="#!">Prestasi</a></li>
                                        <li><a href="#!">Olahraga</a></li>
                                        <li><a href="#!">Fotografi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?= $this->endSection(); ?>