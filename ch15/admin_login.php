<?php
switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        if ($_POST["passwd"] == "admin" && $_POST["login"] == "admin") {
            readfile("admin_page.html");
        } else {
            header("HTTP/1.0 401 Unauthorized");
        }
        break;
    case "GET":
        header("HTTP/1.0 405 Method not allowed");
        break;
}

?>

