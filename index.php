<?php
    require_once "Config.php";
    require_once "Database.php";
    require_once "OrderHandler.php";
    $dbEngine = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);

    $activeConnect = $dbEngine->connect();

    $confirmationMessage = null;

    $orderWorker = new OrderHandler($activeConnect);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $customerName = htmlspecialchars($_POST['customerName'] ?? '');
        $customerPhone = htmlspecialchars($_POST['customerPhone'] ?? '');
        $pizzaType = htmlspecialchars($_POST['pizzaType'] ?? '');
        $size =  htmlspecialchars($_POST['pizzaSize'] ?? '');
        $amountOfPizzas = (int) ($_POST['amountPizza'] ?? '1');
        $details = htmlspecialchars($_POST['details'] ?? '');

        $newOrderId = $orderWorker->saveOrder($customerName, $customerPhone, $pizzaType, $size, $amountOfPizzas, $details);
     
        if ($newOrderId) {
            $confirmationMessage = "Thanks, {$customerName}! Your order of {$amountOfPizzas} {$pizzaType} has been received.";
        }
    }
    require "templates/header.php";
    require "OrderFormView.php";
    require "templates/footer.php";
?>