<?php
    require_once "../../includes/initialize.php";

    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $country_id = isset($_POST['country_id']) ? $_POST['country_id'] : NULL;
    $city_id = isset($_POST['city_id']) ? $_POST['city_id'] : NULL;
    $is_freelancer = isset($_POST['checkbox']) ? 1 : 0;

    validate();

    $encripted = password_hash($password, PASSWORD_BCRYPT, ['cost'=>10]);

    $sql = "INSERT INTO `users`(`email`, `password`, `ime`, `prezime`, `country_id`, `city_id`, `flag_type`) ";
    $sql .= "VALUES(?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ssssiii', $email, $encripted, $ime, $prezime, $country_id, $city_id, $is_freelancer);
    $stmt->execute();
    $id = $stmt->insert_id;
    $stmt->close();

    if($is_freelancer == 1)
    {
        $sql = "INSERT INTO `freelancers`(`user_id`) VALUES(?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
    exitWithStatusCode("HTTP/1.1 200 OK", "Registration successful");


    function validate()
    {
        if($_POST['password'] != $_POST['password_confirm'] || empty($_POST['password']))
            exitWithStatusCode("HTTP/1.1 400 Bad Request", "Passwords didn't match");

        if(!isset($_POST['ime']) || empty($_POST['ime']))
            exitWithStatusCode("HTTP/1.1 400 Bad Request", "Please enter your name");

        if(!isset($_POST['prezime']) || empty($_POST['prezime']))
            exitWithStatusCode("HTTP/1.1 400 Bad Request", "Please enter your last name");

        if(!isset($_POST['email']) || empty($_POST['email']))
            exitWithStatusCode("HTTP/1.1 400 Bad Request", "Please enter login email address");

        if($_POST['checkbox'] || empty($_POST['checkbox']))
        {
            if(!isset($_POST['country_id']))
                exitWithStatusCode("HTTP/1.1 400 Bad Request", "Please enter your country");
            else if(!isset($_POST['city_id']))
                exitWithStatusCode("HTTP/1.1 400 Bad Request", "Please enter your city");
        }
    }


?>
