<?php
require_once 'header.php';

if (isset($_POST['book'])) {
    $flightid = $_POST['book'];
    // echo $flightid;
}
?>    


    <div class="fh5co-hero">
      <div class="fh5co-overlay"></div>
      <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image:url(assets/images/cover_bg_3.jpg);">
        <div class="desc">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="tabulation animate-box">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#" >Details</a></li>
                  </ul>
                  <form action="booklogic.php" method="post">
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="flights">
                        <div class="row">
                        <div class="col-xxs-12 col-xs-12 mt" >
                        <!-- style="display:none;" -->
                            <div class="input-field">
                              <label>Flight id:</label>
                              <input type="text" name="flightid" id="flightid" value="<?php echo $flightid ?>" class="form-control" readonly>
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt">
                            <div class="input-field">
                              <label>Name:</label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                            </div>
                          </div>

                          <div class="col-xxs-12 col-xs-6 mt">
                            <div class="form-group">
                              <label for="adults">Gender:</label>
                              <select class="form-control" id="gender" name="gender">
                                <option value="P">Prefer not to say</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-sm-12 mt alternate">
                            
                            <div class="input-field">
                              <label>Aadhar:</label>
                              <input type="number" class="form-control" name="aadhar" id="aadhar" placeholder="xxxxxxxxxxxx" minlength="12" maxlength="12">
                            </div>
                          </div>
                          
                          
                        
                          <div class="col-xs-12">
                            <input type="submit" value="Submit" name="booksubmit" class="btn btn-primary btn-block">
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="desc2 animate-box">
                <div class="col-sm-6 col-md-6">
                  <p>Lorem ipsum dolor sit amet</p>
                  <h2>Enter your details</h2></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php

    //     if (isset($_POST['booksubmit'])) {
            
    //         //Add database connection
    //         include 'data/database.php';

    //         $name = $_POST['name'];
    //         $gender = $_POST['gender'];
    //         $aadhar = (int)$_POST['aadhar'];
    //         // var_dump($aadhar);
    //         $flightid = $_POST['flightid'];

    //         $insert = "INSERT into book (name, gender, aadhar, flight_id) values ('$name', '$gender', $aadhar, '$flightid');";

    //         // $query = mysqli_query($conn,$insert);

    //         if ($conn->query($insert) === TRUE) {
    //             echo '<script>alert("Your flight is booked")</script>';
    //             header("location: ./index.html");
    //           } else {
    //             echo "Error: " . $insert . "<br>" . $conn->error;
    //           }
    //     }
    // }
        require_once 'footer.php';
        ?>