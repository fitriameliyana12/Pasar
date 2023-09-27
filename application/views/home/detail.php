<html>
	<title>LIJO-JOMBANG</title>
		<link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>asset/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>asset/css/prettyPhoto.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>asset/css/price-range.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>asset/css/animate.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>asset/css/main.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>asset/css/responsive.css" rel="stylesheet">

	<body style="background-color: #F0E68C;">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h1 class="title text-center">Detail dan Informasi Produk</h1>
						<br>
						<br>
						<br>
						<div class="container">
							<div class="card-body">
								<h5 class="card-title" style="font-size: 20px"> <?= $tbl_produk['id_produk']; ?></h5>
								<p class="card-text" style="font-size: 20px">
									<label for=""> <b> Nama Produk: </b> </label>
									<?= $tbl_produk['nama_produk']; ?>
								</p>
								<p class="card-text" style="font-size: 20px">
									<label for=""> <b> Harga: </b> </label>
									<?= $tbl_produk['harga']; ?>
								</p>
								<p class="card-text" style="font-size: 20px">
									<label for=""> <b> Stok: </b> </label>
									<?= $tbl_produk['stok']; ?>
								</p>
								<p class="card-text" style="font-size: 20px">
									<label for=""> <b> Nama Penjual: </b> </label>
									<?= $tbl_produk['nama']; ?>
								</p>
								<p class="card-text" style="font-size: 20px">
									<label for=""> <b> No Telepon: </b> </label>
									<?= $tbl_produk['no_tlp']; ?>
								</p>
								<!-- <a href="<?= base_url(); ?> home" class="btn btn-primary">Kembali</a> -->
								<!-- <button onclick="goBack()">Go Back</button>
									<script>
										function goBack() {
											window.history.back();
										}
									</script> -->
								<input style="background-color: #FFA500;" type="button" value="Kembali" onclick="history.back(-1)" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/price-range.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/main.js"></script>
	</body>
</html>