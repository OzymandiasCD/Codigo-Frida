$(document).ready(function () {

    // Materialize select initialization
    $('select').formSelect();

    // Materialize modal initialization
    $('.modal').modal({
        dismissible: false,
        startingTop: '30%',
        endingTop: '30%'
    });

    // Hides all login / registration form-divs
    $('.hide-on-load').hide();

});

// Logs in user account and redirects to course.html
function login() {
    window.open('course.html', '_self');
}

// Registers user in databse and shows confirmation modal
function register() {
    let email = $("#sign-up-email").val().trim();
    let password = $("#sign-up-password").val().trim();
    let type, name, lastName, birthdate, phone, institution, genre, area;

    if ($('#radio-frida').prop('checked')) {
        type = $('#radio-frida').val();
        name = $('#frida-name').val().trim();
        lastName = $('#frida-last-name').val().trim();
        birthdate = moment($('#frida-birthday').val(), 'MMM DD, YYYY').format('YYYY-MM-DD');
        phone = $('#frida-cellphone-number').val().trim();
        institution = $('#frida-provenance').val().trim();
        genre = "FEMALE";
        area = "NONE";
    } else if ($('#radio-mentor').prop('checked')) {
        type = $('#radio-mentor').val();
        name = $('#mentor-name').val().trim();
        lastName = $('#mentor-last-name').val().trim();
        birthdate = moment($('#mentor-birthday').val(), 'MMM DD, YYYY').format('YYYY-MM-DD');
        phone = $('#mentor-cellphone-number').val().trim();
        institution = $('#mentor-provenance').val().trim();
        genre = $('#mentor-genre').val();
        area = $('#mentor-area').val();
    } else {
        return false;
    }

    $.post('php/sign_up.php', {
        email: email,
        password: password,
        type: type,
        name: name, 
        last_name: lastName,
        birthdate: birthdate,
        genre: genre,
        institution: institution,
        phone: phone,
        area: area
    },
    function(data) {
        console.log(data);

        if (!data.status) {
            $('#registration-confirmation').modal('open');
        } else {
            $('#registration-failed').modal('open');
        }
    }, "json");

    return true;
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
    // Validate the fields before proceeding to the next form
    let completedFiels = true;

    if ($('#sign-up-email').val().trim() === '') {
        $('#sign-up-email').addClass('red-text');
        completedFiels = false;
    }

    // If all the fields are complete, proceed to the next form.
    if (completedFiels) {
        $('#basic-registration-form').hide();
        if ($('#radio-frida').is(':checked')) {
            $('#frida-registration-form').show();
        } else {
            $('#mentor-registration-form').show();
        }
    }
}