$(document).ready(initialize);

var products = [];
var totalPrice = 0;

function initialize() {
	$("#placeOrder").on('click', function(event) {
		event.preventDefault();
		placeOrder();
	});
}

function addProductToList(qr) {
	$("#qr-code").text(qr);
	var product = API.getProduct({code: qr});
	products.push(product);
	$("#productsTable").append("<tr><td>" + product.name + "</td><td>€" + (product.price / 100) + "</td><td>" + reusableFunctions.date.formatLocal(product.date) + "</td></tr>");
	totalPrice += product.price;
	$("#totalPrice").text((totalPrice / 100).toFixed(2));
	$("html, body").animate({ scrollTop: $(document).height() }, 1000);
}

function placeOrder() {
	var postResult = API.postOrder({
		products: JSON.stringify(products), 
		price: totalPrice
	});

	console.log(postResult);
}