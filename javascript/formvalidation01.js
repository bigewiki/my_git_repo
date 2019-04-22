  function setupStuff() {
    var today = new Date();
    var lastDay = new Date(today.getFullYear(), today.getMonth() + 1, 0).getDate();
    createMenu(1, lastDay, 'Choose a Day', 'dayMenu');
    var oldYear = today.getFullYear() - 125;
    var thisYear = today.getFullYear()
    createMenu(oldYear, thisYear, 'Select Year', 'yearMenu');
    createMenu(1, 12, 'Select Month', 'monthMenu');
    createMenu(25, 1000, 'Select a Number', 'numMenu');

  }

  function createMenu(startNum, endNum, menuMsg, targetId) {
    var strMsg = '<option value="' + menuMsg + '">' + menuMsg + '</option>';
    var counter = startNum;
    while (counter <= endNum) {
      strMsg += '<option value="' + counter + '">' + counter + '</option>';
      counter++;
    }
    document.getElementById(targetId).innerHTML = strMsg
  }

  function createValidator() {

    var myURL = window.location.href;
    var validatorLink = '<a href="http://validator.w3.org/nu/?doc=';
    validatorLink += myURL;
    validatorLink += '">HTML 5 Validator</a>';
    console.log(validatorLink);
    document.getElementById('validator').innerHTML = validatorLink;
  }

  function radioCheck() {
    var drinkChoices = document.forms[0].radioButtons;
    var strMsg = "Don't forget the booze!";
    for (var i = 0; i < drinkChoices.length; i++) {
      if (drinkChoices[i].checked == true) {
        strMsg = "OK";
        break;
      }
    }
    document.getElementById('radioButtonsE').innerHTML = strMsg;

  }
