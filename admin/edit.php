<?php

    include('connection.php');

    $id = $_GET['id'];
    $role = $_GET['role'];

    if($role == "event"){
        $query = "select * from event where id = $id";
        $result = mysqli_query($conn, $query);
        while($rows = mysqli_fetch_assoc($result)){
            echo "<form class='update_data' method='post'>
            <h3>Update Event - ID: $rows[id]</h3>
            <input type='text' name='name' placeholder='Event Title' value='$rows[name]'>
            <input type='text' name='describe' placeholder='Event Describe' value='$rows[describe]'>
            <input type='date' name='date' placeholder='Event Date' value='$rows[date]'>
            <button name='event-update'>Update</button>
            </form>";
        }
    }else if($role == "promotion"){
        $query = "select * from promotion where id = $id";
        $result = mysqli_query($conn, $query);
        while($rows = mysqli_fetch_assoc($result)){
            echo "<form class='update_data'>
            <h3>Update Event - ID: $rows[id]</h3>
            <input type='text' name='name' placeholder='Promotion Name' value='$rows[name]'>
            <input type='text' name='describe' placeholder='Promotion Offer' value='$rows[offer]'>
            <input type='date' name='date' placeholder='Promotion Expired date' value='$rows[date]'>
            <button name='promotion-update'>Update</button>
            </form>";
        }
    }else{
        $query = "select * from discount where id = $id";
        $result = mysqli_query($conn, $query);
        while($rows = mysqli_fetch_assoc($result)){
            echo "<form class='update_data'>
            <h3>Update Event - ID: $rows[id]</h3>
            <input type='text' name='name' placeholder='Special Discount Name' value='$rows[name]'>
            <input type='text' name='describe' placeholder='Special Discount Offer' value='$rows[offer]'>
            <input type='time' name='date' value='$rows[start_time]'>
            <input type='time' name='date' value='$rows[end_time]'>
            <button name='discount-update'>Update</button>
            </form>";
        }
    }

    if(isset($_POST['event-update'])){
        if(!empty($_POST['name']) && !empty($_POST['describe']) && !empty($_POST['date'])){
            
            $name = $_POST["name"];
            $describe = $_POST["describe"];
            $date = $_POST["date"];

            $query = "UPDATE `event` SET `name`='$name',`describe`='$describe',`date`='$date' WHERE `id` = '$id'";

            $run = mysqli_query($conn, $query);

            if($run){
                echo "  <script>
                            alert('Updated data successfully'); 
                            window.history.go(-1);
                        </script>";
            }else{
                echo "Something goes wrong<br>". $conn->error;
            }
        }else{
            echo "Don't leave any field empty";
        }
    }

?>