<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../common_IE/headPart_IE.php';?>
    </head>
    <body>
        <header>
            <?php include '../common_IE/headerPart_IE.php';?>
        </header>
        <article>
            <?php include '../articles_IE/articleStart_IE.php';?>
        <article>
        <form action="see_IE.php" method="POST">
            <table>
            <tr><td></td><td>Enter</td></tr>
            <tr><td>place</td><td><input type="text" name="place"></td></tr>
            <tr><td>surname</td><td><input type="text" name="surname"></td></tr>
            <tr><td>days</td><td>
                <select name="noOfDays">
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    <option value=9>9</option>
                    <option value=10>10</option>
                </select>
            </td></tr>
            <tr><td>persons</td><td>
                <select name="noOfPerson">
                <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    <option value=9>9</option>
                    <option value=10>10</option>
                </select>
            </td></tr>          
            <tr><td>comment</td><td><input type="text" name="comment"></td></tr>
            <tr><td></td><td><input type="submit" value="Bool Lesson"></td></tr>
            </table>
        </form>
        <footer>
            <?php include '../common_IE/nav_IE.php';?>
            <?php include '../common_IE/footerPart_IE.php';?>
        </footer>
    </body>
</html>