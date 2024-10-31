<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getEmployeeByID = getEmployeeByID($pdo, $_GET['job_id']); ?>
	<form action="core/handleForms.php?job_id=<?php echo $_GET['job_id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getEmployeeByID['first_name']; ?></p>
			<p>Last Name: <?php echo $getEmployeeByID['last_name']; ?></p>
			<p>Gender: <?php echo $getEmployeeByID['gender']; ?></p>
			<p>Birthday: <?php echo $getEmployeeByID['birthday']; ?></p>
			<p>Contact Number: <?php echo $getEmployeeByID['contact_number']; ?></p>
			<p>Email: <?php echo $getEmployeeByID['email']; ?></p>
			<p>Profession: <?php echo $getEmployeeByID['profession']; ?></p>
			<p>Nationality: <?php echo $getEmployeeByID['nationality']; ?></p>
			<input type="submit" name="deleteStudentBtn" value="Delete">
		</div>
	</form>
</body>
</html>