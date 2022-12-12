


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

    <div class="frm">
    <h1>welcome please login!</h1>  
    <form name="f1" action = "savesignin.php" onsubmit = "return validation()" method = "POST">  
            
              
    <table>
    <th> Login</th>
        <tr> <td>Username: </td>
              <td> <input type="text" name="username" required></td>   
        </tr>
            <td>Password: </td>
              <td> <input type="text" name="password" required></td> 
              </tr>
              <tr>
              <td> <button type="submit" class= "btn2" >Login</button> </td> 
            </tr>  
            <tr> 
            <td>Not yet a member? <a href="signup.php">Sign up</a> </td>
    </form> 
</div>

</body>
</html>