<?php
include('Connection.php');
$cid = $_GET['id'];
$query = "DELETE FROM contact WHERE id = '$cid'";
$data = mysqli_query($conn, $query);
if($data) {
    echo "<script> alert('Record Deleted Successfully!'); </script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url= http://localhost/FYP/Admin-Contact.php"/>
    <?php
} else {
    echo "Failed to Delete";
}
?>