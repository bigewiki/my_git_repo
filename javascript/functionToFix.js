function createMenu()
{
	var strMsg = '<option value="">Choose a Day</option>';
	var counter = 1;
		var today = new Date();
	//Due to the getMonth() method starting at 0 we need to + 1
	var lastDay = new Date(today.getFullYear(), today.getMonth() +1, 0).getDate();
	//Should really use the Date() object to look up the # of days in month
	//var lastDay = 31;
	while ( counter <= lastDay )
	{
		strMsg += '<option value="' + counter + '">' + counter + '</option>';
		counter++;
	}
	document.forms[0].day.innerHTML = strMsg;
}
