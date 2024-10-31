<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertIntoDreamJob($pdo,$first_name, $last_name, $gender, $birthday, $contact_number, $email, $profession, $nationality) {

	$sql = "INSERT INTO dream_job (first_name,last_name,gender,birthday,contact_number,email,profession,nationality) VALUES (?,?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $birthday, 
		$contact_number, $email, $profession, $nationality]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllDreamJob($pdo) {
	$sql = "SELECT * FROM dream_job";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getEmployeeByID($pdo, $job_id) {
	$sql = "SELECT * FROM dream_job WHERE job_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$job_id])) {
		return $stmt->fetch();
	}
}

function updateEmployee($pdo, $job_id, $first_name, $last_name, 
	$gender, $birthday, $contact_number, $email, $profession, $nationality) {

	$sql = "UPDATE dream_job 
				SET first_name = ?, 
					last_name = ?, 
					gender = ?, 
					birthday = ?, 
					contact_number = ?, 
					email = ?, 
					profession = ? 
					nationality = ?
			WHERE job_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, 
		$birthday, $contact_number, $email, $profession, $nationality, $job_id,]);

	if ($executeQuery) {
		return true;
	}
}



function deleteEmployee($pdo, $job_id) {

	$sql = "DELETE FROM dream_job WHERE job_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$job_id]);

	if ($executeQuery) {
		return true;
	}

}




?>