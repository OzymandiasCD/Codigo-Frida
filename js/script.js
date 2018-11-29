$(document).ready(function () {
    $('.tabs').tabs();
    $('.modal').modal({
        startingTop: '4%',
        endingTop: '20%'
    });
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown({
        hover: true,
        coverTrigger: false
    });
    $('.tooltipped-lock').tooltip({
        position: 'top'
    });
    $('.tooltipped-badge-page').tooltip({
        position: 'top',
        margin: 105,
        enterDelay: 0,
        exitDelay: 0
    });
    $('.tooltipped-activity-badge').tooltip({
        position: 'top',
        margin: 50,
        enterDelay: 0,
        exitDelay: 0
    });
});