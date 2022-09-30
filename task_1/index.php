<!DOCTYPE html>
<!--атрибут lang определяет язык содержимого элемента.-->
<html lang="en">

<!--метаданные-->

<head>
	<!--данная запись указывает браузеру кодировку в которой была написана данная страница - формат документа и раскладку клавиатуры-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--призывает Internet Explorer работать в определённом режиме документа-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--мeta-тег viewport сообщает браузеру о том, как именно обрабатывать размеры страницы, и изменять её масштаб-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--определяет заголовок документа, который отображается в заголовке окна браузера или на вкладке страницы.-->
	<title>Таблица истинности PHP</title>
	<!--подключение файла стилей-->
	<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>

<!--тело документа-->

<body>
	<!--Заголовок таблицы-->
	<h3>Таблица истинности PHP</h3>
	<!--Таблица-->
	<table class="table" border="1">
		<!--Строка-->
		<tr>
			<!--ячейка строки-->
			<th>A</th>
			<!--ячейка строки-->
			<th>B</th>
			<!--ячейка строки-->
			<th>!A</th>
			<!--ячейка строки-->
			<th>A || B</th>
			<!--ячейка строки-->
			<th>A && B</th>
			<!--ячейка строки-->
			<th>A xor B</th>
		</tr>

		<!--Строка-->
		<tr>
			<!--ячейка строки-->
			<td><?php echo $A = 0; ?></td>
			<!--ячейка строки-->
			<td><?php echo $B = 0; ?></td>
			<!--ячейка строки-->
			<td><?php
if (!$A){
	echo !$A; 
			} elseif ((!$A) ==''){$C=0; echo $C;
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A||$B){
	echo $A||$B; 
			} elseif (($A||$B) ==''){$C=0; echo $C;
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A&&$B){
	echo $A&&$B; 
				} elseif (($A&&$B) ==''){$C=0; echo $C;
				
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A xor $B){
	echo $A xor $B; 
				} elseif (($A xor $B) ==''){$C=0; echo $C;
				
}
?> </td>

		</tr>

		<!--Строка-->
		<tr>
			<!--ячейка строки-->
			<td><?php echo $A = 0; ?></td>
			<!--ячейка строки-->
			<td><?php echo $B = 1; ?></td>
			<!--ячейка строки-->
			<td><?php
if (!$A){
	echo !$A; 
			} elseif ((!$A) ==''){$C=0; echo $C;
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A||$B){
	echo $A||$B; 
			} elseif (($A||$B) ==''){$C=0; echo $C;
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A&&$B){
	echo $A&&$B; 
				} elseif (($A&&$B) ==''){$C=0; echo $C;
				
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A xor $B){
	echo $A xor $B; 
				} elseif (($A xor $B) ==''){$C=0; echo $C;
				
}
?> </td>


		</tr>

		<!--Строка-->
		<tr>
			<!--ячейка строки-->
			<td><?php echo $A = 1; ?></td>
			<!--ячейка строки-->
			<td><?php echo $B = 0; ?></td>
			<!--ячейка строки-->
			<td><?php
if (!$A){
	echo !$A; 
			} elseif ((!$A) ==''){$C=0; echo $C;
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A||$B){
	echo $A||$B; 
			} elseif (($A||$B) ==''){$C=0; echo $C;
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A&&$B){
	echo $A&&$B; 
				} elseif (($A&&$B) ==''){$C=0; echo $C;
				
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A xor $B){
	echo $A xor $B; 
				} elseif (($A xor $B) ==''){$C=0; echo $C;
				
}
?> </td>

		</tr>

		<!--Строка-->
		<tr>
			<!--ячейка строки-->
			<td><?php echo $A = 1; ?></td>
			<!--ячейка строки-->
			<td><?php echo $B = 1; ?></td>
			<!--ячейка строки-->
			<td><?php
if (!$A){
	echo !$A; 
			} elseif ((!$A) ==''){$C=0; echo $C;
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A||$B){
	echo $A||$B; 
			} elseif (($A||$B) ==''){$C=0; echo $C;
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A&&$B){
	echo $A&&$B; 
				} elseif (($A&&$B) ==''){$C=0; echo $C;
}
?> </td>
			<!--ячейка строки-->
			<td><?php
if ($A xor $B){
	echo $A xor $B; 
				} elseif (($A xor $B) ==''){$C=0; echo $C;
}
?> </td>
		</tr>
	</table>
</body>

</html>