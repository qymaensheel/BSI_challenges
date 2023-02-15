<!DOCTYPE HTML>
<html>
<head>
<?php
    include_once dirname(__FILE__).'/../../init.php';
    require_once(HACKADEMIC_PATH."pages/challenge_monitor.php"); 
?>
 
    <title>Challenge 14</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: lightpink">
<div style="text-align: center;">
    <table class="main-table">
        <tbody>
        <tr>
            <td>
                <p><img src="java_logo.png" width="100" alt="logo"></p>
            </td>
        <tr>
            <td class="main-content">
                Welcome to our modern and secure app! For our customer's best experience we are using only the most secure solutions. We are proud to present you our technology stack: 
                <ul>
                    <li>
                        Java 11
                    </li>
                    <li>
                        Some Java library
                    </li>
                    <li>
                        Yet another Java library
                    </li>
                    <li><b><u>Log4j</u></b></li>
                </ul>
                <small><i>Last updated: 09.12.2021</i></small>
            </td>
        </tr>
        <TR>
            <TD class="main-content">
                <form action="ch014.php" method="post">
                    <br>
                    <p align="center">Enter your username:
                        <input type="text" name="passwd" size="20">
                        <input type="submit" value="Enter" name="submit">
                    </p>
                </form>
            </TD>
        </TR>
        </TBODY>
    </TABLE>
</div>
</BODY>
</HTML>
