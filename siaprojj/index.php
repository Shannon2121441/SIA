<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>TRIQUETRA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Geologica&family=Quicksand:wght@500&family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
</head>
<body>
<div id="container">
    <div id="header">
    TOMORROW x TOGETHER
    </div>
    <div id="wrapper">
            <div id="menu">
                <a href="index.php">Home</a> | 
                <a href="index.php?page=spotify">Spotify</a> | 
                <a href="index.php?page=giphy">Gif</a> | 
                <a href="index.php?page=news">News</a>
            </div>
    </div>
    <div id="content-wrapper">
    <?php
        switch($page){
            case 'spotify':
                require_once 'spotify/index.php';
            break;
            case 'giphy':
                require_once 'giphy/index.php';
            break;
            case 'news':
                require_once 'news/index.php';
            break;
            default:
                require_once 'about/index.php';
            break;
        }
    ?>
    </div>
    
</body>
</html>
