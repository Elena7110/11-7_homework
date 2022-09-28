<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>

<body>
	<h3>Жесткое сравнение в PHP</h3>
	<table class="table" border="1">
		<tr>
			<th>===</th>
			<th><?php $A = true ?> true</th>
			<th><?php $B = false ?> false</th>
			<th><?php echo $C = 1 ?></th>
			<th><?php echo $D = 0 ?></th>
			<th><?php echo $E = -1 ?></th>
			<th><?php $F = null ?>null</th>
			<th><?php echo $G = "php" ?></th>
		</tr>

		<tr>
			<th><?php  $A1 = true ?>true</th>


			<td><?php
if ($A === $A1){
?>
				true
				<?php
} else{
?>
				false
				<?php
				}
				?>
			</td>


			<td><?php
if ($B === $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C === $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D === $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E === $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F === $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G === $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

		</tr>
		<!--_____________________________________________________________________-->
		<tr>
			<th><?php $B1 = false ?>false</th>
			<td><?php
if ($A === $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>


			<td><?php
if ($B === $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C === $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D === $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E === $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F === $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G === $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<!--_____________________________________________________________________-->

		<tr>
			<th><?php echo $C1 = 1 ?></th>
			<td><?php
if ($A === $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>


			<td><?php
if ($B === $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C === $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D === $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E === $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F === $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G === $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

		</tr>

		<!--_____________________________________________________________________-->

		<tr>
			<th><?php echo $D1 = 0 ?></th>
			<td><?php
if ($A === $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>


			<td><?php
if ($B === $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C === $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D === $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E === $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F === $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G === $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

		</tr>

		<!--_____________________________________________________________________-->
		<tr>
			<th><?php $E1 = -1 ?>-1</th>
			<td><?php
if ($A === $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>


			<td><?php
if ($B === $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C === $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D === $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E === $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F === $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G === $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

		</tr>
		<!--_____________________________________________________________________-->


		<th><?php  $F1 = null ?>null</th>
		<td><?php
if ($A === $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>


		<td><?php
if ($B === $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>

		<td><?php
if ($C === $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>

		<td><?php
if ($D === $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>

		<td><?php
if ($E === $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>

		<td><?php
if ($F === $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>

		<td><?php
if ($G === $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>


		</tr>

		<!--_____________________________________________________________________-->
		<tr>
			<th><?php echo $G1 = "php" ?></th>
			<td><?php
if ($A === $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>


			<td><?php
if ($B === $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C === $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D === $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E === $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F === $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G === $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

		</tr>

	</table>

	<br>
	<!--======================================================================-->

	<h3>Гибкое сравнение в PHP</h3>
	<table class="table" border="1">
		<tr>
			<th>==</th>
			<th><?php $A = true ?> true</th>
			<th><?php $B = false ?> false</th>
			<th><?php echo $C = 1 ?></th>
			<th><?php echo $D = 0 ?></th>
			<th><?php echo $E = -1 ?></th>
			<th><?php $F = null ?>null</th>
			<th><?php echo $G = "php" ?></th>
		</tr>

		<tr>
			<th><?php  $A1 = true ?>true</th>


			<td><?php
if ($A == $A1){
?>
				true
				<?php
} else{
?>
				false
				<?php
				}
				?>
			</td>


			<td><?php
if ($B == $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C == $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D == $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E == $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F == $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G == $A1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

		</tr>
		<!--_____________________________________________________________________-->
		<tr>
			<th><?php $B1 = false ?>false</th>
			<td><?php
if ($A == $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>


			<td><?php
if ($B == $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C == $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D == $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E == $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F == $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G == $B1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<!--_____________________________________________________________________-->

		<tr>
			<th><?php echo $C1 = 1 ?></th>
			<td><?php
if ($A == $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>


			<td><?php
if ($B == $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C == $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D == $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E == $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F == $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G == $C1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

		</tr>

		<!--_____________________________________________________________________-->

		<tr>
			<th><?php echo $D1 = 0 ?></th>
			<td><?php
if ($A == $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>


			<td><?php
if ($B == $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C == $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D == $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E == $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F == $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G == $D1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

		</tr>

		<!--_____________________________________________________________________-->
		<tr>
			<th><?php $E1 = -1 ?>-1</th>
			<td><?php
if ($A == $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>


			<td><?php
if ($B == $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C == $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D == $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E == $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F == $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G == $E1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

		</tr>
		<!--_____________________________________________________________________-->


		<th><?php  $F1 = null ?>null</th>
		<td><?php
if ($A == $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>


		<td><?php
if ($B == $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>

		<td><?php
if ($C == $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>

		<td><?php
if ($D == $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>

		<td><?php
if ($E == $F1){
?> true <?php
} else{
  ?> false <?php
          }
          ?> </td>

		<td><?php
if ($F == $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>

		<td><?php
if ($G == $F1){
?>
			true
			<?php
} else{
  ?>
			false
			<?php
          }
          ?>
		</td>


		</tr>

		<!--_____________________________________________________________________-->
		<tr>
			<th><?php echo $G1 = "php" ?></th>
			<td><?php
if ($A == $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>


			<td><?php
if ($B == $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($C == $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($D == $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($E == $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($F == $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

			<td><?php
if ($G == $G1){
?>
				true
				<?php
} else{
  ?>
				false
				<?php
          }
          ?>
			</td>

		</tr>

	</table>
</body>

</html>