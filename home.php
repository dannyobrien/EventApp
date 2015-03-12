<?php
require_once 'Connection.php';
require_once 'EventTableGateway.php';

require 'ensureUserLoggedIn.php';

$connection = Connection::getInstance();
$gateway = new EventTableGateway($connection);

$statement = $gateway->getEvents();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php require "styles.php" ?>
        <script type="text/javascript" src="js/event.js"></script>
        <title></title>
    </head>
    <body>
        <?php require 'toolbar.php' ?>
        <?php require 'header.php' ?>
        <?php require 'mainMenu.php' ?>
        
        <?php
        if (isset($message)) {
            echo '<p>'.$message.'</p>';
        }
        ?>
      
        <p><a href="createEventForm.php">Create Event</a></p>
        <?php require 'footer.php'; ?>
        <?php require 'scripts.php'; ?>    
    </body>
</html>
