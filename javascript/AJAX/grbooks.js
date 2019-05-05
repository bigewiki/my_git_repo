function ajaxfunction(command, sourceID, targetID, useJSON) {
  return function() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if (useJSON == "yes") {
          var myArr = JSON.parse(this.responseText);
          var jsonMsg = "Json List of Titles <br />";
          for (var i = 0, len = myArr.length; i < len; i++) {
            jsonMsg = jsonMsg + myArr[i].title + ',' + myArr[i].year + '<br />';

          }
          document.getElementById(targetID).innerHTML = jsonMsg;
        } else {
          document.getElementById(targetID).innerHTML = this.responseText;
          //document.getElementById(targetID).innerHTML = "Response was sent?";
        }
      }
    }
    charstyped = encodeURIComponent(document.getElementById(sourceID).value);
    xmlhttp.open("GET", "https://www.lampbusters.com/coperni/javascript2/grbooks_ajax.php?command=" + command + "&searchterm=" + charstyped, true);
    xmlhttp.send();
  }
}

function yearparse(jsonString) {
  
}

window.onload = setupEvents;

function setupEvents() {
  document.getElementById('year').onkeyup = ajaxfunction('byyear', 'year', 'outputyear', 'no');
  document.getElementById('title').onkeyup = ajaxfunction('bytitle', 'title', 'titleoutput', 'no');
  document.getElementById('yearjson').onkeyup = ajaxfunction('byyearjson', 'yearjson', 'yearout', 'yes');
}
