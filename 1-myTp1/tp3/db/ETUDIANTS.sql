-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 22 mars 2022 à 14:39
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ETUDIANTS`
--

-- --------------------------------------------------------

--
-- Structure de la table `Enseignant`
--

CREATE TABLE `Enseignant` (
  `num_ens` varchar(40) NOT NULL,
  `nom_ens` varchar(60) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `anciennete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Etudiant`
--

CREATE TABLE `Etudiant` (
  `nom_etu` varchar(60) NOT NULL,
  `prenom_etu` varchar(60) NOT NULL,
  `num_etu` varchar(40) NOT NULL,
  `date_naiss` date NOT NULL,
  `sexe` enum('M','F') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

INSERT INTO `Etudiant` (`num_etu`, `nom_etu`, `prenom_etu`) VALUES
('C130016844', 'OUMHELLA', 'Abdellatif'),
('C130029392', 'BENLAGOTE', 'Maryem'),
('C131120170', 'BAAZIZ', 'Fadwa'),
('C134068290', 'IDELKADI', 'Radia'),
('C134107936', 'BAYA', 'Achraf'),
('C136054869', 'ABALHASSANE', 'Ali'),
('D130024200', 'BARTIL', 'Oussama'),
('D130040743', 'GOUSSA', 'Oussama'),
('D130141164', 'EL FERDAOUS', 'Asma'),
('D130156445', 'EL HAMIDI', 'Mohamed'),
('D130174950', 'KINAD', 'Kawtar'),
('D130196714', 'OUHSAINE', 'Omayma'),
('D130301927', 'SALIHI', 'Khadija'),
('D130513960', 'EL GOUMIRI', 'Imane'),
('D130613841', 'MOUSTIKE', 'Imane'),
('D130886530', 'MAFAMANE', 'Yassine'),
('D131080719', 'EL KRIK', 'Yassine'),
('D131093454', 'MARIR', 'Sana'),
('D131116462', 'ASSOUKH', 'Fatiha'),
('D131147565', 'MASRAFI', 'Assma'),
('D131147893', 'AIT EL MOKHTAR', 'Abdelhafid'),
('D131380065', 'CHRAMI', 'Ilyas'),
('D131434659', 'EL MAATI', 'Karima'),
('D131467175', 'BENAZZOUZ', 'Oussama'),
('D131557856', 'IJMEK', 'Amal'),
('D131639794', 'HAFALI', 'Kawthar'),
('D131777453', 'EL HAMRI', 'Youssef'),
('D132051321', 'FADEL', 'Zakaria'),
('D132281342', 'SAIDI', 'Zineb'),
('D132403132', 'ABOUCHRA', 'Abdessamad'),
('D132445165', 'CHAIB', 'Abdelfatah'),
('D132535188', 'BELAFKIH', 'Amira'),
('D132619092', 'ES-SAYOUTI', 'Abdelaziz'),
('D132627960', 'BIMASMAREN', 'Mohamed'),
('D132789051', 'JADA', 'Mohamed'),
('D132856631', 'BERKASSE', 'Asma'),
('D133077666', 'AMEZIANE', 'Adnane'),
('D133253727', 'AIT-ELHAJ', 'Jihane'),
('D133377908', 'DASSER', 'Hajar'),
('D133623978', 'BOUOUDI', 'Fatima-Ezzahra'),
('D133803357', 'BENAISSA', 'Saida'),
('D134147588', 'ASEHNOUNE', 'Khadija'),
('D134158373', 'EL-OUATTAB', 'Hamza'),
('D134734842', 'AMLAL', 'Asma'),
('D135122512', 'MARNICH', 'Zahra'),
('D135137615', 'MARCHICH', 'Hanane'),
('D135143315', 'AMOUSSE', 'Salma'),
('D135329130', 'ELOUAIZI', 'Ayoub'),
('D135675074', 'EL AMINE', 'Nehaila'),
('D135788127', 'ROUISSI', 'Hasna'),
('D135840940', 'BENHADIA', 'Meryem'),
('D136082654', 'MAKHZIN', 'Oumaima'),
('D136112513', 'MESKINE', 'Fatima-Ezzahra'),
('D136170481', 'ABRKAOUI', 'Abdellah'),
('D136273415', 'MIMI', 'Asmae'),
('D136543244', 'EL BAKASSI', 'Ismail'),
('D136641379', 'BOUKADRE', 'Driss'),
('D136731968', 'ABOUNACER', 'Aya'),
('D136882194', 'OUJAID', 'Soumia'),
('D137252162', 'KARROUM', 'Houssam'),
('D137379256', 'ELMOUMNI', 'Fatima Zahra'),
('D137492514', 'OUYOUS', 'Saida'),
('D137602600', 'AZDIG', 'Mohamed'),
('D137750484', 'OUIJJANE', 'Mohamed'),
('D137882483', 'ZOUBAIR', 'Ali'),
('D138315276', "EL M'RAHI", 'Yassmina'),
('D138331630', 'AMHITA', 'Marouane'),
('D138380564', 'AIT TAKASSITE', 'Badr'),
('D138624935', 'OU-HIDA', 'Hajar'),
('D139123283', 'BAALY', 'Safa'),
('D139123921', 'KHARTOUM', 'Laila'),
('D139219088', 'AHJAM', 'Fatima'),
('D139769969', 'EL ABBADI', 'Fatima'),
('D139809162', 'EL KHATTAB', 'Ikram'),
('D139908284', 'ENNYA', 'Yassir'),
('D140009697', 'OULKADI', 'Mohamed'),
('D140011090', 'BAKKACH', 'Khadija'),
('D141046208', 'KHAIR', 'Latifa'),
('D145069828', 'FANIDI', 'Lamya'),
('D146042538', 'AGRRAM', 'El Mehdi'),
('D146043446', 'EL KABRANE', 'Laila'),
('D146053822', 'ELMOUDDEN', 'Hafid'),
('D146070425', 'EL HARCHAOUI', 'Imad'),
('D148007903', 'ESSAIDI', 'Abdelhamid'),
('D148048278', 'KHOUMRI', 'Haitam'),
('D149023599', 'JIRARI', 'Inass'),
('G134243234', 'IDMANSSOUR', 'Samira'),
('G134671130', 'IDLMAALEM', 'Ahmed'),
('G134806733', 'BELKHDARE', 'Chaima'),
('G135258181', 'BOULAADAM', 'Aimad'),
('G135457301', 'ELACHGUAR', 'Elhoucine'),
('J133507009', 'AIT ABDELLAH OULMOKHTAR', 'Salma'),
('K139512602', 'ALANBAR', 'Mounia'),
('L138209573', 'RAHMOUN', 'Nizar'),
('R133331597', 'QADIRI', 'Hiba');




INSERT INTO `matiere` (`num_mat`,'nom_mat', `coef`, `_num_ens`) VALUES
('PHP2023', 'programation php',4,1),
('Java2022', 'programation java',4,3),
('C2021', 'programation C',2,5),
('BDR2023', 'modelisation classique',2,4),
('MAT2022', 'MATIMATIQUE',2,6),
('MP2023', 'Gestion de projet',2,1),
('Csharp2022', 'programation C#',3,7),
('UML2023', 'Modelisation Objet',3,2),
--
-- Structure de la table `Matiere`
--

CREATE TABLE `Matiere` (
  `num_mat` varchar(40) NOT NULL,
  `nom_mat` varchar(60) NOT NULL,
  `coef` float NOT NULL,
  `_num_ens` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Note`
--

CREATE TABLE `Note` (
  `_num_etu` varchar(40) NOT NULL,
  `_num_mat` varchar(40) NOT NULL,
  `note` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Enseignant`
--
ALTER TABLE `Enseignant`
  ADD PRIMARY KEY (`num_ens`);

--
-- Index pour la table `Etudiant`
--
ALTER TABLE `Etudiant`
  ADD PRIMARY KEY (`num_etu`);

--
-- Index pour la table `Matiere`
--
ALTER TABLE `Matiere`
  ADD PRIMARY KEY (`num_mat`),
  ADD KEY `_num_ens` (`_num_ens`);

--
-- Index pour la table `Note`
--
ALTER TABLE `Note`
  ADD PRIMARY KEY (`_num_etu`,`_num_mat`),
  ADD KEY `fk2` (`_num_mat`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Matiere`
--
ALTER TABLE `Matiere`
  ADD CONSTRAINT `matiere_ibfk_1` FOREIGN KEY (`_num_ens`) REFERENCES `Enseignant` (`num_ens`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Note`
--
ALTER TABLE `Note`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`_num_etu`) REFERENCES `Etudiant` (`num_etu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`_num_mat`) REFERENCES `Matiere` (`num_mat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
