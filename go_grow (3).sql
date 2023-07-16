-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 01:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_grow`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `views_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `short_text`, `full_text`, `category_id`, `created_at`, `updated_at`, `deleted_at`, `views_count`, `slug`) VALUES
(1, 'Veritatis hic omnis expedita pariatur.', 'Temporibus in delectus cupiditate consequatur et. Voluptatem labore alias inventore minus. Harum iure cumque magni asperiores quisquam officia vel.', 'Tenetur iure non dolorem in. Odio doloribus aut unde deleniti quisquam dolores facere sed. Reprehenderit repellat aliquid corporis odit eligendi. Et eos sint aut sit in dicta. Et est aut ratione sint ea consequatur voluptatum. Enim tempora qui sint et eos maxime. Accusamus odit harum eligendi voluptas quos velit est. Consequatur quo quia cupiditate labore nostrum deleniti dicta. Excepturi dolorum reiciendis aut ab.', 2, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 343, 'veritatis-hic-omnis-expedita-pariatur'),
(2, 'Sit voluptatem deserunt doloribus.', 'Cumque velit sit aut est corporis libero. Dolores enim fuga quibusdam nesciunt enim neque cum. Excepturi perspiciatis quidem praesentium ut. Repellendus totam perferendis perferendis.', 'Facere doloribus totam dolores esse non. Laudantium officiis et quis commodi doloribus ut deserunt. Atque possimus aut delectus nulla aliquid quae facere. Deleniti voluptatem sed quo dolorem labore eaque. Nihil at et illo. Nemo magnam dolor cumque animi. Dignissimos ut maxime consequuntur. Similique veritatis autem distinctio aspernatur maxime dolores sint. Eum qui aspernatur eos occaecati. Corrupti quo perspiciatis quae ipsam ipsum. Corporis fugiat occaecati veniam neque. Amet animi ratione repellat quas impedit et ipsum consequatur. Voluptas dolores eum autem officia id tenetur assumenda inventore.', 5, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 89, 'sit-voluptatem-deserunt-doloribus'),
(3, 'Tempore sunt autem iusto nemo voluptas quia.', 'Voluptatum sed commodi magni tenetur. Nihil vel consectetur impedit atque aut.', 'Quos assumenda velit nostrum nostrum aut et veniam molestiae. Dolor ratione inventore nemo. Quisquam rerum quidem est quo laudantium amet iure. Ex quo cumque et maiores vero quibusdam totam. Tempore numquam et sapiente earum similique. Praesentium et earum voluptas voluptatem quia vero dolor est. Modi facere quis voluptatem laudantium molestiae inventore. A voluptates quas repellendus adipisci hic unde voluptate. Velit ut et non dolore quis qui illo. Voluptas et quis repellendus molestiae. Sit sed velit ut et. Eum sint eos maxime fugiat numquam.', 7, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 191, 'tempore-sunt-autem-iusto-nemo-voluptas-quia'),
(4, 'Qui quasi quia aut accusamus.', 'Atque aut delectus voluptatem labore. Provident dolore culpa nisi nisi aut ut. Iure quo illum ea assumenda. Sunt laudantium blanditiis ut.', 'Qui possimus id dolore. Explicabo qui voluptatem vel qui quibusdam tempora vel. Molestiae provident rerum veniam. Dolores asperiores provident fuga ut ullam. Eum numquam nam est nesciunt et. In fuga aut nostrum et. Quas earum corrupti cumque atque sint id qui. Sit dolores ad qui corrupti reprehenderit consequatur voluptas. Fugit beatae soluta dolorum dignissimos voluptas. Qui et sunt non. Ipsam minus quia est necessitatibus. Rerum delectus laboriosam deserunt nihil reprehenderit.', 2, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 167, 'qui-quasi-quia-aut-accusamus'),
(5, 'Non dolores et eius possimus illum.', 'Rerum aspernatur quisquam qui est officia nesciunt id. Laborum id consequuntur dolor vel. Dignissimos vel et repellendus eos iste laudantium delectus tempore. Quo et ipsam iure architecto minus aperiam corrupti. Quaerat laborum explicabo excepturi eum sapiente dolores vel placeat.', 'Est voluptate quia qui molestiae laudantium enim occaecati. Ut veritatis illum dicta exercitationem. Exercitationem repellendus soluta rerum totam eum modi. Accusamus et molestiae saepe impedit. Soluta blanditiis molestias ipsam commodi sapiente quia in. Hic accusamus quidem recusandae recusandae. Voluptatibus quis ipsum hic sit. Voluptas ipsam dolores sed consequatur atque veritatis.', 8, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 290, 'non-dolores-et-eius-possimus-illum'),
(6, 'Odit voluptates incidunt accusantium aperiam dolorum.', 'Atque accusamus repellendus voluptates fugiat occaecati est voluptatem. Consequatur ut sapiente beatae beatae ipsum nostrum enim. Ut qui qui nisi voluptatem dolor.', 'Aut ducimus qui quis et maiores aut. Nulla animi nisi dicta. Sint ut corrupti et assumenda laboriosam. Aspernatur molestiae ut ex debitis molestiae qui consequuntur. Adipisci rem eaque molestiae vel voluptatem voluptas repellat dolores. Autem culpa aut voluptas quod porro ipsum. Esse libero velit enim et nostrum. Quia nihil ea numquam sed voluptatem. Atque atque deleniti maxime velit eveniet quae doloremque eaque. Aut quas rem nihil commodi ad corporis.', 2, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 174, 'odit-voluptates-incidunt-accusantium-aperiam-dolorum'),
(7, 'Reprehenderit earum et ad sit cupiditate.', 'Laudantium consectetur quam minus ea. Recusandae eos fuga aut maxime voluptatibus. Est dignissimos minus et. Et qui eum non tenetur soluta optio.', 'Quam dolore et minima beatae aut id qui. Deserunt neque maiores et. Et laborum aut et non deserunt impedit quia. Nihil non fugiat voluptas sed nam ut qui. Molestiae recusandae dignissimos error enim eos harum et. Aut molestias porro et hic velit sunt sed. Maiores distinctio omnis et quod eos laboriosam. Ex aut commodi exercitationem eligendi non libero. Animi nulla omnis commodi quasi. Qui omnis laudantium tenetur et aperiam eum. Consectetur iste provident veniam voluptas. Minus temporibus qui ut. Qui rem rerum repellat amet.', 8, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 856, 'reprehenderit-earum-et-ad-sit-cupiditate'),
(8, 'Aliquid ipsam quis et possimus dolorum odio nemo.', 'Explicabo vero dolorem accusamus sint. Consequatur possimus blanditiis recusandae sint totam libero. Maxime sint delectus tenetur quos quia molestias. Maxime voluptatem voluptate inventore non est est. Rem sed saepe est quis eligendi quis aut.', 'Ea veritatis accusantium facere et. Magni dignissimos sit quia laudantium est eos molestias. Maxime repellat suscipit eos quo reprehenderit. Ipsa nisi deserunt iure quia dolorem magni totam. Repellendus ipsa est facere aut. Et dolor aperiam cupiditate suscipit vero sapiente. Sed dolor nobis eaque ullam et est. Deserunt deleniti odit aut vero minus sit. Unde accusantium ex perspiciatis ut repellendus quia necessitatibus ut. Doloribus ut incidunt voluptatem.', 3, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 718, 'aliquid-ipsam-quis-et-possimus-dolorum-odio-nemo'),
(9, 'Molestiae modi saepe omnis molestias totam voluptas.', 'Et placeat qui iusto velit debitis mollitia eaque. Nobis dolor quisquam tempore voluptatum ut est. Possimus qui est recusandae nesciunt harum corrupti minus.', 'Tempore harum deleniti unde vero repudiandae ut. Veniam architecto ab iure illo et laborum. Repellat nulla consectetur eum quisquam quos recusandae. Delectus iure quia earum deleniti. Ea id id eveniet qui consequatur dolorem quo. Non quaerat illum et fugiat. Et quis suscipit provident natus soluta eum. Harum nostrum porro tempore.', 7, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 686, 'molestiae-modi-saepe-omnis-molestias-totam-voluptas'),
(10, 'Fuga recusandae dolorem sed.', 'Dignissimos placeat nihil consequatur. Fuga dolorem enim adipisci quidem sed earum cum.', 'Praesentium id qui consequatur commodi reiciendis in rerum. Et deleniti id ipsam. Quae aut repellat excepturi sit. Consequatur dignissimos necessitatibus rerum sapiente sint quis nihil. Rerum voluptatibus architecto eum. Velit rerum et sequi ut. Quam iusto sit eum blanditiis fugit totam delectus.', 1, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 329, 'fuga-recusandae-dolorem-sed'),
(11, 'Sunt quasi occaecati id explicabo ex deserunt aut.', 'Hic qui ducimus aut repudiandae natus quod doloremque. Ut harum harum quia provident sed.', 'Rerum dolores qui reprehenderit cumque earum ut asperiores. Aliquam repellat assumenda rerum inventore natus non qui. Laboriosam ab harum voluptatem rem tenetur debitis sed. Dolor incidunt dolor aperiam sint rerum. Occaecati et ut laudantium. Quae temporibus ratione quaerat. Et eius nihil sunt deserunt modi. Dolor maiores iusto autem suscipit. Aut delectus rerum vel voluptatibus consequatur. Est perferendis officia eaque iste.', 8, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 738, 'sunt-quasi-occaecati-id-explicabo-ex-deserunt-aut'),
(12, 'Alias optio consequatur est et omnis.', 'Qui qui omnis nulla quaerat. Qui perspiciatis facere ducimus. Nisi ipsam omnis est dicta. Et reiciendis nisi voluptatibus magni.', 'Odit aut totam quasi tenetur ipsam id expedita. Neque enim magnam amet velit et eveniet. Sunt quos neque maiores molestiae qui velit aut. Eos odit quia sit fuga est accusantium sint. Eius autem inventore sit. Ut non repellat inventore asperiores. Vel vel ut sunt eius quos recusandae aut minima. Nihil quaerat magni aut autem necessitatibus nulla repellat.', 4, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 389, 'alias-optio-consequatur-est-et-omnis'),
(13, 'Sapiente corporis perspiciatis ipsam optio omnis maxime earum.', 'Sunt velit architecto soluta. Qui molestiae maxime voluptates est. Qui cupiditate eum velit ducimus ipsa quos. Laudantium quidem consequuntur eos id. Modi quia et corporis ut ducimus et.', 'Voluptatem soluta recusandae dolor mollitia autem. Consectetur excepturi ut ipsa laborum. Numquam dolore iste iure sed autem molestias ut. Et dolores eius culpa molestiae aut quas voluptatem. Enim tenetur est aut odit eius molestiae facilis ea. A mollitia eos doloribus velit earum non dolor. Voluptates et eos et dolores. Minima voluptates perspiciatis quasi est laudantium deleniti. Earum ut porro sit deserunt dolores est. Inventore ipsum beatae voluptates quam necessitatibus eos.', 8, '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 388, 'sapiente-corporis-perspiciatis-ipsam-optio-omnis-maxime-earum'),
(14, 'Sunt est dolores et dicta expedita sequi sit nulla.', 'Et ut in necessitatibus debitis. Ut fuga at dolorem consequatur. Qui eos delectus maiores est distinctio. In in perspiciatis quos non perspiciatis.', 'Ex quam et aut reprehenderit voluptatibus adipisci quo. Deleniti officia quia et explicabo hic alias. Repudiandae omnis optio beatae molestias quibusdam sed. Natus voluptas aut impedit. Tempore ut vero laudantium dolores. Hic iusto delectus reiciendis placeat aut. Qui vel adipisci reprehenderit dicta et et odit voluptates. Officiis tempora accusamus inventore. Quod amet aut laboriosam omnis asperiores. Tempora illum nisi harum. Explicabo similique est autem eius illo.', 10, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 382, 'sunt-est-dolores-et-dicta-expedita-sequi-sit-nulla'),
(15, 'Ipsa cum est ipsa veniam.', 'Quae praesentium repellat sequi sapiente voluptatibus eos. Qui ea et cumque ipsa deleniti optio error. Nisi sed repellat occaecati laboriosam aut.', 'Et hic magni consequuntur eaque itaque ea facere. Suscipit dolor voluptatum quod nobis. Culpa rerum nam ipsum. Facilis officiis at odit vitae debitis. Quo qui sequi non facilis sunt id consequatur. Nam esse sit qui nihil. Ipsam quis sed saepe consectetur. Suscipit mollitia voluptas velit eius.', 5, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 617, 'ipsa-cum-est-ipsa-veniam'),
(16, 'Distinctio veniam et ut animi.', 'Voluptatum debitis quae incidunt provident. Quia eum aut inventore ullam amet maxime maxime. Tenetur quo facilis autem harum aut qui debitis. Aut provident expedita dignissimos incidunt aut omnis. Iusto asperiores quo non consectetur temporibus dolorem.', 'Assumenda ex fugit sequi nostrum. Consequatur dolorem deleniti aliquam blanditiis dolorem. Quasi non odio ut ex. Quae vitae iure ipsum officia dolore asperiores ut. Cumque amet voluptatem sint et impedit. Labore quibusdam repellendus ut provident neque sapiente. Saepe cum quasi culpa.', 5, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 679, 'distinctio-veniam-et-ut-animi'),
(17, 'Enim animi quaerat veniam.', 'Ut cupiditate nisi et quae voluptas. Quae totam repellat corporis sit eos est officiis. Est enim ut est dolorem. Quia expedita magnam modi debitis expedita.', 'Est cumque praesentium rerum amet pariatur dicta. Et amet omnis sit amet officiis omnis quia. Eum adipisci eveniet expedita exercitationem voluptatibus. Similique animi nemo at. Nihil accusamus nihil consequatur voluptates quo officia. Soluta rerum voluptatibus assumenda et assumenda exercitationem illo. Ad id tempora qui ipsum ullam fuga. Repellat rerum sit vel exercitationem a odio nihil.', 10, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 107, 'enim-animi-quaerat-veniam'),
(18, 'Animi quo quasi occaecati provident asperiores natus sed ea.', 'Est quia velit autem in. Sed sunt ipsa corrupti iure.', 'Optio voluptatem officia in expedita laudantium numquam voluptates. Adipisci perspiciatis dolores veniam animi. Consectetur dolores rerum qui cupiditate est explicabo voluptatibus nisi. Enim dolores sed illum maxime odio non. Qui esse facilis nostrum qui animi dolor delectus. Ut impedit sint nihil dolore vero quidem. Nobis ipsum rerum veniam ut aut est. Et asperiores et sit quia dolorem ipsam. Quos aut distinctio sunt soluta iure ea optio. Aut autem molestiae adipisci consequatur. A aperiam et voluptatem nihil culpa laborum commodi. Exercitationem quia unde magnam tempora temporibus aut.', 10, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 182, 'animi-quo-quasi-occaecati-provident-asperiores-natus-sed-ea'),
(19, 'Reprehenderit doloremque repudiandae sunt eos enim.', 'Provident aperiam enim repellat et. Est sint sequi vero ipsum. Nam molestiae fugit iusto fuga. Repellendus id et temporibus accusantium doloribus sint et.', 'Veritatis eum vitae omnis consequuntur repudiandae repellendus necessitatibus. Odit neque sit cum dolorem. Voluptatem quibusdam quis tempora id in consequuntur tenetur exercitationem. Voluptatibus voluptatibus impedit velit voluptatem aut ipsam ex. Totam alias cupiditate odio distinctio doloribus cupiditate sit blanditiis. Necessitatibus molestiae omnis iste aliquam hic. Aut non error quis necessitatibus alias animi qui.', 7, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 106, 'reprehenderit-doloremque-repudiandae-sunt-eos-enim'),
(20, 'Consequatur omnis et incidunt enim quis voluptatibus laborum.', 'Animi est distinctio qui fugit dolorem accusamus aliquid. Magni nam quasi vel velit dicta. Velit ipsam rerum quasi quia. Molestiae odit consequuntur voluptates ipsa.', 'Sed nostrum occaecati perferendis ex. Est corporis quisquam voluptatum facilis amet non at. Nemo quasi voluptatem est nulla doloremque ducimus. Non quia quidem dolorem veniam nam totam. Officia dolores amet deleniti sed. Qui qui mollitia maiores quia nihil nemo vel.', 8, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 888, 'consequatur-omnis-et-incidunt-enim-quis-voluptatibus-laborum'),
(21, 'Non est et et aliquid.', 'Veritatis ea doloremque dolore earum. Natus odit ratione et est molestias dolorum. Libero est natus accusantium aliquid et.', 'Omnis vel sequi non cum. Omnis qui sapiente minima dolorum. Sit numquam voluptatem reiciendis eos facere. Eveniet possimus possimus totam ea ipsa facilis. Aut et consequatur corporis. Recusandae quia ab quasi aut pariatur. Voluptatum earum ipsa sit recusandae quis illo sequi. Deserunt omnis quo quisquam aspernatur voluptatum qui iusto. Maiores earum dignissimos et et nam ut omnis. Facilis eveniet voluptatem vitae qui aspernatur et esse.', 6, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 960, 'non-est-et-et-aliquid'),
(22, 'Molestiae consequatur rem velit perferendis esse dignissimos.', 'Dolorem sit libero aliquam rerum repudiandae voluptate. Sit harum et sit. Atque ut ex ut accusamus quidem rem nulla.', 'Aut voluptatem aut vel. Aspernatur ab cum nulla et impedit. Recusandae commodi cum est architecto perferendis non qui. Tempore eligendi incidunt praesentium omnis rerum eum. Excepturi atque dolores ut ut culpa enim. Excepturi neque ea sit qui. Nemo quae sed dolore itaque aut commodi dolor minima. Nemo incidunt autem porro repellat et. Corporis temporibus ut nulla consequatur omnis dolor. Et architecto praesentium quidem mollitia optio.', 10, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 543, 'molestiae-consequatur-rem-velit-perferendis-esse-dignissimos'),
(23, 'Magni excepturi dignissimos rem iusto accusamus aut.', 'Accusamus sit dolorem ut est pariatur. Non debitis atque fugit.', 'Quas repudiandae voluptate repudiandae nulla. Necessitatibus voluptas unde eum non iusto. Quod vel voluptas dolor. Unde deleniti et earum similique. Sed ad nisi natus corporis est rerum. Laborum veniam amet id ratione magni. Voluptas ut possimus asperiores amet. Consequatur necessitatibus non corporis quo ea quae voluptas. Rerum distinctio voluptate dolor temporibus. Et dolore illum accusantium modi accusamus aut. Et odit accusantium aut iste optio dolorem. Qui similique odit est iste.', 3, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 590, 'magni-excepturi-dignissimos-rem-iusto-accusamus-aut'),
(24, 'Dolores vel voluptas doloribus voluptas ut.', 'Excepturi expedita exercitationem quia officiis facilis aut quis. Ipsam natus eum quo voluptatem beatae animi qui. Quae minus quod omnis ea soluta. Consequatur ut quia qui est accusantium ipsum accusamus.', 'Id autem totam qui sed rerum nostrum consectetur. Et velit non et exercitationem molestiae eius. Velit ipsam est ea. Quia voluptas eligendi error vel quasi ut porro. Voluptates eos sit dolorem. Consequuntur sapiente asperiores sed ab sed atque corrupti. Impedit libero magni deleniti quia. Laudantium sequi quaerat fugiat nulla est impedit nihil.', 8, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 447, 'dolores-vel-voluptas-doloribus-voluptas-ut'),
(25, 'Velit dolores veritatis non tempora magnam commodi voluptatibus.', 'Vitae assumenda sequi ipsam et ut rem quod voluptatem. In dolorum aut porro autem quidem. Repellat nemo optio quae qui eos libero atque. Modi consectetur corrupti quo unde perferendis tempore eos.', 'Dolor tempora dolores optio quaerat aliquid ab. Provident laudantium quia quibusdam nesciunt. Dolorem ipsa aperiam in. Quia iusto officia nesciunt ea atque est. Expedita quidem dolore dolorem dolore esse ut praesentium. Delectus libero ea commodi ratione eum quod. Aut et ea consequuntur illo autem mollitia. Quaerat molestias porro occaecati aut alias. Voluptates quis sit nobis excepturi quis reiciendis dolorem deleniti. Officia vitae illo maxime et.', 7, '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 432, 'velit-dolores-veritatis-non-tempora-magnam-commodi-voluptatibus');

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

CREATE TABLE `article_tag` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_tag`
--

INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 8),
(1, 9),
(1, 14),
(1, 17),
(1, 24),
(1, 26),
(1, 27),
(1, 29),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(3, 14),
(3, 23),
(4, 1),
(4, 2),
(4, 3),
(4, 5),
(4, 6),
(4, 8),
(4, 10),
(4, 13),
(4, 16),
(4, 18),
(4, 20),
(4, 24),
(4, 26),
(4, 29),
(5, 1),
(5, 2),
(5, 3),
(5, 5),
(5, 6),
(5, 7),
(5, 9),
(5, 10),
(5, 11),
(5, 12),
(5, 13),
(5, 14),
(5, 15),
(5, 16),
(5, 18),
(5, 19),
(5, 21),
(5, 23),
(5, 25),
(5, 27),
(5, 28),
(5, 29),
(6, 1),
(6, 3),
(6, 7),
(6, 8),
(6, 9),
(6, 13),
(6, 15),
(6, 16),
(6, 19),
(6, 21),
(6, 23),
(6, 27),
(6, 28),
(7, 2),
(7, 5),
(7, 7),
(7, 8),
(7, 12),
(7, 21),
(7, 22),
(7, 25),
(8, 11),
(8, 14),
(8, 19),
(8, 21),
(8, 22),
(8, 25),
(9, 3),
(9, 5),
(9, 6),
(9, 8),
(9, 10),
(9, 11),
(9, 12),
(9, 14),
(9, 21),
(9, 23),
(9, 26),
(9, 27),
(9, 30),
(10, 6),
(10, 15),
(11, 5),
(11, 10),
(11, 15),
(11, 29),
(12, 3),
(12, 4),
(12, 7),
(12, 11),
(12, 13),
(12, 15),
(12, 16),
(12, 18),
(12, 19),
(12, 20),
(12, 21),
(12, 23),
(12, 26),
(12, 29),
(12, 30),
(13, 2),
(13, 3),
(13, 4),
(13, 5),
(13, 6),
(13, 9),
(13, 10),
(13, 13),
(13, 14),
(13, 19),
(13, 20),
(13, 22),
(13, 23),
(13, 25),
(13, 26),
(13, 27),
(14, 4),
(14, 13),
(14, 18),
(14, 21),
(15, 2),
(15, 3),
(15, 7),
(15, 8),
(15, 11),
(15, 12),
(15, 18),
(15, 19),
(15, 21),
(15, 24),
(15, 26),
(15, 28),
(15, 30),
(16, 5),
(16, 7),
(16, 12),
(16, 16),
(17, 3),
(17, 4),
(17, 13),
(17, 16),
(18, 3),
(18, 8),
(18, 9),
(18, 17),
(18, 20),
(19, 13),
(19, 21),
(19, 26),
(20, 2),
(20, 3),
(20, 4),
(20, 6),
(20, 7),
(20, 9),
(20, 11),
(20, 13),
(20, 14),
(20, 15),
(20, 16),
(20, 17),
(20, 20),
(20, 21),
(20, 22),
(20, 23),
(20, 24),
(20, 25),
(20, 26),
(20, 27),
(20, 28),
(20, 29),
(20, 30),
(21, 1),
(21, 3),
(21, 5),
(21, 6),
(21, 7),
(21, 8),
(21, 9),
(21, 10),
(21, 11),
(21, 12),
(21, 13),
(21, 14),
(21, 15),
(21, 16),
(21, 17),
(21, 18),
(21, 19),
(21, 20),
(21, 21),
(21, 22),
(21, 23),
(21, 25),
(21, 26),
(21, 27),
(21, 28),
(21, 29),
(22, 1),
(22, 4),
(22, 9),
(22, 17),
(22, 21),
(22, 26),
(23, 1),
(23, 2),
(23, 3),
(23, 5),
(23, 6),
(23, 8),
(23, 10),
(23, 11),
(23, 12),
(23, 13),
(23, 14),
(23, 15),
(23, 16),
(23, 17),
(23, 21),
(23, 25),
(23, 27),
(23, 28),
(24, 1),
(24, 2),
(24, 3),
(24, 4),
(24, 5),
(24, 6),
(24, 7),
(24, 8),
(24, 9),
(24, 10),
(24, 11),
(24, 12),
(24, 13),
(24, 14),
(24, 15),
(24, 16),
(24, 17),
(24, 18),
(24, 19),
(24, 20),
(24, 21),
(24, 22),
(24, 23),
(24, 24),
(24, 25),
(24, 26),
(24, 27),
(24, 28),
(24, 29),
(24, 30),
(25, 1),
(25, 2),
(25, 3),
(25, 5),
(25, 6),
(25, 7),
(25, 8),
(25, 10),
(25, 11),
(25, 12),
(25, 13),
(25, 14),
(25, 15),
(25, 16),
(25, 17),
(25, 18),
(25, 19),
(25, 20),
(25, 22),
(25, 24),
(25, 25),
(25, 26),
(25, 27),
(25, 28),
(25, 29),
(25, 30);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `slug`) VALUES
(1, 'General', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'general'),
(2, 'Account Settings', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'account-settings'),
(3, 'Security & Billing', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'security-billing'),
(4, 'Using gomac', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'using-gomac'),
(5, 'Email campaign', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'email-campaign'),
(6, 'gomac Configurations', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'gomac-configurations'),
(7, 'Products', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'products'),
(8, 'Customers', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'customers'),
(9, 'Orders', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'orders'),
(10, 'Suppliers', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'suppliers');

-- --------------------------------------------------------

--
-- Table structure for table `crop_info`
--

CREATE TABLE `crop_info` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `uses` varchar(255) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `filename` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop_info`
--

INSERT INTO `crop_info` (`id`, `product_id`, `name`, `price`, `description`, `uses`, `image`, `filename`, `created_at`, `updated_at`) VALUES
(7, NULL, 'Paddy', '4567', 'asdfghjkliuytrewertyhujk', 'sdfghjkl;', '1683751419.jpg', '1683750896.pdf', '2023-05-07 05:21:57', '2023-05-10 15:13:39'),
(8, NULL, 'Castor', '4567', 'asdfghjkliuytrewertyhujk', 'sdfghjkl;', '1683751116.jpg', '1683456717.pdf', '2023-05-07 05:21:57', '2023-05-10 15:08:36'),
(9, NULL, 'Cotton', '760', 'asdfghjkliuytrewertyhujk', 'sdfghjkl;', '1683751091.jpg', '1683456717.pdf', '2023-05-07 05:21:57', '2023-05-10 15:16:00'),
(10, NULL, 'Sesamum', '4567', 'asdfghjkliuytrewertyhujk', 'sdfghjkl;', '1683751077.jpg', '1683456717.pdf', '2023-05-07 05:21:57', '2023-05-10 15:07:57'),
(11, NULL, 'Soyabean', '500', 'asdfghjkliuytrewertyhujk', 'sdfghjkl;', '1683751440.jpg', '1683456717.pdf', '2023-05-07 05:21:57', '2023-05-10 15:15:49'),
(12, NULL, 'Urid', '30', 'asdfghjkliuytrewertyhujk', 'sdfghjkl;', '1683751440.jpg', '1683456717.pdf', '2023-05-07 05:21:57', '2023-05-10 15:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Crops', '2023-05-03 05:06:20', '2023-05-06 08:44:52', NULL),
(2, 'Seeds', '2023-05-03 05:06:20', '2023-05-06 08:44:44', NULL),
(3, 'Soil', '2023-05-03 05:06:20', '2023-05-11 01:47:46', '2023-05-11 01:47:46'),
(4, 'Soil', '2023-05-11 01:46:44', '2023-05-11 01:46:44', NULL),
(5, 'Fertilizer', '2023-05-11 01:46:54', '2023-05-11 01:46:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq_questions`
--

CREATE TABLE `faq_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_questions`
--

INSERT INTO `faq_questions` (`id`, `question`, `answer`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES
(1, 'Aut provident dolorem ipsum et rerum nulla aut.', 'Tenetur perspiciatis odio maxime minus ut ipsum est. Quibusdam earum assumenda temporibus nam consequatur dolores aut. Voluptatem alias pariatur eos nisi et. Fuga atque facere autem illum voluptatem quod explicabo asperiores.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 1),
(2, 'Dicta beatae ut consequatur dolore molestiae.', 'Iure iusto aliquam itaque non ratione id ut. Aut temporibus ut explicabo magni maxime. Enim fuga rem corrupti beatae sint vel.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 1),
(3, 'Facere id similique magnam omnis corrupti dicta odio.', 'Ipsa quia corporis a inventore ad. Incidunt quia sit maiores at ut tempora harum veritatis. Qui provident quidem consequatur ut.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 1),
(4, 'A sunt possimus reiciendis quam.', 'Assumenda omnis suscipit soluta repellendus excepturi sit vero non. In unde repellat iusto aut unde sit. Provident qui esse cupiditate sit quia impedit. Dolorem perspiciatis sint est totam. Nemo et similique voluptas recusandae.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 1),
(5, 'Optio ut deleniti deserunt omnis.', 'Culpa molestiae et fuga ut dignissimos nobis. Veritatis mollitia pariatur tenetur sed. Dolores dignissimos qui voluptas occaecati harum fuga maxime. Non eligendi eos molestiae voluptatem est.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 1),
(6, 'Dolorum nihil consectetur distinctio doloribus incidunt laboriosam.', 'Vitae earum sint a molestiae quis explicabo. Delectus nam voluptatum facere et soluta omnis aut. Possimus sed quae ipsam commodi impedit beatae id. Molestiae praesentium cum non deserunt aut minima.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 2),
(7, 'Maiores ratione nostrum quod voluptas quaerat velit ipsa.', 'Dolor eos quidem ea qui a voluptas. Earum labore molestiae quasi saepe placeat in qui. Sequi nam dolor dignissimos dolor.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 2),
(8, 'Et hic et quo eum voluptatem.', 'Reiciendis quia suscipit fugit qui occaecati. Voluptatem asperiores nostrum et commodi rerum. Vero voluptates natus assumenda quia occaecati ut sint. Aliquid vitae nostrum recusandae molestias exercitationem qui.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 2),
(9, 'Molestiae est distinctio dolor aut nulla et.', 'Voluptatem reprehenderit omnis reiciendis placeat voluptates beatae nisi. Et id accusantium suscipit eos. Id ex praesentium est dicta laboriosam.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 2),
(10, 'Possimus eos at dolorem vero aut enim.', 'Consequatur molestiae similique illum aliquid. Perferendis officia voluptas a et quia. Sint sunt non voluptatem omnis.', '2023-05-03 05:06:20', '2023-05-11 01:47:26', NULL, 5),
(11, 'Rerum similique et unde.', 'Voluptas dolor ut eveniet saepe. Est aliquam aperiam reprehenderit. Est officia dolore id eligendi natus impedit.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 3),
(12, 'Fugiat omnis minus cumque voluptas aut.', 'Modi amet voluptatibus quidem sunt. Corporis voluptatum et qui vel inventore dolores. Ex exercitationem omnis dolore quia voluptatem consequatur ab voluptatem.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 3),
(13, 'Libero distinctio minima voluptatem consequatur alias.', 'Ipsum et aliquam aut aspernatur. Alias et modi modi ducimus. Aut velit quos et tempora et voluptas ipsa et.', '2023-05-03 05:06:20', '2023-05-11 01:47:36', NULL, 4),
(14, 'Rerum neque voluptas optio.', 'Neque dolores voluptatem eos rerum fugiat quo. Blanditiis natus aperiam non mollitia consequatur et. Esse id nemo recusandae asperiores id quia debitis.', '2023-05-03 05:06:20', '2023-05-03 05:06:20', NULL, 3),
(15, 'Quaerat ut sit vero sint voluptatum voluptate eos harum.', 'Et odio quibusdam aspernatur repellendus. Et magni et nihil ratione sit iure. Ad voluptatem sed enim est laboriosam nemo dolores.', '2023-05-03 05:06:20', '2023-05-11 01:47:16', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'test user', 'test123@gmail.com', 'testing', 'hello contact me', '2023-05-11 09:48:46', '2023-05-11 09:48:46'),
(3, 'navjot', 'navjot11@gmail.com', 'testing', 'testing', '2023-05-11 09:50:15', '2023-05-11 09:50:15'),
(4, 'navjot', 'admin@gmwwwwail.com', 'testing', 'wedfghb', '2023-05-11 09:51:19', '2023-05-11 09:51:19'),
(5, 'dheeraj', 'dheeraj1234@gmail.com', 'testing', 'testing', '2023-05-11 09:52:07', '2023-05-11 09:52:07'),
(6, 'sdf', 'adminaaa@admin.com', 'testing', 'Thank you for your feedback Successfully', '2023-05-11 09:53:51', '2023-05-11 09:53:51'),
(7, 'sdf', 'adminaaa@admin.com', 'testing', 'Thank you for your feedback Successfully', '2023-05-11 09:54:11', '2023-05-11 09:54:11'),
(8, 'sdf', 'adminaaa@admin.com', 'testing', 'Thank you for your feedback Successfully', '2023-05-11 09:54:45', '2023-05-11 09:54:45'),
(9, 'sdf', 'adminaaa@admin.com', 'testing', 'Thank you for your feedback Successfully', '2023-05-11 09:56:43', '2023-05-11 09:56:43'),
(10, 'sdf', 'adminaaa@admin.com', 'testing', 'Thank you for your feedback Successfully', '2023-05-11 09:57:48', '2023-05-11 09:57:48'),
(11, 'sdf', 'adminaaa@admin.com', 'testing', 'Thank you for your feedback Successfully', '2023-05-11 09:58:21', '2023-05-11 09:58:21'),
(12, 'sdf', 'adminaaa@admin.com', 'testing', 'Thank you for your feedback Successfully', '2023-05-11 09:58:42', '2023-05-11 09:58:42'),
(13, 'sdf', 'adminaaa@admin.com', 'testing', 'Thank you for your feedback Successfully', '2023-05-11 09:59:54', '2023-05-11 09:59:54'),
(14, 'sdf', 'adminaaa@admin.com', 'testing', 'Thank you for your feedback Successfully', '2023-05-11 10:00:14', '2023-05-11 10:00:14'),
(17, 'sdfgh', 'developer.navjot99@gmail.com', 'we', 'werty', '2023-06-09 13:11:13', '2023-06-09 13:11:13'),
(18, 'sdfgh', 'developer.navjot99@gmail.com', 'we', 'werty', '2023-06-09 13:11:29', '2023-06-09 13:11:29'),
(19, 'sdfgh', 'developer.navjot99@gmail.com', 'we', 'werty', '2023-06-09 13:11:54', '2023-06-09 13:11:54'),
(20, 'sdfgh', 'developer.navjot99@gmail.com', 'we', 'werty', '2023-06-09 13:12:03', '2023-06-09 13:12:03'),
(21, 'sdfgh', 'developer.navjot99@gmail.com', 'we', 'werty', '2023-06-09 13:12:16', '2023-06-09 13:12:16'),
(22, 'sdfgh', 'developer.navjot99@gmail.com', 'we', 'werty', '2023-06-09 13:22:49', '2023-06-09 13:22:49'),
(23, 'sdfgh', 'developer.navjot99@gmail.com', 'we', 'werty', '2023-06-09 13:23:13', '2023-06-09 13:23:13'),
(24, 'sdfgh', 'developer.navjot99@gmail.com', 'we', 'werty', '2023-06-09 13:23:33', '2023-06-09 13:23:33'),
(25, 'sdfgh', 'developer.navjot99@gmail.com', 'we', 'werty', '2023-06-09 13:23:51', '2023-06-09 13:23:51'),
(26, 'sdfgh', 'developer.navjot99@gmail.com', 'we', 'werty', '2023-06-09 13:25:21', '2023-06-09 13:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizers_info`
--

CREATE TABLE `fertilizers_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `uses` varchar(255) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `filename` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_10_11_000001_create_permissions_table', 1),
(8, '2019_10_11_000002_create_roles_table', 1),
(9, '2019_10_11_000003_create_users_table', 1),
(10, '2019_10_11_000004_create_categories_table', 1),
(11, '2019_10_11_000005_create_tags_table', 1),
(12, '2019_10_11_000006_create_articles_table', 1),
(13, '2019_10_11_000007_create_faq_categories_table', 1),
(14, '2019_10_11_000008_create_faq_questions_table', 1),
(15, '2019_10_11_000009_create_permission_role_pivot_table', 1),
(16, '2019_10_11_000010_create_role_user_pivot_table', 1),
(17, '2019_10_11_000012_create_article_tag_pivot_table', 1),
(18, '2019_10_11_000013_add_relationship_fields_to_faq_questions_table', 1),
(19, '2019_10_13_092522_add_views_count_to_articles_table', 1),
(20, '2019_10_14_141550_add_slug_to_multiple_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'category_create', NULL, NULL, NULL),
(18, 'category_edit', NULL, NULL, NULL),
(19, 'category_show', NULL, NULL, NULL),
(20, 'category_delete', NULL, NULL, NULL),
(21, 'category_access', NULL, NULL, NULL),
(22, 'tag_create', NULL, NULL, NULL),
(23, 'tag_edit', NULL, NULL, NULL),
(24, 'tag_show', NULL, NULL, NULL),
(25, 'tag_delete', NULL, NULL, NULL),
(26, 'tag_access', NULL, NULL, NULL),
(27, 'article_create', NULL, NULL, NULL),
(28, 'article_edit', NULL, NULL, NULL),
(29, 'article_show', NULL, NULL, NULL),
(30, 'article_delete', NULL, NULL, NULL),
(31, 'article_access', NULL, NULL, NULL),
(32, 'faq_management_access', NULL, NULL, NULL),
(33, 'faq_category_create', NULL, NULL, NULL),
(34, 'faq_category_edit', NULL, NULL, NULL),
(35, 'faq_category_show', NULL, NULL, NULL),
(36, 'faq_category_delete', NULL, NULL, NULL),
(37, 'faq_category_access', NULL, NULL, NULL),
(38, 'faq_question_create', NULL, NULL, NULL),
(39, 'faq_question_edit', NULL, NULL, NULL),
(40, 'faq_question_show', NULL, NULL, NULL),
(41, 'faq_question_delete', NULL, NULL, NULL),
(42, 'faq_question_access', NULL, NULL, NULL),
(43, 'crop_access', '2023-05-06 03:45:08', '2023-05-06 03:45:08', NULL),
(44, 'fertilizers_access', '2023-05-06 08:38:31', '2023-05-06 08:38:31', NULL),
(45, 'pesticides_access', '2023-05-06 08:39:00', '2023-05-06 08:39:11', NULL),
(46, 'seeds_access', '2023-05-06 08:39:46', '2023-05-06 08:39:46', NULL),
(47, 'crop_create', '2023-05-06 08:53:58', '2023-05-06 08:53:58', NULL),
(48, 'crop_show', '2023-05-06 08:54:07', '2023-05-06 08:54:07', NULL),
(49, 'crop_edit', '2023-05-06 08:54:12', '2023-05-06 08:54:12', NULL),
(50, 'crop_delete', '2023-05-06 08:54:17', '2023-05-06 08:54:17', NULL),
(51, 'land_access', '2023-05-11 01:33:05', '2023-05-11 01:33:05', NULL),
(52, 'soil_access', '2023-05-11 01:33:14', '2023-05-11 01:33:14', NULL),
(53, 'useful_links_access', '2023-05-11 01:45:59', '2023-05-11 01:45:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53);

-- --------------------------------------------------------

--
-- Table structure for table `pesticides_info`
--

CREATE TABLE `pesticides_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `uses` varchar(255) DEFAULT NULL,
  `images` longtext DEFAULT NULL,
  `filename` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesticides_info`
--

INSERT INTO `pesticides_info` (`id`, `name`, `price`, `description`, `uses`, `images`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'navjot', '21', '23weeeeeeeeeeeeeeeeeeee', 'sdfghjkl;', NULL, '1683653805.pdf', '2023-05-09 12:06:45', '2023-05-09 12:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `seed_info`
--

CREATE TABLE `seed_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `uses` varchar(255) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `filename` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seed_info`
--

INSERT INTO `seed_info` (`id`, `name`, `price`, `company`, `uses`, `image`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'wer', '1234', 'er', 'er', '1683654417.png', '1683654417.pdf', '2023-05-09 12:16:57', '2023-05-09 12:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `slug`) VALUES
(1, 'corporis', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'corporis'),
(2, 'quo', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'quo'),
(3, 'fuga', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'fuga'),
(4, 'nam', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'nam'),
(5, 'beatae', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'beatae'),
(6, 'non', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'non'),
(7, 'quo', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'quo-2'),
(8, 'dolore', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'dolore'),
(9, 'dicta', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'dicta'),
(10, 'aut', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'aut'),
(11, 'omnis', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'omnis'),
(12, 'ab', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'ab'),
(13, 'laborum', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'laborum'),
(14, 'expedita', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'expedita'),
(15, 'libero', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'libero'),
(16, 'quisquam', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'quisquam'),
(17, 'incidunt', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'incidunt'),
(18, 'adipisci', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'adipisci'),
(19, 'suscipit', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'suscipit'),
(20, 'ea', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'ea'),
(21, 'tenetur', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'tenetur'),
(22, 'enim', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'enim'),
(23, 'eaque', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'eaque'),
(24, 'ea', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'ea-2'),
(25, 'voluptatibus', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'voluptatibus'),
(26, 'sit', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'sit'),
(27, 'enim', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'enim-2'),
(28, 'quia', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'quia'),
(29, 'non', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'non-2'),
(30, 'illo', '2023-05-03 05:06:19', '2023-05-03 05:06:19', NULL, 'illo');

-- --------------------------------------------------------

--
-- Table structure for table `useful_links`
--

CREATE TABLE `useful_links` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useful_links`
--

INSERT INTO `useful_links` (`id`, `title`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Creating new', 'https://www.w3schools.com/', 'It\'s easy to make your HTML tables look great - in today\'s post, we\'re gonna take a look at around 30 lines of CSS to do just that! Video Tutorial Before I get into it, if you prefer this tutorial in video form, you may watch it on my YouTube channel, dcode, right below.', '2023-05-11 03:11:43', '2023-05-11 04:02:48'),
(3, 'Helpful Details', 'http://127.0.0.1:8000/useful-link', 'A responsive table will display a horizontal scroll bar if the screen is too small to display the full content. Resize the browser window to see the effect:To create a responsive table, add a container element around the table element', '2023-05-11 03:59:34', '2023-05-11 03:59:34'),
(4, 'Use this', 'http://127.0.0.1:8000/admin/useful-links/create', 'Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.Hello this is demo content.v', '2023-05-11 13:58:44', '2023-05-11 13:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `gender`, `dob`, `address`, `profile_image`, `status`, `email_verified_at`, `password`, `remember_token`, `city`, `state`, `country`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$7EMc/1kS3h/LOzH9IkXakOzHi9EG1PCDhmO3ckYlZcIh8R2jnQ0WK', NULL, NULL, NULL, NULL, NULL, '2023-05-11 03:12:32', NULL),
(2, 'Navjot kaur', 'navjot@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Lqep.6qwIucWPSY.SR0Pyu.oN5KkP3xBhGckhgGqNwpfOC4OmHehe', NULL, NULL, NULL, NULL, '2023-05-03 05:07:33', '2023-05-11 03:21:56', NULL),
(3, 'Ankit', 'ankit@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$RNFJIJ7K32wu092kBdxyreih3yTxk5ZEtvHNSY0JbPG0Jj2eAk.Wi', NULL, NULL, NULL, NULL, '2023-05-03 05:35:04', '2023-05-03 05:35:04', NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-10 12:25:26', '2023-05-10 12:25:26', NULL),
(5, 'navjot', 'navjot9916.kaur@gmail.com', '789456130', NULL, '2023-05-12', 'qwed', NULL, NULL, NULL, '$2y$10$uChn.C93WJ4a3JHNy5pS5eVvTf8t2DO7CT.eoa1dk3AGutRolRDm.', NULL, 'jaipur', 'rajasthan', 'india', '2023-05-10 12:27:05', '2023-06-06 02:06:43', NULL),
(6, 'navjot', 'ankit1234567@admin.com', '7894561236', NULL, '2023-05-12', 'qawsedf', NULL, NULL, NULL, '$2y$10$xtpsIo9ECPFxY9qXzMLOl.jiCHrqdoyHP9v/rpriIZp9kSd9zTodC', NULL, 'sdf', 's', 'asds', '2023-05-10 12:30:56', '2023-05-10 12:30:56', NULL),
(7, 'navjot', 'ankit123456q7@admin.com', '7894561236', NULL, '2023-05-12', 'qwertyuio', NULL, NULL, NULL, '$2y$10$pXZuXYk2KPGR2Qeh4fpKS.M3rBWel7KZCfSi1larhbE8viQZa6Pyu', NULL, 'sdf', 's', 'asds', '2023-05-10 12:31:40', '2023-05-10 12:31:40', NULL),
(8, 'sdfgb', 'admin@a1111dmin.com', '7894561236', NULL, '2023-05-24', 'qwdrftyuiop', NULL, NULL, NULL, '$2y$10$L4KUMfVPhx/iQjJaMh2FyegBErH1/2L7wyoYzrky/HgyeBFI3hvui', NULL, 'sdf', 'sdf', 'sdf', '2023-05-10 12:34:58', '2023-05-10 12:34:59', NULL),
(9, 'dheeraj', 'dheeraj123@gmail.com', '7894561236', NULL, '2023-05-24', 'awsedrtyu8i9o0-', NULL, NULL, NULL, '$2y$10$5y6oTPMIjerTi3Qkg7UVleLVKOH4tUT3lMc/9baI8.2uZ65.uGeRW', NULL, 'jaipur', 'rajasthan', 'india', '2023-05-10 12:53:37', '2023-06-05 13:17:58', NULL),
(10, 'dheeraj', 'dheeraj12312@gmail.com', '7894561236', NULL, '2023-05-24', 'awsedrtyu8i9o0-', NULL, NULL, NULL, '$2y$10$i.DX2MUSDDDFLkMZFDGNaO8Pe0zFdhzgdjCr/HPMHsGnq5lT1.RCu', NULL, 'jaipur', 'rajasthan', 'india', '2023-05-10 12:54:00', '2023-05-17 12:20:01', '2023-05-17 12:20:01'),
(11, 'dheeraj', 'dheeraj12wer312@gmail.com', '7894561236', NULL, '2023-05-24', 'awsedrtyu8i9o0-', NULL, NULL, NULL, '$2y$10$Qf0u52CqiejZf4759PGgpOlr5mmHMeOOyYYeR5eHrzkuHC8vcovRW', NULL, 'jaipur', 'rajasthan', 'india', '2023-05-10 12:54:34', '2023-05-10 12:54:34', NULL),
(12, 'Navjot', 'developer.navjot99@gmail.com', '9636125725', NULL, '2010-06-08', 'asdfrtgyuiop[]\\7\\][poiuytrfdfghjkl;\';lknbvcxz', NULL, NULL, NULL, '$2y$10$cbrM6fBaWuo.LpNOoS8WAuGsB3P5KGzQWdsImDOrkgShoH/hzBCs.', NULL, 'jaipur', 'rajasthan', 'india', '2023-05-10 15:18:08', '2023-06-09 13:10:06', NULL),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 15:01:42', '2023-05-20 15:01:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD KEY `article_id_fk_455948` (`article_id`),
  ADD KEY `tag_id_fk_455948` (`tag_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `crop_info`
--
ALTER TABLE `crop_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_questions`
--
ALTER TABLE `faq_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_455958` (`category_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fertilizers_info`
--
ALTER TABLE `fertilizers_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_455854` (`role_id`),
  ADD KEY `permission_id_fk_455854` (`permission_id`);

--
-- Indexes for table `pesticides_info`
--
ALTER TABLE `pesticides_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_455863` (`user_id`),
  ADD KEY `role_id_fk_455863` (`role_id`);

--
-- Indexes for table `seed_info`
--
ALTER TABLE `seed_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `useful_links`
--
ALTER TABLE `useful_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `crop_info`
--
ALTER TABLE `crop_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq_questions`
--
ALTER TABLE `faq_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `fertilizers_info`
--
ALTER TABLE `fertilizers_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `pesticides_info`
--
ALTER TABLE `pesticides_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seed_info`
--
ALTER TABLE `seed_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `useful_links`
--
ALTER TABLE `useful_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_id_fk_455948` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tag_id_fk_455948` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faq_questions`
--
ALTER TABLE `faq_questions`
  ADD CONSTRAINT `category_fk_455958` FOREIGN KEY (`category_id`) REFERENCES `faq_categories` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_455854` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_455854` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_455863` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_455863` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
