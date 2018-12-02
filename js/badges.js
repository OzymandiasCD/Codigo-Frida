$(document).ready(function () {

    // Materialize tooltip initialization
    $('.tooltipped').tooltip({
        position: 'top',
        margin: 125,
        enterDelay: 0,
        exitDelay: 0
    });

    // Materialize modal initialization
    $('.modal').modal({
        startingTop: '15%',
        endingTop: '15%'
    });

});