
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

$dada = array();
if($name >= 10 && $name <= 100) {

    for ($i=0; $i <= $name; $i++) { 
        $dada[$i] = rand(10, 100);
        
    }
    sort($dada);
    
    echo "입력한 숫자:$name";
    
    echo ("<br>");
    echo ("<br>");
    
    echo  '$dada : ';
    
       print_r($dada);
       
    
       echo  '<br>';

}
else {
    echo "10이상 100이하의 값을 입력하시오";
}

?>


</body>
</html>