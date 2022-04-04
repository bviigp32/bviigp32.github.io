<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
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
  숫자: <input type="number" name="name">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
$sum = 0;
$prod = 1;
$mul = 1;

echo("입력한 숫자 : " . $name . "<br>");


echo ("<br>");
echo ("<br>");


for ($i= $prod; $i < $name + 1 ; $i++) { 
    echo $i;
    print($end = " ");
    $sum += $i;
    $mul *= $i;
}

echo ("<br>");
echo ("<br>");


echo("합계 : ");
        for ($i = 1; $i <= $name; $i++) {
            echo($i);
            if ($i < $name) {
                echo(" + ");
            }
        }
        echo(" = " . $sum);

echo ("<br>");
echo ("<br>");

        echo("팩토리얼 : ");
        for ($i = 1; $i <= $name; $i++) {
            echo($i);
            if ($i < $name) {
                echo(" * ");
            }
        }
        echo(" = " . $mul);

echo ("<br>");
echo ("<br>");

echo "<br>1~$name 까지의 합: $sum<br>1~$name 까지의 곱:$mul";

?>


</body>
</html>

