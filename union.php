<?php
require_once 'header.php';

// if (isset($_GET['union'])) {
//     $select_flight = "SELECT flightid FROM flights UNION ALL SELECT flightid FROM book ;";
// } 

?>                    
                <div class="container">

                    <center><h3>ADMIN PAGE</h3></center>
                    <center><h4>Booked flights</h4></center>

                            <div class="container mb-2">
                                <form action="union.php" method="post">
                                    <div class="row ">
                                        <div class="col-md-1">
                                            <a href="./admin.php" class="btn btn-blue">
                                                <span class="glyphicon ">&#8592;</span>
                                            </a>
                                        </div>
                                 
                                    </div>
                                    
                                </form>
                            </div>
                            &nbsp;

                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" >
                                    <thead>
                                        <tr>
                                            
                                            <th>Flight Id</th>
                                            <th>Flight name</th>
                                            <th>Passenger Booking Id</th>
                                            <th>Passenger Name</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <!-- <th>#</th> -->
                                            <th>Flight Id</th>
                                            <th>Flight name</th>
                                            <th>Passenger Booking Id</th>
                                            <th>Passenger Name</th>
                                            <!-- <th>Flight Name</th>
                                            <th>Capacity</th>
                                            <th>Vacant Seats</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Departure Time</th>
                                            <th>Arrival Time</th>
                                            <th>Charges</th>
                                            <th>Book</th>
                                            <th>Edit</th>
                                            <th>Delete</th> -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php

                                    // if (isset($_POST['submit'])) {
                                        
                                        //Add database connection
                                        include 'data/database.php';

                                      
                                        if (isset($_GET['union'])) {
                                            $select_flight= "SELECT flights.flightid as fid, flights.flightname as fname, book.id as bid, book.name as bname
                                                            FROM flights
                                                            INNER JOIN book ON flights.flightid = book.flight_id 
                                                            ORDER BY flights.flightid;";
                                        } 
                                        else {
                                            $select_flight = "SELECT * FROM flights";
                                        }

                                        $query = mysqli_query($conn,$select_flight);

                                        // $num = mysqli_num_rows($query);

                                        while($res = mysqli_fetch_array($query)) {
                                        ?>

                                        <tr>
                                        
                                        <td><?php echo $res['fid'];?></td>
                                        <td><?php echo $res['fname'];?></td>
                                        <td><?php echo $res['bid'];?></td>
                                        <td><?php echo $res['bname'];?></td>
                                        
                                        </tr>

                                        <?php
                                        } 
                                   ?>
                                    
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                </div>
  
<?php
require_once 'footer.php';
?>