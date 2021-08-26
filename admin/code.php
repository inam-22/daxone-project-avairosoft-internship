<?php 
include('security.php');






// ----------------------------------------------------------------------------------------------------------




if(isset($_POST['g_updatebtn']))
{
    $id = $_POST['g_edit_id'];
    $edit_G_Product_Photo = $_POST['edit_G_Product_Photo'];
    $edit_G_Name = $_POST['edit_G_Name'];
    $edit_G_Color = $_POST['edit_G_Color'];
    $edit_G_Quantity = $_POST['edit_G_Quantity'];
    $edit_G_Prize = $_POST['edit_G_Prize'];



    $query = "UPDATE general_products SET G_Product_Photo='$edit_G_Product_Photo', G_Name='$edit_G_Name' , G_Color='$edit_G_Color', G_Quantity='$edit_G_Quantity', G_Prize='$edit_G_Prize' WHERE G_ProductID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Product Profile is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: Products.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Product Profile is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: products.php');  
    }
}


if(isset($_POST['g_delete_btn']))
{
    $id = $_POST['g_delete_id'];

    $query = "DELETE FROM general_products WHERE G_ProductID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Product Profile is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: Products.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Product Profile is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: Products.php'); 
    }    
}




// ----------------------------------------------------------------------------------------------------------




if(isset($_POST['f_updatebtn']))
{
    $id = $_POST['f_edit_id'];
    $edit_F_Product_Photo = $_POST['edit_F_Product_Photo'];
    $edit_F_Name = $_POST['edit_F_Name'];
    $edit_F_Color = $_POST['edit_F_Color'];
    $edit_F_Quantity = $_POST['edit_F_Quantity'];
    $edit_F_Prize = $_POST['edit_F_Prize'];



    $query = "UPDATE featured_products SET F_Product_Photo='$edit_F_Product_Photo', F_Name='$edit_F_Name' , F_Color='$edit_F_Color', F_Quantity='$edit_F_Quantity', F_Prize='$edit_F_Prize' WHERE F_ProductID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['f_status'] = "Your Product Profile is Updated";
        $_SESSION['f_status_code'] = "success";
        header('Location: Products.php'); 
    }
    else
    {
        $_SESSION['f_status'] = "Your Product Profile is NOT Updated";
        $_SESSION['f_status_code'] = "error";
        header('Location: products.php');  
    }
}


if(isset($_POST['f_delete_btn']))
{
    $id = $_POST['f_delete_id'];

    $query = "DELETE FROM featured_products WHERE F_ProductID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['f_status'] = "Your Product Profile is Deleted";
        $_SESSION['f_status_code'] = "success";
        header('Location: Products.php'); 
    }
    else
    {
        $_SESSION['f_status'] = "Your Product Profile is NOT DELETED";       
        $_SESSION['f_status_code'] = "error";
        header('Location: Products.php'); 
    }    
}




// ----------------------------------------------------------------------------------------------------------





if(isset($_POST['b_updatebtn']))
{
    $id = $_POST['b_edit_id'];
    $edit_B_Product_Photo = $_POST['edit_B_Product_Photo'];
    $edit_B_Name = $_POST['edit_B_Name'];
    $edit_B_Color = $_POST['edit_B_Color'];
    $edit_B_Quantity = $_POST['edit_B_Quantity'];
    $edit_B_Prize = $_POST['edit_B_Prize'];



    $query = "UPDATE best_products SET B_Product_Photo='$edit_B_Product_Photo', B_Name='$edit_B_Name' , B_Color='$edit_B_Color', B_Quantity='$edit_B_Quantity', B_Prize='$edit_B_Prize' WHERE B_ProductID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['b_status'] = "Your Product Profile is Updated";
        $_SESSION['b_status_code'] = "success";
        header('Location: Products.php'); 
    }
    else
    {
        $_SESSION['b_status'] = "Your Product Profile is NOT Updated";
        $_SESSION['b_status_code'] = "error";
        header('Location: products.php');  
    }
}


if(isset($_POST['b_delete_btn']))
{
    $id = $_POST['b_delete_id'];

    $query = "DELETE FROM best_products WHERE B_ProductID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['b_status'] = "Your Product Profile is Deleted";
        $_SESSION['b_status_code'] = "success";
        header('Location: Products.php'); 
    }
    else
    {
        $_SESSION['b_status'] = "Your Product Profile is NOT DELETED";       
        $_SESSION['b_status_code'] = "error";
        header('Location: Products.php'); 
    }    
}





// ----------------------------------------------------------------------------------------------------------




