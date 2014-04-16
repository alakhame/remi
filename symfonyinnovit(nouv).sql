-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 16 Avril 2014 à 18:45
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `symfonyinnovit`
--
CREATE DATABASE IF NOT EXISTS `symfonyinnovit` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `symfonyinnovit`;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_matiere` int(11) NOT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`id`, `id_matiere`, `titre`) VALUES
(1, 2, 'الأعداد الصحيحة الطبيعية'),
(2, 2, 'الأعداد العشرية'),
(3, 2, 'جمع الأعداد الطبيعية و العشرية'),
(4, 2, 'النسبة المئوية'),
(5, 2, 'المساحات'),
(6, 2, 'وحدات قياس الأطوال'),
(7, 4, 'Les types de phrases(1)'),
(8, 4, 'Le présent des verbes être, avoir et des verbes du premier groupe'),
(9, 4, 'Le passé récent'),
(10, 4, 'Le groupe nominal sujet (GNS)'),
(11, 4, 'Le futur proche'),
(12, 4, 'le pluriel des noms en -ail et en -al'),
(13, 3, 'الكهرباء'),
(14, 3, 'التربة'),
(15, 3, 'الطاقة'),
(16, 3, 'الضغط'),
(17, 3, 'الفلك'),
(18, 1, 'الفعل اللازم و الفعل المتعدي'),
(19, 1, 'الفعل المعتل و المثال'),
(20, 1, 'النواسخ الفعلية و الحرفية'),
(21, 1, 'المفعول المطلق و المفعول لأجله'),
(22, 1, 'الهمزة المتوسطة');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE IF NOT EXISTS `enseignant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_eleve` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `id_eleve`, `id_prof`, `etat`) VALUES
(1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etat_cours`
--

