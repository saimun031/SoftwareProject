
<html lang="en">

<head>
    <title>Home</title>

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
    <!--Header Section-->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-light ">
                <a class="navbar-brand logo" href="#">CareGiver System Managment</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav ml-auto menu">
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                        </li>
                  
                        <!--PHP ADMIN ROLE CONDITION START-->
                        <!--<?php if($_SESSION['ROLE'] == 1 ) { ?>-->

                        <!--<?php } ?>-->
                        
                        <!--PHP ADMIN ROLE CONDITION END-->
                        
         
                        <li class="nav-item active">
                            <a class="nav-link" href="logout.php"><i class="fas fa-power-off"></i> Logout <span class="sr-only">(current)</span></a>
                        </li> 
                    </ul>
                </div>
            </nav>

        </div>
    </header>
   
    <!--Footer Section-->
    
    <footer>
<p class="p-3 bg-dark text-white text-center">CareGiver Management System</p>        
</footer>
        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

    <?php 
        // DB connection
        $conn = mysqli_connect('localhost','root','','mydb') ;
        
        if(!$conn){
            die("Not Connected" . mysqli_error($conn)) ;
        }

        if(isset($_REQUEST['edit_id']))
        {
            $rcv_id = $_REQUEST['edit_id'] ;
            
            $get_info = "SELECT * FROM users WHERE  id = $rcv_id " ;
            
            $run_get_info = mysqli_query($conn,$get_info);
            
            $count = mysqli_num_rows($run_get_info);
            
            while( $row = mysqli_fetch_assoc( $run_get_info ) )
            {
                
?>
             <form action="updatedata1.php" method="post">
   
                <b>USERNAME</b><br>
                <input class="inputclass" type="text" value="<?php echo $row['username'] ?>" name="username" id="username" autocomplete="off"><br>


                <b>PASSWORD</b><br>
                <input class="inputclass" value="<?php echo $row['password'] ?>" type="password" name="password" id="password" autocomplete="off"><br><br>
                
                
                <input class="btn btn-primary" type="submit" value="Update Data" name="update1" id="update1"><br>
                
                <input type="hidden" name="update_hidden_id" value="<?php echo $rcv_id ?>" >
                
            </form>

            
            
<?php
            }
        }

?>
        
    
</html>




