<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];

}else{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="project.css">
    
</head>

<body>

<header2></header2>
<header>
    <img src="img/logo.png" width="100px" height="60px">

    <div id="navbar">
        <a href="#" onclick="showSection('home')">Home</a>
        <a href="#" onclick="showSection('events')">Events</a>
        <a href="#" onclick="showSection('payment')">Payment</a>
        <a href="#" onclick="showSection('contact')">Contact Us</a>
    </div>
        <a href="logout.php" class="logout">Logout</a>
</header>

<hr class="separator">

<div id="home" class="section" style="display:none;">
    <div class="card">
        <h2>Welcome to the Home Section</h2>
        <p>This is the home section content.</p>
    </div>
</div>

<div id="events" class="section" style="display:none;">
    <div class="card">
        <h2>Events Section</h2>
        <p>This is the events section content.</p>
    </div>
</div>

<div id="payment" class="section" style="display:none;">
    <div class="card">
        <h1>Online Payment Portal</h1>
        <h3>Type the items you wish to pay for:</h3>
        
        <form>
            <div class="card-info">
                <label for="paymentOptions"><h3>Choose an option:</h3></label>
                <select id="paymentOptions" name="paymentOptions" onchange="showSizeDropdown()">
                    <option value="" disabled selected>Select an option</option>
                    <option value="school_shirt">School Shirt Intramurals - 150php</option>
                    <option value="school_renovation">Upcoming School Renovation - Any amout</option>
                    <option value="speaker">Speaker donation - 100php</option>
                    <option value="pta">PTA tuition fee - 470php</option>
                </select>

                <div class="card-payment" style="display:none;">
                    <label for="shirtSize"><h3>Select Size:</h3></label>
                    <select id="shirtSize" name="shirtSize">
                        <option value="" disabled selected>Select a size</option>
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>

                <div class="information">
                    <label for="firstName" >First Name:</label>
                    <input id= "firstName" type="text" placeholder="First Name">
                    <label for="lastName" >Last Name:</label>
                    <input type="text" placeholder="Last Name">
                    <label for="gradeSection" >Grade and Section:</label>
                    <input type="text" placeholder="Grade and Section">
                </div>
            </div>                
        </form>

    </div>             
</div>

<div id="contact" class="section" style="display:none;">
    <div class="card">
        <h2>Contact Us Section</h2>
        <p>This is the contact us section content.</p>
    </div>
</div>



    </div>
</div>
<script src="project.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    showSection('home');});
</script>


</body>
</html>