<?php
    if(isset($_SESSION['ROLE']) && $_SESSION['ROLE'] != '1')
    {
        echo"<script>
                location.assign('home.php');
            </script>" ;
    }
?>

<?php    
    // DB connection
    $conn = mysqli_connect('localhost','root','','mydb') ;
        
    if(!$conn){
        die("Not Connected" . mysqli_error($conn)) ;
    }
        
    $query = "SELECT * FROM alljobs " ;
        
    $query_check = mysqli_query($conn,$query) ;

    $count = mysqli_num_rows($query_check) ;

    if($count > 0)
    {
        
?>

<!doctype html>
<html lang="en">

<head>
    <title>Account Information</title>

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
                        <li class="nav-item active">
                            <a class="nav-link" href="#about"><i class="fa fa-address-card"></i> About Us <span class="sr-only">(current)</span></a>
                        </li>
            
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="logout.php"><i class="fas fa-power-off"></i> Logout <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </header>

    <!--Section/Middle Body-->
    <section>
        <div class="container">
            <table class="table  table-info">
                <thead class="thread-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Patients Info</th>
                         <th>Amount</th>
                        <th>Update/Delete</th>
                    </tr>
                </thead>

<?php
        while( $row = mysqli_fetch_assoc($query_check) )
        {
            $id = $row['id'];
            $title = $row['title'];
            $description = $row['description'];
            $price = $row['price'];
            
            
?>
                <tbody>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $title ?></td>
                        <td><?php echo $description ?></td>
                        <td><?php echo $price ?></td>
                        
                        <td><a href="update2.php?edit_id=<?php echo  $id ?>">Update</a> || <a onclick="return confirm('Are you sure?')" href="delete2.php".php?id=<?php echo  $id?> & $usertitle=<?php echo $title ?> ">Delete</a> </td>
                    </tr>
                </tbody>
                
<?php
        }
?>
             
            </table>

        </div>
    </section>
    
<
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
     <footer>
<p class="p-1 bg-dark text-white text-center">CareGiver Management System</p>        
</footer>
        
</body>

</html>

<?php
    }
    else
    {
        // error message
        echo "You Don't Have Any Data In Your Database" ;
    }

    
         
    
?>

                
   