
<?php
  include('server.php');

   if(isset($_POST['submit'])) // checks if form is submitted
  {
   $username =$_POST["txtUsername"];
   $password =$_POST["txtPass"];
   $cpassword =$_POST["txtCpass"];
   $email =$_POST["txtEmail"];

    // use mysqli_real_escape_string for $username, $email, $password to escape special characters 

    $sql =$query = "INSERT INTO `$signup` (`txtUsername`, `txtPass`,`txtCpass`,`txtEmail`) VALUES ('$username', '$password', '$cpassword','$email')";
   $result = mysqli_query($connection, $sql);

   if($result)
   {
     echo "successfully inserted";
   }
  else
   {
    echo "failed";
   }

 }
?>