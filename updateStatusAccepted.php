<?php 
/*update violation status in the database*/
	$status_id = $_POST['status_id'];


    $host = "localhost";
	$username = "id12681546_doapplication";
	$password = "password1";
	$dbname="id12681546_doapplication";
	$con = mysqli_connect($host,$username,$password,$dbname);

    try{
        $sql = "UPDATE `violation` SET `status_id` = 1 WHERE id = $status_id";

        mysqli_query($con,$sql);

        header("Location: v2daily.php");
    }
    catch(Exception $e){
        echo'<script>alert("ERROR: Report unsuccesful")</script>';
    }
    

    
    
  
    mysqli_close($con);
?>