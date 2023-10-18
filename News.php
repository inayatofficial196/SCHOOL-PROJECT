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
    <title>NEWS</title>
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
            <li class="click"><a href="#"><i class="fa-solid fa-bell"></i> News</a></li>
            <li><a href="#"><i class="fa-solid fa-file-pen"></i> Admission</a>
                <ul>
                    <li><a href="Admission-Rules.php">Admission Rules</a></li>
                    <li><a href="Fee-Structure.php">Fee Structure</a></li>
                    <li><a href="Admission.php">Apply Now</a></li>
                </ul>
            </li>
            <li><a href="Contact-Us.php"><i class="fa-solid fa-message"></i> Contact Us</a></li>
        </ul>
    </nav>

    <section class="news">
        <div class="news-list">
            <?php
            $sql = "SELECT * FROM news ORDER BY upload_date DESC";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='news-box'>";
                    echo "<h2>" . $row['title'] . "</h2>";
                    echo "<p>" . $row['content'] . "</p>";
                    echo "<span class='date'>" . $row['upload_date'] . "</span>";
                    echo "</div>";
                }
            } else {
                echo "News Not Uploaded Yet.";
            }
            ?>
        </div>

        <div class="doc-box">
            <h3>DOCUMENTS</h3>
            <?php
            $sql = "SELECT * FROM document ORDER BY upload_date DESC";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<ul>";
                    echo '<li><i class="fa-solid fa-circle-arrow-right"></i><a href="' . $row['file_path'] . '">' . $row['file_name'] . '</a></li>';
                    echo "</ul>";
                }
            } else {
                echo "No Document Files Uploaded Yet.";
            }
            ?>
        </div>
    </section>

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