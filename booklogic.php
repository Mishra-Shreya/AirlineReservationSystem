<?php
require_once 'header.php';

        if (isset($_POST['booksubmit'])) {
            
            //Add database connection
            include 'data/database.php';

            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $aadhar = (int)$_POST['aadhar'];
            // var_dump($aadhar);
            $flightid = $_POST['flightid'];

            $insert = "INSERT into book (name, gender, aadhar, flight_id) values ('$name', '$gender', $aadhar, '$flightid');";

            // $query = mysqli_query($conn,$insert);

            if ($conn->query($insert) === TRUE) {
                echo '<script>alert("Your flight is booked")</script>';
                header("location: ./index.html");
              } else {
                echo "Error: " . $insert . "<br>" . $conn->error;
              }
        }
    // }
        require_once 'footer.php';
        ?>