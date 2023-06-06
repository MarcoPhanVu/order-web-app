<?php include '../components/header-admin.php'; ?>

<?php 
	$full_name = $username = $password = "";
	$full_nameErrMsg = $usernameErrMsg = $passwordErrMsg = "";
	

	if (isset($_POST["submit-admin"])) {
		echo "admin added";
		// Validate INPUT
		if (empty($_POST["full_name"])) {
			$full_nameErrMsg = "<p style='color: red'>Please enter your name</p>";
		} else {
			// $full_name = $_POST["full_name"];
			$full_name = filter_input(INPUT_POST, "full_name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}

		if (empty($_POST["username"])) {
			$usernameErrMsg = "<p style='color: red'>Please enter username</p>";
		} else {
			$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
		}

		if (empty($_POST["password"])) {
			$passwordErrMsg = "<p style='color: red'>Please enter password</p>";
		} else {
			$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
		}





		if (empty($full_nameErrMsg) && empty($usernameErrMsg) && empty($passwordErrMsg)) { //No Error Message
			$add_admin_query = "INSERT INTO admin (full_name, user_name, password) VALUES ('$full_name', '$username', '$password')";

			if (mysqli_query($connection, $add_admin_query)) { // Inserted successfully
				header("Location: manage-admin.php");
			} else { // Something went wrong -> cannot insert
				echo "Errorrrrrrrrrrrr: " . mysqli_error($connection);
			}
		}

	} else {
		echo "nothing happened";
	}



	$admin_list_query = "SELECT * FROM admin";
	$admin_list_query_result = mysqli_query($connection, $admin_list_query);
	$admin_list = mysqli_fetch_all($admin_list_query_result, MYSQLI_ASSOC);
?>

<section class="main-container">
	<form action="" method="POST" classs="signin-form">
		<label for="full_name">Full Name: 
			<input name="full_name" type="text">
		</label>
		<?php echo $full_nameErrMsg; ?>

		<label for="username">Username: 
			<input name="username" type="text">
		</label>
		<?php echo $usernameErrMsg; ?>

		<label for="password">Password: 
			<input name="password" type="password">
		</label>
		<?php echo $passwordErrMsg; ?>

		<input class="submit-btn" type="submit" name="submit-admin" value="Add User">
	</form>
</section>

<section class="container">
	<table class="object-list">
		<thead>
			<tr style="border: 3px solid rgb(11, 79, 73);">
				<th>ID</th>
				<th>Fullname</th>
				<th>Username</th>
				<th>Password</th>
				<th>Register date</th>
				<th>Actions</th>
		</tr>
		</thead>
		
		<tbody>
			<?php if (empty($admin_list)): ?>
				<p>There is no admin here</p>
			<?php endif; ?>


			<?php foreach ($admin_list as $admin): ?>
				<tr>
					<td><?php echo $admin["id"]; ?></td>
					<td><?php echo $admin["full_name"]; ?></td>
					<td><?php echo $admin["user_name"]; ?></td>
					<td><?php echo $admin["password"]; ?></td>
					<td><?php echo $admin["date"]; ?></td>
					<td>
						<button class="action-btn edit">Edit</button>
						<button class="action-btn delete">Delete</button>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</section>


</body>
</html>