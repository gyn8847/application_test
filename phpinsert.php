<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$preferErr = "";
$prefer = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
  if (empty($_POST["prefer"])) {
    $preferErr = "required to choice one of the options";
  } else {
    $prefer = test_input($_POST["prefer"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>page 2</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  Do you prefer to working with:
	</br>
  <input type="radio" name="prefer" <?php if (isset($prefer) && $prefer=="female") echo "checked";?> value="a thing">a thing
  
  <br></br>
  
  <input type="radio" name="prefer" <?php if (isset($prefer) && $prefer=="male") echo "checked";?> value="Ideas">Ideas
  
  <span class="error">* <?php echo $preferErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";

echo $prefer;
?>

</body>
</html>
