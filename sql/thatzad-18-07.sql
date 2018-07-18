-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`),
  CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `carts_products`;
CREATE TABLE `carts_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `pvp` double(8,2) NOT NULL,
  `iva` double(8,2) NOT NULL,
  `product_description` text COLLATE utf8_unicode_ci NOT NULL,
  `cant` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `carts_products_cart_id_foreign` (`cart_id`),
  KEY `carts_products_product_id_foreign` (`product_id`),
  CONSTRAINT `carts_products_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  CONSTRAINT `carts_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `contacts_history`;
CREATE TABLE `contacts_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `consultas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `consulta` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `contacts_history` (`id`, `email`, `name`, `company`, `telephone`, `web`, `consultas`, `consulta`, `created_at`, `updated_at`) VALUES
(36,	'sinnewsletter@gmail.com',	'sinnewsletter',	'',	'',	'',	'',	'prueba de contacto sin newsletter',	'2018-07-03 10:41:10',	'2018-07-03 10:41:10'),
(37,	'connewsletter@gmail.com',	'connewsletter',	'',	'',	'',	'',	'prueba de contacto con newsletter',	'2018-07-03 10:42:18',	'2018-07-03 10:42:18'),
(38,	'completosinnews@completosinnews.com',	'completosinnews',	'completosinnews',	'987656787',	'completosinnews.com',	'{\"1\":\"1\",\"3\":\"3\",\"5\":\"5\"}',	'contacto completo sin newsletter',	'2018-07-03 10:44:36',	'2018-07-03 10:44:36'),
(39,	'completoconnews@completoconnews.com',	'completoconnews',	'completoconnews',	'912324564',	'completoconnews.com',	'{\"2\":\"2\",\"4\":\"4\",\"6\":\"6\"}',	'Contacto completo con newsletter',	'2018-07-03 10:45:38',	'2018-07-03 10:45:38'),
(40,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'Thatzad',	'640126331',	'Thatzad',	'{\"1\":\"1\",\"2\":\"2\"}',	'Testo',	'2018-07-04 08:39:32',	'2018-07-04 08:39:32'),
(41,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'Thatzad',	'640126331',	'Thatzad',	'{\"1\":\"1\",\"2\":\"2\"}',	'Testo',	'2018-07-04 08:39:33',	'2018-07-04 08:39:33'),
(42,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'WEB',	'640126331',	'WEB',	'{\"1\":\"1\",\"6\":\"6\"}',	'Mi mensaje',	'2018-07-04 08:44:30',	'2018-07-04 08:44:30'),
(43,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'Amazon',	'640126331',	'weqweqweq',	'[\"1\",\"2\"]',	'qweqwee',	'2018-07-04 13:42:58',	'2018-07-04 13:42:58'),
(44,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'Amazon',	'640126331',	'weqweqweq',	'[\"1\",\"2\"]',	'qweqwee',	'2018-07-04 13:43:02',	'2018-07-04 13:43:02'),
(45,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'Amazon',	'640126331',	'weqweqweq',	'[\"1\",\"2\"]',	'qweqwee',	'2018-07-04 13:43:12',	'2018-07-04 13:43:12'),
(46,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'',	'640126331',	'',	'[\"1\",\"2\"]',	'',	'2018-07-12 13:22:39',	'2018-07-12 13:22:39'),
(47,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'',	'640126331',	'',	'[\"1\",\"2\"]',	'',	'2018-07-12 13:22:39',	'2018-07-12 13:22:39'),
(48,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'',	'640126331',	'',	'[\"1\",\"2\"]',	'ere',	'2018-07-12 13:22:40',	'2018-07-12 13:22:40'),
(49,	'ainara.rodriguez@thatzad.com',	'Ainara Rodriguez',	'holaaa',	'936350620',	'www.thatzad.com',	'[\"6\"]',	'No sé diseñar una web',	'2018-07-17 15:16:30',	'2018-07-17 15:16:30'),
(50,	'Sdjdjsj@fgh.com',	'Aina',	'Hola',	'G',	'D',	'[\"1\",\"3\",\"5\",\"6\"]',	'Fhjk',	'2018-07-17 15:33:53',	'2018-07-17 15:33:53'),
(51,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'',	'640126331',	'',	'[\"1\",\"2\"]',	'',	'2018-07-18 08:26:52',	'2018-07-18 08:26:52'),
(52,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'',	'640126331',	'',	'[\"1\",\"2\"]',	'',	'2018-07-18 08:28:51',	'2018-07-18 08:28:51'),
(53,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'',	'640126331',	'',	'[\"1\",\"2\"]',	'',	'2018-07-18 08:30:02',	'2018-07-18 08:30:02');

