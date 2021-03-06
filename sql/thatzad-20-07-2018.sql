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
(49,	'ainara.rodriguez@thatzad.com',	'Ainara Rodriguez',	'holaaa',	'936350620',	'www.thatzad.com',	'[\"6\"]',	'No s?? dise??ar una web',	'2018-07-17 15:16:30',	'2018-07-17 15:16:30'),
(50,	'Sdjdjsj@fgh.com',	'Aina',	'Hola',	'G',	'D',	'[\"1\",\"3\",\"5\",\"6\"]',	'Fhjk',	'2018-07-17 15:33:53',	'2018-07-17 15:33:53'),
(51,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'',	'640126331',	'',	'[\"1\",\"2\"]',	'',	'2018-07-18 08:26:52',	'2018-07-18 08:26:52'),
(52,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'',	'640126331',	'',	'[\"1\",\"2\"]',	'',	'2018-07-18 08:28:51',	'2018-07-18 08:28:51'),
(53,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'Amazon',	'640126331',	'',	'[\"1\",\"2\"]',	'',	'2018-07-18 08:30:02',	'2018-07-18 12:05:11'),
(57,	'viktoriia.iukhnina@thatzad.com',	'Viktoriia Iukhnina',	'',	'640126331',	'',	'[\"1\",\"2\"]',	'',	'2018-07-19 15:03:12',	'2018-07-19 15:03:12');

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
(1,	'Euro',	'???',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
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
(1,	'es',	'es_ES',	'Espa??ol',	1,	1,	'2018-03-05 18:09:41',	'0000-00-00 00:00:00'),
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
(1,	'Turismo de Canarias',	'1',	'<p>Con m??s de 13 millones de visitantes, las Islas Canarias son el tercer destino tur??stico del ranking mundial. El Gobierno de Canarias apuesta por Thatzad para atraer a m??s turistas de destinos consolidados y dar a conocernos en pa??ses donde a??n no somos tan reconocidos.</p><p><a href=\"https://www.holaislascanarias.com/\" target=\"_blank\">www.holaislascanarias.com</a><br></p>',	'<p><b>SEA</b></p><p>Campa??as en 17 idiomas, 20.000 keywords, m??s de 500 anuncios activos distintos con una estrategia para atraer nuevos turistas?? distintas con una clara segmentaci??n estrat??gica por zonas geogr??ficas de influencia.</p><p><b>Publicidad online</b><br></p><p>A los turistas se les debe enamorar poco a poco. As?? que las campa??as de Adwords tienen continuidad con campa??as de remarketig, display, Gmail y Youtube.</p><p><b>Consultor??a e-Marketing</b><br></p><p>Benchmark competidores, tanto de portales web como de presencia en redes sociales. Formaci??n in house anal??tica web. Desarrollo de estrategia campa??as online. Desarrollo RFP nuevo portal.</p><p><b>SEO</b></p><p>Consultor??a general y adaptaci??n SEO en diferentes webs<br></p>',	'Con m??s de 13 millones de visitantes, las Islas Canarias son el tercer destino tur??stico del ranking mundial. ',	'turismo-de-canarias',	'bg-base-top_image1.jpg',	'',	'bg-base-top_image3.jpg',	'',	'',	0,	1,	'2018-07-09 12:10:41',	'2018-07-19 12:22:34'),
(2,	'Bonder & Co by Le Colectionist',	'1',	'<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de Espa??a fusionada con una de las m??s importantes del mundo.</p><p>Gestionamos campa??a en los principales pa??ses e idiomas para destinos como Ibiza, Formentera, Mallorca o Marbella. </p><p><a href=\"https://www.bonderco.com/\" target=\"_blank\">www.bonderco.com</a><br></p>',	'<p><b>SEO</b></p><p>Consultor??a, estrategia, adaptaci??n web y linkbuilding en uno de los sectores m??s competidos de Internet</p><p><b>SEA</b></p><p>Con competencia tan fuerte y con unos CPCs alt??simos, en los peque??os detalles y ajustes finos es donde marcamos la diferencia. Ibiza es un destino mundialmente famoso en el sector del lujo, as?? que nuestras campa??as van desde USA, UK, Rusia, pa??ses ??rabes o Australia.</p><p><b>Social Ads</b></p><p>Segmentaciones muy exclusivas, campa??as de remarketing o Gmail orientado a experiencias de lujo.??</p><p><b>Publicidad online</b></p><p>Orientaci??n exclusiva en el sector lujo. Campa??as de Brand y, en momentos puntuales del a??o, m??s orientadas a la conversi??n..<br></p>',	'Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de Espa??a fusionada con una de las m??s importantes del mundo.',	'bonder-y-co',	'slider-home-4_image1.jpg',	'',	'slider-home-4_image3.jpg',	'',	'',	0,	1,	'2018-07-09 12:10:41',	'2018-07-19 12:24:04'),
(3,	'Catalunya Caixa',	'2',	'<p>Uno de los principales bancos espa??oles, desde su fundaci??n Obra Social Catalunya Caixa, nos encarg?? la realizaci??n de diversas campa??as durante dos a??os para dar a conocer multitud de eventos. </p><p>Tras la absorci??n por el grupo BBVA, se paralizaron muchos de estos proyectos.<br></p>',	'<p><b>Campa??a de Publicidad Online</b></p><p>Creamos las campa??as de publicidad para el lanzamiento de CXAgenda y promoci??n el concurso de Videoarte del Festival Deprop 2011. Campa??a en redes sociales, buscadores, inbound marketing y banners.??</p><p><b>Campa??as de Mail Marketing</b></p><p>Realizamos una decena de campa??as de mail marketing dirigidas al target definido en funci??n de cada evento, haciendo Test A/B de las newsletters enviadas y optimizando los mensajes para conseguir los mejores resultados.<br></p>',	'Uno de los principales bancos espa??oles, desde su fundaci??n Obra Social Catalunya Caixa, nos encarg?? la realizaci??n de diversas campa??as durante dos a??os para dar a conocer multitud de eventos.',	'catalunya-caixa',	'imagen-sede-central-catalunya-caixa_713938610_1056513_2375x1024_image1.jpg',	'',	'',	'',	'',	0,	1,	'2018-07-17 06:04:57',	'2018-07-19 12:25:51'),
(4,	'Grupo Los Olivos',	'1',	'<p>En el TOP 3 de los pueblos m??s buscados en Top Rural, Alcal?? del J??car es una de las referencias en turismo rural y deportes de aventura. </p><p>EL Grupo Los Olivos posee las mayores infraestructuras tur??sticas y servicios. Casa rurales, apartamentos tur??sticos, un hotel spa, restaurantes y la empresa l??der en deportes de aventura.</p><p><a href=\"http://www.fincalosolivos.com/\" target=\"_blank\">www.fincalosolivos.com</a><br></p>',	'<p><b>Desarrollo web</b><br></p><p>Dise??o y programaci??n de 7 webs del grupo.</p><p><b>Transformaci??n Digital</b><br></p><p>Consultor??a, dise??o y programaci??n de un gestor de reservas integral para todos los servicios del grupo. Proyecto complejo por la paquetizaci??n de servicios y la posibilidad de contrataci??n online (hotel), telef??nica (casas y apartamentos) o in situ (restaurante y actividades).</p><p><b>SEA</b><br></p><p>MCC propio con cuentas para cada una de las empresas del grupo. El sector tur??stico, en especial el turismo rural obtiene m??s del 80% de las reservas online, as?? que las campa??as de Google Ads al m??s alto nivel son obligatorias. Y m??s si queremos competir de t?? a t?? con Booking en una localidad tan demandada.</p><p><b>Publicidad online</b></p><p>Sin duda, las campa??as de b??squeda en Google nos traen cantidad y calidad de conversiones, pero sus costes son elevados as?? que siempre estamos explorando otras v??as para buscar la m??xima rentabilidad: campa??as de remarketig, mail marketing, display, Gmail???<br></p>',	'Con m??s de 13 millones de visitantes, las Islas Canarias son el segundo destino tur??stico de Espa??a (n?? 3 del ranking mundial). ',	'grupo-los-olivos',	'panoramicafincaexterior_image1.jpg',	'',	'',	'',	'',	0,	1,	'2018-07-19 09:09:42',	'2018-07-19 12:26:44'),
(5,	'Agatha Paris',	'3',	'<p>Agatha Paris es una de las marca internacional de joyer??a con 350 tiendas en Europa, Asia y Oriente medio. En Thatzad trabajamos con Agatha Espa??a en la creaci??n de todas las campa??as para su tienda online. </p><p>La clave de estas campa??as es el dinamismo y agilidad lanzando constantemente nuevos mensajes y siguiendo las ??ltimas tendencias en redes sociales.</p><p><a href=\"https://www.agatha.es/\" target=\"_blank\">www.Agatha.es</a><br></p>',	'<p><b>Campa??as de Social Ads. </b></p><p>Instagram es la red m??s fuerte para el target al que nos dirigimos, as?? que se crearon campa??as de Instagram e Instagram Shopping con todos los formatos creativos que permite la red social. Facebook, con unos CPCs m??s bajos tambi??n aportaba valor para otro target distinto.</p><p><b>Campa??a de Video. </b></p><p>YouTube vuelve a ser un canal muy potente en la creaci??n de marcas, permite m??ltiples opciones de segmentaci??n y muy potente&nbsp; para campa??as de remarketing.</p><p><b>Campa??a de B??squeda</b></p><p>Con un enfoque mucho m??s orientado a ventas que a marca, se crearon diversas campa??as. El objetivo era ofrecer el producto exacto que buscaba cada usuaria, eso en el sector moda es complicado por la creaci??n de tendencias tremendamente fugaces.</p>',	'Agatha Paris es una de las marca internacional de joyer??a con 350 tiendas en Europa, Asia y Oriente medio. En Thatzad trabajamos con Agatha Espa??a en la creaci??n de todas las campa??as para su tienda online.',	'agatha-paris',	'agatha-paris_image1.jpg',	'',	'',	'',	'',	0,	1,	'2018-07-19 11:20:29',	'2018-07-19 11:20:29'),
(6,	'Tiziana Shoes',	'3',	'<p>Lanzar una nueva marca siempre es complicado, requiere un buen concepto, buen producto, y un buen equipo. Tiziana cumple esos requisitos.Es una marca de zapatos para chicas j??venes que sigue las tendencias que se crean casi en el mismo mes, al ser fabricaci??n espa??ola, pueden ser muy ??giles a la hora de crear microcolecciones. </p><p>Ello exige, por parte de la agencia, much??sima agilidad en la creaci??n y lanzamiento de las campa??as.&nbsp;</p><p><a href=\"https://tiziana.shoes/\" target=\"_blank\">www.tiziana.shoes</a><br></p>',	'<p><b>Desarrollo e-commerce</b></p><p>Conceptualizaci??n, dise??o y programaci??n de la e-shop. EL briefing fue una web muy joven, fresca pero con personalidad, no una tienda minimalista siguiendo la l??nea austera de Zara. No somos Zara, tenemos que crear una marca. Lo primero que propusimos fue comprar un dominio que marcase un estilo.</p><p><b>Campa??as de Social Ads.</b></p><p>Instagram es la red social clave en el sector femenino entre 16 y 30 a??os, as?? que es ah?? donde lanzamos todas las campa??as, tanto de marca como de producto. Facebook, con unos CPCs m??s bajos tambi??n aporta volumen de trafico.</p><p><b>SEA</b></p><p>Campa??as en Google Ads para todas las keywords ligadas a microtendencias en zapatos de chocas j??venes. Apto s??lo para expertas en el sector.</p><p><b>Google Shopping</b></p><p>Un buen canal si tienes precios competitivos y buenos m??rgenes.</p><p><b>Publicidad online</b></p><p>Campa??as de banners para crear marca, as?? como remarketig, mail marketing, display o Gmail para generar ventas.</p>',	'Es una marca de zapatos para chicas j??venes que sigue las tendencias que se crean casi en el mismo mes, al ser fabricaci??n espa??ola, pueden ser muy ??giles a la hora de crear microcolecciones.',	'tiziana-shoes',	'9_image1.jpg',	'',	'',	'',	'',	0,	1,	'2018-07-19 11:24:13',	'2018-07-19 11:24:13'),
(7,	'Mi&Co',	'3',	'<p>Mi&amp;Co es una marca de moda ya consolidada que plantea una fase de expansi??n. Tanto nacional como internacional. Con Mi&amp;co hemos trabajado desde sus inicios y hemos ayudado a esa consolidaci??n de la marca desde el canal online. </p><p>Muy fuertes y expertos en el vertical de bikinis y ba??adores pero con prendas calidad y ??ltimas tendencias en todas sus colecciones. Estilo y target muy definidos.</p><p><a href=\"http://www.miandco.es/\" target=\"_blank\">www.miandco.es</a><br></p>',	'<p><b>Desarrollo e-commerce</b></p><p>Dise??o y programaci??n de varias de sus e-shops en todos estos a??os. Integraci??n con sus sistemas de gesti??n de facturaci??n y stock de almacenes.</p><p><b>Campa??as de Social Ads</b></p><p> Instagram vuelve a ser la red social ganadora para el target al que nos dirigimos, as?? que es ah?? donde lanzamos todas las campa??as, tanto a nivel nacional como en Francia, Alemania, UK y USA. Los formatos publicitarios que ofrece Facebook tambi??n aporta posibilidades.</p><p><b>SEA</b></p><p>Campa??as en Google Ads para su vertical de bikinis y ba??adores de chica.</p><p><b>Publicidad online</b></p><p>Campa??as de banners tanto remarketig como en webs de moda y blogs de tendencias.</p><p><b>Mail Marketing</b></p><p>Contrataci??n de envios publicitarios externos sobre bases de datos del sector moda.</p>',	'Mi&Co es una marca de moda ya consolidada que plantea una fase de expansi??n. Tanto nacional como internacional. Con Mi&co hemos trabajado desde sus inicios y hemos ayudado a esa consolidaci??n de la marca desde el canal online.',	'mi-and-co',	'coleccin-de-bikinis-2018_image1.jpg',	'',	'',	'',	'',	0,	1,	'2018-07-19 11:27:44',	'2018-07-19 11:27:44'),
(8,	'Bynapp',	'4',	'<p>La aplicaci??n m??vil n??mero uno para comunicar a los colegios con los padres de los alumnos. </p><p>Una APP que facilita enormemente el trabajo a los directores y profesores y permite una comunicaci??n mucho m??s directa , segura y sin gasto de papel (quien tenga hijos en edad escolar sabe de qu?? hablamos ;)</p><p><a href=\"http://www.bynapp.com\">www.bynapp.com</a><br></p>',	'<p><b>Desarrollo APP</b></p><p>Dise??o y programaci??n de la APP. Es su core business, as?? que utilizamos SCRUM y metodolog??as ??giles en todos los proyectos de mejora continua de la APP&nbsp; &nbsp;</p><p><b>Desarrollo web</b></p><p>Dise??o y programaci??n de web en 16 idiomas.</p><p><b>Publicidad online</b></p><p>Para ayudar a dar a conocer la APP entre profesores y directores de colegio se han creado diferentes estrategias de marketing online, desde creaci??n de contenidos mezclado con remarketing como campa??as de mail o banners en webs del sector.</p><div><br></div>',	'La aplicaci??n m??vil n??mero uno para comunicar a los colegios con los padres de los alumnos. ',	'bynapp',	'bg-desktop_image1.png',	'',	'',	'',	'',	0,	1,	'2018-07-19 11:37:53',	'2018-07-19 11:37:53'),
(9,	'Olympus',	'5',	'<p>Olympus es una multinacional japonesa de muy reconocido prestigio, tiene una importante notoriedad de marca en sus l??neas de consumo tanto de fotograf??a como de grabadoras digitales, pero donde realmente son l??deres es en el sector profesional: equipos m??dicos y microscopios.</p><p><a href=\"https://www.olympus.es/\" target=\"_blank\">www.olympus.es</a><br></p>',	'<p><b>Consultor??a de Marketing online</b></p><p>Junto al equipo de Olympus le dimos muchas vueltas para encontrar la forma de acercar su l??nea de grabadoras digitales al mundo del podcast. Para ello creamos un portal de audio en la l??nea 2.0 de la ??poca, donde los usuarios pod??an subir, compartir y descargar audios, lo dotamos de contenidos e hicimos una campa??a integral para su lanzamiento.</p><p><b>Campa??a integral de publicidad online</b></p><p>Tras el lanzamiento del portal Espacio Podcast se fueron realizando campa??as peri??dicas para captar nuevos usuarios y nuevos oyentes. Campa??as CPM, CPC y CPL. En Myspace, Tuenti, Facebook y muchos medios online del pleistoceno.</p><p><b>Campa??a Adwords<br></b></p><p>Paralelamente se fue manteniendo una campa??a en buscadores para conseguir \"usuarios activos\" y \"usuarios pasivos\".</p>',	'Olympus es una multinacional japonesa de muy reconocido prestigio, tiene una importante notoriedad de marca en sus l??neas de consumo tanto de fotograf??a como de grabadoras digitales, pero donde realmente son l??deres es en el sector profesional: equipos m??dicos y microscopios.',	'olympus',	'captura_de_pantalla_de_2018-07-19_15-41-38_image1.png',	'',	'',	'',	'',	0,	1,	'2018-07-19 11:42:05',	'2018-07-19 11:42:05'),
(10,	'Applus+',	'3',	'<p>Es la empresa espa??ola m??s importante de inspecci??n, certificaci??n y test y tienen oficinas en m??s de 40 pa??ses de los 5 continentes. La mayor parte de la gente les conoce por las ITV de veh??culos pero el grueso de su negocio proviene de certificaciones en el sector industrial, automoci??n, energ??a, transporte???</p><p><a href=\"http://www.applus.com\" target=\"_blank\">www.applus.com</a><br></p>',	'<p><b>Web Benchmark</b></p><p>An??lisis de los diferentes modelos de arquitectura web del sector y grandes corporaciones multinacionales. Estudio de integraci??n de sites del grupo Applus+ y su relaci??n entre ellas. Best practises para mejorar la orientaci??n comercial de la p??gina corporativa.??</p><p><b>SEO Benchmark</b></p><p>An??lisis del posicionamiento natural para todos los servicios ofrecidos (propio y de los 10 principales competidores). Sus posiciones org??nicas, los par??metros t??cnicos de los sites de las diferentes divisiones, propuesta de quick wins y mejoras estructurales a largo plazo.??<br></p><p><b>Consultor??a SEO</b></p><p>Consultor??a e implementaci??n de quick wins de todas las divisiones de Applus+ Corporaci??n. Adaptaci??n SEO nueva web de Applus+ ITV con un ??xito total de resultados.??<br></p><p><b>Campa??a Adwords</b></p><p>Campa??a de alto impacto para Applus+ ITV<br></p>',	'Es la empresa espa??ola m??s importante de inspecci??n, certificaci??n y test y tienen oficinas en m??s de 40 pa??ses de los 5 continentes.',	'applus',	'header_home_estructurales_gr_web_1_image1.jpg',	'',	'',	'',	'',	0,	1,	'2018-07-19 11:45:09',	'2018-07-19 12:15:44'),
(11,	'Centro Comercial La Maquinista',	'3',	'<p>Es el centro comercial m??s grande de Barcelona y el ??nico abierto. El reto era generar tr??fico de la zona de influencia (barrios y publos pr??ximos) hacia el centro para promocionar la planta de ocio y gastronom??a y no ??nicamente las tiendas.</p><p><a href=\"https://www.lamaquinista.com/\" target=\"_blank\">www.lamaquinista.com</a><br></p>',	'<p><b>Campa??a Facebook</b></p><p>Campa??a para dar a conocer el nuevo espacio gastron??mico en Facebook Ads.&nbsp;</p><p><b>Campa??a Display</b></p><p>Campa??a de banners en diferentes medios con una clara segmentaci??n geogr??fica.&nbsp;</p><p><b>Campa??a Google Adwords</b></p><p>Apoyando la estrategia de Facebook y Display.</p>',	'Es el centro comercial m??s grande de Barcelona y el ??nico abierto. El reto era generar tr??fico de la zona de influencia (barrios y publos pr??ximos) hacia el centro para promocionar la planta de ocio y gastronom??a y no ??nicamente las tiendas.',	'centro-comercial-la-maquinista',	'la-maquinista-reasonwhy_image1.es__image1.jpg',	'',	'',	'',	'',	0,	1,	'2018-07-19 11:47:37',	'2018-07-19 11:47:37'),
(12,	'Centro Comercial Les Gl??ries',	'3',	'<p>En pleno 22@, el Centro Comercial Gl??ries, ha sido desde sus inicios y m??s desde su remodelaci??n en la referencia de compras en l???Eixample barcelon??s.</p><p><a href=\"https://www.glories.com/\" target=\"_blank\">www.glories.com</a><br></p>',	'<p><b>Desarrollo Facebook APP</b></p><p>Durante las obras de remodelaci??n se cre?? un videojuego tipo comecocos llamado Rompetochos. Se dise??aron todas las pantallas y personajes a medida. Se hizo un ramking de puntuaciones y se pod??an conseguir premios entre los mejores. Fue todo un ??xito. </p><p><a href=\"http://www.thatzblog.com/lanzamos-un-videojuego-en-facebook-para-el-centro-comercial-glories/\" target=\"_blank\">http://www.thatzblog.com/lanzamos-un-videojuego-en-facebook-para-el-centro-comercial-glories/&nbsp;</a><br></p>',	'En pleno 22@, el Centro Comercial Gl??ries, ha sido desde sus inicios y m??s desde su remodelaci??n en la referencia de compras en l???Eixample barcelon??s.',	'centro-comercial-les-glories',	'1479404552_724793_1479404750_noticia_normal_image1.jpg',	'',	'',	'',	'',	0,	1,	'2018-07-19 11:50:10',	'2018-07-19 11:50:10'),
(13,	'Vogel???s',	'5',	'<p>No lo es a??n en ventas pero s?? es la marca l??der mundial de soportes en calidad, premios y dise??o. Es una multinacional holandesa especializada en soportes para pantallas, tv, altavoces, tablets, proyectores y equipos profesionales de digital sinage y videowalls.</p><p>Desde Thatzad trabajamos casi en forma de implant con la filial espa??ola pero tambi??n realizamos proyectos de consultor??a para las oficinas centrales de Holanda.</p><p><a href=\"https://www.vogels.com\" target=\"_blank\">www.vogels.com</a><br></p>',	'<p><b>Consultor??a e-Marketing</b></p><p>Estrategia de e-marketing y publicidad. Gesti??n integral de la marca en los canales digitales, tanto en la propia web como supervis??ndola en la web de los distribuidores online como Mediamarkt, Carrefour, FNAC o El Corte Ingl??s.</p><p><b>Campa??as online</b></p><p>Campa??as integrales tanto de banners como social ads en Facebook, Instagram y Twitter. Campa??as ligadas a marca pero tambi??n a eventos epec??ficos como Mundial, Eurocopa, Navidades, black Friday....</p><p><b>SEA</b></p><p>Campa??as en Google Ads completa para totas sus l??neas de producto de gran consumo y profesional</p><p><b>SEO</b></p><p>Definici??n de estrategia de keywords y auditor??a SEO de la nueva web. Consultor??a y redireccionamiento URLs tras la migraci??n. Linkbuilding y generaci??n de contenido en el blog en funci??n de la estrategia de keywords planteada.</p><p><b>Content Marketing</b></p><p>En las diferentes estrategias de marketing que se definen cada a??o (tecnolog??a, decoraci??n, cine???) se plantea una estrategia de contenidos y negociamos su publicaci??n en medios afines al target.</p>',	'No lo es a??n en ventas pero s?? es la marca l??der mundial de soportes en calidad, premios y dise??o. Es una multinacional holandesa especializada en soportes para pantallas, tv, altavoces, tablets, proyectores y equipos profesionales de digital sinage y videowalls. \r\n',	'vogels',	'vogels-motionsoundmount-t1-deskt_2_image1.jpg',	'',	'',	'',	'',	0,	1,	'2018-07-19 11:53:36',	'2018-07-19 11:53:36'),
(14,	'Federaci??n Catalana de F??tbol',	'4',	'<p>Llevamos muchos a??os Colaborando muy estrechamente con la Federaci??n Catalana de F??tbol, es una de las organizaciones m??s grandes del pa??s, cada fin de semana congrega m??s de 200.000 personas entre futbolistas, familiares, seguidores, t??cnicos??? son 5.500 partidos cada fin de semana, desde alevines de 4 a??os hasta veteranos de todas las edades.</p><p><a href=\"http://fcf.cat/\" target=\"_blank\">www.fcf.cat</a><br></p>',	'<p><b>Desarrollo APP</b></p><p>El primer encargo fue el dise??o y programaci??n de una APP abierta para mostrar resultados, calendarios, actas de partidos, goleadores??? el a??o siguiente se nos encarg?? otra APP para el portal del federado, donde los jugadores realizan todas las gestiones, pagan las cuotas, tramitan partes de baja con la mutua, tiene galer??a de fotos y videos??? El siguiente a??o se nos pidi?? otra APP para la intranet de Clubs, ??sta con a??n m??s funcionalidades: correo federativo, sanciones, apelaciones, actas, altas y bajas de jugadores, firma segura???????</p><p><b>Gesti??n de publicidad en sus soportes</b></p><p> Entre la web y la APP pueden llegan a tener 100 millones de p??ginas vistas en un mes, desde Thatzad ayudamos a monetizar ese tr??fico instalando un Adserver y optimizando las diferentes redes para maximizar los ingresos publicitarios.</p><p><b>Campa??as integrales de publicidad online</b></p><p>Con motivo de los diferentes partidos de la selecci??n catalana, hemos realizado campa??as integrales de banners, redes sociales o YouTube</p>',	'Llevamos muchos a??os Colaborando muy estrechamente con la Federaci??n Catalana de F??tbol, es una de las organizaciones m??s grandes del pa??s, cada fin de semana congrega m??s de 200.000 personas entre futbolistas, familiares, seguidores, t??cnicos???',	'federacion-catalana-de-futbol',	'2018-07-18-16_52_19_portada_slider_image1.jpg',	'',	'',	'',	'',	0,	1,	'2018-07-19 12:09:38',	'2018-07-19 12:13:46');

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
(3,	'Moda',	1,	'2018-07-09 11:37:55',	'2018-07-19 11:18:23'),
(4,	'Servicios',	1,	'2018-07-09 11:38:01',	'2018-07-19 11:30:05'),
(5,	'Consumo',	1,	'2018-07-19 11:39:43',	'2018-07-19 11:39:43');

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
(12,	12,	11),
(13,	1,	2),
(14,	2,	1),
(15,	3,	1),
(16,	4,	1),
(17,	4,	2);

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
(1,	'Consultor??a de eMarketing y desarrollo de estrategia ',	'Consultor??a de eMarketing',	'<p>??Cu??nto debo invertir en publicidad en primer a??o?</p><p>??Invierto m??s en desarrollo web?</p><p>??Apuesto por el SEO con un objetivo a medio plazo?</p><p>??Debo contratar a un community manager o me centro en social Ads?</p>',	'<p>Todo proyecto se inicia con una idea de negocio y plan de marketing. Las start-ups saben bien que es clave un correcto planteamiento desde el principio, los presupuesto son limitados y un error a la hora de invertir en el proyecto web o en el plan de marketing pueden dilapidar gran parte de nuestra opciones de ??xito.</p><p>Dominamos el medio, llevamos m??s de 12 a??os haciendo crecer negocios online como el tuyo. Hemos aprendido de los ??xitos, pero tambi??n de los fracasos. Conocemos las tendencias tanto de marketing como de dise??o o programaci??n, sabemos hacia d??nde se dirige el futuro y es ah?? donde podemos llevarte. Con imaginaci??n y creatividad pero con los pies en el suelo, no siguiendo la ??ltima moda sino la m??s eficaz, encontrando nuestro target all?? donde no est?? saturado de competidores pero sobre todo all?? donde sea rentable.</p><p>Desde Thatzad te ayudamos a dar forma a tu idea, presentar best practices, analizar la competencia y a ver c??mo se enmarca dentro del mercado.&nbsp;<br></p>',	'Llevamos 12 a??os haciendo crecer negocios online como el tuyo',	'<p>Dominamos el medio, llevamos m??s de 11 a??os haciendo crecer negocios online como el tuyo. Hemos aprendido de los ??xitos, pero tambi??n de los fracasos. Conocemos las tendencias tanto de marketing como de dise??o o programaci??n, sabemos hacia d??nde se dirige el futuro y es ah?? donde podemos llevarte. Con imaginaci??n y creatividad pero con los pies en el suelo, no siguiendo la ??ltima moda sino la m??s eficaz, encontrando nuestro target all?? donde no est?? saturado de competidores pero sobre todo all?? donde sea rentable.</p><p>Desde Thatzad te ayudamos a dar forma a tu idea, presentar best practices, analizar la competencia y a ver c??mo se enmarca dentro del mercado.<br></p>',	'<p>Trabajamos contigo para dise??ar una estrategia en base a tu presupuesto y tus objetivos. Un plan de marketing que nos ayude a priorizar la inversi??n publicitaria y definir d??nde invertir y cu??nto.??<br></p>',	'dsc-3408_image1.png',	'slide10_image2.png',	1,	'consultoria-de-emarketing-y-desarrollo-de-estrategia',	'2018-04-11 10:01:33',	'2018-07-18 07:57:54'),
(2,	'Dise??o web y usabilidad',	'Dise??o web y usabilidad',	'<p>Una web no s??lo debe gustarte, debe vender<br></p>',	'<p>Ideamos, dise??amos y programamos proyectos web realmente diferentes. Proyectos totalmente a medida, creados sobre un lienzo en blanco.&nbsp;</p><p>Donde los conceptos los define el departamento de Marketing y es el departamento de Dise??o y experiencia de usuario (UX) quien da forma y crea el arte final de la web.</p><p>La parte est??tica es muy importante, tenemos apenas 3 segundos para enamorar al visitante, es entonces cuando los mensajes clave deben crear el engagement adecuando que le haga seguir navegando. La <b>usabilidad</b> de la web es quien debe conseguir que sea muy f??cil para el visitante llegar a lo que est?? buscando.</p><p>El ??ltimo concepto clave es la <b>convertibilidad</b>, es la capacidad de nuestra web de vender m??s, son las t??cnicas de neuromarketing que marcan la diferencia entre el ya me lo mirar?? con calma otro d??a y el cerrar una venta en ese instante.<br></p>',	'Llevamos 11 a??os haciendo crecer negocios online como el tuyo',	'<p>La parte est??tica es muy importante, tenemos apenas 3 segundos para enamorar al visitante, es entonces cuando los mensajes clave deben crear el engagement adecuando que le haga seguir navegando. La usabilidad de la web es quien debe conseguir que sea muy f??cil para el visitante llegar a lo que est?? buscando.</p><p>El ??ltimo concepto clave es la convertibilidad, es la capacidad de nuestra web de vender m??s, son las t??cnicas de neuromarketing que marcan la diferencia entre el ya me lo mirar?? con calma otro d??a y el cerrar una venta en ese instante.</p>',	'<p>En Thatzad dise??amos webs diferentes, uniendo todos estos conceptos para as?? conseguir tus objetivos de negocio<br></p>',	'',	'',	1,	'diseno-web-y-usabilidad',	'2018-07-18 07:45:50',	'2018-07-18 07:59:09'),
(3,	'Programaci??n web',	'Programaci??n web',	'<p>Programaci??n 100% a medida, ??gil y de la m??xima calidad<br></p>',	'<p>El trabajo del equipo de programaci??n nunca debe lucir, una web, simplemente, debe funcionar perfecta, con una velocidad de carga ??gil, optimizada para buscadores y accesible para los diferentes dispositivos, navegadores o sistemas operativos. El equipo de programaci??n s??lo es visible cuando las cosas fallan pero eso no pasa en Thatzad.</p><p>Trabajamos con una metodolog??a de proyectos que nos permite ser muy ??giles en la relaci??n con los Clientes, cumplir estrictamente los plazos y entregar un software con un c??digo de gran calidad.</p><p>Disponemos de un equipo propio de programaci??n, es multidisciplinar y disponemos de especialistas de frontend y de backend.</p>',	'Un equipo experto capaz de aplicar la tecnolog??a adecuada a cada proyecto. ',	'',	'<p>Aunque tenemos experiencia y gestionamos proyectos con CMS comerciales (Wordpress, Prestashop o Magento), la mayor parte de nuestros proyectos son programados a medida HTML5, PHP5 con frameworks de Laravel, Ionik, Angular,??? <b>Un equipo experto capaz de aplicar la tecnolog??a adecuada a cada proyecto</b>.??<br></p>',	'',	'',	1,	'programacion-web',	'2018-07-18 08:00:52',	'2018-07-18 08:32:35'),
(7,	'Programaci??n apps',	'Programaci??n apps',	'<p>La navegabilidad y experiencia de usuario se hacen imprescindibles<br></p>',	'<p>Si en web prima mucho el dise??o para cautivar, las APPs han de dise??arse para ser perfectamente funcionales. La navegabilidad y experiencia de usuario son la clave para el ??xito de una aplicaci??n m??vil.</p><p>En Thatzad tenemos experiencia, ya en 2013 dise??amos un juego infantil para padres e hijos, posteriormente hemos hecho una aplicaci??n para la intercomunicaci??n entres padres y centros escolares, una premiada para geri??tricos, otra para una mutua de deportistas?? adem??s de portales, herramientas e intranets para la Federaci?? Catalana de Futbol. Experiencias variadas y complejas.</p>',	'Te ayudamos en la conceptualizaci??n, dise??o, programaci??n y campa??as',	'',	'<p>????Tienes en mente crear una APP? Te ayudamos en la conceptualizaci??n, dise??o, programaci??n y campa??as de publicidad para generar descargas e incentivar su uso.<br></p>',	'',	'',	1,	'programacion-apps',	'2018-07-18 08:07:53',	'2018-07-18 08:33:17'),
(8,	'SEO',	'SEO',	'<p>El SEO como origen de la estrategia web<br></p>',	'<p>Siempre se hab??a asociado el SEO a estar en las primeras posiciones de Google para alguna palabra clave. Los constantes cambios en el algoritmo y sobre todo, la presi??n de Adwords para copar las primeras posiciones, ha hecho que la importancia y las estrategias SEO hayan cambiado mucho.</p><p>Ya no nos obsesionamos con una palabra concreta, generamos tr??fico a partir de docenas de keywords de menor relevancia pero que la suma de todas puede implicar gran volumen, ya no medimos por la posici??n en la que estamos, sino por la cantidad y calidad de visitas que generamos.</p><p>En Thatzad, planteamos el SEO como una filosof??a de trabajo basada en <b>tres palancas: arquitectura de la web, creaci??n de contenidos y difusi??n</b> de los mismos. El SEO es tan importante porque va de la maro y dirige la estrategia de contenidos que alimenta el Inbound marketing, que se relaciona con las redes sociales o con las campa??as de influencers. Y sin un buen SEO, nuestras campa??as de Adwords ser??n una ruina.<br></p>',	'El SEO ya no tiene el protagonismo de anta??o pero sigue siendo el punto clave por donde deber??a empezar cualquier proyecto onlne',	'',	'<p>El SEO ya no tiene el protagonismo de anta??o pero sigue siendo el punto clave por donde deber??a empezar cualquier proyecto onlne, y en Thatzad eso lo sabemos hacer especialmente bien.<br></p>',	'',	'',	1,	'seo',	'2018-07-18 08:08:38',	'2018-07-18 08:33:33'),
(9,	'SEA',	'SEA',	'<p>Somos Google Adwords Premier Partner<br></p>',	'<p>No es una acreditaci??n al alcance de todos, nos obliga a seguir unos est??ndares de calidad, a pasar diversos ex??menes anuales y a demostrar una experiencia m??s que contrastada.</p><p>La primera acreditaci??n la conseguimos en 2009 y despu??s de estos a??os gestionamos casi 1,5 millones de euros al a??o en campa??as con apenas una veintena de cuentas escogidas.<br></p><p>Adwords se ha convertido en la pieza clave de la mayor??a de estrategia de e-marketing, pues parte de una necesidad que el Cliente busca satisfacer. Esa proactividad hace que suela ser el canal que m??s acerque la oferta y la demanda.&nbsp;</p><p>Pero el alza de los costes por clic, fijados mediante subasta, y la complejidad de las nuevas funcionalidades de Google requieren de una gesti??n totalmente profesional para que las campa??as sean rentables.<br></p>',	'Llevamos 12 a??os haciendo crecer negocios online como el tuyo',	'',	'<p>En Thatzad gestionamos las campa??as con mimo para optimizar al m??ximo la inversi??n, con estrategias bien planteadas, en base a los objetivos de negocio y no de clics, primando la calidad sobre la cantidad. Supervisando constantemente los resultados y testeando nuevas formas de sacarle el m??ximo partido a la inversi??n. Un equipo experimentado, implicado y 100% efectivo.<br></p>',	'',	'',	1,	'sea',	'2018-07-18 08:09:31',	'2018-07-18 08:09:31'),
(10,	'Publicidad online',	'Publicidad online',	'<p>Campa??as de publicidad online que conectan exactamente con el cliente que buscas<br></p>',	'<p>Ideamos campa??as de banners y video realmente efectivas, que nos ayuden a generar ventas impulsivas o a lanzar una marca o un producto enamorando poco a poco.</p><p>En THATZAD nos encargamos de definir la estrategia, el calendario, los formatos, segmentaciones, de generar las creatividades y dise??ar el plan de medios. Negociamos la contrataci??n de canales y soportes online y trabajamos con las plataformas m??s punteras que nos garantizan los mejores precios y condiciones en la compra de espacios publicitarios.</p><p>Pero lo que dise??as sobre el papel luego puede hacer responder mejor o peor al mercado, as?? que <b>la clave de toda campa??a de publicidad online es medir constantemente, ver que creatividades funcionan mejor, qu?? medios y canales son m??s rentables o qu?? landing pages convierten m??s.&nbsp;</b></p>',	'Llevamos 12 a??os haciendo crecer negocios online como el tuyo',	'',	'<p>Hemos de hacer test y analizar resultados para as?? optimizar el presupuesto y conseguir conectar exactamente con el cliente que nos acabe contratando. Desde THATZAD te ayudamos a llevar a cabo esa estrategia con campa??as integrales para hacer crecer tu negocio.<br></p>',	'',	'',	1,	'publicidad-online',	'2018-07-18 08:10:34',	'2018-07-18 08:10:34'),
(11,	'Social Ads',	'Social Ads',	'<p>Hiper segmentaci??n para llegar exactamente a nuestro buyer persona<br></p>',	'<p>No hay duda de que Google es una importante fuente de tr??fico de calidad pero est?? limitado a la gente que busca nuestros productos o servicios. Si de verdad queremos ampliar mercados y crear una marca fuerte es imprescindible una dise??ar una campa??a de publicidad en Internet, y las redes sociales pueden ser un excelente aliado.</p><p>Si algo tienen las Redes sociales es que conocen muy bien los gustos e intereses de sus usuarios, as?? que podemos crear campa??as online segmentando muy bien no s??lo al cliente potencial al que nos dirigimos sino que exactamente a ese buyer persona.??</p><p>Facebook, Instagram, Twitter, LinkedIn, Youtube, Gmail,??? cada red nos permite llegar a un p??blico concreto en un momento de compra distinto.??</p>',	'Social Ads con un equipo especialista, experimentado, creativo y orientado totalmente a objetivos.',	'',	'<p>La creatividad y la estrategia vuelven a ser la clave de todo. Dise??amos campa??as de Social Ads con un equipo especialista, experimentado, creativo y orientado totalmente a objetivos.<br></p>',	'',	'',	1,	'social-ads',	'2018-07-18 08:11:22',	'2018-07-18 08:33:58'),
(12,	'Medios e influencers',	'Medios e influencers',	'<p>El poder de los medios masivos con la m??xima eficacia<br></p>',	'<p>Quien conozca los entresijos de internet sabr?? que los medios online, blogs e influencers son un canal de alt??simo impacto con un lenguaje propio.??</p><p>Nos permite tener embajadores que difundan los beneficios de la marca mediante contenido de inter??s, creado espec??ficamente para el p??blico de ese medio o para los seguidores concretos de ese influencer. Eso dispara las interacciones, la viralizaci??n y el boca-oreja.</p><p>En Thatzad abordamos este tipo de campa??as con dos enfoques muy claros, CREATIVIDAD y NEGOCIO. Ideas creativas para que lleguen al p??blico y no pasen desapercibidas y visi??n de negocio para que las acciones hechas no s??lo hagan ruido, sino que tengan un impacto claro y medible en las ventas.</p><ul><li>Definimos los objetivos de negocio<br></li><li>Dise??amos la idea creativa</li><li>Desarrollamos los contenidos</li><li>Seleccionamos medios e influencers</li><li>Negociamos los mejores precios</li><li>Lanzamos las campa??as, medimos resultados y ajustamos estrategias</li><li>Enlazamos campa??as de seguimiento para aprovechar al m??ximo el ruido generado</li></ul>',	'La f??rmula del ??xito en el lanzamiento o reposicionamiento de marcas',	'',	'<p>La f??rmula del ??xito en el lanzamiento o reposicionamiento de marcas pasa por una buena campa??a de content marketing combniada con estrategias de remarketing, mail e inbound.<br></p>',	'',	'',	1,	'medios-e-influencers',	'2018-07-18 08:12:43',	'2018-07-18 08:36:36'),
(13,	'Inbound marketing',	'Inbound marketing',	'',	'<p>El Inbound marketing es una estrategia que intenta llegar a nuestro cliente potencial de una forma poco intrusiva, haciendo que sea ??l el que nos encuentre y aport??ndole valor en cada uno de los momentos del proceso de compra.</p><p>Cada buyer persona (o comprador individual) tiene unas necesidades que cubrir en cada una de las fases de compra del modelo AIDA (Atenci??n ??? Inter??s ??? Decisi??n ??? Acci??n). Desde Thatzad planteamos el inbound marketing como una combinaci??n de diferentes t??cnicas de marketing online (content marketing, SEO, mail, remarketing???) para estar presentes en todas esas fases cubriendo esas necesidades.</p><p>Dise??amos estrategias creativas para atraer a un cliente concreto y posteriormente ir persuadi??ndole poco a poco y en diferentes medios hasta llegar a la venta.</p><ul><li>Definimos los diferentes buyer-persona</li><li>Planteamos sus necesidades en las diferentes fases de compra</li><li>Definimos la forma m??s efectiva de llegar a ??l en cada fase</li><li>Creamos estrategias para acompa??arle hasta la conversi??n</li><li>Seguimos trabajando la fidelizaci??n y recompra&nbsp;</li></ul>',	'Dise??amos estrategias creativas para atraer a un cliente concreto',	'',	'<p>Dise??amos estrategias creativas para atraer a un cliente concreto y posteriormente ir persuadi??ndole poco a poco y en diferentes medios hasta llegar a la venta.<br></p>',	'',	'',	1,	'inbound-marketing',	'2018-07-18 08:16:11',	'2018-07-18 08:16:11'),
(14,	'Automation marketing',	'Automation marketing',	'',	'<p>El Automation marketing o marketing autom??tico permite, mediante software especializado, conocer mucho m??s las motivaciones de los clientes a interactuar con nuestra web y realizar acciones autom??ticas que nos lleven m??s ??gilmente a la conversi??n. Conseguimos hacer acciones masivas pero personalizadas.</p><p>Existen dos enfoques distintos:</p><ul><li>Automation marketing para B2B: donde el objetivo inicial es cualificar y madurar una buena base de datos, con el fin de detectar los registros que est??n m??s preparados para recibir una oferta comercial.</li><li>Automation marketing para B2C: donde el objetivo es conocer al cliente y acompa??arle a la venta con acciones de recuperaci??n de carritos de compra, personalizaci??n de la oferta o acciones de fidelizaci??n y recompra.&nbsp;</li></ul>',	'Conseguimos hacer acciones masivas pero personalizadas.',	'',	'<p>Instalar cualquiera de los diferentes sofwares que hay en el mercado es sencillo, en lo que realmente aportamos valor desde Thatzad es en definir correctamente todos los workflows de inter??s e idear acciones creativas que enganchen a cada una de esas personas.<br></p>',	'',	'',	1,	'automation-marketing',	'2018-07-18 08:16:59',	'2018-07-18 08:16:59'),
(15,	'Proyectos de e-Commerce',	'Proyectos de e-Commerce',	'<p>??Quieres saber c??mo haremos que tu proyecto de e-Commerce sea un ??xito? Descubre c??mo lo planteamos en Thatzad.<br></p>',	'<p>El comercio electr??nico alcanz?? en 2016 los 22MM de ???, eso supone un 11% de todas las compras minoristas. Hay mucho negocio pero cada vez m??s competidores, los m??rgenes se reducen y hemos de ser capaces de optimizar nuestras tiendas online.</p><p>En Thatzad ideamos campa??as que no traigan visitantes sino compradores, con segmentaciones muy pensadas, mensajes adaptados a cada target y creatividades a cada canal.&nbsp;</p><p>El siguiente paso es que nuestra tienda online sea nuestro mejor vendedor, que sea perfecta, con una tasa de conversi??n optimizada (CRO). Cuidando todos los detalles de usabilidad, presencia de marca, lucimiento de productos, generaci??n de confianza, persuabilidad???</p><p>Fidelizaci??n, palanca de futuro en e-commerce</p><p>Pero es cara generar la primera venta online de un cliente, as?? que debemos potenciar mucho m??s las revisitas y segundas compras. Debemos inventar nuevas formas de aplicar conceptos tradicionales de fidelizaci??n. Mediante campa??as de mail marketing, remarketing, Social Ads, push notifications, marketing automation y muchas otras que desarrollemos pensando en ti.</p>',	'Fidelizaci??n, palanca de futuro en e-commerce',	'',	'<p>Y aunque tenemos una amplia experiencia y sabemos lo que funciona y lo que no, no tenemos una barita m??gica, el ??xito lo conseguimos a base de conocimiento, creatividad e implicaci??n en tu proyecto.&nbsp;<br></p>',	'',	'',	1,	'proyectos-de-e-commerce',	'2018-07-18 08:18:26',	'2018-07-18 08:18:26'),
(16,	'e-Marketing y publicidad para marcas',	'e-Marketing y publicidad',	'<p>??Qui??n dice que debemos elegir entre ???Crear marca??? o ???Generar ventas????</p><p>En Thatzad sabemos c??mo hacer que tu marca triunfe en Internet<br></p>',	'<p>En Espa??a se crean cada a??o m??s de 100.000 empresas y casi un 25% son de comercio. Las marcas deben hacerse un hueco entre tanta competencia, no s??lo por diferenciaci??n de producto o servicio sino de imagen y comunicaci??n de marca.</p><p>Lanzar una una start-up, nueva marca de ropa, un producto de alimentaci??n, una cadena de restaurantes o una financiera requieren de recursos humanos y econ??micos ligados a un plan de negocio y un plan de marketing.</p><p>Desde THATZAD dise??amos, junto con el Cliente, el plan de e-marketing, tanto la estrategia como el calendario de acciones, como todas las creatividades, la gesti??n integral de campa??as y la medici??n y an??lisis de los resultados.</p><p>La web como herramienta clave y ADN de la marca.&nbsp;</p><p>Si las campa??as y las redes sociales son los embajadores de nuestra marca. La web debe ser la herramienta perfecta de comunicaci??n y venta. Un concentrador que sea capaz de convertir tr??fico cualificado en objetivos de negocio.&nbsp;</p><p>Uno de los puntos que nos diferencian en THATZAD es que no somos s??lo una agencia, somos consultores, en cada proyecto trabaja un equipo de e-marketing, uno de dise??o y uno de programaci??n. El resultado son webs mucho mejor pensadas para vender, mejor programadas y dise??adas con esos detalles que marcan la diferencia. Todo lo que se nos pide a una agencia boutique de marketing online.&nbsp;</p><p>Publicidad orientada al branding pero con objetivos de ventas</p><p>Potenciar la imagen de marca es importante, pero no debe estar re??ido con nuestros objetivos, ??queremos leads?, ??ventas?, ??abrir nuevos mercados? Nuestras campa??as de publicidad online siempre tienen una intencionalidad clara y se miden los resultados en tiempo real para analizar qu?? canales, medios, segmentos o creatividades nos acercan m??s a nuestros objetivos de negocio.</p>',	'Publicidad orientada al branding pero con objetivos de ventas',	'',	'<p>Desarrollamos la estrategia, la web y las campa??as de publicidad online de tu marca con un equipo creativo, implicado un 100% efectivo.<br></p>',	'',	'',	1,	'e-marketing-y-publicidad-para-marcas',	'2018-07-18 08:20:48',	'2018-07-18 08:20:48'),
(17,	'Transformaci??n digital para empresas',	'Transformaci??n digital',	'<p>Transformar los procesos de una compa????a parte de nuevos sistemas que los hagan sencillos y eficientes. </p><p>Descubre hasta d??nde podemos llegar juntos<br></p>',	'<p>El concepto de trasformaci??n digital de una empresa es ciertamente amplio e implica cambios culturales y organizativos profundos en las compa????as.</p><p>THATZAD no es una consultor??a de transformaci??n digital, quiz??s no seamos los expertos que definan tu modelo de negocio en los pr??ximos a??os, pero s?? podemos ayudarte a dise??ar y programar los sistemas y herramientas que necesitas para redefinir las operaciones de tu empresa. Somos expertos en hacer crecer la semilla tecnol??gica de la transformaci??n digital de las organizaciones.</p><p>En Thatzad aportamos nuestra experiencia y conocimiento de Internet a dise??ar sistemas gestores desde cero, a medida de las necesidades de cada Cliente. Desde una intranet (en web o APP), un ERP personalizado que enlace con tu e-commerce, un CRM ligado a tu web y redes sociales o un gestor de reservas integral que intercambie informaci??n con APIs externas.</p><p>Apostamos por los lenguajes abiertos y no por las herramientas herm??ticas que hay en el mercado, para programar a medida todo lo que pueda necesitar tu empresa. HTML5, PHP4, CSS3, Ajax o Javascript nos permiten dise??ar libremente, tanto a nivel gr??fico como de arquitectura y enfrentarnos a reglas de negocio complejas.</p>',	'Much??simo m??s que una web',	'',	'<p>El l??mite est?? ??nicamente en nuestra imaginaci??n y no en la tecnolog??a.<br></p>',	'',	'',	1,	'transformacion-digital-para-empresas',	'2018-07-18 08:22:04',	'2018-07-18 08:22:04'),
(18,	'Publicidad online orientada a resultados',	'Publicidad online',	'<p>Definamos junto el buyer persona, los objetivos a conseguir y los recursos que tenemos. </p><p>En THATZAD dise??aremos la mejor estrategia para conseguir los resultados que buscas.<br></p>',	'<p>Existen dos tipos de campa??as, las que buscan notoriedad de marca (Branding) y las que persiguen objetivos finales de negocio (Performace). Est?? claro que siempre se persigue aumentar nuestra facturaci??n y nuestro beneficio, pero cuando nuestra marca no es conocida y tenemos unos valores que comunicar, puede ser importante empezar con campa??as de branding, para luego conseguir la conversi??n&nbsp; mediante campa??as m??s orientadas al objetivo.</p><p>Los objetivos no tienen que ser ??nicamente ventas, pueden ser leads, contactos comerciales, descargas de cat??logos, visualizaciones de videos o visitar m??s de X minutos una web. Si definimos bien los objetivos de negocio y el embudo de conversi??n en THATZAD realizaremos la campa??a perfecta para conseguirlos, y no por tener una barita m??gica, sino con experiencia, creatividad, implicaci??n, an??lisis y optimizaci??n de las campa??as.</p><ol><li>Definir los objetivos de negocio dentro de la web</li><li>Identificar c??mo medirlos y cu??les son sus flujos</li><li>Dise??ar las landing pages</li><li>Desarrollar la idea creativa</li><li>Definir el plan de medios</li><li>Lanzar todos los formatos</li><li>Medir, medir, medir y volver a medir</li><li>Analizar qu?? canales y formatos tienen mejor resultado</li><li>Desarrollar nuevas estrategias para ir optimizando las campa??as</li></ol>',	'T?? marcas los objetivos a conseguir',	'',	'<p>Definamos junto el buyer persona, los objetivos a conseguir y los recursos que tenemos. En THATZAD dise??aremos la mejor estrategia para conseguir los resultados que buscas.<br></p>',	'',	'',	1,	'publicidad-online-orientada-a-resultados',	'2018-07-18 08:23:53',	'2018-07-18 08:23:53');

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
(3,	'Esperando confirmaci??n',	'2018-03-05 18:05:41',	'0000-00-00 00:00:00'),
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
  `order` int(10) unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `whitepapers` (`id`, `title`, `number`, `description`, `data_file`, `image`, `active`, `home`, `order`, `slug`, `created_at`, `updated_at`) VALUES
(1,	'Gu??a f??cil de aplicaci??n de la LOPD y LSSI para e???Commerce',	'n??2, Junio 2018',	'Esta gu??a de aplicaci??n de la LOPD y LSSI para e???commerce la hemos escrito despu??s de\r\ndocumentarnos mucho y como respuesta a la infinidad de preguntas y dudas que nos hacen nuestros\r\nclientes con tienda online sobre qu?? han de tener en cuenta a nivel legal.',	'guia-facil-aplicacion-lopd-y-lssi-e-commerce.pdf',	'foto_image.jpg',	1,	1,	0,	'guia-facil-lopd',	'2018-07-13 05:09:56',	'2018-07-18 06:04:15'),
(2,	'El canal de YouTube deber??a estar en el eje de tu estrategia de contenidos',	'n??1, Junio 2018',	'Hear directly from the people who know it best. From teh to politics to creativity and more -whatever your interest, we???ve got you covered.',	'el-canal-de-youtube-deberia-estar-en-el-eje-de-tu-estrategia-de-contenidos_data_file.pdf',	'captura_de_pantalla_de_2018-07-17_12-52-32_image.png',	1,	0,	0,	'canal-youtube',	'2018-07-13 06:04:13',	'2018-07-19 09:26:23'),
(3,	'Formatos publicitarios de v??deo: notoriedad de marca a bajo coste',	'n??1, Junio 2018',	'Lorem Rajoy Ipsum fin de la cita y es el alcalde el que quiere que sean y mucho espa??oles los chuches como ustedes comprender??n como dec??a Galileo, el movimiento siempre se acelera cuando se va detener viva el vino una cosa es ser solidario y otra es serlo a cambio de nada. Salvo algunas cosas y es el alcalde el que quiere que sean no es cosa menor, dicho de otra manera, es cosa mayor es usted Ruiz, ruin, mezquino y miserable ese se??or del que usted me habla.',	'formatos-publicitarios-de-video-para-youtube_data_file.pdf',	'rect-ngulo-553_image.png',	1,	0,	0,	'formatos-publicitarios-video',	'2018-07-19 09:28:17',	'2018-07-19 09:28:17'),
(4,	'La estrategia de marketing de contenidos',	'n??4, Junio 2018',	'Lorem Rajoy Ipsum fin de la cita y es el alcalde el que quiere que sean y mucho espa??oles los chuches como ustedes comprender??n como dec??a Galileo, el movimiento siempre se acelera cuando se va detener viva el vino una cosa es ser solidario y otra es serlo a cambio de nada. Salvo algunas cosas y es el alcalde el que quiere que sean no es cosa menor, dicho de otra manera, es cosa mayor es usted Ruiz, ruin, mezquino y miserable ese se??or del que usted me habla.',	'la-estrategia-del-marketing-de-contenidos_data_file.pdf',	'rect-ngulo-553_image.png',	1,	0,	0,	'estrategia-marketing-contenidos',	'2018-07-19 09:29:04',	'2018-07-19 09:29:04'),
(5,	'Acciones de marketing en el ciclo de vida de un cliente online',	'n??1, Junio 2018',	'Lorem Rajoy Ipsum fin de la cita y es el alcalde el que quiere que sean y mucho espa??oles los chuches como ustedes comprender??n como dec??a Galileo, el movimiento siempre se acelera cuando se va detener viva el vino una cosa es ser solidario y otra es serlo a cambio de nada. Salvo algunas cosas y es el alcalde el que quiere que sean no es cosa menor, dicho de otra manera, es cosa mayor es usted Ruiz, ruin, mezquino y miserable ese se??or del que usted me habla.',	'acciones-de-marketing-en-el-ciclo-de-vida-de-un-cliente-online_data_file.pdf',	'rect-ngulo-553_image.png',	1,	0,	0,	'acciones-marketing-cliente',	'2018-07-19 09:29:57',	'2018-07-19 09:33:31'),
(6,	'C??mo internacionalizar tu tienda online',	'n??1, Junio 2018',	'Lorem Rajoy Ipsum fin de la cita y es el alcalde el que quiere que sean y mucho espa??oles los chuches como ustedes comprender??n como dec??a Galileo, el movimiento siempre se acelera cuando se va detener viva el vino una cosa es ser solidario y otra es serlo a cambio de nada. Salvo algunas cosas y es el alcalde el que quiere que sean no es cosa menor, dicho de otra manera, es cosa mayor es usted Ruiz, ruin, mezquino y miserable ese se??or del que usted me habla.',	'como-internacionalizar-tu-tienda-online_data_file.pdf',	'rect-ngulo-553_image.png',	1,	0,	0,	'internacionalizar-tu-tienda',	'2018-07-19 09:32:36',	'2018-07-19 09:32:36'),
(7,	'Los 10 errores clave de una tienda online para que fracase',	'n??1, Junio 2018',	'Lorem Rajoy Ipsum fin de la cita y es el alcalde el que quiere que sean y mucho espa??oles los chuches como ustedes comprender??n como dec??a Galileo, el movimiento siempre se acelera cuando se va detener viva el vino una cosa es ser solidario y otra es serlo a cambio de nada. Salvo algunas cosas y es el alcalde el que quiere que sean no es cosa menor, dicho de otra manera, es cosa mayor es usted Ruiz, ruin, mezquino y miserable ese se??or del que usted me habla.',	'los-10-errores-clave-de-una-tienda-online-para-que-fracase_data_file.pdf',	'rect-ngulo-553_image.png',	1,	0,	0,	'10-errores-tienda',	'2018-07-19 09:34:39',	'2018-07-20 08:21:29');

-- 2018-07-20 10:43:49
