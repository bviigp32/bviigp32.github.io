<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$width = $height = $radius = $length = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $width = test_input($_POST["width"]);
  $height = test_input($_POST["height"]);
  $radius = test_input($_POST["radius"]);
  $length = test_input($_POST["length"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  밑변: <input type="number" name="width">
  <br><br>
  높이: <input type="number" name="height">
  <br><br>
  반지름: <input type="number" name="radius">
  <br><br>
  직육면체 높이: <input type="number" name="length">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "밑변: $width<br>";
echo "높이: $height<br>";
echo "반지름: $radius<br>";
echo "직육면체의 높이: $length<br>";

echo("<br>");
echo("<br>");


echo "삼각형:". $width * $height / 2 ."<br>";
echo "직사각형:". $width * $height ."<br>";
echo "원:". pi()*$radius*$radius ."<br>" ;
echo "직육면체:". $width * $height *$length ."<br>";
echo "원통:". pi() * $radius * $radius* $height / 2 ."<br>";
echo "구:". 4/3*pi()*$radius * $radius * $radius ."<br>";

?>

</body>
</html>