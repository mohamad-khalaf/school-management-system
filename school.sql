-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 05:00 PM
-- Server version: 8.0.33
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int NOT NULL,
  `book_name` char(255) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` char(255) COLLATE utf8mb4_general_ci NOT NULL,
  `writer_name` char(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` char(255) COLLATE utf8mb4_general_ci NOT NULL,
  `publish_date` date NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `subject`, `writer_name`, `class`, `publish_date`, `upload_date`) VALUES
(1, 'أسرار النجاح', 'رياضة', 'محمد خلف', 'الاول', '2023-05-23', '2023-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int NOT NULL,
  `teacher_name` char(255) NOT NULL,
  `id_number` bigint NOT NULL,
  `gender` enum('0','male','female','others') NOT NULL,
  `class` char(255) NOT NULL,
  `subject` char(255) NOT NULL,
  `season` char(255) NOT NULL,
  `time` char(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint NOT NULL,
  `email` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `exam_grade`
--

CREATE TABLE `exam_grade` (
  `id` int NOT NULL,
  `grade_name` char(255) NOT NULL,
  `grade_point` float NOT NULL,
  `percent_from` float NOT NULL,
  `percent_to` float NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `exam_grade`
--

INSERT INTO `exam_grade` (`id`, `grade_name`, `grade_point`, `percent_from`, `percent_to`, `comment`) VALUES
(1, '1', 0, 0, 0, ''),
(2, 'SDFASDF', 1, 0, 0, 'dfasdf'),
(3, '5555', 1, 53, 0, 'asdfasdfasd5f4a6sdf');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int NOT NULL,
  `name` char(255) NOT NULL,
  `id_number` bigint NOT NULL,
  `expense_type` char(255) NOT NULL,
  `quantity` int NOT NULL,
  `phone` bigint NOT NULL,
  `email` char(255) NOT NULL,
  `status` char(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `name`, `id_number`, `expense_type`, `quantity`, `phone`, `email`, `status`, `date`) VALUES
(1, '', 0, '', 0, 0, '', '0', '0000-00-00'),
(2, '', 0, '', 0, 0, '', '0', '0000-00-00'),
(3, '', 0, '', 0, 0, '', '0', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `id` int NOT NULL,
  `hostel_name` char(255) NOT NULL,
  `room_num` int NOT NULL,
  `room_type` enum('0','big','medium','small') NOT NULL,
  `number_bed` int NOT NULL,
  `cost_bed` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `hostel_name`, `room_num`, `room_type`, `number_bed`, `cost_bed`) VALUES
(1, 'اسم المبيت', 23, 'big', 3, 3.5),
(2, 'gggg', 23, 'big', 2, 11.5);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int NOT NULL,
  `name` char(255) NOT NULL,
  `gender` enum('0','male','female','others') NOT NULL,
  `occupation` char(255) NOT NULL,
  `id_number` int NOT NULL,
  `blood_type` enum('0','a+','a-','b+','b-','o+','o-') NOT NULL,
  `religion` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `address` char(255) NOT NULL,
  `phone` bigint NOT NULL,
  `short_bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `name`, `gender`, `occupation`, `id_number`, `blood_type`, `religion`, `email`, `address`, `phone`, `short_bio`) VALUES
(1, 'MOHAMSD', 'male', 'مبرمج', 123544, 'a-', 'مسلم', 'MOAHAMD@FDSF.COM', 'AMMAN', 9627896336141, 'ماعندي وصف لان حالتي حالة ');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int NOT NULL,
  `member` char(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password_recovery_token` varchar(255) NOT NULL,
  `expire_at` timestamp NULL DEFAULT NULL,
  `is_valid` tinyint NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `member`, `password_recovery_token`, `expire_at`, `is_valid`, `create_at`) VALUES
(1, '0', '', NULL, 0, '2023-05-22 17:59:15'),
(2, 'moahadm.@mao.com', 'dg45356fg', '2023-05-18 23:03:39', 1, '2023-05-23 23:04:11'),
(3, 'mohamadalkhlaf11@gmail.com', '', '2023-05-24 10:12:03', 1, '2023-05-23 23:12:03'),
(4, 'mohamadalkhlaf11@gmail.com', 'lymjg4ibbsiaf2atf2am4r3wzdy3hz1a1g2ylmsgmpu1gzr8kceqf6vtc8qa5tcogj7m8c545mr1cx2kh4rxx28m1qw5p6tu9', '2023-05-24 10:13:13', 1, '2023-05-23 23:13:13'),
(5, 'mohamadalkhlaf11@gmail.com', 'ymgp97gcxbyful9lmho9unoliuy9vrbb7nkf9kq7hha8yap7tttakr18xmd5t82amkax9akordoxocw4xur9lwbjkwibm6woa', '2023-05-24 10:14:00', 1, '2023-05-23 23:14:00'),
(6, 'mohamadalkhlaf11@gmail.com', 'kc9of7d2x6r2pavfeqi9u408enjcn4f1ucqi34skl1y6cw1guxejts8atbf096wugvq7gsukyqajc4gp6d1a6dm2g78942d59', '2023-05-24 10:14:04', 1, '2023-05-23 23:14:04'),
(7, 'mohamadalkhlaf11@gmail.com', 'nxzhr08tbptsz8h59mw92k6wer5vht67nhdskrzvbr5asah6ao6va023fzomw08zr1sgwxniqq1wdl3znteg7kaa2g9tbmv5i', '2023-05-24 10:14:08', 1, '2023-05-23 23:14:08'),
(8, 'mohamadalkhlaf11@gmail.com', '3a8qhd3hb7esczbkcxmebotqbdurqsh74hex8sptmthq9wk2eijq19qoy69kjrjith08cy890tqqd2t5wkesyw3m6ooxebpqf', '2023-05-24 10:14:13', 1, '2023-05-23 23:14:13'),
(9, 'mohamadalkhlaf11@gmail.com', 'tce1gcya3z5lsqlo6fuxqyfpb5ggiexsswnafo4ugzobgastvboca0o2sb15i3xojjzlp2c4a7osb4dirj01z949wstukc9vx', '2023-05-24 10:14:20', 1, '2023-05-23 23:14:20'),
(10, 'mohamadalkhlaf11@gmail.com', 'rrgxmtpw7df8gbzl8rae2eb4h3swnrpxinh93t8l6snr8da0xnrroz7imsgvvuz6xjfwjbdutw85bcxsybbgdps7c94q98kxb', '2023-05-24 10:14:27', 1, '2023-05-23 23:14:27'),
(11, 'mohamadalkhlaf11@gmail.com', '415xiliwrbcae1fh6gdng4jdf67lez7ch953rg0x530ko5zph44vruw8o92cyp3alhn5sgvqtx2lb7b4d3mjgbzptq9q01lts', '2023-05-24 10:14:33', 1, '2023-05-23 23:14:33'),
(12, 'mohamadalkhlaf11@gmail.com', 'frvkdmget24tvm39bb22ejrebwupoqe7rat3zjx8vg6ku0jrb6urwk77xv93d2paebqh4i6w2sayqsol55l2hpcic8rv8yls3', '2023-05-24 10:14:37', 1, '2023-05-23 23:14:37'),
(13, 'mohamadalkhlaf11@gmail.com', '8yoxuqap7sq1iboy1bm63p19u2u66hjnsrxwyqnsy98ae9fbe1wtzglc25uhbg7s6itsl52mgy3l4t3ft9ktdy5xd1ri07z7o', '2023-05-24 10:14:41', 1, '2023-05-23 23:14:41'),
(14, 'mohamadalkhlaf11@gmail.com', 'ytwr2pzrwu98jziifdj32a5vneyqrkfhlqdp9ujdpdjm07swwuw36tmarja6n4qhx2x4wz7l9bquobd6whh2iey5ns38l2ogw', '2023-05-24 10:14:44', 1, '2023-05-23 23:14:44'),
(15, 'mohamadalkhlaf11@gmail.com', 'lhv4ucygb8dmqbto14xbu6t4hxdwc3hcrqri9064deeuv675p2tfp1x08fo2333quk0nljts36xvs7m6yb6fqw67i3943uzrg', '2023-05-24 10:14:58', 1, '2023-05-23 23:14:58'),
(16, 'mohamadalkhlaf11@gmail.com', '0u42kovdfw5r9cyk2t1zfalecukdjopc32i8ve2bxd0gun4j8c7uaee659p5lc2lwhtzhl7q2mp60b59qn1jxrewc56mpr35h', '2023-05-24 10:16:35', 1, '2023-05-23 23:16:35'),
(17, 'mohamadalkhlaf11@gmail.com', 'gqh2rcddfrvxe1g4uh0hclu9u1irsi48o1y6igfxrxq7yu3quxl9q45r1vbwfmqawrunkfijmnp3ss0aqzapo35aatmx7d2et', '2023-05-24 10:19:29', 1, '2023-05-23 23:19:29'),
(18, 'mohamadalkhlaf11@gmail.com', 'slqwc790ao1q21aulzz64z7xjnp72cpl2yl94vxktiids1ped3bd9bf5ih9yib881e5pyjv5euhg9odekovugacqlb51tgc0m', '2023-05-24 10:22:03', 1, '2023-05-23 23:22:03'),
(19, 'mohamadalkhlaf11@gmail.com', 's37jnbsxtkpp5247p4eb9lc770plepl4mtw8iombvjsda96gpisv466isy9z3wl7hyir2suaf7ikxxzvq5lx2zdye17mgmm9g', '2023-05-24 10:24:28', 1, '2023-05-23 23:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `ar_name` char(255) NOT NULL,
  `en_name` char(255) NOT NULL,
  `gender` enum('0','male','female','others') NOT NULL,
  `birthday` date NOT NULL,
  `place_birthday` char(255) NOT NULL,
  `blood` enum('a+','a-','b+','b-','o+','o-','0') NOT NULL,
  `email` char(255) NOT NULL,
  `id_number` bigint NOT NULL,
  `id_academy` bigint NOT NULL,
  `phone` bigint NOT NULL,
  `class` char(255) NOT NULL,
  `season` char(255) NOT NULL,
  `prev_school` char(255) NOT NULL,
  `join_date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `parent_name` char(255) NOT NULL,
  `parent_id_number` bigint NOT NULL,
  `parent_phone` bigint NOT NULL,
  `mother_name` char(255) NOT NULL,
  `bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `ar_name`, `en_name`, `gender`, `birthday`, `place_birthday`, `blood`, `email`, `id_number`, `id_academy`, `phone`, `class`, `season`, `prev_school`, `join_date`, `address`, `parent_name`, `parent_id_number`, `parent_phone`, `mother_name`, `bio`) VALUES
(0, 'محمد خلف', 'mohamad khalaf', 'male', '2023-05-18', 'alleppo', 'b-', 'mohamaf@gmaol.com', 123544, 234234234123443, 234234234123443, 'sdfsfcf', 'sdfff', 'prev school', '2023-05-03', 'address', 'khalaf', 234234234234, 963999477343, 'dffsd', 'لا يوج د حالتي تعبانة كثير ');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int NOT NULL,
  `subject_name` char(255) NOT NULL,
  `subject_type` char(255) NOT NULL,
  `class` char(255) NOT NULL,
  `code` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_type`, `class`, `code`, `date`) VALUES
(1, '', '', '', 0, '0000-00-00'),
(2, '', '2', '2', 2, '0000-00-00'),
(3, 'sdfsd', '3', '1', 2, '0000-00-00'),
(4, 'sdfsd', '2', '2', 2, '2023-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int NOT NULL,
  `name` char(255) NOT NULL,
  `gender` enum('0','male','femaile','others') NOT NULL,
  `birthday` date NOT NULL,
  `blood_group` enum('a+','a-','b+','b-','o+','o-') NOT NULL,
  `religion` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `class` char(255) NOT NULL,
  `section` char(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` bigint NOT NULL,
  `bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `gender`, `birthday`, `blood_group`, `religion`, `email`, `class`, `section`, `address`, `phone`, `bio`) VALUES
(1, 'mohamad', 'femaile', '2023-05-16', 'a-', 'muslim', 'mohamad@gmaol.com', 'ش', 'sss', 'jordan ammaan', 9627896336141, 'ماعندي حالة لان حالتي حالة ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `full_name` char(255) NOT NULL,
  `group_id` char(255) NOT NULL,
  `gender` enum('0','male','female','others') NOT NULL,
  `father_name` char(255) NOT NULL,
  `mother_name` char(255) NOT NULL,
  `birthday` date NOT NULL,
  `religon` char(255) NOT NULL,
  `joing_date` date NOT NULL,
  `email` char(255) NOT NULL,
  `id_number` bigint NOT NULL,
  `phone` bigint NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `group_id`, `gender`, `father_name`, `mother_name`, `birthday`, `religon`, `joing_date`, `email`, `id_number`, `phone`, `address`) VALUES
(0, 'local', '939bb46a04c3640c8c427e92b1b557e882e2d2a0', 'mohamad alkhalf albarho', '2', 'male', 'dfgdf', 'dfgdfgd', '2023-05-22', '3', '2023-05-03', 'mohamadalkhlaf11@gmail.com', 1234567890, 786336414, 'Abdul Rahman bin Samra'),
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'mohamad admin', '1', '0', '', '', '0000-00-00', '', '0000-00-00', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_name` (`book_name`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_grade`
--
ALTER TABLE `exam_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_grade`
--
ALTER TABLE `exam_grade`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
