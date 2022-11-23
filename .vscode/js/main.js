const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://domain-da-pa-check.p.rapidapi.com",
	"method": "GET",
	"headers": {
		"X-RapidAPI-Key": "aec3c164bfmsh93ef0728512f74bp1f5961jsnd3d97673a7d4",
		"X-RapidAPI-Host": "domain-da-pa-check.p.rapidapi.com"
	}
};

$.ajax(settings).done(function (response) {
	console.log(response);
});


$('#button-search').on('click', function(){

    $.ajax({
        url: 'https://domain-da-pa-check.p.rapidapi.com',
        type: 'get',
        dataType : 'json',
        data : {
            'apikey' : 'aec3c164bfmsh93ef0728512f74bp1f5961jsnd3d97673a7d4',
            's' : $('#search-input').val()
        },
        success : function(result) {
            console.log(result);
        }
    })



})
