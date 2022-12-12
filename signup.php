

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CV BUILDER</title>
</head>
<body> 
<?php
    require('connection.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `signup` (username, password, email, create_datetime)
        VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    

    <form class="frm" action="" method="post">
        <h1 class="login-title">Welcome! please sign up</h1>
    <table>
    <th>Sign up</th>
        <tr> <td>Username: </td>
              <td> <input type="text" name="username" required></td>   
        </tr>
        <tr>
            <td>Password: </td>
              <td> <input type="text" name="password" required></td> 
              </tr>
             
              <tr>
            <td>Email: </td>
              <td> <input type="text" name="email" required></td> 
              </tr>
              <tr>
              <td> <button type="submit"  class= "btn2">Sign up</button> </td> 
            </tr>
            <tr>
              <td> <p class="link"><a href="login.php">Click to Login</a></p> </td> 
            </tr>  
          
    </form> 
    <?php
    }
?>
   

</body>
</html>