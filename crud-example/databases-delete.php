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
$id = $_GET['id'];

$query = "DELETE FROM subjects where id= {$id}";
$result = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .notice {
            color:green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
  	<?php if ($result && mysqli_affected_rows($connection)) { ?>
        <p class="notice"><?php echo "Rida kustutatud"; ?></p>
   	<?php } else { ?>
        <p class="error"><?php echo "Sellist rida andmebaasis ei ole"; ?></p>
   	<?php } ?>
</body>
</html>
<?php mysqli_close($connection);?>
