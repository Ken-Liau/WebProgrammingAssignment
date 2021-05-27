<?php
 
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
        echo
        '<div class="content-container">
            <div class="content-title">
                <h4>Promotions</h4>
                <form class="content-title-div" method="post">
                    <button type="submit" name="promotion">See More</button>
                </form>
            </div>
            <div class="content-con-div">
                <div class="content-con">
                    <img src="img/sales.jpg" alt="" srcset="">
                    <div class="content-detail">
                        <p>Product Name</p>
                        <p>30% Off</p>
                    </div>
                    <div class="content-expired">
                        Expired Date: 11/22/2020
                    </div>
                </div>
                <div class="content-con">
                    <img src="img/sales.jpg" alt="" srcset="">
                    <div class="content-detail">
                        <p>Product Name</p>
                        <p>30% Off</p>
                    </div>
                    <div class="content-expired">
                        Expired Date: 11/22/2020
                    </div>
                </div>
                <div class="content-con">
                    <img src="img/sales.jpg" alt="" srcset="">
                    <div class="content-detail">
                        <p>Product Name</p>
                        <p>30% Off</p>
                    </div>
                    <div class="content-expired">
                        Expired Date: 11/22/2020
                    </div>
                </div>
                <div class="content-con">
                    <img src="img/sales.jpg" alt="" srcset="">
                    <div class="content-detail">
                        <p>Product Name</p>
                        <p>30% Off</p>
                    </div>
                    <div class="content-expired">
                        Expired Date: 11/22/2020
                    </div>
                </div>
            </div>
            <div class="content-title">
                <h4>Special Discount</h4>
                <form class="content-title-div" method="post">
                    <button type="submit" name="discount">See More</button>
                </form>
            </div>
            <div class="content-con-div">
                <div class="content-con">
                    <img src="img/special-discount.jpg" alt="" srcset="">
                    <div class="content-detail">
                        <p>Product Name</p>
                        <p>30% Off</p>
                    </div>
                    <div class="content-expired">
                        5:00PM to 7:00PM
                    </div>
                </div>
            </div>
            <div class="content-title">
                <h4>New Events</h4>
                <form class="content-title-div" method="post">
                    <button type="submit" name="event">See More</button>
                </form>
            </div>
            <div class="content-con-div">
                <div class="content-con">
                    <img src="img/events.jpg" alt="" srcset="">
                    <div class="content-detail-event">
                        <h4>Title</h4>
                        <p>sdfds d sdffs sd sdds sdsdf ds sd sd fs  dsffdaf df faf dss afs fsa</p>
                    </div>
                    <div class="content-expired">
                        Expired Date: 11/22/2020
                    </div>
                </div>
            </div>
        </div>';
    }
    function checkElement($element){
        switch($element){
            case "promotion":
                echo 
                '<div class="content-container">
                    <h2 class="element-title">Promotion</h2>
                    <div class="content-con-div">
                        <div class="content-con">
                            <img src="img/sales.jpg" alt="" srcset="">
                            <div class="content-detail">
                                <p>Product Name</p>
                                <p>30% Off</p>
                            </div>
                            <div class="content-expired">
                                Expired Date: 11/22/2020
                            </div>
                        </div>
                    </div>
                </div>';
                break;
            case "discount":
                echo 
                '<div class="content-container">
                    <h2 class="element-title">Special Discount</h2>
                    <div class="content-con-div">
                        <div class="content-con">
                            <img src="img/special-discount.jpg" alt="" srcset="">
                            <div class="content-detail">
                                <p>Product Name</p>
                                <p>30% Off</p>
                            </div>
                            <div class="content-expired">
                                5:00PM to 7:00PM
                            </div>
                        </div>
                    </div>
                </div>';
                break;
            case "event":
                echo 
                '<div class="content-container">
                    <h2 class="element-title">Happening Events</h2>
                    <div class="content-con-div">
                        <div class="content-con">
                            <img src="img/events.jpg" alt="" srcset="">
                            <div class="content-detail-event">
                                <h4>Title</h4>
                                <p>sdfds d sdffs sd sdds sdsdf ds sd sd fs  dsffdaf df faf dss afs fsa</p>
                            </div>
                            <div class="content-expired">
                                Expired Date: 11/22/2020
                            </div>
                        </div>
                    </div>
                </div>';
                break;
        }
    }
?>