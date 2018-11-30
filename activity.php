<?php
    $title = 'Actividad 1'; //set title for this page (echoed in header file)
    require_once 'includes/header.php'; //include header file
?>

<main class='container'>
    <div class='row margin-bot-resizable-activity'>
        <div class='col s12 l8'>
            <h1 class='pink-text no-margin-bot'>Unidad 1 - Actividad 1. Problemáticas y objetivos del desarrollo
                sostenible</h1>
            <h6 class='grey-text text-darken-3'>Límite de entrega: 18 oct. 23:00</h6>
        </div>
        <div class='col s12 l4 margin-top-resizable-3-1'>
            <div class='row'>
                <div class='col s2'>
                    <a class='btn-small pink white-text width-100 no-padding'><i class='material-icons'>keyboard_arrow_left</i></a>
                </div>
                <div class='col s8 no-padding'>
                    <a class='dropdown-trigger btn-small pink white-text width-100 no-padding' data-target='activity-dropdown'>Actividad
                        1</a>
                </div>
                <div class='col s2'>
                    <a class='btn-small pink white-text width-100 no-padding'><i class='material-icons'>keyboard_arrow_right</i></a>
                </div>
            </div>
        </div>
    </div>

    <ul class='dropdown-content' id='activity-dropdown'>
        <li><a class='pink white-text center-align'>ACTIVIDAD 2</a></li>
        <li><a class='pink white-text center-align'>ACTIVIDAD 3</a></li>
        <li><a class='pink white-text center-align'>ACTIVIDAD 4</a></li>
        <li><a class='pink white-text center-align'>ACTIVIDAD 5</a></li>
    </ul>

    <div class='row'>
        <div class='col s12 l8'>
            <div class='card no-margin-top round-all-corners'>
                <div class='card-image responsive-iframe-container'>
                    <iframe src='https://docs.google.com/presentation/d/e/2PACX-1vRpaU7pWFHrAulkVUFHz07JcMUEmGAx1n5MIidM5y_GLjSkc9JRMULGbNOHgNpnlRB1p-A788LaqEHc/embed?start=false&loop=false&delayms=3000'
                        frameborder='0' allowfullscreen='true' mozallowfullscreen='true' webkitallowfullscreen='true'></iframe>
                </div>
                <div class='card-content grey lighten-5 padding-bot-025'>

                    <div id='comments'>
                        <div class='input-field'>
                            <img class='prefix comment-image circle' src='img/user.jpg'>
                            <p class='comment-text'>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, nobis iste
                                quidem voluptatibus doloribus sequi dolorum repellat.
                            </p>
                        </div>

                        <div class='input-field'>
                            <img class='prefix comment-image circle' src='img/user.jpg'>
                            <p class='comment-text'>
                                Nesciunt reiciendis unde quos illum distinctio in corporis facilis
                                consequuntur. Quae, consequatur commodi? Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Debitis, nobis iste
                                quidem voluptatibus doloribus sequi dolorum repellat!
                            </p>
                        </div>
                    </div>

                    <form>
                        <div class='row'>
                            <div class='col s9 m10'>
                                <div class='input-field'>
                                    <img class='prefix comment-image circle' src='img/user.jpg'>
                                    <input class='validate' placeholder='Añade un comentario sobre esta actividad...'>
                                </div>
                            </div>
                            <div class='col s3 m2'>
                                <button class='pink btn-small comment-btn width-100 no-padding'>Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class='col s12 l4'>
            <div class='card-panel grey lighten-5 center-align no-margin-top round-all-corners'>
                <h5 class='card-title'>Insignias disponibles</h5>
                <div id='badges'>
                    <a class='tooltipped-activity-badge' data-tooltip='Entrega la actividad a tiempo'>
                        <img class='small-badge' src='img/badge-submit-1.png'>
                    </a>
                    <a class='tooltipped-activity-badge' data-tooltip='Entrega la actividad al menos 24 horas antes de la fecha límite'>
                        <img class='small-badge' src='img/badge-early-1.png'>
                    </a>
                    <a class='tooltipped-activity-badge' data-tooltip='Recibe una evaluación buena en tu entrega'>
                        <img class='small-badge' src='img/badge-good-1.png'>
                    </a>
                    <a class='tooltipped-activity-badge' data-tooltip='Recibe una evaluación excelente en tu entrega'>
                        <img class='small-badge' src='img/badge-excelent-1.png'>
                    </a>
                </div>
            </div>

            <div class='card-panel grey lighten-5 round-all-corners'>
                <span class='black-text'>
                    <h5 class='card-title center-align'>Tu trabajo</h5>
                    <ul class='collection'>
                        <li class='collection-item'>
                            <div><a href='' class='black-text'>presentación.pdf</a>
                                <a href='' class='secondary-content'><i class='material-icons black-text'>clear</i></a>
                                <a href='' class='secondary-content'><i class='material-icons black-text'>file_download</i></a>
                            </div>
                        </li>
                        <li class='collection-item'>
                            <div><a href='' class='black-text'>layout.php</a>
                                <a href='' class='right'><i class='material-icons black-text'>clear</i></a>
                                <a href='' class='right'><i class='material-icons black-text'>file_download</i></a>
                            </div>
                        </li>
                        <li class='collection-item'>
                            <div><a href='' class='black-text'>estilo.css</a>
                                <a href='' class='right'><i class='material-icons black-text'>clear</i></a>
                                <a href='' class='right'><i class='material-icons black-text'>file_download</i></a>
                            </div>
                        </li>
                    </ul>
                </span>
            </div>

            <form action=''>
                <div class='file-field input-field'>
                    <div class='btn width-100 pink white-text'>
                        <span>Añadir archivos</span>
                        <input type='file' multiple>
                    </div>
                    <div class='file-path-wrapper'>
                        <input class='file-path validate hide' type='text'>
                    </div>
                </div>
            </form>
            <a class='btn width-100 pink white-text padding-top-03 margin-bot-1'>Entregar actividad</a>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>