$(document).ready(initialize);

var products = [];
var totalPrice = 0;
var paid = false;

function initialize() {
	$("#placeOrder").on('click', function(event) {
		event.preventDefault();
		placeOrder();
	});

	$("#newOrder").on('click', function(event) {
		event.preventDefault();
		location.reload();
	});
}

function addProductToList(qr) {
	if(!paid) {
		$("#qr-code").text(qr);
		var product = API.getProduct({code: qr});
		products.push(product);
		$("#productsTable").append("<tr><td>" + product.name + "</td><td>€" + reusableFunctions.toTwoDecimals(product.price / 100) + "</td><td>" + reusableFunctions.date.formatLocal(product.date) + "</td></tr>");
		totalPrice += product.price;
		$("#totalPrice").text(reusableFunctions.toTwoDecimals(totalPrice / 100));
		$("html, body").animate({ scrollTop: $(document).height() }, 1000);
	}
}

function placeOrder() {
	var dataToPost = {
		products: JSON.stringify(products), 
		price: totalPrice,
		seller_id: SELLER_ID
	}

	var postResult = API.postOrder(dataToPost);
	var orderId = postResult.orderId;

	if(orderId > 0) {
		$("#orderCode").html('<img src="http://barcodes4.me/barcode/qr/barcode.png?value=' + orderId + '&size=10" />');
		paid = true;
		$("#placeOrder").prop("disabled",true);
		setTimeout(function(){
			window.print(); 
		}, 1000);
	}
	
}