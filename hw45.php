<! DOCTYPE html>
<html lang = "kr" >
<head>
<meta charset = "utf-8" >
</head>
<body>
<form method = "POST" action = "hw45.php" >

년도 : <input type = "number" name = "year" />
월: <input type = "number" name = "month" />


<input type = "submit" value = "전송" />
</form>
</body>
</html>

<?php 
	$year = isset($_POST['year']) ? $_POST['year'] : date('Y');
	$month = isset($_POST['month']) ? $_POST['month'] : date('m');

	$date = "$year-$month-01"; // 현재 날짜
	$time = strtotime($date); // 현재 날짜의 타임스탬프
	$start_week = date('w', $time); // 1. 시작 요일
	$total_day = date('t', $time); // 2. 현재 달의 총 날짜
	$total_week = ceil(($total_day + $start_week) / 7);  // 3. 현재 달의 총 주차
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calendar</title>
	<style type="text/css">
		table {
			border-spacing: 0;
		}
		table td {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php echo "$year 년 $month 월" ?>
	
	<table border="1">
		<tr> 
			<th>일</th> 
			<th>월</th> 
			<th>화</th> 
			<th>수</th> 
			<th>목</th> 
			<th>금</th> 
			<th>토</th> 
		</tr> 

		<!-- 총 주차를 반복합니다. -->
		<?php for ($n = 1, $i = 0; $i < $total_week; $i++): ?> 
			<tr> 
				<!-- 1일부터 7일 (한 주) -->
				<?php for ($k = 0; $k < 7; $k++): ?> 
					<td> 
						<!-- 시작 요일부터 마지막 날짜까지만 날짜를 보여주도록 -->
						<?php if ( ($n > 1 || $k >= $start_week) && ($total_day >= $n) ): ?>
							<!-- 현재 날짜를 보여주고 1씩 더해줌 -->
							<?php echo $n++ ?>
						<?php endif ?>
					</td> 
				<?php endfor; ?> 
			</tr> 
		<?php endfor; ?> 
	</table>
</body>
</html>