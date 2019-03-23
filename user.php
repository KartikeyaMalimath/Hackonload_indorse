<!DOCTYPE html>

<!--= =================================
    Author : KARTIKEYA P MALIMATH
=================================== -->

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Easy-Transit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/user.css">

    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

</head>
<style>
body {
    background: #0f0c29;
    background-image: -webkit-linear-gradient(to left, #24243e, #302b63, #0f0c29);
    background-image: linear-gradient(to left, #24243e, #302b63, #0f0c29); 
    padding-bottom: 50px;
}
</style>


<body>
    <div class="container">
        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">  
        <!-- CARD1 -->
        <div class="cardcontain">
            <div class="card">
                <div class="front"><h4>Welcome to Easy-Transit</br><hr>Enter your current location and bus number</h4></div>
                <div class="back">
                    <form action="functions/userreq.php">
                        Enter Bus Number:</br>
                        <input name="busno" type="number"></br>
                        Enter your bus stop:</br>
                        <input name="source" type="Text" ></br>
                        <input name="submit" type="submit">
                    </form>
                </div>
            </div>
        </div>
        <!-- card2 -->
        <?php

        include ('database/db.php');

        if($_GET) {
            $busID = $_GET['bus'];
            $closesit = $_GET['sit'];
            $closestand = $_GET['stand'];
            $start = $_GET['start']; 

            $sql = "SELECT * from bus where busid = '$busID'";
            $result = $con->query($sql);
            while($row =$result->fetch_assoc()) {
                $maxsit = $row['sittingcap'];
                $maxstand = $row['standingcap'];
            }

            $sql = "SELECT * from routes where busid = '$busID'";
            $result = $con->query($sql);
            while($row =$result->fetch_assoc()) {
                $maxsit = $row['sittingcap'];
                $maxstand = $row['standingcap'];
            }

            $availsit = $maxsit - $closesit;
            $availstand = $maxstand - $closestand;
            echo "
                <div class='cardcontain'>
                <div class='card2'>
                    <div class='front'>
                        <h4>Bus Number : ".$busID." opted stop : ".$start."</br>
                        <hr>Available Seatings : ".$availsit."</br>
                        <hr>Available Standing : ".$availstand."</br>
                        <hr>Bus will arrive at : </h4>
                    </div>
                    <div class='back'>
                        
                    </div>
                </div>
            ";
          }
        ?>


</div>
    <script  src="js/user.js"></script>
</body>
</html>