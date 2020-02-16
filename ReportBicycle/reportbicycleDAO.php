<?php

	if($_POST['phpfunction'] == 'addItem') {
		addItem();
	}

	function addItem() {

		$serialNumber = $_POST['SerialNumber'];
		$brand = $_POST['Brand'];
		$model = $_POST['Model'];
		$accessories = $_POST['Accessories'];
		$type = $_POST['Type'];
		$colour = $_POST['Colour'];

		session_start();
		$username = $_SESSION['username'];

		include "../common/config.php";

		$sql = "INSERT INTO `tbl_bicycles`".
			   " values ".
			   "('$serialNumber', '$brand', '$model', '$accessories', '$type', '$colour', '$username')";

		//echo $sql;

		if(mysqli_query($connection, $sql)) {
			echo "true";
		} else {
			echo mysqli_error($connection);
			return;
		}

		mysqli_close($connection);
	}

?>
