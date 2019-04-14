-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2019 at 09:49 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `civil`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

DROP TABLE IF EXISTS `alogin`;
CREATE TABLE IF NOT EXISTS `alogin` (
  `login` varchar(13) NOT NULL,
  `pass` varchar(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`login`, `pass`) VALUES
('cesa', 'gcoejcesa');

-- --------------------------------------------------------

--
-- Table structure for table `autocad`
--

DROP TABLE IF EXISTS `autocad`;
CREATE TABLE IF NOT EXISTS `autocad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autocad`
--

INSERT INTO `autocad` (`id`, `text`) VALUES
(1, '100 rs per head'),
(2, '1.Draw given plan in within given time.<br>\n2.If any rules are added then rules will be displayed on our website.<br>\n3.Organisers and judges have whole rights to change any rule on the spot. <br>\n4.Their decision will be final <br>\n5.Any argument will judges or organiser may result in disqualification<br>\n<br>\n'),
(3, '10-12 am ');

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

DROP TABLE IF EXISTS `building`;
CREATE TABLE IF NOT EXISTS `building` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`id`, `text`) VALUES
(1, '100rs is registration fees'),
(2, 'Mr. Deshmukh recently bought a plot of area&nbsp;&nbsp; 2400 sq ft, he wishes to construct a G+1 house for his family. The family consist of 4 members that are Mr & Mrs. Deshmukh and two children.&nbsp;&nbsp;Mr. Deshmukh wants to have the following elements in his house:<br>\n1.No. of bedrooms â€“ 2<br>\n2.Hall<br>\n3.Kitchen<br>\n4.Combine water closets and bath as per requirement.<br>\n5.Puja room<br>\n6.Lawn<br>\nAs a Civil Engineer how would you help Mr. Deshmukh to build his dream home with minimum cost of construction and proper utilization of area provided.<br>\nDraw a Line Plan of each floor level on the drawing sheet provided and construct a model of Mr. Deshmukhâ€™s home with the help of materials provided. Candidates have to construct the model as per the Line plan drawn by the participants. <br>\n'),
(3, '1)Candidate must show north direction and scale on the sheet.<br>\n2)There should not be more than 4 members in each group.<br>\n3)Candidates are not allowed to bring any material.<br>\n4)Proper care has to be taken for dimensions.<br>\n5)Take suitable scale as per material will be provided<br>\n6)Organisers have whole rights to change any rule at any time. Judgeâ€™s decision will be final. Any argument with organisers or judges will result in disqualification.<br>\n'),
(4, ''),
(5, '10-12 am');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `collegename` text NOT NULL,
  `event` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events_details`
--

DROP TABLE IF EXISTS `events_details`;
CREATE TABLE IF NOT EXISTS `events_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `reg_fees` varchar(500) NOT NULL,
  `rules` longtext NOT NULL,
  `instructions` longtext NOT NULL,
  `schedule` longtext NOT NULL,
  `problem_statement` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poster`
--

DROP TABLE IF EXISTS `poster`;
CREATE TABLE IF NOT EXISTS `poster` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poster`
--

INSERT INTO `poster` (`id`, `text`) VALUES
(1, 'Registartion Fees/participant:-100'),
(2, 'Topics -<br>\n<br>\n1. Smart Cities<br>\n2. Wireless world<br>\n3. Space waste<br>\n'),
(3, '1. Participants will have to bring their paper in printed format.<br>\n2. The content or the summery of the paper should be shown in form of poster <br>\n3. No sticking is allowed on the poster.<br>\n4. Only handmade poster is allowed.<br>\n5. No. of participant will be 2.<br>\n6. Single participant entry is not allowed<br>\n7. Poster minimum size Is 50x50 sq. cm.<br>\n8. Rules would be strictly followed unless poster will be disqualified.<br>\n9. Judges decision will be final.<br>\n10. Any argument will judges or organiser may result in disqualification<br>\n'),
(4, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Out of 5 marks for poster appearance<br>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Out of 5 marks for presentation<br>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Out of 5 marks for depth of understanding<br>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. Out of 5 marks for QNA <br>\n<br>\n'),
(5, '10-12 am<br>\n');

-- --------------------------------------------------------

--
-- Table structure for table `pubg`
--

DROP TABLE IF EXISTS `pubg`;
CREATE TABLE IF NOT EXISTS `pubg` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pubg`
--

INSERT INTO `pubg` (`id`, `text`) VALUES
(1, '100 rs per head'),
(2, 'ïƒ˜Competition will be held in 2 Round.<br>\nïƒ˜Depending upon the entries, these will be divided into Groups (Like -30,40,50â€¦.).<br>\nïƒ˜Winner of 1st Round will get into the 2nd round i.e Final round.<br>\nïƒ˜One who gets chicken Dinner Will be Declared winner.<br>\nïƒ˜Note: participant have to bring their own Mobile along with Your own internet.'),
(3, 'ïƒ˜For emulator the maximum no of entries are 40.<br>\nïƒ˜Competition will be held in Only 1 Round.<br>\nïƒ˜One who gets chicken Dinner Will be Declared winner.<br>\nïƒ˜Note: participant have to bring their own laptop along with Your own internet.<br>\n'),
(4, '1.This competition is for â€œsoloâ€.<br>\n2.Bring your receipt at the time of reporting.<br>\n3.Teams must report 30 min before the schedule.<br>\n4.Organisers have whole rights to change or update the rules of the contest at any point of time.<br>\n5.Mischievous will be eliminated from the event.<br>\n6.Organiser will not be responsible for any type of technical issue (internet or any other technical fault)<br>\n'),
(5, '10-12 am');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `text`) VALUES
(1, '500 per person'),
(2, 'â€¢The quiz will be held in 2 rounds. <br>\nâ€¢First round:- 50 MCQ&nbsp;&nbsp;questions( 100 marks), there will be penalty of 1 mark for each wrong response. Top 20 students will be selected for second round.(Organisers have rights to change the number)<br>\nâ€¢Second round:- Rapid fire questions.<br>\nâ€¢The quiz emphasize on science, technology, gk &amp; environment.<br>\nâ€¢Organisers and judges have whole rights to change any rule on the spot. <br>\nâ€¢Their decision will be final. <br>\nâ€¢Any argument with judges or organiser may result in disqualification<br>\n'),
(3, '10-12 am');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
