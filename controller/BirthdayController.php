<?php
require(ROOT . "model/BirthdayModel.php");
function index(){

	$birthdays = getBirthdayList();
	
	render('birthday/index', array("birthdays" => $birthdays));
}

function create(){
	if(isset($_POST["person"]) && !empty($_POST["person"])){
		$data=array();
		$data["person"]= $_POST["person"];
		$data["day"]= $_POST["day"];
		$data["month"]= $_POST["month"];
		$data["year"]= $_POST["year"];

		createBirthday($data);
	}
	else {
		echo "Fuck you";
	}
}