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
    <title>ABOUT US</title>
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
            <li class="click"><a href="#"><i class="fa-solid fa-address-card"></i> About Us</a></li>
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

    <section class="about-us">
        <div class="about-text">
            <h2>Welcome To</h2>
            <h1>GOVERNMENT HIGHER SECONDARY SCHOOL DOKADA PIRBABA BUNER</h1>
            <p>Govt Higher Secondary School Dokada is situated about 5KM to the north-west from Pir Baba Bazar.
            This institution is established in 1994 and upgraded to Higher Secondary level in 2012. The site of this school is very charming because it is surrounded by hills, which remains green throughout the year. These hills contain various types of plants, flowers, especially Gul-e-Namair, waterfalls, streams, gems and wild life. The Snow clad hills add much to the beauty of this institution. The People of this area are affable and education lover. These People have very strong bond with the teaching staff of this school. They gather in PTC mettings punctually. Lastly, GHSS Dokada District Buner is blessed with scenic beauties as well as hand made art. One would like to be in such pleasurable institution for better education and peace of mind.<br>
            <b>Mission: </b>Our mission is to develop young men with active and creative minds, a sense of understanding and compassion for others, and the courage to act on their beliefs. We stress the total development of each child: spiritual, moral, intellectual, social, emotional and physical.</p>
            <button class="contact-btn"><a href="Contact-Us.php">Contact Us</a></button>
        </div>
        <div class="about-img">
            <?php
            $sql = "SELECT * FROM about ORDER BY upload_date DESC LIMIT 1";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<img src="' . $row['image_path'] . '">';
                }
            } else {
                echo "School Image Not Uploaded Yet.";
            }
            ?>
            <h5>GHSS Dokada Pirbaba Buner</h5>
        </div>
    </section>

    <section class="rules">
        <h1>OUR RULES</h1>
        <hr color="green">
        <div class="rules-box">
            <h3>EXAMINATION RULES</h3>
            <ul>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Participant should reach examination room at least 10 minutes before the scheduled time. No additional time shall be given to Participant arriving late.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Participant must maintain complete silence in the examination room. If a participant has any kind of query he/she should raise his/her hand and wait for the invigilator.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Participant must mark his/her attendance on the attendance sheet during the examinations. In case, his/her name is not listed, they need to report to an invigilator immediately.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Participant who has short attendance in any of the course(s) shall not be allowed to sit in the examination room.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Participant found cheating, chatting, gesturing or misbehaving in the examination room shall be dealt with under the UMC rules.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Participant cannot leave the examination room without prior permission of the invigilator.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Participant is not allowed to leave his/her seat during the exam without getting permission from the invigilator.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Any participant using abusive or obscene language in the answer sheet shall be dealt with under disciplinary rules.</li>
            </ul>
        </div>

        <div class="rules-box">
            <h3>ASSEMBLY RULES</h3>
            <ul>
                <li><i class="fa-solid fa-circle-arrow-right"></i> The Morning session begins with assembly in which all the students and staff members are expected to join. Students are to move class wise in a queue with hands locked at the back under the supervision of class teacher.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> All students must be dressed neatly in full school uniform. Wearing the ID card is compulsory. Students coming to school in untidy dress/hair etc, will be refused entry to school.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Maintain a low voice level while entering and exiting the assembly area.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Clap, talk and cheer only at appropriate times (Positive cheer only).</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> During the school assembly students have to observe proper decorum and solemnity befitting the occasion.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Politeness and courtesy of speech and good conduct are expected from the pupil.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Stop talking and be attentive immediately when the presenter is ready to speak or the presentation is ready to begin.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Do not bring unnecessary items to an assembly.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> At the end of assembly, remain seated until the teacher gives exit instructions.</li>
            </ul>
        </div>

        <div class="rules-box">
            <h3>LIBRARY RULES</h3>
            <ul>
                <li><i class="fa-solid fa-circle-arrow-right"></i> All students and staff of the school are members of the library.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> A student can borrow only two books at a time for a period of two weeks.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> A staff member can borrow maximum five books at a time for a period of one month.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Marking, underlining or writing on library books, periodicals, and newspapers is strictly forbidden.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> The Librarian may call for a book at any time, even if the normal period of loan has not expired.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> After reading, make sure that the books, periodicals and newspapers are kept back at their respective places.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Drink and food are not allowed in the Library.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Strict order and silence shall be maintained in the library and speak softly if needed.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> If the books are not returned within the specified time it will be viewed seriously and fine will be charged as per rules.</li>
            </ul>
        </div>

        <div class="rules-box">
            <h3>CLASSROOM RULES</h3>
            <ul>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Arrive on time for class.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Raise your hand to speak or volunteer.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Follow the dress code of the school.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Do not cheat or copy other people's work.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Complete all assignments.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Respect everyone in the class.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Keep your hands, feet, and objects to yourself.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Do not leave your seat without permission.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Listen to the teacher when being spoken to and answer your question.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Always try your best. Never give up!</li>
            </ul>
        </div>

        <div class="rules-box">
            <h3>SPORTS RULES</h3>
            <ul>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Whenever you play a sport or game, make sure you know the rules of that sport.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> If you are playing a team sport, respect your teammates. Don't be mean to them, and let everyone have a say.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> If you have a coach, listen to what your coach tells you to do, even if you don't agree.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> If there are referees in your sport, respect them and accept when they give you a penalty.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Don't take mistakes too seriously, but try to play to your best ability.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> If you lose a game, be a fair loser. Don't get too upset or angry.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> If you win , don't be a bad winner. Celebrate, but be kind to the losing team, and don't gloat!</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> Encourage your teammates if they make a mistake.</li>
                <li><i class="fa-solid fa-circle-arrow-right"></i> It is always good to end with a handshake!</li>
            </ul>
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