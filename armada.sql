
--
-- 数据库： `armada`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `loginID` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `loginID`, `password`) VALUES
(1, 'ghjfghkj', 'sjx87938'),
(2, 'sjx87938', 'sjx87938');

-- --------------------------------------------------------

--
-- 表的结构 `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `loginID` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `sexe` enum('monsieur','madame') DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginID` (`loginID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `loginID`, `password`, `sexe`, `nom`, `prenom`, `email`) VALUES
(1, 'sss', 'ddd', 'monsieur', 's', 's', 's'),
(2, 'ldx88888', 'sjx87938', 'monsieur', 'jixi', 'shi', 'sjx87938@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