DROP TABLE IF EXISTS `currencies`;
CREATE TABLE `currencies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `currencies` (`id`, `title`, `code`, `active`, `created_at`, `updated_at`) VALUES
(1,	'Euro',	'€',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(2,	'Dolar',	'$$',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `languages_locale_unique` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `languages` (`id`, `code`, `locale`, `name`, `active`, `default`, `created_at`, `updated_at`) VALUES
(1,	'es',	'es_ES',	'Español',	1,	1,	'2018-03-05 18:09:41',	'0000-00-00 00:00:00'),
(2,	'en',	'en_EN',	'Ingles',	1,	0,	'2018-03-05 18:09:41',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_11_13_111418_users',	1),
('2015_11_13_111823_languages',	1),
('2015_11_13_112220_news',	1),
('2015_11_13_113435_categories',	1),
('2015_11_13_113914_products',	1),
('2015_11_13_114726_cart_shipping_payments_coupons_orders',	1),
('2015_11_13_132332_faqs',	1),
('2016_01_14_182313_bannersSlider',	1),
('2016_01_19_173448_productsRelatedMigrate',	1),
('2016_01_20_155413_userFbGpMigrate',	1),
('2016_01_27_170435_productsOptionsMigrate',	1),
('2016_01_29_112407_priceForMoneyMigrate',	1),
('2016_02_01_115845_ErroresPaymentsMigrate',	1);

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `newsletter` (`id`, `name`, `email`, `updated_at`, `created_at`) VALUES
(34,	'connewsletter',	'connewsletter@gmail.com',	'2018-07-03 10:42:18',	'2018-07-03 10:42:18'),
(35,	'completoconnews',	'completoconnews@completoconnews.com',	'2018-07-03 10:45:38',	'2018-07-03 10:45:38'),
(36,	'pruebanewsletter',	'pruebanewsletter@newsletter.com',	'2018-07-03 10:47:48',	'2018-07-03 10:47:48'),
(37,	'Viktoriia Iukhnina',	'viktoriia.iukhnina@thatzad.com',	'2018-07-04 08:39:32',	'2018-07-04 08:39:32'),
(38,	'Viktoriia',	'thatzad@gmail.com',	'2018-07-13 10:32:02',	'2018-07-13 10:32:02'),
(39,	'Viktoriia',	'informacion@thatzad.com',	'2018-07-13 10:39:05',	'2018-07-13 10:39:05'),
(40,	'Vik',	'viktoriia.iukhnina@that1zad.com',	'2018-07-16 13:37:20',	'2018-07-16 13:37:20'),
(41,	'Ainara',	'ainara.rodriguez@thatzad.com',	'2018-07-17 15:14:10',	'2018-07-17 15:14:10'),
(42,	'Aina',	'Sdjdjsj@fgh.com',	'2018-07-17 15:33:53',	'2018-07-17 15:33:53');

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `coupon_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cart_id` int(10) unsigned NOT NULL,
  `total_pvp` double(8,2) NOT NULL,
  `total_iva` double(8,2) NOT NULL,
  `shipping_pvp` double(8,2) NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `observations` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `orders_reference_unique` (`reference`),
  KEY `orders_cart_id_foreign` (`cart_id`),
  KEY `orders_status_foreign` (`status`),
  CONSTRAINT `orders_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  CONSTRAINT `orders_status_foreign` FOREIGN KEY (`status`) REFERENCES `orders_status` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `orders_details`;
CREATE TABLE `orders_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_address` varchar(175) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_postalcode` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_city` varchar(175) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_province` varchar(175) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_country` int(10) unsigned NOT NULL,
  `shipping_telephone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `orders_details_order_id_foreign` (`order_id`),
  KEY `orders_details_shipping_country_foreign` (`shipping_country`),
  CONSTRAINT `orders_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `orders_details_shipping_country_foreign` FOREIGN KEY (`shipping_country`) REFERENCES `shipping_countries` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `orders_payments`;
CREATE TABLE `orders_payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `payment_id` int(10) unsigned NOT NULL,
  `response_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `operation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `transaction_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `orders_payments_order_id_foreign` (`order_id`),
  KEY `orders_payments_payment_id_foreign` (`payment_id`),
  CONSTRAINT `orders_payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `orders_payments_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `orders_status`;
