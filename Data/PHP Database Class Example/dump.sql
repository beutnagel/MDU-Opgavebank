-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 14, 2017 at 11:55 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `moviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `imdb_id` varchar(9) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `year` int(4) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`imdb_id`, `title`, `description`, `image`, `year`, `type`) VALUES
('adsdsadsa', 'sadasd', 'asdasdasd', 'asdasdas', 1234, 'Movie'),
('tt0103874', 'Bram Stoker\'s Dracula', 'The centuries old vampire Count Dracula comes to England to seduce his barrister Jonathan Harker\'s fiancée Mina Murray and inflict havoc in the foreign land.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTYyOTM5NzU3Nl5BMl5BanBnXkFtZTgwOTQxNjAxNzE@._V1_UY268_CR4,0,182,268_AL_.jpg', 1992, 'Movie'),
('tt0110148', 'Interview with the Vampire: The Vampire Chronicles', 'It hasn\'t even been a year since a plantation owner named Louis lost his wife in childbirth. Both his wife and the infant died, and now he has lost his will to live. A vampire named Lestat takes a liking to Louis and offers him the chance to become a creature of the night: a vampire. Louis accepts, and Lestat drains Louis\' mortal blood and then replaces it with his own, turning Louis into a vampire. Louis must learn from Lestat the ways of the vampire.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BYThmYjJhMGItNjlmOC00ZDRiLWEzNjUtZjU4MjA3MzY0MzFmXkEyXkFqcGdeQXVyNTI4MjkwNjA@._V1_UX182_CR0,0,182,268_AL_.jpg', 1994, 'Movie'),
('tt4158110', 'Mr. Robot', 'Follows Elliot, a young programmer working as a cyber-security engineer by day, and a vigilante hacker by night.\r\n\r\nElliot\'s internal struggles surrounding his upbringing and personal life intertwine with his present external challenges as part of fsociety. Being very introverted, Elliot fails to express emotions and determine for himself what is real and what is not, a question that is also left somewhat ambiguous to the viewer. In particular Elliot struggles to remember important facts about his close relatives.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTYzMDE2MzI4MF5BMl5BanBnXkFtZTgwNTkxODgxOTE@._V1_UX182_CR0,0,182,268_AL_.jpg', 2015, 'TV Series');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type`) VALUES
('Movie'),
('Music Video'),
('Short Movie'),
('TV Series');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`imdb_id`),
  ADD KEY `titles_ibfk_1` (`type`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `titles`
--
ALTER TABLE `titles`
  ADD CONSTRAINT `titles_ibfk_1` FOREIGN KEY (`type`) REFERENCES `types` (`type`) ON DELETE CASCADE ON UPDATE CASCADE;
