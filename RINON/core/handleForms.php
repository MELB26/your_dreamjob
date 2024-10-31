<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';  

if (isset($_POST['insertNewEmployeeBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$birthday = trim($_POST['birthday']);
	$contactNumber = trim($_POST['contactNumber']);
	$email = trim($_POST['email']);
	$profession = trim($_POST['profession']);
	$nationality = trim($_POST['nationality']);


	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($birthday) && !empty($contactNumber)  && !empty($email)  && !empty($profession) && !empty($nationality)) {
			$query = insertIntoDreamJob($pdo, $firstName, $lastName, 
			$gender, $birthday, $contactNumber, $email, $profession, $nationality);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editStudentBtn'])) {
	$job_id = $_GET['job_id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$birthday = trim($_POST['birthday']);
	$contactNumber= trim($_POST['contactNumber']);
	$email = trim($_POST['email']);
	$profession= trim($_POST['profession']);
	$nationality= trim($_POST['nationality']);

	if (!empty($job_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($birthday) && !empty($contactNumber) && !empty($email) && !empty($profession) && !empty($nationality)) {

		$query = updateEmployee($pdo, $job_id, $firstName, $lastName, $gender, $birthday, $contactNumber, $email, $profession, $nationality);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteStudentBtn'])) {

	$query = deleteEmployee($pdo, $_GET['job_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>