<html>
<head>
<?php
    include_once dirname(__FILE__).'/../../init.php';
    require_once(HACKADEMIC_PATH."pages/challenge_monitor.php"); ?>
    <title>Challenge 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: darkgoldenrod">
<div style="text-align: center;">
    <table class="main-table">
        <tbody>
        <tr>
            <td>
                <p><img src="logo.png" width="100" alt="logo"></p>
            </td>
        <tr>
            <td class="main-content">
                <form action="ch012.php" method="post">
                    <p class="description">Enter login and password to access the server:</p>
                        <label>
                            <input type="text" name="login" size="20" placeholder="login">
                        </label><br>
                        <label>
                            <input type="text" name="passwd" size="20" placeholder="password">
                        </label><br>
                        <input type="submit" value="Login" name="submit" style="margin-bottom:10px">

                </form>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
