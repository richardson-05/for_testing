-- Active: 1667021275653@@127.0.0.1@3306

CREATE DATABASE for_testing DEFAULT CHARACTER SET = 'utf8mb4';

use for_testing;

CREATE TABLE
    `productos` (
        `id` int(11) NOT NULL,
        `nombre` varchar(500) NOT NULL,
        `descripcion` varchar(1000) NOT NULL,
        `precio` float NOT NULL
    );

INSERT INTO
    `productos` (
        `id`,
        `nombre`,
        `descripcion`,
        `precio`
    )
VALUES (19, 'a', 'a', 0), (20, 'b', 'b', 1), (21, '200', '200', 200), (23, '100', '100', 100);

ALTER TABLE `productos` ADD PRIMARY KEY (`id`);

ALTER TABLE
    `productos` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

ALTER TABLE
    `usuarios` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

COMMIT;

------------------------------

CREATE Table
    usuarios(
        id int PRIMARY KEY AUTO_INCREMENT,
        nombres VARCHAR(100) NOT NULL,
        apellidos VARCHAR(100) NOT NULL,
        usuario VARCHAR(25) UNIQUE NOT NULL,
        correo VARCHAR(200) UNIQUE NOT NULL,
        contrasena VARCHAR(20) NOT NULL
    );

SELECT * from usuarios;

SELECT * from productos;