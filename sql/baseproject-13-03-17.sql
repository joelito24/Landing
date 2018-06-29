-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `brands` (`id`, `order`, `name`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1,	0,	'Nike',	'',	1,	'2017-03-07 10:10:22',	'2017-03-07 11:42:03');

DROP TABLE IF EXISTS `brands_translations`;
CREATE TABLE `brands_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brands_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `brands_translations_brands_id_locale_unique` (`brands_id`,`locale`),
  KEY `brands_translations_locale_index` (`locale`),
  CONSTRAINT `brands_translations_brans_id_foreign` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `brands_translations` (`id`, `brands_id`, `locale`, `meta_title`, `meta_description`, `slug`, `created_at`, `updated_at`) VALUES
(1,	1,	'es',	'',	'',	'nike',	'2017-03-07 10:10:22',	'2017-03-07 10:10:22');

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

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1,	5,	'2017-03-13 09:45:05',	'2017-03-13 09:45:05');

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

INSERT INTO `carts_products` (`id`, `cart_id`, `product_id`, `pvp`, `iva`, `product_description`, `cant`, `created_at`, `updated_at`) VALUES
(16,	1,	2,	11.00,	0.00,	'Producto 2',	1,	'2017-03-13 10:23:15',	'2017-03-13 10:23:15');

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent` int(10) unsigned NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `categories` (`id`, `parent`, `active`, `created_at`, `updated_at`) VALUES
(1,	3,	1,	'2016-10-07 07:02:45',	'2017-03-09 09:24:56'),
(2,	4,	1,	'2016-10-07 07:22:33',	'2017-03-10 08:31:05'),
(3,	0,	1,	'2017-03-09 09:24:49',	'2017-03-09 09:24:49'),
(4,	0,	1,	'2017-03-10 08:30:24',	'2017-03-10 08:30:24');

DROP TABLE IF EXISTS `categories_translations`;
CREATE TABLE `categories_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categories_id` int(10) unsigned NOT NULL,
  `parent` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_translations_categories_id_locale_unique` (`categories_id`,`locale`),
  UNIQUE KEY `categories_translations_parent_locale_title_unique` (`parent`,`locale`,`title`),
  UNIQUE KEY `categories_translations_parent_locale_slug_unique` (`parent`,`locale`,`slug`),
  KEY `categories_translations_locale_index` (`locale`),
  CONSTRAINT `categories_translations_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `categories_translations` (`id`, `categories_id`, `parent`, `locale`, `title`, `description`, `meta_title`, `meta_description`, `slug`, `created_at`, `updated_at`) VALUES
(1,	1,	3,	'es',	'Categoria Test1',	'',	'CategoriaTest',	'',	'categoriatest',	'2016-10-07 07:02:45',	'2017-03-09 09:24:57'),
(2,	1,	3,	'en',	'Category Test1',	'',	'Category Test',	'',	'category-test',	'2016-10-07 07:02:45',	'2017-03-09 09:24:56'),
(3,	2,	4,	'es',	'Categoria Test2',	'',	'Categoria Test2',	'',	'categoria-test2',	'2016-10-07 07:22:33',	'2017-03-10 08:31:05'),
(4,	2,	4,	'en',	'Category Test2',	'',	'Category Test2',	'',	'category-test2',	'2016-10-07 07:22:33',	'2017-03-10 08:31:05'),
(5,	3,	0,	'es',	'SubCategoría',	'',	'SubCategoría',	'',	'subcategoria',	'2017-03-09 09:24:49',	'2017-03-09 09:24:49'),
(6,	4,	0,	'es',	'Categoría Padre',	'',	'Categoría Padre',	'',	'categoria-padre',	'2017-03-10 08:30:25',	'2017-03-10 08:30:25');

DROP TABLE IF EXISTS `colours`;
CREATE TABLE `colours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `colours_translations`;
CREATE TABLE `colours_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `colours_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `colours_translations_colours_id_locale_unique` (`colours_id`,`locale`),
  UNIQUE KEY `colours_translations_title_locale_unique` (`title`,`locale`),
  KEY `colours_translations_locale_index` (`locale`),
  CONSTRAINT `colours_translations_colours_id_foreign` FOREIGN KEY (`colours_id`) REFERENCES `colours` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `coupons`;
CREATE TABLE `coupons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `discount` double(8,2) NOT NULL,
  `percentage` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `coupons_code_unique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `coupons_translations`;
CREATE TABLE `coupons_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `coupons_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `coupons_translations_coupons_id_locale_unique` (`coupons_id`,`locale`),
  KEY `coupons_translations_locale_index` (`locale`),
  CONSTRAINT `coupons_translations_coupons_id_foreign` FOREIGN KEY (`coupons_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


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

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `faqs_categories_id` int(10) unsigned NOT NULL,
  `order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `faqs_faqs_categories_id_foreign` (`faqs_categories_id`),
  CONSTRAINT `faqs_faqs_categories_id_foreign` FOREIGN KEY (`faqs_categories_id`) REFERENCES `faqs_categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `faqs` (`id`, `faqs_categories_id`, `order`, `active`, `created_at`, `updated_at`) VALUES
(1,	1,	0,	1,	'2017-03-08 08:46:02',	'2017-03-08 08:46:02');

