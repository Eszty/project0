-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2012 at 01:33 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jharvard_project0`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `dep_code` varchar(30) NOT NULL,
  `cat_num` int(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `begin_time` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `dep_code`, `cat_num`, `title`, `description`, `instructor`, `location`, `day`, `begin_time`) VALUES
(1, 'AAAS', 802, 'Introduction to African American Studies', 'n exploration of some of the key texts and issues in African American Studies from a range of disciplinary perspectives. Members of the faculty deliver guest lectures in their own areas of specialization.', 'Henry Louis Gates Jr', 'Emerson Hall', 'monday', 1100),
(2, 'AAAS', 9428, 'Introduction to African Studies', 'This course introduces students to the general outlines of African geography and history, as well as key controversies in the study of African health, social life, arts, and politics. Our aim is to give students a fundamental vocabulary and interdisciplin', 'unknown', 'unknown', 'unknown', 0),
(3, 'AAAS', 59207, 'Introduction to Black Political Thought', 'Introduces the key texts and figures in the African American political tradition from the antebellum period through the black power era. In addition to the more familiar black liberal and nationalist traditions, attention will be given to black conservati', 'Tommie Shelby', 'unknown', 'unknown', 0),
(4, 'MUSC', 4771, 'Theory II', 'Continues the work of Music 51. The fall term focuses on the Classical style (Haydn, Mozart, Beethoven). Topics include harmony, phrase structure, simple forms, and sonata-form procedures. Concepts are developed through analysis, model composition, keyboard harmony and ear-training exercises.', 'Suzannah Clark', 'Lowell Lecture Hall', 'monday', 1400);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `dep_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`dep_code`, `name`) VALUES
('AAAS', 'Department of African and African American Studies'),
('MUSC', 'Department of Music');

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE IF NOT EXISTS `shopping` (
  `course_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`course_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `taking`
--

CREATE TABLE IF NOT EXISTS `taking` (
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taking`
--

INSERT INTO `taking` (`course_id`, `user_id`) VALUES
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`) VALUES
(1),
(2),
(3),
(4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
