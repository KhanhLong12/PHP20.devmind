function checkPhoneNumber(phone) {
				var flag = false;
				phone = phone.replace('(+84)', '0');
				phone = phone.replace('+84', '0');
				phone = phone.replace('0084', '0');
				phone = phone.replace(/ /g, '');
				if (phone != '') {
					var firstNumber = phone.substring(0, 2);
					if ((firstNumber == '09' || firstNumber == '08' || firstNumber == '03'|| firstNumber == '05'|| firstNumber == '02'|| firstNumber == '04'|| firstNumber == '07') && phone.length == 10) {
						if (phone.match(/^\d{10}/)) {
							flag = true;
						}
					} 
					return flag;
				}}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

$(".btc").on('click',function(){
	var name = $('.name').val();
	if(name==""){
		$('.name-err').html('!This field is required');
	}else if (name.length<8) {
		$('.name-err').html('!Enter more than 8');
	}
	else {
		$('.name-err').html('');
	}
	var masv = $('.masv').val();
	if (masv=="") {
		$('.sv-err').html('!This field is required');
	}
	else {
		$('.sv-err').html('');
	}
	var sdt = $('.Sdt').val();
	if (sdt=="") {
		$('.phone-err').html('!This field is required');
	}else if (checkPhoneNumber(phone)==false) {
		$('phone-err').html('! Nhập sai số điện thoại');
	}
	else{
		$('.phone-err').html('');
	}

	var email = $('.email1').val();
	if(validateEmail(email)){
		$('.email-err').html('');
		dem++;
	}else if (email == validateEmail(email)) {
			$('.email-err').html('!This field is required');
	}
	else {
		$('.email-err').html('!Wrong input format');
	}
	var dc = $('.DC').val();
	if (dc=="") {
		$('.dc-err').html('!This field is required');
	}
	else {
		$('.dc-err').html('');
	}
})