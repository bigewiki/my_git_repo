<h2>Tell me a little about yourself.</h2>
<p class="error">* Required 8 * </p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Age: <input type="number" name="age" value="<?php echo $age;?>">
  <span class="error">* <?php echo $ageErr;?></span>
  <br><br>
  Favorite OS
  <input type="radio" name="OS" value="macos">MacOS
  <input type="radio" name="OS" value="linux">Linux
  <input type="radio" name="OS" value="windows">Windows
  <span class="error">* <?php echo $osErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
