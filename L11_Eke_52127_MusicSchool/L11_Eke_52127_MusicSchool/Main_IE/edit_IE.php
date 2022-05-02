<!DOCTYPE html>
<html>
    <head>
        <?php include '../common_IE/headPart_IE.php'; ?>
        <?php include '../DB_IE/db_IE.php'; ?>
        <?php include '../DB_IE/tableSee_IE.php'; ?>
    </head>
    <body>
        <header>
            <?php include '../common_IE/headerPart_IE.php'; ?>
        </header>
        <article>Delete</article>
        <form action="see_IE.php" method="POST">
            <select name="update">
                <?php include '../DB_IE/delete_IE.php'; ?>
            </select>
            <input type="text" name="comment">
            <input type="submit" value="Edit-Release Track">
        <form>
        <footer>
            <?php include '../common_IE/nav_IE.php'; ?>
            <?php include '../common_IE/footerPart_IE.php'; ?>
        </footer>
    </body>
</html>