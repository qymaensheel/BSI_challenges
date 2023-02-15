<?php
    switch ($_SERVER['REQUEST_METHOD']) {
        case "POST":
            if ($_POST["login"] == "admin") {    
                $passwd = $_POST["passwd"];
                $regex = '/.*\' *(OR|or) *\'(\w+)\' *== *\'\2$/';

                if (preg_match($regex, $passwd)) {
                    header("HTTP/1.0 200 OK");
                    readfile("success.php");
                } else {
                    header("HTTP/1.0 401 Unauthorized");
                }
            } else {
                header("HTTP/1.0 401 Unauthorized");
            }
            break;
        case "GET":
            header("HTTP/1.0 405 Method Not Allowed");
            break;
    }
?>