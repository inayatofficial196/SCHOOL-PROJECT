<?php
include('Connection.php');
if(isset($_POST['submit'])) {
	$id = $_GET['id'];
	$sname = $_POST['Sname'];
	$scnic = $_POST['Scnic'];
	$smobile = $_POST['Smobile'];
	$fname = $_POST['Fname'];
	$fcnic = $_POST['Fcnic'];
	$fmobile = $_POST['Fmobile'];
	$gender = $_POST['Gender'];
	$birth = $_POST['Birth'];
	$blood = $_POST['Blood'];
	$home = $_POST['Home'];
	$email = $_POST['Email'];
	$religion = $_POST['Religion'];
	$school = $_POST['School'];
	$rollno = $_POST['Rollno'];
	$year = $_POST['Year'];
	$tmarks = $_POST['Tmarks'];
	$omarks = $_POST['Omarks'];
	$percent = $_POST['Percent'];
	$grade = $_POST['Grade'];
	$group = $_POST['Group'];

	$update = "UPDATE admission SET student_name='$sname', student_cnic='$scnic', student_mobile='$smobile', father_name='$fname', father_cnic='$fcnic', father_mobile='$fmobile', gender='$gender', date_birth='$birth', blood_group='$blood', home_address='$home', email='$email', religion='$religion', school_board='$school', roll_number='$rollno', passing_year='$year', total_marks='$tmarks', obtained_marks='$omarks', percentage='$percent', grade='$grade', groups='$group' WHERE id=$id";
	$run_update = mysqli_query($conn, $update);
	if($run_update) {
		header('location:Admin-Admission.php');
	} else {
		echo "<script> alert('Sorry This Record Doesn't Updated.'); </script>";
	}
}
?>