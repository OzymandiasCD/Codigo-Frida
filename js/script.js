$(document).ready(function () {
    $('.tabs').tabs();
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown({
        hover: true,
        coverTrigger: false
    });
    $('.tooltipped').tooltip({
        margin: 50,
        inDuration: 0,
        outDuration: 0,
        enterDelay: 0,
        exitDelay: 0
    });
});