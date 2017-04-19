var currentBarcode = "";
var previousBarcode = "";
var scanTimer;

function read(barcode) {
	var pattern = new RegExp("[0-9]+-[0-9]+");
	if (pattern.test(barcode)) {
		currentBarcode = barcode;
		if(currentBarcode != previousBarcode) {
			clearTimeout(scanTimer);
			var audio = new Audio('sounds/beep.mp3');
			audio.play();
			addProductToList(currentBarcode);
			scanTimer = setTimeout(function(){
				previousBarcode = "";
			}, 2000);
		} else {
			$("#qr-code").text("Code al gelezen");
		}
	} else {
		$("#qr-code").text("Geen geldige productcode");
	}
}

qrcode.callback = read;