<form action="/kalender/birthday/updateSave" method="post" autocomplete="off">
	<input type="hidden" name="id" value="<?=$id?>">
	Name:<br>
	<input type="text" name="person" placeholder="name"><br>
	Day:<br>
	<input type="text" name="day" placeholder="day"><br>
	Month:<br>
	<input type="text" name="month" placeholder="month"><br>
	Year:<br>
	<input type="text" name="year" placeholder="year"><br>
	<button>Submit</button>
</form>