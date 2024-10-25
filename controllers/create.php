<?php
require '../models/Item.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $item = new Item();
    $item->create($name, $description);
    header('Location: index.php');
}

require '../views/create.php';
?>