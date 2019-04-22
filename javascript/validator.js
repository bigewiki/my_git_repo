function createValidator() {

	var myURL = window.location.href;
	var validatorLink = '<a href="http://validator.w3.org/nu/?doc=';
	validatorLink += myURL;
	validatorLink += '">HTML 5 Validator</a>';
	console.log(validatorLink);
	document.getElementById('validator').innerHTML = validatorLink;
}
