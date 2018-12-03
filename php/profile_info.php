<?php
    header("Content-type: application/json; charset=utf-8");

    require_once "lib/debug.php";
    require_once "lib/error.php";
    require_once "lib/file.php";
    require_once "lib/mysql.php";
    require_once "lib/response.php";
    require_once "lib/session.php";

    $session = new Session();
    $mysql = new MySQL();
    $response = new Response(StatusCode::SUCCESS);

    if (isset($_POST["id"]) && ($id = MySQL::cleanInputString($_POST["id"])) !== "") {

        // We are going to get the information from a specific user
        // $query = "SELECT `users`.`name`, `users`.`last_name`, `users`.`birthdate`, `users`.`email`, `users`.`phone`,
        //                  `users`.`institution`, `users`.`biography` FROM `users` WHERE `users`.`id` = $id";
    } elseif (($id = $session->get("id")) !== null) {

        // We are getting the information from the current user's session
        $query = "SELECT `users`.`name`, `users`.`last_name`, `users`.`birthdate`, `users`.`email`, `users`.`phone`,
                         `users`.`institution`, `users`.`biography`, `users`.`image_path` FROM `users`
                  WHERE `users`.`id` = $id";

        $result = $mysql->execute($query);
        $response->setData($result->fetch_assoc());

    } else {
        // -TODO-: Handle the error somehow
    }

    echo $response->toJSON();
?>