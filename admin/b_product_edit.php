<?php
 include('security.php');
 include('includes/header.php'); 
 include('includes/navbar.php'); 
?>


<!-- Datatables Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="n-0 font-weight-bold text-primary">EDIT Best Product Profile</h6>

</div>
<div class="card-body">
<?php 
if(isset($_POST['b_edit_btn'])){
	$id = $_POST['b_edit_id'];

	$query = "SELECT * FROM best_products WHERE B_ProductID='$id' ";
            $query_run = mysqli_query($connection, $query);

			foreach($query_run as $row){

?>

 <form action="code.php" method="POST">
 <input type="hidden" name="b_edit_id" value="<?php echo $row['B_ProductID'] ?>">

                           

 <div class="form-group">
                <label> Product Photo </label>
                <input type="file" name="edit_B_Product_Photo"  value="<?php echo $row['B_Product_Photo'] ?>" class="form-control" placeholder="Enter Product Photo">
                
            </div>
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="edit_B_Name" value="<?php echo $row['B_Name'] ?>" class="form-control" placeholder="Enter Product Name">
               
            </div>
            <div class="form-group">
                <label>Color</label>
                <input type="text" name="edit_B_Color" value="<?php echo $row['B_Color'] ?>" class="form-control" placeholder="Enter Color Name">
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" name="edit_B_Quantity" value="<?php echo $row['B_Quantity'] ?>" class="form-control " placeholder="Enter Quantity">
               
            </div>
            <div class="form-group">
                <label>Prize</label>
                <input type="number" name="edit_B_Prize" value="<?php echo $row['B_Prize'] ?>" class="form-control" placeholder="Enter Prize">
            </div>
			
			
			
			<a href="Products.php" class="btn btn-danger"> CANCEL </a>
             <button type="submit" name="b_updatebtn" class="btn btn-primary"> Update </button>

                        </form>

			<?php 
			}
			 }
			
			?>


      </div>
</div>
</div>

<!-- /.container-fluid -->




<?php 
include('includes/scripts.php'); 
include('includes/footer.php'); 
?>