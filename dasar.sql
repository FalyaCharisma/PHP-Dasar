SELECT * FROM products;

INSERT INTO products (name, price) VALUES ('Mouse', 100000);

UPDATE products SET price = 120000 WHERE id = 1;

DELETE FROM products WHERE id = 2;

SELECT * FROM products WHERE price > 100000;

SELECT orders.order_id, customers.customer_name
FROM orders
JOIN customers ON orders.customer_id = customers.customer_id;
