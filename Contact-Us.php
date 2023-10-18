<?php include('Connection.php'); ?>
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
    <title>CONTACT US</title>
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
            <li class="click"><a href="#"><i class="fa-solid fa-message"></i> Contact Us</a></li>
        </ul>
    </nav>

    <section class="contact-us">
        <div class="contact-text">
            <h2>Contact Information</h2>
            <p>If you have any problem or complaint contact us here. Fill up the form and our team will get back to you within 24 hours.</p>
            <ul class="contact-details">
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <span>Phone: </span>
                    <a href="tel:+923469417540">03469417540</a>
                </li>
                <li>
                    <i class="fas fa-paper-plane"></i>
                    <span>Email: </span>
                    <a href="mailto:school123@gmail.com">school123@gmail.com</a>
                </li>
                <li>
                    <i class="fas fa-globe"></i>
                    <span>Website: </span>
                    <a href="https://www.hed.gkp.pk" target="_blank">Govt Higher Secondary School</a>
                </li>
                <li>
                    <i class="fa-solid fa-magnifying-glass-location"></i>
                    <span>Location: </span>
                    <a href="https://maps.google.com" target="_blank">Dokada Pirbaba Buner</a>
                </li>
            </ul>
            <ul class="contact-social">
                <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="https://www.messenger.com" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a></li>
            </ul>
        </div>

        <div class="contact-form">
            <span>Send us a Message</span>
            <form action="#" method="post" autocomplete="on">
                <input type="text" name="Fname" placeholder="First Name" pattern="[A-Za-z]+" title="Only use uppercase & lowercase letters." required>
                <input type="text" name="Lname" placeholder="Last Name" pattern="[A-Za-z]+" title="Only use uppercase & lowercase letters." required>
                <input type="email" name="Email" placeholder="Mail" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
                <input type="tel" name="Phone" placeholder="Phone" pattern="[0-9]{11}" title="Only use numbers, Do not use spaces and hyphens." required>
                <textarea name="Message" placeholder="Write Your Message" required></textarea>
                <input type="submit" name="submit" value="Send Message" class="submit-btn">
            </form>
        </div>
    </section>

    <?php
    error_reporting(0);
    if(($_POST['submit'])) {
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $message = $_POST['Message'];
    }
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($message)) {
        $sql = "INSERT INTO contact (first_name, last_name, email, phone, message) VALUES ('$fname', '$lname', '$email', '$phone', '$message')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            echo "<script> alert('Your Message Has Been Sent Successfully.'); </script>";
        } else {
            echo "<script> alert('Sorry Your Message Can't Sent.'); </script>";
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

    <script>
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>
</html>