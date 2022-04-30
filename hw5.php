

<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = 'ticketing';

$link = mysqli_connect($servername, $username, $password, $dbname);

$_GET['order'] = isset($order) ? $_GET['order'] : null;
?>
<html>
<head>
	<meta charset="utf-8">
	<title>매표소</title>
    <style>
        .input-wrap {
            width: 960px;
            margin: 0 auto;
        }
        h1 { text-align: center; }
        th, td { text-align: center; }
        table {
            border: 1px solid #000;
            margin: 0 auto;
        }
        td, th {
            border: 1px solid #ccc;
        }
        a { text-decoration: none; }
    </style>
</head>
<body>
<div class="input-wrap">
        <form action="ticketing.php" method="POST">
        고객성명 :  <input type="text" name="name"placeholder="성명"> <input type="submit" >
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>구분</th>
                        <th colspan="2">어린이</th>
                        <th colspan="2">어른</th>
                        <th>비고</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>입장권</td>
                        <td>7.000</td>
                        <td valgn="top">
                            <select name="item_a" size="1">
			                    <option value="0">0</option>
			                    <option value="1">1</option>
		                        <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
		                    </select>
                        </td>
                        <td>10.000</td>
                        <td valgn="top">
                        <select name="item_b" size="1">
		    	            <option value="0">0</option>
	                        <option value="1">1</option>
		                    <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
		                </select>
                            </td>
                            <td>입장</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>BIG3</td>
                            <td>12.000</td>
                            <td valgn="top">
                            <select name="item_c" size="1">
			                    <option value="0">0</option>
    			                <option value="1">1</option>
	    		                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
		                    </select>
                            </td>
                            <td>16.000</td>
                            <td valgn="top">
                            <select name="item_d" size="1">
			                    <option value="0">0</option>
    			                <option value="1">1</option>
	    		                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
		                    </select>
                            </td>
                            <td>입장+놀이3종</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>자유이용권</td>
                            <td>21.000</td>
                            <td valgn="top">
                            <select name="item_e" size="1">
			                    <option value="0">0</option>
			                    <option value="1">1</option>
			                    <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
		                    </select>
                            </td>
                            <td>26.000</td>
                            <td valgn="top">
                            <select name="item_f" size="1">
		    	                <option value="0">0</option>
			                    <option value="1">1</option>
			                    <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
		                    </select>
                            </td>
                            <td>입장+놀이자유</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>연간이용권</td>
                            <td>70.000</td>
                            <td valgn="top">
                            <select name="item_g" size="1">
	    		                <option value="0">0</option>
		                        <option value="1">1</option>
			                    <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
		                    </select>
                            </td>
                            <td>90.000</td>
                            <td valgn="top">
                            <select name="item_h" size="1">
			                    <option value="0">0</option>
			                    <option value="1">1</option>
			                    <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
		                    </select>
                            </td>
                            <td>입장+놀이자유</td>
                        </tr>
                </tbody>
            </table>

            <?php 
                date_default_timezone_set('Asia/Seoul');
                if (date("A")=="AM") 
                    $a="오전";
                else
                    $a="오후";
                $time = date("Y년 m월 d일 $a h:i분");
                echo "현재시간은 '$time'입니다.<br>";

                $name = $_POST["name"];
                $a=$_POST["item_a"];
                $b=$_POST["item_b"];
                $c=$_POST["item_c"];
                $d=$_POST["item_d"];
                $e=$_POST["item_e"];
                $f=$_POST["item_f"];
                $g=$_POST["item_g"];
                $h=$_POST["item_h"]; 

                if (isset($name) && strlen($name) > 0) 
                {
   
                    $sum = ("7" * $a)+("10" * $b)+("12" * $c)+("16"  * $d)+("21" * $e)+("26" * $f)+("70" * $g)+("90" * $h);

                    $sql=" INSERT INTO  `ticket` ".  
                    "(`name` , `item_a` , `item_b` , `item_c` , `item_d` , `item_e` , `item_f`, `item_g` , `item_h`, `time_a` , `sum` )".
                    "VALUES ('$name', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$time','$sum')";

                    mysqli_query($link,$sql);

                }

                $query = 'SELECT * FROM ticket ';
                $result = mysqli_query($link,$query)  or die('Query failed: ' . mysqli_error());
                while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) 
                {
                    echo "<br>";
                    echo $row["time_a"];
                    echo "<br><br>";
                    echo $row["name"] ;
                    echo "고객님 감사합니다. <br>";
                    echo "어린이 ";

                    if($row["item_a"] != "0"){
                    echo"입장권 ";
                    echo $row["item_a"];
                    echo"매";}
                    if($row["item_c"] != "0"){
                    echo" BIG3 ";
                    echo $row["item_c"];
                    echo"매";}
                    if($row["item_e"] != "0"){
                    echo" 쟈유이용권 ";
                    echo $row["item_e"];
                    echo"매";}
                    if($row["item_g"] != "0"){
                    echo" 연간이용권 ";
                    echo $row["item_g"];
                    echo"매";}
                    
                    echo("<br>");

                    echo"어른 ";

                    if($row["item_b"] != "0"){
                    echo"입장권 ";
                    echo $row["item_b"];
                    echo"매";}
                    if($row["item_d"] != "0"){
                    echo" BIG3 ";
                    echo $row["item_d"];
                    echo"매";}
                    if($row["item_f"] != "0"){
                    echo" 쟈유이용권 ";
                    echo $row["item_f"];
                    echo"매";}
                    if($row["item_h"] != "0"){
                    echo" 연간이용권 ";
                    echo $row["item_h"];
                    echo"매";}

                    echo "<br>합계 ";
                    echo $row["sum"];
                    echo"000원 입니다.<br>";
                }
            mysqli_free_result($result);
            mysqli_close($link);
            ?>
    </div>
</body>
</html>



