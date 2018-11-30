<?php
    $title = 'Curso'; //set title for this page (echoed in header file)
    require_once 'includes/header.php'; //include header file
?>

<main class='container'>

    <div class='row margin-bot-resizable-course'>
        <div class='col s12 l6'>
            <h1 class='pink-text no-margin-bot'>Actividades del curso</h1>
        </div>
        <div class='col s12 l6 margin-top-resizable-course'>
            <div class='progress pink lighten-4 round-all-corners margin-bot-025'>
                <div class='determinate pink' style='width: 15%'>
                    <span class='progress-amount white-text'>16%&nbsp;completado</span>
                </div>
            </div>
        </div>
    </div>

    <div class='row'>
        <div class='col s12'>
            <div class='card round-all-corners z-depth-2'>
                <div class='card-tabs'>
                    <ul class='tabs tabs-fixed-width round-top-corners'>
                        <li class='tab'><a href='#unit1'>Unidad 1</a></li>
                        <li class='tab'><a href='#unit2'>Unidad 2</a></li>
                        <li class='tab'><a href='#unit3'>Unidad 3</a></li>
                        <li class='tab'><a href='#unit4'>Unidad 4</a></li>
                        <li class='tab disabled'><a href='#unit5'>Unidad 5</a></li>
                    </ul>
                </div>
                <div class='card-content grey lighten-5 round-all-corners'>
                    <div class='row no-margin-bot' id='unit1'>

                        <div class='col s12 m4'>
                            <div class='card round-all-corners'>
                                <div class='card-image waves-effect waves-light'>
                                    <a href='activity.html'><img class='round-top-corners' src='img/user.jpg'></a>
                                </div>
                                <div class='card-content activator cursor-pointer'>
                                    <span class='card-title activator no-margin-bot'>Actividad 1<i class='material-icons right'>keyboard_arrow_up</i></span>
                                </div>
                                <div class='card-reveal'>
                                    <span class='card-title margin-bot-1'>Actividad 1<i class='material-icons right'>keyboard_arrow_down</i></span>
                                    <p>Estado: <strong class='pink-text'>Entregada</strong></p>
                                    <p>Calificación: <strong class='pink-text'>Pendiente</strong></p>
                                    <p class='margin-bot-1'>Insignias conseguidas: <strong class='pink-text'>3</strong></p>
                                    <p>Entregada el: <strong class='pink-text'>17 oct. 17:24</strong></p>
                                    <p class='margin-bot-1'>Límite de entrega: <strong class='pink-text'>18 oct.
                                            23:00</strong></p>
                                    <a class='btn-small pink-small pink white-text width-100' href='activity.html'>Ver</a>
                                </div>
                            </div>
                        </div>

                        <div class='col s12 m4'>
                            <div class='card round-all-corners'>
                                <div class='card-image waves-effect waves-light'>
                                    <a href='activity.html'><img class='round-top-corners' src='img/user.jpg'></a>
                                </div>
                                <div class='card-content activator cursor-pointer'>
                                    <span class='card-title activator no-margin-bot'>Actividad 2<i class='material-icons right'>keyboard_arrow_up</i></span>
                                </div>
                                <div class='card-reveal'>
                                    <span class='card-title margin-bot-1'>Actividad 2<i class='material-icons right'>keyboard_arrow_down</i></span>
                                    <p>Estado: <strong class='pink-text'>Entregada</strong></p>
                                    <p>Calificación: <strong class='pink-text'>Pendiente</strong></p>
                                    <p class='margin-bot-1'>Insignias conseguidas: <strong class='pink-text'>3</strong></p>
                                    <p>Entregada el: <strong class='pink-text'>17 oct. 17:24</strong></p>
                                    <p class='margin-bot-1'>Límite de entrega: <strong class='pink-text'>18 oct.
                                            23:00</strong></p>
                                    <a class='btn-small pink-small pink white-text width-100' href='activity.html'>Ver</a>
                                </div>
                            </div>
                        </div>

                        <div class='col s12 m4'>
                            <div class='card round-all-corners'>
                                <div class='card-image waves-effect waves-light'>
                                    <a href='activity.html'><img class='round-top-corners' src='img/user.jpg'></a>
                                </div>
                                <div class='card-content activator cursor-pointer'>
                                    <span class='card-title activator no-margin-bot'>Actividad 3<i class='material-icons right'>keyboard_arrow_up</i></span>
                                </div>
                                <div class='card-reveal'>
                                    <span class='card-title margin-bot-1'>Actividad 3<i class='material-icons right'>keyboard_arrow_down</i></span>
                                    <p>Estado: <strong class='pink-text'>Entregada</strong></p>
                                    <p>Calificación: <strong class='pink-text'>Pendiente</strong></p>
                                    <p class='margin-bot-1'>Insignias conseguidas: <strong class='pink-text'>3</strong></p>
                                    <p>Entregada el: <strong class='pink-text'>17 oct. 17:24</strong></p>
                                    <p class='margin-bot-1'>Límite de entrega: <strong class='pink-text'>18 oct.
                                            23:00</strong></p>
                                    <a class='btn-small pink-small pink white-text width-100' href='activity.html'>Ver</a>
                                </div>
                            </div>
                        </div>

                        <div class='col s12 m4'>
                            <div class='card round-all-corners'>
                                <div class='card-image waves-effect waves-light'>
                                    <a href='activity.html'><img class='round-top-corners' src='img/user.jpg'></a>
                                </div>
                                <div class='card-content activator cursor-pointer'>
                                    <span class='card-title activator no-margin-bot'>Actividad 4<i class='material-icons right'>keyboard_arrow_up</i></span>
                                </div>
                                <div class='card-reveal'>
                                    <span class='card-title margin-bot-1'>Actividad 4<i class='material-icons right'>keyboard_arrow_down</i></span>
                                    <p>Estado: <strong class='pink-text'>Entregada</strong></p>
                                    <p>Calificación: <strong class='pink-text'>Pendiente</strong></p>
                                    <p class='margin-bot-1'>Insignias conseguidas: <strong class='pink-text'>3</strong></p>
                                    <p>Entregada el: <strong class='pink-text'>17 oct. 17:24</strong></p>
                                    <p class='margin-bot-1'>Límite de entrega: <strong class='pink-text'>18 oct.
                                            23:00</strong></p>
                                    <a class='btn-small pink-small pink white-text width-100' href='activity.html'>Ver</a>
                                </div>
                            </div>
                        </div>

                        <div class='col s12 m4'>
                            <div class='card round-all-corners'>
                                <div class='card-image waves-effect waves-light cursor-not-allowed'>
                                    <img class='round-top-corners locked-image' src='img/user.jpg'>
                                </div>
                                <div class='card-content cursor-not-allowed'>
                                    <span class='card-title no-margin-bot'>Actividad 5<i class='material-icons right tooltipped-lock'
                                            data-tooltip='Termina las actividades anteriores para desbloquear esta actividad'>lock_outline</i></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class='row no-margin-bot' id='unit2'></div>
                    <div class='row no-margin-bot' id='unit3'></div>
                    <div class='row no-margin-bot' id='unit4'></div>
                    <div class='row no-margin-bot' id='unit5'></div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>