<?php

 include('security.php');
 //include('CheckLogin.php');
 include('includes/header.php'); 
 include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- Datatables Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="n-0 font-weight-bold text-primary">Orders

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
     Customers Order List 
</button>
</h6> </div>
<div class="card-body">


     <div class="table-responsive">

    <?php
                $query = "SELECT * FROM Orders";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th>Product ID </th>
                            <th>Category </th>
                            <th>Quantity</th>
                            <th>Customer Address </th>
                            <th>Contact Number</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['OrderID']; ?></td>
                                <td><?php  echo $row['ProductID']; ?></td>
                                <td><?php  echo $row['Category']; ?></td>
                                <td><?php  echo $row['Quantity']; ?></td>
                                <td><?php  echo $row['Customer_Address']; ?></td>
                                <td><?php  echo $row['Customer_No']; ?></td>

                               
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

        </div>
</div>
</div>
</div>
<!-- /.container-fluid -->

<?php 
include('includes/scripts.php'); 
include('includes/footer.php'); 
?>