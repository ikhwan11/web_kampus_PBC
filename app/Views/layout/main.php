<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="/assets/img/icon_pbc.png" type="image/png">
	<!-- Vendor CSS Files -->
	<link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="/assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet">

	<title>Home</title>
</head>

<body>

	<?= $this->include('layout/navbar'); ?>
	<?= $this->renderSection('content'); ?>
	<?= $this->include('layout/footer'); ?>

	<!-- vendor JS -->
	<script src="/assets/vendor/aos/aos.js"></script>
	<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

	<script src="/assets/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/js/script.js"></script>

</body>

</html>