-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Apr 2019 um 13:16
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `jobs`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `adresse`
--

CREATE TABLE `adresse` (
  `stadt` varchar(100) NOT NULL,
  `Hausnr` varchar(10) NOT NULL,
  `strasse` varchar(100) NOT NULL,
  `region` varchar(50) NOT NULL,
  `adresseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `adresse`
--

INSERT INTO `adresse` (`stadt`, `Hausnr`, `strasse`, `region`, `adresseId`) VALUES
('Yaounde', '8A', 'Rue manguier', 'Centre', 1),
('Douala', '17', 'Rue des avocats', 'Littoral', 2),
('Bamenda', '12C', 'Sawa street', 'Nord Ouest', 3),
('Bagangte', '1', 'Noblesse-dignite-elegance-strasse', 'NDE', 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `Benutzername` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Passwort` varchar(255) NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`Benutzername`, `Name`, `Passwort`, `Email`, `Id`) VALUES
('Mischa2', 'Mischa', '123', 'qwery@qwerty.com', 1),
('Dann2', 'Dann', '1123', 'damarzszahoo.com', 2),
('madaa', 'Danielle Mada''a Kamta', 'damarzs', 'madaa_danielle@yahoo.fr', 3),
('Mischa', 'Mischa', '$2y$10$kxFz31KSnP/Rl.o.Vv.eO.r4vsXL6RcK1D89eOl2kd4/g1Z8crmbC', '123@123.com', 4),
('mischa', 'mischa', '$2y$10$P7m9W.JgFQvJii6SzNJMj.42iMjNSqmovAWnTR74ZjwZkOkBhaKTq', 'mischa', 5),
('supi', 'sah', '$2y$10$Eb7szKqmvIbfkUL82UNOX.GiSnAd.nwzrYNLGF2yc9DbrKZ3vCBEO', 'test@gmail.com', 6);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `firma`
--

