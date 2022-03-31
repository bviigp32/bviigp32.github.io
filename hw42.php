
<! DOCTYPE html>
<html lang = "kr" >
<head>
<meta charset = "utf-8" >
</head>
<body>
<form method = "POST" action = "hw42.php" >
숫자 : <input type = "number" name = "testNumber" />
<input type = "submit" value = "전송" />
</form>
</body>
</html>

<?php

$n = $_POST [ "testNumber" ];
$dada = array();
for ($i=0; $i <= $n; $i++) { 
    $dada[$i] = rand(10, 100);
    
}
sort($dada);

echo "입력한 숫자:$n";

echo ("<br>");
echo ("<br>");

echo  '$dada : ';

   print_r($dada);
   

   echo  '<br>';


?>