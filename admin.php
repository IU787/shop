<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
			@font-face {
			font-family: IU;
			src: url(19280.otf);
			}
			.text {
				font-family: IU;
			}
	</style>
</head>
<body class="text">
	<div class="mx-auto col-12">
		<form action="insert.php" method="GET">
			<div class="mt-3">
				<span class="font-weight-bold">Title: </span>
				<input type="" name="title">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Decription: </span>
				<textarea name="des"></textarea>
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Img: </span>
				<input type="" name="img">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Price: </span>
				<input type="" name="price">
			</div>
			<button class="btn btn-dark mt-5">Download</button>
		</form>
	</div>
</body>
</html>