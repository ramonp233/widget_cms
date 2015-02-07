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

$query = "SELECT * FROM pages where subject_id = 2;";
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
                 while ($row = mysqli_fetch_assoc($result)) {
                     ?>

                <article class="page">
                  <header class="page-header">
                    <h1 class="page-title">
                        <?php
                            echo $row['menu_name'];
                        ?>
                    </h1>
                  </header>
                  <div class="page-body">
                      <?php
                        echo $row['content'];
                      ?>
                   </div>
                </article>


             <?php
                }
            ?>
</body>
</html>

<?php

mysqli_free_result($result);
mysqli_close($connection);

?>