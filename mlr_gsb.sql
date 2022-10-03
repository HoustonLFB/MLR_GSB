-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 06 juin 2022 à 10:36
-- Version du serveur : 10.3.34-MariaDB-0+deb10u1
-- Version de PHP : 7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mlr_gsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `user` varchar(20) NOT NULL,
  `pass` text NOT NULL,
  `matricule` varchar(10) DEFAULT NULL,
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`user`, `pass`, `matricule`, `niveau`) VALUES
('a131', '$2y$10$objyG18mj137EFxPA3YAp.34cKjmoDzOL425WdpRl1Tfku9qFD5PC', 'a131', 1),
('a17', '$2y$10$OB.Zkrw9m9xEgwmYsCVMI.BhDL0yDlf/6xguZtFzWgRh350ptGxDG', 'a17', 1),
('a55', '$2y$10$3AvE8wZif.JM.KBdLj7hqu.T6mb80n3jpf6IIyIZQzh7IrVjCVKgW', 'a55', 1),
('a93', '$2y$10$pswmSeLGbX5NBs01UH2OXedlEqnhLjwzxBxNJXaeBLobSmUwxoxwa', 'a93', 1),
('admin', '$2y$10$GnWjQyag0RQzekLIJcfDFeCLPc4lk1fFurJ9FZmVEDv1GX3m4gWtu', 'MATtest', 1),
('b13', '$2y$10$zawxpG9tyB48m5vTlOac.OJMy/4Bz4oh.fFe/9z0E5iNPAOzJmaiO', 'b13', 1),
('b16', '$2y$10$Hsi9yDaGzfUBjnJqMQX19.BmcUWVZqyd/u1Op9WygVn1mQeePBWSq', 'b16', 1),
('b19', '$2y$10$jMMwl0j4yInHgRsNaG5Ixe6/RWYukkf9GtnO4ErMIcCiy/nQswniK', 'b19', 1),
('b25', '$2y$10$Aw0M3trjZYnq7vVX7aoPsefLmqv.aALkl.ypeXPGLFgkET4EUC4eK', 'b25', 1),
('b28', '$2y$10$rGmNjaD4wA6DVibSmisp.ul/0ACT8977s1xRJmFAeJ0u44SJTqQF2', 'b28', 1),
('b34', '$2y$10$14rOW8HOm8XPEe36lPA9H.6yaDyf.JoIGayymgZR9llruG6Tvwm7e', 'b34', 1),
('b4', '$2y$10$YYfDjlkhtbwAZRuPD7sF.eGbHGYc3VHtifn5g5h1nVOCvVn9xT.XS', 'b4', 1),
('b50', '$2y$10$YR5zFHvTCQLJU..P1VuCvu2UMI7ezJ2aYLMLHuO0gNl.xrTnwh.mG', 'b50', 1),
('b59', '$2y$10$1hyXnI/8zD.nU3bFm8LGbeYLYeWTfejMi4SVOK.l84BAq.WNSoYTi', 'b59', 1),
('c14', '$2y$10$WxFsa7xz7O/EHil/Vp7ayuyXBNbPkqCqJ/VHmfCpGlskyGg1qsfgO', 'c14', 1),
('c3', '$2y$10$OJqBa6u1Os4IeJQQVltNxeW3JclRMgnPGrk.FKkKhU1JFhARkNnbi', 'c3', 1),
('c54', '$2y$10$YUVtt9WVbs/AOzSoBNYz7.p2P2gA5EouA.wUSw7eHWerad5D5MQ4.', 'c54', 1),
('d13', '$2y$10$Uufewbyy6q41WPS9BFZ2p.N8wBNyNNE93jXqQccy/gPSiBg9ld2/m', 'd13', 1),
('d51', '$2y$10$.oXXssR3c4TU2LZlcV.fBOA.vTgI/4pWq05UwNA3cSueofV0yW5P.', 'd51', 1),
('e22', '$2y$10$mnAGjlRCpP1CRtKkfYaW5.v208U4lv.Ka09adW0XKsTzGLxfEqiaq', 'e22', 1),
('e24', '$2y$10$CuITzN6dDZuwcYUFo4.4puJHqZYj.xfyUpQ/r2WthnO1RRp/Mb0ni', 'e24', 1),
('e39', '$2y$10$6iIizZXmTy0RhUK.YxBwD.4E/MrenaPFYcFXaKb8aEtrwckpDpY9C', 'e39', 1),
('e49', '$2y$10$iEsrJTit1SXzbX21IUKkpufx5hH09HBthQkgp325DKwTEOHjtYfqW', 'e49', 1),
('e5', '$2y$10$w6ZxH2j3s1T9hFQo17/0jO9eM98H6bX4XmJ6GzjfhHingAenL/AD.', 'e5', 1),
('e52', '$2y$10$e/qigEBatsSmY9vOelmT0.cit5zZKaIgQZWmvWmLx23l3b3jT2ori', 'e52', 1),
('f21', '$2y$10$vXbpxDpl1RVSeUVMdO4GV.qoPUJymv65gfQwxz1XqiTFH/1/G.qba', 'f21', 1),
('f39', '$2y$10$rMm.FSHsxTgXBZIaaMPPPObS/Fc4FBiw.s3JN3wNlDURIWKkdBmL6', 'f39', 1),
('f4', '$2y$10$GT/864wMubB3cjL56.WgHeokDQyv5awFWJ6CsegRWwgCTqSNN0CvS', 'f4', 1),
('g19', '$2y$10$dZdZgqRzUSTKJvnIJX6i7OHRnl/d07Rmu9w5u.RxaW1na1/CQ1Tdq', 'g19', 1),
('g30', '$2y$10$RWcR0Gn0qh3SM3HQEcyhsONgDdWL7PVP/sF.zVSQ2QWF2xKYyNT7S', 'g30', 1),
('g53', '$2y$10$A0VDQpEUG3OuR/ZZvbMPJOKQW3L2lkserpVbDQ5xBmKUUVhxIFYxu', 'g53', 1),
('g7', '$2y$10$lS5UVydDpCWADTxg4359/eDkIm4SrDhXGQsnBVxgOul4cNp/FOF5i', 'g7', 1),
('h13', '$2y$10$xglk8o4X4mbKggd0vyNOIOxO6bFxeyZr9P2SmrDliKUK4ILq0aXXq', 'h13', 1),
('h30', '$2y$10$vnfGMEpadQU4mXPh64Z9HOTSD6MdpA5a3WmSzSYSo1rO6gUK3ID5G', 'h30', 1),
('h35', '$2y$10$xkNYtvgFMBY5CR0K.ZCor.xtZ3jarDSCfb/Q24gmiUWwDxmUlzSwK', 'h35', 1),
('h40', '$2y$10$crJkRgpX44tRwKonbFsJWuGRAsMkqbqlW4yu0elIEl3rrbfS4Clne', 'h40', 1),
('j45', '$2y$10$mQexelNdzv4yz.KFlidjfe3gnS6olhFRScDykGNGAPqs7F4l4nywa', 'j45', 1),
('j50', '$2y$10$k7x05IYGP8ys2EO2q6HIvuIV28arQp9d/jpAAtyyfgNdii7W0JCu2', 'j50', 1),
('j8', '$2y$10$0D1arz1fp2UjPY2hU.liKO9CYrTkCS3rwdS4ZYnmGfUCpHy/geGda', 'j8', 1),
('k4', '$2y$10$WXE1dfO7DlqexHV8F69V5.fIF6.soSgdVN4t4fbPc.b/9gfzJUF9u', 'k4', 1),
('k53', '$2y$10$JjsWgmpVQh2nI8t8CwQ2AO/I49vLv1gy37n265A0AUMfP2U3KlBcy', 'k53', 1),
('l14', '$2y$10$8CNaHYtF92kSijnkgOm.Wels8gwlnEkWGLqYhbSqvDKWtAEr4T022', 'l14', 1),
('l23', '$2y$10$hCCUnwsl.VFnIWvolI1tFOu/qRbSU715aohVfhoOsmZC5y9XSc5nG', 'l23', 1),
('l46', '$2y$10$VeuKFOsplFGjw4UW4hADq.IoMz0fE0g0zSrxWBpJEfuTVRpAYCo7S', 'l46', 1),
('l56', '$2y$10$8PYibfgr3CXsM3Pwhxg97OUecgpApNtLp2DwiPwA8Z/C4nPkhgaNy', 'l56', 1),
('m35', '$2y$10$7asxIL77szexbma4bzPmSuY3w.sK0RdQ6ZRgdweIZychwAUfhylBy', 'm35', 1),
('m45', '$2y$10$YZQBeLjNqKT2v3hF.2ZKoe69yV2MIRVAx3N.6sbEqX7xKQlfDczku', 'm45', 1),
('n42', '$2y$10$x1HGCZZMmxb3ZqPK791GQOr71RP0cb3fLZ8fNAfv93fMxBlc2jySW', 'n42', 1),
('n58', '$2y$10$mDugq7BMoizQe8lDHhNLzeVpxSdVC.QsoINyhiHMHsflBsUDDDyoS', 'n58', 1),
('n59', '$2y$10$h.i8oMkQor26velNHP1pkObemAyLzEjJkforTwWOr6Lqxs8fxNkxu', 'n59', 1),
('o26', '$2y$10$Qs01Wy4MSkPO8eDJOMQ2X.hC7kV4yd0jZXNrlw23KfJIhneZLtIMW', 'o26', 1),
('p32', '$2y$10$T8/vcRKi/2c2OtPOMOxAVeqPXd5sHqGkmBV9ija0mbihWZRbGKIma', 'p32', 1),
('p40', '$2y$10$oIe0q/okyBY7niMDeJ/3f.Ke6hUdTXHZo2oFG4gL6YOj2xx2zcKn.', 'p40', 1),
('p41', '$2y$10$IlVfJWPlqfvHreftFeGtN.Tj8Bej8K2QcJPyGMhdF5g2f891Z/at6', 'p41', 1),
('p42', '$2y$10$Qg7HGLTqqee2cVZP3ZCe2eszuj6XGtBCucXAhCM4e7wpdMrxnMoMG', 'p42', 1),
('p49', '$2y$10$rIn.P1HNk.HOKjfAXBeJBenP7gOePz9DxePYzeOD6Po8jb3Rp4unS', 'p49', 1),
('p6', '$2y$10$U3a16.pqfr9a5QGiJsgK3uBYnrCab4MTkbt0hUHM.dbiPR/HP6rne', 'p6', 1),
('p7', '$2y$10$sKPExpKCV8vUwCx0qGB1muIIsVcX1wnMWjEQ1T2iv3o/vbd8xe/y2', 'p7', 1),
('p8', '$2y$10$a3TZOYy8QPzZSnK3YYbDqega6xgsJYDnBnS2.lwe2mlb7wDVJp4Vm', 'p8', 1),
('q17', '$2y$10$5N/6Pm6Nfm03tXlYaB4Guel2YpZJlb0XkSRMtyeAzqKaBiY7D3UoO', 'q17', 1),
('r24', '$2y$10$V3TKAZQ5Aa4t3KDLY5HhWOv/ff3h1/RJv3EJZB8RWEn3d9Ew1aOFO', 'r24', 1),
('r58', '$2y$10$xT6rPpBo4.9fNaFabggbGOsVm0tjvpwdErts6Q4xmgswb6IJT7t9G', 'r58', 1),
('s10', '$2y$10$7NkGb7EvY/AO.wZgOVW//.2qBpo29gf0eI06/nl3ESK7nlXx0mDHq', 's10', 1),
('s21', '$2y$10$7DXiv7MxzUpB9NRC0wRrwOq5B6783SudXjN/9/CW8PaJRj6BnrL3K', 's21', 1),
('t43', '$2y$10$tLEP7QfOGF2tiV2AlIctGO37dhKJvH0CYEYr.U22rt3CjMCxxvCxW', 't43', 1),
('t47', '$2y$10$0Kk7z0xgfmfG47xg7vSpQuLrvIRA6ooTp800iQG0Mad2NWGhL4w8C', 't47', 1),
('t55', '$2y$10$yqAk5UOUZlebyQ/JKenix.EwUfTegRX8yD1tdB24qMfjRFwPSghYa', 't55', 1),
('t60', '$2y$10$5/5ieebhqWIDsulZvnAvFulga0MPFjnhHlqTzQM9MMbRcKUIHb7gK', 't60', 1);

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE `famille` (
  `famCode` varchar(3) NOT NULL,
  `famLibelle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`famCode`, `famLibelle`) VALUES
('AA', 'Antalgiques en association'),
('AAA', 'Antalgiques antipyrétiques en association'),
('AAC', 'Antidépresseur d\'action centrale'),
('AAH', 'Antivertigineux antihistaminique H1'),
('ABA', 'Antibiotique antituberculeux'),
('ABC', 'Antibiotique antiacnéique local'),
('ABP', 'Antibiotique de la famille des béta-lactamines (pénicilline A)'),
('AFC', 'Antibiotique de la famille des cyclines'),
('AFM', 'Antibiotique de la famille des macrolides'),
('AH', 'Antihistaminique H1 local'),
('AIM', 'Antidépresseur imipraminique (tricyclique)'),
('AIN', 'Antidépresseur inhibiteur sélectif de la recapture de la sérotonine'),
('ALO', 'Antibiotique local (ORL)'),
('ANS', 'Antidépresseur IMAO non sélectif'),
('AO', 'Antibiotique ophtalmique'),
('AP', 'Antipsychotique normothymique'),
('AUM', 'Antibiotique urinaire minute'),
('CRT', 'Corticoïde, antibiotique et antifongique à  usage local'),
('HYP', 'Hypnotique antihistaminique'),
('PSA', 'Psychostimulant, antiasthénique');

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `IP` text NOT NULL,
  `url` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `historiqueConnex`
--

CREATE TABLE `historiqueConnex` (
  `IP` text NOT NULL,
  `compte` text NOT NULL,
  `mdpused` text DEFAULT NULL,
  `acces` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `medicaments`
--

CREATE TABLE `medicaments` (
  `medDepotlegal` varchar(10) NOT NULL,
  `medNomcommercial` text NOT NULL,
  `famCode` varchar(3) DEFAULT NULL,
  `medComposition` text NOT NULL,
  `medEffets` text NOT NULL,
  `medContreindic` text NOT NULL,
  `medPrixechantillon` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medicaments`
--

INSERT INTO `medicaments` (`medDepotlegal`, `medNomcommercial`, `famCode`, `medComposition`, `medEffets`, `medContreindic`, `medPrixechantillon`) VALUES
('3MYC7', 'TRIMYCINE', 'CRT', 'Triamcinolone (acétonide) + Néomycine + Nystatine', 'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un antifongique, utilisé en application locale dans certaines atteintes cutanées surinfectées.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'infections de la peau ou de parasitisme non traités, d\'acné. Ne pas appliquer sur une plaie, ni sous un pansement occlusif.', NULL),
('ADIMOL9', 'ADIMOL', 'ABP', 'Amoxicilline + Acide clavulanique', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines ou aux céphalosporines.', NULL),
('AMOPIL7', 'AMOPIL', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.', NULL),
('AMOX45', 'AMOXAR', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.', NULL),
('AMOXIG12', 'AMOXI Gé', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.', NULL),
('APATOUX22', 'APATOUX Vitamine C', 'ALO', 'Tyrothricine + Tétracaïne + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, en cas de phénylcétonurie et chez l\'enfant de moins de 6 ans.', NULL),
('BACTIG10', 'BACTIGEL', 'ABC', 'Erythromycine', 'Ce médicament est utilisé en application locale pour traiter l\'acné et les infections cutanées bactériennes associées.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques de la famille des macrolides ou des lincosanides.', NULL),
('BACTIV13', 'BACTIVIL', 'AFM', 'Erythromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', NULL),
('BITALV', 'BIVALIC', 'AAA', 'Dextropropoxyphène + Paracétamol', 'Ce médicament est utilisé pour traiter les douleurs d\'intensité modérée ou intense.', 'Ce médicament est contre-indiqué en cas d\'allergie aux médicaments de cette famille, d\'insuffisance hépatique ou d\'insuffisance rénale.', NULL),
('CARTION6', 'CARTION', 'AAA', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies), d\'ulcère gastroduodénal, maladies graves du foie.', NULL),
('CLAZER6', 'CLAZER', 'AFM', 'Clarithromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l\'ulcère gastro-duodénal, en association avec d\'autres médicaments.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', NULL),
('DEPRIL9', 'DEPRAMIL', 'AIM', 'Clomipramine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l\'enfant.', 'Ce médicament est contre-indiqué en cas de glaucome ou d\'adénome de la prostate, d\'infarctus récent, ou si vous avez reà§u un traitement par IMAO durant les 2 semaines précédentes ou en cas d\'allergie aux antidépresseurs imipraminiques.', NULL),
('DIMIRTAM6', 'DIMIRTAM', 'AAC', 'Mirtazapine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.', 'La prise de ce produit est contre-indiquée en cas de d\'allergie à  l\'un des constituants.', NULL),
('DOLRIL7', 'DOLORIL', 'AAA', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas d\'allergie au paracétamol ou aux salicylates.', NULL),
('DORNOM8', 'NORMADOR', 'HYP', 'Doxylamine', 'Ce médicament est utilisé pour traiter l\'insomnie chez l\'adulte.', 'Ce médicament est contre-indiqué en cas de glaucome, de certains troubles urinaires (rétention urinaire) et chez l\'enfant de moins de 15 ans.', NULL),
('EQUILARX6', 'EQUILAR', 'AAH', 'Méclozine', 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.', 'Ce médicament ne doit pas être utilisé en cas d\'allergie au produit, en cas de glaucome ou de rétention urinaire.', NULL),
('EVILR7', 'EVEILLOR', 'PSA', 'Adrafinil', 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques chez le sujet agé.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.', NULL),
('INSXT5', 'INSECTIL', 'AH', 'Diphénydramine', 'Ce médicament est utilisé en application locale sur les piqûres d\'insecte et l\'urticaire.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antihistaminiques.', NULL),
('JOVAI8', 'JOVENIL', 'AFM', 'Josamycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', NULL),
('LIDOXY23', 'LIDOXYTRACINE', 'AFC', 'Oxytétracycline +Lidocaïne', 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants. Il ne doit pas être associé aux rétinoïdes.', NULL),
('LITHOR12', 'LITHORINE', 'AP', 'Lithium', 'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les états maniaques.', 'Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce traitement, signalez à  votre médecin traitant si vous souffrez d\'insuffisance rénale, ou si vous avez un régime sans sel.', NULL),
('PARMOL16', 'PARMOCODEINE', 'AA', 'Codéine + Paracétamol', 'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pas assez efficaces.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, chez l\'enfant de moins de 15 Kg, en cas d\'insuffisance hépatique ou respiratoire, d\'asthme, de phénylcétonurie et chez la femme qui allaite.', NULL),
('PHYSOI8', 'PHYSICOR', 'PSA', 'Sulbutiamine', 'Ce médicament est utilisé pour traiter les baisses d\'activité physique ou psychique, souvent dans un contexte de dépression.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.', NULL),
('PIRIZ8', 'PIRIZAN', 'ABA', 'Pyrazinamide', 'Ce médicament est utilisé, en association à  d\'autres antibiotiques, pour traiter la tuberculose.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'insuffisance rénale ou hépatique, d\'hyperuricémie ou de porphyrie.', NULL),
('POMDI20', 'POMADINE', 'AO', 'Bacitracine', 'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l\'oeil.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques appliqués localement.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `praticiens`
--

CREATE TABLE `praticiens` (
  `praID` int(11) NOT NULL,
  `praNom` text NOT NULL,
  `praPrenom` text NOT NULL,
  `praAdresse` text NOT NULL,
  `praCP` int(11) NOT NULL,
  `praVille` text NOT NULL,
  `praType` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `praticiens`
--

INSERT INTO `praticiens` (`praID`, `praNom`, `praPrenom`, `praAdresse`, `praCP`, `praVille`, `praType`) VALUES
(2, 'Notini', 'Alain', '114 r Authie', 85000, 'LA ROCHE SUR YON', 'MH'),
(3, 'Gosselin', 'Albert', '13 r Devon', 41000, 'BLOIS', 'MV'),
(4, 'Delahaye', 'André', '36 av 6 Juin', 25000, 'BESANCON', 'PS'),
(5, 'Leroux', 'André', '47 av Robert Schuman', 60000, 'BEAUVAIS', 'PH'),
(6, 'Desmoulins', 'Anne', '31 r St Jean', 30000, 'NIMES', 'PO'),
(7, 'Mouel', 'Anne', '27 r Auvergne', 80000, 'AMIENS', 'MH'),
(8, 'Desgranges-Lentz', 'Antoine', '1 r Albert de Mun', 29000, 'MORLAIX', 'MV'),
(9, 'Marcouiller', 'Arnaud', '31 r St Jean', 68000, 'MULHOUSE', 'PS'),
(10, 'Dupuy', 'Benoit', '9 r Demolombe', 34000, 'MONTPELLIER', 'PH'),
(11, 'Lerat', 'Bernard', '31 r St Jean', 59000, 'LILLE', 'PO'),
(12, 'Marçais-Lefebvre', 'Bertrand', '86Bis r Basse', 67000, 'STRASBOURG', 'MH'),
(13, 'Boscher', 'Bruno', '94 r Falaise', 10000, 'TROYES', 'MV'),
(14, 'Morel', 'Catherine', '21 r Chateaubriand', 75000, 'PARIS', 'PS'),
(15, 'Guivarch', 'Chantal', '4 av Gén Laperrine', 45000, 'ORLEANS', 'PH'),
(16, 'Bessin-Grosdoit', 'Christophe', '92 r Falaise', 6000, 'NICE', 'PO'),
(17, 'Rossa', 'Claire', '14 av Thiès', 6000, 'NICE', 'MH'),
(18, 'Cauchy', 'Denis', '5 av Ste Thérèse', 11000, 'NARBONNE', 'MV'),
(19, 'Gaffé', 'Dominique', '9 av 1ère Armée Française', 35000, 'RENNES', 'PS'),
(20, 'Guenon', 'Dominique', '98 bd Mar Lyautey', 44000, 'NANTES', 'PH'),
(21, 'Prévot', 'Dominique', '29 r Lucien Nelle', 87000, 'LIMOGES', 'PO'),
(22, 'Houchard', 'Eliane', '9 r Demolombe', 49100, 'ANGERS', 'MH'),
(23, 'Desmons', 'Elisabeth', '51 r Bernières', 29000, 'QUIMPER', 'MV'),
(24, 'Flament', 'Elisabeth', '11 r Pasteur', 35000, 'RENNES', 'PS'),
(25, 'Goussard', 'Emmanuel', '9 r Demolombe', 41000, 'BLOIS', 'PH'),
(26, 'Desprez', 'Eric', '9 r Vaucelles', 33000, 'BORDEAUX', 'PO'),
(27, 'Merignac', 'Isidore', '20 r Gambetta', 31000, 'Toulouse', 'ETU');

-- --------------------------------------------------------

--
-- Structure de la table `rapportVisite`
--

CREATE TABLE `rapportVisite` (
  `rapID` int(11) NOT NULL,
  `visMatricule` varchar(10) NOT NULL,
  `praID` int(11) NOT NULL,
  `remplaNom` text DEFAULT NULL,
  `rapDateRapport` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `rapDateVisite` date NOT NULL,
  `rapBilan` text NOT NULL,
  `rapMotif` text NOT NULL,
  `rapProduit1` varchar(10) NOT NULL,
  `rapProduit2` varchar(10) NOT NULL,
  `rapCoefConf` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rapportVisite`
--

INSERT INTO `rapportVisite` (`rapID`, `visMatricule`, `praID`, `remplaNom`, `rapDateRapport`, `rapDateVisite`, `rapBilan`, `rapMotif`, `rapProduit1`, `rapProduit2`, `rapCoefConf`) VALUES
(27, 'MATtest', 2, '', '2022-05-18 13:32:31', '2022-04-05', '', '1', '3MYC7', 'AMOX45', '1'),
(28, 'MATtest', 2, '', '2022-05-18 13:32:31', '2022-03-28', '', '1', '3MYC7', 'APATOUX22', '5'),
(30, 'MATtest', 2, '', '2022-05-18 13:32:31', '2022-04-05', 'Prescriptions basses et visites habituelles.', '3', 'AMOXIG12', 'AMOX45', '2'),
(31, 'MATtest', 5, '', '2022-05-22 11:30:25', '2004-12-10', 'prescription a jour', '3', 'BACTIV13', 'DOLRIL7', '5'),
(38, 'MATtest', 10, NULL, '2022-04-25 12:43:49', '2022-04-07', '', '1', 'DOLRIL7', '3MYC7', '3'),
(55, 'a131', 10, '', '2022-05-17 12:29:49', '2022-05-03', 'Parfait', '2', 'AMOXIG12', '3MYC7', '5'),
(58, 'MATtest', 7, '', '2022-05-22 15:29:38', '2022-05-16', 'bien', '1', 'DIMIRTAM6', '3MYC7', '1'),
(62, 'a131', 12, NULL, '2022-05-21 13:21:18', '2022-05-21', 'Baisse de prescriptions + présentation de nouveaux produits', '3', 'JOVAI8', '3MYC7', '2'),
(63, 'a131', 13, NULL, '2022-05-21 13:22:05', '2022-05-20', 'Remplaçant la dernière fois, cette fois-ci ok\r\nPrésentation normale', '4', 'PIRIZ8', 'LIDOXY23', '5'),
(64, 'a131', 3, NULL, '2022-05-21 13:22:33', '2022-05-05', 'Nouveauté à présenter dans ce secteur', '2', 'APATOUX22', 'EVILR7', '4'),
(65, 'a131', 7, 'Martin Mouel', '2022-05-21 13:23:18', '2022-05-20', 'Rencontré un remplaçant, nouvelle visite de prévue', '1', 'LIDOXY23', '3MYC7', '1'),
(66, 'a131', 2, NULL, '2022-05-23 11:49:47', '2022-05-23', '', '2', 'EVILR7', '3MYC7', '3'),
(67, 'MATtest', 17, NULL, '2022-05-30 12:07:11', '2022-05-30', 'J\'adore le cul !!', '2', 'ADIMOL9', 'AMOPIL7', '5');

-- --------------------------------------------------------

--
-- Structure de la table `typepraticien`
--

CREATE TABLE `typepraticien` (
  `typeCode` varchar(3) NOT NULL,
  `typeLibelle` text NOT NULL,
  `typeLieu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `typepraticien`
--

INSERT INTO `typepraticien` (`typeCode`, `typeLibelle`, `typeLieu`) VALUES
('ETU', 'etudiant', 'Topulouse'),
('MH', 'Médecin Hospitalier', 'Hopital ou clinique'),
('MV', 'Médecine de Ville', 'Cabinet'),
('PH', 'Pharmacien Hospitalier', 'Hopital ou clinique'),
('PO', 'Pharmacien Officine', 'Pharmacie'),
('PS', 'Personnel de santé', 'Centre paramédical');

-- --------------------------------------------------------

--
-- Structure de la table `visiteurs`
--

CREATE TABLE `visiteurs` (
  `visMatricule` varchar(10) NOT NULL,
  `visNom` text NOT NULL,
  `visPrenom` text NOT NULL,
  `visAdresse` text NOT NULL,
  `visCP` int(5) NOT NULL,
  `visVille` text NOT NULL,
  `visDateEmbauche` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `visiteurs`
--

INSERT INTO `visiteurs` (`visMatricule`, `visNom`, `visPrenom`, `visAdresse`, `visCP`, `visVille`, `visDateEmbauche`) VALUES
('a131', 'Villechalane', 'Louis', '8 cours Lafontaine', 29000, 'BREST', '1992-12-11'),
('a17', 'Andre', 'David', '1 r Aimon de Chissée', 38100, 'GRENOBLE', '1991-08-26'),
('a55', 'Bedos', 'Christian', '1 r Bénédictins', 65000, 'TARBES', '1987-07-17'),
('a93', 'Tusseau', 'Louis', '22 r Renou', 86000, 'POITIERS', '1999-01-02'),
('b13', 'Bentot', 'Pascal', '11 av 6 Juin', 67000, 'STRASBOURG', '1996-03-11'),
('b16', 'Bioret', 'Luc', '1 r Linne', 35000, 'RENNES', '1997-03-21'),
('b19', 'Bunisset', 'Francis', '10 r Nicolas Chorier', 85000, 'LA ROCHE SUR YON', '1999-01-31'),
('b25', 'Bunisset', 'Denise', '1 r Lionne', 49100, 'ANGERS', '1994-07-03'),
('b28', 'Cacheux', 'Bernard', '114 r Authie', 34000, 'MONTPELLIER', '2000-08-02'),
('b34', 'Cadic', 'Eric', '123 r Caponière', 41000, 'BLOIS', '1993-12-06'),
('b4', 'Charoze', 'Catherine', '100 pl Géants', 33000, 'BORDEAUX', '1997-09-25'),
('b50', 'Clepkens', 'Christophe', '12 r Fédérico Garcia Lorca', 13000, 'MARSEILLE', '1998-01-18'),
('b59', 'Cottin', 'Vincenne', '36 sq Capucins', 5000, 'GAP', '1995-10-21'),
('c14', 'Daburon', 'François', '13 r Champs Elysées', 6000, 'NICE', '1989-02-01'),
('c3', 'De', 'Philippe', '13 r Charles Peguy', 10000, 'TROYES', '1992-05-05'),
('c54', 'Debelle', 'Michel', '181 r Caponière', 88000, 'EPINAL', '1991-04-09'),
('d13', 'Debelle', 'Jeanne', '134 r Stalingrad', 44000, 'NANTES', '1991-12-05'),
('d51', 'Debroise', 'Michel', '2 av 6 Juin', 70000, 'VESOUL', '1997-11-18'),
('e22', 'Desmarquest', 'Nathalie', '14 r Fédérico Garcia Lorca', 54000, 'NANCY', '1989-03-24'),
('e24', 'Desnost', 'Pierre', '16 r Barral de Montferrat', 55000, 'VERDUN', '1993-05-17'),
('e39', 'Dudouit', 'Frédéric', '18 quai Xavier Jouvin', 75000, 'PARIS', '1988-04-26'),
('e49', 'Duncombe', 'Claude', '19 av Alsace Lorraine', 9000, 'FOIX', '1996-02-19'),
('e5', 'Enault-Pascreau', 'Céline', '25B r Stalingrad', 40000, 'MONT DE MARSAN', '1990-11-27'),
('e52', 'Eynde', 'Valérie', '3 r Henri Moissan', 76000, 'ROUEN', '1991-10-31'),
('f21', 'Finck', 'Jacques', 'rte Montreuil Bellay', 74000, 'ANNECY', '1993-06-08'),
('f39', 'Frémont', 'Fernande', '4 r Jean Giono', 69000, 'LYON', '1997-02-15'),
('f4', 'Gest', 'Alain', '30 r Authie', 46000, 'FIGEAC', '1994-05-03'),
('g19', 'Gheysen', 'Galassus', '32 bd Mar Foch', 75000, 'PARIS', '1996-01-18'),
('g30', 'Girard', 'Yvon', '31 av 6 Juin', 80000, 'AMIENS', '1999-03-27'),
('g53', 'Gombert', 'Luc', '32 r Emile Gueymard', 56000, 'VANNES', '1985-10-02'),
('g7', 'Guindon', 'Caroline', '40 r Mar Montgomery', 87000, 'LIMOGES', '1996-01-13'),
('h13', 'Guindon', 'François', '44 r Picotière', 19000, 'TULLE', '1993-05-08'),
('h30', 'Igigabel', 'Guy', '33 gal Arlequin', 94000, 'CRETEIL', '1998-04-26'),
('h35', 'Jourdren', 'Pierre', '34 av Jean Perrot', 15000, 'AURRILLAC', '1993-08-26'),
('h40', 'Juttard', 'Pierre-Raoul', '34 cours Jean Jaurès', 8000, 'SEDAN', '1992-11-01'),
('j45', 'Labouré-Morel', 'Saout', '38 cours Berriat', 52000, 'CHAUMONT', '1998-02-25'),
('j50', 'Landré', 'Philippe', '4 av Gén Laperrine', 59000, 'LILLE', '1992-12-16'),
('j8', 'Langeard', 'Hugues', '39 av Jean Perrot', 93000, 'BAGNOLET', '1998-06-18'),
('k4', 'Lanne', 'Bernard', '4 r Bayeux', 30000, 'NIMES', '1996-11-21'),
('k53', 'Le', 'Noël', '4 av Beauvert', 68000, 'MULHOUSE', '1983-03-23'),
('l14', 'Le', 'Jean', '39 r Raspail', 53000, 'LAVAL', '1995-02-02'),
('l23', 'Leclercq', 'Servane', '11 r Quinconce', 18000, 'BOURGES', '1995-06-05'),
('l46', 'Lecornu', 'Jean-Bernard', '4 bd Mar Foch', 72000, 'LA FERTE BERNARD', '1997-01-24'),
('l56', 'Lecornu', 'Ludovic', '4 r Abel Servien', 25000, 'BESANCON', '1996-02-27'),
('m35', 'Lejard', 'Agnès', '4 r Anthoard', 82000, 'MONTAUBAN', '1987-10-06'),
('m45', 'Lesaulnier', 'Pascal', '47 r Thiers', 57000, 'METZ', '1990-10-13'),
('MATtest', 'LEFEBVRE', 'Wilfried', '118 route de narbonne', 31400, 'Toulouse', '2022-04-08'),
('n42', 'Letessier', 'Stéphane', '5 chem Capuche', 27000, 'EVREUX', '1996-03-06'),
('n58', 'Loirat', 'Didier', 'Les Pêchers cité Bourg la Croix', 45000, 'ORLEANS', '1992-08-30'),
('n59', 'Maffezzoli', 'Thibaud', '5 r Chateaubriand', 2000, 'LAON', '1994-12-19'),
('o26', 'Mancini', 'Anne', '5 r D\'Agier', 48000, 'MENDE', '1995-01-05'),
('p32', 'Marcouiller', 'Gérard', '7 pl St Gilles', 91000, 'ISSY LES MOULINEAUX', '1992-12-24'),
('p40', 'Michel', 'Jean-Claude', '5 r Gabriel Péri', 61000, 'FLERS', '1992-12-14'),
('p41', 'Montecot', 'Françoise', '6 r Paul Valéry', 17000, 'SAINTES', '1998-07-27'),
('p42', 'Notini', 'Veronique', '5 r Lieut Chabal', 60000, 'BEAUVAIS', '1994-12-12'),
('p49', 'Onfroy', 'Den', '5 r Sidonie Jacolin', 37000, 'TOURS', '1977-10-03'),
('p6', 'Pascreau', 'Charles', '57 bd Mar Foch', 64000, 'PAU', '1997-03-30'),
('p7', 'Pernot', 'Claude-Noël', '6 r Alexandre 1 de Yougoslavie', 11000, 'NARBONNE', '1990-03-01'),
('p8', 'Perrier', 'Maître', '6 r Aubert Dubayet', 71000, 'CHALON SUR SAONE', '1991-06-23'),
('q17', 'Petit', 'Jean-Louis', '7 r Ernest Renan', 50000, 'SAINT LO', '1997-09-06'),
('r24', 'Piquery', 'Patrick', '9 r Vaucelles', 14000, 'CAEN', '1984-07-29'),
('r58', 'Quiquandon', 'Joël', '7 r Ernest Renan', 29000, 'QUIMPER', '1990-06-30'),
('s10', 'Retailleau', 'Josselin', '88Bis r Saumuroise', 39000, 'DOLE', '1995-11-14'),
('s21', 'Retailleau', 'Pascal', '32 bd Ayrault', 23000, 'MONTLUCON', '1992-09-25'),
('t43', 'Souron', 'Maryse', '7B r Gay Lussac', 21000, 'DIJON', '1995-03-09'),
('t47', 'Tiphagne', 'Patrick', '7B r Gay Lussac', 62000, 'ARRAS', '1997-08-29'),
('t55', 'Tréhet', 'Alain', '7D chem Barral', 12000, 'RODEZ', '1994-11-29'),
('t60', 'Tusseau', 'Josselin', '63 r Bon Repos', 28000, 'CHARTRES', '1991-03-29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`user`),
  ADD KEY `Matricule` (`matricule`);

--
-- Index pour la table `famille`
--
ALTER TABLE `famille`
  ADD PRIMARY KEY (`famCode`);

--
-- Index pour la table `medicaments`
--
ALTER TABLE `medicaments`
  ADD PRIMARY KEY (`medDepotlegal`),
  ADD KEY `FamilleMedoc` (`famCode`);

--
-- Index pour la table `praticiens`
--
ALTER TABLE `praticiens`
  ADD PRIMARY KEY (`praID`),
  ADD KEY `TypePraticien` (`praType`);

--
-- Index pour la table `rapportVisite`
--
ALTER TABLE `rapportVisite`
  ADD PRIMARY KEY (`rapID`),
  ADD KEY `PraticienID` (`praID`),
  ADD KEY `VisiteurMatricule` (`visMatricule`),
  ADD KEY `Medoc1` (`rapProduit1`),
  ADD KEY `Medoc2` (`rapProduit2`);

--
-- Index pour la table `typepraticien`
--
ALTER TABLE `typepraticien`
  ADD PRIMARY KEY (`typeCode`);

--
-- Index pour la table `visiteurs`
--
ALTER TABLE `visiteurs`
  ADD PRIMARY KEY (`visMatricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `praticiens`
--
ALTER TABLE `praticiens`
  MODIFY `praID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `rapportVisite`
--
ALTER TABLE `rapportVisite`
  MODIFY `rapID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `Matricule` FOREIGN KEY (`matricule`) REFERENCES `visiteurs` (`visMatricule`);

--
-- Contraintes pour la table `medicaments`
--
ALTER TABLE `medicaments`
  ADD CONSTRAINT `FamilleMedoc` FOREIGN KEY (`famCode`) REFERENCES `famille` (`famCode`);

--
-- Contraintes pour la table `praticiens`
--
ALTER TABLE `praticiens`
  ADD CONSTRAINT `TypePraticien` FOREIGN KEY (`praType`) REFERENCES `typepraticien` (`typeCode`);

--
-- Contraintes pour la table `rapportVisite`
--
ALTER TABLE `rapportVisite`
  ADD CONSTRAINT `Medoc1` FOREIGN KEY (`rapProduit1`) REFERENCES `medicaments` (`medDepotlegal`),
  ADD CONSTRAINT `Medoc2` FOREIGN KEY (`rapProduit2`) REFERENCES `medicaments` (`medDepotlegal`),
  ADD CONSTRAINT `PraticienID` FOREIGN KEY (`praID`) REFERENCES `praticiens` (`praID`),
  ADD CONSTRAINT `VisiteurMatricule` FOREIGN KEY (`visMatricule`) REFERENCES `visiteurs` (`visMatricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