CREATE TABLE `orders_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `orders_status` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1,	'Esperando pago',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(2,	'Pagado',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(3,	'Enviado',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(4,	'Finalizado',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(5,	'Error de pago',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(6,	'Incidencia',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(7,	'Pedido de PRUEBA',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `payments` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
(1,	'TPV',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(2,	'Paypal',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(3,	'Transferencia',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `payments_errors`;
CREATE TABLE `payments_errors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` int(10) unsigned NOT NULL,
  `code` int(10) unsigned NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `payments_errors_payment_id_foreign` (`payment_id`),
  CONSTRAINT `payments_errors_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_big` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_short` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `projects` (`id`, `title`, `category_id`, `description`, `description_big`, `description_short`, `slug`, `image1`, `image2`, `image3`, `image4`, `image5`, `order`, `active`, `created_at`, `updated_at`) VALUES
(1,	'Turismo de Canarias',	'1',	'Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo. ',	'<p><b>SEO</b></p><p>Consultoría, estrategia, adaptación web y linkbuilding en uno de los sectores más competidos de Internet</p><p><b>SEA</b></p><p>Con competencia tan fuerte y con unos CPCs altísimos, en los pequeños detalles y ajustes finos es donde marcamos la diferencia. Ibiza es un destino mundialmente famoso en el sector del lujo, así que nuestras campañas van desde USA, UK, Rusia, países árabes o Australia.</p><p><b>Social Ads</b></p><p>Segmentaciones muy exclusivas, campañas de remarketing o Gmail orientado a experiencias de lujo. </p><p><b>Publicidad online</b></p><p>Orientación exclusiva en el sector lujo. Campañas de Brand y, en momentos puntuales del año, más orientadas a la conversión..</p>',	'Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo.',	'turismo-de-canarias',	'bg-especializaciones_image1.jpg',	'bg-home-top_image2.png',	'bg-agency_image3.png',	'contact-service_image4.png',	'contact_image5.png',	0,	1,	'2018-07-09 12:10:41',	'2018-07-12 12:10:19'),
(2,	'Bonder & Co',	'2',	'<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo.</p><p>Gestionamos campaña en los principales países e idiomas para destinos como Ibiza, Formentera, Mallorca o Marbella. </p>',	'<p><b>SEO</b></p><p>Consultoría, estrategia, adaptación web y linkbuilding en uno de los sectores más competidos de Internet</p><p><b>SEA</b></p><p>Con competencia tan fuerte y con unos CPCs altísimos, en los pequeños detalles y ajustes finos es donde marcamos la diferencia. Ibiza es un destino mundialmente famoso en el sector del lujo, así que nuestras campañas van desde USA, UK, Rusia, países árabes o Australia.</p><p><b>Social Ads</b></p><p>Segmentaciones muy exclusivas, campañas de remarketing o Gmail orientado a experiencias de lujo. </p><p><b>Publicidad online</b></p><p>Orientación exclusiva en el sector lujo. Campañas de Brand y, en momentos puntuales del año, más orientadas a la conversión..<br></p>',	'Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo.',	'bonder-y-co',	'foto1_image1.png',	'',	'',	'',	'',	0,	1,	'2018-07-09 12:10:41',	'2018-07-10 08:50:22'),
(3,	'Prado business park',	'3',	'<p><span style=\"font-family: FuturaBook; font-size: 25px; text-align: center;\">Bienvenido a Prado Urban Business Park, el parque de oficinas en el corazón de Madrid, con 55.000m</span><span style=\"margin: 0px; padding: 0px; position: relative; font-size: 18.75px; line-height: 0; vertical-align: baseline; top: -0.5em; font-family: FuturaBook; text-align: center;\">2</span><span style=\"font-family: FuturaBook; font-size: 25px; text-align: center;\">&nbsp;de oficinas situados estratégicamente en el Ensanche-Sur Manzanares. </span></p><p><span style=\"font-family: FuturaBook; font-size: 25px; text-align: center;\">Su excelente red de transporte conecta en pocos minutos con el centro de la ciudad.</span><br></p>',	'<p style=\"margin-bottom: 33px; padding: 0px; color: rgb(2, 60, 78); font-family: Muli;\"><span style=\"margin: 0px 0px -30px; padding: 0px; font-weight: 700; font-size: 22px; display: block;\">SEO</span></p><p style=\"margin-bottom: 33px; padding: 0px; color: rgb(2, 60, 78); font-family: Muli;\">Consultoría, estrategia, adaptación web y linkbuilding en uno de los sectores más competidos de Internet</p><p style=\"margin-bottom: 33px; padding: 0px; color: rgb(2, 60, 78); font-family: Muli;\"><span style=\"margin: 0px 0px -30px; padding: 0px; font-weight: 700; font-size: 22px; display: block;\">SEA</span></p><p style=\"margin-bottom: 33px; padding: 0px; color: rgb(2, 60, 78); font-family: Muli;\">Con competencia tan fuerte y con unos CPCs altísimos, en los pequeños detalles y ajustes finos es donde marcamos la diferencia. Ibiza es un destino mundialmente famoso en el sector del lujo, así que nuestras campañas van desde USA, UK, Rusia, países árabes o Australia.</p><p style=\"margin-bottom: 33px; padding: 0px; color: rgb(2, 60, 78); font-family: Muli;\"><span style=\"margin: 0px 0px -30px; padding: 0px; font-weight: 700; font-size: 22px; display: block;\">Social Ads</span></p><p style=\"margin-bottom: 33px; padding: 0px; color: rgb(2, 60, 78); font-family: Muli;\">Segmentaciones muy exclusivas, campañas de remarketing o Gmail orientado a experiencias de lujo. </p><p style=\"margin-bottom: 33px; padding: 0px; color: rgb(2, 60, 78); font-family: Muli;\"><span style=\"margin: 0px 0px -30px; padding: 0px; font-weight: 700; font-size: 22px; display: block;\">Publicidad online</span></p><p style=\"margin-bottom: 33px; padding: 0px; color: rgb(2, 60, 78); font-family: Muli;\">Orientación exclusiva en el sector lujo. Campañas de Brand y, en momentos puntuales del año, más orientadas a la conversión..</p>',	'Bienvenido a Prado Urban Business Park, el parque de oficinas en el corazón de Madrid.',	'prado-business-park',	'gallery_reception_image1.jpg',	'gallery_outside_vertical_image2.jpg',	'gallery_outside_image3.jpg',	'gallery_cafeteria_image4.jpg',	'urban_prado_18_image5.jpg',	0,	1,	'2018-07-17 06:04:57',	'2018-07-17 06:11:55');

