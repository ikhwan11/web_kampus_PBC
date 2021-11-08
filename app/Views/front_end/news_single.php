<?= $this->extend('layout/main'); ?>
<?= $this->Section('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero-news" class="d-flex align-items-center">
    <div class="container">
        <h1>Politeknik Bintan Cakrawala News</h1>
        <br>
        <a href="/news" class="text-white scrollto">Lebih banyak <i class="fa fa-chevron-right"></i></a>

    </div>
</section>

<main id="main">

    <section class="konten">
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?= $blog_data['judul']; ?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on <?= $blog_data['tanggal']; ?> by <?= $blog_data['admin']; ?></div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?= $blog_data['kategori']; ?></a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="/assets/img/blog/<?= $blog_data['gambar']; ?>" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?= $blog_data['paragraf_1']; ?></p>
                            <p class="fs-5 mb-4"><?= $blog_data['paragraf_2']; ?></p>
                            <p class="fs-5 mb-4"><?= $blog_data['paragraf_3']; ?></p>
                            <p class="fs-5 mb-4"><?= $blog_data['paragraf_4']; ?></p>
                            <p class="fs-5 mb-4"><?= $blog_data['paragraf_5']; ?></p>
                            <p class="fs-5 mb-4"><?= $blog_data['paragraf_6']; ?></p>
                            <p class="fs-5 mb-4"><?= $blog_data['paragraf_7']; ?></p>
                        </section>
                    </article>

                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
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