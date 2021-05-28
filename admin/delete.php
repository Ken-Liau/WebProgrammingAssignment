<?php

    $id = $_GET['id'];
    $role = $_GET['role'];

    include('connection.php');

    $query = "delete from `$role` where id = '$id'";
    $run = mysqli_query($conn, $query);
    if($run){
        echo "  <script>
                    alert('Successfully deleted data'); 
                    window.history.go(-1);
                </script>";
    }else{
        echo 'Something goes wrong<br>'. $conn->error;
    }

?>