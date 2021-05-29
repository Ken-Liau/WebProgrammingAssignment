<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X Titan - Admin</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <form class="login-container" method="post">
        <h3>Admin Login</h3>
        <input type="text" name="username" placeholder="Enter username">
        <input type="password" name="password" placeholder="Enter password">
        <button name="submit">Submit</button>
    </form>
    <?php
    
        if(isset($_POST['submit'])){
            if(!empty($_POST['username']) || !empty($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                if($username == "admin" && $password == "admin"){
                    header("Location: admin.php");
                }else{
                    if($username != "admin"){
                        echo "  <script>
                            alert('Incorrect username'); 
                        </script>";
                    }else{
                        if($password != "admin"){
                            echo "  <script>
                                alert('Incorrect password'); 
                            </script>";
                        }
                    }
                }
            }else{
                echo "  <script>
                            alert('Please fill in all the fields'); 
                        </script>";
            }
        }
    
    ?>
</body>
</html>