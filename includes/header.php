<?php
  $path = explode('/',$_SERVER['PHP_SELF']);
  $page=end($path);
?>

<!DOCTYPE html>
<html lang='en'>

<head>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <!-- Echoes title set in every page -->
    <title>
        <?php echo $title;?>
    </title>

    <!-- Custom CSS -->
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/style.css'>

    <!-- Materialize CSS and JavaScript -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>

    <!-- jQuery -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-3.3.1.min.js"><\/script>');
    </script>

    <!-- Custom JavaScript -->
    <script src='js/script.js'></script>
</head>

<body>
    <div id='container'>
        <header>
            <img src='img/santa.png' width='180' height='200' alt='Santa waving'>
            <img src='img/raindeer.png' width='180' height='200' alt='Reindeer waving'>
            <h1>My Grown-up Christmas List</h1>
            <h2>Checkin' it Twice</h2>
        </header>

        <nav>
            <ul>
                <?php if(isset($_SESSION['userid'])):?>
                <li <?php if($page=='index.php' ):?>class='active'
                    <?php endif ?>>
                    <a href='index.php'>Home</a>
                </li>
                <?php endif?>
            </ul>
        </nav>