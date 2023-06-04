	<?php include '../components/headerlevel-1.php'; ?>

	<section class="main-container">
		<form action="" method="POST">
			<label for="full-name">Full Name: 
				<input for="full-name" type="text">
			</label>

			<label for="username">Username: 
				<input for="username" type="text">
			</label>

			<label for="password">Password: 
				<input for="password" type="password">
			</label>

			<input class="submit-btn" type="submit" name="submit" value="Add User">
		</form>
	</section>

	<section class="container">
		<table class="user-list">
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
				<tr>
					<td>1</td>
					<td>Marco</td>
					<td>marcohehe</td>
					<td>marconohehe</td>
					<td>Jun 3rd, 10:07PM</td>
					<td>
						<button class="action-btn edit">Edit</button>
						<button class="action-btn delete">Delete</button>
					</td>
				</tr>   
			</tbody>
		</table>
	</section>


</body>
</html>