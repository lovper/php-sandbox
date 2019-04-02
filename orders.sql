USE c9;

CREATE TABLE IF NOT EXISTS orders (
    id int NOT NULL AUTO_INCREMENT,
    name TEXT
    order_date TIMESTAMP CURRENT_TIMESTAMP,
    shipped INT(1),
    shipping_date TIMESTAMP,
    PRIMARY KEY (id)
)

LOCK TABLES orders WRITE;

INSERT INTO orders VALUES 
    (null, 'Bigboi', , )