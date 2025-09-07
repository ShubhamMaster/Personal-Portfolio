<?php
// Get the ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

switch ($id) {
    case 'CF3A7F2B':
        include 'project/cyber-cafe/CF3A7F2B.php';
        break;
    case 'PC4B8C1D':
        include 'project/pest-alert/PC4B8C1D.php';
        break;
    case 'CF9E5A3F':
        include '#';
        break;
    default:
        include '#'; // Fallback page
        break;
}
?>
