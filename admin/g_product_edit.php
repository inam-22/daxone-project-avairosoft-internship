<?php
 include('security.php');
 include('includes/header.php'); 
 include('includes/navbar.php'); 
?>


<!-- Datatables Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="n-0 font-weight-bold text-primary">EDIT General Product Profile</h6>

</div>
<div class="card-body">
<?php 
if(isset($_POST['g_edit_btn'])){
	$id = $_POST['g_edit_id'];

	$query = "SELECT * FROM general_products WHERE G_ProductID='$id' ";
            $query_run = mysqli_query($connection, $query);

			foreach($query_run as $row){

?>

 <form action="code.php" method="POST">
 <input type="hidden" name="g_edit_id" value="<?php echo $row['G_ProductID'] ?>">

                           

 <div class="form-group">
                <label> Product Photo </label>
                <input type="file" name="edit_G_Product_Photo"  value="<?php echo $row['G_Product_Photo'] ?>" class="form-control" placeholder="Enter Product Photo">
                
            </div>
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="edit_G_Size" value="<?php echo $row['G_Name'] ?>" class="form-control" placeholder="Enter Product Name">
               
            </div>
            <div class="form-group">
                <label>Color</label>
                <input type="text" name="edit_G_Color" value="<?php echo $row['G_Color'] ?>" class="form-control" placeholder="Enter Color Name">
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" name="edit_G_Quantity" value="<?php echo $row['G_Quantity'] ?>" class="form-control " placeholder="Enter Quantity">
               
            </div>
            <div class="form-group">
                <label>Prize</label>
                <input type="number" name="edit_G_Prize" value="<?php echo $row['G_Prize'] ?>" class="form-control" placeholder="Enter Prize">
            </div>
			
			
			
			<a href="Products.php" class="btn btn-danger"> CANCEL </a>
             <button type="submit" name="g_updatebtn" class="btn btn-primary"> Update </button>

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