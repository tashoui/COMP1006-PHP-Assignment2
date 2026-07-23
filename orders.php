<?php
CREATE TABLE orders ( 
id INT AUTO_INCREMENT PRIMARY KEY,
customer_name VARCHAR(100) NOT NULL,
customer_phone VARCHAR(20) NOT NULL,
pizza_type ENUM('Pepperoni', 'Veggie', 'Meat-Lovers', 'Cheese', 'Deep-Dish', 'Hawaiian') NOT NULL,
size ENUM('Small', 'Medium', 'Large', 'Extra-Large') NOT NULL, 
pizzas_requested TINYINT NOT NULL,
details TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
?>