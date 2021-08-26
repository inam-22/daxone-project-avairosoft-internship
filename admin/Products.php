<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">

    <!-- Datatables Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <form action="AddProducts.php" method="post">
                <h6 class="n-0 font-weight-bold text-primary">Products Profile

                    <button type="submit" name="g_product" class="btn btn-primary" data-toggle="modal" >
                       Add General Product 
                   </button>
                   <button type="submit" name="f_product" class="btn btn-primary" data-toggle="modal" >
                       Add Featured Product 
                   </button>
                   <button type="submit" name="b_product" class="btn btn-primary" data-toggle="modal" >
                       Add Best Product 
                   </button>
               </form>

           </h6> </div>
       </div>
   </div>



   <div class="container-fluid">

    <!-- Datatables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="n-0 font-weight-bold text-primary"> General Products 


            </h6> </div>
            <div class="card-body">

                <?php  
                if(isset($_SESSION['success']) && $_SESSION['success'] != '')
                {
	echo '<h2 class="bg-primary"> '.$_SESSION['success'].' </h2>';# text-white
	unset($_SESSION['success']);
}
if(isset($_SESSION['status']) && $_SESSION['status'] != '' )
{
      echo '<h2 class="big-danger"> '.$_SESSION['status'].' </h2>';# text-white
      unset($_SESSION['status']);
  }
  ?>

  <div class="table-responsive">

    <?php
    $query = "SELECT * FROM general_products";
    $query_run = mysqli_query($connection, $query);
    ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> ID </th>
                <th> Product </th>
                <th>Name </th>
                <th>Color</th>
                <th>Quantity</th>
                <th>Prize</th>
                <th>EDIT</th>
                <th>DELETE</th>
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
                        <td><?php  echo $row['G_ProductID']; ?></td>
                        <td><img style="height: 80px ; width: 100px ;" src=<?php echo $row['G_Product_Photo'];?>></td>
                        <td><?php  echo $row['G_Name']; ?></td>
                        <td><?php  echo $row['G_Color']; ?></td>
                        <td><?php  echo $row['G_Quantity']; ?></td>
                        <td><?php  echo $row['G_Prize']; ?></td>
                        
                        <td>
                            <form action="g_product_edit.php" method="post">
                                <input type="hidden" name="g_edit_id" value="<?php echo $row['G_ProductID']; ?>">
                                <button type="submit" name="g_edit_btn" class="btn btn-success"> EDIT</button>
                            </form>
                        </td>
                        <td>
                            <form action="code.php" method="post">
                                <input type="hidden" name="g_delete_id" value="<?php echo $row['G_ProductID']; ?>">
                                <button type="submit" name="g_delete_btn" class="btn btn-danger"> DELETE</button>
                            </form>
                        </td>
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




<div class="container-fluid">

    <!-- Datatables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="n-0 font-weight-bold text-primary"> Featured Products 


            </h6> </div>
            <div class="card-body">

                <?php  
                if(isset($_SESSION['f_success']) && $_SESSION['f_success'] != '')
                {
    echo '<h2 class="bg-primary"> '.$_SESSION['f_success'].' </h2>';# text-white
    unset($_SESSION['f_success']);
}
if(isset($_SESSION['f_status']) && $_SESSION['f_status'] != '' )
{
      echo '<h2 class="big-danger"> '.$_SESSION['f_status'].' </h2>';# text-white
      unset($_SESSION['f_status']);
  }
  ?>

  <div class="table-responsive">

    <?php
    $query = "SELECT * FROM featured_products";
    $query_run = mysqli_query($connection, $query);
    ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> ID </th>
                <th> Product </th>
                <th>Name </th>
                <th>Color</th>
                <th>Quantity</th>
                <th>Prize</th>
                <th>EDIT</th>
                <th>DELETE</th>
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
                        <td><?php  echo $row['F_ProductID']; ?></td>
                        <td><img style="height: 80px ; width: 100px ;" src=<?php echo $row['F_Product_Photo'];?>></td>
                        <td><?php  echo $row['F_Name']; ?></td>
                        <td><?php  echo $row['F_Color']; ?></td>
                        <td><?php  echo $row['F_Quantity']; ?></td>
                        <td><?php  echo $row['F_Prize']; ?></td>
                        
                        <td>
                            <form action="f_product_edit.php" method="post">
                                <input type="hidden" name="f_edit_id" value="<?php echo $row['F_ProductID']; ?>">
                                <button type="submit" name="f_edit_btn" class="btn btn-success"> EDIT</button>
                            </form>
                        </td>
                        <td>
                            <form action="code.php" method="post">
                                <input type="hidden" name="f_delete_id" value="<?php echo $row['F_ProductID']; ?>">
                                <button type="submit" name="f_delete_btn" class="btn btn-danger"> DELETE</button>
                            </form>
                        </td>
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





<div class="container-fluid">

    <!-- Datatables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="n-0 font-weight-bold text-primary"> Best Products 


            </h6> </div>
            <div class="card-body">

                <?php  
                if(isset($_SESSION['b_success']) && $_SESSION['b_success'] != '')
                {
    echo '<h2 class="bg-primary"> '.$_SESSION['b_success'].' </h2>';# text-white
    unset($_SESSION['b_success']);
}
if(isset($_SESSION['b_status']) && $_SESSION['b_status'] != '' )
{
      echo '<h2 class="big-danger"> '.$_SESSION['b_status'].' </h2>';# text-white
      unset($_SESSION['b_status']);
  }
  ?>

  <div class="table-responsive">

    <?php
    $query = "SELECT * FROM best_products";
    $query_run = mysqli_query($connection, $query);
    ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> ID </th>
                <th> Product </th>
                <th>Name </th>
                <th>Color</th>
                <th>Quantity</th>
                <th>Prize</th>
                <th>EDIT</th>
                <th>DELETE</th>
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
                        <td><?php  echo $row['B_ProductID']; ?></td>
                         <td><img style="height: 80px ; width: 100px ;" src=<?php echo $row['B_Product_Photo'];?>></td>
                        <td><?php  echo $row['B_Name']; ?></td>
                        <td><?php  echo $row['B_Color']; ?></td>
                        <td><?php  echo $row['B_Quantity']; ?></td>
                        <td><?php  echo $row['B_Prize']; ?></td>
                        
                        <td>
                            <form action="b_product_edit.php" method="post">
                                <input type="hidden" name="b_edit_id" value="<?php echo $row['B_ProductID']; ?>">
                                <button type="submit" name="b_edit_btn" class="btn btn-success"> EDIT</button>
                            </form>
                        </td>
                        <td>
                            <form action="code.php" method="post">
                                <input type="hidden" name="b_delete_id" value="<?php echo $row['B_ProductID']; ?>">
                                <button type="submit" name="b_delete_btn" class="btn btn-danger"> DELETE</button>
                            </form>
                        </td>
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