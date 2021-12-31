-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 31 déc. 2021 à 15:13
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `siteweb2021`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `mail` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`mail`, `pseudo`, `password`) VALUES
('guilbotmax@hotmail.fr', 'Kreza', '23.05.2000');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Img` varchar(255) NOT NULL,
  `Sujet` varchar(50) NOT NULL,
  `Pseudo` varchar(250) NOT NULL,
  UNIQUE KEY `Id` (`Id`),
  KEY `Sujet` (`Sujet`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`Id`, `Nom`, `Description`, `Img`, `Sujet`, `Pseudo`) VALUES
(22, 'James-Webb', 'Attendu depuis des années, ce bijou technologique a décollé vers les étoiles, ce samedi 25 décembre à 13h20, de Kourou, en Guyane. Engin d’observation le plus grand et le plus puissant en orbite, il devrait permettre aux scientifiques de remonter aux origines de l’Univers.\r\n\r\nEn cette fin d\'année, un extraordinaire cadeau de Noël n\'est pas tombé du ciel mais a été propulsé depuis la Terre dans les étoiles. Après de nombreux contretemps, le télescope spatial James Webb Space Telescope (JWST ou « Webb » pour les initiés) a été lancé, ce samedi 25 décembre à 13h20, par une fusée Ariane 5 depuis Kourou en Guyane, avec quatorze ans de retard par rapport aux premières estimations. Ce bijou d’ingénierie s’est fait désirer. Mais l’attente en valait la peine, assurent astronomes et astrophysiciens, qui promettent une véritable révolution dans l’observation spatiale grâce aux performances hors normes de ce nouveau venu.\r\n\r\nCent fois plus puissant que Hubble, son glorieux prédécesseur lancé en 1990, le JWST permettra d’observer plus loin dans l’Univers et donc plus loin dans le temps… Il sera le plus grand observatoire en orbite grâce à son miroir de 6,50 mètres de diamètre composé de dix-huit segments hexagonaux dorés, à comparer au miroir de 2,4 mètres de Hubble. «  C’est une véritable prouesse technologique », s’enthousiasme l’astrophysicien Stéphane Mazevet, directeur de l’Observatoire de la Côte d’Azur (lire son entretien). « Il est tellement puissant que si vous étiez un bourdon à 380 000 km d’ici, soit la distance Terre-Lune, on pourrait vous voir », ajoute le cosmologiste John Mather, l’un des pères scientifiques de la mission.', '\\app\\Contenu\\Images\\james.jpg', 'Astronomie', 'Kreza'),
(27, 'L\'éruption du trou noir de Centaurus', 'C\'est en 1800 que l\'astronome William Herschel a fait la découverte de la première bande de rayonnement au-delà du visible pour l\'œil humain :  l\'infrarouge. La bande ultraviolette, tout aussi invisible, sera découverte deux ans plus tard par le physicien Johann Ritter. Pour la bande radio, il faudra attendre 1888 et la célèbre expérience de Heinrich Hertz. Un demi-siècle plus tard environ, la radioastronomie prendra son essor et c\'est un domaine plus que jamais actif comme le montrent la collaboration de l\'Event Horizon Telescope et le développement en cour du Square Kilometre Array (SKA).\r\nL\'un des tout premiers pas menant vers le SKA a été réalisé depuis plusieurs années déjà avec la mise en service du Murchison Widefield Array, aussi connu sous l\'acronyme MWA, un radiotélescope basses fréquences géant situé à Meekatharra en Australie-Occidentale. Il vient de livrer de nouvelles images d\'une galaxie mythique dont Futura avait déjà parlé dans le précédent article ci-dessous et qui a fait l\'objet depuis longtemps de nombreuses observations aussi bien dans le visible avec Hubble que dans le domaine des rayons X avec Chandra : Centaurus A.\r\n\r\nIl se trouve que Centaurus A dans la constellation du Centaure était déjà connue de l\'astronome britannique John Herschel, le fils de William. Mais il ne pouvait pas savoir que la galaxie que les astronomes appellent aussi NGC 5128 est située à environ 12 millions d\'années-lumière et qu\'il s\'agit de la radiogalaxie la plus proche de la Voie lactée. Il ne pouvait pas savoir non plus qu\'en son cœur se trouve un trou noir supermassif contenant environ 55 millions de masses solaires (Sagittarius A* n’en contient que 4,3 millions environ dans notre Galaxie) et que Centaurus A est probablement le résultat d\'une collision passée entre une galaxie elliptique et une spirale. Son aspect actuel est celui d\'une galaxie lenticulaire.', 'app\\Contenu\\Images\\trou-noir.jpg', 'Astronomie', 'Kreza'),
(28, 'Nouveaux résultats autour du muon', 'Il y a près d’une vingtaine d’années, l’obtention d’une mesure de précision a eu l’effet d’une petite bombe dans le monde de la physique : celle d\'une valeur associée à cette particule élémentaire qu\'est le muon, à savoir son \"moment magnétique anomal\" (\"anomal\", comme dans \"anomalie\" ; on y revient un peu plus bas). En effet, celle-ci ne collait pas avec les prédictions du modèle standard. En somme, la théorie et la pratique étaient en désaccord, laissant supposer qu’une possible \"nouvelle physique\" demandait encore à être découverte. Pour les physiciens, repérer une faille dans le modèle standard est à la fois excitant, déroutant et… frustrant. Il est formidable de constater qu’on a peut-être loupé quelque chose, mais encore faut-il comprendre quoi !\r\n\r\nDepuis tout ce temps donc, les physiciens s’échinent à éclaircir l’énigme du moment magnétique des muons, notamment dans le cadre d’une expérience portant le nom de \"Muon g-2\", menée depuis 2018 au laboratoire FermiLab, dans l’Illinois, aux États-Unis. En réalité, cette expérience n’est autre que la copie améliorée - disons la prolongation - d’une précédente menée au Brookhaven National Laboratory, toujours aux États-Unis, entre 1997 et 2001. Celle-là même qui avait permis de constater le \"hic\" avec le moment magnétique des muons, dont la mesure précise fut plus élevée qu’attendu. Mercredi 7 avril 2021, l’équipe de Muon g-2, composée de 200 chercheurs des quatre coins du monde, a enfin livré ses premiers résultats… qui confirment ceux de Brookhaven : il y a bien un écart (de 0,0025 % certes, mais un écart tout de même) entre la mesure expérimentale du moment magnétique des muons et la théorie élaborée à partir du modèle standard.', 'app\\Contenu\\Images\\cover-r4x3w1000-606ee5451eaaa-eaed349f-43fa-4efd.jpg', 'Physique', 'Kreza'),
(29, 'La nouvelle chimie des plasmas', 'Ni solide, ni liquide, ni gazeux, un plasma représente un état particulièrement réactif de la matière. Des scientifiques de l\'Institut Pierre-Gilles de Gennes de Paris étudient les nouvelles réactions chimiques obtenues en faisant réagir des plasmas au sein de mini-réacteurs gravées sur des puces. Au croisement de la physique des plasmas et de la microfluidique, l\'équipe tente de faire émerger une chimie plus respectueuse de l\'environnement.', 'app\\Contenu\\Images\\plasma.jpeg', 'Physique', 'Kreza'),
(30, 'Fusion contrôlée : qu\'est-ce que c\'est ?', 'La fusion contrôlée est l\'un des rêves que poursuivent les physiciens. Il s\'agit non seulement de reproduire sur Terre les réactions de fusion thermonucléaire qui font briller les étoiles, ce que l\'on sait déjà faire avec la bombe H ou en accélérateur, mais surtout de maîtriser ces réactions pour produire de l\'énergie. Si l\'on arrivait, par exemple, à reproduire de façon stable les réactions de fusion du deutérium avec le tritium, deux isotopes de l\'hydrogène, nous disposerions d\'une énergie presque propre et virtuellement inépuisable. Il y a essentiellement deux voies pour cela.\r\n\r\n    La première est celle à la base du projet Iter. L\'idée est de maintenir à très haute température un plasma de basse densité pendant un temps relativement long, de l\'ordre de la seconde. On doit mobiliser pour cela des champs magnétiques intenses à l\'intérieur d\'une cavité torique : c\'est la fusion par confinement ou encore la fusion magnétique. On sait allumer la réaction de fusion mais le plasma piégé dans ces champs magnétiques est très instable et les conditions nécessaires à la fusion ne peuvent être maintenues suffisamment longtemps pour que la réaction s\'auto-entretienne et produise plus d\'énergie qu\'elle n\'en consomme.\r\nLa seconde est celle qui est à la base du projet HiPER pour High Power laser Energy Research et qui veut, quant à lui, renouer avec l\'axe de recherches des années 1970 pendant lesquelles les premiers travaux vraiment importants sur la fusion par laser ont été conduits. Aujourd\'hui encore, des installations militaires existent, aux États-Unis avec le NIF (National Ignition Facility) du Lawrence Livermore National Laboratory, et en France avec le LMJ (Laser Mégajoule) de Bordeaux, dédiées à la simulation des armes nucléaires et qui explorent la physique des lasers adéquats pour réaliser ce qu\'on appelle la fusion inertielle. Avec celle-ci, il faut produire un plasma avec une très haute densité (supérieure d\'un facteur 109 à celui de la fusion par confinement) et le temps de réaction est extrêmement court (de l\'ordre du milliardième de seconde). Pour atteindre ces conditions l\'Europe veut donc construire le plus puissant laser du monde en espérant grâce à lui faire de la fusion nucléaire une réalité d\'ici deux décennies. La localisation du centre de recherche qui abritera ce laser est encore incertaine mais le Royaume-Uni est actuellement le candidat favori.', 'app\\Contenu\\Images\\fusion.jpg', 'Physique', 'Kreza'),
(31, 'Pourquoi ne peut on pas dépasser le cyberpunk?', 'Lorsqu’il a fait son apparition il y a plus de trente ans, le cyberpunk a été acclamé comme le genre de science-fiction le plus passionnant des années 1980. Développé par une poignée de jeunes auteurs, il racontait des histoires se situant dans un avenir proche, en se concentrant sur la rencontre entre sous-cultures alternatives et nouvelles technologies, le tout dans un monde dominé par d’immenses entreprises. Le cyberpunk n’était qu’une toute petite partie du vaste champ de la science-fiction, mais il faisait l’objet d’une attention démesurée. Depuis, les aspects qui le caractérisaient se sont usés jusqu\'à devenir des clichés. En 1992, Neal Stephenson en a fait une parodie hilarante dans Snow Crash (roman souvent pris, à tort, pour un exemple caractéristique du genre dont il se moque). Et, en 1999, les Wachowski ont amené le cyberpunk au grand public avec Matrix.', 'app\\Contenu\\Images\\cyberpunkette.jpg', 'Science Fiction', 'Kreza'),
(32, 'Intelligence artificielle', 'Voici venu le temps de Blade Runner. C’est en effet en novembre 2019 - donc dans notre passé ! - que Ridley Scott situe l’intrigue de ce classique de la science-fiction, adapté du géant de la SF qu’est Philip K. Dick. Presque 40 ans ans après sa sortie ciné, il demeure l’une des représentations les plus saisissantes de l’intelligence artificielle au 7e art. Sa suite, Blade Runner 2049 par Denis Villeneuve, en a donné en 2017 une réplique tonitruante. L\'un des points de jonction entre ces oeuvres de fiction, c\'est qu\'elles incarnent une IA que films et romans aiment à représenter \"forte\", c’est-à-dire toute-puissante. Elle n’a pas grand-chose à voir avec celle qui envahit aujourd’hui notre réalité, celle-ci se contentant de mimer quelques capacités humaines !\r\n\"Le complexe de Frankenstein\"\r\n\r\nMais où chercher la première IA fictionnelle ? \"Il est complexe de désigner une œuvre fondatrice\", explique Natacha Vas-Deyres, chercheuse en science-fiction à l’université Bordeaux Montaigne (cet article a initialement été publié dans le hors-série 199 de Sciences et Avenir consacré à l\'intelligence artificielle). On peut cependant dénicher les prémices des machines pensantes dans des récits de la fin du XIXe siècle. Ainsi, le roman Ignis du Français Didier de Chousy (1883) campe la rébellion de robots-ouvriers agricoles contre leurs exploiteurs humains. \"S’ils se révoltent, c’est que leur pensée est autonome\", analyse Natacha Vas-Deyres, pour qui cette œuvre est l’une des toutes premières introductions aux machines dotées de réflexion.\r\nEn 1909, le Britannique Edward Morgan Forster pousse le bouchon plus loin dans La machine s’arrête : les hommes de sa société futuriste vivent sous terre, sous la domination d’un immense cerveau artificiel. D’autres livres mettront en scène ce que le romancier Isaac Asimov appelle dans son cycle Les Robots \"le complexe de Frankenstein\" : clin d’œil au médecin inventé par la romancière Mary Shelley, créateur d’un monstre qui se retourne contre lui. Et façon de dire que l’homme imagine toujours le pire dès qu’il invente une machine : il est dans la nature de celle-ci de se rebeller !', 'app\\Contenu\\Images\\Intelligence.jpg', 'Science Fiction', 'Kreza');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `horaire` varchar(50) NOT NULL,
  `jour` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `nom`, `image`, `horaire`, `jour`) VALUES
(2, 'Musée : Cite des sciences et de l industrie', 'app\\Contenu\\Images\\cite-des-sciences-et-de-l-industrie.jpg', '15h00', 'Samedi'),
(3, 'Conférence : Recyclage et Chimie ', 'app\\Contenu\\Images\\211109_chimie_recyclage.png', '14h30', 'Mercredi'),
(4, 'Conference : Défis de la transition énergétique', 'app\\Contenu\\Images\\Transition.jpg', '10h30', 'Mercredi'),
(5, 'Astronomie : Stations de nuit', 'app\\Contenu\\Images\\astronomie-stations-de-nuit-5cb9.jpeg', '22h00', 'Samedi');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(60) NOT NULL,
  `event` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Pseudo` (`Pseudo`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `Pseudo`, `event`) VALUES
(24, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(26, 'Kreza', 'Conference : Défis de la transition énergétique'),
(27, 'Kreza', 'Astronomie : Stations de nuit'),
(28, 'Kreza', 'Astronomie : Stations de nuit'),
(29, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(30, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(31, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(32, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(33, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(34, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(35, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(36, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(37, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(38, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(39, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(40, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(41, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(42, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(43, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(44, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(45, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(46, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(47, 'Kreza', 'Musée : Cite des sciences et de l industrie'),
(48, 'Kreza', 'Musée : Cite des sciences et de l industrie');

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

DROP TABLE IF EXISTS `sujet`;
CREATE TABLE IF NOT EXISTS `sujet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  PRIMARY KEY (`Nom`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sujet`
--

INSERT INTO `sujet` (`id`, `Nom`) VALUES
(1, 'Physique'),
(2, 'Astronomie'),
(3, 'Science Fiction');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Pseudo` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Pseudo`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `Pseudo` (`Pseudo`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Pseudo`, `nom`, `prenom`, `mail`, `password`, `id`) VALUES
('Kreza', 'Guilbot', 'Maxence', 'guilbotmax@hotmail.fr', '23.05.2000', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
