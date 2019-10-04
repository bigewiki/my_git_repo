<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Form</title>
<style>
    .error {
      Width: 100%;
      color: #FFFFFF;
      background-color: #FF0000;
    }
</style>
</head>
<body>

<?php
$nameErr = $ageErr = $osErr = $websiteErr = "";
$name = $age = $os = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
        $error = true;
  } else if (strlen($_POST["name"]) > 30) {
                $nameErr = "Cool it John Jacob yada yada yada!";
                $error = true;
        } else {
        $name = test_input($_POST["name"]);
  }

  if (empty($_POST["age"])) {
    $ageErr = "Number is required";
        $error = true;
  } else {
    $age = test_input($_POST["age"]);

    if (!filter_var($age, FILTER_VALIDATE_INT)){
      $ageErr = "Invalid age format";
    }
  }

  if (empty($_POST["OS"])) {
    $osErr = "Favorite OS is required!";
        $error = true;
  } else {
   $os = test_input($_POST["OS"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
        if ($_POST["submit"] && !$error){
                echo "<h2>Your Input:</h2>";
                if (strtolower($_POST["name"]) == "jeff") {
                        echo "Hey there " . $name . ", come on in!";
                } else {
                        echo "Hey there " . trim($name) . "!";
                }
                echo "<br><br>";
                echo "Your age is " . $age . ".";
                echo "<br><br>";
                 $number = 1;

                while ($number <= $age) {
                        echo $number . " ";

                        $number++;
                }
                echo "<br><br>";
                echo "You prefer to use " . $os . ":";
                echo "<br>";

                switch($os)
                {
                        case "macos":
                                echo '<a href="https://apple.com">
                Mac lovers should check out this website!</a>';
                                break;
                        case "linux":
                                echo '<a href="https://parrotlinux.org/">
                Linux users should check out this article!</a>';
                 break;
                        default:
                                echo '<a href="https://medium.com/@i_AnkurBiswas/advantages-from-switching-windows-to-mac-f87139e0137e"> Windows huh? </a>';
                                break;
                }
        } else {
                include("form2.php");
        }
        echo "<br><br>";
        echo date("l, F j, o");
?>
        <br><br>
        <div id="validator">
                <a href="http://validator.w3.org/nu/?doc=https://nbtl.mesacc.edu/jstokes/phpclass/firstform.php">
                HTML 5 Validation</a>
        </div>

</body>
</html>
