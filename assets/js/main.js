
$(document).on("submit", "form.js-register", function(event){

    event.preventDefault();

    var _form = $(this);
    var _error =$(".js-error", _form);
    var data = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val(),
        
    }

    if (data.email.length < 6) {

        _error
            .text("please enter a valide email address")
            .show();
            return false;
    }else if (data.password.length <8 ){
        _error
        .text("please enter a better password")
        .show();
        return false;
    }
    _error.hide();

    $.ajax({
        // type is post, not get, information is slightly more secure
        type: 'POST',
        url: '/ajax/register.php',
        data: data,
        dataType: 'json',
        asynch: true,
    }).done(function ajaxDone(data){
        console.log(data);
        if(data.redirect !==undefined){
            window.location = data.redirect;

        } else if (data.error !== undefined){

            _error.text(data.error).show();

        }


    })
    .fail(function ajaxFailed(e){
        console.log(e);
    })
    .always(function ajaxAlwaysDoThis(data){

        console.log('Always');
    })
    
    return 0;
})

