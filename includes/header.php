<?php
  $path = explode('/',$_SERVER['PHP_SELF']);
  $page=end($path);
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='shortcut icon' href='img/icon.png' type='image/x-icon'>
    <link rel='stylesheet' href='css/style.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Quicksand:400,500,700'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
    <script src='js/script.js'></script>
</head>

<body>

    <nav class='pink darken-1'>
        <div class='nav-wrapper container'>
            <a class='brand-logo' href='course.html'><img src='img/logo-white.png'></a>
            <a class='sidenav-trigger' data-target='sidenav'><i class='white-text material-icons'>menu</i></a>
            <ul class='right hide-on-med-and-down'>
                <li><a class='white-text' href='course.html'>Curso</a></li>
                <li><a class='white-text' href='badges.html'>Mis insignias</a></li>
                <li><a class='white-text' href='team.html'>Mi equipo</a></li>
                <li><a class='white-text' href='mentors.html'>Mentores</a></li>
                <li><a class='white-text' href='fridas.html'>Fridas</a></li>
                <li><a class='white-text dropdown-trigger valign-wrapper' href='profile.html' data-target='profile-dropdown'>
                        Jorge Ceballos
                        <img class='circle user-nav right' src='img/user.jpg'>
                    </a></li>
            </ul>
        </div>
    </nav>

    <ul class='dropdown-content' id='profile-dropdown'>
        <li class='pink darken-1'><a class='white-text' href='profile.html'>Mi perfil</a></li>
        <li class='pink darken-1'><a class='white-text' href='index.html'>Cerrar sesión</a></li>
    </ul>

    <ul class='sidenav' id='sidenav'>
        <li>
            <div class='user-view'>
                <div class='background'>
                    <img src='img/sidenav-background.jpg'>
                </div>
                <a href='profile.html'>
                    <img class='circle user-sidenav' src='img/user.jpg'>
                    <span class='white-text name'>Jorge Ceballos</span>
                    <span class='white-text email'>jor.cebs@gmail.com</span>
                </a>
            </div>
        </li>
        <li><a class='black-text' href='course.html'><i class='material-icons'>widgets</i>Curso</a></li>
        <li><a class='black-text' href='badges.html'><i class='material-icons'>grade</i>Mis insignias</a></li>
        <li>
            <div class='divider'></div>
        </li>
        <li><a class='black-text' href='team.html'><i class='material-icons'>group</i>Mi equipo</a></li>
        <li><a class='black-text' href='mentors.html'><i class='material-icons'>local_cafe</i>Mentores</a></li>
        <li><a class='black-text' href='fridas.html'><i class='material-icons'>favorite</i>Fridas</a></li>
        <li>
            <div class='divider'></div>
        </li>
        <li><a class='black-text' href='index.html'><i class='material-icons'>exit_to_app</i>Cerrar sesión</a></li>
    </ul>

    <main class='container'>