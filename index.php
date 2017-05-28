<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body>
<?php
	echo "<center><h1>Меню</h1></center>";		
?>
	<div class="main">		
		<form name="check" method="post" action="results.php">
			<div class="mainmenu">									
				<input type="text" name="menu1" placeholder="Блюдо 1">				
				<input type="text" name="menu2" placeholder="Блюдо 2">							
				<input type="text" name="menu3" placeholder="Блюдо 3">							
				<input type="text" name="menu4" placeholder="Блюдо 4">
				<input type="text" name="menu5" placeholder="Блюдо 5">
			</div>
			<div class="mainprice">									
				<input type="text" name="price1" placeholder="Цена 1">				
				<input type="text" name="price2" placeholder="Цена 2">							
				<input type="text" name="price3" placeholder="Цена 3">							
				<input type="text" name="price4" placeholder="Цена 4">
				<input type="text" name="price5" placeholder="Цена 5">
			</div>
            <div class="time clearfix">
                <select required name="select">
                    <option>Выберите из списка</option>
                    <option value="Завтрак">Завтрак</option>
                    <option value="Обед">Обед</option>
                    <option value="Ужин">Ужин</option>                  
                </select>
            </div>
            <div>
                <input type="submit" name="submit" class="btn" value="Итого"></label>
            </div>    	
		</form>				
	</div>			
</body>
</html>