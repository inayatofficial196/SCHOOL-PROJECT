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
    <title>FEE STRUCTURE</title>
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
                    <li><a href="#">Fee Structure</a></li>
                    <li><a href="Admission.php">Apply Now</a></li>
                </ul>
            </li>
            <li><a href="Contact-Us.php"><i class="fa-solid fa-message"></i> Contact Us</a></li>
        </ul>
    </nav>

    <section class="fee-structure">
    	<table cellspacing="0">
    		<caption>Fee & Funds</caption>
    		<tr class="odd-row">
    			<td>01</td>
    			<td>Admission Fee</td>
    			<td>Rs: 130</td>
    		</tr>
    		<tr class="even-row">
    			<td>02</td>
    			<td>Board Registration Fee</td>
    			<td>Rs: 300</td>
    		</tr>
    		<tr class="odd-row">
    			<td>03</td>
    			<td>Security</td>
    			<td>Rs: 500 Refundable</td>
    		</tr>
    		<tr class="even-row">
    			<td>04</td>
    			<td>Examination</td>
    			<td>Rs: 100</td>
    		</tr>
    		<tr class="odd-row">
    			<td>05</td>
    			<td>ID Card</td>
    			<td>Rs: 100</td>
    		</tr>
    		<tr class="even-row">
    			<td>06</td>
    			<td>Library Fund</td>
    			<td>Rs: 40</td>
    		</tr>
    		<tr class="odd-row">
    			<td>07</td>
    			<td>Poor Fund</td>
    			<td>Rs: 40</td>
    		</tr>
    		<tr class="even-row">
    			<td>08</td>
    			<td>Social Welfare Fund</td>
    			<td>Rs: 30</td>
    		</tr>
    		<tr class="odd-row">
    			<td>09</td>
    			<td>Tuition Fee Science</td>
    			<td>Rs: 550</td>
    		</tr>
    		<tr class="even-row">
    			<td>10</td>
    			<td>Tuition Fee Arts</td>
    			<td>Rs: 500</td>
    		</tr>
			<tr class="odd-row">
    			<td>11</td>
    			<td>Sports Fund</td>
    			<td>Rs: 150</td>
    		</tr>
			<tr class="even-row">
    			<td>12</td>
    			<td>Science Fund</td>
    			<td>Rs: 50</td>
    		</tr>
			<tr class="odd-row">
    			<td>13</td>
    			<td>Annual Day Fee</td>
    			<td>Rs: 50</td>
    		</tr>
			<tr class="even-row">
    			<td>14</td>
    			<td>Scout Fund</td>
    			<td>Rs: 30</td>
    		</tr>
			<tr class="odd-row">
    			<td>15</td>
    			<td>Red Crescent Fund</td>
    			<td>Rs: 10</td>
    		</tr>
    	</table>

        <table cellspacing="0">
			<caption>Fine</caption>
    		<tr class="odd-row">
    			<td>01</td>
    			<td>Guidance Group Absence</td>
    			<td>Rs: 10</td>
    		</tr>
			<tr class="even-row">
    			<td>02</td>
    			<td>Science Practical Absence</td>
    			<td>Rs: 10</td>
    		</tr>
			<tr class="odd-row">
    			<td>03</td>
    			<td>Non observance of the School Uniform</td>
    			<td>Rs: 10</td>
    		</tr>
			<tr class="even-row">
    			<td>04</td>
    			<td>Non possession of School ID Card</td>
    			<td>Rs: 10</td>
    		</tr>
			<tr class="odd-row">
    			<td>05</td>
    			<td>Re-issuance of ID Card</td>
    			<td>Rs: 150</td>
    		</tr>
			<tr class="even-row">
    			<td>06</td>
    			<td>Re-admission 1st time</td>
    			<td>Rs: 130</td>
    		</tr>
			<tr class="odd-row">
    			<td>07</td>
    			<td>Re-admission 2nd time</td>
    			<td>Not Allowed</td>
    		</tr>
			<tr class="even-row">
    			<td>08</td>
    			<td>Absence from Montly Test / Pre-Board</td>
    			<td>Rs: 500</td>
    		</tr>
		</table>
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