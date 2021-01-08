<?php

    session_start();

    $error = "";

    if(isset($_POST['login']))
    {
        $email = $_POST['uemail'] ;
        $pass = $_POST['upassword'] ;
        
        // DB connection
        $conn = mysqli_connect('localhost','root','','mydb') ;
        
        if(!$conn){
            die("Not Connected" . mysqli_error($conn)) ;
        }
        
        $query = "SELECT * FROM user WHERE useremail='$email' AND password='$pass' " ;
        
        $query_check = mysqli_query($conn,$query) ;
        
        $count = mysqli_num_rows($query_check);
        
        if($count > 0)
        {
            $row = mysqli_fetch_assoc($query_check);
                
            $_SESSION['ROLE'] = $row['role'];
            
            $_SESSION['is_loggedin'] = 'yes';
            
            if($row['role'] == 1 )
            {
                // ADMIN 
                echo"<script>
                        location.assign('home.php');
                    </script>" ;
            }
            if($row['role'] == 0 )
            {
                // USER
                echo"<script>
                        location.assign('home.php');
                    </script>" ;
            }
        }
        else
        {
            // email & pass check
            $error = "Please enter correct login details" ;
        }
        
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!--JQUERY FILE-->

    <!--Theme CSS FILE-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="box"> <!--container==box-->
   
            <h1>LOGIN FORM</h1>

            <form action="login.php" method="post">
                
                <b>USER EMAIL</b><br>
                <input class="inputclass" type="text" name="uemail" id="uemail" placeholder="Enter Your Email" required><br>

                <b>PASSWORD</b><br>
                <input class="inputclass" type="password" name="upassword" id="upassword" placeholder="Enter Password" required><br>

                <input type="submit" value="Login" name="login" id="login"><br>
                
                 <?php echo $error ?> <br>
                
                Not registered? <a href="signup.php">Create an account.</a>
                
            </form>

        
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
