<?php
include ('Connection.php');
$output = '';
if(isset($_POST["export"])) {
     $query = "SELECT * FROM admission ORDER BY 1 DESC";
     $result = mysqli_query($conn, $query);
     if(mysqli_num_rows($result) > 0) {
          $output .= '
          <table border="1">
               <tr>
                    <th>Serial No</th>
                    <th>Session</th>
                    <th>Student Name</th>
                    <th>Student CNIC</th>
                    <th>Student Mobile</th>
                    <th>Father Name</th>
                    <th>Father CNIC</th>
                    <th>Father Mobile</th>
                    <th>Gender</th>
                    <th>Date Of Birth</th>
                    <th>Blood Group</th>
                    <th>Home Address</th>
                    <th>Email</th>
                    <th>Religion</th>
                    <th>School & Board</th>
                    <th>Roll Number</th>
                    <th>Passing Year</th>
                    <th>Total Marks</th>
                    <th>Obtained Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                    <th>Group</th>
               </tr>';

          $i = 0;
          while($row = mysqli_fetch_array($result)) {
               $sl = ++$i;
               $output .= '
               <tr>
                    <td> '.$sl.' </td>
                    <td> '.$row["session"].' </td>
                    <td> '.$row["student_name"].' </td>
                    <td> '.$row["student_cnic"].' </td>
                    <td> '.$row["student_mobile"].' </td>
                    <td> '.$row["father_name"].' </td>
                    <td> '.$row["father_cnic"].' </td>
                    <td> '.$row["father_mobile"].' </td>
                    <td> '.$row["gender"].' </td>
                    <td> '.$row["date_birth"].' </td>
                    <td> '.$row["blood_group"].' </td>
                    <td> '.$row["home_address"].' </td>
                    <td> '.$row["email"].' </td>
                    <td> '.$row["religion"].' </td>
                    <td> '.$row["school_board"].' </td>
                    <td> '.$row["roll_number"].' </td>
                    <td> '.$row["passing_year"].' </td>
                    <td> '.$row["total_marks"].' </td>
                    <td> '.$row["obtained_marks"].' </td>
                    <td> '.$row["percentage"].' </td>
                    <td> '.$row["grade"].' </td>
                    <td> '.$row["groups"].' </td>
               </tr>';
          }
          $output .= '</table>';
          header('Content-Type: application/xls');
          header('Content-Disposition: attachment; filename=Admission Records.xls');
          echo $output;
     }
}
?>