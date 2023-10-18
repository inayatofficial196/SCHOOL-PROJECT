<?php
include ('Connection.php');
$id = $_GET['id'];
$query = "DELETE FROM teachers WHERE id = $id";
if ($conn->query($query) === TRUE) {
    echo "<script> alert('Post Deleted Successfully!'); </script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url= http://localhost/FYP/Admin-Teachers.php"/>
    <?php
} else {
    echo "Error Deleting Post: " . $conn->error;
}
?>