if(isset($_POST['add_btn']))
{

   // $add_G_Product_Photo = $_POST['add_G_Product_Photo'];
    $add_G_Name = $_POST['add_G_Name'];
    $add_G_Color = $_POST['add_G_Color'];
    $add_G_Quantity = $_POST['add_G_Quantity'];
    $add_G_Prize = $_POST['add_G_Prize'];


    $target_dir = "Products/General/";
    $target_file = $target_dir . basename($_FILES["add_G_Product_Photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["add_G_Product_Photo"]["tmp_name"]);
    if($check !== false) {
   # echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        $ImageName = $_FILES['add_G_Product_Photo']['name'];
        $fileElementName = 'add_G_Product_Photo';
        $path = 'Products/General/'; 
        $location = $path . $_FILES['add_G_Product_Photo']['name']; echo $location;

        move_uploaded_file($_FILES['add_G_Product_Photo']['tmp_name'], $location); 
    } else {
   # echo "File is not an image.";
        $uploadOk = 0;
    }


    $query = "INSERT INTO general_products (G_Product_Photo,G_Name,G_Color,G_Quantity,G_Prize) VALUES 
    ('$location','$add_G_Name','$add_G_Color','$add_G_Quantity','$add_G_Prize')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Product Profile is Added";
        $_SESSION['status_code'] = "success";
        header('Location: Products.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Product Profile is NOT Added";
        $_SESSION['status_code'] = "error";
        header('Location: products.php');  
    }
}

// ----------------------------------------------------------------------------------------------------------



if(isset($_POST['add_btn2']))
{

    //$add_F_Product_Photo = $_POST['add_F_Product_Photo'];
    $add_F_Name = $_POST['add_F_Name'];
    $add_F_Color = $_POST['add_F_Color'];
    $add_F_Quantity = $_POST['add_F_Quantity'];
    $add_F_Prize = $_POST['add_F_Prize'];


    $target_dir = "Products/Featured/";
    $target_file = $target_dir . basename($_FILES["add_F_Product_Photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["add_F_Product_Photo"]["tmp_name"]);
    if($check !== false) {
   # echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        $ImageName = $_FILES['add_F_Product_Photo']['name'];
        $fileElementName = 'add_F_Product_Photo';
        $path = 'Products/Featured/'; 
        $location = $path . $_FILES['add_F_Product_Photo']['name']; echo $location;

        move_uploaded_file($_FILES['add_F_Product_Photo']['tmp_name'], $location); 
    } else {
   # echo "File is not an image.";
        $uploadOk = 0;
    }

    $query = "INSERT INTO featured_products (F_Product_Photo,F_Name,F_Color,F_Quantity,F_Prize) VALUES 
    ('$location','$add_F_Name','$add_F_Color','$add_F_Quantity','$add_F_Prize')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['f_status'] = "Your Product Profile is Added";
        $_SESSION['f_status_code'] = "success";
        header('Location: Products.php'); 
    }
    else
    {
        $_SESSION['f_status'] = "Your Product Profile is NOT Added";
        $_SESSION['f_status_code'] = "error";
        header('Location: products.php');  
    }
}



// ----------------------------------------------------------------------------------------------------------



if(isset($_POST['add_btn3']))
{

   // $add_B_Product_Photo = $_POST['add_B_Product_Photo'];
    $add_B_Name = $_POST['add_B_Name'];
    $add_B_Color = $_POST['add_B_Color'];
    $add_B_Quantity = $_POST['add_B_Quantity'];
    $add_B_Prize = $_POST['add_B_Prize'];


    $target_dir = "Products/Best/";
    $target_file = $target_dir . basename($_FILES["add_B_Product_Photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["add_B_Product_Photo"]["tmp_name"]);
    if($check !== false) {
   # echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        $ImageName = $_FILES['add_B_Product_Photo']['name'];
        $fileElementName = 'add_B_Product_Photo';
        $path = 'Products/Best/'; 
        $location = $path . $_FILES['add_B_Product_Photo']['name']; echo $location;

        move_uploaded_file($_FILES['add_B_Product_Photo']['tmp_name'], $location); 
    } else {
   # echo "File is not an image.";
        $uploadOk = 0;
    }

    $query = "INSERT INTO best_products (B_Product_Photo,B_Name,B_Color,B_Quantity,B_Prize) VALUES 
    ('$location','$add_B_Name','$add_B_Color','$add_B_Quantity','$add_B_Prize')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['b_status'] = "Your Product Profile is Added";
        $_SESSION['b_status_code'] = "success";
        header('Location: Products.php'); 
    }
    else
    {
        $_SESSION['b_status'] = "Your Product Profile is NOT Added";
        $_SESSION['b_status_code'] = "error";
        header('Location: products.php');  
    }
}



// ----------------------------------------------------------------------------------------------------------




// ----------------------------------------------------------------------------------------------------------





?>