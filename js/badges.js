$(document).ready(function () {

    // Materialize tooltip initialization
    $('.tooltipped').tooltip({
        position: 'top',
        enterDelay: 0,
        exitDelay: 0,
        margin: 125
    });

    // Materialize modal initialization
    $('.modal').modal({
        startingTop: '15%',
        endingTop: '15%'
    });
    
});