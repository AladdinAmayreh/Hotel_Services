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
                                            
                                                <th scope="col">Room Number</th> 
                                                <th scope="col">Feedback</th>
                                                <th scope="col">Phone Number</th>
                                                
                                                <th scope="col">Mark As Read</th>
                                               
                                            </tr>
                                            fullname
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM customer";
                                            $result= mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($result)){

                                                echo "<tr style='text-align: center;'>";
                                                echo "<td>{$row['customer_id']}</td>";
                                                echo "<td>{$row['fullname']}</td>";
                                                echo "<td>{$row['room_number']}</td>";
                                                echo "<td>{$row['customer_message']}</td>";
                                                echo "<td>{$row['customer_phone']}</td>";
                                                
                                                
                                                echo "<td><a href ='delete_feedback.php?customer_id={$row['customer_id']}' class='btn
                                                             btn-danger'>Mark As Read</td>";
                                                echo "</tr>";                                               
                                            }


                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>




<?php include("../includes/footer.php"); ?>