CREATE TABLE IF NOT EXISTS `etat_cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cours` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_insc` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `evolution`
--

CREATE TABLE IF NOT EXISTS `evolution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_mat` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `matiere`
--

INSERT INTO `matiere` (`id`, `nom`) VALUES
(1, 'اللغة العربية '),
(2, 'الرياضيات'),
(3, 'النشاط العلمي'),
(4, 'اللغة الفرنسية');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dest` int(11) NOT NULL,
  `id_exp` int(11) NOT NULL,
  `date_envoi` date NOT NULL,
  `objet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `id_dest`, `id_exp`, `date_envoi`, `objet`, `contenu`) VALUES
(1, 1, 1, '2014-03-04', 'test', 'hey ! ca marche ?'),
(2, 1, 2, '2014-03-18', 'coucou', 'c''est moi encore !'),
(3, 1, 2, '2014-03-20', 'hou hou', 'holaaaaa'),
(4, 2, 1, '2014-03-20', 'hohhohoh hou', 'holaaaa zdzdzda'),
(5, 1, 1, '2014-03-27', 'dzdzdz', 'zdzdzdz\r\n'),
(6, 1, 1, '2014-03-28', 'ssas', 'hjjjjjjjjjjjj bhlggggggggggg'),
(7, 1, 1, '2014-03-28', 'faazfafa', 'bonjour'),
(8, 1, 1, '2014-03-29', 'ssas', 'test   apre s integration'),
(9, 1, 1, '2014-03-29', 'zdzz', 'zddzdzdzd'),
(10, 1, 1, '2014-04-12', 'qdfq', 'qefqff'),
(11, 1, 1, '2014-04-12', 'khkjhk', 'jjhhh'),
(12, 1, 1, '2014-04-12', 'cvcvcv', 'cvcvcv'),
(13, 1, 1, '2014-04-13', 'kjkj', 'jygjhgjhg'),
(14, 1, 1, '2014-04-13', 'kjkj', 'jygjhgjhg'),
(15, 1, 1, '2014-04-13', 'kjkj', 'jygjhgjhg'),
(16, 1, 1, '2014-04-13', 'kjkj', 'jygjhgjhg'),
(17, 1, 1, '2014-04-13', 'kjhk', 'kjhkjh'),
(18, 1, 1, '2014-04-13', 'kjhk', 'kjhkjh'),
(19, 1, 1, '2014-04-13', 'kjhk', 'kjhkjh'),
(20, 1, 1, '2014-04-13', 'kjhk', 'kjhkjh'),
(21, 1, 1, '2014-04-13', '', ''),
(22, 1, 1, '2014-04-13', '', ''),
(23, 1, 1, '2014-04-13', '', ''),
(24, 1, 1, '2014-04-13', '', ''),
(25, 1, 1, '2014-04-13', '', ''),
(26, 1, 1, '2014-04-13', '', ''),
(27, 1, 1, '2014-04-13', '', ''),
(28, 1, 1, '2014-04-13', '', ''),
(29, 1, 1, '2014-04-13', 'kjlkj', 'khkhgjgkjghjgjggkgkjgjkgkjgjkgkjgkj'),
(30, 1, 1, '2014-04-13', 'kjlkj', 'khkhgjgkjghjgjggkgkjgjkgkjgjkgkjgkj'),
(31, 1, 1, '2014-04-13', '', ''),
(32, 1, 1, '2014-04-15', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE IF NOT EXISTS `niveau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ecole` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `niveau_user`
--

CREATE TABLE IF NOT EXISTS `niveau_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_niveau` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE IF NOT EXISTS `professeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_insc` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cours` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `explications` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_prof` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=91 ;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id`, `id_cours`, `question`, `rep1`, `rep2`, `rep3`, `rep4`, `rep`, `explications`, `id_prof`) VALUES
(24, 1, 'حدد رتبة الرقم 5 في العدد التالي 2.700.050.200', 'عشرات الآلاف', 'وحدات الملايين', 'عشرات الملايين', 'مئة الآلاف', 'عشرات الآلاف', '', 0),
(25, 1, 'ما هي الكتابة الرقمية الصحيحة للعدد التالي : ثلاثة ملايين و ستمئة وخمسة و سبعون ألفا و أربعون', '3.675.040', '30.675.040', '3.765.400', '3.456.300', '3.675.040', '', 0),
(26, 1, 'ماهي الكتابة التأطيرية الصحيحة للعدد 1654', '1000 < 1645< 1800', '2000 < 1645 < 2666', '1640 < 1645 < 1300', '1644 < 1645 <1643', '1000 < 1645< 1800', '', 0),
(27, 2, 'ستة أجزآء من الألف هي', '0.006', '0.0006', '0.6', '0.06', '0.006', '', 0),
(28, 2, 'ثلاثة وحدات و خمسة أعشار  هي', '3.5', '3.05', '35', '0.35', '3.5', '', 0),
(29, 2, 'ماهو العدد الذي قيمته المقربة بإفراط إلى 0.1 هي 19.6', '19.5', '19.7', '19.4', '19.61', '19.5', '', 0),
(30, 3, 'مجموع 450+198,36 هو', '648,36', '648', '64,836', '64836', '648,36', '', 0),
(32, 3, 'مجموع 454 و 6545 هو', '6999', '9666', '9696', '6966', '6999', '', 0),
(33, 3, 'مجموع 105,01 و 61,34 هو ', '166,35', '166', '1663,5', '16,635', '166,35', '', 0),
(34, 4, 'حدد الإجابة الصحيحة: 10 في المائة من 76 هي', '7,6', '760', '0,76', '0.0076', '7,6', '', 0),
(35, 4, 'العدد الكسري 1/4 هو', '25%', '75%', '100%', '35%', '25%', '', 0),
(36, 4, 'حُدِد تخفيض 20 في المائة من ثمن حاسوب قدره 8500درهم , حدد الثمن بعد التخفيض', ' 6800 DH', '8000 DH', '8400 DH', '7600 DH', ' 6800 DH', '', 0),
(37, 5, 'مساحت المربع هي', 'الضلع * الضلع', '2 * الضلع * الضلع', 'الضلع + الضلع', '2*(الضلع +الضلع)', 'الضلع * الضلع', '', 0),
(38, 5, 'مساحة القرص ', 'π * الشعاع *الشعاع', 'π * الشعاع +الشعاع', 'π * الشعاع', 'الشعاع *الشعاع', 'π * الشعاع *الشعاع', '', 0),
(39, 5, 'مستطيل طوله 5 سنتمترات و عرضه 3 سنتمترات ,مساحته بالسنتمتر المربع هي ', '15', '8', '2', '16', '15', '', 0),
(40, 6, 'القياس 247 دسمتر يساوي', '2.47 dam', '2.47 hm', '2.47 m', '2.47 cm', '2.47 dam', '', 0),
(41, 6, 'المتر هو', '100 cm', '1000 cm', '10 cm', '100 dm', '100 cm', '', 0),
(42, 6, 'طول ملعب كرة القدم هو تقريبا', '90 m', '90 km', '90 dm', '900 cm', '90 m', '', 0),
(43, 7, 'Indique le type de la phrase suivante: les enfants grandissent vite ', 'Phrase déclarative', 'Phrase interrogative', 'Phrase impérative', 'Prase exclamative', 'Phrase déclarative', '', 0),
(44, 7, 'Quelle est la phrase interrogative parmi les phrases suivantes:', 'Tu vas à l''école ?', 'il fait chaud .', 'Que c''est mal écrit !', 'Ne faites pas de bruit .', 'Tu vas à l''école ?', '', 0),
(45, 7, 'Une phrase exclamative se termine toujours par un:', 'point d''exclamation', 'point', 'point d''interrogation', 'rien', 'point d''exclamation', '', 0),
(46, 8, 'Qu''il est le pronom convenable à cette phrase : ....marchez sur le trottoir.', 'Vous', 'Je', 'Nous', 'Elles', 'Vous', '', 0),
(47, 8, 'Mets le verbe entre parenthèses au présent: Nous (être) en retard.', 'Sommes', 'suis', 'es', 'sont', 'Sommes', '', 0),
(48, 8, 'Mets le verbe entre parenthèses au présent: je (regarder) un film.', 'Regarde', 'Regardes', 'Regardons', 'Regardent', 'Regarde', '', 0),
(49, 9, 'La forme correcte du "Passé récent" est:', 'Pronom + verbe "Venir" au présent + "de" + verbe à l''infinitif.', 'Pronom + verbe "Venir" au futur + "de" + verbe à l''infinitif.', 'Pronom + verbe "Venir" au présent  + verbe à l''infinitif.', 'Pronom + verbe "Venir" au présent + "de" + verbe conjugé', 'Pronom + verbe "Venir" au présent + "de" + verbe à l''infinitif.', '', 0),
(50, 9, 'Quelle la phrase où le verbe est conjugé au passé récent', 'tu viens de sortir de la salle.', 'tu sors de la salle.', 'tu es sorti de la salle.', 'tu sorais de la salle', 'tu viens de sortir de la salle.', '', 0),
(51, 9, 'Mets le verbe entre parenthèses au passé présent: je (regarder) ce film.', 'Je viens de regarder ce filme.', 'Je regarde ce filme.', 'J''ai regardé ce filme.', 'Aucune réponse n''est correcte!', 'Je viens de regarder ce filme.', '', 0),
(52, 10, 'El Guarrouj a gagné deux médailles.le GNS dans cette phrase est:', 'El Guarrouj', 'A gagné', 'Deux médailles', 'El Guarrouj a gagné', 'El Guarrouj', '', 0),
(53, 10, 'Le jeune Athlète a remporté le marathon. le GNS dans cette phrase est:', 'Le jeune Athlète', 'A remporté', 'Le jeune', 'Le marathon', 'Le jeune Athlète', '', 0),
(54, 10, 'Sous les applaudissements du public, arrive le champion Marocain. le GNS dans cett phrase est:', 'Le champion Marocain', 'Public', 'Les applaudissements', 'Arrive', 'Le champion Marocain', '', 0),
(55, 11, 'La forme correcte du futur proche est:', 'Pronom + verbe "Aller" au présent +  verbe à l''infinitif.', 'Pronom + verbe "Aller" au présent +  verbe conjugé', 'Pronom + verbe "Aller" au futur +  verbe à l''infinitif.', 'Pronom + verbe "Venir" au présent + de +  verbe à l''infinitif.', 'Pronom + verbe "Aller" au présent +  verbe à l''infinitif.', '', 0),
(56, 11, ' Mets le verbe entre parenthèses au futur proche: Bientôt, le match (commencer).', 'Va commencer', 'Vient de commencer ', 'Commence', 'Commencera', 'Va commencer', '', 0),
(57, 11, 'Au futur proche le verbe de la phrase suivante :Ils participer au tournoi de tennis.est:', 'Vont participer', 'Allons participer', 'Va participer', 'Allez participer', 'Vont participer', '', 0),
(58, 12, 'Le pluriel du mot entre parenthèse dans la phrase suivante:Les locomotives roulent sur (le rail).\r\nest:', 'Les rails', 'Les raus', 'Les raux', 'Les railaux', 'Les rails', '', 0),
(59, 12, 'L''intrus dans la serie de mots suivants:lejournal-le bal-le carnaval-le chacal.\r\nest:', 'Le journal', 'Le bal', 'Le carnaval', 'Le chacal', 'Le journal', '', 0),
(60, 12, '(Les coraux) brillent au fond de la mer.\r\nAu singulier le mot entre parenthèse devient:\r\n', 'Le corail', 'Le corau', 'Le coral', 'Le coraux', 'Le corail', '', 0),
(61, 13, 'لون سلك الطور هو', 'أحمر', 'ازرق', 'أخضر و أصفر', 'أسود', 'أحمر', '', 0),
(62, 13, 'تركب المصابيح في الدارة الكهربائية بالمنزل على', 'التوازي', 'التوالي ', 'بعضها على التوالي و بعضها على التوازي', 'كل الإجابات خاطئة', 'التوازي', '', 0),
(63, 13, 'يٌمكن العداد الكهربائي من ', 'قياس الطاقة الكهربائية المستهلكة', 'قطع التيار الكهربائي على المنزل', 'حماية الأشخاص من أخطار التيار الكهربائي', 'كل الإخابت صحيحة', 'قياس الطاقة الكهربائية المستهلكة', '', 0),
(64, 14, 'التربة خليط من مواد', 'عضوية و معدنية', 'عضوية', 'معدنية', 'غير معدنية و غير عضوية', 'عضوية و معدنية', '', 0),
(65, 14, 'للكائنات الحية الدقيقة التي تعيش في التربة دور هام في ', 'تخصيب التربة', 'تعرية التربة', 'تلويث التربة', 'تلوين التربة', 'تخصيب التربة', '', 0),
(66, 14, 'بعد بضعة سنوات ,تتحول أوراق النباتات المتساقطة على التربة وجثث الحيوانات إلى غبار أسود اللون يدعى', 'الدُبال', 'الرماد', 'الفرش الحرجي', 'النفايات', 'الدُبال', '', 0),
(67, 15, 'من بين مصادر الطاقة المتجددة', 'الشمس', 'الخشب', 'البترول', 'الغاز', 'الشمس', '', 0),
(68, 15, 'تنتج الطاقة الكهربائية عن  ', 'دوران مغناطيس قرب وشيعة', 'تدفق الماء', 'دوران عنفة مروحة', 'كل الإجابات صحيحة', 'دوران مغناطيس قرب وشيعة', '', 0),
(69, 15, 'للحفاض على الطاقة بالمنزل نقوم ب', 'إطفاء المصابح التي اسنا بحاجة إليها', 'الطهي بالكهرباء عوض الغاز', 'تخفيض صوت التلفاز', 'ترك المصابيح مضائة طول اليل و النهار', 'إطفاء المصابح التي اسنا بحاجة إليها', '', 0),
(70, 16, 'الغازات أجسام ', 'قابلة للإنضغاط و التمدد', 'قابلة للإنضغاط  فقط', 'قابلة  التمدد فقط', 'غير قابلة للإنضغاط و التمدد', 'قابلة للإنضغاط و التمدد', '', 0),
(71, 16, 'يرتفع ضغط الغاز عند', 'إنضغاطه', 'تمدده', 'إنضغاطه و تمدده', 'كل الإجابات خاطئة', 'إنضغاطه', '', 0),
(72, 16, 'يقاس الضغط بواسطة ', 'البارومتر', 'الترمومتر', 'الميزان', 'المتر', 'البارومتر', '', 0),
(73, 17, 'يتعاقب النهار و الليل لأن', 'الأرض تدور حول نفسها', 'الشمس تدور حول الأرض', 'الأرض لا تدور حول الشمس', 'الشمس تدور حول نفسها', 'الأرض تدور حول نفسها', '', 0),
(74, 17, 'يكون أطول نهار في السنة عند', 'الإنقلاب الصيفي', 'الإنقلاب الربيعي', 'الإنقلاب الشتوي', 'الإنقلاب الخريفي', 'الإنقلاب الصيفي', '', 0),
(75, 17, 'تتعاقب فصول السنة لأن', 'الأرض تدور حول الشمس', 'الشمس تدور حول الأرض', 'الأرض تدور حول نفسها', ' الشمس تدور حول نفسها', 'الأرض تدور حول الشمس', '', 0),
(76, 18, 'الفعل اللازم هو الذي', 'يكتفي بالفاعل فقط لتكوين جملة مفيدة', 'يحتاج للفاعل و المفعول به لتكوين جملة مفيدة', 'يكتفي بالمفعول به فقط لتكوين جملة مفيدة', 'كل الإجابات خاطئة', 'يكتفي بالفاعل فقط لتكوين جملة مفيدة', '', 0),
(77, 18, 'من بين الأفعال الثلاثة التالية ,ماهو الفعل المتعدي: فرح, إطمأن ,عرف', 'عرف', 'فرح', 'إطمأن', 'كل هته الأفعال متعدية', 'عرف', '', 0),
(78, 18, 'عرف الإنسان الرحمة, "عرف" فعلٌ', 'متعدي الى واحد', 'نتعدي الى اثنان', 'لازم', 'كل الإجابات خاطئة', 'متعدي الى واحد', '', 0),
(79, 19, 'حروف العلة هي', 'الواو , الألف ,الياء', 'الواو , الألف ', 'الواو , الألف', 'الواو , الألف ,الهمزة', 'الواو , الألف ,الياء', '', 0),
(80, 19, 'وعد ,قال ,رمى ,فتح . حدد الأفعال المعتلة', 'وعد ,قال ,رمى ', 'قال ,رمى ,فتح', 'وعد  ,فتح', 'وعد ,قال ,رمى ,فتح', 'وعد ,قال ,رمى ', '', 0),
(81, 19, 'الفعل المثال هو الفعل الذي', 'فاؤه حرف علة', 'عينه حرف علة', 'لامه حرف علة', 'ليس فيه حرف علة', 'فاؤه حرف علة', '', 0),
(82, 20, 'النواسخ الفعلية', 'ترفع المبتدأ و تنصب الخبر', 'تنصب المبتدأ و تنصب الخبر', 'ترفع المبتدأ و  ترفع الخبر', 'تنصب المبتدأ وترفع الخبر', 'ترفع المبتدأ و تنصب الخبر', '', 0),
(83, 20, 'النواسخ الحرفية', ' تنصب المبتدأ و ترفع الخبر', 'ترفع المبتدأ و تنصب الخبر', 'ترفع المبتدأ و ترفع الخبر', 'تنصب المبتدأ و تنصب الخبر', ' تنصب المبتدأ و ترفع الخبر', '', 0),
(84, 20, 'حدد النواسخ الحرفية من بين النواسخ التالية . إن , أن ,صار , كأن , كان', 'إن , أن , كأن', 'كان , صار ', 'أن ,صار , كأن', 'إن , أن ,صار , كأن , كان', 'إن , أن , كأن', '', 0),
(85, 21, 'المفعول المطلق مصدر', 'منصوب', 'مجرور', 'مرفوع', 'ساكن', 'منصوب', '', 0),
(86, 21, 'أتقن عملك إتقانا, إتقانا في هذه الجملة هو', 'مفعول مطلق', 'مفعول لأجله', 'مفعول به', 'مفعول فيه', 'مفعول مطلق', '', 0),
(87, 21, 'المفعول لأجله مصدر منصوب يذكر ل', 'بيان سبب الفعل', 'تأكيد معنى الفعل', 'بيان نوع الفعل', 'بيان عدد الفعل', 'بيان سبب الفعل', '', 0),
(88, 22, 'تكتب الهمزة على الألف إذا كانت', 'ساكنة بعد فتح', 'ساكنة بعد ضم', 'مضمومة بعد فتح', 'مفتوحة بعد كسر', 'ساكنة بعد فتح', '', 0),
(89, 22, 'تكتب الهمزة على الواو إذى كانت ', 'ساكنة بعد ضم', 'ساكنة بعد فتح', 'مكسورة بعد ضم', 'كل الإجابات صحيحة', 'ساكنة بعد ضم', '', 0),
(90, 22, 'حدد الكتابة الصحيحة من بين الكابات التالية: مَلِيئَةٌ , مَلِيأَةٌ, مَلِيؤَةٌ', 'مليئة', 'مليأة', 'مليؤة', 'كل الإجابات خاطئة', 'مليئة', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'kjljlkj', 'kjljlkj', 'gjgg@hotmail.com', 'gjgg@hotmail.com', 1, 't2fjjpycl1c0wks888cssocwk8ks8ss', 'VJMgxMYM4RI6HsNiaCxkwYkU8HVCDHO2Y/3wWyGgxCtpLt5/3LGb/lEwHOYdUXBgHMVkHZDa4EhnOpJTit+YVg==', '2014-04-14 22:58:47', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_insc` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `nom`, `prenom`, `date_insc`) VALUES
(1, 'inpt', 'inpt', 'inpt', 'inpt', '2014-03-02'),
(2, 'tpni', 'tpni', 'tpni', 'tpni', '2014-03-05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
