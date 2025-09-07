<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Live-Demo - Shubham Dighe</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        iframe {
            width: 100%;
            height: 100vh;
            border: none;
        }
    </style>
</head>

<body>

<?php
// Get the ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

$iframeSrc = '#'; // Default value

switch ($id) {
    case 'CF3A7F2B':
        $iframeSrc = 'project/cyber-cafe/htdocs/';
        break;
    case 'PC4B8C1D':
        $iframeSrc = 'project/pest-alert/htdocs/';
        break;
    case 'PY9E5A3F':
        $iframeSrc = '#';
        break;
}

echo '<iframe src="' . htmlspecialchars($iframeSrc, ENT_QUOTES, 'UTF-8') . '"></iframe>';
?>

</body>
</html>
