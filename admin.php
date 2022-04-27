<?php
require_once 'header.php';
?>                    
                <div class="container">

                    <center><h3>ADMIN PAGE</h3></center>
                    <!-- <div class="card shadow mb-4">
                        <div class="card-header">
                            Search Results...
                        </div>
                        <div class="card-body"> -->

                            <div class="container mb-2">
                                <form action="" method="post">
                                    <div class="row ">
                                        <div class="col-md-1">
                                            <button type="submit" name="refresh" class="btn btn-blue btn-block">
                                                <span class="glyphicon ">&#x21bb;</span>
                                            </button>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" name="lowest" class="btn btn-info btn-block">LOWEST FIRST</button>
                                            
                                                <!-- <div class="form-group">
                                                <label for="adults">SORT BY:</label>
                                                <select class="form-control" id="gender" name="gender">
                                                    <option value="none" selected hidden>Sort by:</option>
                                                    <button type="submit" name="lowest" class="btn btn-info"><option value="lowest">Charges (low to high) &nbsp; &nbsp; &nbsp;</option></button>
                                                    <option value="highest">Charges (low to high)</option>
                                                </select>
                                                </div> -->
                                           
                                        </div>
                                        
                                        <div class="col-md-2"><button type="submit" name="group" class="btn btn-blue btn-block">Group By</button></div>

                                        <div class="col-md-3"><a class="btn btn-info btn-block" href="./union.php?union=yes">Booked flights</a></div>
                                        
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-9" style="padding-right:0;">
                                                    <input style="border-top-right-radius: 0; border-bottom-right-radius: 0;" class="form-control mr-sm-2"  type="search" placeholder="Search" name="search_val" aria-label="Search">
                                                </div>
                                                <div class="col-md-3" style="padding-left:0;">
                                                    <button style="border-top-left-radius: 0; border-bottom-left-radius: 0;" class="btn btn-success my-2 my-sm-0 btn-block" name="search" type="search">&#x1F50E;&#xFE0E;</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </form>
                            </div>

                            &nbsp;

                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Flight id</th>
                                            <th>Flight Name</th>
                                            <th>Capacity</th>
                                            <th>Vacant Seats</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Departure Time</th>
                                            <th>Arrival Time</th>
                                            <th>Charges</th>
                                            <th>Book</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Flight id</th>
                                            <th>Flight Name</th>
                                            <th>Capacity</th>
                                            <th>Vacant Seats</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Departure Time</th>
                                            <th>Arrival Time</th>
                                            <th>Charges</th>
                                            <th>Book</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php

                                    // if (isset($_POST['submit'])) {
                                        
                                        //Add database connection
                                        include 'data/database.php';

                                      
                                        if (isset($_POST['lowest'])) { 
                                            $select_flight = "SELECT * FROM flights ORDER BY charges;";
                                        } elseif (isset($_POST['group'])) {
                                            $select_flight = "SELECT id, flightid, flightname, sum(capacity) as capacity, vacant_seats, startdes, finaldes, departuretime, arrivaltime, avg(charges) as charges FROM flights Group BY flightname;";
                                        } 
                                        // elseif (isset($_POST['union'])) {
                                        //     header("location: ./union.php");
                                        //     // $select_flight = "SELECT flightid FROM flights UNION ALL SELECT flightid FROM book ;";
                                        // } 
                                        elseif (isset($_POST['search'])) {
                                            $search = $_POST['search_val'];
                                            $select_flight = "SELECT * FROM flights WHERE CONCAT(id, flightid, flightname, capacity, vacant_seats, startdes, finaldes, departuretime, arrivaltime, charges) LIKE '%$search%'";
                                        } else {
                                            $select_flight = "SELECT * FROM flights";
                                        }

                                        $query = mysqli_query($conn,$select_flight);

                                        // $num = mysqli_num_rows($query);

                                        while($res = mysqli_fetch_array($query)) {
                                        ?>

                                        <tr>
                                        <td><?php echo $res['id'];?></td>
                                        <td><?php echo $res['flightid'];?></td>
                                        <td><?php echo $res['flightname'];?></td>
                                        <td><?php echo $res['capacity'];?></td>
                                        <td><?php echo $res['vacant_seats'];?></td>
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

                                        <td class="text-center">
                                            <form action="update.php" method="post">
                                                <button class="btn btn-primary" type="submit" name="edit" value="<?php echo $res['id'];?>" id="edit" title="Edit">Edit</button>
                                            </form>
                                            
                                        </td>

                                        <td class="text-center">
                                            <form action="delete.php" method="post">
                                                <button class="btn btn-danger" type="submit" name="delete" value="<?php echo $res['flightid'];?>" id="delete" title="Delete">Delete</button>
                                            </form>
                                            
                                        </td>
                                        </tr>

                                        <?php
                                        } 
                                    // echo $from;
                                    // echo $to;
                                    // }
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