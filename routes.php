<?php
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        require 'controllers/create.php';
        break;
    case 'read':
        require 'controllers/read.php';
        break;
    case 'update':
        require 'controllers/update.php';
        break;
    case 'delete':
        require 'controllers/delete.php';
        break;
    default:
        require 'controllers/index.php';
        break;
}
?>