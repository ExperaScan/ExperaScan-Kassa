var API = {
	// Global variables
	baseUrl: "https://stud.hosted.hr.nl/0894225/Jaar_3/OP3/Preasure_Cooker/api/",
	endpoints: {
		getOrder: "getOrder",
		postOrder: "postOrder",
		getProduct: "getProduct"
	},

	// Global functions

	getOrder: function(data = {}) {
		var result = this.getFromAPI(this.endpoints.getOrder, data);
		return result;
	},

	getProduct: function(data = {}) {
		var result = this.getFromAPI(this.endpoints.getProduct, data);
		return result;
	},

	postOrder: function(data = {}) {
		var result = this.postToAPI(this.endpoints.postOrder, data);
		return result;
	},

	getFromAPI: function(endPoint, data = {}) {
		var result = null;
		$.ajax({
			type: 'GET',
			data: data,
			url: this.baseUrl + endPoint,
			dataType: 'json',
			async: false,
			success: function(jsonData){
				result = jsonData;
			},
			error: function(jqxhr,textStatus,errorThrown) {
				result = false;
			}
		});
		return result;
	},

	postToAPI: function(endPoint, data = {}) {
		var result = null;
		$.ajax({
			type: 'POST',
			data: data,
			url: this.baseUrl + endPoint,
			dataType: 'json',
			async: false,
			success: function(jsonData){
				result = jsonData;
			},
			error: function(jqxhr,textStatus,errorThrown) {
				result = false;
			}
		});
		return result;
	}
}