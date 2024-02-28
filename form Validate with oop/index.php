<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	spl_autoload_register(function ($className) {
		require $className . ".php";
	});

	$form = new Validate($_POST, $_FILES);

	$errors = $form->validator();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-10">
				<form method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="forusername" class="form-label">Username</label>
						<input name="username" type="text" class="form-control" id="forusername"
							aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text text-danger fw-bold">
							<?= $errors['username'] ?? '' ?>
						</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input name="email" type="text" class="form-control" id="exampleInputEmail1"
							aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text text-danger fw-bold">
							<?= $errors['email'] ?? '' ?>
						</div>
					</div>

					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">images</label>
						<input name="img" type="file" class="form-control" id="exampleInputEmail1"
							aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text text-danger fw-bold">
							<?= $errors['images'] ?? '' ?>
						</div>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>