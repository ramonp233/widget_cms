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
if (isset($_POST['submit'])) {
$menu_name = $_POST['menu_name'];
$position = $_POST['position'];
$visible = $_POST['visible'];

$query = "INSERT INTO subjects (menu_name, position, visible)
            VALUES ('{$menu_name}', {$position}, {$visible})";
$result = mysqli_query($connection, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Document</title>
      <style>
          .form-field {
              margin-top: 25px;
          }
          .form-label {
              display: block;
          }
      </style>
  </head>
<body>
    <pre>
      <?php print_r($_POST);?>
    </pre>
    <a href="databases-read.php">Vaata tabelit</a>
    <?php
        if (isset($_POST['submit'])){
            if ($result) {
                echo "Õnnestus";
            } else {
                echo "Ebaõnnestus";
            }
        }
    ?>
        <form action="databases-create.php" method="post">
              <div class="form-field">
                    <label for="menu_name" class="form-label">Pealkiri</label>
                    <input id="menu_name" name="menu_name">
              </div>
              <div class="form-field">
                    <label for="position" class="form-label">Positsioon</label>
                    <select id="position" name="position">
                          <?php for($i = 1; $i < 16; $i++){ ?>
                                <option value="<?php echo $i;?>"><?php echo $i; ?></option>
                          <?php } ?>
                    </select>
              </div>
              <div class="form-field">
                    <label for="visible" class="form-label">Nähtavus</label>
                    <select id="visible" name="visible">
                            <option value="1">Nähtav</option>
                            <option value="0">Peidetud</option>
                    </select>
              </div>
              <div class="form-field">
                    <input name="submit" type="submit">
              </div>
    </form>
</body>
</html>
<?php mysqli_close($connection);?>
