-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2025 at 01:25 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam_ninja`
--
CREATE DATABASE IF NOT EXISTS `exam_ninja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `exam_ninja`;

-- --------------------------------------------------------

--
-- Table structure for table `listening`
--

CREATE TABLE IF NOT EXISTS `listening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `listening`
--

INSERT INTO `listening` (`id`, `file_name`, `file_path`) VALUES
(4, 'Basic-IELTS-Listening.pdf', 'uploads/Basic-IELTS-Listening.pdf'),
(5, 'IELTS Listening Practice Test 1.pdf', 'uploads/IELTS Listening Practice Test 1.pdf'),
(6, 'IELTS Listening Practice Test 2.pdf', 'uploads/IELTS Listening Practice Test 2.pdf'),
(7, 'IELTS Listening Practice Test 3.pdf', 'uploads/IELTS Listening Practice Test 3.pdf'),
(8, 'IELTS Listening Practice Test 4.pdf', 'uploads/IELTS Listening Practice Test 4.pdf'),
(9, 'IELTS Listening Practice Test 2024 with Answers [Real Exam - 475 ].pdf', 'uploads/IELTS Listening Practice Test 2024 with Answers [Real Exam - 475 ].pdf');

-- --------------------------------------------------------

--
-- Table structure for table `listeningclips`
--

CREATE TABLE IF NOT EXISTS `listeningclips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_name` varchar(255) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `listeningclips`
--

INSERT INTO `listeningclips` (`id`, `video_name`, `video_link`) VALUES
(2, 'IELTS LISTENING PRACTICE TEST 2024 WITH ANSWERS | 20.06.2024 ', 'https://youtu.be/2WRVrhcSjcg?si=Vw5XlEUqAMgPqrmM'),
(3, 'IELTS Listening Practice Test 2024 with Answers [Real Exam - 475 ]', 'https://youtu.be/R3FWndrZH8Y?si=BQsuf6Uuv2QIhEap'),
(4, 'IELTS LISTENING PRACTICE TEST 2024 WITH ANSWERS | 16.06.2024', 'https://youtu.be/P3dcyEB1jAI?si=2K4HzJ2NKMnV0j5C'),
(5, 'IELTS LISTENING PRACTICE TEST 2024 WITH ANSWERS | 21.06.2024', 'https://youtu.be/R8w-P9A33Ac?si=uOB9r-ZK8c3plSNK'),
(6, 'IELTS LISTENING PRACTICE TEST 2024 WITH ANSWERS | 14.06.2024', 'https://youtu.be/rheUZ-ZvJ_Q?si=MU8njjTr31KUpq5U');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`) VALUES
('admin123', '123', 'admin'),
('ammi', 'mi', 'user'),
('prachi', '123', 'admin'),
('priya', 'pri', 'user'),
('sakshim', 'sak123', 'admin'),
('samskrithi', '123', 'user'),
('Samskrithi23', '1234', 'user'),
('shringeri', 'shri', 'user'),
('snehal', 'snehal', 'user'),
('srishti', 'srishti', 'user'),
('Sudha', '123', 'user'),
('suma', 'suma123', 'user'),
('user123', '456', 'user'),
('vaishnavi bhat', 'bhat', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `qp`
--

CREATE TABLE IF NOT EXISTS `qp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `qp`
--

INSERT INTO `qp` (`id`, `filename`, `file_path`) VALUES
(12, 'Model Question Paper 1 2023.pdf', 'qp/Model Question Paper 1 2023.pdf'),
(13, 'Model Question Paper 2 2021.pdf', 'qp/Model Question Paper 2 2021.pdf'),
(14, 'Model Question Paper 3 2021.pdf', 'qp/Model Question Paper 3 2021.pdf'),
(15, 'Model Question Paper 4 2020.pdf', 'qp/Model Question Paper 4 2020.pdf'),
(16, 'Model Question Paper 5 2019.pdf', 'qp/Model Question Paper 5 2019.pdf'),
(17, 'Model Question Paper 6 2018.pdf', 'qp/Model Question Paper 6 2018.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `reading`
--

CREATE TABLE IF NOT EXISTS `reading` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `reading`
--

INSERT INTO `reading` (`id`, `file_name`, `file_path`) VALUES
(3, 'ielts-academic-reading-1-air-rage.pdf', 'uploads/ielts-academic-reading-1-air-rage.pdf'),
(4, 'ielts-academic-reading-2-wind-power.pdf', 'uploads/ielts-academic-reading-2-wind-power.pdf'),
(5, 'ielts-academic-reading-3-container-trade.pdf', 'uploads/ielts-academic-reading-3-container-trade.pdf'),
(6, 'ielts-academic-reading-4-the-great-war.pdf', 'uploads/ielts-academic-reading-4-the-great-war.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `speaking`
--

CREATE TABLE IF NOT EXISTS `speaking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `speaking`
--

INSERT INTO `speaking` (`id`, `file_name`, `file_path`) VALUES
(3, 'Get_IELTS_Band_9_Speaking.pdf', 'uploads/Get_IELTS_Band_9_Speaking.pdf'),
(4, 'sample-speaking-test-1.pdf', 'uploads/sample-speaking-test-1.pdf'),
(5, 'sample-speaking-test-2.pdf', 'uploads/sample-speaking-test-2.pdf'),
(6, 'sample-speaking-test-3.pdf', 'uploads/sample-speaking-test-3.pdf'),
(7, 'SPEAKING book preview.pdf', 'uploads/SPEAKING book preview.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `speakingclips`
--

CREATE TABLE IF NOT EXISTS `speakingclips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_name` varchar(255) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `speakingclips`
--

INSERT INTO `speakingclips` (`id`, `video_name`, `video_link`) VALUES
(2, 'IELTS Speaking Practice 1- Perfect Band 9', 'https://youtu.be/JWaf1FZ9NF0?si=6UX4rSpZAdG2WhGg'),
(3, 'IELTS Speaking Practice 2- Perfect Band 9', 'https://youtu.be/4nrG6SHM-rY?si=dQL4iJ8-4eVVQFzP'),
(4, 'Band 9.0 IELTS Practice 3 Speaking Exam', 'https://youtu.be/nJJyilEPwpk?si=rXa96q0zkC5IebJa'),
(5, 'IELTS Speaking Practice Test 4 - Perfect Band 9', 'https://youtu.be/Sgwl1MLWSPw?si=1NBKuHqW3qKBHX3M'),
(6, 'IELTS Speaking Interview - Band 9 | Full IELTS Speaking Test 2024 | Sapna Dhamija', 'https://youtu.be/UTqRIqDdasA?si=65ITWuYa587bz-sH');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE IF NOT EXISTS `uploaded_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`id`, `file_name`, `file_path`) VALUES
(11, 'IELTS_Preparation_Guide__1_.pdf', 'uploads/IELTS_Preparation_Guide__1_.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_name` varchar(100) DEFAULT NULL,
  `video_link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_name`, `video_link`) VALUES
(5, 'IELTS FUll course in 1 hour by academia and general', 'https://youtu.be/SXIbuO1VJus?si=FW95Y_ANVy8LEOYA'),
(6, 'IELTS full MOCK test by Jay and Mark', 'https://youtu.be/NXJa7GFjY3U?si=AcfbIjD4YKrTtBor'),
(8, 'IELTS FULL COURSE IN 10 hours by Learn with sam and ash', 'https://youtu.be/Jzps8q2es7c?si=hF-9FDm_F51PTdBF'),
(9, 'IELTS 2024 Complete course in 1 hour by the urban fight', 'https://youtu.be/HDhlXPBXwFA?si=flKRGaoVieT8gNoH'),
(10, 'Academia IELTS - Full course in 10 hours by Asad Yaqub', 'https://youtu.be/dQMDZIHAxv8?si=HVNsV9SIK0OJP1ob'),
(11, '1 month free IELTS Coaching by Being Abroad ', 'https://youtube.com/playlist?list=PLQBINl9LfaP8F2epJ82wcJOQ6hp9kIGLZ&si=P2HydtecC5oXCAAx'),
(12, 'IELTS Paid course by Munzerin ', 'https://youtube.com/playlist?list=PL-XtIMorlxIgiBWLXMAs2ToMUTigAC74a&si=gOJ3H138c5AddLeo'),
(13, 'IELTS Course in Hindi by iWiz English ', 'https://youtube.com/playlist?list=PLj0NkFour4Pk75vuL0jbW0vZKRzPp09TH&si=prr9f57P0hbTEa2j'),
(14, 'IELTS Preparation Full course by Niharika ', 'https://youtube.com/playlist?list=PLweKkYN43KQhFKK4AwnwsK5a0yBVBG-zn&si=lcYGEwnfosh2E2Xa');

-- --------------------------------------------------------

--
-- Table structure for table `writing`
--

CREATE TABLE IF NOT EXISTS `writing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `writing`
--

INSERT INTO `writing` (`id`, `file_name`, `file_path`) VALUES
(3, 'Writing_Band_Descriptors.pdf', 'uploads/Writing_Band_Descriptors.pdf'),
(4, 'sample-essay-advertising.pdf', 'uploads/sample-essay-advertising.pdf'),
(5, 'sample-essay-alternative-medicine.pdf', 'uploads/sample-essay-alternative-medicine.pdf'),
(6, 'sample-essay-information-technology.pdf', 'uploads/sample-essay-information-technology.pdf'),
(7, 'sample-essay-reducing-crime.pdf', 'uploads/sample-essay-reducing-crime.pdf'),
(8, 'sample-essay-university-education.pdf', 'uploads/sample-essay-university-education.pdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