DROP TABLE IF EXISTS `faqs_categories`;
CREATE TABLE `faqs_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `faqs_categories` (`id`, `order`, `active`, `created_at`, `updated_at`) VALUES
(1,	0,	1,	'2017-03-08 08:44:48',	'2017-03-08 08:44:48');

DROP TABLE IF EXISTS `faqs_categories_translations`;
CREATE TABLE `faqs_categories_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `faqs_categories_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `faqs_categories_translations_faqs_categories_id_locale_unique` (`faqs_categories_id`,`locale`),
  KEY `faqs_categories_translations_locale_index` (`locale`),
  CONSTRAINT `faqs_categories_translations_faqs_categories_id_foreign` FOREIGN KEY (`faqs_categories_id`) REFERENCES `faqs_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `faqs_categories_translations` (`id`, `faqs_categories_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1,	1,	'es',	'Entrega',	'',	'2017-03-08 08:44:48',	'2017-03-08 08:44:48');

DROP TABLE IF EXISTS `faqs_translations`;
CREATE TABLE `faqs_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `faqs_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `faqs_translations_faqs_id_locale_unique` (`faqs_id`,`locale`),
  KEY `faqs_translations_locale_index` (`locale`),
  CONSTRAINT `faqs_translations_faqs_id_foreign` FOREIGN KEY (`faqs_id`) REFERENCES `faqs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `faqs_translations` (`id`, `faqs_id`, `locale`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1,	1,	'es',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',	'<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla purus id nisl laoreet suscipit. Nunc id tincidunt ex. Proin finibus velit ornare sapien pretium, ac finibus turpis posuere. Vivamus feugiat elit blandit sem elementum elementum. Fusce eu condimentum diam. Maecenas quam eros, vulputate ac pellentesque vel, tincidunt eget tellus. Nunc dolor purus, volutpat ac mi ac, malesuada ornare nibh. Sed mattis luctus velit, eget auctor sapien lobortis eu. Etiam tellus libero, dictum non dolor vel, pharetra interdum lorem.</span><br></p>',	'2017-03-08 08:46:02',	'2017-03-08 08:46:02');

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
(1,	'es',	'es_ES',	'Español',	1,	1,	'2016-10-06 07:59:37',	'0000-00-00 00:00:00'),
(2,	'en',	'en_EN',	'Ingles',	1,	0,	'2016-10-06 07:59:37',	'0000-00-00 00:00:00');

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

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_categories_id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `publish` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `news_news_categories_id_foreign` (`news_categories_id`),
  CONSTRAINT `news_news_categories_id_foreign` FOREIGN KEY (`news_categories_id`) REFERENCES `news_categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `news` (`id`, `news_categories_id`, `image`, `order`, `publish`, `active`, `created_at`, `updated_at`) VALUES
(1,	1,	'image001_image.gif',	0,	'2017-03-07 12:44:00',	1,	'2017-03-07 10:44:46',	'2017-03-07 11:57:33');

DROP TABLE IF EXISTS `news_categories`;
CREATE TABLE `news_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `news_categories` (`id`, `order`, `active`, `created_at`, `updated_at`) VALUES
(1,	0,	1,	'2017-03-07 10:43:09',	'2017-03-07 11:57:37');

DROP TABLE IF EXISTS `news_categories_translations`;
CREATE TABLE `news_categories_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_categories_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_categories_translations_news_categories_id_locale_unique` (`news_categories_id`,`locale`),
  KEY `news_categories_translations_locale_index` (`locale`),
  CONSTRAINT `news_categories_translations_news_categories_id_foreign` FOREIGN KEY (`news_categories_id`) REFERENCES `news_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `news_categories_translations` (`id`, `news_categories_id`, `locale`, `title`, `description`, `created_at`, `updated_at`, `slug`) VALUES
(1,	1,	'es',	'Categoría 1',	'Descripción',	'2017-03-07 10:43:09',	'2017-03-07 11:46:43',	'categoria-1a');

DROP TABLE IF EXISTS `news_translations`;
CREATE TABLE `news_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_translations_news_id_locale_unique` (`news_id`,`locale`),
  UNIQUE KEY `news_translations_title_locale_unique` (`title`,`locale`),
  UNIQUE KEY `news_translations_slug_locale_unique` (`slug`,`locale`),
  KEY `news_translations_locale_index` (`locale`),
  CONSTRAINT `news_translations_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `news_translations` (`id`, `news_id`, `locale`, `title`, `description`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1,	1,	'es',	'Noticia',	'<p>Descripción de noticia</p>',	'<p>Contenido de noticia</p>',	'noticia',	'2017-03-07 10:44:46',	'2017-03-07 10:44:46');

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

INSERT INTO `orders` (`id`, `coupon_id`, `reference`, `cart_id`, `total_pvp`, `total_iva`, `shipping_pvp`, `status`, `observations`, `bill`, `created_at`, `updated_at`) VALUES
(11,	NULL,	'TnZk3WufS0',	1,	11.00,	0.00,	0.00,	8,	'1',	0,	'2017-03-13 10:22:35',	'2017-03-13 10:22:35');

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
(7,	'Pedido de PRUEBA',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(8,	'~pre-pedido',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

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

INSERT INTO `payments_errors` (`id`, `payment_id`, `code`, `description`, `created_at`, `updated_at`) VALUES
(1,	2,	10001,	'Internal ErrorTransaction failed due to internal error.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(2,	2,	10001,	'Internal ErrorWarning an internal error has occurred. The transaction id may not be correct',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(3,	2,	10001,	'ButtonSource value truncated.The transaction could not be loaded',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(4,	2,	10001,	'Internal ErrorInternal Error',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(5,	2,	10002,	'Receiving Limit exceededYou\'ve exceeded the receiving limit. This transaction can\'t be completed.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(6,	2,	10003,	'Missing argumentInvoice ID is required',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(7,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Transaction refused because of an invalid argument. See additional error messages for details.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(8,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.The transaction id is not valid',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(9,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Invalid item URL.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(10,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.SellerRegistrationDate is invalid.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(11,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Invalid eBay seller feedback overall positive count.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(12,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Invalid eBay seller feedback overall negative count.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(13,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Invalid eBay seller feedback total positive count.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(14,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Invalid eBay seller feedback total negative count.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(15,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Invalid eBay seller feedback recent positive count.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(16,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Invalid eBay seller feedback recent negative count.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(17,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Invalid eBay item transaction date.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(18,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Invalid eBay item buyer protection type.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(19,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Invalid eBay item payment hold risk.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(20,	2,	10004,	'Transaction refused because of an invalid argument. See additional error messages for details.Multiple eBay order IDs not allowed.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(21,	2,	10007,	'Permission deniedYou do not have permissions to make this API call',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(22,	2,	10014,	'API call was rate limited.The API call has been denied as it has exceeded the permissible call rate limit.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(23,	2,	10215,	'Soft Descriptor truncatedThe soft descriptor passed in was truncated',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(24,	2,	10406,	'Transaction refused because of an invalid argument. See additional error messages for details.The PayerID value is invalid.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(25,	2,	10408,	'Express Checkout token is missing.Express Checkout token is missing.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(26,	2,	10409,	'You\'re not authorized to access this info.Express Checkout token was issued for a merchant account other than yours.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(27,	2,	10410,	'Invalid tokenInvalid token.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(28,	2,	10411,	'This Express Checkout session has expired.This Express Checkout session has expired. Token value is no longer valid.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(29,	2,	10412,	'Duplicate invoicePayment has already been made for this InvoiceID.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(30,	2,	10413,	'Transaction refused because of an invalid argument. See additional error messages for detailsThe totals of the cart item amounts do not match order amounts.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(31,	2,	10414,	'Transaction refused because of an invalid argument. See additional error messages for details.The amount exceeds the maximum amount for a single transaction.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(32,	2,	10415,	'Transaction refused because of an invalid argument. See additional error messages for details.A successful transaction has already been completed for this token.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(33,	2,	10416,	'Transaction refused because of an invalid argument. See additional error messages for details.You have exceeded the maximum number of payment attempts for this token.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(34,	2,	10417,	'Transaction cannot complete.Instruct the customer to retry the transaction using an alternative payment method from the customer\'s PayPal wallet. The transaction did not complete with the customer\'s selected payment method.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(35,	2,	10418,	'Transaction refused because of an invalid argument. See additional error messages for details.The currencies of the shopping cart amounts must be the same.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(36,	2,	10419,	'Express Checkout PayerID is missing.Express Checkout PayerID is missing.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(37,	2,	10420,	'Transaction refused because of an invalid argument. See additional error messages for details.Express Checkout PaymentAction is missing.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(38,	2,	10421,	'This Express Checkout session belongs to a different customer.This Express Checkout session belongs to a different customer. Token value mismatch.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(39,	2,	10422,	'Customer must choose new funding sources.The customer must return to PayPal to select new funding sources.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(40,	2,	10424,	'Transaction refused because of an invalid argument. See additional error messages for details.Shipping address is invalid.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(41,	2,	10426,	'Transaction refused because of an invalid argument. See additional error messages for details.Item total is invalid.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(42,	2,	10427,	'Transaction refused because of an invalid argument. See additional error messages for details.Shipping total is invalid.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(43,	2,	10428,	'Transaction refused because of an invalid argument. See additional error messages for details.Handling total is invalid.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(44,	2,	10429,	'Transaction refused because of an invalid argument. See additional error messages for details.Tax total is invalid.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(45,	2,	10431,	'Item amount is invalid.Item amount is invalid.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(46,	2,	10432,	'Transaction refused because of an invalid argument. See additional error messages for details.Invoice ID value exceeds maximum allowable length.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(47,	2,	10433,	'Transaction refused because of an invalid argument. See additional error messages for details.Value of OrderDescription element has been truncated.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(48,	2,	10434,	'Transaction refused because of an invalid argument. See additional error messages for details.Value of Custom element has been truncated.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(49,	2,	10435,	'Transaction refused because of an invalid argument. See additional error messages for details.The customer has not yet confirmed payment for this Express Checkout session.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(50,	2,	10441,	'Transaction refused because of an invalid argument. See additional error messages for details.The NotifyURL element value exceeds maximum allowable length.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(51,	2,	10442,	'ButtonSource value truncated.The ButtonSource element value exceeds maximum allowable length.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(52,	2,	10443,	'Transaction refused because of an invalid argument. See additional error messages for details.This transaction cannot be completed with PaymentAction of Order.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(53,	2,	10444,	'Transaction refused because of an invalid argument. See additional error messages for details.The transaction currency specified must be the same as previously specified.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(54,	2,	10445,	'This transaction cannot be processed at this time. Please try again later.This transaction cannot be processed at this time. Please try again later.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(55,	2,	10448,	'Unconfirmed emailA confirmed email is required to make this API call.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(56,	2,	10474,	'Invalid DataThis transaction cannot be processed. The country code in the shipping address must match the buyer\'s country of residence.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(57,	2,	10475,	'Transaction refused because of an invalid argument. See additional error messages for details.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(58,	2,	10481,	'Transaction refused because of an invalid argument. See additional error messages for details.PaymentAction of Authorization is not allowed with Unilateral and Non-Credentialed authentication.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(59,	2,	10482,	'Transaction refused because of an invalid argument. See additional error messages for details.PaymentAction of Order is not allowed with Unilateral and Non-Credentialed authentication.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(60,	2,	10485,	'Payment not authorizedPayment has not been authorized by the user.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(61,	2,	10486,	'This transaction couldn\'t be completed.This transaction couldn\'t be completed. Please redirect your customer to PayPal.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(62,	2,	10537,	'Risk Control Country Filter FailureThe transaction was refused because the country was prohibited as a result of your Country Monitor Risk Control Settings.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(63,	2,	10538,	'Risk Control Max Amount FailureThe transaction was refused because the maximum amount was exceeded as a result of your Maximum Amount Risk Control Settings.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(64,	2,	10539,	'Payment declined by your Risk Controls settings: PayPal Risk Model.Payment declined by your Risk Controls settings: PayPal Risk Model.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(65,	2,	10631,	'Processor WarningThe authorization is being processed.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(66,	2,	10725,	'Shipping Address Country ErrorThere was an error in the Shipping Address Country field',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(67,	2,	10727,	'Shipping Address1 EmptyThe field Shipping Address1 is required',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(68,	2,	10728,	'Shipping Address City EmptyThe field Shipping Address City is required',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(69,	2,	10729,	'Shipping Address State EmptyThe field Shipping Address State is required',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(70,	2,	10730,	'Shipping Address Postal Code EmptyThe field Shipping Address Postal Code is required',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(71,	2,	10731,	'Shipping Address Country EmptyThe field Shipping Address Country is required',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(72,	2,	10736,	'Shipping Address Invalid City State Postal CodeA match of the Shipping Address City, State, and Postal Code failed.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(73,	2,	11001,	'Exceeds maximum length.Value of NoteText element is truncated.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(74,	2,	11084,	'User does not have a good funding source with which to pay.User does not have a good funding source with which to pay.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(75,	2,	11302,	'Cannot pay selfThe transaction was refused because you cannot send money to yourself.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(76,	2,	11450,	'Billing Agreement creation failedFailed to create Billing Agreement; reference transaction feature may be unavailable or not enabled for the merchant, or a system error may have occurred.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(77,	2,	11607,	'Duplicate request for specified Message Submission ID.The specified Message Submission ID (specified in MSGSUBID parameter) is a duplicate; result parameters of the original request are attached.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(78,	2,	11607,	'Duplicate RequestA successful transaction has already been completed for this token.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(79,	2,	11610,	'Payment Pending your review in Fraud Management FiltersPayment Pending your review in Fraud Management Filters',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(80,	2,	11611,	'Transaction blocked by your settings in FMFTransaction blocked by your settings in FMF',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(81,	2,	11612,	'Could not process your request to accept/deny the transactionCould not process your request to accept/deny the transaction',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(82,	2,	11820,	'Transaction refused because of an invalid argument. See additional error messages for detailsInvalid Order URL.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(83,	2,	11821,	'Invalid shipping optionsInvalid shipping options; you must specify a name and amount for each shipping option type',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(84,	2,	11826,	'Invalid shipping totalInvalid shipping total; it should equal the shipping amount of the selected shipping option',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(85,	2,	12125,	'PP incentive no longer available.There\'s a problem with the redemption code(s) you entered and can\'t be used at this time. Your payment has not been processed. Please go back to PayPal so that the code(s) can be removed, your order total can be updated an',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(86,	2,	12126,	'Payment could not be processed at this time. Incentive temporarily unavailable.We\'re having problems processing redemption codes at this time. Your payment has not been processed. You can try to check out again at a later time or complete your payment wit',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(87,	2,	12201,	'Immediate Payment item was not found.The item specified is either not valid or is not currently available for purchase as an Immediate Payment item.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(88,	2,	12203,	'Instant payment required for 3PXO.Instant Payment in 3PXO cannot be pending. The transaction has been rolled back.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(89,	2,	12204,	'Transaction reversed.Error occurred causing transaction reversal.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(90,	2,	12206,	'The value of PaymentAction must be Sale for Immediate Payment item.Order and Authorization are not acceptable values for PaymentAction when the item is an Immediate Payment',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(91,	2,	12207,	'Cart ID is required for Immediate Payment item.Cart ID is required for Immediate Payment item.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(92,	2,	12208,	'eBay item amount does not match Express Checkout API item amount.eBay item amount does not match Express Checkout API item amount.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(93,	2,	13100,	'Parallel payments functionality is not availableParallel payments functionality is not available',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(94,	2,	13101,	'Invalid DataPayment action of Order is only supported for parallel payments',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(95,	2,	13102,	'Payment Request ID is missingPayment Request ID is mandatory for parallel payments',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(96,	2,	13103,	'Duplicate Payment Request ID passedPayment Request ID must be unique for parallel payments',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(97,	2,	13104,	'Transaction refused because of an invalid argument. See Additional error messages for details.Number of payment requests exceeds maximum number of supported requests.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(98,	2,	13106,	'Invalid DataYou cannot pass both the new and deprecated PaymentAction parameter.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(99,	2,	13107,	'Parallel payments partially successful.One or more payment requests failed. Check individual payment responses for more information.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(100,	2,	13110,	'Multi Payments Sale is Not allowedDue to some technical difficulties the Multi Payments for Sale is not available now please try again later.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(101,	2,	13111,	'Mixed Payment action not supportedThe Payment Action passed should be unique, mixed Payment Action not supported',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(102,	2,	13113,	'Buyer Cannot Pay.The Buyer cannot pay with PayPal for this transaction.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(103,	2,	13115,	'Seller ID MissingSeller ID is mandatory for parallel payments',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(104,	2,	13116,	'Transaction refused because of an invalid argument. See additional error messages for details.The transaction is in progress for this token.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(105,	2,	13122,	'Transaction refusedThis transaction cannot be completed because it violates the PayPal User Agreement.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(106,	2,	13751,	'Could not provide identical response to original transaction.Original transaction completed successfully; however, this response differs from the original response.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(107,	2,	17200,	'Insufficient funds.Funding Instrument is invalid.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(108,	2,	17203,	'Invalid funding instrument.Funding Instrument is invalid.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(109,	2,	17204,	'Funding instrument expired.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(110,	1,	101,	'Tarjeta Caducada',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(111,	1,	102,	'Tarjeta en excepción transitoria o bajo sospecha de fraude',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(112,	1,	104,	'Operación no permitida para esa tarjeta o terminal.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(113,	1,	106,	'Intentos de PIN excedidos.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(114,	1,	116,	'Disponible Insuficiente',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(115,	1,	118,	'Tarjeta no Registrada',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(116,	1,	125,	'Tarjeta no efectiva.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(117,	1,	129,	'Código de seguridad (CVV2/CVC2) incorrecto.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(118,	1,	180,	'Tarjeta ajena al servicio.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(119,	1,	184,	'Error en la autenticación del titular.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(120,	1,	190,	'Denegación sin especificar motivo.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(121,	1,	191,	'Fecha de caducidad errónea.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(122,	1,	202,	'Tarjeta en excepción transitoria o bajo sospecha de fraude con retirada de tarjeta.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(123,	1,	904,	'Comercio no registrado en FUC.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(124,	1,	909,	'Error de sistema.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(125,	1,	912,	'Emisor no Disponible.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(126,	1,	9912,	'Emisor no Disponible.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(127,	1,	913,	'Pedido repetido.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(128,	1,	944,	'Sesión Incorrecta.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(129,	1,	950,	'Operación de devolución no permitida.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(130,	1,	9064,	'Número de posiciones de la tarjeta incorrecto.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(131,	1,	9078,	'No existe método de pago váido para esa tarjeta.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(132,	1,	9093,	'Tarjeta no existente.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(133,	1,	9094,	'Rechazo servidores internacionales.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(134,	1,	9104,	'Comercio con “titular seguro” y titular sin clave de compra segura.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(135,	1,	9218,	'El comercio no permite op. seguras por entrada /operaciones.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(136,	1,	9253,	'Tarjeta no cumple el check-digit.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(137,	1,	9256,	'El comercio no puede realizar preautorizaciones',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(138,	1,	9257,	'Esta tarjeta no permite operativa de preautorizaciones',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(139,	1,	9261,	'Operación detenida por superar el control de restricciones en la entrada al SIS',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(140,	1,	9912,	'Emisor no disponible.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(141,	1,	9913,	'Error en la confirmación que el comercio envía al TPV Virtual (solo aplicable en la opción de sincronización SOAP)',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(142,	1,	9914,	'Confirmación “KO” del comercio (solo aplicable en la opción de sincronización SOAP)',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(143,	1,	9915,	'A petición del usuario se ha cancelado el pago.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(144,	1,	9928,	'Anulación de autorización en diferido realizada por el SIS (proceso batch)',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(145,	1,	9929,	'Anulación de autorización en diferido realizada por el comercio',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(146,	1,	9997,	'Se está procesando otra transacción en SIS con la misma tarjeta.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(147,	1,	9998,	'Operación en proceso de solicitud de datos de tarjeta.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(148,	1,	9999,	'Operación que ha sido redirigida al emisor a autenticar.',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pvp` double(8,2) unsigned NOT NULL,
  `pvp_discounted` double(8,2) unsigned NOT NULL,
  `iva` double(8,2) unsigned NOT NULL,
  `order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_id` int(10) unsigned NOT NULL,
  `brand_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_reference_unique` (`reference`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `brand_id` (`brand_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products` (`id`, `reference`, `image`, `thumb`, `pvp`, `pvp_discounted`, `iva`, `order`, `active`, `created_at`, `updated_at`, `category_id`, `brand_id`) VALUES
(1,	'prod1',	'gfh_image.png',	'gfh_thumb.png',	123.00,	0.00,	0.00,	0,	1,	'2016-10-07 07:26:11',	'2017-03-10 09:22:57',	1,	0),
(2,	'prod2',	'rfgrg_image.png',	'rfgrg_thumb.png',	13.00,	11.00,	0.00,	0,	1,	'2016-10-07 07:27:59',	'2017-03-10 09:22:48',	2,	0),
(3,	'laptop1',	'rfgrg_thumb_thumb_image.png',	'rfgrg_thumb_thumb_thumb.png',	12.00,	10.00,	0.00,	0,	1,	'2016-10-11 10:00:51',	'2017-03-10 09:22:30',	1,	1);

DROP TABLE IF EXISTS `products_colours`;
CREATE TABLE `products_colours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `colour_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_colours_colour_id_product_id_unique` (`colour_id`,`product_id`),
  KEY `products_colours_product_id_foreign` (`product_id`),
  CONSTRAINT `products_colours_colour_id_foreign` FOREIGN KEY (`colour_id`) REFERENCES `colours` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_colours_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `products_currencies`;
CREATE TABLE `products_currencies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `currency_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `pvp` double(8,2) unsigned NOT NULL,
  `pvp_discounted` double(8,2) unsigned NOT NULL,
  `iva` double(8,2) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_currencies_product_id_currency_id_unique` (`product_id`,`currency_id`),
  KEY `products_currencies_currency_id_foreign` (`currency_id`),
  CONSTRAINT `products_currencies_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_currencies_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products_currencies` (`id`, `currency_id`, `product_id`, `pvp`, `pvp_discounted`, `iva`, `created_at`, `updated_at`) VALUES
(25,	1,	3,	12.00,	10.00,	0.00,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(26,	2,	3,	10.00,	0.00,	0.00,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(27,	1,	2,	12.00,	0.00,	0.00,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(28,	2,	2,	12.00,	0.00,	0.00,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(29,	1,	1,	10.00,	0.00,	0.00,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(30,	2,	1,	10.00,	0.00,	0.00,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `products_related`;
CREATE TABLE `products_related` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `product_id_related` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_related_product_id_product_id_related_unique` (`product_id`,`product_id_related`),
  KEY `products_related_product_id_related_foreign` (`product_id_related`),
  CONSTRAINT `products_related_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_related_product_id_related_foreign` FOREIGN KEY (`product_id_related`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products_related` (`id`, `product_id`, `product_id_related`) VALUES
(11,	3,	1);

DROP TABLE IF EXISTS `products_sizes`;
CREATE TABLE `products_sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `size_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_sizes_size_id_product_id_unique` (`size_id`,`product_id`),
  KEY `products_sizes_product_id_foreign` (`product_id`),
  CONSTRAINT `products_sizes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_sizes_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `products_translations`;
CREATE TABLE `products_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `products_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_translations_products_id_locale_unique` (`products_id`,`locale`),
  UNIQUE KEY `products_translations_title_locale_unique` (`title`,`locale`),
  UNIQUE KEY `products_translations_slug_locale_unique` (`slug`,`locale`),
  KEY `products_translations_locale_index` (`locale`),
  CONSTRAINT `products_translations_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products_translations` (`id`, `products_id`, `locale`, `title`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1,	1,	'es',	'Producto 1',	'Esta es la descripción del producto 1',	'producto-1a',	'2016-10-07 07:26:11',	'2016-10-07 07:26:11'),
(2,	1,	'en',	'product1',	'This is the description of product 1',	'product1',	'2016-10-07 07:26:11',	'2016-10-07 07:26:11'),
(3,	2,	'es',	'Producto 2',	'Esta es la descripción del producto 2\r\n',	'producto-2a',	'2016-10-07 07:27:59',	'2016-10-07 07:27:59'),
(4,	2,	'en',	'Product 2',	'This is a ....',	'product-2a',	'2016-10-07 07:27:59',	'2016-10-07 07:27:59'),
(5,	3,	'es',	'Lap top nuevo',	'Mejor Lap top',	'lap-top-nuevo',	'2016-10-11 10:00:52',	'2016-10-11 10:00:52'),
(6,	3,	'en',	'Lap top new',	'It\'s the best Lap top',	'lap-top-new',	'2016-10-11 10:00:52',	'2016-10-11 10:00:52');

DROP TABLE IF EXISTS `shipping_costs`;
CREATE TABLE `shipping_costs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `units` int(11) NOT NULL,
  `shipping_zone` int(10) unsigned NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `shipping_costs_shipping_zone_foreign` (`shipping_zone`),
  CONSTRAINT `shipping_costs_shipping_zone_foreign` FOREIGN KEY (`shipping_zone`) REFERENCES `shipping_zones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `shipping_costs` (`id`, `name`, `units`, `shipping_zone`, `active`, `created_at`, `updated_at`) VALUES
(1,	'Test',	2,	2,	1,	'2016-10-13 09:28:24',	'2016-10-13 09:28:24');

DROP TABLE IF EXISTS `shipping_costs_currencies`;
CREATE TABLE `shipping_costs_currencies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `currency_id` int(10) unsigned NOT NULL,
  `shipping_costs_id` int(10) unsigned NOT NULL,
  `pvp` double(8,2) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `shipping_costs_currencies_currency_id_shipping_costs_id_unique` (`currency_id`,`shipping_costs_id`),
  KEY `shipping_costs_currencies_shipping_costs_id_foreign` (`shipping_costs_id`),
  CONSTRAINT `shipping_costs_currencies_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE,
  CONSTRAINT `shipping_costs_currencies_shipping_costs_id_foreign` FOREIGN KEY (`shipping_costs_id`) REFERENCES `shipping_costs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `shipping_costs_currencies` (`id`, `currency_id`, `shipping_costs_id`, `pvp`, `created_at`, `updated_at`) VALUES
(1,	1,	1,	10.00,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(2,	2,	1,	12.00,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `shipping_countries`;
CREATE TABLE `shipping_countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_zone` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `shipping_countries_shipping_zone_foreign` (`shipping_zone`),
  CONSTRAINT `shipping_countries_shipping_zone_foreign` FOREIGN KEY (`shipping_zone`) REFERENCES `shipping_zones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `shipping_countries` (`id`, `code`, `name`, `shipping_zone`, `created_at`, `updated_at`) VALUES
(1,	'AF',	'AFGHANISTAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(2,	'AX',	'ÅLAND ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(3,	'AL',	'ALBANIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(4,	'DZ',	'ALGERIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(5,	'AS',	'AMERICAN SAMOA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(6,	'AD',	'ANDORRA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(7,	'AO',	'ANGOLA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(8,	'AI',	'ANGUILLA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(9,	'AQ',	'ANTARCTICA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(10,	'AG',	'ANTIGUA AND BARBUDA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(11,	'AR',	'ARGENTINA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(12,	'AM',	'ARMENIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(13,	'AW',	'ARUBA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(14,	'AU',	'AUSTRALIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(15,	'AT',	'AUSTRIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(16,	'AZ',	'AZERBAIJAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(17,	'BS',	'BAHAMAS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(18,	'BH',	'BAHRAIN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(19,	'BD',	'BANGLADESH',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(20,	'BB',	'BARBADOS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(21,	'BY',	'BELARUS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(22,	'BE',	'BELGIUM',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(23,	'BZ',	'BELIZE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(24,	'BJ',	'BENIN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(25,	'BM',	'BERMUDA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(26,	'BT',	'BHUTAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(27,	'BO',	'BOLIVIA, PLURINATIONAL STATE OF',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(28,	'BQ',	'BONAIRE, SINT EUSTATIUS AND SABA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(29,	'BA',	'BOSNIA AND HERZEGOVINA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(30,	'BW',	'BOTSWANA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(31,	'BV',	'BOUVET ISLAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(32,	'BR',	'BRAZIL',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(33,	'IO',	'BRITISH INDIAN OCEAN TERRITORY',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(34,	'BN',	'BRUNEI DARUSSALAM',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(35,	'BG',	'BULGARIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(36,	'BF',	'BURKINA FASO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(37,	'BI',	'BURUNDI',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(38,	'KH',	'CAMBODIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(39,	'CM',	'CAMEROON',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(40,	'CA',	'CANADA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(41,	'CV',	'CAPE VERDE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(42,	'KY',	'CAYMAN ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(43,	'CF',	'CENTRAL AFRICAN REPUBLIC',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(44,	'TD',	'CHAD',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(45,	'CL',	'CHILE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(46,	'CN',	'CHINA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(47,	'CX',	'CHRISTMAS ISLAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(48,	'CC',	'COCOS (KEELING) ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(49,	'CO',	'COLOMBIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(50,	'KM',	'COMOROS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(51,	'CG',	'CONGO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(52,	'CD',	'CONGO, THE DEMOCRATIC REPUBLIC OF THE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(53,	'CK',	'COOK ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(54,	'CR',	'COSTA RICA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(55,	'CI',	'CÔTE D\'IVOIRE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(56,	'HR',	'CROATIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(57,	'CU',	'CUBA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(58,	'CW',	'CURAÇAO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(59,	'CY',	'CYPRUS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(60,	'CZ',	'CZECH REPUBLIC',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(61,	'DK',	'DENMARK',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(62,	'DJ',	'DJIBOUTI',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(63,	'DM',	'DOMINICA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(64,	'DO',	'DOMINICAN REPUBLIC',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(65,	'EC',	'ECUADOR',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(66,	'EG',	'EGYPT',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(67,	'SV',	'EL SALVADOR',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(68,	'GQ',	'EQUATORIAL GUINEA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(69,	'ER',	'ERITREA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(70,	'EE',	'ESTONIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(71,	'ET',	'ETHIOPIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(72,	'FK',	'FALKLAND ISLANDS (MALVINAS)',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(73,	'FO',	'FAROE ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(74,	'FJ',	'FIJI',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(75,	'FI',	'FINLAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(76,	'FR',	'FRANCE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(77,	'GF',	'FRENCH GUIANA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(78,	'PF',	'FRENCH POLYNESIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(79,	'TF',	'FRENCH SOUTHERN TERRITORIES',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(80,	'GA',	'GABON',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(81,	'GM',	'GAMBIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(82,	'GE',	'GEORGIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(83,	'DE',	'GERMANY',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(84,	'GH',	'GHANA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(85,	'GI',	'GIBRALTAR',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(86,	'GR',	'GREECE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(87,	'GL',	'GREENLAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(88,	'GD',	'GRENADA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(89,	'GP',	'GUADELOUPE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(90,	'GU',	'GUAM',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(91,	'GT',	'GUATEMALA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(92,	'GG',	'GUERNSEY',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(93,	'GN',	'GUINEA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(94,	'GW',	'GUINEA-BISSAU',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(95,	'GY',	'GUYANA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(96,	'HT',	'HAITI',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(97,	'HM',	'HEARD ISLAND AND MCDONALD ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(98,	'VA',	'HOLY SEE (VATICAN CITY STATE)',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(99,	'HN',	'HONDURAS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(100,	'HK',	'HONG KONG',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(101,	'HU',	'HUNGARY',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(102,	'IS',	'ICELAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(103,	'IN',	'INDIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(104,	'ID',	'INDONESIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(105,	'IR',	'IRAN, ISLAMIC REPUBLIC OF',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(106,	'IQ',	'IRAQ',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(107,	'IE',	'IRELAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(108,	'IM',	'ISLE OF MAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(109,	'IL',	'ISRAEL',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(110,	'IT',	'ITALY',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(111,	'JM',	'JAMAICA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(112,	'JP',	'JAPAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(113,	'JE',	'JERSEY',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(114,	'JO',	'JORDAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(115,	'KZ',	'KAZAKHSTAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(116,	'KE',	'KENYA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(117,	'KI',	'KIRIBATI',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(118,	'KP',	'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(119,	'KR',	'KOREA, REPUBLIC OF',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(120,	'KW',	'KUWAIT',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(121,	'KG',	'KYRGYZSTAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(122,	'LA',	'LAO PEOPLE\'S DEMOCRATIC REPUBLIC',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(123,	'LV',	'LATVIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(124,	'LB',	'LEBANON',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(125,	'LS',	'LESOTHO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(126,	'LR',	'LIBERIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(127,	'LY',	'LIBYA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(128,	'LI',	'LIECHTENSTEIN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(129,	'LT',	'LITHUANIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(130,	'LU',	'LUXEMBOURG',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(131,	'MO',	'MACAO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(132,	'MK',	'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(133,	'MG',	'MADAGASCAR',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(134,	'MW',	'MALAWI',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(135,	'MY',	'MALAYSIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(136,	'MV',	'MALDIVES',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(137,	'ML',	'MALI',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(138,	'MT',	'MALTA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(139,	'MH',	'MARSHALL ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(140,	'MQ',	'MARTINIQUE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(141,	'MR',	'MAURITANIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(142,	'MU',	'MAURITIUS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(143,	'YT',	'MAYOTTE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(144,	'MX',	'MEXICO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(145,	'FM',	'MICRONESIA, FEDERATED STATES OF',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(146,	'MD',	'MOLDOVA, REPUBLIC OF',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(147,	'MC',	'MONACO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(148,	'MN',	'MONGOLIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(149,	'ME',	'MONTENEGRO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(150,	'MS',	'MONTSERRAT',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(151,	'MA',	'MOROCCO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(152,	'MZ',	'MOZAMBIQUE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(153,	'MM',	'MYANMAR',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(154,	'NA',	'NAMIBIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(155,	'NR',	'NAURU',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(156,	'NP',	'NEPAL',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(157,	'NL',	'NETHERLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(158,	'NC',	'NEW CALEDONIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(159,	'NZ',	'NEW ZEALAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(160,	'NI',	'NICARAGUA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(161,	'NE',	'NIGER',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(162,	'NG',	'NIGERIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(163,	'NU',	'NIUE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(164,	'NF',	'NORFOLK ISLAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(165,	'MP',	'NORTHERN MARIANA ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(166,	'NO',	'NORWAY',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(167,	'OM',	'OMAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(168,	'PK',	'PAKISTAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(169,	'PW',	'PALAU',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(170,	'PS',	'PALESTINE, STATE OF',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(171,	'PA',	'PANAMA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(172,	'PG',	'PAPUA NEW GUINEA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(173,	'PY',	'PARAGUAY',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(174,	'PE',	'PERU',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(175,	'PH',	'PHILIPPINES',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(176,	'PN',	'PITCAIRN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(177,	'PL',	'POLAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(178,	'PT',	'PORTUGAL',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(179,	'PR',	'PUERTO RICO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(180,	'QA',	'QATAR',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(181,	'RE',	'RÉUNION',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(182,	'RO',	'ROMANIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(183,	'RU',	'RUSSIAN FEDERATION',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(184,	'RW',	'RWANDA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(185,	'BL',	'SAINT BARTHÉLEMY',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(186,	'SH',	'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(187,	'KN',	'SAINT KITTS AND NEVIS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(188,	'LC',	'SAINT LUCIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(189,	'MF',	'SAINT MARTIN (FRENCH PART)',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(190,	'PM',	'SAINT PIERRE AND MIQUELON',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(191,	'VC',	'SAINT VINCENT AND THE GRENADINES',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(192,	'WS',	'SAMOA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(193,	'SM',	'SAN MARINO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(194,	'ST',	'SAO TOME AND PRINCIPE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(195,	'SA',	'SAUDI ARABIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(196,	'SN',	'SENEGAL',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(197,	'RS',	'SERBIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(198,	'SC',	'SEYCHELLES',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(199,	'SL',	'SIERRA LEONE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(200,	'SG',	'SINGAPORE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(201,	'SX',	'SINT MAARTEN (DUTCH PART)',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(202,	'SK',	'SLOVAKIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(203,	'SI',	'SLOVENIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(204,	'SB',	'SOLOMON ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(205,	'SO',	'SOMALIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(206,	'ZA',	'SOUTH AFRICA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(207,	'GS',	'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(208,	'SS',	'SOUTH SUDAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(209,	'ES',	'SPAIN',	3,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(210,	'LK',	'SRI LANKA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(211,	'SD',	'SUDAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(212,	'SR',	'SURINAME',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(213,	'SJ',	'SVALBARD AND JAN MAYEN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(214,	'SZ',	'SWAZILAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(215,	'SE',	'SWEDEN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(216,	'CH',	'SWITZERLAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(217,	'SY',	'SYRIAN ARAB REPUBLIC',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(218,	'TW',	'TAIWAN, PROVINCE OF CHINA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(219,	'TJ',	'TAJIKISTAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(220,	'TZ',	'TANZANIA, UNITED REPUBLIC OF',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(221,	'TH',	'THAILAND',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(222,	'TL',	'TIMOR-LESTE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(223,	'TG',	'TOGO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(224,	'TK',	'TOKELAU',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(225,	'TO',	'TONGA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(226,	'TT',	'TRINIDAD AND TOBAGO',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(227,	'TN',	'TUNISIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(228,	'TR',	'TURKEY',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(229,	'TM',	'TURKMENISTAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(230,	'TC',	'TURKS AND CAICOS ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(231,	'TV',	'TUVALU',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(232,	'UG',	'UGANDA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(233,	'UA',	'UKRAINE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(234,	'AE',	'UNITED ARAB EMIRATES',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(235,	'GB',	'UNITED KINGDOM',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(236,	'US',	'UNITED STATES',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(237,	'UM',	'UNITED STATES MINOR OUTLYING ISLANDS',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(238,	'UY',	'URUGUAY',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(239,	'UZ',	'UZBEKISTAN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(240,	'VU',	'VANUATU',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(241,	'VE',	'VENEZUELA, BOLIVARIAN REPUBLIC OF',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(242,	'VN',	'VIET NAM',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(243,	'VG',	'VIRGIN ISLANDS, BRITISH',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(244,	'VI',	'VIRGIN ISLANDS, U.S.',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(245,	'WF',	'WALLIS AND FUTUNA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(246,	'EH',	'WESTERN SAHARA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(247,	'YE',	'YEMEN',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(248,	'ZM',	'ZAMBIA',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(249,	'ZW',	'ZIMBABWE',	1,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `shipping_zones`;
CREATE TABLE `shipping_zones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `shipping_zones_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `shipping_zones` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'Resto del mundo',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(2,	'España',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(3,	'Europa',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(4,	'Portugal',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(5,	'Islas Baleares & Canarias',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `sizes`;
CREATE TABLE `sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `sizes_translations`;
CREATE TABLE `sizes_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sizes_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sizes_translations_sizes_id_locale_unique` (`sizes_id`,`locale`),
  UNIQUE KEY `sizes_translations_title_locale_unique` (`title`,`locale`),
  KEY `sizes_translations_locale_index` (`locale`),
  CONSTRAINT `sizes_translations_sizes_id_foreign` FOREIGN KEY (`sizes_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_status` int(10) unsigned NOT NULL DEFAULT '1',
  `user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `tasks_estado_foreign` (`type_status`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`type_status`) REFERENCES `tasks_status` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tasks` (`id`, `title`, `description`, `image`, `type_status`, `user_id`, `active`, `created_at`, `updated_at`) VALUES
(1,	'Comprar peruletas',	'Comprar piruletas 10 kg para Helloween',	'image001_image.png',	1,	1,	1,	'2017-02-13 09:31:22',	'2017-02-16 10:01:16'),
(3,	'Nueva tarea45',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id interdum quam. Donec pretium congue turpis, ut tincidunt massa eleifend nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas urna justo, mollis quis ligula eu, cons',	'suitezarza1g_image.jpg',	1,	3,	1,	'2017-02-13 09:36:01',	'2017-03-02 09:17:30'),
(4,	'Nueva tarea45',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id interdum quam. Donec pretium congue turpis, ut tincidunt massa eleifend nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas urna justo, mollis quis ligula eu, cons',	'',	1,	1,	1,	'2017-02-13 10:16:05',	'2017-02-16 09:58:32'),
(5,	'Nueva tarea45',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id interdum quam. Donec pretium congue turpis, ut tincidunt massa eleifend nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas urna justo, mollis quis ligula eu, cons',	'',	1,	1,	1,	'2017-02-13 11:03:20',	'2017-02-16 09:58:32'),
(6,	'Nueva tarea45',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id interdum quam. Donec pretium congue turpis, ut tincidunt massa eleifend nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas urna justo, mollis quis ligula eu, cons',	'',	1,	1,	1,	'2017-02-14 10:07:59',	'2017-02-16 09:58:32'),
(7,	'Tarea',	'Nueva tarea para gato',	'277ab2ea742688e4f3f135660b220844a0ca50e6gatito-durmiendo-en-cama.jpg',	1,	5,	1,	'2017-02-15 09:48:14',	'2017-02-17 10:29:27'),
(8,	'Cancelar pedido',	'Cancelar pedido de último cliente',	'7b345b88b490e65636f22c2d05bd056429cad9cdimage001.png',	1,	5,	1,	'2017-02-15 09:49:35',	'2017-02-17 10:29:04'),
(15,	'test create',	'test create bla bla bla',	'http://baseproject.dev/files/tasks/f6acfe6df850645f6cb665b5bb2dd3693c74242cimage001.png',	1,	5,	1,	'2017-02-17 10:40:16',	'2017-02-17 10:40:29'),
(19,	'Ulala',	'Ok esto es mi ulala',	'e87d14b079109eb7ba11cc4dfc645be4f8e9085eimage001.png',	1,	5,	1,	'2017-02-17 11:30:32',	'2017-02-17 11:30:41');

DROP TABLE IF EXISTS `tasks_status`;
CREATE TABLE `tasks_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tasks_status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'En Espera',	'2017-02-14 10:11:18',	'2017-02-14 10:11:18'),
(2,	'Preparado',	'2017-02-14 11:23:17',	'2017-02-14 11:23:17');

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
(1,	'Thatzad',	'Thatzad',	'informacion@thatzad.com',	'$2y$10$MKHqerJpNBYs8fFHYH16WeokWVGk1LQ/B4c3ba1UDhxF/bQD9Yzc2',	'Marques de Mulhacen 11',	'08034',	'Barcelona',	'936350620',	'Barcelona',	209,	1,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2016-10-06 07:58:37',	'0000-00-00 00:00:00'),
(2,	'Carla',	'Perez',	'carla.perez@thatzad.com',	'$2y$10$EYOsO8sHId4rTH1ZVNOcvOwHh.nFDKiJxPVJNNd5MPoQiRq.eEftq',	'Marques de Mulhacen 11',	'08034',	'Barcelona',	'936350620',	'Barcelona',	209,	1,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2016-10-06 07:58:37',	'0000-00-00 00:00:00'),
(3,	'Pau',	'Garcia',	'pau.garcia@thatzad.com',	'$2y$10$iZp/DuqiR1aLf5Kx8D1bK.jBRkEItB9NT58nk4/VUeh9Z6Z2KbvIe',	'Marques de Mulhacen 11',	'08034',	'Barcelona',	'936350620',	'Barcelona',	209,	1,	1,	'WtYlPllnjNrBGr2ZRdInmXNnpdc0GEjCHLtEB0jqxAZ4mfW8H8bQqWppl9WL',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2016-10-06 07:58:37',	'2017-03-08 11:12:08'),
(4,	'Manel',	'Domenech',	'manel.domenech@thatzad.com',	'$2y$10$ySm7f4fnKjwIfgRtwLqVDOJlprzAWWSNjO7F79DUzVQT9dDM1zshm',	'Marques de Mulhacen 11',	'08034',	'Barcelona',	'936350620',	'Barcelona',	209,	2,	1,	'VlFz7BzkR2wrltAzxFhkl8etiLxCH5YlEroV25rzt1sp1NorFoCxXFG5IVP9',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2016-10-06 07:58:37',	'2017-03-08 11:07:07'),
(5,	'Guest',	'Domenech',	'guest@thatzad.com',	'$2y$10$CMVq8zQ3RA0DGPcSeI/1x.vhe6RWW4ZbOSIyFiNB2sqdDTMyyNKs6',	'Marques de Mulhacen 11',	'08034',	'Barcelona',	'936350620',	'Barcelona',	209,	2,	1,	'k6KVbUJZmXvMV30dvkwb5lUPkgKeH1U8xvTs3FU77GKDClqGigNMtFmQTToh',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2016-10-06 07:58:37',	'2017-03-13 09:28:37');

DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE `users_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users_roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'2016-10-06 07:57:37',	'0000-00-00 00:00:00'),
(2,	'user',	'2016-10-06 07:57:37',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `users_status`;
CREATE TABLE `users_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users_status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'Activo',	'2016-10-06 07:57:37',	'0000-00-00 00:00:00'),
(2,	'Inactivo',	'2016-10-06 07:57:37',	'0000-00-00 00:00:00'),
(3,	'Esperando confirmación',	'2016-10-06 07:57:37',	'0000-00-00 00:00:00'),
(4,	'Eliminado',	'2016-10-06 07:57:37',	'0000-00-00 00:00:00'),
(5,	'Banneado',	'2016-10-06 07:57:37',	'0000-00-00 00:00:00');

-- 2017-03-13 11:24:36
