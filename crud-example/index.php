<?php
/**
 * Created by PhpStorm.
 * User: Ramon
 * Date: 7.02.2015
 * Time: 13:34
 */

require('Components/config.php');
$query = "SELECT * FROM subjects where visible=1 order by position";
$result = mysqli_query($connection, $query);

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
    <ul>
        <?php if($editmode) { ?>
            <li>
                <a href="databases-create.php">Lisa uus</a>
            </li>
        <?php } ?>
        <?php
        while ($subject = mysqli_fetch_assoc($result)) { ?>
            <li>
                <?php echo $subject['menu_name']; ?>
                <?php if($editmode) { ?>
                    <a href="databases-update.php?id=<?php echo $subject['id']; ?>">Muuda</a>
                    <a href="databases-delete.php?id=<?php echo $subject['id']; ?>">Kustuta</a>
                <?php } ?>
            </li>
        <?php }	?>
    </ul>
    </body>
    </html>
<?php mysqli_free_result($result);?>
<?php mysqli_close($connection);?>