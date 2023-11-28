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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Geologica&family=Quicksand:wght@500&family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
</head>
<body>
<div id="container">
    <div id="header">
      TRIQUETRA
    </div>
    <div id="wrapper">
            <div id="menu">
                <a href="index.php">Home</a> | 
                <a href="index.php?page=search">Search</a> | 
                <a href="logout.php" class="move-right">Log In<b> |</b></a>
            </div>
    </div>
    <div id="content-wrapper">
            <div id="spotify">
                Spotify API here
            </div>
            <div id="content">
                Instagram API here
            </div>
    </div>
</div>
</body>
</html>
