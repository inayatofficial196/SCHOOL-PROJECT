<?php
session_start();
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: Signup/index.php");
    die();
}
include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="script.js" defer></script>
    <title>ADMISSION</title>
</head>
<body>

    <header>
        <div class="logo">
            <img src="Folder/Logo.png">
        </div>
        <div class="name">
            <h1>GOVERNMENT HIGHER SECONDARY SCHOOL DOKADA BUNER</h1>
        </div>
    </header>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <ul>
            <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="About-Us.php"><i class="fa-solid fa-address-card"></i> About Us</a></li>
            <li><a href="Gallery.php"><i class="fa-solid fa-image"></i> Gallery</a></li>
            <li><a href="Teachers.php"><i class="fa-solid fa-book-open-reader"></i> Teachers</a></li>
            <li><a href="Events.php"><i class="fa-solid fa-calendar"></i> Events</a></li>
            <li><a href="News.php"><i class="fa-solid fa-bell"></i> News</a></li>
            <li class="click"><a href="#"><i class="fa-solid fa-file-pen"></i> Admission</a>
                <ul>
                    <li><a href="Admission-Rules.php">Admission Rules</a></li>
                    <li><a href="Fee-Structure.php">Fee Structure</a></li>
                    <li><a href="Admission.php">Apply Now</a></li>
                </ul>
            </li>
            <li><a href="Contact-Us.php"><i class="fa-solid fa-message"></i> Contact Us</a></li>
            <li><a href="#"><i class="fa-solid fa-user"></i> Account</a>
                <ul>
                    <li><a href="Profile.php">Profile</a></li>
                    <li><a href="Signup/Register.php">Signup</a></li>
                    <li><a href="Signup/index.php">Login</a></li>
                    <li><a href="Signup/Logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <section class="admission-form">
        <form action="#" autocomplete="on" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
            <div class="form-head">
                <div class="form-img">
                    <img src="Folder/Profile.jpg" id="profile-pic">
                    <label for="profile-file" id="label-img">Profile Image</label>
                    <input type="file" accept="image/*" id="profile-file" name="Pimage">
                </div>
                <div class="form-text">
                    <h2>GOVERNMENT HIGHER SECONDARY SCHOOL DOKADA PIRBABA BUNER</h2>
                    <p><b>NOTE:</b> Giving wrong information may lead to cancellation of your admission. Deposit the admission fee in the bank before submitting the admission form. On the day of interview, bring all your original documents like Student's CNIC, Father's CNIC, Character Certificate, Domicile, and DMC etc. Read the admission rules before filling the admission form. If there is any problem in submitting the form, please contact our representative.</p>
                    <label><b>Session</b></label>
                    <select name="Session">
                        <option selected hidden>Session</option>
                        <option disabled>2020</option>
                        <option disabled>2021</option>
                        <option disabled>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                    </select>
                    <button>
                        <a href="Folder/Fee Slip.jpg" download="Fee Slip Image" title="Click Here to Download Fee Slip Image" style="color: black; padding: 5px;">Download</a>
                    </button>
                </div>
                <div class="form-img">
                    <img src="Folder/Document.jpg" id="fee-pic">
                    <label for="fee-file" id="label-img">Fee Image</label>
                    <input type="file" accept="image/*" id="fee-file" name="Fimage">
                </div>
            </div>

            <div class="personal-info">
                <fieldset>
                    <legend>PERSONAL DETAILS</legend>
                    <div class="form-box name">
                        <label>Student Name*</label>
                        <input type="text" id="sname" placeholder="Enter Your Name" name="sname">
                        <span id="snameerror" style="color: red;"></span>
                    </div>
                    <div class="form-box cnic">
                        <label>Student CNIC*</label>
                        <input type="text" placeholder="15101-0000000-0" id="scnic" name="scnic">
                        <span id="scnicerror" style="color: red;"></span>
                    </div>
                    <div class="form-box mobile">
                        <label>Student Mobile No*</label>
                        <input type="tel" placeholder="0300-0000000" id="smobile" name="smobile">
                        <span id="smobileerror" style="color: red;"></span>
                    </div>
                    <div class="form-box name">
                        <label>Father Name*</label>
                        <input type="text" placeholder="Enter Your Father Name" id="fname" name="fname">
                        <span id="fnameerror" style="color: red;"></span>
                    </div>
                    <div class="form-box cnic">
                        <label>Father CNIC*</label>
                        <input type="text" placeholder="15101-0000000-0" id="fcnic" name="fcnic">
                        <span id="fcnicerror" style="color: red;"></span>
                    </div>
                    <div class="form-box mobile">
                        <label>Father Mobile No*</label>
                        <input type="tel" placeholder="0300-0000000" id="fmobile" name="fmobile">
                        <span id="fmobileerror" style="color: red;"></span>
                    </div>
                    <div class="form-box gender">
                        <label>Gender*</label>
                        <input list="Gender" placeholder="Select Your Gender" id="gender" name="gender">
                        <span id="gendererror" style="color: red;"></span>
                        <datalist id="">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </datalist>
                    </div>
                    <div class="form-box birth">
                        <label>Date Of Birth(optinal)</label>
                        <input type="date" name="birth">
                    </div>
                    <div class="form-box blood">
                        <label>Blood Group(optinal)</label>
                        <input type="text" name="blood">
                    </div>
                    <div class="form-box home">
                        <label>Home Address*</label>
                        <input type="text" name="home" id="home">
                        <span id="homeerror" style="color: red;"></span>
                    </div>
                    <div class="form-box email">
                        <label>Email*</label>
                        <?php
                        $email = $_SESSION['SESSION_EMAIL'];
                        $sql = "SELECT email FROM users WHERE email = '".$email."' ";
                        $result = $conn-> query($sql);
                        if($result->num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                                $emails = $row['email'];
                                echo "<input type='email' value='$emails' name='email' required readonly>";
                            }
                        }
                        ?>
                    </div>
                    <div class="form-box religion">
                        <label>Religion(optinal)</label>
                        <input list="Religion" placeholder="Select Your Religion" name="religion">
                        <datalist id="Religion">
                            <option>Islam</option>
                            <option>Hindu</option>
                            <option>Christian</option>
                            <option>Others</option>
                        </datalist>
                    </div>
                </fieldset>
            </div>

            <div class="academic-info">
                <fieldset>
                    <legend>ACADEMIC RECORD*</legend>
                    <div class="form-box school">
                        <label>School & Board</label>
                        <input type="text" name="school" id="school">
                        <span id="schoolerror" style="color: red;"></span>
                    </div>
                    <div class="form-box rollno">
                        <label>Roll Number*</label>
                        <input type="text" name="rollno" id="rollno">
                        <span id="rollnoerror" style="color: red;"></span>
                    </div>
                    <div class="form-box year">
                        <label>Passing Year*</label>
                        <input type="text" name="year" id="year">
                        <span id="yearerror" style="color: red;"></span>
                    </div>
                    <div class="form-box tmarks">
                        <label>Total Marks*</label>
                        <input type="text" name="tmarks" id="tmarks">
                        <span id="tmarkserror" style="color: red;"></span>
                    </div>
                    <div class="form-box omarks">
                        <label>Obtained Marks*</label>
                        <input type="text" name="omarks" id="omarks">
                        <span id="omarkserror" style="color: red;"></span>
                    </div>
                    <div class="form-box percent">
                        <label>Percentage*</label>
                        <input type="text" name="percent" id="percent">
                        <span id="percenterror" style="color: red;"></span>
                    </div>
                    <div class="form-box grade">
                        <label>Grade*</label>
                        <input type="text" name="grade" id="grade">
                        <span id="gradeerror"></span>
                    </div>
                    <div class="form-box group">
                        <label>Group*</label>
                        <input list="Group" placeholder="Select Your Group" name="group" id="group">
                        <span id="grouperror" style="color: red;"></span>
                        <datalist id="Group">
                            <option>Pre-Engineering</option>
                            <option>Pre-Medical</option>
                            <option>Computer Science</option>
                            <option>Humanities</option>
                        </datalist>
                    </div>
                </fieldset>
            </div>

           
                <input type="submit" value="Submit" name="submit" id="btn1">
                <input type="reset" value="Reset" name="reset" id="btn2">
            
        </form>
    </section>

    <?php
    if (isset($_POST['submit'])) {
        $profile = $_FILES['pimage'];
        $profile_loc = $_FILES['pimage']['tmp_name'];
        $profile_name = $_FILES['pimage']['name'];
        $profile_folder = "Admission Uploads/" . $profile_name;
        move_uploaded_file($profile_loc, 'Admission Uploads/' . $profile_name);

        $bankslip = $_FILES['bimage'];
        $bankslip_loc = $_FILES['bimage']['tmp_name'];
        $bankslip_name = $_FILES['bimage']['name'];
        $bankslip_folder = "Admission Uploads/" . $bankslip_name;
        move_uploaded_file($bankslip_loc, 'Admission Uploads/' . $bankslip_name);

        $session = $_POST['session'];
        $sname = $_POST['sname'];
        $scnic = $_POST['scnic'];
        $smobile = $_POST['smobile'];
        $fname = $_POST['fname'];
        $fcnic = $_POST['fcnic'];
        $fmobile = $_POST['fmobile'];
        $gender = $_POST['gender'];
        $birth = $_POST['birth'];
        $blood = $_POST['blood'];
        $home = $_POST['home'];
        $email = $_POST['email'];
        $religion = $_POST['religion'];
        $school = $_POST['school'];
        $rollno = $_POST['rollno'];
        $year = $_POST['year'];
        $tmarks = $_POST['tmarks'];
        $omarks = $_POST['omarks'];
        $percent = $_POST['percent'];
        $grade = $_POST['grade'];
        $group = $_POST['group'];
    }
    if (!empty($profile_folder) && !empty($bankslip_folder) && !empty($session) && !empty($sname) && !empty($scnic) && !empty($smobile) && !empty($fname) && !empty($fcnic) && !empty($fmobile) && !empty($gender) && !empty($home) && !empty($email) && !empty($school) && !empty($rollno) && !empty($year) && !empty($tmarks) && !empty($omarks) && !empty($percent) && !empty($grade) && !empty($group)) {
        $sql = "INSERT INTO admission (profile_image, bankslip_image, session, student_name, student_cnic, student_mobile, father_name, father_cnic, father_mobile, gender, date_birth, blood_group, home_address, email, religion, school_board, roll_number, passing_year, total_marks, obtained_marks, percentage, grade, groups, status)
        VALUES ('$profile_folder', '$bankslip_folder', '$session', '$sname', '$scnic', '$smobile', '$fname', '$fcnic', '$fmobile', '$gender', '$birth', '$blood', '$home', '$email', '$religion', '$school', '$rollno', '$year', '$tmarks', '$omarks', '$percent', '$grade', '$group', 'Pending')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script> alert('Data has been sent Successfully.'); </script>";
        } else {
            echo "<script> alert('Sorry ! Can't sent your Data.'); </script>";
        }
    } else {
        echo "<script> alert('Please fill in all the required fields.'); </script>";
    }
    ?>

    <section class="footer">
        <div class="footer-left">
            <h3>Govt Higher Secondary School</h3>
            <p>You can contact Government Higher Secondary School Dakada Buner on any social media platform, you can follow our school social media platform to know about the latest notification of our school. If you are facing any problem in our website then you can contact us on our number.</p>
             <ul class="footer-social">
                <li><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.whatsapp.com" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="https://www.google.com" target="_blank"><i class="fa-brands fa-google-plus"></i></a></li>
            </ul>
        </div>
        <div class="footer-right">
            <h3>Latest News</h3>
            <?php
            $sql = "SELECT * FROM document ORDER BY upload_date DESC LIMIT 4";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo "<ul class='footer-news'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<li><i class="fa-solid fa-circle-arrow-right"></i><a href="' . $row['file_path'] . '">' . $row['file_name'] . '</a></li>';
                }
                echo "</ul>";
            } else {
                echo "No Document Files Uploaded Yet. <br>";
            }
            mysqli_close($conn);
            ?>
            <button class="news-btn"><a href="News.php">Read More</a></button>
        </div>
    </section>

    <section class="copyright">
        <p>2023 All Right Reserved. Designed By <a href="#">Web Master</a></p>
    </section>
</body>
</html>