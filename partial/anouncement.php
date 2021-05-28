<?php
    include('connection.php');

    if(isset($_POST["promotion"])){
        checkElement("promotion");
    }else if(isset($_POST["discount"])){
        checkElement("discount");
    }else if(isset($_POST["event"])){
        checkElement("event");
    }else{
        display();
    }
    function display(){
        include('connection.php');
        echo
        '<div class="content-container">
            <div class="content-title">
                <h4>Promotions</h4>
                <form class="content-title-div" method="post">
                    <button type="submit" name="promotion">See More</button>
                </form>
            </div>
            <div class="content-con-div">';
                $query = "select * from promotion LIMIT 4"; 
                $result = mysqli_query($conn, $query);
                while($rows = mysqli_fetch_assoc($result)){
                    echo "<div class='content-con'>
                            <img src='img/sales.jpg'>
                            <div class='content-detail'>
                                <p>$rows[name]</p>
                                <p>$rows[offer] Off</p>
                            </div>
                            <div class='content-expired'>
                                Expired Date: $rows[date]
                            </div>
                        </div>";
                }
            echo '</div>
            <div class="content-title">
                <h4>Special Discount</h4>
                <form class="content-title-div" method="post">
                    <button type="submit" name="discount">See More</button>
                </form>
            </div>
            <div class="content-con-div">';
                $query = "select * from discount LIMIT 4"; 
                $result = mysqli_query($conn, $query);
                while($rows = mysqli_fetch_assoc($result)){
                    echo "<div class='content-con'>
                            <img src='img/special-discount.jpg'>
                            <div class='content-detail'>
                                <p>$rows[name]</p>
                                <p>$rows[offer] Off</p>
                            </div>
                            <div class='content-expired'>
                                $rows[start_time] to $rows[end_time]
                            </div>
                        </div>";
                }
            echo'</div>
            <div class="content-title">
                <h4>New Events</h4>
                <form class="content-title-div" method="post">
                    <button type="submit" name="event">See More</button>
                </form>
            </div>
            <div class="content-con-div">';
                $query = "select * from event LIMIT 4"; 
                $result = mysqli_query($conn, $query);
                while($rows = mysqli_fetch_assoc($result)){
                    echo "<div class='content-con'>
                    <img src='img/events.jpg'>
                    <div class='content-detail-event'>
                        <h4>$rows[name]</h4>
                        <p>$rows[describe]</p>
                    </div>
                    <div class='content-expired'>
                        Expired Date: $rows[date]
                    </div>
                </div>";
                }
            echo'</div>
        </div>';
    }
    function checkElement($element){
        include('connection.php');
        switch($element){
            case "promotion":
                echo 
                '<div class="content-container">
                    <h2 class="element-title">Promotion</h2>
                    <div class="content-con-div">';
                    $query = "select * from promotion"; 
                    $result = mysqli_query($conn, $query);
                    while($rows = mysqli_fetch_assoc($result)){
                        echo "<div class='content-con'>
                                <img src='img/sales.jpg'>
                                <div class='content-detail'>
                                    <p>$rows[name]</p>
                                    <p>$rows[offer] Off</p>
                                </div>
                                <div class='content-expired'>
                                    Expired Date: $rows[date]
                                </div>
                            </div>";
                    }
                echo '</div>
                </div>';
                break;
            case "discount":
                echo 
                '<div class="content-container">
                    <h2 class="element-title">Special Discount</h2>
                    <div class="content-con-div">';
                    $query = "select * from discount"; 
                    $result = mysqli_query($conn, $query);
                    while($rows = mysqli_fetch_assoc($result)){
                        echo "<div class='content-con'>
                                <img src='img/special-discount.jpg'>
                                <div class='content-detail'>
                                    <p>$rows[name]</p>
                                    <p>$rows[offer] Off</p>
                                </div>
                                <div class='content-expired'>
                                    $rows[start_time] to $rows[end_time]
                                </div>
                            </div>";
                    }
                echo '</div>
                </div>';
                break;
            case "event":
                echo 
                '<div class="content-container">
                    <h2 class="element-title">Happening Events</h2>
                    <div class="content-con-div">';
                    $query = "select * from event"; 
                    $result = mysqli_query($conn, $query);
                    while($rows = mysqli_fetch_assoc($result)){
                        echo "<div class='content-con'>
                                <img src='img/events.jpg'>
                                <div class='content-detail-event'>
                                    <h4>$rows[name]</h4>
                                    <p>$rows[describe]</p>
                                </div>
                                <div class='content-expired'>
                                    Expired Date: $rows[date]
                                </div>
                            </div>";
                    }
                echo '</div>
                </div>';
                break;
        }
    }
?>