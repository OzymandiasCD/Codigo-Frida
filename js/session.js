// Check if the user has already logged in
// If so, redirect to the course.html page
function checkCurrentSession(callback) {
    $.post('php/verify_session.php', {}, callback);
}

// Close the current session
function closeSession(callback) {
    $.post('php/close_session.php', {}, callback);
}