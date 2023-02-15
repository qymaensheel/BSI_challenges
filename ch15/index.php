<!DOCTYPE html>
<html>
<head>
<?php
    include_once dirname(__FILE__).'/../../init.php';
    require_once(HACKADEMIC_PATH."pages/challenge_monitor.php"); ?>
 
    <title>Challenge 15</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: aquamarine">
<div style="text-align: center;">
    <table class="main-table">
        <tbody>
        <tr>
            <td>
                <button hidden><a href="admin.php" >
                    admin panel</a>
                </button>
            </td>
        </tr>
        <tr>
            <td>
                <p><img src="url_interpretation_logo.png" width="100"></p></td>
        </tr>
        <tr>
            <td>

            </td>
        </tr>
        <tr>
            <td class="main-content">
                <form action="ch015.php" method="post">
                    <br>
                    <p align="center">Enter your credentials:
                        <input type="text" name="login" size="20" placeholder="login">
                        <input type="password" name="passwd" size="20" placeholder="password">
                        <input type="submit" value="Enter" name="submit">
                    </p>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</BODY>
</HTML>
