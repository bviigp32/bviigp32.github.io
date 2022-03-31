<! DOCTYPE html>
<html lang = "kr" >
<head>
<meta charset = "utf-8" >
</head>
<body>
<form method = "POST" action = "hw41.php" >

숫자 : <input type = "number" name = "testNumber" />
<input type = "submit" value = "전송" />
</form>
</body>
</html>

<?php
$n = $_POST["testNumber"];
$sum = 0;
$prod = 1;
$mul = 1;

echo("입력한 숫자 : " . $n . "<br>");


echo ("<br>");
echo ("<br>");


for ($i= $prod; $i < $n + 1 ; $i++) { 
    echo $i;
    print($end = " ");
    $sum += $i;
    $mul *= $i;
}

echo ("<br>");
echo ("<br>");


echo("합계 : ");
        for ($i = 1; $i <= $n; $i++) {
            echo($i);
            if ($i < $n) {
                echo(" + ");
            }
        }
        echo(" = " . $sum);

echo ("<br>");
echo ("<br>");

        echo("팩토리얼 : ");
        for ($i = 1; $i <= $n; $i++) {
            echo($i);
            if ($i < $n) {
                echo(" * ");
            }
        }
        echo(" = " . $mul);

echo ("<br>");
echo ("<br>");

echo "<br>1~$n 까지의 합: $sum<br>1~$n 까지의 곱:$mul";

?>

