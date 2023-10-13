var Login = function () {

    var login = () => {
        $("#submitLogin").on('click', function () {
            $.ajax({
                method: "POST",
                url: "http://localhost/login",
                data: { 
                    nome: "Pedro", 
                    email: "pedro@email.com" 
                },
                dataType: 'json',
                cache: false,
                success: function (response) {
                    Swal({
                        title: 'Sucesso',
                        text: response.message,
                        type: 'success',
                    }).then((result) => {
                        window.location.reload(true)
                    });
                },
                error: function (msg) {
                    Swal({
                        title: 'Falha',
                        text: msg.responseJSON.message != undefined ? msg.responseJSON.message : msg.responseText,
                        type: 'error',
                    });
                },
                complete: function () {
                    mApp.unblockPage();
                }
            })
        })
    }


    return {
        init: function() {
           login();
        }
    };
}();