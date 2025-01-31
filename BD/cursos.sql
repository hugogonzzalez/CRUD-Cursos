create database cursos;
use cursos;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `cursos` (
  `id_curso` int UNSIGNED NOT NULL,
  `nombre_curso` varchar(17) NOT NULL,
  `descripcion` varchar(17) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `fecha_inic` varchar(7) NOT NULL,
  `fecha_fin` varchar(7) NOT NULL,
  `precio` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `descripcion`, `categoria`, `nivel`, `fecha_inic`, `fecha_fin`, `precio`) VALUES
(72, 'Curso1', 'Desarrollo_web', 'Corto', 'Avanzado', '10/10/2024', '20/10/2025', 4000),
(73, 'Curso2', 'Diseño_web', 'Largo', 'Intermedio', '10/10/2024', '20/10/2025', 2000),
(74, 'Curso3', 'Desplegamiento_web', 'Medio', 'Principiante', '10/10/2024', '20/10/2025', 1000),
(75, 'Curso4', 'Diseño_web', 'Largo', 'Avanzado', '10/10/2024', '20/10/2025', 1200),
(76, 'Curso5', 'Desarrollo_web', 'Corto', 'Principiante', '10/10/2024', '20/10/2025', 2200),
(77, 'Curso6', 'Diseño_web', 'Largo', 'Principiante', '10/10/2024', '20/10/2025', 3400);


ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD UNIQUE KEY `nombre_curso` (`nombre_curso`);

ALTER TABLE `cursos`
  MODIFY `id_curso` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;
