<?php
require_once 'header.php';

if (isset($_POST['edit'])) {
    $id = $_POST['edit'];
    // echo $flightid;

    //Add database connection
    include 'data/database.php';

    $select_flight = "SELECT * FROM flights WHERE id=$id";
    $query = mysqli_query($conn,$select_flight);
    $row= mysqli_fetch_array($query);
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
                    <li class="active"><a href="#" >Flight Details</a></li>
                  </ul>
                  <form action="update_logic.php" method="post">
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="flights">
                        <div class="row">
                            <div class="col-xxs-12 col-xs-12 mt" >
                                <div class="input-field">
                                <label>Id:</label>
                                <input type="text" name="id" id="id" value="<?php echo $row['id'] ?>" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-xxs-6 col-xs-6 mt">
                            <div class="input-field">
                              <label>Flight Id:</label>
                              <input type="text" name="flightid" id="flightid" value="<?php echo $row['flightid'] ?>" class="form-control">
                            </div>
                          </div>
                          <div class="col-xxs-6 col-xs-6 mt">
                            <div class="input-field">
                              <label>Flight Name:</label>
                              <input type="text" name="flightname" id="flightname" value="<?php echo $row['flightname']; ?>" class="form-control">
                            </div>
                          </div>

                          <div class="col-xxs-6 col-xs-6 mt">
                            <div class="input-field">
                              <label>Capacity:</label>
                              <input type="number" name="capacity" id="capacity" value="<?php echo $row['capacity'] ?>" class="form-control">
                            </div>
                          </div>
                          <div class="col-xxs-6 col-xs-6 mt">
                            <div class="input-field">
                              <label>Vacant Seats:</label>
                              <input type="number" name="vacant_seats" id="vacant_seats" value="<?php echo $row['vacant_seats'] ?>" class="form-control">
                            </div>
                          </div>

                          <div class="col-xxs-6 col-xs-6 mt">
                            <div class="input-field">
                              <label for="startdes">From:</label>
                              <!-- <input type="text" name="from" id="from" class="form-control" placeholder="Los Angeles, USA"> -->
                              <select class="form-control" id="startdes" name="startdes">
                              <option value="<?php echo $row['startdes'] ?>" selected hidden><?php echo $row['startdes'] ?></option>
                                <option value="BOM">Mumbai - BOM</option>
                                <option value="DEL">Delhi - DEL</option>
                                <option value="BLR">Bangalore - BLR</option>
                                <option value="HYD">Hyderabad - HYD</option>
                                <option value="CCN">Chennai - CCN</option>
                                <option value="PUNE">Pune - PUNE</option>
                                <option value="GOI">Goa - GOI</option>
                                <option value="BNS">Varanasi - BNS</option>
                                <option value="MAA">Kolkata - MAA</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-xxs-6 col-xs-6 mt">
                            <div class="input-field">
                              <label for="finaldes">To:</label>
                              <!-- <input type="text" name="from" id="from" class="form-control" placeholder="Los Angeles, USA"> -->
                              <select class="form-control" id="finaldes" name="finaldes">
                                <option value="<?php echo $row['finaldes'] ?>" selected hidden><?php echo $row['finaldes'] ?></option>
                                <option value="BOM">Mumbai - BOM</option>
                                <option value="DEL">Delhi - DEL</option>
                                <option value="BLR">Bangalore - BLR</option>
                                <option value="HYD">Hyderabad - HYD</option>
                                <option value="CCN">Chennai - CCN</option>
                                <option value="PUNE">Pune - PUNE</option>
                                <option value="GOI">Goa - GOI</option>
                                <option value="BNS">Varanasi - BNS</option>
                                <option value="MAA">Kolkata - MAA</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-xxs-4 col-xs-4 mt">
                            <div class="input-field">
                              <label>Departure:</label>
                              <input type="time" step="1" name="departuretime" id="departuretime" value="<?php echo $row['departuretime'] ?>" class="form-control">
                            </div>
                          </div>
                          <div class="col-xxs-4 col-xs-4 mt">
                            <div class="input-field">
                              <label>Arrival:</label>
                              <input type="time" step="1" name="arrivaltime" id="arrivaltime" value="<?php echo $row['arrivaltime'] ?>" class="form-control">
                            </div>
                          </div>

                          <div class="col-xxs-4 col-xs-4 mt">
                            <div class="input-field">
                              <label>Charges:</label>
                              <input type="number" name="charges" id="charges" value="<?php echo $row['charges'] ?>" class="form-control">
                            </div>
                          </div>                        
                                                  
                          <div class="col-xs-12">
                            <input type="submit" value="Update" name="edit_flight" class="btn btn-primary btn-block">
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
                  <h2>Update flight details</h2></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php

        // if (isset($_POST['edit_flight'])) {
            
        //     include 'data/database.php';
        //     $id = $_POST['id'];
        //     $flightid = $_POST['flightid'];
        //     $flightname = $_POST['flightname'];
        //     $capacity = $_POST['capacity'];
        //     $vacant_seats = $_POST['vacant_seats'];
        //     $startdes = $_POST['startdes'];
        //     $finaldes = $_POST['finaldes'];
        //     $departuretime = $_POST['departuretime'];
        //     $arrivaltime = $_POST['arrivaltime'];
        //     $charges = $_POST['charges'];
        //     // $aadhar = (int)$_POST['aadhar'];
        //     // var_dump($aadhar);
        //     // var_dump($arrivaltime);

        //     $updateqry = "UPDATE flights SET flightid='$flightid', flightname='$flightname', capacity=$capacity, vacant_seats=$vacant_seats, startdes='$startdes', finaldes='$finaldes', departuretime='$departuretime', arrivaltime='$arrivaltime', charges=$charges WHERE id=$id;";

        //     $query = mysqli_query($conn,$updateqry);

        //     if ($conn->query($updateqry) === TRUE) {
        //         echo "New record updated successfully";
        //         header("location: ./admin.php");
        //       } else {
        //         echo "Error: " . $insert . "<br>" . $conn->error;
        //       }
        // }
    // }
        require_once 'footer.php';
        ?>