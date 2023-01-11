<?php
$text = file_get_contents('data/donuts.json');
$menu = json_decode($text, true);
$menu = $menu['menu'];
// echo $menu['menu'];
// var_dump($menu);
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Muli|Sniglet" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		body {
			font-family: 'Muli', sans-serif;
		}
	</style>
	<title>JCO web</title>
</head>

<body>
	<!-- nav start -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="logo.png" width="40"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Donuts <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Jcoffee</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Jcronut</a>
					</li>
				</ul>
				<span class="navbar-text">
					JCO <strong>Indonesia</strong>
				</span>
			</div>
		</div>
	</nav>
	<!-- nav end -->
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<h3>J.CO <u>Product</u></h3>
			</div>
		</div>

		<!-- card -->
		<div class="row">
			<?php foreach ($menu as $item) : ?>
				<div class="col-sm-3 text-center mt-2">
					<div class="card">
						<div class="card-header">
							<?= $item['nama'] ?>
						</div>
						<div class="card-body">
							<img src="images/<?= $item['gambar'] ?>" alt="<?= $item['nama'] ?>" width="200">
							<p><strong class="badge-warning">
									<h5><?= $item['kategori'] ?></h5>
								</strong></p>
							<p class="card-text"><?= $item['deskripsi'] ?></p>
							<a href="#" class="btn btn-primary">See detail</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
		<!-- card end -->
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>