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
<h6 class="n-0 font-weight-bold text-primary">Customers

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Registered Customers List 
</button>
</h6> </div>
<div class="card-body">


     <div class="table-responsive">

    <?php
                $query = "SELECT * FROM register";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th>Username </th>
                            <th>Password </th>
                            <th>Email</th>
                            
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
                                <td><?php  echo $row['RegisterID']; ?></td>
                                <td><?php  echo $row['Username']; ?></td>
                                <td><?php  echo $row['Password']; ?></td>
                                <td><?php  echo $row['Email']; ?></td>

                               
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