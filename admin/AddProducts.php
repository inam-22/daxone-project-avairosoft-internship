<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>




		<?php 

		if(isset($_POST['g_product'])){

			?>
<!-- Datatables Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="n-0 font-weight-bold text-primary">Add General Product Profile</h6>

	</div>
	<div class="card-body">


			<form action="code.php" method="POST" enctype="multipart/form-data">




				<div class="form-group">
					<label> Product Photo </label>
					<input type="file" name="add_G_Product_Photo"  class="form-control" placeholder="Enter Product Photo" >

				</div>
				<div class="form-group">
					<label>Size</label>
					<input type="text" name="add_G_Name"  value="" class="form-control" placeholder="Enter Product Name">

				</div>
				<div class="form-group">
					<label>Color</label>
					<input type="text" name="add_G_Color"  value="" class="form-control" placeholder="Enter Color Name">
				</div>
				<div class="form-group">
					<label>Quantity</label>
					<input type="number" name="add_G_Quantity"  value="" class="form-control " placeholder="Enter Quantity">

				</div>
				<div class="form-group">
					<label>Prize</label>
					<input type="number" name="add_G_Prize" value="" class="form-control" placeholder="Enter Prize">
				</div>



				<a href="Products.php" class="btn btn-danger"> CANCEL </a>
				<button type="submit" name="add_btn" class="btn btn-primary"> Add </button>

			</form>

			<?php 

		}

		?>

		<?php 

		if(isset($_POST['f_product'])){

			?>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="n-0 font-weight-bold text-primary">Add Featured Product Profile</h6>

	</div>
	<div class="card-body">

			<form action="code.php" method="POST" enctype="multipart/form-data">




				<div class="form-group">
					<label> Product Photo </label>
					<input type="file" name="add_F_Product_Photo" value="" class="form-control" placeholder="Enter Product Photo">

				</div>
				<div class="form-group">
					<label>Size</label>
					<input type="text" name="add_F_Name"  value="" class="form-control" placeholder="Enter Product Name">

				</div>
				<div class="form-group">
					<label>Color</label>
					<input type="text" name="add_F_Color"  value="" class="form-control" placeholder="Enter Color Name">
				</div>
				<div class="form-group">
					<label>Quantity</label>
					<input type="number" name="add_F_Quantity"  value="" class="form-control " placeholder="Enter Quantity">

				</div>
				<div class="form-group">
					<label>Prize</label>
					<input type="number" name="add_F_Prize" value="" class="form-control" placeholder="Enter Prize">
				</div>



				<a href="Products.php" class="btn btn-danger"> CANCEL </a>
				<button type="submit" name="add_btn2" class="btn btn-primary"> Add </button>

			</form>

			<?php 

		}

		?>



		<?php 

		if(isset($_POST['b_product'])){

			?>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="n-0 font-weight-bold text-primary">Add Best Product Profile</h6>

	</div>
	<div class="card-body">


			<form action="code.php" method="POST" enctype="multipart/form-data">




				<div class="form-group">
					<label> Product Photo </label>
					<input type="file" name="add_B_Product_Photo" value="" class="form-control" placeholder="Enter Product Photo">

				</div>
				<div class="form-group">
					<label>Product Name</label>
					<input type="text" name="add_B_Name"  value="" class="form-control" placeholder="Enter Product Name">

				</div>
				<div class="form-group">
					<label>Color</label>
					<input type="text" name="add_B_Color"  value="" class="form-control" placeholder="Enter Color Name">
				</div>
				<div class="form-group">
					<label>Quantity</label>
					<input type="number" name="add_B_Quantity"  value="" class="form-control " placeholder="Enter Quantity">

				</div>
				<div class="form-group">
					<label>Prize</label>
					<input type="number" name="add_B_Prize" value="" class="form-control" placeholder="Enter Prize">
				</div>



				<a href="Products.php" class="btn btn-danger"> CANCEL </a>
				<button type="submit" name="add_btn3" class="btn btn-primary"> Add </button>

			</form>

			<?php 

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