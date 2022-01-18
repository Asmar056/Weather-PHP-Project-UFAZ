

--
-- Structure de la table `cloudiness`
--

DROP TABLE IF EXISTS `cloudiness`;
CREATE TABLE IF NOT EXISTS `cloudiness` (
  `cloudinessID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `cloudinessDescription` varchar(50) NOT NULL,
  PRIMARY KEY (`cloudinessID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cloudiness`
--

INSERT INTO `cloudiness` (`cloudinessID`, `cloudinessDescription`) VALUES
(1, 'Clear sky'),
(2, 'Few clouds'),
(3, 'Scattered clouds'),
(4, 'Broken clouds'),
(5, 'Overcast clouds'),
(6, 'Light rain'),
(7, 'Moderate rain'),
(8, 'Shower rain'),
(9, 'Rain'),
(10, 'Thunderstorm'),
(11, 'Light snow'),
(12, 'snow'),
(13, 'Heavy snow');

-- --------------------------------------------------------

--
-- Structure de la table `weather`
--

DROP TABLE IF EXISTS `weather`;
CREATE TABLE IF NOT EXISTS `weather` (
  `weatherDataID` int(11) NOT NULL AUTO_INCREMENT,
  `cityId` int(11) NOT NULL,
  `dateMeasurement` date NOT NULL,
  `timeMeasurement` time NOT NULL,
  `temperature` float NOT NULL,
  `airPressure` int(11) NOT NULL,
  `precipitation` float NOT NULL,
  `solarRadiance` int(11) NOT NULL,
  `windSpeed` int(11) NOT NULL,
  `windDirection` int(11) NOT NULL,
  `humidity` tinyint(4) NOT NULL,
  `UVindex` tinyint(4) NOT NULL,
  `cloudinessID` tinyint(4) NOT NULL,
  `weatherOverallID` tinyint(4) NOT NULL,
  PRIMARY KEY (`weatherDataID`),
  KEY `weatherOverallID` (`weatherOverallID`),
  KEY `cityId` (`cityId`),
  KEY `cloudinessID` (`cloudinessID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `weather`
--


-- --------------------------------------------------------

--
-- Structure de la table `weather_overall`
--

DROP TABLE IF EXISTS `weather_overall`;
CREATE TABLE IF NOT EXISTS `weather_overall` (
  `weatherOverallID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `weatherDescription` varchar(50) NOT NULL,
  PRIMARY KEY (`weatherOverallID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `weather_overall`
--

INSERT INTO `weather_overall` (`weatherOverallID`, `weatherDescription`) VALUES
(1, 'Calm'),
(2, 'Pleasant'),
(3, 'Warm'),
(4, 'Sunny'),
(5, 'Fine'),
(6, 'Clear'),
(7, 'Dry'),
(8, 'Fair'),
(9, 'Cloudless'),
(10, 'Cloudy'),
(11, 'Humid'),
(12, 'Rainy'),
(13, 'Wet'),
(14, 'Windy'),
(15, 'Snowy'),
(16, 'Cold');

-- --------------------------------------------------------
--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityId` int(11) NOT NULL,
  `city_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityId`, `city_title`) VALUES
(1, 'Agdash'),
(2, 'Agjabadi'),
(3, 'Agstafa'),
(4, 'Agsu'),
(5, 'Astara'),
(6, 'Babek'),
(7, 'Baku ');

-- --------------------------------------------------------
