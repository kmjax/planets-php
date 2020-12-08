-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2020 at 05:09 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `jaxcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `planets`
--

CREATE TABLE `planets` (
  `planet_id` int(11) NOT NULL,
  `planet_name` varchar(16) NOT NULL,
  `planet_description` varchar(512) NOT NULL,
  `distance_from_sun` varchar(32) NOT NULL,
  `radius` varchar(32) NOT NULL,
  `mass` varchar(32) NOT NULL,
  `length_of_day` varchar(32) NOT NULL,
  `orbital_period` varchar(32) NOT NULL,
  `google_maps_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `planets`
--

INSERT INTO `planets` (`planet_id`, `planet_name`, `description`, `distance_from_sun`, `radius`, `mass`, `length_of_day`, `orbital_period`, `google_maps_link`) VALUES
(1, 'Mercury', 'Mercury is the smallest and innermost planet in the Solar System. Its orbit around the Sun takes 87.97 Earth days, the shortest of all the planets in the Solar System.', '35.98 million mi', '1,516 mi', '.033 × 10^25 kg', '58d 15h 30m', '88 days', 'https://www.google.com/maps/space/mercury'),
(2, 'Venus', 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty. As the second-brightest natural object in Earth\'s night sky after the Moon, Venus can cast shadows and can be, on rare occasion, visible to the naked eye in broad daylight.', '67.03 million mi', '3,760.4 mi', '.487 × 10^25 kg', '116d 18h 0m', '225 days', 'https://www.google.com/maps/space/venus'),
(3, 'Earth', 'Earth is the third planet from the Sun and the only astronomical object known to harbor life. About 29% of Earth\'s surface is land consisting of continents and islands. The remaining 71% is covered with water, mostly by oceans but also lakes, rivers and other fresh water, which together constitute the hydrosphere.', '92.96 million mi', '3,958.8 mi', '.597 × 10^25 kg', '1d', '365 days', 'https://www.google.com/maps/space/earth'),
(4, 'Mars', 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury. In English, Mars carries the name of the Roman god of war and is often referred to as the \"Red Planet\".', '141.6 million mi', '2,106.1 mi', '.064 × 10^25 kg', '1d 0h 37m', '687 days', 'https://www.google.com/maps/space/mars'),
(5, 'Jupiter', 'Jupiter is the fifth planet from the Sun and the largest in the Solar System. It is a gas giant with a mass one-thousandth that of the Sun, but two-and-a-half times that of all the other planets in the Solar System combined.', '483.8 million mi', '43,441 mi', '189.8 × 10^25 kg', '0d 9h 56m', '12 years', 'https://en.wikipedia.org/wiki/Jupiter#/media/File:Jupiter_and_its_shrunken_Great_Red_Spot.jpg'),
(6, 'Saturn', 'Saturn is the sixth planet from the Sun and the second-largest in the Solar System, after Jupiter. It is a gas giant with an average radius of about nine times that of Earth. It only has one-eighth the average density of Earth; however, with its larger volume, Saturn is over 95 times more massive.', '890.8 million mi', '36,184 mi', '56.83 × 10^25 kg', '0d 10h 42m', '29 years', 'https://en.wikipedia.org/wiki/Saturn#/media/File:Saturn_during_Equinox.jpg'),
(7, 'Uranus', 'Uranus is the seventh planet from the Sun. Its name is a reference to the Greek god of the sky, Uranus, who, according to Greek mythology, was the grandfather of Zeus and father of Cronus. It has the third-largest planetary radius and fourth-largest planetary mass in the Solar System.', '1,784 million mi', '15,759 mi', '8.681 × 10^25 kg', '0d 17h 14m', '84 years', 'https://en.wikipedia.org/wiki/Uranus#/media/File:Uranus2.jpg'),
(8, 'Neptune', 'Neptune is the eighth and farthest-known Solar planet from the Sun. In the Solar System, it is the fourth-largest planet by diameter, the third-most-massive planet, and the densest giant planet. It is 17 times the mass of Earth, slightly more massive than its near-twin Uranus.', '2,793 million mi', '15,299 mi', '10.24 × 10^25 kg', '0d 16h 6m', '165 years', 'https://en.wikipedia.org/wiki/Neptune#/media/File:Neptune_-_Voyager_2_(29347980845)_flatten_crop.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `planets`
--
ALTER TABLE `planets`
  ADD PRIMARY KEY (`planet_id`);
COMMIT;

