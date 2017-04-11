<?php
require(ROOT . "model/BirthdayModel.php");
function index(){

	$birthdays = getBirthdayList();
	
	render('birthday/index', array("birthdays" => $birthdays));
}

function create(){
	render('birthday/create');
}

function createSave(){
	if(isset($_POST["person"]) && !empty($_POST["person"])){
	$data=array();
	$data["person"]= $_POST["person"];
	$data["day"]= $_POST["day"];
	$data["month"]= $_POST["month"];
	$data["year"]= $_POST["year"];

	createBirthday($data);
}
	else {
		echo "Nope";
	}
	header("location: " . URL . "");
}

function delete($id){
	deleteBirthday($id);
}

function update($id){
	render('birthday/update', array('id' => $id));
}

function updateSave(){
	$data["id"]= $_POST["id"];
	$data["person"]= $_POST["person"];
	$data["day"]= $_POST["day"];
	$data["month"]= $_POST["month"];
	$data["year"]= $_POST["year"];

	updateBirthday($data);

	header("location: " . URL . "");
}