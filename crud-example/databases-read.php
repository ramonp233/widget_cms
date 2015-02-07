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

$query = "SELECT * FROM subjects";
$result = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title></title>
  </head>
<body>
    <a href="databases-create.php">Lisa</a>
  	<ul>
	<?php while ($subject = mysqli_fetch_assoc($result)) { ?>
        <li>
            <?php echo $subject['menu_name']; ?>
            <a href="databases-update.php?id=<?php echo $subject['id']; ?>">Muuda</a>
            <a href="databases-delete.php?id=<?php echo $subject['id']; ?>">Kustuta</a>
        </li>
    <?php }	?>
   	</ul>
</body>
</html>
<?php mysqli_close($connection);?>
