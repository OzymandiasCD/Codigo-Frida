$(document).ready(function () {

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


    loadProfile('mentor', false);

});

// Shows elements depending on user type and if it is their own profile or not
function loadProfile(user, own) {

    // If profile isn't user's
    if (!own) {

        // Hides profile buttons
        $('.hide-on-other-user').hide();

        // Removes nav button active style
        $('#nav-profile-button').removeClass('active');

        // Disables inputs
        $('input').prop('disabled', true);
        $('textarea').prop('disabled', true);

        // Styles page
        
    }

    // Hides elements Frida profiles shouldn't have
    if (user == 'frida') {
        fridaProfile();
    }
    // Hides elements mentor profiles shouldn't have
    else {
        $('#badge-section').hide();
    }
}