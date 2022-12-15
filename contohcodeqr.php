<!DOCTYPE html>
<html lang="en">
<head>
<title>Contoh QR CODE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
	
	<div class="container mt-3">
		<h2>Contoh QR CODE</h2>
		<form action="" method="post">
			<div class="mb-3 mt-3">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter email" name="email>"
			</div>
			<button type="submmit" class="btn btn-primary">submit</button>
		</form>
<?php if (isset($_POST['email'])) {
	include"phpqrcode/qrlib.php";
	$penyimpanan ="temp/";
	if (!file_exists($penyimpanan)) mkdir($penyimpanan);
	$isiqr=sha1(filter_var($_POST['email'],FILTER_SANITIZE_STRING));
	$isi  =$isiqr;
	QRcode::png($isi, $penyimpanan.'004_4.png', QR_ECLEVEL_H, 4, 15);
	echo '<img src="'.$penyimpanan.'/004_4.png" class="rounded" alt="Cinque Terre">';
}
?>
</div>

</body>
</html>