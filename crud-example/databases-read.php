<?php
/**
 * Created by PhpStorm.
 * User: Ramon
 * Date: 7.02.2015
 * Time: 11:49
 */

$dbhost = "localhost";
$dbuser = "widget_cms";
$dbpass = "password1";
$dbname = "widget_corp";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").");
}

$query = "SELECT * FROM pages;";
$result = mysqli_query($connection, $query);




?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
            <?php
                 while ($subject = mysqli_fetch_assoc($result)) {
                     ?>
                        <ul>
                            <?php
                                echo "<li>";
                                echo $subject['menu_name'];
                                echo "</li>";
                            ?>
                        </ul>
             <?php
                }
            ?>
</body>
</html>

<?php

mysqli_free_result($result);
mysqli_close($connection);

?>