<?php
    require_once "../../includes/initialize.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT `password` FROM `users` WHERE `email` = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($db_pass);
    $stmt->fetch();
    $stmt->close();

    if(password_verify($password, $db_pass))
    {
        echo "OK";
       if($session->login($email))
       {
           redirect_to("user.php");
           exitWithStatusCode("HTTP/1.1 200 OK", "Login successfull");
       }

        exitWithStatusCode("HTTP/1.1 400 Bad Request", "Login failed");
    }

    exitWithStatusCode("HTTP/1.1 400 Bad Request", "Password missmatch");

?>
