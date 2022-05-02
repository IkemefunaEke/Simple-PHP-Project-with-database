<?php
    $username = 'root';
    $password = '';
    $server = 'localhost';
    $database = 'L11_Eke_52127_School';
?>
<?php
    $conn = new mysqli($server, $username, $password, $database);
    $query = "SELECT * FROM music_IE";
    $rs = $conn->query($query);
    $conn->close();
    $num = $rs->num_rows;
 ?>