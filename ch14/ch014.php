<?php
 switch ($_SERVER['REQUEST_METHOD'])
 {
    case "POST":
        if ($_POST["passwd"] == "gonzalez38"){
            readfile("success.html");
        }
        break;
    case "GET":
        header("HTTP/1.0 401 Unauthorized");
        break;
     }

     ?>