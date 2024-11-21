CREATE DATABASE IF NOT EXISTS jennyfer_tienda;
USE jennyfer_tienda;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Estructura de tabla para la tabla `Avatares_Valoracion`
--
CREATE TABLE `valoraciones` (
  `id` int(11) NOT NULL,
  `avatar_id` int(11) DEFAULT NULL,
  `nombreAvatar` varchar(250) DEFAULT NULL,
  `descripcionAvatar`text DEFAULT NULL,
  `fotoAvatar` varchar(100) DEFAULT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `valoraciones` (`id`, `avatar_id`, `nombreAvatar`, `descripcionAvatar`, `fotoAvatar`) VALUES
(1, 1, 'Violeta', 'Servicio rápido, la tarta estaba exquisita con una textura perfecta. Ideal para cualquier ocasión.', 'foto_avatar/1/1.png'),
(2, 2, 'Juan', 'La tarta estaba exquisita, fresca y perfecta. Es la segunda vez que pido, y seguiré haciéndolo.', 'foto_avatar/2/2.png'),
(3, 3, 'Francisco', 'Entrega puntual y la tarta con un sabor casero increíble. Perfecta para cualquier ocasión', 'foto_avatar/3/3.png'),
(4, 4, 'Maria', 'Tarta de vainilla deliciosa, servicio puntual y profesional. Muy recomendable.', 'foto_avatar/4/4.png'),
(5, 5, 'Ana', 'La tarta llegó perfecta y con un sabor increíble. El servicio de entrega fue puntual y sin problemas',  'foto_avatar/5/5.png'),
(6, 6, 'Sebastián', 'El pedido rápido fue y sencillo, la tarta superó nuestras expectativas en sabor y presentación.', 'foto_avatar/6/6.png');



CREATE TABLE `fotoproducts` (
  `id` int(11) NOT NULL,
  `products_id` int(11) DEFAULT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL,
  `foto4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `fotoproducts` (`id`, `products_id`, `foto1`, `foto2`, `foto3`,`foto4`) VALUES
(1, 1, 'foto_tarta/1/1.webp', 'foto_tarta/1/2.webp', 'foto_tarta/1/3.webp','foto_tarta/1/4.webp'),
(2, 2, 'foto_tarta/2/1.webp', 'foto_tarta/2/2.webp', 'foto_tarta/2/3.webp','foto_tarta/2/4.webp'),
(3, 3, 'foto_tarta/3/1.webp', 'foto_tarta/3/2.webp', 'foto_tarta/3/3.webp','foto_tarta/3/4.webp'),
(4, 4, 'foto_tarta/4/1.webp', 'foto_tarta/4/2.webp', 'foto_tarta/4/3.webp','foto_tarta/4/4.webp'),
(5, 5, 'foto_tarta/5/1.webp', 'foto_tarta/5/2.webp', 'foto_tarta/5/3.webp','foto_tarta/5/4.webp'),
(6, 6, 'foto_tarta/6/1.webp', 'foto_tarta/6/2.webp', 'foto_tarta/6/3.webp','foto_tarta/6/4.webp'),
(7, 7, 'foto_tarta/7/1.webp', 'foto_tarta/7/2.webp', 'foto_tarta/7/3.webp','foto_tarta/7/4.webp'),
(8, 8, 'foto_tarta/8/1.jpg', 'foto_tarta/8/2.jpg', 'foto_tarta/8/3.jpg','foto_tarta/8/4.jpg'),
(9, 9, 'foto_tarta/9/1.jpg', 'foto_tarta/9/2.jpg', 'foto_tarta/9/3.jpg','foto_tarta/9/4.jpg'),
(10, 10, 'foto_tarta/10/1.jpg', 'foto_tarta/10/2.jpg', 'foto_tarta/10/3.jpg','foto_tarta/10/4.jpg'),
(11, 11, 'foto_tarta/11/1.webp', 'foto_tarta/11/2.webp', 'foto_tarta/11/3.jpg','foto_tarta/11/4.jpg'),
(12, 12, 'foto_tarta/12/1.jpg', 'foto_tarta/12/2.jpg', 'foto_tarta/12/3.jpg','foto_tarta/12/4.jpg');



-- Estructura de tabla para la tabla `pedidostemporales`
--
CREATE TABLE `pedidostemporales` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `tokenCliente` varchar(100) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `pedidostemporales` (`id`, `producto_id`, `cantidad`, `tokenCliente`, `fecha`) VALUES
(2, 2, 1, 'KNtyv7nNpxmChftyWgmprPCHw36RRDpN', '2024-09-21 17:31:24'),
(4, 14, 1, 'KNtyv7nNpxmChftyWgmprPCHw36RRDpN', '2024-09-21 22:55:00'),
(9, 7, 3, 'izYmjf3jT9XP984DveGtQGFM2FtF9Pn7', '2024-09-21 22:00:50'),
(10, 5, 2, 'izYmjf3jT9XP984DveGtQGFM2FtF9Pn7', '2024-09-21 22:01:48');



--
-- Estructura de tabla para la tabla `products`
--
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nameProd` varchar(250) DEFAULT NULL,
  `precio` varchar(250) DEFAULT NULL,
  `precio2` varchar(250) DEFAULT NULL,
  `description_Prod` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Volcado de datos para la tabla `products`

INSERT INTO `products` (`id`, `nameProd`, `precio`,`precio2`, `description_Prod`) VALUES
(1, 'Dulce de Leche', '28','40', 'La Tarta de Dulce de Leche y Queso es un delicioso postre que combina la suavidad del queso crema con el dulzor del dulce de leche, creando un equilibrio perfecto de sabores. Su base crujiente de galletas contrasta magníficamente con el relleno cremoso y suave. Tras hornearse, se decora con una capa de dulce de leche, ofreciendo un toque extra de dulzura. Es un postre indulgente y elegante, ideal para cualquier ocasión especial.'),
(2, 'La Original', '28','40', 'Ganadora del Tercer Premio a la Mejor Tarta de Queso de Madrid 2024. Una tarta tan cremosa por dentro como tostada por fuera. Sus tres tipos de queso (crema, azul y cabra) sobre una original base de galleta María harán las delicias de cualquier ocasión.Es un postre indulgente y elegante, ideal para cualquier ocasión especial.'),
(3, 'La Pistacchio', '28', '40','Edición limitada | Tarta de Queso y Pistacho siciliano con chocolate blanco. Nuestra Luna & Wanda de siempre se funde durante unos días con el "oro verde" del auténtico pistacho italiano. Una tarta exclusiva elaborada con pasta 100% pura de pistacho Pariani (Valrhona) y un toque de chocolate blanco. Una edición atrevida, pero perfectamente equilibrada entre amargor y dulzor.'),
(4, 'Kinder Bueno', '28', '40','Edición especial | Tarta de Queso y Kinder Bueno. Nuestra Luna & Wanda se pasa al lado más corporativo. Una verdadera delicia con el toque justo al inconfundible sabor de la crema de leche y avellanas que tanto caracteriza a este dulce ¡Todo un lujo para los más golosos del Kinder Bueno!'),
(5, 'Chocolate Blanco', '28','40', 'Tarta de queso y chocolate blanco. El paso del frío invierno ha blanqueado los colores de nuestra Luna & Wanda, convirtiéndola en La Rubia. Todo un "dulce" espectáculo para los sentidos. Así es nuestra edición especial más solicitada. Una versión que parte de la base de nuestra inconfundible receta original, pero con el chocolate albino como protagonista.'),
(6, 'Galleta Oreo', '28', '40','La tarta de queso con galleta Oreo es un postre cremoso y delicioso que combina la suavidad del queso crema con el crujiente y sabor único de las galletas Oreo. Su base de galleta triturada aporta un toque crujiente, mientras que la capa de queso, ligera y suave, se funde en el paladar. Un postre irresistible para los amantes del dulce y las galletas'),
(7, 'Dulce de leche V2', '28','40', 'Tarta de Queso y Dulce de Leche. Uno de nuestros best seller elaborada con dulce de leche gallego 100% artesanal. Sin empalagar, equilibrada y donde el primer acento lo pone este dulce amarronado y cremoso, pero sin olvidarnos del sabor a queso de cualquiera de nuestras tartas. El ojito derecho de la familia. Porque existe el dulce...y después el dulce de leche.'),
(8, 'Black Cookies ', '28', '40','La tarta de queso con galleta Oreo es un postre cremoso y delicioso que combina la suavidad del queso crema con el crujiente y sabor único de las galletas Oreo. Su base de galleta triturada aporta un toque crujiente, mientras que la capa de queso, ligera y suave, se funde en el paladar. Un postre irresistible para los amantes del dulce y las galletas'),
(9, 'Cookies', '28', '40','Para los fans de las cookies: imagina una tarta de queso suave y cremosa sobre una base crujiente de galletas Chips Ahoy, que le da un toque de sabor irresistible. A esto le añadimos un delicioso topping de chocolate al horno, que se derrite perfectamente, y mini galletas Chips Ahoy para un toque extra de crocancia y sabor. Esta combinación perfecta entre el queso, el chocolate y las galletas hará que tu paladar se sienta en el paraíso. ¿Qué más se puede pedir? ¡Una experiencia única para los amantes de las cookies y los postres!'),
(10, 'Lotus cheesecake', '28','40', 'La cremosidad de nuestra clásica cheesecake combinada con el increíble sabor de las galletas Lotus. La decoración exterior es con cremita de Lotus y trozos de esta galleta.'),
(11, 'Galleta Maria', '28','40', 'Nuestra tarta de queso original elaborada diariamente en nuestro obrador, consta de una base de galleta con mantequilla sobre un manto de queso cremoso recubierto con una capa tostada de Maillard. Es la tarta perfecta para los amantes de la tradición y la cremosidad.'),
(12, 'Pistacho Ibérico', '28', '40','Para los entusiastas del pistacho os ofrecemos una verdadera joya. Nuestra tarta de queso con pistacho es sin duda una de nuestras tartas más atrevidas y disruptivas.'),
(13, 'New York Cheesecaket', '28', '40','Nuestra New York Cheesecake es un clásico, compacta por dentro y con galleta de mantequilla crujiente en la base. La decoración exterior es con cremita de Lotus y trozos de esta galleta.');



ALTER TABLE `pedidostemporales`
  ADD PRIMARY KEY (`id`);
--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `fotoproducts`
--
ALTER TABLE `fotoproducts` AUTO_INCREMENT = 17;

ALTER TABLE `pedidostemporales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;











