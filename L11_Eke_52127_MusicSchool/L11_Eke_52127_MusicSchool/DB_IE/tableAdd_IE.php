<?php
    $entry = TRUE;
    if (isset($_POST['place'],$_POST['surname'],$_POST['noOfDays'],$_POST['noOfPerson'],$_POST['comment'])){
        $place = $_POST['place'];
        $surname= $_POST['surname'];
        $noOfDays = $_POST['noOfDays'];
        $noOfPerson = $_POST['noOfPerson'];
        $comment = $_POST['comment'];
    } else {$entry = False;}
    if ($entry){
        $conn = new mysqli($server, $username, $password, $database);
        $query = "INSERT INTO music_IE (place,surname,noOfDays,noOfPerson,comment)";
        $query .= "VALUES('".$place."','".$surname."','".$noOfDays."','".$noOfPerson."','".$comment."')";
        $conn->query($query);
        $conn->close();
    }
?>