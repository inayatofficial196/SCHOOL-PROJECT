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
    <title>HOME</title>
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
            <li class="click"><a href="#"><i class="fa-solid fa-house"></i> Home</a></li>
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
        </ul>
    </nav>

    <section class="about-home">
        <div class="about-principal">
            <?php
            $sql = "SELECT * FROM principal ORDER BY upload_date DESC LIMIT 1";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<h2>' . $row['principal_name'] . '</h2>';
                }
            } else {
                echo "Principal Name Not Uploaded Yet.";
            }
            ?>
            <p><b>Message: </b>Dear Parents and Students, It is with great pleasure that I welcome you to our school website. As Principal I am hugely impressed by the commitment of the school and the staff to the provision of an excellent all-round education for our students in our state of the art facilities. Under my leadership, and as a team working together, we strongly promote academic achievement among our students.<br>
            Govt Higher Secondary School Dokada is a supreme center of learning in District Buner. It has contributed much to the field of education. It has been toiling for quality education since last three years. The students of this school have a positive influence in upgrading the society. Being principal of this school, I feel proud to be the head of such institution. My abidance is not only to maintain the standard, achieved by this institution, but to ameliorate further. I am the luckiest to have Top Qualified and sincere staff. Our aim is to prepare our generation to face the challenges of tomorrow. In brief, I appeal to the community to contribute their efforts to help us in improving our quality education. We welcome you to join GHSS Dokada. Wish you all the best and have a very illuminate life in future. I hope you enjoy your visit to the website.</p>
            <button class="about-btn"><a href="About-Us.php">Read More</a></button>
        </div>
        <div class="home-img">
            <?php
            $sql = "SELECT * FROM principal ORDER BY upload_date DESC LIMIT 1";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<img src="' . $row['image_path'] . '">';
                    echo '<h5>' . $row['principal_name'] . '</h5>';
                }
            } else {
                echo "Principal Image Not Uploaded Yet.";
            }
            ?>
        </div>
    </section>

    <section class="services">
        <h1>OUR SERVICES</h1>
        <hr color="green">
        <div class="services-box">
            <div class="services-img">
                <img src="Folder/Gallery/Student-01.jpg" alt="Great Facilities">
            </div>
            <div class="services-text">
                <h3>GREAT FACILITIES</h3>
                <p>Our grounds, buildings and facilities are well maintained. Fully equipped multi-purpose hall with sound room, stage, fully equipped canteen and toilet facilities. Used for drama, physical education, school assemblies etc. There are three adventure playgrounds which are challenging and safe play environments for children of all ages and abilities.</p>
            </div>
        </div>

        <div class="services-box">
            <div class="services-img">
                <img src="Folder/Gallery/Student-15.jpg" alt="Science Laboratories">
            </div>
            <div class="services-text">
                <h3>SCIENCE LABORATORIES</h3>
                <p>Our school lays great emphasis on science education as it enables man to explore and understand nature and exploit its resources for the growing needs of the humanity at large. A Science Laboratory is the relevant place where the students get opportunities to develop scientific outlook and seek answers to their questions and queries.</p>
            </div>
        </div>

        <div class="services-box">
            <div class="services-img">
                <img src="Folder/Gallery/Student-16.jpg" alt="Computer Lab">
            </div>
            <div class="services-text">
                <h3>COMPUTER LAB</h3>
                <p>Our School has a computer lab. There are a plenty number of computers in our lab currently. They are state-of-the-art with multimedia, most of them with large LCD monitors that are easier on the eyes, generate less heat and utilize less power, therefore, keeping the classroom ambience suitable for students.</p>
            </div>
        </div>

        <div class="services-box">
            <div class="services-img">
                <img src="Folder/Gallery/Bus-01.jpg" alt="School Bus">
            </div>
            <div class="services-text">
                <h3>SCHOOL BUS</h3>
                <p>The School manages a fleet of 5 school buses for providing transport facility to the students. These buses also provide conveyance facilities to the students during recreational trips in and around Buner and other areas of historical importance. Parents willing to opt for the bus facility for their children are advised to contact the respective Transport Supervisor.</p>
            </div>
        </div>

        <div class="services-box">
            <div class="services-img">
                <img src="Folder/Gallery/Books.jpg" alt="Varied Library">
            </div>
            <div class="services-text">
                <h3>VARIED LIBRARY</h3>
                <p>A school library is a structure within the school that houses a collection of books, audio-visual material and other content that serves common use to meet the educational, informative and recreational needs of the users. The chief objective of our libraries is to meet the academic needs of the particular educational institution which it serves.</p>
            </div>
        </div>
    </section>

    <section class="teacher-home">
        <h1>OUR TEACHERS</h1>
        <hr color="green">
        <div class="teacher-row">
            <?php
            $query = "SELECT * FROM teachers LIMIT 4";
            $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='teacher-box'>";
                    echo "<img src='" . $row['image_path'] . "'>";
                    echo "<small>" . $row['teacher_post'] . "</small>";
                    echo "<h3>" . $row['teacher_name'] . "</h3>";
                    echo "<p>" . $row['teacher_details'] . "</p>";
                    echo "<ul class='teacher-social'>
                        <li><a href='" . $row['facebook'] . "' target='_blank'><i class='fa-brands fa-facebook'></i></a></li>
                        <li><a href='" . $row['twitter'] . "' target='_blank'><i class='fa-brands fa-twitter'></i></a></li>
                        <li><a href='" . $row['instagram'] . "' target='_blank'><i class='fa-brands fa-instagram'></i></a></li>
                        <li><a href='" . $row['whatsapp'] . "' target='_blank'><i class='fa-brands fa-whatsapp'></i></a></li>
                        <li><a href='" . $row['email'] . "'><i class='fa-solid fa-envelope'></i></a></li>
                    </ul>";
                    echo "</div>";
                }
            } else {
                echo "Teachers Post Not Uploaded Yet.";
            }
            ?>
        </div>
        <button class="teacher-btn"><a href="Teachers.php">See More</a></button>
    </section>

    <section class="admission-home">
        <div class="admission-box">
            <h3>Apply For Admission</h3>
            <p>2023 Admission is going on, please submit your forms before the last date, admission will not be accepted after the last date. To do online admission it is important to know the rules of admission. If anyone has any problem in online admission then contact us, Thanks.</p>
            <button class="admission-btn"><a href="Admission.php">Apply Now</a></button>
        </div>
    </section>

    <section class="news-home">
        <?php
        $sql = "SELECT * FROM marquee ORDER BY upload_date DESC LIMIT 1";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<marquee direction='left' behavior='alternate' scrollamount='10' onmouseover='this.stop()' onmouseout='this.start()'>" . $row['news'] . "</marquee>";
            }
        } else {
            echo "Latest News Not Uploaded Yet.";
        }
        ?>
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