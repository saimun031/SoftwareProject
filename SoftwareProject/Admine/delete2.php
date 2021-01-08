<?php 
        // DB connection
        $conn = mysqli_connect('localhost','root','','mydb') ;
        
        if(!$conn){
            die("Not Connected" . mysqli_error($conn)) ;
        }


        $receive = $_REQUEST['id'];

    
        
        $delete_query = "DELETE FROM alljobs WHERE id = $receive " ;
        
        

        $run_delete_query = mysqli_query($conn,$delete_query) ;
        
        if($run_delete_query)
        {
        
            header("location: userjob.php?DELETED") ;
        }
    
?>
