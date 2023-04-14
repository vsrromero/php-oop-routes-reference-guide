<?php  
    // Path to css file
    $styles = dirname(__FILE__, 3) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'style.css';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->e($title)?></title>
    <style>
        <?php include $styles; ?>
    </style>
</head>
<body>
    <!-- $this->section('content') is the instructions for rendering the layout pages -->
    <?= $this->section('content') ?>
</body>
</html>