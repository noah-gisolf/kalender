<ul>
	<?php
$months = [
	 	'January',
	 	'February',
	 	'March',
	 	'April',
	 	'May',
	 	'June',
	 	'July',
	 	'August',
	 	'September',
	 	'October',
	 	'November',
	 	'December'
];
	$lastMonth = 0;
	$lastDay = 0;
	foreach($birthdays as $birthday):
?>

		<?php if ($lastMonth != $birthday['month']) echo "<h1>".$months[$birthday['month']-1]."</h1>" ?>

		<h2><?php if ($lastDay 	!= $birthday['day']) echo $birthday["day"] ?></h2>
		
		<p><a>✐</a> <?=$birthday["person"]?> (<?=$birthday["year"]?>) <a>✖</a></p>
		
		<?php 
			if 	($lastMonth == $birthday['month']) $lastDay = $birthday['day'];
			else $lastDay = 0;
			
		?>

	<?php 
		$lastMonth = $birthday['month'];
		endforeach;
	?>
</ul>

<form action="create" method="post" autocomplete="off">
	Name:<br>
	<input type="text" name="person"><br>
	Day:<br>
	<input type="text" name="day"><br>
	Month:<br>
	<input type="text" name="month"><br>
	Year:<br>
	<input type="text" name="year"><br>
	<button>Submit</button>
</form>