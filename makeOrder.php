<?php
	require "config.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Experascan Kassa</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/defines.js"></script>
		<script type="text/javascript" src="js/api.js"></script>
		<script type="text/javascript" src="js/reusableFunctions.js"></script>

		<script type="text/javascript" src="js/lib/jsqrcode/grid.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/version.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/detector.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/formatinf.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/errorlevel.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/bitmat.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/datablock.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/bmparser.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/datamask.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/rsdecoder.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/gf256poly.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/gf256.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/decoder.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/QRCode.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/findpat.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/alignpat.js"></script>
		<script type="text/javascript" src="js/lib/jsqrcode/databr.js"></script>

		<script type="text/javascript" src="js/qr.js"></script>
		<script type="text/javascript" src="js/camera.js"></script>
		<script type="text/javascript" src="js/initCamera.js"></script>
		<script type="text/javascript" src="js/page/makeOrder.js"></script>
	</head>
	<body>
		<img src="img/spar.JPG" width="300" />
		<div id="cameraContainer">
			<video  id="camsource" autoplay width="320" height="240">Geen camera</video>
			<canvas id="qr-canvas" width="320" height="240" style="display:none"></canvas>
		</div>
		<br>
		<button id="newOrder">Nieuwe order</button>
		<p id="qr-value" style="display: none;"></p>
		<p id="qr-code"></p>
		<table id="productsTable">
			<tr>
				<th>Product</th>
				<th>Prijs</th>
				<th>Houdbaarheidsdatum</th>
			</tr>
		</table>
		<h2>Totaal: €<span id="totalPrice">0.00</span></h2>
		<button id="placeOrder">Afrekenen</button>

		<div id="orderCode"></div>
	</body>
</html>