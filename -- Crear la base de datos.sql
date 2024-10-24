-- Crear la base de datos
CREATE DATABASE moda;

-- Usar la base de datos creada
USE moda;

-- Crear la tabla de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL
);

-- Insertar un usuario de prueba (puedes cambiar la contraseña por la que prefieras)
INSERT INTO usuarios (username, password) 
VALUES ('admin', 'admin123');

-- Crear la tabla de moda (artículos)
CREATE TABLE moda (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    descripcion TEXT
);

-- Insertar algunos artículos de moda de ejemplo
INSERT INTO moda (nombre, categoria, precio, descripcion) 
VALUES 
('Camiseta', 'Ropa', 15.99, 'Camiseta de algodón 100%'),
('Pantalones vaqueros', 'Ropa', 39.99, 'Pantalones vaqueros clásicos'),
('Chaqueta de cuero', 'Ropa', 99.99, 'Chaqueta de cuero sintético'),
('Zapatillas deportivas', 'Calzado', 59.99, 'Zapatillas deportivas con diseño moderno');
