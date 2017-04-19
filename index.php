<?php
	require "config.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>JSQRCode Scanner Demo</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

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
	</head>
	<body>
		<h1>JSQRCode Scanner Demo</h1>
		<p>Hold a QR Code in front of your webcam.</p>
		<video  id="camsource" autoplay width="320" height="240">Put your fallback message here.</video>
		<canvas id="qr-canvas" width="320" height="240" style="display:none"></canvas>
		<h3 id="qr-value"></h3>
	</body>
</html>