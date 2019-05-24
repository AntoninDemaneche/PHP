-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 24 mai 2019 à 13:33
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `spawn`
--

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

DROP TABLE IF EXISTS `lieu`;
CREATE TABLE IF NOT EXISTS `lieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `maison` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id`, `nom`, `maison`, `description`, `img`) VALUES
(1, 'Winterfell', 'Stark', 'La Maison Stark est l\'une des grandes maisons de Westeros. Ils règnent sur la vaste région du Nord depuis leur siège, Winterfell, un château situé au centre de la région.\r\n\r\nElle descend des Premiers Hommes et date de l\'Âge des Héros. Son fondateur, Brandon le Bâtisseur, fut de ceux qui créèrent, après la Longue Nuit, la Garde de Nuit. D\'après la légende, Brandon demanda l\'aide des géants et des enfants de la forêt pour construire le Mur. Il édifia ensuite le siège ancestral de sa maison, Winterfell, et fut couronné premier roi du nord.\r\n\r\nLa devise des Stark est « L\'hiver vient », ce qui pourrait sonner comme un avertissement et leur emblème représente un Loup Géant.', 'winterfell.png'),
(2, 'Castral Roc', 'Lanister', 'La Maison Lannister est l\'une des grandes maisons de Westeros et également l\'actuelle maison royale des Sept Couronnes. Ils règnent sur la vaste région des Terres de l\'Ouest depuis leur siège, Castral Roc, un château surplombant Port-Lannis.\r\n\r\nBlonds, grands et beaux, les Lannister contiennent le sang d\'aventuriers Andals qui ont sculpté un royaume puissant dans les collines et les vallées de l\'ouest. Grâce à la lignée féminine, ils se vantent de descendre de Lann le Futé, l\'escroc légendaire de l\'Âge des Héros qui a dupé les membres de la Maison Castral en leur prenant Castral Roc à l\'époque des Premiers Hommes.\r\n\r\nLes Lannister ont régné en tant que Roi du Roc jusqu\'à la Conquête des Targaryen, mais ils ont pu conserver le titre de seigneurs des terres de l\'Ouest. La maison a connu des moments difficiles lors du règne de lord Tytos, mais le pouvoir de son ancienne gloire a été repris grâce à son fils, lord Tywin. Sa fille Cersei est la reine du roi Robert Baratheon, tandis que son jumeau Ser Jaime est un chevalier de Garde Royale de Robert. Les membres de la famille ont tendance à avoir des cheveux d\'or et des yeux vert émeraude.\r\n\r\nLa devise des Lannister est « Je Rugis! », cependant, leur devise non officielle, aussi bien connue, est « Un Lannister paie toujours ses dettes ». Leur emblème représente un lion.', 'Castralrock.png'),
(3, 'Donjon Rouge', 'Baratheon', 'La Maison Baratheon était une grande maison de Westeros. Ils régnaient sur la vaste région des Terres de l\'Orage depuis leur siège, Accalmie, un château situé au sud-est de Port-Réal.\r\n\r\nRobert Baratheon est devenu Roi des Sept Couronnes après la rébellion mettant fin à la dynastie de la Maison Targaryen. La Maison Baratheon s\'est éteinte en l\'an 303 après la mort de Tommen avant de renaître deux ans plus tard après que Daenerys Targaryen légitime Gendry.\r\n\r\nLa devise des Baratheon est « Nôtre est la fureur » et leur emblème représente un cerf qui devient couronné suite à l\'accession au trône de Robert Baratheon.', 'djrouge.jpg'),
(4, 'Pyk', 'Greyjoy', 'La Maison Greyjoy est l\'une des grandes maisons de Westeros. Elle règne sur les Îles de Fer, un ensemble d\'îles rocheuses réputées pour les constructions navales qui y sont effectuées depuis son siège, Pyk. La Maison est formée de marins qui naviguent sur les mers, aiment explorer et écumer les mers, mais également piller; ils honorent les traditions Fer-nés.\r\n\r\nLes Greyjoy réclament l\'indépendance des îles de Fer depuis la Guerre des Cinq Rois mais le coup d\'état organisé par Euron Greyjoy a séparé la Maison en deux camps.\r\n\r\nLa devise des Greyjoy est « Nous ne semons pas », bien que l\'expression « Ce qui est mort ne saurait mourir » soit aussi bien connue. Leur emblème représente un kraken.', 'pyk.jpg'),
(5, 'Lancehélion', 'Martell', 'La Maison Martell était une grande maison de Westeros. Ils régnaient sur la vaste région de Dorne depuis leur siège, Lancehélion, un château situé dans l\'extrême sud-est du continent.\r\n\r\nDurant la période de la conquête d\'Aegon, Dorne a résisté aux efforts du roi Targaryen pour annexer la région aux Sept Couronnes. Une alliance de mariage entre un roi Targaryen et une princesse dornienne aura finalement apporté la région sous la domination du Trône de fer. La mort d\'Oberyn Martell à Port-Réal complique la relation de la famille royale avec les Martell et divise les loyautés de Dorne entre le Prince Doran, et Ellaria Sand et les Aspics des Sables. Avec l\'aide des filles bâtardes d\'Oberyn, Ellaria assassine Myrcella Baratheon et Doran Martell, et demande à Obara et Nymeria de tuer l\'héritier Martell, Trystan. S\'étant allié avec Tyrell et Targaryen, elles continuent leur mission de vengeance contre les Lannister.\r\n\r\nLa devise des Martell est « Insoumis, Invaincus, Intacts » et leur blason représente une lance d\'or transperçant un soleil rouge sur un fond orange. Ces symboles proviennent de la fusion du blason Martell d\'origine (une flèche jaune) à l\'emblème de la princesse Nymeria, cela pour symboliser le mariage de la reine-guerrière Mors Martell.\r\n\r\n', 'lance.jpg'),
(6, 'Peyredragon ', 'Targaryen', 'La Maison Targaryen est une ancienne grande maison de Westeros. La famille est originaire de l\'antique Valyria qui a échappé au Fléau qui a anéanti toute la ville. Ils ont vécu pendant des siècles sur l\'île de Peyredragon jusqu\'à ce qu\'Aegon le Conquérant et ses sœurs, chevauchant leurs dragons, réussissent à conquérir les Sept Couronnes.\r\n\r\nL\'ère des Targaryen sur le Trône de Fer a duré pendant près de trois cent ans. Il connurent plusieurs rébellions, notamment de la part des Feunoyr, mais c\'est la Rébellion de Robert qui mit fin à la dynastie régente. Ils régnaient à Port-Réal, à Peyredragon, et à Lestival. La devise des Targaryen est « Feu et Sang » et leur emblème représente un dragon tricéphale.', 'DRAGON.jpg'),
(7, 'Hautjardin', 'Tyrell', 'La Maison Tyrell était l\'une des grandes maisons de Westeros. Ils régnaient sur la vaste région du Bief depuis leur siège, Hautjardin, un château situé sur les rives du fleuve Mander. La devise des Tyrell est « Plus haut, plus fort » et leur emblème représente une rose.\r\n\r\nLes Tyrell soutenaient longtemps la Couronne, jusqu\'à ce que Cersei Lannister ait fait exploser le grand septuaire de Baelor, tuant lord Mace, la Reine Margaery et l\'héritier de la Maison Tyrell, Loras. Après la mort de son fils et de ses petits-enfants, Olenna Tyrell, dernière représentante encore en vie de sa maison, s\'est rendue à Dorne, où elle conclu une alliance avec Ellaria Sand pour appuyer Daenerys Targaryen, réunissant encore une fois, comme pour la Rébellion de Robert, les Tyrell et les Martell à la cause Targaryen.', 'hautjardin.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
