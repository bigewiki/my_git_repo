  window.onload = function() {
    setupStuff();
    createValidator();

    document.getElementById('radioButtonsE').onclick = radioCheck;
    document.getElementById('radioButtonsE').onmouseover = radioCheck;
    document.getElementById("comments").onkeyup = charsLeft;
    document.getElementById('check_boxes').addEventListener("mouseover", checkCheckbox);
    document.getElementById('check_boxes').addEventListener("click", checkCheckbox);


  }



  function setupStuff() {
    var today = new Date();
    var lastDay = new Date(today.getFullYear(), today.getMonth() + 1, 0).getDate();
    createMenu(1, lastDay, 'Choose a Day', 'dayMenu');
    var oldYear = today.getFullYear() - 125;
    var thisYear = today.getFullYear()
    createMenu(oldYear, thisYear, 'Select Year', 'yearMenu');
    createMenu(1, 12, 'Select Month', 'monthMenu');


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
    validatorLink += '"><img src="images/html5icon.jpg" alt="html5 icon validator" style="width: 50px; height: 50px; border: 0;"></a>';
    console.log(validatorLink);
    document.getElementById('validator').innerHTML = validatorLink;
  }

  function radioCheck() {
    var drinkChoices = document.forms[0].radioButtons;
    var strMsg = "Don't forget the booze!";
    for (var i = 0; i < drinkChoices.children.length; i++) {
      if (drinkChoices.children[i].checked == true) {
        strMsg = "OK";
        break;
      }
    }
    document.getElementById('radioButtonsE').innerHTML = strMsg;
  }

  function charsLeft() {
    var charlimit = 500;
    var amtTyped = document.getElementById("comments").value.length;
    var numcharsleft = charlimit - amtTyped;
    if (numcharsleft <= charlimit && numcharsleft > 0) {
      var strMsg = "You have " + numcharsleft + " left to type";

      document.getElementById("comLength").innerHTML = strMsg;
    } else {
      var strMsg = "You have reached my limit";

      document.getElementById("comLength").innerHTML = strMsg;
      document.getElementById("comments").value =
      document.getElementById("comments").value.substr(0, charlimit - 1);
    }
  }

  function validateCheckBoxes() {
      var eMsg = "";
      var chckbxes = document.getElementsByName('option3');
      for (var i = 0; i < chckbxes.length; i++) {
        eMsg = "";
        if (chckbxes[i].checked == false) {
          eMsg = "Choose at least one.";
        }
        document.getElementById('checkE').innerHTML = eMsg;
      }

    }
  }
