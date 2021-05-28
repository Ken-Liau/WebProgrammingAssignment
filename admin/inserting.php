<?php

    include("connection.php");

    if(isset($_POST['submit-promotion'])){
        if(!empty($_POST['name']) && !empty($_POST['date'])){
            $name = $_POST["name"];
            $offer = $_POST["offer"];
            $date = $_POST["date"];

            $query = "insert into promotion (id, name, offer, date) values (0, '$name', '$offer', '$date')";
            $run = mysqli_query($conn, $query);
            if($run){
                echo "<script>
                            alert('Inserted data successfully'); 
                            window.history.go(-1);
                        </script>";
            }else{
                echo "Something goes wrong";
            }
        }else{
            echo "Don't leave any field empty";
        }
    }
    if(isset($_POST['submit-discount'])){
        if(!empty($_POST['name']) && !empty($_POST['time-start']) && !empty($_POST['time-expired'])){
            $name = $_POST["name"];
            $offer = $_POST["offer"];
            $time_start = $_POST["time-start"];
            $time_end = $_POST["time-expired"];

            $query = "insert into discount (id, name, offer, start_time, end_time) values (0, '$name', '$offer', '$time_start', '$time_end')";
            $run = mysqli_query($conn, $query);
            if($run){
                echo "  <script>
                            alert('Inserted data successfully'); 
                            window.history.go(-1);
                        </script>";
            }else{
                echo "Something goes wrong";
            }
        }else{
            echo "Don't leave any field empty";
        }
    }
    if(isset($_POST['submit-event'])){
        if(!empty($_POST['name']) && !empty($_POST['describe']) && !empty($_POST['date'])){
            
            $name = $_POST["name"];
            $describe = $_POST["describe"];
            $date = $_POST["date"];

            $query = "INSERT INTO `event`(`id`, `name`, `describe`, `date`) VALUES (0, '$name', '$describe', '$date')";
            $run = mysqli_query($conn, $query);
            if($run){
                echo "<script>
                            alert('Inserted data successfully'); 
                            window.history.go(-1);
                        </script>";
            }else{
                echo "Something goes wrong". $conn->error;
            }
        }else{
            echo "Don't leave any field empty";
        }
    }

?>