<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
    <h1>Admin Site for X-Titan E-Comm</h1>
    <div class="button-container">
        <div id="toggle"></div>
        <button id="promotion">Promotion</button>
        <button id="discount">Discount</button>
        <button id="event">Event</button>
    </div>
    <div class="form-container">
        <form action="inserting.php" id="promotion-form" method="post">
            <h3>Promotion Section</h3>
            <label for="">Promotion Name: </label>
            <input type="text" name="name" placeholder="Promotion Name">
            <label for="">Promotion Offer: </label>
            <select name="offer">
                <option value="10%">10%</option>
                <option value="20%">20%</option>
                <option value="30%">30%</option>
                <option value="40%">40%</option>
                <option value="50%">50%</option>
                <option value="60%">60%</option>
                <option value="70%">70%</option>
                <option value="80%">80%</option>
                <option value="90%">90%</option>
            </select>
            <label for="">Promotion Expired Date: </label>
            <input type="date" name="date">
            <button name="submit-promotion">Submit</button>
        </form>
        <form action="inserting.php" id="discount-form" method="post">
            <h3>Discount Section</h3>
            <label for="">Discount Name: </label>
            <input type="text" name="name" placeholder="Discount Name">
            <label for="">Discount Offer: </label>
            <select name="offer">
                <option value="10%">10%</option>
                <option value="20%">20%</option>
                <option value="30%">30%</option>
                <option value="40%">40%</option>
                <option value="50%">50%</option>
                <option value="60%">60%</option>
                <option value="70%">70%</option>
                <option value="80%">80%</option>
                <option value="90%">90%</option>
            </select>
            <label for="">Discount Start Date: </label>
            <input type="time" name="time-start">
            <label for="">Discount Expired Date: </label>
            <input type="time" name="time-expired">
            <button name="submit-discount" id="submit_discount">Submit</button>
        </form>
        <form action="inserting.php" id="event-form" method="post">
            <h3>Event Section</h3>
            <label for="">Event Name: </label>
            <input type="text" name="name" placeholder="Event Title">
            <label for="">Event Offer: </label>
            <input type="text" name="describe" placeholder="Event Describe">
            <label for="">Event Expired Date: </label>
            <input type="date" name="date">
            <button name="submit-event">Submit</button>
        </form>
    </div>
    <div class="show-record">
        <h2>Promotion Record</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product Offer</th>
                    <th>Product Expired Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('connection.php');

                    $query = "select * from promotion";
                    $result = mysqli_query($conn, $query);
                    while($rows = mysqli_fetch_assoc($result)){
                        echo "<tr>
                        <td>$rows[id]</td>
                        <td>$rows[name]</td>
                        <td>$rows[offer]</td>
                        <td>$rows[date]</td>
                        <td><a href='edit.php?id=$rows[id]&role=promotion'><i class='fas fa-edit'></i></a></td>
                        <td><a href='delete.php?id=$rows[id]&role=promotion'><i class='fas fa-trash-alt'></i></a></td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
        <h2>Special Discount Record</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Special Discount Name</th>
                    <th>Special Discount Offer</th>
                    <th>Special Discount Starting Time</th>
                    <th>Special Discount Ending Time</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('connection.php');

                    $query = "select * from discount";
                    $result = mysqli_query($conn, $query);
                    while($rows = mysqli_fetch_assoc($result)){
                        echo "<tr>
                        <td>$rows[id]</td>
                        <td>$rows[name]</td>
                        <td>$rows[offer]</td>
                        <td>$rows[start_time]</td>
                        <td>$rows[end_time]</td>
                        <td><a href='edit.php?id=$rows[id]&role=discount'><i class='fas fa-edit'></i></a></td>
                        <td><a href='delete.php?id=$rows[id]&role=discount'><i class='fas fa-trash-alt'></i></a></td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
        <h2>Event Record</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Event Name</th>
                    <th>Event Describe</th>
                    <th>Event Expired Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody id="event">
                <?php
                    include('connection.php');

                    $query = "select * from event";
                    $result = mysqli_query($conn, $query);
                    while($rows = mysqli_fetch_assoc($result)){
                        echo "<tr>
                        <td>$rows[id]</td>
                        <td>$rows[name]</td>
                        <td>$rows[describe]</td>
                        <td>$rows[date]</td>
                        <td><a href='edit.php?id=$rows[id]&role=event'><i class='fas fa-edit'></i></a></td>
                        <td><a href='delete.php?id=$rows[id]&role=event'><i class='fas fa-trash-alt'></i></a></td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="../js/admin.js"></script>
</body>
</html>