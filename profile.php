<?php
    $title = 'Mi perfil'; //set title for this page (echoed in header file)
    require_once 'includes/header.php'; //include header file
?>

<main class='container'>
    <div class='row'>
        <div class='col s12'>
            <h1 class='pink-text no-margin-bot'>Mi perfil</h1>
        </div>
    </div>
    <div class='row'>
        <div class='col s12 m7 no-padding-sides'>
            <div class='card-panel grey lighten-5 round-all-corners'>
                <h5 class='card-title'>Datos</h5>
                <div class='row no-margin-bot'>
                    <div class='col s12 l6 input-field'>
                        <input type='text' id='names' value='Jorge Miguel'>
                        <label for='names'>Nombre(s)</label>
                    </div>
                    <div class='col s12 l6 input-field'>
                        <input type='text' id='last_name' value='De Jesús Ceballos'>
                        <label for='last_name'>Apellidos</label>
                    </div>
                </div>
                <div class='row no-margin-bot'>
                    <div class='col s12 l4 input-field'>
                        <input type='text' id='age' value='18 años' disabled>
                        <label for='age'>Edad</label>
                    </div>
                    <div class='col s12 l8 input-field'>
                        <input type='email' id='email' value='jor.cebs@gmail.com' disabled>
                        <label class='' for='email'>Correo electrónico</label>
                        <a class='pink-text left small-font modal-trigger' href='#email-modal'>Por favor
                            verifica tu
                            correo electrónico</a>
                    </div>
                </div>
                <div class='row no-margin-bot'>
                    <div class='col s12 input-field'>
                        <input type='text' id='team' value='Las chicas superpoderosas' disabled>
                        <label for='team'>Equipo</label>
                    </div>
                </div>
                <div class='row no-margin-bot'>
                    <div class='col s12 input-field'>
                        <textarea class='materialize-textarea' id='bio'>Hola mi nombre es Jorge y lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sed voluptatibus doloribus maxime velit ex sint rerum dignissimos adipisci iusto voluptate ipsam cum, porro repudiandae unde sunt eaque sequi architecto.</textarea>
                        <label for='bio'>Bio</label>
                    </div>
                </div>
            </div>
        </div>
        <div class='col s12 m5 padding-left-resizable-profile no-padding-right'>
            <div class='card round-all-corners'>
                <div class='card-image'>
                    <img class='round-all-corners cursor-copy' src='img/user.jpg'>
                    <a class='btn-floating btn-large halfway-fab waves-effect waves-light pink cursor-copy'><i class='material-icons'>photo_camera</i></a>
                </div>
            </div>
            <a class='btn pink white-text padding-top-03 margin-bot-075 width-100'>Cambiar contraseña</a>
            <a class='btn pink white-text padding-top-03 width-100'>Guardar cambios</a>
        </div>
    </div>

    <div class='row'>
        <div class='card-panel grey lighten-5 center-align no-margin-top round-all-corners'>
            <h5 class='card-title'>Insignias</h5>
            <div class='profile-badge-card' id='badges'>
                <img class='small-badge' src='img/badge-submit-1.png'>
                <img class='small-badge' src='img/badge-early-1.png'>
                <img class='small-badge' src='img/badge-submit-2.png'>
                <img class='small-badge' src='img/badge-good-1.png'>
                <img class='small-badge' src='img/badge-good-2.png'>
                <img class='small-badge' src='img/badge-early-2.png'>
                <img class='small-badge' src='img/badge-excelent-1.png'>
                <img class='small-badge' src='img/badge-excelent-2.png'>
                <img class='small-badge' src='img/badge-submit-1.png'>
                <img class='small-badge' src='img/badge-submit-2.png'>
                <img class='small-badge' src='img/badge-good-1.png'>
                <img class='small-badge' src='img/badge-early-1.png'>
                <img class='small-badge' src='img/badge-early-2.png'>
                <img class='small-badge' src='img/badge-good-2.png'>
                <img class='small-badge' src='img/badge-excelent-2.png'>
                <img class='small-badge' src='img/badge-excelent-1.png'>
                <img class='small-badge' src='img/badge-finish.png'>
            </div>
        </div>
    </div>


    <div id='email-modal' class='modal round-all-corners'>
        <div class='modal-content no-padding-bot'>
            <h4>Verifica tu correo electrónico</h4>
            <p>Hemos mandado instrucciones para verificar tu correo a la cuenta «correo@del.usuario». Por favor
                revisa tus bandejas de entrada y spam. ¡Recuerda que no podrás ser asignada a un equipo ni podrás
                ver las actividades del curso hasta que verifiques tu correo electrónico!</p>
        </div>
        <div class='modal-footer'>
            <a href='' class='modal-close waves-effect waves-green btn-flat'>Cerrar</a>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>