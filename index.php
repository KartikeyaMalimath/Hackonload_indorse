<!DOCTYPE <!DOCTYPE html>
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
    background: #333333;
    background: -webkit-linear-gradient(to right, #dd1818, #333333); 
    background: linear-gradient(to right, #dd1818, #333333); 
}
.label {
    font-size: 50px;
}
.container {
    margin-top: 20px;
    width:100%;
    height: auto;
}
.centerd {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<body>
    
    <?php
        include ('database/db.php');
        if(!$_GET) {
            echo "
            <div class='container'>
            <div class='cardcontain' style='height: 200px;'>
                    <div class='card'>
                        <div class='front'><h4>Welcome to Easy-Transit</br><hr>Enter your Bus Credentials to Login</h4></div>
                        <div class='back'>
                            <form action='functions/login.php'>   
                                Enter Bus Number:</br>
                                <input name='busno' type='number'></br>
                                Enter your password:</br>
                                <input name='password' typ  e='password' ></br>
                                <input name='submit' type='submit'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
        } else {
            $busid = $_GET['busno'];
            echo "
            <div class='container'>
                <div class='busname'>
                    <img src='https://www.w3schools.com/howto/img_avatar.png' alt='Avatar' class='avatar'></br>  
                    <div class='centered'><span class='label'>".$busid."</span></div>
                </div>
                <div class='cardcontain' style='height: 200px;'>
                    <div class='card'>
                        <div class='front'><h4>Ticket Issuing System</br><hr>Click here to Issue Ticket</h4></div>
                        <div class='back'>
                            <form action='functions/login.php'>   
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            ";
        }
    ?>


    <script src="js/user.js"></script>
</body>
</html>