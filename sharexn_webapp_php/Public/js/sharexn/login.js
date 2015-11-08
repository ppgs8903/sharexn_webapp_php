$().ready(function(){
	var validateStatus = true;
	var login = $("#login");
	var singup = $("#singleup");
	var InputEmail = $("#InputEmail");
	var InputPassword = $("#InputPassword");
	InputEmail.blur(function(){
		validateStatus = true;
		validateStatus &= validateEmail(InputEmail.val());
		console.log(validateStatus);
	});
	InputPassword.blur(function(){
		validateStatus = true;
		validateStatus = validateStatus & validatePassword(InputPassword.val());
	});
	login.click(function(){
		validateStatus = validateStatus & validateEmail(InputEmail.val());
	});
});

function validateEmail(str){
	var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	var InputEmailGroup = $("#InputEmailGroup");
	if(reg.test(str)){
		InputEmailGroup.removeClass("has-warning");
		InputEmailGroup.addClass("has-success");
		return true;
	}else{
		InputEmailGroup.addClass("has-warning");
		InputEmailGroup.removeClass("has-success");
		return false;
	}
}

function validatePassword(str){
	var reg = /^[A-Za-z0-9]{5,32}$/;
	var InputPasswordGroup = $("#InputPasswordGroup");
	if(reg.test(str)){
		InputPasswordGroup.removeClass("has-warning");
		InputPasswordGroup.addClass("has-success");
		return true;
	}else{
		InputPasswordGroup.addClass("has-warning");
		InputPasswordGroup.removeClass("has-success");
		return false;
	}
}