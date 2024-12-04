CREATE DATABASE IF NOT EXISTS tienda;
USE tienda;

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    imagen VARCHAR(255) NOT NULL
);

INSERT INTO productos (nombre, precio, imagen) VALUES
('Camiseta Deportiva', 29.99, 'camiseta.jpg'),
('Pantalón Deportivo', 49.99, 'pantalon.jpg'),
('Zapatillas Running', 89.99, 'zapatillas.jpg'),
('Gorra Casual', 19.99, 'gorra.jpg'),
('Buzo Entrenamiento', 39.99, 'buzo.jpg');CREATE DATABASE IF NOT EXISTS tienda;
USE tienda;

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    imagen VARCHAR(255) NOT NULL
);

INSERT INTO productos (nombre, precio, imagen) VALUES
('Camiseta Deportiva', 29.99, 'camiseta.jpg'),
('Pantalón Deportivo', 49.99, 'pantalon.jpg'),
('Zapatillas Running', 89.99, 'zapatillas.jpg'),
('Gorra Casual', 19.99, 'gorra.jpg'),
('Buzo Entrenamiento', 39.99, 'buzo.jpg');