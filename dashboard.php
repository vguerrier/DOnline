<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
<link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
<link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
<link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/lib/themify-icons.css" rel="stylesheet">
<link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
<link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">

<link href="assets/css/lib/helper.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<title>Dashboard Online</title>

</head>

    <body>
            

            


<?php 
    include('elements/menu.php');

    require_once 'functions/auth.php';
    forcer_utilisateur_connecte();
    //require_once 'elements/header.php';
    ?>


            
<?php        
    include('functions/connect.php');
?>

<?php   require_once 'elements/footer.php'; ?>