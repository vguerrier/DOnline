<!DOCTYPE html>
    <html>
        <head>
                <title>Dashboard Online</title>
                <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
                <meta charset="UTF-8">
                <link rel="stylesheet" href="css/style.css">
                <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrapt/4.1.3/css/bottstrap.min.css">-->
                
        </head>
        <body>
            <?php
            //require_once dirname(_DIR_) . DIRECTORY_SEPARATOR . 'functions/auth.php';
            //require_once dirname(_DIR_) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'auth.php';
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions/auth.php';
             if (est_connecte()): ?>
                <ul>
                    <li><a href="/logout.php" class="nav-link"> Log out</a></li>
                </ul>

            <?php endif ?>
                
        
