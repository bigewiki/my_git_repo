function createValidator() {

	var myURL = window.location.href;
	var validatorLink = '<a href="http://validator.w3.org/nu/?doc=';
	validatorLink += myURL;
	validatorLink += '"><img src="images/html5icon.jpg" alt="html5 icon validator" style="width: 50px; height: 50px; border: 0;"></a>';
	console.log(validatorLink);
	document.getElementById('validator').innerHTML = validatorLink;
}
