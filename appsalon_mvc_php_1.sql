-- -------------------------------------------------------------
-- Base de datos: appsalon_mvc_php
-- -------------------------------------------------------------

DROP DATABASE IF EXISTS appsalon_mvc_php_1;
CREATE DATABASE appsalon_mvc_php_1 CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE appsalon_mvc_php_1;

-- Desactivar restricciones para evitar errores durante creación
SET FOREIGN_KEY_CHECKS = 0;

-- Tabla usuarios
CREATE TABLE `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(60) DEFAULT NULL,
  `apellido` VARCHAR(60) DEFAULT NULL,
  `email` VARCHAR(30) DEFAULT NULL,
  `password` VARCHAR(255) DEFAULT NULL,
  `telefono` VARCHAR(10) DEFAULT NULL,
  `admin` TINYINT(1) DEFAULT 0,
  `confirmado` TINYINT(1) DEFAULT 0,
  `token` VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla citas
CREATE TABLE `citas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE DEFAULT NULL,
  `hora` TIME DEFAULT NULL,
  `usuarioId` INT DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarioId` (`usuarioId`),
  CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuarios` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla servicios
CREATE TABLE `servicios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(60) DEFAULT NULL,
  `precio` DECIMAL(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla citasServicios
CREATE TABLE `citasServicios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `citaId` INT DEFAULT NULL,
  `servicioId` INT DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `citaId` (`citaId`),
  KEY `servicioId` (`servicioId`),
  CONSTRAINT `citasservicios_ibfk_3` FOREIGN KEY (`citaId`) REFERENCES `citas` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `citasservicios_ibfk_4` FOREIGN KEY (`servicioId`) REFERENCES `servicios` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar usuarios
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `telefono`, `admin`, `confirmado`, `token`) VALUES
(9, 'Juanm', 'De la torre', 'correo@correo.com', '$2y$10$9TTiKdZXQaUQaSbVKd7wPOucLusU8ebkv2h2IgqNjQXs.uLTW7CAq', '1234567890', 0, 1, '');

-- Insertar citas
INSERT INTO `citas` (`id`, `fecha`, `hora`, `usuarioId`) VALUES
(22, '2023-11-29', '10:30:00', 9);

-- Insertar servicios
INSERT INTO `servicios` (`id`, `nombre`, `precio`) VALUES
(1, 'Corte de Cabello Mujer ACTUALIZADO', 120.00),
(2, 'Corte de Cabello Hombre', 80.00),
(3, 'Corte de Cabello Niño', 60.00),
(4, 'Peinado Mujer', 80.00),
(5, 'Peinado Hombre', 60.00),
(6, 'Peinado Niño', 60.00),
(7, 'Corte de Barba', 60.00),
(8, 'Tinte Mujer', 300.00),
(9, 'Uñas', 400.00),
(10, 'Lavado de Cabello', 50.00),
(11, 'Tratamiento Capilar', 150.00);

-- Insertar relación entre cita y servicio
INSERT INTO `citasServicios` (`id`, `citaId`, `servicioId`) VALUES
(18, 22, 2);

-- Activar nuevamente restricciones
SET FOREIGN_KEY_CHECKS = 1;
