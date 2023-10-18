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
    <title>PROFILE</title>
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
            <li><a href="#"><i class="fa-solid fa-file-pen"></i> Admission</a>
                <ul>
                    <li><a href="Admission-Rules.php">Admission Rules</a></li>
                    <li><a href="Fee-Structure.php">Fee Structure</a></li>
                    <li><a href="Admission.php">Apply Now</a></li>
                </ul>
            </li>
            <li><a href="Contact-Us.php"><i class="fa-solid fa-message"></i> Contact Us</a></li>
            <li class="click"><a href="#"><i class="fa-solid fa-user"></i> Account</a>
                <ul>
                    <li><a href="Profile.php">Profile</a></li>
                    <li><a href="Signup/Register.php">Signup</a></li>
                    <li><a href="Signup/index.php">Login</a></li>
                    <li><a href="Signup/Logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <?php
    $email = $_SESSION["SESSION_EMAIL"];
    $sql = "SELECT * FROM admission where email = '" .$email. "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

    <section class="admission-form">
        <div class="form-head">
            <div class="form-img">
                <img src="<?php echo $row['profile_image'] ?>">
            </div>
            <div class="form-text">
                <h2>GOVERNMENT HIGHER SECONDARY SCHOOL DOKADA PIRBABA BUNER</h2>
                <p><b>NOTE:</b> Giving wrong information may lead to cancellation of your admission. Deposit the admission fee in the bank before submitting the admission form. On the day of interview, bring all your original documents like Student's CNIC, Father's CNIC, Character Certificate, Domicile, and DMC etc. Read the admission rules before filling the admission form. If there is any problem in submitting the form, please contact our representative.</p>
                <b>Session: </b>
                <?php echo $row['session'] ?>
                <div class="status">
                    <b>Status: </b>
                    <?php echo $row['status'] ?>
                </div>
            </div>
            <div class="form-img">
                <img src="<?php echo $row['feeslip_image'] ?>">
            </div>
        </div>

        <div class="personal-info">
            <fieldset>
                <legend>PERSONAL DETAILS</legend>
                <div>
                    <b>Student Name: </b>
                    <?php echo $row['student_name'] ?>
                </div>
                <div>
                    <b>Student CNIC: </b>
                    <?php echo $row['student_cnic'] ?>
                </div>
                <div>
                    <b>Student Mobile No: </b>
                    <?php echo $row['student_mobile'] ?>
                </div>
                <div>
                    <b>Father Name: </b>
                    <?php echo $row['father_name'] ?>
                </div>
                <div>
                    <b>Father CNIC: </b>
                    <?php echo $row['father_cnic'] ?>
                </div>
                <div>
                    <b>Father Mobile No: </b>
                    <?php echo $row['father_mobile'] ?>
                </div>
                <div>
                    <b>Gender: </b>
                    <?php echo $row['gender'] ?>
                </div>
                <div>
                    <b>Date Of Birth: </b>
                    <?php echo $row['date_birth'] ?>
                </div>
                <div>
                    <b>Blood Group: </b>
                    <?php echo $row['blood_group'] ?>
                </div>
                <div>
                    <b>Home Address: </b>
                    <?php echo $row['home_address'] ?>
                </div>
                <div>
                    <b>Email: </b>
                    <?php echo $row['email'] ?>
                </div>
                <div>
                    <b>Religion: </b>
                    <?php echo $row['religion'] ?>
                </div>
            </fieldset>
        </div>

        <div class="academic-info">
            <fieldset>
                <legend>ACADEMIC RECORD</legend>
                <div>
                    <b>School & Board: </b>
                    <?php echo $row['school_board'] ?>
                </div>
                <div>
                    <b>Roll Number: </b>
                    <?php echo $row['roll_number'] ?>
                </div>
                <div>
                    <b>Passing Year: </b>
                    <?php echo $row['passing_year'] ?>
                </div>
                <div>
                    <b>Total Marks: </b>
                    <?php echo $row['total_marks'] ?>
                </div>
                <div>
                    <b>Obtained Marks: </b>
                    <?php echo $row['obtained_marks'] ?>
                </div>
                <div>
                    <b>Percentage: </b>
                    <?php echo $row['percentage'] ?>
                </div>
                <div>
                    <b>Grade: </b>
                    <?php echo $row['grade'] ?>
                </div>
                <div>
                    <b>Group: </b>
                    <?php echo $row['groups'] ?>
                </div>
            </fieldset>
        </div>

        <form action="Profile-Download.php" method="post">
    		<input type="submit" name="download" id="download-btn" value="Download">
    	</form>
    </section>

    <?php
        }
    } else {
        echo "No Profile Data Avaliable.";
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