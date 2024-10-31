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
	<h3>Welcome to Computer Science Society!</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><label for="birthday">Birthday</label> <input type="text" name="birthday"></p>
		<p><label for="contactNumber">Contact Number</label> <input type="text" name="contactNumber"></p>
		<p><label for="email">Email</label> <input type="text" name="email"></p>
		<p><label for="profession">Profession</label> <input type="text" name="profession">
        <p><label for="nationality">Nationality</label> <input type="text" name="nationality">
			<input type="submit" name="insertNewEmployeeBtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Job ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
	    <th>Birthday</th>
	    <th>Contact Number</th>
	    <th>Email</th>
	    <th>Profession</th>
        <th>Nationality</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllDreamJob = seeAllDreamJob($pdo); ?>
	  <?php foreach ($seeAllDreamJob as $row) { ?>
	  <tr>
	  	<td><?php echo $row['job_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['birthday']; ?></td>
	  	<td><?php echo $row['contact_number']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['profession']; ?></td>
        <td><?php echo $row['nationality']; ?></td>
	  	<td>
	  		<a href="editstudent.php?job_id=<?php echo $row['job_id'];?>">Edit</a>
	  		<a href="deletestudent.php?job_id=<?php echo $row['job_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>