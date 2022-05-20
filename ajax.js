
$( document ).ready(function() {
    $("#register_form").submit(
        function(){
            sendAjaxForm('register_form',
                         'validate.php');
            return false;
        }
    );
});

function sendAjaxForm(register_form, url) {
    $.ajax({
        url:     url,
        type:     "POST",
        dataType: "html",
        data: $("#"+register_form).serialize(),
        success: function(response) {
            console.log(response)
            result = $.parseJSON(response);
            if (result.error.value){
                $('#errors').html(result.error.value);
            }else{
                $('#form-box').html('<center>'+'Добро пожаловать, '+result.name.value +' '+result.surname.value+ '<br>'+'Вы успешно зарегистрированы!' +'<br>'+ ' Ваша почта: '+ result.email.value +'<center>');
            }
        },
        error: function(response) {
            $('#form-box').html('Ошибка');
        }
    });
}