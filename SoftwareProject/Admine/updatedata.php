<?php 
        // DB connection
        $conn = mysqli_connect('localhost','root','','mydb') ;
        
        if(!$conn){
            die("Not Connected" . mysqli_error($conn)) ;
        }

        if(isset($_REQUEST['update']))
        {
            $updatename = $_REQUEST['uname'];
            $updateemail = $_REQUEST['uemail'];
            $updatephone = $_REQUEST['phone'];
            $updatepassword = $_REQUEST['password'];
            $updatepic = $_REQUEST['upload_img'];
            
            $updateid = $_REQUEST['update_hidden_id'];
            
            $update_query =" UPDATE user SET profile_pic='$updatepic' , username='$updatename' , useremail='$updateemail' , phone='$updatephone' , password='$updatepassword' WHERE user_id='$updateid'  ";
            
            $run_update_query = mysqli_query($conn,$update_query);
            
            if($run_update_query)
            {
               header("location: loginfo.php?UPDATED") ;
            }
        }
?>
        
        
