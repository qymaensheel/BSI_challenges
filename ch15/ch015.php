<?php
 switch ($_SERVER['REQUEST_METHOD'])
 {
    case "POST":
        $user1 = $_POST["login"] == "ben_dover" && $_POST["passwd"] == "qwerty";
        $user2 = $_POST["login"] == "jumbo1" && $_POST["passwd"] == "12345678";
        $user3 = $_POST["login"] == "big_poppa" && $_POST["passwd"] == "zaq12wsx";
        if ( $user1 || $user2 || $user3){
            readfile("success.php");
        } else {
            header("HTTP/1.0 401 Unauthorized");   
        }
        break;
    case "GET":
        header("HTTP/1.0 405 Method not allowed");
        break;
     }

     ?>