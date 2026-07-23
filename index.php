<?php
    require_once "config.php";
    require_once "database.php";
    require_once "OrderHandler.php";
    $dbEngine = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);

    $activeConnect = $dbEngine->connect();
?>