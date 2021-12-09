<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Politeknik Bintan Cakrawala</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="/assets/img/icon_pbc.png" rel="icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="/assets/css/styles.css" rel="stylesheet">
</head>

<body>
	<!-- widgets -->
	<div class="widget">
		<a href="https://api.whatsapp.com/send?phone=6287755661122">WhatsApp <i class="fab fa-whatsapp"></i></a>

	</div>
	<?= $this->include('layout/navbar'); ?>
	<?= $this->renderSection('content'); ?>

	<!-- bagian popup -->
	<!-- <div class="popup">
		<div id="box">
			<a class="close" href="#">&times;</a>
			<img src="/assets/img/banner-pmb-website.png" class="img-fluid" alt="">
		</div>
	</div> -->
	<!-- akhir dari popup -->

	<!-- ======= Footer ======= -->
	<footer id="footer">

		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>Politeknik Bintan Cakrawala</h3>
						<p>
							Jl. Kota Kapur, Kawasan Pariwisata Bintan Resort <br>
							Sebong Lagoi, Bintan<br>
							Kepulauan Riau <br><br>
							<strong>Phone:</strong> 0877-5566-1122<br>
							<strong>Email:</strong> Poltek.bintancakrawala@pbc.ac.id<br>
						</p>
					</div>

					<div class="col-lg-2 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="/about">Tentang PBC</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="/dosen">Dosen</a></li>

						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>---------------------</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="/kerjasama">Kerjasama Kami</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="">SIAKAD</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="/news">Blog</a></li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 footer-newsletter">
						<h4>YouTube</h4>
						<p>Temukan kami di YouTube:</p>
						<span class="text-danger">API youtube?</span>
					</div>

				</div>
			</div>
		</div>

		<div class="copyright container d-md-flex py-4">

			<div class="me-md-auto text-center text-md-start">
				<div class="copyright">
					&copy; Copyright <strong><span>Politeknik Bintan Cakrawala</span></strong>. All Rights Reserved
				</div>
			</div>
			<div class="social-links text-center text-md-right pt-3 pt-md-0">
				<a href="https://web.facebook.com/Politeknik-Bintan-Cakrawala-255002312094582" class="facebook"><i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/poltekbintancakrawala/" class="instagram"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UC_bL4XnZUjhdaRh9AGte3bw" class="Youtube"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<!-- Vendor JS Files -->
	<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="/assets/vendor/php-email-form/validate.js"></script>
	<script src="/assets/vendor/purecounter/purecounter.js"></script>
	<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

	<!-- Template Main JS File -->
	<script src="/assets/js/main.js"></script>
	<script src="/assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('a.close').click(function(eve) {

				eve.preventDefault();
				$(this).parents('div.popup').fadeOut('slow');
			});
		});
	</script>

</body>

</html>