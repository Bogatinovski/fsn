<?php
    require_once "../../includes/initialize.php";
    $id = $_GET['country_id'];

    $sql = "SELECT `city_id`, `city_name` FROM `cities` WHERE `country_id` = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($city_id, $city_name);

    $return = array();

    while($stmt->fetch())
        array_push($return, array("id"=>$city_id, "name"=>$city_name));

    $stmt->close();

    die(json_encode($return));
?>
