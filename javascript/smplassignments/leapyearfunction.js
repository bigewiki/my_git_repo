window.onload = function() {
  function isLeapYear(yearToTest) {
    if (yearToTest % 4 != 0) {
      return false;
    } else if (yearToTest % 100 == 0) {
      if (yearToTest % 400 == 0) {
        return true;
      } else {
        return false;
      }
    } else {
      return true;
    }
  }
  var result = isLeapYear(2100);
