<?php 

include ("includes1/db1.php");

	if (isset($_GET['delete_exercise'])) {
		$delete_id=$_GET['delete_exercise'];

		$delete_exer="DELETE FROM exercises WHERE exer_id='$delete_id'";
		$run_delete=mysqli_query($con,$delete_exer);
		if ($run_delete) {
			echo "<script>alert('Deleted Successfully!')</script>";
			echo "<script>window.open('index1.php?view_exercises','_self')</script>";
		}

	}

?>