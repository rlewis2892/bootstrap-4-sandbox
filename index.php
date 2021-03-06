<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- Fontawesome -->
		<script src="https://kit.fontawesome.com/db382e693f.js"></script>

		<!-- jQuery - NOTE VERSION FOR FANCYBOX COMPATIBILITY  -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- jQuery Form, Validate, Additional Methods for Contact Form -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Boostrap JS - Popper.js, then Bootstrap JS -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- JavaScript Form Validator File -->
		<script type="text/javascript" src="./js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Fancybox 3 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

		<title>Fancybox + Bootstrap 4 Demo</title>
	</head>
	<body>
		<!-- Page Header -->
		<header class="bg-primary py-4 text-white">
			<div class="container">
				<h2>FancyBox + Bootstrap 4 Demo</h2>
			</div>
		</header>

		<!-- Instructions Section-->
		<section class="py-5">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<p class="card-text">Fancybox Documentation: <a href="http://fancyapps.com/fancybox/3/docs/" target="_blank">http://fancyapps.com/fancybox/3/docs/</a></p>
						<p class="card-text">GitHub Repo: <a href="https://github.com/rlewis2892/bootstrap-4-sandbox" target="_blank">https://github.com/rlewis2892/bootstrap-4-sandbox</a></p>
						<p class="card-text">Batch image resizing tool: <a href="https://www.birme.net" target="_blank">https://www.birme.net</a></p>
					</div>
				</div>
			</div>
		</section>

		<!-- BEGIN TRAIL CARDS SECTION -->
		<section class="py-5">
			<div class="container-fluid">
				<div class="row">

					<div class="col-xl-2 col-md-3 col-sm-6 mb-2">
						<div class="d-flex flex-column border text-center p-3 h-100">
							<h4 class="flex-grow-1 mb-4">Trail Name</h4>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>

					<div class="col-xl-2 col-md-3 col-sm-6 mb-2">
						<div class="d-flex flex-column border text-center p-3 h-100">
							<h4 class="flex-grow-1 mb-4">Another Trail Name</h4>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>

					<div class="col-xl-2 col-md-3 col-sm-6 mb-2">
						<div class="d-flex flex-column border text-center p-3 h-100">
							<h4 class="flex-grow-1 mb-4">Trail Name</h4>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>

					<div class="col-xl-2 col-md-3 col-sm-6 mb-2">
						<div class="d-flex flex-column border text-center p-3 h-100">
							<h4 class="flex-grow-1 mb-4">Much Longer Trail Name Right Here</h4>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>

					<div class="col-xl-2 col-md-3 col-sm-6 mb-2">
						<div class="d-flex flex-column border text-center p-3 h-100">
							<h4 class="flex-grow-1 mb-4">Trail Name</h4>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>

					<div class="col-xl-2 col-md-3 col-sm-6 mb-2">
						<div class="d-flex flex-column border text-center p-3 h-100">
							<h4 class="flex-grow-1 mb-4">Some Trail Name :P</h4>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>

				</div><!--/.row-->
			</div><!--/.container-fluid-->
		</section>

		<!-- Begin Gallery Section -->
		<section>
			<div class="container">
				<div class="row">

					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="img/full/cat-001.jpg" data-fancybox="gallery" data-caption="this is cat 001">
							<img src="img/tn/cat-001-tn.jpg" alt="cat 001" class="img-fluid">
						</a>
					</div>

					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="img/full/cat-002.jpg" data-fancybox="gallery" data-caption="this is cat 002">
							<img src="img/tn/cat-002-tn.jpg" alt="cat 002" class="img-fluid">
						</a>
					</div>

					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="img/full/cat-003.jpg" data-fancybox="gallery" data-caption="this is cat 003">
							<img src="img/tn/cat-003-tn.jpg" alt="cat 003" class="img-fluid">
						</a>
					</div>

					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="img/full/cat-004.jpg" data-fancybox="gallery" data-caption="this is cat 004">
							<img src="img/tn/cat-004-tn.jpg" alt="cat 004" class="img-fluid">
						</a>
					</div>

					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="img/full/cat-005.jpg" data-fancybox="gallery" data-caption="this is cat 005">
							<img src="img/tn/cat-005-tn.jpg" alt="cat 005" class="img-fluid">
						</a>
					</div>

					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="img/full/cat-006.jpg" data-fancybox="gallery" data-caption="this is cat 006">
							<img src="img/tn/cat-006-tn.jpg" alt="cat 006" class="img-fluid">
						</a>
					</div>

					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="img/full/cat-007.jpg" data-fancybox="gallery" data-caption="this is cat 007">
							<img src="img/tn/cat-007-tn.jpg" alt="cat 007" class="img-fluid">
						</a>
					</div>

					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="img/full/cat-008.jpg" data-fancybox="gallery" data-caption="this is cat 008">
							<img src="img/tn/cat-008-tn.jpg" alt="cat 008" class="img-fluid">
						</a>
					</div>

				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>

		<!-- Begin Form Section -->
		<section class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 offset-lg-4">

						<h2 class="text-center">Contact Form!</h2>

						<!--Begin Form -->
						<form id="rochelles-demo-form" action="php/index.php" method="post">
							<div class="form-group">
								<label for="contactDemoName">Name <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
									</div>
									<input type="text" class="form-control" id="contactDemoName" name="contactDemoName" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="contactDemoEmail">Email <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
									</div>
									<input type="email" class="form-control" id="contactDemoEmail" name="contactDemoEmail" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="contactDemoSubject">Subject</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-pencil" aria-hidden="true"></i>
										</div>
									</div>
									<input type="text" class="form-control" id="contactDemoSubject" name="contactDemoSubject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="contactDemoMessage">Message <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-comment" aria-hidden="true"></i>
										</div>
									</div>
									<textarea class="form-control" rows="5" id="contactDemoMessage" name="contactDemoMessage" placeholder="I <3 CopyPasta :D~ (2000 characters max)"></textarea>
								</div>
							</div>

							<!-- reCAPTCHA -->
							<div class="g-recaptcha pt-2 pb-3" data-sitekey="6LeVtF0UAAAAAOtQHqB-rqVfEFJBEPbDXWAVXptg"></div>
							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
							<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
						</form>
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->

				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-lg-4 offset-lg-4 py-3">
						<div id="output-area"></div>
					</div>
				</div>
			</div><!--/.container -->
		</section>

	</body>
</html>