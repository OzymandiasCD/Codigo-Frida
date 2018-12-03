$(document).ready(function () {

    // Materialize select initialization
    $('select').formSelect();

    // Materialize tooltip initialization
    $('.small-badge').tooltip({
        position: 'top',
        enterDelay: 0,
        exitDelay: 0,
        margin: 0
    });

    // Materialize modal initialization
    $('.modal').modal({
        startingTop: '15%',
        endingTop: '15%'
    });

    loadProfile('frida', true, true);

});

/* Loads profile depending on:
    User's type | 'frida' or 'mentor'
    Own or other's profile | true = own, false = other's),
    Wheter the user is in a team | true = is in a team, false = isn't in a team  */
function loadProfile(user, own, team) {

    // If profile isn't user's...
    if (!own) {

        // Hides profile buttons
        $('.hide-on-other-user').hide();
        $('.caret').hide();

        // Removes nav button active style
        $('#nav-profile-button').removeClass('active');

        // Changes html text
        $('#badges p').html('Esta persona no ha conseguido ninguna insignia'); // ESTO DEBE IR ANTES DE INSERTAL CUALQUIER INSIGNIA, EN CASO DE SER FRIDA Y TENER INSIGNIAS

        // Disables inputs
        $('input').prop('disabled', true);
        $('textarea').prop('disabled', true);

    }

    // If user is a Frida...
    if (user == 'frida') {

        // Hides elements Frida profiles shouldn't have
        $('.hide-on-frida').hide();

    }

    // If user is a mentor...
    else {

        // Changes provenance label name
        $('[for=user-provenance]').html('Institución o empresa de procedencia');

        // Hides elements mentor profiles shouldn't have
        $('.hide-on-mentor').hide();

    }

    // If the user doesn't have a team...
    if(!team) {
        
        // Hides team row
        $('.hide-on-team').hide();

    }
}