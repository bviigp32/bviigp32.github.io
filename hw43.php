<! DOCTYPE html>
<html lang = "kr" >
<head>
<meta charset = "utf-8" >
</head>
<body>
<form method = "POST" action = "hw43.php" >

숫자 : <input type = "number" name = "testNumber" />
<input type = "submit" value = "전송" />
</form>
</body>
</html>
<?PHP
$num = $_POST["testNumber"];

echo "입력한 숫자:$num";

echo ("<br>");
echo ("<br>");

function fibo($num)
{
if($num ==  0 || $num ==1) return (1);
return (fibo($num -1) + fibo($num -2));
}
for ($i=1; $i <= $num; $i++)
print(fibo($i - 1))."<br> ";

?>
 

<?php
echo "-----------비례---------<br>";
$num = $_POST["testNumber"];
$a = 1;
$b = 1;

for($i = 0; $i < $num; $i++)
{
echo $b / $a."<br> ";
$c = $b +$a;
$a = $b;
$b = $c;
}

?> 