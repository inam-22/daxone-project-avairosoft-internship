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
       Customer Messages 
</button>
</h6> </div>
<div class="card-body">


     <div class="table-responsive">

    <?php
                $query = "SELECT * FROM contact";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th>Name </th>
                            <th>Subject </th>
                            <th>Message </th>
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
                                <td><?php  echo $row['ContactID']; ?></td>
                                <td><?php  echo $row['Name']; ?></td>
                                <td><?php  echo $row['Subject']; ?></td>
                                <td><?php  echo $row['Message']; ?></td>
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