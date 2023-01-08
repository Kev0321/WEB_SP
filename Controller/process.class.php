<?php
require_once("..\Model\MyDatabase.class.php");

$myDB = new MyDatabase();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$day = $_POST['day'];

if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($day)) {

    $res = $myDB->insertIntoTable($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['day']);

} else {
    echo "ERROR: Nebyly přijaty požadované atributy uživatele.";
    echo "<br><br>";
}
