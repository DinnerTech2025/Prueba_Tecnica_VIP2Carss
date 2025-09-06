-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-09-2025 a las 21:43:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_encuestas_anonimas_vip2cars`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `nro_documento` varchar(20) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `nro_documento`, `correo`, `telefono`, `created_at`, `updated_at`) VALUES
(35, 'Leann', 'Schiller', '90866460', 'nathan31@example.org', '+1.445.516.5594', '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(36, 'Elisa', 'Mohr', '11096368', 'mertie49@example.net', '+1-720-607-1577', '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(37, 'Henri', 'Leuschke', '46313134', 'maryam.franecki@example.net', '+1 (424) 541-1278', '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(38, 'Geovanny', 'Morissette', '18403820', 'julius.schultz@example.net', '(425) 879-4146', '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(39, 'Oren', 'Johnston', '17927821', 'bryce.wuckert@example.net', '+1 (312) 888-2915', '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(40, 'Raphael', 'Lakin', '76450341', 'okub@example.org', '+1 (573) 623-7968', '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(41, 'Davonte', 'Johnston', '68798035', 'larry.wunsch@example.org', '+1-706-945-1963', '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(42, 'Cameron', 'Zemlak', '57928372', 'vada93@example.org', '619-640-3272', '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(43, 'Hilda', 'Turner', '76345427', 'osinski.liliane@example.net', '716-807-0728', '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(44, 'Juan', 'Pérez Gómez', '12345678', 'juan.perez@example.com', '987654321', '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(46, 'Emanuel', 'Chespirito', '7656156951', 'prueba@gmail.com', '9185495854', '2025-09-07 00:37:48', '2025-09-07 00:37:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_06_172742_create_clientes_table', 2),
(5, '2025_09_06_172750_create_vehiculos_table', 2),
(6, '2025_09_06_172808_create_encuestas_table', 2),
(7, '2025_09_06_172820_create_respuestas_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2sJ5lf8yB20lOTivW7YUHCMIfsFMJyFyOwBDpUpg', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT00ycUV5ZnR2SkVqVzVCZXBudWJMNlJyZGFGSmtyMW56MklobFo3RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757187573);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `placa` varchar(20) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `anio_fabricacion` year(4) NOT NULL,
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `placa`, `marca`, `modelo`, `anio_fabricacion`, `cliente_id`, `created_at`, `updated_at`) VALUES
(1, 'OLV-2279', 'Nissan', 'non', '2001', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(2, 'WFV-1815', 'Honda', 'id', '2000', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(3, 'ESG-3123', 'Chevrolet', 'ut', '2000', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(4, 'YUE-0639', 'Toyota', 'ea', '2020', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(5, 'SRA-6334', 'Chevrolet', 'qui', '2014', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(6, 'XOS-8925', 'Chevrolet', 'ullami', '2007', 37, '2025-09-06 23:01:33', '2025-09-07 00:28:52'),
(7, 'FYB-2920', 'Nissan', 'non', '2012', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(8, 'FLM-7628', 'Honda', 'non', '2014', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(9, 'IVB-5591', 'Chevrolet', 'ut', '2003', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(10, 'RVO-0339', 'Chevrolet', 'reiciendis', '2013', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(11, 'LFG-6043', 'Nissan', 'odit', '2012', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(12, 'QCC-5093', 'Ford', 'ducimus', '2021', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(13, 'MYD-2536', 'Honda', 'minus', '2004', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(14, 'KNP-7554', 'Nissan', 'consequatur', '2007', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(15, 'SSB-1485', 'Chevrolet', 'earum', '2015', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(16, 'YYF-1960', 'Nissan', 'consequatur', '2015', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(17, 'QTJ-1430', 'Honda', 'qui', '2020', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(18, 'VFF-6053', 'Nissan', 'excepturi', '2003', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(19, 'CLT-6353', 'Honda', 'minima', '2008', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(20, 'ILH-4954', 'Chevrolet', 'adipisci', '2023', 37, '2025-09-06 23:01:33', '2025-09-06 23:01:33'),
(23, 'CEN-012', 'Hyundai', 'I10', '2024', 46, '2025-09-07 00:37:48', '2025-09-07 00:38:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientes_nro_documento_unique` (`nro_documento`),
  ADD UNIQUE KEY `clientes_correo_unique` (`correo`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehiculos_placa_unique` (`placa`),
  ADD KEY `vehiculos_cliente_id_foreign` (`cliente_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
