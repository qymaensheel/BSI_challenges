<html>
<head>
<?php
    include_once dirname(__FILE__).'/../../init.php';
    require_once(HACKADEMIC_PATH."pages/challenge_monitor.php"); ?>
        
    <title>Challenge 13</title>
    <link rel="stylesheet" href="style.css">
    <script src="cool_functions.js"></script>
</head>
<body style="background-color: burlywood">
<div style="text-align: center;">
    <table class="main-table">
        <tbody>
        <tr>
            <td>
                <p><img src="js_logo.png" width="100" alt="logo"></p>
            </td>
        <tr>
            <td class="main-content">
                <form action="ch013.php" method="post">
                    <p class="description">Enter password to access the server:</p>
                        <input type="text" name="passwd" size="20">
                        <input type="submit" value="Enter" name="submit">

                </form>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
