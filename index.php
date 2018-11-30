<?php
    $title = 'Código Frida'; //set title for this page (echoed in header file)
    require_once 'includes/header.php'; //include header file
?>

<main>
    <div class='pink index-row center-align'>
        <img src='img/logo-white.png'>
        <h5 class='white-text'>Código Frida</h5>
    </div>

    <div class='index-card round-all-corners white center-align'>
        <h1 class='pink-text no-margin-top margin-bot-025'>¡Hola de nuevo!</h1>
        <h5 class='grey-text text-darken-1 no-margin'>Nos alegra volver a verte</h5>

        <form action='course.php' class='margin-top-2'>
            <div class='input-field'>
                <input id='email' type='email'>
                <label for='email'>Correo electrónico</label>
            </div>
            <div class='input-field no-margin-bot'>
                <input id='password' type='password'>
                <label for='password'>Contraseña</label>
            </div>
            <a class='pink-text left margin-bot-2 small-font' href=''>¿Olvidaste tu contraseña?</a>
            <button class='pink btn width-100' type='submit'>Ingresar</button>
        </form>

        <p class='grey-text text-darken-1 left small-font'>¿No tienes una cuenta? <a class='pink-text' href=''>¡Regístrate!</a></p>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>