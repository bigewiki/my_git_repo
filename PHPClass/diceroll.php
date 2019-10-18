<?php
// STARTING SESSION COOKIES CODE
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
  } else if ( isset ($_POST['rollDice'])){

  $diceSideImg = array('1','2','3','4','5','6');
  $diceRolls = array();
  //function to get array
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
  }
?>
