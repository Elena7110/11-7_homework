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
	<br>
	<table class="table" border="1">
		<tr>
			<th>A</th>
			<th>B</th>
			<th>!A</th>
			<th>A || B</th>
			<th>A && B</th>
			<th>A xor B</th>
		</tr>

		<tr>
			<td><?php echo $A = 0; ?></td>
			<td><?php echo $B = 0; ?></td>

			<td><?php
if (!$A !== FALSE) {
?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A||$B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A&&$B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A xor $B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

		</tr>


		<tr>
			<td><?php echo $A = 0; ?></td>
			<td><?php echo $B = 1; ?></td>

			<td><?php
if (!$A !== FALSE) {
?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A||$B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A&&$B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A xor $B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

		</tr>


		<tr>
			<td><?php echo $A = 1; ?></td>
			<td><?php echo $B = 0; ?></td>
			<td><?php
if (!$A !== FALSE) {
?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A||$B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A&&$B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A xor $B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

		</tr>


		<tr>
			<td><?php echo $A = 1; ?></td>
			<td><?php echo $B = 1; ?></td>

			<td><?php
if (!$A !== FALSE) {
?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A||$B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A&&$B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

			<td><?php
if ($A xor $B){
	?>
				true
				<?php
} else {
?>
				false
				<?php
}
?></td>

		</tr>


	</table>

	<br>

	</table>
</body>

</html>