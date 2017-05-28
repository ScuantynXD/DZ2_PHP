<?php
if (isset($_POST["menu1"])) {$menu1=$_POST["menu1"];if($menu1=="") {unset($menu1);}}
if (isset($_POST["menu2"])) {$menu2=$_POST["menu2"];if($menu2=="") {unset($menu2);}}
if (isset($_POST["menu3"])) {$menu3=$_POST["menu3"];if($menu3=="") {unset($menu3);}}
if (isset($_POST["menu4"])) {$menu4=$_POST["menu4"];if($menu4=="") {unset($menu4);}}
if (isset($_POST["menu5"])) {$menu5=$_POST["menu5"];if($menu5=="") {unset($menu5);}}
if (isset($_POST["price1"])) {$price1=$_POST["price1"];if($price1=="") {unset($price1);}}
if (isset($_POST["price2"])) {$price2=$_POST["price2"];if($price2=="") {unset($price2);}}
if (isset($_POST["price3"])) {$price3=$_POST["price3"];if($price3=="") {unset($price3);}}
if (isset($_POST["price4"])) {$price4=$_POST["price4"];if($price4=="") {unset($price4);}}
if (isset($_POST["price5"])) {$price5=$_POST["price5"];if($price5=="") {unset($price5);}}
if (isset($_POST["select"])) {$select=$_POST["select"];if($select=="") {unset($select);}}
echo "<center><h1>Счет</h1></center>";
$total=$price1+$price2+$price3+$price4+$price5;
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body>
	<div class="main">
		<div class="mainmenu">
			<h2>Заказ</h2>	
			<h3><?=$menu1?></h3>
			<h3><?=$menu2?></h3>
			<h3><?=$menu3?></h3>
			<h3><?=$menu4?></h3>
			<h3><?=$menu5?></h3>
		</div>
		<div class=mainprice>
			<h2>Цена</h2>	
			<h3><?=$price1?></h3>
			<h3><?=$price2?></h3>
			<h3><?=$price3?></h3>
			<h3><?=$price4?></h3>
			<h3><?=$price5?></h3>
		</div>
		<div class="time2 clearfix">	
			<h2>Время</h2>
			<h3><?=$select?></h3>
		</div>
		<div class="sum">
			<h2>Итого</h2>	
			<h3><?=$total?></h3>
		</div>
	</div>			
</body>
</html>