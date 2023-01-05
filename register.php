<?php
    include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="nav">
        <p> BLOSSOM</p>
    </div>
    
    <div class="container">
        
            <form action="register.php" method="post">
                <h2>User Register</h2>
                <input class="input-fields" type="text" name="name" placeholder="Enter your name">
                <input class="input-fields" type="text" name="address" placeholder="Enter your address">
                <input class="input-fields" type="email" name="email" placeholder="Enter your email">
                <input class="input-fields" type="password" name="password" placeholder="Enter your password">
                <input class="input-fields" type="password" name="cpassword" placeholder="confirm your password">
                
                <input type="submit" name="submit" value="REGISTER" class="form-btn">
                <p>already have an account? <a href="#">log in now</a> </p>
            </form>
    </div>
    
     
</body>
</html>




<?php
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        

        
        $query = "INSERT INTO users(name,address,email,password,cPassword) VALUES('$name','$address','$email','$password','$cpassword')";

        if(mysqli_query($conn,$query)){
            echo "inserted successfully";
        }


    }


?>


