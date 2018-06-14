<?php
	$q = $_POST['val'];

	if(empty($q)) {
		echo "输入有误";
		exit;
	}
	
	$con = mysqli_connect('localhost','root','');

	if(!$con) {
		die ('Could not connect: '.mysqli_error($con));
	}

	mysqli_select_db($con,'sixfive');

	mysqli_set_charset($con,'utf8');

	$sql = "select * from websites where id ='".$q."'";
	$result = mysqli_query($con,$sql); 

	echo "<table border='2'>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>SiteName</th>";
	echo "<th>SiteUrl</th>";
	echo "<th>Alexa</th>";
	echo "<th>Country</th>";
	echo "</tr>";

	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['url']."</td>";
		echo "<td>".$row['alexa']."</td>";
		echo "<td>".$row['country']."</td>";
		echo "</tr>";	
	}

	echo "</table>";

?>