$(document).ready(function () {

    // Materialize tab initialization
    $('.tabs').tabs();

    // Materialize tooltip initialization
    $('.cursor-not-allowed span i').tooltip({
        position: 'top',
        enterDelay: 0,
        exitDelay: 0
    });

    // Materialize tooltip initialization
    $('.tab.disabled').tooltip({
        position: 'top',
        enterDelay: 0,
        exitDelay: 0,
        margin: -10
    });

});