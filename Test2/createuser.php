<?php
	require_once('config.php');

		function getUsers(){
		// getting mysqli connection
		global $mysqli;
		
		//query users
		$query = "SELECT id, cvr, email, psw FROM users;";
		$result = $mysqli->query($query);

		//begin table
		echo "
			<table>
				<tr>
					<th>ID</th>
					<th>CVR</th>
					<th>Email</th>
					<th>Password</th>
					<th></th>
					<th></th>
				</tr>";

		//while there are more rows fetch rows
		while ($row = $result->fetch_assoc()){
			//echo row with actions
			echo "
				<tr>
					<td>$row[id]</td>
					<td>$row[cvr]</td>
					<td>$row[email]</td>
					<td>$row[psw]</td>
				</tr>";
		}

		//end table
		echo "</table>";
	}

	//print users
	getUsers();