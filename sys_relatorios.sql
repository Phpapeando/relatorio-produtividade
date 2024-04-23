-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Abr-2024 às 03:13
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sys_relatorios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_13_203848_create_sys_relatorios_table', 1),
(6, '2024_03_15_151546_create_sys_usuarios_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sys_relatorios`
--

CREATE TABLE `sys_relatorios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `setor` int(11) NOT NULL,
  `feito` text NOT NULL,
  `nfeito` text NOT NULL,
  `produtividade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sys_relatorios`
--

INSERT INTO `sys_relatorios` (`id`, `nome`, `setor`, `feito`, `nfeito`, `produtividade`, `created_at`, `updated_at`) VALUES
(1, 'Cathryn Christiansen MD', 5, 'Quo et aspernatur consequatur. Quam tempore assumenda laudantium architecto ipsum fugit amet. Minus cum minus vitae exercitationem.', 'Distinctio sed fugiat mollitia unde quia ex. Deleniti quia quas commodi facere qui non. Maxime facilis labore facilis et. Quia autem minus mollitia necessitatibus. Et nisi dolores nobis voluptatem.', 1, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(2, 'Kaylin Klein', 5, 'Qui id similique harum in et ipsum. Accusantium est cumque qui voluptatum quis. A amet est saepe autem consequatur ut voluptas. Numquam consequatur aliquid distinctio illo quae sit voluptatem.', 'Occaecati eos hic et porro eos quidem inventore suscipit. Quia aut consequatur tempora dolorem et quaerat id autem. Exercitationem placeat libero consequuntur quis rerum dicta porro. Temporibus delectus dolore nostrum.', 1, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(3, 'Mrs. Eliane Ledner', 2, 'Reiciendis hic aperiam quo ut nihil in. Error possimus modi dolor molestiae. Et nulla omnis sapiente non facere vitae.', 'Ea consequatur excepturi vitae delectus. Recusandae reprehenderit nihil qui reprehenderit sunt sunt quia.', 5, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(4, 'Miss Drew Wolf MD', 3, 'Et doloremque facere omnis aut dicta. Repellendus est incidunt quas distinctio voluptas optio. Velit et et amet numquam sed voluptatibus. Quia autem aut sunt officiis debitis sint. Qui qui rerum libero soluta nihil harum fuga vel.', 'Adipisci impedit molestiae officiis et et. Unde ipsa odio temporibus perspiciatis repellendus. Dolores exercitationem ut blanditiis tempora delectus recusandae.', 2, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(5, 'Elisha Keebler', 5, 'Molestiae aut et ab voluptatem ducimus. Illum repellendus et reprehenderit aut. Earum est velit quis dolorem ad aut. Magni sit rerum magnam molestiae voluptate et.', 'Eum corporis accusamus distinctio harum provident corrupti. Vero facilis corrupti doloremque inventore. Autem ut mollitia vitae.', 1, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(6, 'Lea Huel Jr.', 5, 'Commodi rerum iure asperiores qui ducimus voluptatem repellat. Et quis eum repellendus occaecati in sed dignissimos. Earum ut et corrupti nihil non sequi.', 'Architecto fuga blanditiis sapiente. Consequatur aliquam beatae quisquam voluptas excepturi quam sunt. Ad non voluptatem voluptatum. In ducimus quis qui iure eum consequatur.', 1, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(7, 'Carolyne Friesen', 2, 'Dolore iusto libero consequuntur molestiae maiores. Impedit adipisci sunt ut aperiam praesentium. Quidem est error voluptatem est voluptatem doloribus deserunt est. Qui omnis facilis tempore illo sit tempora maiores.', 'Molestias dolorum aut consequuntur nobis voluptas veniam. Et totam ut autem est quae numquam. Enim vitae numquam officiis a consequatur voluptate laudantium officia. Accusantium inventore quidem laboriosam id quos non quasi.', 4, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(8, 'Mr. Jarrell Braun Jr.', 1, 'Ut beatae ullam voluptas est animi. Natus accusamus voluptas ipsam eos quae. Sapiente dicta sit aliquam. Et est reprehenderit consequatur quo atque nam sit. Nihil et voluptatibus minus.', 'Perferendis ipsam adipisci sit placeat id officiis commodi. Commodi qui dolores vel neque. Pariatur eum ratione voluptas accusantium alias cupiditate. Id autem est aperiam.', 4, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(9, 'Dejuan Moen', 1, 'Optio eius quas est dolore doloribus voluptatem. Ea debitis nulla eveniet amet nemo esse. Delectus similique omnis soluta qui facere a aspernatur.', 'Sed et ea sit expedita quasi mollitia veniam. Possimus consequuntur assumenda explicabo ut iste quis maxime. Laudantium nobis nemo ut dicta delectus saepe.', 4, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(10, 'Mr. Amparo Mitchell Sr.', 4, 'Perferendis odit qui impedit voluptas. Et inventore quae et itaque quo. Nostrum omnis totam dolorum. Nihil repellendus voluptatem ex.', 'Voluptate aut similique qui. Labore velit et minima autem. Non voluptatibus ipsa temporibus architecto enim nesciunt commodi ducimus. Mollitia ad omnis nihil explicabo repudiandae hic.', 5, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(11, 'Colt Rice', 4, 'Quas consequatur ut consequatur aperiam assumenda modi. Explicabo qui quas dicta autem. Autem laborum fugit nesciunt et consectetur beatae ut.', 'Sint aut veritatis ea sunt non totam odit. Aspernatur autem at nostrum voluptatem ut tempora. Quasi quia deserunt repellat necessitatibus et nobis odit sint.', 3, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(12, 'Darien Ziemann', 4, 'Reiciendis quo et dolorem temporibus labore totam eius ipsam. Consequuntur qui rerum aut id. Ea omnis illo ea voluptatibus vel et debitis. Nobis consequatur dolorum asperiores magni eum.', 'Totam laborum reprehenderit est corrupti. Possimus debitis rerum cumque sequi aut delectus perspiciatis porro. Libero aut voluptas voluptatum natus quos. Blanditiis aut architecto et culpa ex.', 1, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(13, 'Annabelle Anderson', 3, 'Est et illo vero quo debitis molestias neque. Minima porro vero magnam animi repellendus aspernatur sed iste. Beatae laudantium culpa deleniti quaerat molestiae et libero.', 'Et illo repellendus qui vero nam. Velit qui voluptatem et sequi provident ut dolores. Praesentium totam delectus provident quae aperiam.', 1, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(14, 'Kris Rutherford', 3, 'Dolores molestiae error qui qui esse temporibus. Ea nesciunt nihil commodi voluptas facere molestias. Doloremque occaecati beatae dolorem commodi distinctio expedita. Ut eum rerum in praesentium tenetur et.', 'Nihil exercitationem ex ullam. Iusto quisquam saepe sed rerum accusamus veritatis voluptates. Est consequatur reprehenderit quia quaerat labore qui sint. Quis odit at non quibusdam error dicta. Cupiditate asperiores id et quia.', 1, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(15, 'Ms. Claire Schmidt I', 4, 'Dolor ea est quis doloremque officia. Repudiandae vitae quam reprehenderit id repudiandae vel dolorum. Aperiam dolor harum illum nobis voluptas fugit.', 'Consequatur ea cupiditate eum quisquam. Est mollitia accusamus molestiae et autem. Doloribus quia amet aliquam aut soluta. Et voluptas autem sed ullam sed voluptas repellat.', 3, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(16, 'Sabryna Gusikowski', 2, 'Et et quam vero beatae occaecati culpa suscipit. Necessitatibus deleniti ut tempore vero est fugit et voluptate. Autem velit iste vel praesentium. Officia nostrum sit ut blanditiis.', 'Hic eum maiores quae at qui odio. Dolorem facilis cum qui non ut modi. Similique consequuntur maiores beatae eaque pariatur facere omnis.', 4, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(17, 'Carli Windler', 4, 'Et nesciunt illo aut dignissimos consequatur. Atque possimus qui nemo autem ut impedit. Nihil magni aut in et. Quo rerum pariatur accusantium ut quaerat. Aliquam rerum libero atque. Harum vero ducimus veritatis reprehenderit.', 'Ea earum quos omnis et nostrum. Saepe sit aut delectus mollitia eveniet id et neque. Voluptatem enim qui minus magni. Aut ullam dolores ex quo.', 4, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(18, 'Ettie Weissnat', 3, 'Amet repellat iusto tempore nisi aspernatur velit. Voluptas quam ut tenetur dolorem vero omnis dolor. Quis suscipit mollitia vel provident.', 'Soluta enim quia illo quos voluptas. Assumenda autem quod qui ut eum. Eos nobis atque aut fugiat nulla sit nisi. Rerum aspernatur enim consequatur beatae adipisci porro.', 5, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(19, 'Tre Feil', 1, 'Fuga illo est nam. Deleniti ut voluptas fuga ut odit. A sit in architecto veniam veritatis occaecati. Repellendus nisi alias aut enim rerum omnis. Voluptatem libero doloribus sint. Aperiam dicta iusto sapiente fuga excepturi pariatur et eligendi.', 'Quas fugiat non ipsum quidem natus commodi at. Eum laudantium laboriosam quam doloremque voluptas. Neque reprehenderit accusantium quod facere.', 4, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(20, 'Kiley Murray', 4, 'Harum corrupti similique et quas expedita et. Fuga repellendus harum recusandae dolores. Iste libero atque quia adipisci. Itaque eaque fugiat sit quibusdam laudantium soluta consequatur.', 'Dolores aperiam rerum laudantium provident architecto quo assumenda. Consectetur impedit velit ut laudantium. Dolor delectus recusandae est dignissimos magni et. In recusandae consequatur dolor enim numquam nisi eligendi. Dolores et similique ab quis.', 2, '2024-04-15 23:55:15', '2024-04-15 23:55:15'),
(21, 'German Gutkowski', 2, 'Et vel nemo molestiae ipsa asperiores. Possimus laboriosam autem cupiditate et ut aut. Id laudantium asperiores temporibus quo corporis.', 'Pariatur in quia in cumque omnis optio molestias voluptatum. Dicta dignissimos perferendis optio consequatur odio rerum.', 4, '2024-04-15 23:55:16', '2024-04-15 23:55:16'),
(22, 'Maymie Wuckert', 4, 'Voluptas quia fugit placeat. Sed aut alias ducimus quia quia dolor voluptas. Iste sed earum earum omnis voluptatem ut qui. Rem est dolorem consectetur minus neque eum nihil.', 'Aliquid eum labore ad ut in voluptatibus ea. Et cupiditate cupiditate quas quidem voluptates eligendi. Voluptas commodi officiis aliquid.', 4, '2024-04-15 23:55:16', '2024-04-15 23:55:16'),
(23, 'Brionna Brown', 2, 'Officiis illum beatae voluptas rerum maiores. Ea aliquam voluptatum ipsa reiciendis. Quidem a ea asperiores reprehenderit. Earum quia qui asperiores.', 'Consequuntur tempore consequuntur perspiciatis iusto qui maiores. Et quis labore sed velit. Alias est vel impedit corporis. Vel ex sed natus. Quod vero nobis nihil soluta inventore.', 1, '2024-04-15 23:55:16', '2024-04-15 23:55:16'),
(24, 'Avis Bayer', 2, 'Tempora dolor quasi ea assumenda velit doloremque. Ab aut sit iure laborum fuga. Quidem ut quas autem et. Asperiores aut ut nihil.', 'Ut non voluptatem vero voluptatem. At consequatur fuga dolorem. Modi fugiat minus veritatis ullam totam. Sint dolorum ab ut in consequatur quos. Et tempora pariatur neque dolorem commodi ipsam. Eum ut unde occaecati. Ipsum deserunt culpa quia velit.', 1, '2024-04-15 23:55:16', '2024-04-15 23:55:16'),
(25, 'Alysson Christiansen', 2, 'Alias quos placeat sit et ut. Perspiciatis consequatur quidem qui ex vel molestias mollitia. Quo et maxime nihil. Maiores ipsum ut veritatis.', 'Voluptas velit molestiae quaerat harum dignissimos suscipit nostrum. Sed error qui saepe dolor. Eveniet deserunt ratione natus ducimus porro. Nihil voluptatem ut et adipisci.', 1, '2024-04-15 23:55:16', '2024-04-15 23:55:16'),
(26, 'Mr. Wilfred Olson', 1, 'Pariatur modi ipsa reprehenderit labore non minima. Sit totam omnis nihil quia iusto. Quod esse voluptatem dolorem id labore et consectetur labore.', 'Expedita esse et possimus voluptas aliquid et. Voluptatem voluptas incidunt magnam. Laborum voluptatem dolore adipisci ad delectus sint fugiat. Maxime laborum exercitationem maiores voluptates. Aliquam praesentium quasi autem.', 2, '2024-04-15 23:55:16', '2024-04-15 23:55:16'),
(27, 'Dr. Jayda Von V', 3, 'Sapiente labore et non. Dolorem tenetur rerum repellat quia. Sit molestias cum ullam omnis et aut. Deleniti distinctio dicta laborum maxime eius. Ut velit qui sunt praesentium quaerat dolores.', 'Exercitationem omnis id hic est aspernatur eveniet consequatur. Incidunt voluptatem dolorem deleniti aperiam dolor. Eius fugit iure quaerat maxime blanditiis voluptate tempore. Ut vel quo rem perspiciatis odit nobis dolor.', 1, '2024-04-15 23:55:16', '2024-04-15 23:55:16'),
(28, 'Forest Emmerich DVM', 4, 'Culpa architecto in enim quidem et. Eius illum ratione aliquam molestias sit. Reiciendis quae eveniet quod aspernatur magnam similique tenetur.', 'Nobis molestiae aspernatur veniam quia omnis expedita. Rem qui unde officia praesentium possimus perspiciatis ut vel. Natus consequatur nobis nobis dignissimos eius et. Autem omnis sed et debitis.', 3, '2024-04-15 23:55:16', '2024-04-15 23:55:16'),
(29, 'Tyra Murphy', 4, 'Molestiae aut sint est dolores. Esse consequatur ut mollitia aliquam perspiciatis. Ducimus reiciendis nisi dolore ut corporis eius.', 'Non reiciendis tempore non reprehenderit illo beatae officiis sapiente. Sapiente iste rerum et eum est. Deleniti consectetur ut numquam ut cum aut ipsa.', 5, '2024-04-15 23:55:16', '2024-04-15 23:55:16'),
(30, 'Miss Maymie White PhD', 1, 'Voluptatem ipsam minus autem suscipit placeat eveniet modi atque. Veritatis odit aspernatur atque nostrum eaque aliquid voluptatum. Est aut cupiditate saepe accusantium earum cumque.', 'Laudantium qui vel aut error et porro vero. Suscipit quam aut in harum et iusto. Quos sapiente qui eos doloribus repellendus. Optio officiis aut fugiat aut eaque. Laudantium rerum id laborum. Est debitis a ab natus voluptate amet quo.', 3, '2024-04-15 23:55:16', '2024-04-15 23:55:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sys_usuarios`
--

CREATE TABLE `sys_usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `setor` int(11) NOT NULL,
  `chave` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `setor` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `setor`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fabio', 5, '$2y$10$Ket0YLvjDnrfm/fPYsYXzeoy4Msgss/M2RGb7mvnZFFHF2kdY4kne', NULL, NULL, '2024-04-16 00:08:30'),
(2, 'Luis', 0, '$2a$11$iGWjqyEYEKBH1LsqeUMHy.liNRPsuSgQn3kNKslJDvB643chyMwgO', NULL, NULL, NULL),
(3, 'Elisana', 1, '$2a$11$4PwSFnMox1ntM8ZoKleJsOqKqj44ouYXQ8ypApogxE0O6HfxkHdY2', NULL, NULL, NULL),
(4, 'Joaquim', 2, '$2a$11$tA.cMNGtm6cUspY3p/U9W.EErUXzEkH58iSGlRptsD3dl6v.UcQeO', NULL, NULL, NULL),
(5, 'Amanda', 3, '$2y$10$gffwNNoRhOsmXcpACIrEcu6KKKFDcnSuuFJjSvtJVzLMGIXyOkVkS', NULL, NULL, '2024-04-05 19:30:22'),
(6, 'Alex', 4, '$2a$11$PzZ4hDQ2.s7Kbuyo0hC3CO7idbNfARjKSFOx9FFNyNpTwbq3PBmpy', NULL, NULL, NULL),
(7, 'Jones', 5, '$2a$11$iGWjqyEYEKBH1LsqeUMHy.liNRPsuSgQn3kNKslJDvB643chyMwgO', NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `sys_relatorios`
--
ALTER TABLE `sys_relatorios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sys_usuarios`
--
ALTER TABLE `sys_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sys_relatorios`
--
ALTER TABLE `sys_relatorios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `sys_usuarios`
--
ALTER TABLE `sys_usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
