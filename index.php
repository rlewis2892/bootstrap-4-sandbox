<!doctype html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<!-- fontawesome -->
		<script src="https://kit.fontawesome.com/db382e693f.js" crossorigin="anonymous"></script>

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<title>Bootstrap Custom Style Example</title>
	</head>
	<body data-spy="scroll" data-target="#main-nav" data-offset="60">
		<!-- navbar -->
		<header>
			<div class="container-fluid">
				<nav id="main-nav" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
					<a class="navbar-brand" href="#">Custom Style Example</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#about">About Me</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#gallery">Design Assets</a>
							</li
							<li class="nav-item">
								<a class="nav-link" href="#contact">Contact</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://github.com/rlewis2892/bootstrap-4-sandbox/tree/cohort-29-css" target="_blank">GitHub</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>

		<!-- welcome section -->
		<section id="welcome" class="mt-5 py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="jumbotron text-center text-md-right">
							<h1>Hello Custom Bootstrap!</h1>
							<p class="lead mb-0">A simple PWP example.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- about me content section -->
		<section id="about" class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4 mb-3">
						<div class="h-100 p-4 border text-center text-md-left">
							<h3 class="mb-0">About Me</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-8">
						<p class="lead text-justify">Find something else more interesting eat half my food and ask for more. No, you can't close the door, i haven't decided whether or not i wanna go out pose purrfectly to show my beauty. Mark territory dont wait for the storm to pass, dance in the rain and skid on floor.</p>
						<p class="lead text-justify">Crash into wall scratch the postman wake up lick paw wake up owner meow meow meow loudly just to annoy owners i cry and cry and cry unless you pet me, and then maybe i cry just for fun.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- card content section -->
		<section id="gallery" class="py-5">
			<div class="container">
				<div class="container">
					<div class="row">
						<div class="col text-center mb-4">
							<h3>Design Assets</h3>
							<p class="lead">The following assets were used in the design of this page.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 col-lg-3 mb-2">
						<div class="card h-100">
							<img src="http://www.fillmurray.com/g/250/250" class="card-img-top" alt="fillmurray.com">
							<div class="card-body">
								<h5 class="card-title">Google Fonts</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-lg-3 mb-2">
						<div class="card h-100">
							<img src="http://www.fillmurray.com/g/250/250" class="card-img-top" alt="fillmurray.com">
							<div class="card-body">
								<h5 class="card-title">Fontawesome.io</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-lg-3 mb-2">
						<div class="card h-100">
							<img src="http://www.fillmurray.com/g/250/250" class="card-img-top" alt="fillmurray.com">
							<div class="card-body">
								<h5 class="card-title">Unsplash.com</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-lg-3 mb-2">
						<div class="card h-100">
							<img src="http://www.fillmurray.com/g/250/250" class="card-img-top" alt="fillmurray.com">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- contact form section -->
		<section id="contact" class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4 offset-md-3 offset-lg-4">
						<h3 class="text-center mb-4">Contact Me</h3>
						<!-- Begin Sample Contact Form. Create your own contact form. Do not copy and paste this one. -->
						<form id="rochelles-demo-form" action="../php/" method="post">
							<div class="form-group">
								<label for="contactDemoName">Name <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fa fa-user" aria-hidden="true"></i>
										</span>
									</div>
									<input type="text" class="form-control" id="contactDemoName" name="contactDemoName" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="contactDemoEmail">Email <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</span>
									</div>
									<input type="email" class="form-control" id="contactDemoEmail" name="contactDemoEmail" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="contactDemoSubject">Subject</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fa fa-pencil" aria-hidden="true"></i>
										</span>
									</div>
									<input type="text" class="form-control" id="contactDemoSubject" name="contactDemoSubject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="contactDemoMessage">Message <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fa fa-comment" aria-hidden="true"></i>
										</span>
									</div>
									<textarea class="form-control" rows="5" id="contactDemoMessage" name="contactDemoMessage" placeholder="I <3 CopyPasta :D~ (2000 characters max)"></textarea>
								</div>
							</div>
							<!-- reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="--YOUR RECAPTCHA SITE KEY--"></div>
							<button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
							<button class="btn btn-secondary" type="reset"><i class="fa fa-ban"></i> Reset</button>
						</form>

					</div><!--/.col-sm-4 -->
				</div><!--/.row-->

				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>
			</div>
		</section>

		<!-- footer -->
		<footer class="bg-secondary py-5 text-center text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<h3>Custom Styles Example</h3>
						<hr>
						<span>View this project on GitHub</span>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>