CREATE TABLE `firma` (
  `firmaId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adresseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `firma`
--

INSERT INTO `firma` (`firmaId`, `name`, `adresseId`) VALUES
(1, 'Camtel', 1),
(2, 'Societe des eaux du Cameroun', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `job`
--

CREATE TABLE `job` (
  `jobId` int(11) NOT NULL,
  `titel` varchar(150) NOT NULL,
  `firmaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `job`
--

INSERT INTO `job` (`jobId`, `titel`, `firmaId`) VALUES
(1, 'Softwareentwickler', 1),
(2, 'Projektmanagement', 2),
(3, 'Ministre de l''education', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `jobs`
--

CREATE TABLE `jobs` (
  `ID` int(11) NOT NULL,
  `Jobtitel` varchar(255) NOT NULL,
  `Vollzeit` varchar(255) NOT NULL,
  `Startdatum` date NOT NULL,
  `Firma` varchar(255) DEFAULT NULL,
  `Firmenadresse` mediumtext,
  `Firmenbeschreibung` mediumtext NOT NULL,
  `Aufgaben` mediumtext,
  `Profil` mediumtext NOT NULL,
  `Angebot` mediumtext NOT NULL,
  `Frist` date DEFAULT NULL,
  `Stadt` varchar(255) DEFAULT NULL,
  `Region` varchar(255) DEFAULT NULL,
  `Ansprechpartner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `jobs`
--

INSERT INTO `jobs` (`ID`, `Jobtitel`, `Vollzeit`, `Startdatum`, `Firma`, `Firmenadresse`, `Firmenbeschreibung`, `Aufgaben`, `Profil`, `Angebot`, `Frist`, `Stadt`, `Region`, `Ansprechpartner`) VALUES
(1, 'Anwendungsentwickler CAD/CAM (m/w/d)', 'Vollzeit', '2019-01-22', 'MTU Aero Engines AG', 'MTU Aero Engines AG\r\nMünchen, Deutschland', 'Die MTU Aero Engines entwickelt, fertigt, vertreibt und betreut zivile und militärische Antriebe für Flugzeuge und Hubschrauber sowie Industriegasturbinen. Unser Schlüssel zum Erfolg sind Antriebe für die Luftfahrt von morgen - noch sparsamer, schadstoffärmer und leiser. Mit rund 10.000 Mitarbeitern sind wir weltweit präsent und in Deutschland zu Hause. Werden auch Sie Teil unseres engagierten Teams am Standort München.', 'Leitung von IT-Projekten zur Weiterentwicklung von CAD/CAM-Anwendungen\r\n\r\nEinbettung der CAD/CAM-Tools in die Systemlandschaft mittels PowerShell\r\n\r\nBetrieb und Weiterentwicklung der CAD/CAM Systemlandschaft (Teamcenter, NX)\r\n\r\nUnterstützung des Fachbereichs bei der Durchführung von Funktionstests\r\n\r\nFehleridentifikation und Fehlerbehebung im Zusammenspiel mit dem CAD Servicedesk und Fachbereich\r\n\r\nAutomatisierung/Optimierung des standardmäßigen Funktionsumfangs der CAD/CAM-Systemlandschaft', 'Ihr berufliches Know-how:\r\n\r\nErfolgreich abgeschlossenes einschlägiges IT-Hochschulstudium\r\nKenntnisse im Bereich CAD/CAM, 3D Modellierung und Fertigungssimulation\r\nProgrammierung/Scripting mit PowerShell\r\nGrundlagenkenntnisse Datenbanken/SQL (Oracle, MS SQL)\r\nKenntnisse in Projektmanagement\r\nsehr gute Deutsch- und gute Englischkenntnisse in Wort und Schrift\r\nZuverlässigkeit, Engagement, vorausschauende und verantwortungsbewusste Arbeitsweise\r\nEinsatzbereitschaft und Belastbarkeit\r\nFreude an der Arbeit in Teams', 'Wir investieren mit einem umfangreichen Weiterbildungsangebot und maßgeschneiderten Entwicklungsprogrammen in die fachliche und persönliche Entwicklung eines jeden Mitarbeiters.\r\nDie MTU bietet eine Reihe von Zusatzleistungen, die ganz auf die unterschiedlichen Bedürfnisse der Mitarbeiter abgestimmt sind: Eine zeitgerechte Altersversorgung gehört für uns ebenso dazu wie Maßnahmen zur Vereinbarkeit von Familie und Beruf, zum Beispiel mit unseren flexiblen Arbeitszeitmodellen oder der betriebsnahen Kindertagesstätte TurBienchen. Darüber hinaus engagiert sich die MTU im Bereich Gesundheit und Fitness.\r\n\r\nAls Technologieunternehmen liegen uns auch Frauen mit einer qualifizierten Ausbildung sehr am Herzen. Ihre Bewerbung ist uns besonders willkommen!\r\n\r\n \r\n\r\nInteressiert? Dann geben Sie Ihrer Karriere ordentlich Schub und senden Sie uns Ihre vollständigen Unterlagen, den nächstmöglichen Eintrittstermin und Ihre Gehaltsvorstellung über unseren Online-Bewerbungsbogen, den Sie direkt von dieser Seite erreichen.\r\n\r\nWir freuen uns, Sie kennenzulernen!', '2019-04-30', 'Yaounde', 'Centre', 'Danielle Mada''a\r\n\r\nTel: +49 89 1489-8254'),
(2, 'IT-Mitarbeiter w/m/d Onsite Support', 'Teilzeit', '2019-01-22', 'Amaras AG', 'Rheinpromenade 9', 'ein professioneller IT-Dienstleister für effizienten Service Desk Betrieb bei unseren Kunden in Deutschland, Österreich und der Schweiz\r\n\r\nein Unternehmen der Bechtle Gruppe mit rund 9.600 Mitarbeitern, dem größten, konzernunabhängigen IT-Systemhaus in Deutschland und führenden IT-E-Commerce-Anbieter in Europa\r\ninternational vertreten', 'Ansprechpartner w/m/d für Enduser Support im Client-Umfeld und darüber hinaus für die IT-Infrastruktur\r\nSupport von Standard Hard- und Software im Clientbereich inklusive IMAC-Prozess sowie spezifischer Hard- und Software im R&D- und Produktionsumfeld\r\nMitarbeit in Projekten in der Produktions- und Entwicklungsumgebung\r\nÜbernahme von Aufgaben im Telefonieumfeld\r\nSupport und Einrichtung von MDM Geräten\r\nZusammenarbeit mit dem IT-Team des Kunden', 'abgeschlossene technische Berufsausbildung\r\n\r\nErste Berufserfahrung im Onsitesupport und im Support von mobilen Endgeräten\r\nsehr gute Kenntnisse in den aktuellen Microsoft Betriebssystemen (Windows 7 / 10)\r\ntiefgreifendes Know-how in den gängigen Microsoft Office Produkten und in Client Hardware\r\nausgeprägte analytische Fähigkeiten sowie schlussfolgerndes Denken und Handeln\r\nselbstständige und zielorientierte Arbeitsweise', 'unternehmerischen Freiraum, um viel zu bewegen\r\n\r\nVerbundenheit mit einem starken Team\r\nWertschätzung und Unterstützung bei Ihrer weiteren Entwicklung\r\n\r\nTeilhabe an einer einzigartigen Erfolgsgeschichte – und einer starken Zukunft', '2019-01-31', 'Bamenda', 'Nord-Ouest', 'Sah Versheri\r\n+4917625254716'),
(3, 'Entwicklungsingenieur (m/w) Antriebstechnik Textilmaschinen', 'Vollzeit', '2019-01-22', 'Bertrandt AG', 'Alexander Strasse 3 ', 'Der Bertrandt-Konzern bietet seit über 40 Jahren Entwicklungslösungen für die internationale Automobil- und Luftfahrtindustrie. Angefangen von der ersten Idee bis zur Serienbetreuung setzen wir Ideen in fertige Konzepte um. Unsere Tochtergesellschaft Bertrandt Services betreut die Bereiche außerhalb der Mobilitätsbranchen wie Maschinen- und Anlagenbau, Elektroindustrie Energie und Medizintechnik. \r\n', 'Sie übernehmen die Konzeptentwicklung für Softwarelösungen im Bereich der Antriebstechnik\r\n\r\nIm Speziellen handelt es sich um die antriebsnahe Softwareentwicklung für Textilmaschinen inkl. Analyse, Design, Diagnose und Implementierung der Software\r\n\r\nSie programmieren unter C, C++ oder C#\r\n\r\nSie erstellen die Entwicklungs- und Kundendokumentation und arbeiten dabei in einem multikulturellen Umfeld', 'Sie haben bereits ein abgeschlossenes Studium mit Schwerpunkt Automatisierungstechnik, Elektrotechnik oder Informatik und bringen fundierte Kenntnisse in Motoren / Antrieben mit\r\n\r\nIdealerweise haben Sie erste Berufserfahrung in objektorientierter Programmierung\r\n\r\nDarüber hinaus sind die Kenntnisse im Bereich der Steuerungstechnik (Simotion, Simatic) wünschenswert\r\n\r\nSie überzeugen mit Ihrem analytischen Denken und selbständiger Arbeitsweise\r\n\r\nGute Deutsch- und Englischkenntnisse runden Ihr Profil ab', 'Vielseitige und verantwortungsvolle Aufgaben - Individuelle Weiterbildungsangebote - Mobiles Arbeiten - Gratifikation bei Geburtstag und Heirat - Corporate Benefits', '2019-01-30', 'Buea', 'Sud_Ouest', 'Ornella Pouaha\r\n+23766403368'),
(4, 'Duales Studium Bachelor of Science (w/m) Wirtschaftsinformatik', 'Teilzeit', '2019-01-22', 'Camtel', 'Poste Central 18', 'Du hast Talent. Wir sind ein internationales Netzwerk aus 236.000 Mitarbeiterinnen und Mitarbeitern, die ihr Wissen, ihre Erfahrungen und ihre Ideen miteinander teilen. Du suchst einen herausfordernden, spannenden Job. Wir bieten dir als weltweit führende Wirtschaftsprüfungs- und Beratungsgesellschaft ein Maximum an Möglichkeiten für einen Karriereweg nach deinen Vorstellungen. Du möchtest Verantwortung für deine Ergebnisse übernehmen, Lösungen gemeinsam mit dem Kunden entwickeln und einen Arbeitgeber mit passenden Werten. Unser Denken und Handeln orientiert sich an Grundsätzen, die von Vertrauen, Respekt, Weitsicht und Wertschätzung geprägt sind.', 'Wirtschaftsprüfung - In den Praxisphasen unterstützt du die Kollegen im Bereich Wirtschaftsprüfung im Bereich IT- und Prozessprüfung. Im Rahmen der Jahresabschlussprüfung analysierst du die Prozesse der Mandanten in Bezug auf die IT-Struktur. Hierbei wirst du eng in die Projektarbeit eingebunden.\r\n\r\nKundenkontakt - Du bist mit dabei, wenn wir bei unseren Mandaten vor Ort interne Kontrollsysteme, Geschäftsprozesse und IT-Systeme untersuchen. Dein und unser Ziel ist es, die Transparenz, Verlässlichkeit, Sicherheit und Wertschöpfung zu erhöhen und dafür zu sorgen, dass alles seine Ordnung hat.\r\n\r\nVielfältige Aufgaben - Deine zentrale Aufgabe ist es, selbstständig IT-gestützte Geschäftsprozesse, z. B. rund um die Rechnungslegung, sowie IT-Anwendungen und -Infrastrukturen zu untersuchen - angeleitet und gecoacht von erfahrenen Kolleginnen und Kollegen.\r\n\r\nTheorie - Die Theoriephase findet an der dualen Hochschule Baden-Württemberg Villingen-Schwenningen statt.', 'Du hast die Hochschulreife (allgemeine, fachgebundene oder Fachhochschulreife) und hast eventuell deine Ausbildung im kaufmännischen Bereich beziehungsweise mit IT Schwerpunkt erfolgreich abgeschlossen.\r\n\r\nDu bist interessiert an Schnittstellentätigkeiten zwischen Fachbereichen und IT.\r\n\r\nDu zeigst Eigeninitiative, Teamgeist, Kommunikationsstärke, Spaß an projektorientierter Arbeit sowie ausgeprägte analytische Fähigkeiten.\r\n\r\nGute Englischkenntnisse runden dein Profil ab.\r\n', 'Keep in Touch: Auch nach dem Praktikum bleiben wir mit dir in Kontakt und bieten dir in unserem Praktikanten-Programm viele Vorzüge – wie etwa Einladungen zu exklusiven Seminaren und Workshops oder umfassende Infos zu deinen Einstiegsmöglichkeiten.\r\n\r\nÜberstundenausgleich: Bei Camtel werden alle Überstunden mit Freizeit ausgeglichen.\r\n\r\nFlexWork: Kernarbeitszeiten gibt es bei uns nicht – du teilst dir deine Arbeitszeit selbst nach deinen eigenen Bedürfnissen ein.\r\n\r\nMentoring: Bei Camtel profitierst du von einem persönlichen Mentor, der dir sowohl in fachlicher als auch persönlicher Hinsicht mit Rat und Tat zur Seite steht.', '2019-02-02', 'Yaounde', 'Centre', 'Ornella Pouaha\r\n+4917659597920'),
(5, 'IT Systems Engineer (m/w/div.) (DevOps)', 'Vollzeit', '2019-01-20', ' ESCRYPT', 'Danielle Strasse 25', 'SCRYPT GmbH ist ein Tochterunternehmen der zur Bosch-Gruppe gehörenden ETAS GmbH und weltweit das führende Systemhaus für eingebettete Sicherheit. Als international agierendes und stark wachstumsorientiertes Unternehmen im Bereich der Embedded Security unterstützt ESCRYPT alle Branchen, die einen Bedarf an Sicherheitslösungen in eingebetteten Systemen haben. Das Sortiment umfasst dabei eine große Auswahl an Dienstleistungen, von der Beratung und Erstellung von Sicherheitsprodukten bis zu Lösungen, die exakt auf die Bedürfnisse der einzelnen Branchen angepasst sind.\r\n\r\nESCRYPT GmbH freut sich auf Deine Bewerbung!', 'Enge Zusammenarbeit mit einem agilen Entwicklungsteam und aktive Teilnahme an der Weiterentwicklung der Systeme (Entwicklung und Unterstützung der Infrastruktur)\r\n\r\nProaktive Überwachung der Infrastruktur und Dienste mittels Monitoring Tools\r\n\r\nPflege von Sicherheits-, Backup- und Redundanzstrategien sowie kontinuierliches Monitoring, um mögliche Eingriffe zu identifizieren\r\n\r\nAutomatisierung wiederkehrender Aufgaben\r\n\r\nTeilnahme an einer rotierenden Rufbereitschaft außerhalb der Geschäftszeiten', '   Unsere fachlichen Anforderungen:\r\n\r\nHochschulabschluss in Informatik oder vergleichbare Qualifikation mit einschlägiger Berufserfahrung\r\n- Sehr gute Kenntnisse in der Verwaltung von Redhat Enterprise Linux Servern\r\n- Erfahrung mit JBoss-Applikationsserver und Apache Web Server\r\n- Erfahrung mit Konfigurationsmanagement-Tools wie Chef, Puppet, Ansible\r\n- Sehr gute Deutsch- und Englischkenntnisse in Wort und Schrift\r\n \r\n   Deine persönlichen Fähigkeiten:\r\n\r\n- Du bist eigeninitiativ und zeigst hohe Lernbereitschaft\r\n- Deine prozessorientierte Arbeitsweise zeichnet sich durch Zielorientierung aus\r\n- Du arbeitest gerne in einem internationalen und interkulturellen Team\r\n- Dein Auftreten ist kompetent', 'Flexibles und mobiles Arbeiten: Wir bieten Ihnen flexible Arbeits(zeit)modelle.\r\n\r\nGesundheit und Sport: Bei uns erwartet Sie ein breites Angebot an Gesundheits- und Sportaktivitäten.\r\n\r\nKinderbetreuung: Nutzen Sie unseren Vermittlungsservice für Angebote rund um die Kinderbetreuung.\r\n\r\nMitarbeiterrabatte: Bosch Mitarbeiter profitieren von diversen Vergünstigungen.\r\n\r\nFreiraum für Kreativität: Wir bieten Ihnen Freiräume für kreatives Arbeiten.', '2019-02-04', 'Bangangte', 'Ouest', 'Danielle Mada''a\r\n+23766403364');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`adresseId`);

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indizes für die Tabelle `firma`
--
ALTER TABLE `firma`
  ADD PRIMARY KEY (`firmaId`),
  ADD KEY `adresseId` (`adresseId`);

--
-- Indizes für die Tabelle `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobId`),
  ADD KEY `firmaId` (`firmaId`);

--
-- Indizes für die Tabelle `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `adresse`
--
ALTER TABLE `adresse`
  MODIFY `adresseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `firma`
--
ALTER TABLE `firma`
  MODIFY `firmaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `job`
--
ALTER TABLE `job`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `jobs`
--
ALTER TABLE `jobs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `firma`
--
ALTER TABLE `firma`
  ADD CONSTRAINT `firma_ibfk_1` FOREIGN KEY (`adresseId`) REFERENCES `adresse` (`adresseId`);

--
-- Constraints der Tabelle `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`firmaId`) REFERENCES `firma` (`firmaId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
