<?php
    $edit = TRUE;
    if (isset($_POST['update'],$_POST['comment'])){
        $id = $_POST['update'];
        $comment = $_POST['comment'];
    } else {$edit = False;}
    if ($edit){
        $conn = new mysqli($server, $username, $password, $database);
        $query = "UPDATE music_IE SET comment='".$comment."' WHERE id='".$id."'";;
        $conn->query($query);
        $conn->close();
    }
?>