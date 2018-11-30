<?php
    $title = 'Mis insignias'; //set title for this page (echoed in header file)
    require_once 'includes/header.php'; //include header file
?>

<main class='container'>

    <div class='row'>
        <div class='col s12'>
            <h1 class='pink-text no-margin-bot'>Mis insignias</h1>
        </div>
    </div>

    <div class='row'>
        <div class='col s12'>
            <div class='card round-all-corners z-depth-2'>
                <div class='card-tabs'>
                    <ul class='tabs tabs-fixed-width round-top-corners'>
                        <li class='tab'><a href='#all-badges'>Todas</a></li>
                        <li class='tab'><a href='#time-badges'>Tiempo</a></li>
                        <li class='tab'><a href='#submission-badges'>Evaluación</a></li>
                    </ul>
                </div>
                <div class='card-content grey lighten-5 round-all-corners center-align'>
                    <div class='no-margin-bot' id='all-badges'>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-submit-1.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-submit-2.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-early-1.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-early-2.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-good-1.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-good-2.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-excelent-1.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-excelent-2.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-finish.png'>
                        </a>
                    </div>
                    <div class='row no-margin-bot' id='time-badges'>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-submit-1.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-submit-2.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-early-1.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-early-2.png'>
                        </a>
                    </div>
                    <div class='row no-margin-bot' id='submission-badges'>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-good-1.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-good-2.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-excelent-1.png'>
                        </a>
                        <a class='tooltipped-badge-page modal-trigger' href='#badge-modal' data-tooltip='Entrega la actividad a tiempo'>
                            <img class='big-badge' src='img/badge-excelent-2.png'>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id='badge-modal' class='modal round-all-corners'>
        <div class='modal-content no-padding-bot'>
            <h4>Insignia de resultado excelente</h4>
            <div class='row'>
                <div class='col s12 m6 center-align'>
                    <img class='huge-badge' src='img/badge-excelent-1-large.png'>
                </div>
                <div class='col s12 m6'>
                    <p>Adquirida el 15 de abril de 2018, como muestra de tu lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class='modal-footer'>
            <a href='' class='modal-close waves-effect waves-green btn-flat'>Cerrar</a>
        </div>
    </div>

</main>

<?php require_once 'includes/footer.php'; ?>