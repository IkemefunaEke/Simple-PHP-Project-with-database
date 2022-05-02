<?php
    $i=0;
    while ($i< $num) {
        $rs->data_seek($i);
        $row = $rs->fetch_assoc();
        $option = "<option value=".$row["id"].">";
        $option .= $row["place"].' - ';
        $option .= $row["surname"].' - ';
        $option .= $row["noOfDays"].' - ';
        $option .= $row["noOfPerson"].' - ';
        $option .= $row["comment"];
        $option .= "</option>";
        echo $option;
        $i++;
    }
?>