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
		
		<p><a href="update/<?=$birthday["id"]?>">✐</a> 
		<?=$birthday["person"]?> (<?=$birthday["year"]?>) 
		<a href="delete/<?=$birthday["id"]?>">✖</a></p>
		
		<?php 
			if 	($lastMonth == $birthday['month']) $lastDay = $birthday['day'];
			else $lastDay = 0;
			
		?>

	<?php 
		$lastMonth = $birthday['month'];
		if ($lastMonth == $birthday['month']) $lastDay = $birthday['day'];
    	else $lastDay = 0;
		endforeach;
	?>
</ul>

<a href="/kalender/birthday/create">+</a> 