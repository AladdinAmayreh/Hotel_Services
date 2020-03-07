<?php 
include("../includes/connect.php");
//the action will start if user press on button

  
 
  


include("../includes/header.php"); 


?>

   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr style="text-align: center;">
                                                
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th> 
                                                <th scope="col">Date & Time</th>
                                                <th scope="col">Room Number</th> 
                                                <th scope="col">Order</th>
                                                <th scope="col">Delivered</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM orders";
                                            $result= mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($result)){

                                                echo "<tr style='text-align: center;'>";
                                                echo "<td>{$row['order_id']}</td>";
                                                echo "<td>{$row['fullname']}</td>";
                                                echo "<td>{$row['order_date']}</td>";
                                                echo "<td>{$row['room_number']}</td>";
                                                echo "<td>{$row['name']}</td>";
                                                echo "<td><a href ='delete_order.php?order_id={$row['order_id']}' class='btn
                                                             btn-danger'>Delivered</td>";
                                                echo "</tr>";                                               
                                            }


                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>




<?php include("../includes/footer.php"); ?>