<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../common_IE/headPart_IE.php'; ?>
        <?php include '../DB_IE/db_IE.php'; ?>
        <?php include '../DB_IE/tableAdd_IE.php';?>
        <?php include '../DB_IE/ifDelete_IE.php';?>
        <?php include '../DB_IE/doDelete_IE.php';?>
        <?php include '../DB_IE/update_IE.php';?>
        <?php include '../DB_IE/tableSee_IE.php';?>
    </head>
    <body>
        <header>
            <?php include '../common_IE/headerPart_IE.php';?>
        </header>
        <article>
            <?php include '../articles_IE/articleStart_IE.php';?>
        </article>

        <h2> These are the current Music Classes </h2>
        <table>
            <tr>
                <th>place</th>
                <th>surname</th>
                <th>noOfDays</th>
                <th>noOfPerson</th>
                <th>comment</th>
            </tr>
            <?php
                $i = 0;
                while ($i < $num) {
                    $rs ->data_seek($i);
                    $row = $rs->fetch_assoc();
                    echo "<tr>";
                    echo "<td>".$row["place"]."</td>";
                    echo "<td>".$row["surname"]."</td>";
                    echo "<td>".$row["noOfDays"]."</td>";
                    echo "<td>".$row["noOfPerson"]."</td>";
                    echo "<td>".$row["comment"]."</td>";
                    echo "</tr>";
                    $i++;
                }
            ?>
        </table>
        <footer>
            <?php include '../common_IE/nav_IE.php';?>
            <?php include '../common_IE/footerPart_IE.php';?>
        </footer>
    </body>
</html>