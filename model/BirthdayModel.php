<?php

function getBirthdayList(){
	$db = openDatabaseConnection();

	$query = $db->prepare("SELECT * FROM birthdays ORDER BY month, day");


	$query->execute();

	return $query->fetchAll();
}

function createBirthday($data){
	$db = openDatabaseConnection();

	$query = $db->prepare('INSERT INTO birthdays (`person`, `day`, `month`, `year`)VALUES(
	:person, :day, :month, :year)');

	$query->bindparam(':person', $data['person']);
	$query->bindparam(':day', $data['day']);
	$query->bindparam(':month', $data['month']);
	$query->bindparam(':year', $data['year']);
	$query->execute();
}

function deleteBirthday($id){
	$db = openDatabaseConnection();
	
	$sql = "DELETE FROM birthdays WHERE id =" . $id;
	
	$db->query($sql);
}

function updateBirthday($data){
	$db = openDatabaseConnection();

	$query = $db->prepare('UPDATE birthdays SET person = :person, day = :day, month = :month, year = :year WHERE id = :id');

	$query->bindparam(':id', $data['id']);
	$query->bindparam(':person', $data['person']);
	$query->bindparam(':day', $data['day']);
	$query->bindparam(':month', $data['month']);
	$query->bindparam(':year', $data['year']);
	$query->execute();
}