<?php

include ('database/db.php');

$busID = 123;
$startID = $_POST['start'];
$routeID = $_POST['route'];
$traveller = $_POST['traveller'];
/* $startID = 1;
$routeID = 3;
$traveller = 55; */

$sql = "SELECT * from bus where busid = '$busID'";
$result = $con->query($sql);
if (!$result) {
    trigger_error('Invalid query: '.$con->error);
}
while($row =$result->fetch_assoc()) {
    $maxsit = $row['sittingcap'];
    $maxstand = $row['standingcap'];
    echo $maxsit." ";
    echo $maxstand." ";
}

$sql2 = "SELECT * from routes where busid = '$busID' AND routeid = '$startID'";
$result2 = $con->query($sql2);
if (!$result2) {
    trigger_error('Invalid query: '.$con->error);
}
while($row =$result2->fetch_assoc()) {
    $cursit = $row['sitting'];
    $curstand = $row['standing'];
    echo $cursit." ";
    echo $curstand." ";
}

$counter  = $routeID - 1;

while ($counter != 0) {
    if($cursit < $maxsit) {
        if(($cursit + $traveller) <= $maxsit) {
            $update = "UPDATE routes SET sitting = sitting + '$traveller' where busid = '$busID' AND routeid = '$counter'";
            if ($con->query($update) === TRUE) {
                echo "Seats updated successfully";
                /*header("Location: ");*/
            }
        } else {
            $standstate = ($cursit + $traveller) - $maxsit;
            $sitstate = $traveller - $standstate;
            $update = "UPDATE routes SET sitting = sitting + '$sitstate', standing = standing + '$standstate' where busid = '$busID' AND routeid = '$counter'";
            if ($con->query($update) === TRUE) {
                echo "sitting Standing updated successfully";
                /*header("Location: ");*/
            }
        }       
    } else {
        $update = "UPDATE routes SET sitting = sitting + '$sitstate', standing = standing + '$standstate' where busid = '$busID' AND routeid = '$counter'";
        if ($con->query($update) === TRUE) {
            echo "Standing updated successfully";
            /*header("Location: ");*/
        }       
    }
    $counter--;
}



?>