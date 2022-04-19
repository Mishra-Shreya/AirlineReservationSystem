<?php
require_once 'header.php';
?>                    
                <div class="container">
                    <!-- <div class="card shadow mb-4">
                        <div class="card-header">
                            Search Results...
                        </div>
                        <div class="card-body"> -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" >
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Flight</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Departure Time</th>
                                            <th>Arrival Time</th>
                                            <th>Charges</th>
                                            <th>Book</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Flight</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Departure Time</th>
                                            <th>Arrival Time</th>
                                            <th>Charges</th>
                                            <th>Book</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php

                                    if (isset($_POST['submit'])) {
                                        
                                        //Add database connection
                                        include 'data/database.php';

                                        $from = $_POST['from'];
                                        $to = $_POST['to'];
                                        $date = $_POST['date'];
                                        $adult = $_POST['adult'];
                                        $child = $_POST['child'];

                                        // if (empty($from) || empty($to) || empty($date) || 
                                        //     empty($adult) || empty($child)) {
                                        //     header("Location: ../results.php?error=Fields cannot be empty!");
                                        //     exit();
                                        // }

                                        // mysqli_stmt_close($stmt);
                                        // mysqli_close($conn);
                                    

                                        // include 'data/database.php';

                                        $select_flight = "SELECT id,flightid, CONCAT(`flightid`,' - ', `flightname`) AS flight,capacity, startdes,finaldes,departuretime,arrivaltime,charges FROM flights having startdes = '$from' and finaldes = '$to' order by (charges)";

                                        $query = mysqli_query($conn,$select_flight);

                                        // $num = mysqli_num_rows($query);

                                        while($res = mysqli_fetch_array($query)) {
                                        ?>

                                        <tr>
                                        <td><?php echo $res['id'];?></td>
                                        <td><?php echo $res['flight'];?></td>
                                        <td><?php echo $res['startdes'];?></td>
                                        <td><?php echo $res['finaldes'];?></td>
                                        <td><?php echo $res['departuretime'];?></td>
                                        <td><?php echo $res['arrivaltime'];?></td>
                                        <td><?php echo $res['charges'];?></td>
                                        <td class="text-center">
                                            <form action="book.php" method="post">
                                            <button class="btn btn-success" type="submit" name="book" value="<?php echo $res['flightid'];?>" id="book" title="Book">Book</button>
                                            </form>
                                            
                                        </td>

                                        <!-- <td class="text-center">
                                            <form action="update.php" method="post">
                                                <button class=" button-green" type="submit" name="edit" value="<?php echo $res['flightid'];?>" id="edit" title="Book">Edit</button>
                                            </form>
                                            
                                        </td>

                                        <td class="text-center">
                                            <form action="delete.php" method="post">
                                                <button class=" button-green" type="submit" name="delete" value="<?php echo $res['flightid'];?>" id="delete" title="Book">Delete</button>
                                            </form>
                                            
                                        </td> -->
                                        </tr>

                                        <?php
                                        } 
                                    // echo $from;
                                    // echo $to;
                                    }
                                   ?>
                                    
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        <!-- </div>
                    </div> -->
                </div>
  
<?php
require_once 'footer.php';
?>