<?php
     session_start();
     include ('Connection.php');
     require ('PDF/fpdf.php');
     $email = $_SESSION['SESSION_EMAIL'];
	$get_data = "SELECT * FROM admission WHERE email = '" .$email. "'";
	$run_data = mysqli_query($conn, $get_data);
	while($row = mysqli_fetch_array($run_data)) {
          $profile = $row['profile_image'];
          $feeslip = $row['feeslip_image'];
		$session = $row['session'];
		$sname = $row['student_name'];
		$scnic = $row['student_cnic'];
		$smobile = $row['student_mobile'];
		$fname = $row['father_name'];
		$fcnic = $row['father_cnic'];
		$fmobile = $row['father_mobile'];
		$gender = $row['gender'];
		$birth = $row['date_birth'];
		$blood = $row['blood_group'];
		$home = $row['home_address'];
		$email = $row['email'];
		$religion = $row['religion'];
		$school = $row['school_board'];
		$rollno = $row['roll_number'];
		$year = $row['passing_year'];
		$tmarks = $row['total_marks'];
		$omarks = $row['obtained_marks'];
		$percent = $row['percentage'];
		$grade = $row['grade'];
		$group = $row['groups'];
     }

     $pdf = new FPDF();
     $pdf -> AddPage();
     $pdf -> SetFont('Arial', 'B', 16);
     $pdf -> Cell(190, 10, 'Government Higher Secondary School Dakada Buner', 1, 1, 'C');
     $pdf -> Image($profile, 40, 25, 35, 40);
     $pdf -> Image($feeslip, 130, 25, 35, 40);
     $pdf -> Ln(45);
     $pdf -> SetFont('Arial', '', 14);
     $pdf -> Cell(95, 10, 'Profile Image', 0, 0, 'C');
     $pdf -> Cell(90, 10, 'Fee Image', 0, 1, 'C');
     $pdf -> Cell(95, 10, 'Student Name', 1, 0, 'C');
     $pdf -> Cell(95, 10, $sname, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Student CNIC', 1, 0, 'C');
     $pdf -> Cell(95, 10, $scnic, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Student Mobile No', 1, 0, 'C');
     $pdf -> Cell(95, 10, $smobile, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Father Name', 1, 0, 'C');
     $pdf -> Cell(95, 10, $fname, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Father CNIC', 1, 0, 'C');
     $pdf -> Cell(95, 10, $fcnic, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Father Mobile No', 1, 0, 'C');
     $pdf -> Cell(95, 10, $fmobile, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Gender', 1, 0, 'C');
     $pdf -> Cell(95, 10, $gender, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Date Of Birth', 1, 0, 'C');
     $pdf -> Cell(95, 10, $birth, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Blood Group', 1, 0, 'C');
     $pdf -> Cell(95, 10, $blood, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Home Address', 1, 0, 'C');
     $pdf -> Cell(95, 10, $home, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Email', 1, 0, 'C');
     $pdf -> Cell(95, 10, $email, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Religion', 1, 0, 'C');
     $pdf -> Cell(95, 10, $religion, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'School & Board', 1, 0, 'C');
     $pdf -> Cell(95, 10, $school, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Roll Number', 1, 0, 'C');
     $pdf -> Cell(95, 10, $rollno, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Passing Year', 1, 0, 'C');
     $pdf -> Cell(95, 10, $year, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Total Marks', 1, 0, 'C');
     $pdf -> Cell(95, 10, $tmarks, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Obtained Marks', 1, 0, 'C');
     $pdf -> Cell(95, 10, $omarks, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Percentage', 1, 0, 'C');
     $pdf -> Cell(95, 10, $percent, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Grade', 1, 0, 'C');
     $pdf -> Cell(95, 10, $grade, 1, 1, 'C');
     $pdf -> Cell(95, 10, 'Group', 1, 0, 'C');
     $pdf -> Cell(95, 10, $group, 1, 1, 'C');
     $pdf -> Output();
?>