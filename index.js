

$('#button-search').on('click'), function () {

    $.ajax({
        url: 'https://domain-da-pa-check.p.rapidapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : '1a0615ebf3msh1076b75bd089cd4p17eaa7jsn42cc1862836f',
            's' : $('#search-input').val()
        },
        success: function(result) {
            console.log(result);
        }
    })

}