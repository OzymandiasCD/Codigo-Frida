<?php
    header("Content-type: application/json; charset=utf-8");

    require_once "lib/debug.php";
    require_once "lib/error.php";
    require_once "lib/file.php";
    require_once "lib/mysql.php";
    require_once "lib/response.php";
    require_once "lib/session.php";

    define("BASE_PATH", "../../content");
    define("BASE_USERS_PATH", "../../content/users");

    function newRandomUserDirname($base) {
        while (TRUE) {
            $dirname = uniqid();
            $fullpath = $base . "/" . $dirname;

            if (File::fileExists($fullpath) === FALSE &&
                File::isDirectory($fullpath) === FALSE)
                return $dirname;
        }
    }

    function createUserDirectory($dirname, &$image_path) {
        $fullpath = BASE_USERS_PATH . "/" . $dirname;
        File::createDirectory($fullpath);              /* ../../content/users/${dirname} */
        File::createDirectory($fullpath . "/profile"); /* ../../content/users/${dirname}/profile */
        File::copyFile(BASE_PATH . "/default/default.jpg", $fullpath . "/profile/profile.jpg");
        $image_path = BASE_USERS_PATH . "/" . $dirname . "/profile/profile.jpg";
    }

    $session = new Session();
    $mysql = new MySQL();
    $response = new Response(StatusCode::SUCCESS);

    /**
     * First of all, attempt to create the user's directory and copy to it
     * a default profile image from ../../content/default/default.jpg.
     * 
     * -TODO-: If it fails, *KILL* the process lml.
     */
    $image_path = "";
    createUserDirectory(newRandomUserDirname(BASE_USERS_PATH), $image_path);

    /**
     * Get tha base information from the user.
     */
    if (isset($_POST["email"]) === FALSE ||
        ($email = MySQL::cleanInputString($_POST["email"])) === "")
        (new ParameterNotFound("email"))->kill();

    if (isset($_POST["password"]) === FALSE ||
        ($password = MySQL::cleanInputString($_POST["password"])) === "")
        (new ParameterNotFound("password"))->kill();

    if (isset($_POST["type"]) === FALSE ||
        ($type = MySQL::cleanInputString($_POST["type"])) === "" ||
        $type !== "FRIDA" || $type !== "MENTOR")
        (new ParameterNotFound("type"))->kill();

    if (isset($_POST["name"]) === FALSE ||
        ($name = MySQL::cleanInputString($_POST["name"])) === "")
        (new ParameterNotFound("name"))->kill();

    if (isset($_POST["last-name"]) === FALSE ||
        ($lastName = MySQL::cleanInputString("last-name")) === "")
        (new ParameterNotFound("last-name"))->kill();

    if (isset($_POST["birthdate"]) === FALSE ||
        ($birthdate = MySQL::cleanInputString("birthdate")) === "")
        (new ParameterNotFound("birthdate"))->kill();

    if (isset($_POST["phone"]) === FALSE ||
        ($phone = MySQL::cleanInputString("phone")) === "")
        (new ParameterNotFound("phone"))->kill();

    if (isset($_POST["institution"]) === FALSE ||
        ($institution = MySQL::cleanInputString("institution")) === "")
        (new ParameterNotFound("institution"))->kill();

    if (isset($_POST["genre"]) === FALSE ||
        ($genre = MySQL::cleanInputString("genre")) === "")
        (new ParameterNotFound("genre"))->kill();

    if (isset($_POST["area"]) === FALSE ||
        ($area = MySQL::cleanInputString("area")) === "")
        (new ParameterNotFound("area"))->kill();

    $query = "INSERT INTO `users` (`email`, `password`, `type`, `name`, `last_name`, `birthdate`, `genre`,
                                   `institution`, `phone`, `area`, `biography`, `image_path`)
              VALUES ('$email', SHA2('$password', 256), '$type', '$name', '$lastName', '$birthdate', '$genre',
                      '$institution', '$phone', '$area', '', '$image_path')";

    if ($mysql->execute($query) === FALSE) {
        $response->setStatus(StatusCode::FAILURE);
        $response->setErrorNumber($mysql->getErrorNumber());
        $response->setErrorMessage($mysql->getErrorMessage());
        die($response->toJSON());
    }

    echo $response->toJSON();
?>