<?php
 switch ($_SERVER['REQUEST_METHOD'])
 {
    case "POST":
        if ($_POST["passwd"] == "yes"){
            readfile("success.php");
        }
        break;
    case "GET":
        header("HTTP/1.0 405 Method Not Allowed");
        break;
     }

     ?>