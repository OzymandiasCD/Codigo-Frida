$(document).ready(function () {

    // Materialize Javascript elements
    $('.tabs').tabs();
    $('.sidenav').sidenav();
    $('select').formSelect();
    $('.datepicker').datepicker();
    $('.collapsible').collapsible();
    $('.modal').modal({
        startingTop: '4%',
        endingTop: '17%'
    });
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

    $('.hide-on-load').hide();

});

// Logs to user account and redirects to course.html
function login() {
    window.open('course.html', '_self');
}

// Registers the user and redirects to course.html
function register() {
    window.open('index.html', '_self');
}

function showBasicRegistrationForm() {
    $('#login-form').hide();
    $('#mentor-verification-form').hide();
    $('#frida-registration-form').hide();
    $('#basic-registration-form').show();
}

function showLoginForm() {
    $('#basic-registration-form').hide();
    $('#login-form').show();
}

function showFollowRegistrationForm() {
    $('#basic-registration-form').hide();
    $('#mentor-registration-form').hide();
    if ($('#radio-frida').is(':checked')) {
        $('#frida-registration-form').show();
    } else {
        $('#mentor-verification-form').show();
    }
}

function showMentorRegistrationForm() {
    $('#mentor-verification-form').hide();
    $('#mentor-registration-form').show();
}