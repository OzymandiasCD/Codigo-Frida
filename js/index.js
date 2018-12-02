$(document).ready(function () {

    // Hides all login / registration cards
    $('.hide-on-load').hide();

    // Materialize select initialization
    $('select').formSelect();

    // Materialize modal initialization
    $('.modal').modal({
        dismissible: false,
        startingTop: '30%',
        endingTop: '30%'
    });

});

// Logs in user account and redirects to course.html
function login() {
    window.open('course.html', '_self');
}

// Registers user in databse and shows confirmation modal
function register() {
    $('#registration-confirmation').modal('open');
}

// Shows login form only
function showLoginForm() {
    $('#basic-registration-form').hide();
    $('#frida-registration-form').hide();
    $('#mentor-registration-form').hide();
    $('#login-form').show();
}

// Shows basic registration form only
function showBasicRegistrationForm() {
    $('#login-form').hide();
    $('#frida-registration-form').hide();
    $('#mentor-registration-form').hide();
    $('#basic-registration-form').show();
}

// Shows user registration form only
function showUserRegistrationForm() {
    $('#basic-registration-form').hide();
    if ($('#radio-frida').is(':checked')) {
        $('#frida-registration-form').show();
    } else {
        $('#mentor-registration-form').show();
    }
}