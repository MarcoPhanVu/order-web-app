<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Important to make website responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restaurant Website</title>

	<!-- Link our CSS file -->
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<?php include './components/header.php'; ?>

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
					<th>Fullname</th>
					<th>Username</th>
					<th>Password</th>
					<th>Register date</th>
			</tr>
			</thead>
			
			<tbody>
				<tr>
					<td>Marco</td>
					<td>marcohehe</td>
					<td>marconohehe</td>
					<td>Jun 3rd, 10:07PM</td>
					<td>
						<button class="action-btn edit">Edit</button>
						<button class="action-btn edit">Delete</button>
					</td>
				</tr>   
			</tbody>
		</table>

		...
	<table>
		<caption>2019 Fourth Quarter Report</caption>
		<thead>
			<tr>
				<th><!-- Intentionally Blank --></th>
				<th>October</th>
				<th>November</th>
				<th>December</th>
			<tr>
		</thead>
		<tbody>
			<tr>
				<th>Projected</th>
				<td>$820,180</td>
				<td>$841,640</td>
				<td>$732,270</td>
			</tr>
			<tr>
				<th>Actual</th>
				<td>$850,730</td>
				<td>$892,580</td>
				<td>$801,240</td>
			</tr>
			<tr>
				<th>Utilization</th>
				<td>83%</td>
				<td>90%</td>
				<td>75%</td>
			</tr>
		</tbody>
	</table>
...
	</section>


</body>
</html>