$(function(){

    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });



});


function ajaxCall(url, type, dataType, data, success_method, error_method, selector, additionalData) {

    $.ajax({
        url: url,
        type: type,
        dataType: dataType,
        data: data,
        async: false,
        success: function (response) {
            success_method(response, selector, additionalData);
        },
        error: function (response) {
            console.log(response);
        },
        statusCode: {
            403: function (xhr) {
                error_method(xhr.responseText);
            }
        }
    });
}


function show_success_message(response) {
    if (response.status == 'valiation_error') {
        show_validation_messages(response);
    } else {
        show_gritter(response.status, response.msg);
    }
}
