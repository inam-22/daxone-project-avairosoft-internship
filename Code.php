<?php 
include('security.php');
if(isset($_POST['Reg_btn']))
{
	//echo "Working";


    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
  

	$query = "INSERT INTO register (Username,Password,Email) VALUES 
  ('$Username','$Password','$Email')";
     $query_run = mysqli_query($connection, $query);
     header('Location: login-register.html');
	}
	
	
if(isset($_POST['login_btn']))
{
  //echo "Working";


    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
   
  
$query = "SELECT * FROM register";
                $query_run = mysqli_query($connection, $query);
      if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
              if($row['Username'] === $Username && $row['Password'] === $Password)
              {
               
                $query2 = "INSERT INTO login (Username,Password) VALUES 
  ('$Username','$Password')";
     $query_run2 = mysqli_query($connection, $query2);
     header('Location: login-register.html');
   }

    }
      }

        header('Location: login-register.html');
     

  
  }
  


if(isset($_POST['message_btn']))
{
  //echo "Working";


    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
  

  $query = "INSERT INTO contact (Name,Email,Subject,Message) VALUES ('$Name','$Email','$Subject','$Message')";
     $query_run = mysqli_query($connection, $query);

     echo "Your message has been sent";
  }
    ?>