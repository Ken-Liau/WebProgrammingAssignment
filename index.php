<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X Titan E-Commerce</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
    <?php
        error_reporting(0);
        ini_set('display_errors', 0);

        include('partial/header.php');

        $link = $_GET['link'];
        if($link == "anouncement"){
            include_once('partial/anouncement.php');
        }else if($link == "about"){
            
        }else if($link == "contact"){
            
        }else{
            include_once('partial/home.php');
        }

        include_once('partial/footer.php');
    ?>
    <script src="js/script.js"></script>
</body>
</html>