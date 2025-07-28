-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 12:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `AdminID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`AdminID`, `username`, `password`) VALUES
(1, 'mayur', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `WhatWillLearn` text DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Duration` varchar(50) DEFAULT NULL,
  `CourseImage` text DEFAULT NULL,
  `VideoLink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseID`, `CourseName`, `WhatWillLearn`, `Price`, `Duration`, `CourseImage`, `VideoLink`) VALUES
(1, 'FRONT END DEVELOPMENT', 'Fun fact: all websites use HTML — even this one. It’s a fundamental part of every web developer’s toolkit. HTML provides the content that gives web pages structure, by using elements and tags, you can add text, images, videos, forms, and more. Learning HTML basics is an important first step in your web development journey and an essential skill for front- and back-end developers.', 299.00, '2 month', 'uploads/frontend.jpg', 'https://www.youtube.com/watch?v=nu_pCVPKzTk'),
(2, 'BACK END DEVELOPMENT', 'This course is part of the Meta Back-End Developer When you enroll in this course, you\'ll also be enrolled in this Professional Certificate.Learn new concepts from industry experts\r\nGain a foundational understanding of a subject or tool.Develop job-relevant skills with hands-on projects\r\n', 499.00, '2 month', 'uploads/backend.jpg', 'https://www.youtube.com/watch?v=nu_pCVPKzTk'),
(3, 'Full Stack Development', 'Full Stack Developers are developers that design complete apps and websites. These developers work on all facets of development, from frontend, to backend, to database and even debugging and testing. In short, the developer must understand the app through and through. Frontend developers are more sought after because of their expertise of not in one but multiple technologies. They can handle all aspects of development, and it can result in a more seamlessly created product.', 399.00, '2 month', 'uploads/fullstack.png', 'https://www.youtube.com/watch?v=nu_pCVPKzTk'),
(4, 'Adobe Photoshop', 'Welcome to the Adobe Photoshop Mastery course! This comprehensive training program is designed to empower you with the skills and knowledge needed to become a proficient graphic designer using Adobe Photoshop.\r\nWhether you\'re a beginner or have some experience with the software, this course will guide you through a transformative journey, from mastering the basics to advanced techniques. You\'ll gain a solid understanding of Photoshop\'s powerful tools and features, enabling you to create visually stunning designs for various purposes, including branding, digital marketing, web design, and more.', 499.00, '3 Months', 'uploads/ps.jpg', 'https://www.youtube.com/watch?v=nu_pCVPKzTk'),
(5, 'UI/UX Designing', 'You will learn everything you need to know in order to get started to become familiar with the world of UI/UX design and the tools you’ll need to become a UI/UX Designer.', 449.00, '3 Month', 'uploads/ui.jpg', 'https://www.youtube.com/watch?v=nu_pCVPKzTk'),
(6, 'Logo Designing', 'This is a fun course, weather you have little or now background with Adobe products suite or you are seasoned vet looking to pick up some fun tips and tricks from another peer professional logo designer.\r\nUsing Adobe and showing how you can help brand someones company with a great logo design is an important skill to have. We are here to add value to your life and want you to feel happy with the content we have created and are providing in this course. We want to be new valuable members of the Udemy family and are excited for the journey.', 499.00, '3 Months', 'uploads/logo.jpg', 'https://www.youtube.com/watch?v=nu_pCVPKzTk'),
(9, 'Networking', 'CCNA, CISCO', 500.00, '3 Months', 'uploads/net.jpg', 'https://www.youtube.com/watch?v=nu_pCVPKzTk');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `fullname`, `email`, `course_id`, `registration_date`, `password`, `phone_number`) VALUES
(20, 'samarth phadol', 'samarth@gmail.com', 3, '2024-04-18 06:19:04', '1234', '7507930088'),
(21, 'samarth phadol', 's@gmail.com', 1, '2024-04-18 06:20:09', '1234', '07507930088'),
(22, 'mayur ', 'd@gmail.com', 2, '2024-04-18 12:04:38', '123', '7507930088'),
(24, 'Mayur Dhondwad', 'mayur@gmail.com', 2, '2024-04-18 14:18:30', '321', '8530777034'),
(25, 'Mayur Dhondwad', 'mayur@gmail.com', 3, '2024-04-18 14:19:37', '1234', '8530777034');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
