<?php
    include('securitywall.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Main Page</title>
    </head>
    <body>
    <?php say("Hello ".$_SESSION['username']); ?>
    <a href="processLogout.php">Logout</a>
    </body>
</html>