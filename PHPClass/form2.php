<h2>Tell me a little about yourself.</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Age: <input type="number" name="age" value="<?php echo $age;?>">
  <span class="error">* <?php echo $ageErr;?></span>
  <br><br>
  Favorite OS
  <input type="radio" name="OS" <?php if (isset($os) && $os=="macos") echo "checked";?> value="macos">MacOS
  <input type="radio" name="OS" <?php if (isset($os && $os=="linux") echo "checked";?> value="linux">Linux
  <input type="radio" name="OS" <?php if (isset($os) && $os=="windows") echo "checked";?> value="windows">Windows
  <span class="error">* <?php echo $osErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
