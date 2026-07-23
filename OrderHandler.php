<?php
    class OrderHandler {
        private $connection;
    
        public function __construct($connection) {
            $this->connection = $connection;
        }

        public function saveOrder($customerName, $customerPhone, $pizzaType, $size, $amountOfPizzas, $details) {
            $sql = "INSERT INTO orders (customer_name, customer_phone, pizza_type, size, pizzas_requested, details) 
            VALUES (:customerName, :customerPhone, :pizzaType, :size , :amountOfPizzas, :details)";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([
                ':customerName' => $customerName,
                ':customerPhone' => $customerPhone,
                ':pizzaType' => $pizzaType,
                ':size' => $size,
                ':amountOfPizzas' => $amountOfPizzas,
                ':details' => $details,
            ]);

            return $this->connection->lastInsertId();

        }
    }
?>