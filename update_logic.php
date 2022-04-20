<?php

        if (isset($_POST['edit_flight'])) {
            
            include 'data/database.php';
            $id = $_POST['id'];
            $flightid = $_POST['flightid'];
            $flightname = $_POST['flightname'];
            $capacity = $_POST['capacity'];
            $vacant_seats = $_POST['vacant_seats'];
            $startdes = $_POST['startdes'];
            $finaldes = $_POST['finaldes'];
            $departuretime = $_POST['departuretime'];
            $arrivaltime = $_POST['arrivaltime'];
            $charges = $_POST['charges'];
            // $aadhar = (int)$_POST['aadhar'];
            // var_dump($aadhar);
            // var_dump($arrivaltime);

            $updateqry = "UPDATE flights SET flightid='$flightid', flightname='$flightname', capacity=$capacity, vacant_seats=$vacant_seats, startdes='$startdes', finaldes='$finaldes', departuretime='$departuretime', arrivaltime='$arrivaltime', charges=$charges WHERE id=$id;";

            $query = mysqli_query($conn,$updateqry);

            if ($conn->query($updateqry) === TRUE) {
                // echo "New record updated successfully";
                echo '<script>alert("Record Updated Successfully")</script>';
                header("location: ./admin.php");
              } else {
                echo "Error: " . $updateqry . "<br>" . $conn->error;
              }
        }

?>