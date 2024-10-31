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
	<?php $getEmployeeByID = getEmployeeByID($pdo, $_GET['job_id']); ?>
	<form action="core/handleForms.php?job_id=<?php echo $_GET['job_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getEmployeeByID['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getEmployeeByID['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getEmployeeByID['gender']; ?>">
		</p>
		<p>
			<label for="birthday">Birthday</label>
			<input type="text" name="birthday" value="<?php echo $getEmployeeByID['birthday']; ?>">
		</p>
		<p>
			<label for="contact_number">Contact Number</label>
			<input type="text" name="contactNumber" value="<?php echo $getEmployeeByID['contact_number']; ?>">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo $getEmployeeByID['email']; ?>"></p>
		<p>
		<p>
			<label for="profession">Profession</label>
			<input type="text" name="profession" value="<?php echo $getEmployeeByID['profession']; ?>">
		<p>	
			<label for="nationality">Nationality</label>
			<input type="text" name="nationality" value="<?php echo $getEmployeeByID['nationality']; ?>">
			<input type="submit" name="editStudentBtn">
		</p>
	</form>
</body>
</html>