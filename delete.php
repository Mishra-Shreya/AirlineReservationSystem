<?php 

if (isset($_POST['delete'])) {
            
    //Add database connection
    include 'data/database.php';

    $flightid = $_POST['delete'];

    $delete = "DELETE FROM flights WHERE flightid='$flightid';";

    if ($conn->query($delete) === TRUE) {
        echo "New record deleted successfully";
        header("location:".$_SERVER['HTTP_REFERER']);
      } else {
        echo "Error: " . $delete . "<br>" . $conn->error;
      }

}

?>