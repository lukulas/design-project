var Login = function () {
  var login = function login() {
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
        success: function success(response) {
          Swal({
            title: 'Sucesso',
            text: response.message,
            type: 'success'
          }).then(function (result) {
            window.location.reload(true);
          });
        },
        error: function error(msg) {
          Swal({
            title: 'Falha',
            text: msg.responseJSON.message != undefined ? msg.responseJSON.message : msg.responseText,
            type: 'error'
          });
        },
        complete: function complete() {
          mApp.unblockPage();
        }
      });
    });
  };
  return {
    init: function init() {
      login();
    }
  };
}();