DROP TABLE IF EXISTS `projects_category`;
CREATE TABLE `projects_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `projects_category` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
(1,	'Turismo',	1,	'2018-07-09 11:37:22',	'2018-07-09 11:39:35'),
(2,	'Banca',	1,	'2018-07-09 11:37:45',	'2018-07-09 11:39:33'),
(3,	'Retail',	1,	'2018-07-09 11:37:55',	'2018-07-09 11:39:28'),
(4,	'Sector',	1,	'2018-07-09 11:38:01',	'2018-07-09 11:39:25');

DROP TABLE IF EXISTS `projects_related`;
CREATE TABLE `projects_related` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) NOT NULL,
  `project_id_related` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `project_id_related` (`project_id_related`),
  CONSTRAINT `projects_related_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  CONSTRAINT `projects_related_ibfk_3` FOREIGN KEY (`project_id_related`) REFERENCES `projects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `projects_related` (`id`, `project_id`, `project_id_related`) VALUES
(1,	1,	2);

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `shorttitle` longtext COLLATE utf8_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `quote` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `conclusion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(10) NOT NULL DEFAULT '1',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `services` (`id`, `title`, `shorttitle`, `about`, `description1`, `quote`, `description2`, `conclusion`, `image1`, `image2`, `active`, `slug`, `created_at`, `updated_at`) VALUES
(1,	'Consultoría de eMarketing y desarrollo de estrategia ',	'Consultoría de eMarketing',	'<p>¿Cuánto debo invertir en publicidad en primer año?</p><p>¿Invierto más en desarrollo web?</p><p>¿Apuesto por el SEO con un objetivo a medio plazo?</p><p>¿Debo contratar a un community manager o me centro en social Ads?</p>',	'<p>Todo proyecto se inicia con una idea de negocio y plan de marketing. Las start-ups saben bien que es clave un correcto planteamiento desde el principio, los presupuesto son limitados y un error a la hora de invertir en el proyecto web o en el plan de marketing pueden dilapidar gran parte de nuestra opciones de éxito.<br></p>',	'Llevamos 11 años haciendo crecer negocios online como el tuyo',	'<p>Dominamos el medio, llevamos más de 11 años haciendo crecer negocios online como el tuyo. Hemos aprendido de los éxitos, pero también de los fracasos. Conocemos las tendencias tanto de marketing como de diseño o programación, sabemos hacia dónde se dirige el futuro y es ahí donde podemos llevarte. Con imaginación y creatividad pero con los pies en el suelo, no siguiendo la última moda sino la más eficaz, encontrando nuestro target allá donde no esté saturado de competidores pero sobre todo allá donde sea rentable.</p><p>Desde Thatzad te ayudamos a dar forma a tu idea, presentar best practices, analizar la competencia y a ver cómo se enmarca dentro del mercado.<br></p>',	'<p>Trabajamos contigo para diseñar una estrategia en base a tu presupuesto y tus objetivos. Un plan de marketing que nos ayude a priorizar la inversión publicitaria y definir dónde invertir y cuánto. <br></p>',	'dsc-3408_image1.png',	'slide10_image2.png',	1,	'consultoria-de-emarketing-y-desarrollo-de-estrategia',	'2018-04-11 10:01:33',	'2018-07-10 07:46:16');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(175) COLLATE utf8_unicode_ci NOT NULL,
  `postalcode` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(175) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(175) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `rol` int(10) unsigned NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_rol_foreign` (`rol`),
  KEY `users_status_foreign` (`status`),
  CONSTRAINT `users_rol_foreign` FOREIGN KEY (`rol`) REFERENCES `users_roles` (`id`),
  CONSTRAINT `users_status_foreign` FOREIGN KEY (`status`) REFERENCES `users_status` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `address`, `postalcode`, `city`, `telephone`, `province`, `country_id`, `rol`, `status`, `remember_token`, `fb_id`, `fb_token`, `fb_image`, `google_id`, `google_token`, `google_image`, `created_at`, `updated_at`) VALUES
(1,	'Thatzad',	'Thatzad',	'informacion@thatzad.com',	'$2y$10$ev7xjE2AE.qhiKvut29ZWOG/EPwol6/abyh8.GhJfd.Rivlk3iV16',	'Marques de Mulhacen 11',	'08034',	'Barcelona',	'936350620',	'Barcelona',	209,	1,	1,	'a1dLSJoD5KBrqctstZuhGxlpAF6ZjbglTyEXw3558pJYjyi0TJ72uQATmexs',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2018-03-05 18:07:41',	'2018-04-16 10:34:56');

DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE `users_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users_roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'2018-03-05 18:04:41',	'0000-00-00 00:00:00'),
(2,	'user',	'2018-03-05 18:04:41',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `users_status`;
CREATE TABLE `users_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users_status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'Activo',	'2018-03-05 18:05:41',	'0000-00-00 00:00:00'),
(2,	'Inactivo',	'2018-03-05 18:05:41',	'0000-00-00 00:00:00'),
(3,	'Esperando confirmación',	'2018-03-05 18:05:41',	'0000-00-00 00:00:00'),
(4,	'Eliminado',	'2018-03-05 18:05:41',	'0000-00-00 00:00:00'),
(5,	'Banneado',	'2018-03-05 18:05:41',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `whitepapers`;
CREATE TABLE `whitepapers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `data_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(10) unsigned NOT NULL,
  `home` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `whitepapers` (`id`, `title`, `number`, `description`, `data_file`, `image`, `active`, `home`, `created_at`, `updated_at`) VALUES
(1,	'Guía fácil de aplicación de la LOPD y LSSI para e‐Commerce',	'nº2, Junio 2018',	'Esta guía de aplicación de la LOPD y LSSI para e‐commerce la hemos escrito después de\r\ndocumentarnos mucho y como respuesta a la infinidad de preguntas y dudas que nos hacen nuestros\r\nclientes con tienda online sobre qué han de tener en cuenta a nivel legal.',	'guia-facil-aplicacion-lopd-y-lssi-e-commerce.pdf',	'foto_image.jpg',	1,	1,	'2018-07-13 05:09:56',	'2018-07-18 06:04:15'),
(2,	'El canal de YouTube debería estar en el eje de tu estrategia de contenidos',	'nº1, Junio 2018',	'Hear directly from the people who know it best. From teh to politics to creativity and more -whatever your interest, we’ve got you covered.',	'guia-facil-aplicacion-lopd-y-lssi-e-commerce.pdf',	'captura_de_pantalla_de_2018-07-17_12-52-32_image.png',	1,	0,	'2018-07-13 06:04:13',	'2018-07-18 06:04:02');

-- 2018-07-18 08:51:47
