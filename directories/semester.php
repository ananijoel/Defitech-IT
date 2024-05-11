<?php
require '../functions/about_the_semester.php';
require '../functions/time_table.php';
require '../functions/get_path_to.php';
require '../data/informations.php';
require '../data/timetable.php';
$paths = $_GET['target'];
$path = get_directory_items($paths);
$title = get_folder_title($paths);

?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/container.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/extensions.css">
    <title><?= $title?$title: ''?> </title>
</head>
<html lang="fr">
    <body>
    <?php require '../elements/header.php'; ?>
   <div class="container">
       <?php show_folder_content($path,'');?>
   </div>
    <?php require '../elements/footer.php'; ?>
    </body>
</html>