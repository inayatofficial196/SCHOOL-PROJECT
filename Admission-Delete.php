<?php
include('Connection.php');
$id = $_GET['id'];
$delete = "DELETE FROM admission WHERE id = $id";
$run_data = mysqli_query($conn, $delete);
if($run_data) {
	header('location:Admin-Admission.php');
} else {
	echo "<script> alert('Sorry This Record Doesn't Deleted.'); </script>";
}
?>