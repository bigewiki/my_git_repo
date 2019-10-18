<?php
  declare(strict_types=1);
  $yourpath = dirname($_SERVER['SCRIPT_NAME']). '/';
  $lifetime = 0;  //0 expires when browser closes, otherwise time in seconds
  session_set_cookie_params ($lifetime,$yourpath);
  session_start();
  session_regenerate_id();
  function killsession(string $cookiepath)
  {
    session_unset();
    session_destroy();
    setcookie(session_name(),"",time() - 3600, $cookiepath);
  }
  if (isset ($_POST['reset'])) {
    killsession($yourpath);
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
  function rolldice(int $numsides, int $numdice):array
  {
    if ( $numsides == 0 or $numdice == 0 )
    {
      return $diceRolls;
    }
    else
    {
      for ( $i = 1; $i <= $numdice; $i++)
      {
        $diceRolls[] = mt_rand(1,$numsides);
      }
      return $diceRolls;
    }
  }
 if(!isset($_SESSION['pastRolls']))
  {
    $_SESSION['pastRolls'] = array(rolldice(6,6));
  }
  else
  {
    $_SESSION['pastRolls'][] = rolldice(6,6);
  }
  print_r($_SESSION['pastRolls']);
  echo "<br>";
   ?>

  <form  action="./" method="post">
    <input type="text" name="fname" />
    <input type="submit" name="rollDice" value="Roll Dice" />
    <input type="submit" name="reset" value="reset" />
  </form>

<?php
  for ( $i = 1; $i <= 6; $i++)
     {
      $diceNum = $_SESSION['pastRolls'][count($_SESSION['pastRolls'])][0];
      print_r ($_SESSION['pastRolls'][count($_SESSION['pastRolls'])]);
      echo '<img src = "dicefaces/dice/1.png" />';
     }
?>


  <!-- <p>
  <img src = "dicefaces/dice/<?php echo rand(1,6); ?>.png" />
  <img src = "dicefaces/dice/<?php echo rand(1,6); ?>.png" />
  <img src = "dicefaces/dice/<?php echo rand(1,6); ?>.png" />
  <img src = "dicefaces/dice/<?php echo rand(1,6); ?>.png" />
  <img src = "dicefaces/dice/<?php echo rand(1,6); ?>.png" />
  <img src = "dicefaces/dice/<?php echo rand(1,6); ?>.png" />
  </p> -->

</body>
</html>
