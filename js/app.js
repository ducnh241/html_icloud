$(document).ready(function() {
    $("#sign-in").click(function() {
        var value_login = $('#account_name_text_field').val();
        if (value_login == '') {
            $('#account_name_text_field').focus();
        } else {
        	$('#sign_in_form').addClass('show-password');
        }
    });
});