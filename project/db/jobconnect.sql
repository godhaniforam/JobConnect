-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 11:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `job_catagory` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `job_time` varchar(10) NOT NULL,
  `job_description` longtext NOT NULL,
  `comapny_logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `job_catagory`, `company_name`, `location`, `salary`, `job_time`, `job_description`, `comapny_logo`) VALUES
(1, 'Web Designer / Developer', 'Google', 'Australia', '4,000-4,500', 'Full Time', 'Designs, writes, and edits website content.\r\n Understands UI, cross-browser compatibility, and general web functions and standards.\r\n Creates solutions for identified problems or bugs.\r\n Communicates with colleagues, managers, and stakeholders daily.', 'google-logo.png'),
(2, 'Marketing Director', 'Linkedin', 'USA', '3000-5000', 'Full Time', 'Marketing directors understand how to sell, so your job description needs to be compelling to find a great candidate.\r\nAn effective job post is brief and to the point, and it should introduce your company values concisely while explaining the expectations for the marketing director role.\r\nWhen crafting the lists of objectives, responsibilities, and qualifications, stick with four to six bullets per section. \r\nBefore posting, be sure to read through the job description carefully, keeping an eye open for any inconsistencies or grammatical errors.', 'linkedin.png'),
(3, 'Senior Product Designer', 'Lenovo', 'Dubai', '6000-8000', 'Full Time', 'A senior product designer leads a team of product designers in the design strategy and creation of new products. \r\nProduct designers work in several industries, including manufacturing, software design, and government.\r\nThis will be achieved through managing the design lifecycle from start to finish, designing best practise processes for the design team.', 'lenovo-logo.png'),
(4, 'C++ Developer', 'Spotify', 'India', '4000-8000', 'Half Time', 'C++ developers often work on both desktop and mobile applications, as well as software that interacts with low-level system and hardware resources.\r\nDevelopers can use C++ to build native modules and applications for a number of platforms, such as Android using Android NDK.\r\nMore advanced (templates, STL, C++14/17) the better. \r\nA decent knowledge of data structures & algorithms', 'spotify.png'),
(5, 'Application Developer', 'Snapchat', 'China', '4000-4500', 'Full Time', 'A Application Developer is a professional who designs and codes functional software programs and applications.\r\n They collaborate with teams to set specifications, write high-quality code, conduct testing, and troubleshoot applications.\r\nA Application Developer translates client requirements into application features and ensures the timely delivery of fully functional software applications. \r\nThey are responsible for understanding client needs, designing prototypes, writing code, performing testing, and maintaining technical documentation.', 'snapchat.png'),
(6, 'Web Designer / Developer', 'Circle CI', 'Australia', '4500-5000', 'Full Time', 'Web Designers are responsible for designing and building the interface, navigation and aesthetic of websites for businesses and clients.\r\nLikely working in the IT team of an organisation or for a digital design agency that services clients, Web Designers should possess a range of skills and qualities.', 'circle-logo.png'),
(7, 'Application Developer', 'Android', 'Australia', '4500-5000', 'Full Time', 'Designing and developing apps for the Android ecosystem. \r\nCreating tests for code to ensure robustness and performance. \r\nFixing known bugs in existing Android applications and adding new features.\r\nWork with outside data sources and APIs.\r\nDesign and build advanced applications for the Android platform.', 'android.png'),
(8, 'Web Designer / Developer', 'Facebook', 'Australia', '5000-6000', 'Full Time', ' Create and edit graphic assets such as logos, banners, social media graphics, and promotional materials.\r\ncommunication and project management skills.\r\nA web designer is responsible for creating the design and layout of a website or web pages.\r\nTheir duties include coding webpages or entire websites, meeting with clients to review website templates or refine their designs and running tests to preview layouts and website features.', 'facebook-logo.png'),
(9, 'Php Developer', 'Whatsapp', 'India', '5000-8000', 'Half Time', 'A PHP developer is responsible for writing server-side web application logic.\r\nPHP developers usually develop back-end components, connect the application with the other (often third-party) web services, and support the front-end developers by integrating their work with the application.\r\nConducting analysis of website and application requirements.\r\nWriting back-end code and building efficient PHP modules.\r\n', 'whatsapp.png');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `user_img` varchar(10) NOT NULL,
  `your_self` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `phone_number`, `email`, `country`, `user_img`, `your_self`) VALUES
(1, 'demo1', '$2y$10$mIbvbm2uMVgzRHq3dIFjeesuv8uqmq2Q7wS2DVhUcX3rbtS0azAO.', 2147483647, 'foramgodhani2611@gmail.com', 'india', '01.jpg', 'this is demo'),
(2, 'mahesh', '$2y$10$8jTBgPJRq8oieWWt5Z0YBeJ3zegFqguGA80RA0Dio6Rl5t81lEA32', 2147483647, 'fid395010@gmail.com', 'india', '06.jpg', 'my self mahesh vala founder of meta'),
(3, 'demo', '$2y$10$qrXSR/1QenBFBC6aYZVDzOcNw73atJUCWpL0Lf8xJ88rduTNMfQcK', 83979, 'harshilsavaliya089@gmail.com', 'india', 'layout1.pn', 'i mhqwdwgigh');

-- --------------------------------------------------------

--
-- Table structure for table `user_apply`
--

CREATE TABLE `user_apply` (
  `id` int(11) NOT NULL,
  `comapny_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_logo` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_location` varchar(50) NOT NULL,
  `user_cover_letter` longtext NOT NULL,
  `user_resume` varchar(50) NOT NULL,
  `use_apply_time` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_apply`
--

INSERT INTO `user_apply` (`id`, `comapny_id`, `company_name`, `company_logo`, `user_name`, `user_email`, `user_phone`, `user_location`, `user_cover_letter`, `user_resume`, `use_apply_time`) VALUES
(1, 6, 'Circle CI', 'circle-logo.png', 'demo', 'foramgodhani2611@gmail.com', 2147483647, 'Work From Office', 'this is demo', 'calvin-carlo-resume.pdf', '2023-09-12 22:57:06'),
(2, 5, 'Snapchat', 'snapchat.png', 'demo', 'foramgodhani2611@gmail.com', 2147483647, 'Work From Office', 'demo', 'calvin-carlo-resume (1).pdf', '2023-09-13 22:20:41'),
(3, 4, 'Spotify', 'spotify.png', 'demo', 'foramgodhani2611@gmail.com', 2147483647, 'Work From Office', 'demo', 'calvin-carlo-resume (1).pdf', '2023-09-13 22:24:36'),
(4, 2, 'Linkedin', 'linkedin.png', 'demo', 'foramgodhani2611@gmail.com', 2147483647, 'Work From Office', 'hujhbkkb', 'screencapture-localhost-project-user-profile-php-2', '2023-09-16 19:14:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_apply`
--
ALTER TABLE `user_apply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_apply`
--
ALTER TABLE `user_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
