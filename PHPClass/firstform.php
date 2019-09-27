<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Form</title>
<style>
.error {color: #FF0000;}
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
  } else if (strlen($_POST["name"] > 30)) {
                $nameErr = "Why such a long name?";
                $error = true;
        } else {
        $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
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
                if (strtolower($_POST["name"]) == "tony") {
                        echo "Hey there " . $name . ", you sexy beast!";
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
                echo "You identify as " . $os . ":";
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
                                echo '<a href="https://medium.com/@i_AnkurBiswas/advantages-from-switching-windows-to-mac-f87139e0137e"> Windows huh? </a>'; <br/>
                                break;
                }
        } else {
                include("index.php");
        }
        echo "<br><br>";
        echo date("l, F j, o");
?>
        <br><br>
        <div id="validator">
                <a href="http://validator.w3.org/nu/?doc=https://nbtl.mesacc.edu/jstokes/firstform.php">
                HTML 5 Validation</a>
        </div>

</body>
</html>
