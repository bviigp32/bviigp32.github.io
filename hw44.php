<! DOCTYPE html>
<html lang = "kr" >
<head>
<meta charset = "utf-8" >
</head>
<body>
<form method = "POST" action = "hw44.php" >
밑변 : <input type = "number" name = "width" />
높이 : <input type = "number" name = "height" />
반지름 : <input type = "number" name = "radius"/>
직육면체의 높이: <input type = "number" name = "length" />
<input type = "submit" value = "전송" />
</form>
</body>
</html>


<?php
$width = $_POST["width"];
$height = $_POST["height"];
$radius = $_POST["radius"];
$length = $_POST["length"];

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