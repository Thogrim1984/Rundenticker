-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Okt 2021 um 01:07
-- Server-Version: 10.4.19-MariaDB
-- PHP-Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

﻿--
-- Datenbank: `kingmaker`
--
﻿
-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `l_id` bigint(11) NOT NULL,
  `vc_name` varchar(255) NOT NULL,
  `t_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
﻿
--
-- Daten für Tabelle `events`
--

﻿INSERT INTO `events` (`l_id`, `vc_name`, `t_content`) VALUES
(1, 'Adel verpflichtet', 'Eine adelige Familie bietet an, ein Monument (01-50) oder einen Park (51-100) zu auf eigene Kosten zu errichten. Die Adligen bezahlen alle Kosten für diesen Zweck.')﻿,
(2, 'Archäologischer Fund', 'Eine guterhaltene Ruine mit historischen Artefakten aus der Vergangenheit des Landes wurde in eurem Königreich entdeckt. Effekt: Geschichte +1. Wenn ihr ein Museum habt, stiften die Entdecker historische Artefakte im Wert von 10.000 GM für dessen Sammlung (Wenn ihr mehr als ein Museum habt, wählt dasjenige aus, dass die Spende erhalten soll).')﻿,
(3, 'Außergewöhnlicher Schatz', 'Die Siedlung füllt sofort einen seiner offenen Plätze für magische Gegenstände (zufällig bestimmt) mit einem Gegenstand, der eine Kategorie höher ist, als normal (Mittel, wenn es ein schwacher Platz ist, Größer, wenn es ein mittlerer Platz ist, 1 größerer und ein schwacher, wenn es ein größerer Platz ist). Wenn die Siedlung keine offenen Plätze hat, könnt ihr wählen, ob ein zufälliger voller Platz ersetzt wird, oder ob das Ereignis wie „Unerwarteter Fund“ gewertet werden soll.')﻿,
(4, 'Banditenaktivität', 'Banditen überfallen Reisende in eurem Königreich. Führt einen Stabilitätswurf durch. Bei Erfolg stoppen die Verteidiger eures Reiches die Räuber, ehe sie zu einem Problem werden. Solltet ihr scheitern, senken die Banditen die Zahl der BP in eurer Schatzkammer um 1W6 BP. Jedes Mal, wenn du eine 6 würfelst, würfele erneut und addiere die Würfelergebnisse.')﻿,
(5, 'Besuch einer Berühmtheit', 'Eine Berühmtheit aus einem anderen Reich Golarions besucht eine eurer Siedlungen und sorgt für einen plötzlichen Zustrom an Besuchern und Geldern. Ruhm steigt um 1 und ihr erhaltet 1W6 BP. Jedes Mal, wenn ihr eine 6 würfelt, würfelt erneut und addiert die Ergebnisse.')﻿,
(6, 'Die Gerechtigkeit siegt!', 'Die Obrigkeit zerschlägt eine große kriminelle Operation oder vereitelt einen Anschlag gegen die Siedlung. Recht und Loyalität steigen um 1, Kriminalität und Unruhe sinken um 1.')﻿,
(7, 'Diplomatisches Angebot', 'Ein nahes Reich sendet euch einen Botschafter um mit euch eine gegenseitige Botschaft (01-60), einen Staatsvertrag (61-90) oder eine Allianz (91-100) zu verhandeln, was genauso funktioniert, wie der Diplomatie-Erlass. Der Botschafter bringt euch Geschenke für euer Reich im Wert von 1W4 BP dar.')﻿,
(8, 'Drogenhöhle', 'Eins eurer Häuser oder Hütten wird zu einem Hort unerlaubten Drogenhandels. Führt einen Loyalitäts- und einen Stabilitäts-Wurf aus, mit einem Malus in Höhe der Anzahl an Bordellen, Hütten, Häfen und Grundstücken mit Hausbesetzern in der Siedlung. Wenn beide Proben gelingen, wird die Drogenhöhle zerschlagen, bevor das Reich Nachteile dadurch hinnehmen muss. Wenn eine Probe fehlschlägt, steigen Unruhe und Kriminalität jeweils um 1. Wenn beide Proben fehlschlagen, steigen Kriminalität und Unruhe jeweils um 1, Wirtschaft, Loyalität und Stabilität sinken um 1 und in der nächsten Ereignisphase tritt das Drogenhöhle-Ereignis ein weiteres Mal in der selben Siedlung (01-50) oder in der nächsten Siedlung (51-100) ein zweites Mal auf.')﻿,
(9, 'Einladung zu Festlichkeit', 'Die Regierungsführer eures Reiches werden zu einer Festlichkeit eines benachbarten Reiches eingeladen. Wenn ihr der Einladung folgt, und Geschenke im Wert von 1W4 BP mitbringt, steigt für ein Jahr eure Gesellschaft um 1, Ruhm steigt um 1 bei diesem Königreich und ihr bekommt einen Bonus von +2 auf alle Proben, die für Erlasse geworfen werden, wenn es um dieses Reich geht.')﻿,
(10, 'Entdeckung', 'Lokale Gelehrte fördern ein Stück uralte Geschichte zutage oder stellen eine wichtige neue Forschung vor. Ruhm steigt um 1 und Wissen steigt um 1W4.')﻿,
(11, 'Fehde', 'Adlige (oder andere einflussreiche rivalisierende Gruppen) streiten sich. Führt einen Loyalitätswurf durch. Wenn ihr erfolgreich seid, endet das Ereignis, aber die Unruhe steigt um 1. Bei einem Fehlschlag steigt die Korruption um 1, die Unruhe steigt um 1W6 und das Ereignis ist andauernd.')﻿,
(12, 'Gebäude-Forderung', 'Eure Bürger fordern, dass ein bestimmtes Gebäude gebaut (01-75) oder abgerissen (76-100) wird. Der Gebäudetyp wird zufällig aus den möglichen Gebäudetypen ausgewählt. Wenn der Forderung in der nächsten Ereignisphase nicht nachgegangen wurde, steigt die Unruhe um 1. Alternativ könnt ihr einmal pro Runde versuchen eine Loyalitätsprobe dazu benutzen, die Forderungen der Bürger zu unterdrücken. Bei einem Erfolg sinkt die Loyalität um 2 und die Unruhe steigt um 1.')﻿,
(13, 'Gutes Wetter', 'Schönes Wetter steigert die Laune und die Produktivität. Loyalität, Wirtschaft und Produktivität steigen bis zur nächsten Ereignisphase um 2.')﻿,
(14, 'Hausbesetzer', 'Ein leeres Siedlungsgrundstück ist von Hausbesetzern, Unruhestiftern und Leuten, die weder eine adäquate Arbeit noch Wohnung finden können besetzt worden; sie kampieren dort mit Zelten, Wägen und zusammengezimmerten Hütten. Ihr könnt das Grundstück für nichts anderes nutzen, bis die Besetzer vertrieben wurden. Ruhm und Stabilität sinken um 1 und Unruhe steigt um 2. Ihr könnt versuchen, die Unruhestifter mit einer Probe auf Stabilität loszuwerden. Ein Erfolg bedeutet, dass Hausbesetzer verstreut wurden und das Ereignis ist nicht andauernd, aber wenn in der nächsten Runde kein Haus oder Hütte auf dem Grundstück gebaut werden, steigt Ehrlosigkeit um 1 und Unruhe um 2. Wenn die Stabilitätsprobe fehlschlägt, ist das Ereignis andauernd und ihr könnt auf dem Grundstück nichts unternehmen, bis das Problem gelöst wurde.')﻿,
(15, 'Inquisition', 'Fanatiker mobilisieren die öffentliche Meinung gegen eine bestimmte Rasse, Religion, Königreich, Verhalten oder Regierungsmitglied. Führe eine Loyalitätsprobe durch. Wenn diese fehlschlägt, greifen die Fanatiker um sich; Ehrlosigkeit und Recht steigen um 1 und Wissen, Produktivität und Stabilität sinken um 2. War der Wurf erfolgreich, so sind die Fanatiker nur einigermaßen erfolgreich; Wissen, Loyalität, Produktivität und Stabilität sinken um 1. Zwei erfolgreiche Proben hintereinander lassen das Ereignis enden (und wenn das passiert, gibt es keine Nachteile durch das Ereignis in der Runde).')﻿,
(16, 'Kultaktivität', 'Ein religiöser Kult mit gegensätzlicher Gesinnung zu eurem Königreich beginnt, Leute zu entführen, zu konvertieren oder öffentlich Bürger zu opfern. Führt eine Loyalitäts- und eine Stabilitäts-Probe durch. Wenn beide gelingen, wird der Kult zerschlagen, bevor das Reich irgendwelche Nachteile dadurch erleidet. Für jede misslungene Probe steigt die Unruhe um 1 und Produktivität, Gesellschaft und Stabilität sinken um 1. Wenn beide Proben fehlschlagen ist das Ereignis zudem noch andauernd.')﻿,
(17, 'Lokale Katastrophe', 'Ein Feuer, Sturm, Erdbeben, eine Flut, massive Sabotage oder ein anderes Desaster schlägt in der Siedlung zu! Würfelt 1W6 um festzustellen, wie viele Grundstücke von der Katastrophe betroffen sind. Bei einem Ergebnis von 6 dehnt sich die Katastrophe auf 1W6 zusätzliche angrenzende Grundstücke aus. Führt eine Stabilitätsprobe für jedes betroffene Grundstück durch; Ein Fehlschlag bedeutet, dass das Desaster ein Gebäude auf diesem Grundstück zerstört und die Unruhe um 1 steigt. (Dieser Stabilitätswurf repräsentiert die Fähigkeit eures Reiches, sich auf solche Katastrophen vorzubereiten und die Fähigkeit eurer Gebäude, diesem massiven Schaden zu widerstehen.) ')﻿,
(18, 'Missernte', 'Schädlinge, Mehltau und Wetter ruinieren die Ernte in dem Hexfeld der Siedlung und allen angrenzenden Hexfeldern. Führt zwei Stabilitäts-Proben durch. Wenn beide erfolgreich sind, wird das Problem gelöst, bevor das Königreich Nachteile durch das Ereignis erhält. Wenn nur eine Probe gelingt, verringern betroffene Farmen den Unterhalt nur um 1 während der nächsten Unterhaltsphase. Wenn beide Proben fehlschlagen, reduzieren die betroffenen Farmen den Unterhalt während der nächsten Unterhaltsphase gar nicht.')﻿,
(19, 'Monsterangriff', 'Ein Monster (oder eine Gruppe von Monstern) greift das Königreich an. Der SL wählt eins der Hexfelder im Reich, in dem das Monster aktiv ist (oder wählt eine der Siedlungen aus). Der HG des Monsters entspricht der DGS + 1W10-1. Ihr könnt euch persönlich um die Bedrohung kümmern, oder einen erfolgreichen Stabilitätswurf mit einem Malus in Höhe des HG der Bedrohung benutzen, um die Bedrohung zu eliminieren. Wenn das Monster nicht in dieser Runde besiegt wird, steigt die Unruhe um 4. Wenn das Königreich vorher schon eine Unruhe von 5 oder mehr hatte, verliert ihr die Kontrolle über besagtes Hexfeld und zwar zusätzlich zu eventuellen Verlusten durch zu hohe Unruhe.')﻿,
(20, 'Mordanschlag', 'Ein (zufällig bestimmtes) Mitglied der Regierung wird zum Ziel eines Mordanschlags. Wenn das Ziel ein SC ist, sollte der SL die Situation ausspielen, der Attentäter besitzt einen HG entsprechend der Stufe des Ziels +1. Wenn das Ziel ein NSC ist, könnt ihr den Versuch mit einem Stabilitätswurf scheitern lassen. Wenn der Anschlag glückt, steigt die Unruhe um 1 und die Strafe für ein leerstehendes Amt tritt sofort in Kraft, bis das Amt (frühestens in der nächsten Verbesserungsphase) wieder besetzt wird. ')﻿,
(21, 'Nahrungsknappheit', 'Aufgrund von Fäule, Verrat oder einfach nur Pech besteht in diesem Monat Nahrungsknappheit. Wenn euch ein Stabilitätswurf gelingt, steigt euer Unterhalt in der nächsten Runde um 50%, wenn nicht steigt er um 100%.')﻿,
(22, 'Nahrungsüberschuss', 'Eure Bauern produzieren einen überraschenden Gewinn! In der nächsten Unterhaltsphase ist der zu bezahlende Unterhalt halbiert.')﻿,
(23, 'Naturkatastrophe', 'Ein Feuer, Sturm, Erdbeben, eine Flut, massive Sabotage oder ein anderes Desaster schlägt zu! Würfelt 1W6; bei 1-5 bedroht die Katastrophe lediglich 1 Hexfeld mit Geländefeldverbesserung. Bei einem Ergebnis von 6 dehnt sich die Katastrophe auf 1W6 zusätzliche angrenzende Hexfelder mit Feldverbesserungen aus. Führt eine Stabilitätsprobe für jedes betroffene Hexfeld durch; Ein Fehlschlag bedeutet, dass das Desaster eine Geländefeldverbesserung in diesem Hexfeld zerstört und die Unruhe um 1 steigt. (Dieser Stabilitätswurf repräsentiert die Fähigkeit eures Reiches, sich auf solche Katastrophen vorzubereiten und die Fähigkeit eurer Gebäude, diesem massiven Schaden zu widerstehen.)')﻿,
(24, 'Neue Vasallen', 'Eine kleine Gruppe eingeborener intelligenter Kreaturen schließt sich eurem Königreich an und unterwirft sich eurer Herrschaft. Gesellschaft und Stabilität steigen um 1, Unruhe sinkt um 1 und ihr erhaltet 1W6 BP. Jedes Mal, wenn ihr eine 6 würfelt, würfelt erneut und addiert das Ergebnis.')﻿,
(25, 'Öffentlicher Skandal', 'Einer der Führungspersönlichkeiten wird ein Verbrechen oder eine peinliche Situation nachgesagt, z.B. eine Affäre mit der Gemahlin eines anderen Amtsinhabers. Eure Ehrlosigkeit steigt um 1. Führt einen Loyalitätswurf durch. Wenn dieser fehlschlägt, Steigt die Unruhe um 2 und eure Loyalitätswürfe erleiden bis zur nächsten Ereignisphase einen Malus von -4.')﻿,
(26, 'Pilgerschar', 'Wählt zufällig eine Stadt mit Kathedrale, Schrein oder Tempel aus. Frommes religiöses Volk pilgert zu dieser Siedlung, um dort ein religiöses Fest abzuhalten, ohne das Kosten für euch entstehen.')﻿,
(27, 'Pioniere', 'Übereifrige Siedler nehmen ein unbesetztes Hexfeld ein und errichten auf eigene Kosten eine Farm, Mine, Sägemühle oder einen Steinbruch, sind sich jedoch über die Eigentumsverhältnisse uneinig. Dieses Hexfeld ist kein Teil des Königreichs, so dass ihr auch keine Vorteile dadurch erhaltet. Produktivität, Gesellschaft und Stabilität sinken um 1. Führt einen Loyalitäts-Wurf durch. Ist dieser erfolgreich, so steigt Unruhe um 1. Wenn die Probe fehlschlägt, steigt die Unruhe um 1W4. Wenn ihr eine identische Feld-Verbesserung in einem angrenzenden Hexfeld baut, werden die Änderungen an der Produktivität, Gesellschaft und Stabilität wieder aufgehoben. Wenn ihr das betreffende Feld komplett umbaut habt, gehört es automatisch euch.')﻿,
(28, 'Politische Ruhe', 'Ein plötzliches Fehlen politischer Intrigen geht mit einer Verbesserung der öffentlichen Meinung einher. Die Unruhe sinkt um 1W6. Bis zur nächsten Ereignisphase bekommt ihr einen +2-Bonus auf Proben, um andauernde Ereignisse zu lösen. Wenn euer Königreich weder Unruhe noch andauernde Ereignisse hat, steigen Loyalität und Stabilität und Recht um 1.')﻿,
(29, 'Schmuggler', 'Skrupellose Händler untergraben das seriöse Gewerbe. Führt eine Loyalitäts- und eine Stabilitäts-Probe durch, jede mit einem Malus, der der Anzahl an Anlegestellen, Häfen und Handelsrouten in eurem Reich entspricht. Wenn ihr mit beiden Proben erfolgreich wart, werden die Schmuggler gestoppt, bevor euer Reich irgendwelche Probleme durch dieses Ereignis bekommt. Wenn eine dieser Proben fehlschlägt, steigt die Korruption um 1W2 in jeder Siedlung, Kriminalität steigt um 1 im Reich, Produktivität sinkt im reich um 1W3, ihr verliert 1W3 BP und das Ereignis ist nicht andauernd. Wenn beide Proben fehlschlagen, steigt die Korruption um 1W4 in jeder Siedlung, Kriminalität im Reich steigt um 1, Produktivität im Reich sinkt um 1W6, ihr verliert 1W6 BP und das Ereignis ist andauernd.')﻿,
(30, 'Segen der Natur', 'Ein natürliches Ereignis, wie z.B. die Blüte seltener  und wunderschöner Wildblumen oder ein gutes Vorzeichen am Himmel, hebt die Moral im Reich. Bis zur nächsten Ereignisphase erhaltet ihr einen Bonus von +4 auf Stabilitätswürfe. ')﻿,
(31, 'Seuche', 'Eine tödliche Krankheit sucht das Zielhexfeld oder Siedlung heim. Ihr könnt keine Gelände-Verbesserungen oder Gebäude errichten, während die Seuche wütet. Führt zwei Stabilitätsproben durch, jede einzelne mit einem Malus der der Anzahl aller Bordelle, Auslandsviertel, Schnellstraßen, Gasthäusern, Anlegestellen, Straßen, Ställen, Viehhöfen, Hütten und Häfen in dem Hexfeld entspricht und einem Bonus in Höhe der Anzahl aller Alchimisten, Kathedralen, Kräuterkundlern, Hospitälern (zählen doppelt) und Tempeln in dem Hexfeld. Wenn ihr beide Proben besteht, endet das Ereignis, aber die Stabilität sinkt um 2 und ihr verliert 1W3 BP. Wenn ihr nur eine Probe besteht, sinkt eure Stabilität um 4, ihr verliert 1W6 BP und eure Unruhe steigt um 1W3 und das Ereignis ist andauernd. Wenn beide Proben fehlschlagen, sinkt die Stabilität um 4, ihr verliert 1W6 BP, eure Unruhe steigt um 1W6 und die Seuche breitet sich in der nächsten Ereignisphase auf ein zufälliges benachbartes Hexfeld aus. Alle Seuchenfelder sind dann andauernd. ')﻿,
(32, 'Sklavenhändler', 'Kriminelle beginnen damit, Bürger zu entführen und sie in die Sklaverei zu verkaufen. Führt eine Loyalitäts- und eine Stabilitäts-Probe durch, jede mit einem Malus, der der Anzahl an Bordellen, Hütten, Häfen und Grundstücken mit Hausbesetzern in der Siedlung entspricht. Wenn beide Proben erfolgreich sind, können die Sklavenhändler gefasst werden, bevor das Reich Nachteile erleidet. Wenn eine der Proben fehlschlägt, sinken Loyalität und Stabilität um 1, während die Unruhe um 1 steigt. Wenn beide Proben fehlschlagen sinken Loyalität und Stabilität um 2, während die Unruhe um 2 steigt und das Ereignis ist andauernd.')﻿,
(33, 'Stadt im Aufschwung', 'Wählt zufällig eine eurer Siedlungen aus in welcher der Handel einen grandiosen Aufschwung erlebt. Bis zur nächsten Ereignisphase steigt eure Wirtschaft um die Anzahl der Gebäude in dieser Siedlung, die einen Wirtschafts-Bonus bringen. Andererseits steigt auch die Korruption um 1W4.')﻿,
(34, 'Unerwarteter Fund', 'Lokale Bürger finden einen vergessenen magischen Gegenstand. Die Siedlung erhält einen temporären geringeren (01-70) oder mittleren (71-100) Gegenstandsplatz, der automatisch in der nächsten Unterhaltsphase gefüllt wird. Dieser Platz und der Gegenstand darin verschwinden, wenn der Gegenstand gekauft wurde oder spätestens in der nächsten Ereignisphase. ')﻿,
(35, 'Unglaublicher Erfolg', 'Ein Bürger eures Reiches erschafft ein künstlerisches Meisterwerk, errichtet ein besonders eindrucksvolles Gebäude oder bringt deinem Reich anderweitig Ruhm. Eure Ehre steigt um 1, ihr erhaltet 1W6 BP und die Unruhe sinkt um 1. Ihr bekommt bis zur nächsten Ereignisphase einen Bonus von +4 auf eure Wirtschaftswürfe. ')﻿,
(36, 'Unglaubliches Verbrechen', 'Ein Serienmörder, Brandstifter, tollkühner Dieb oder mutiger Bandit plagt euer Königreich. Führt 2 Stabilitätsproben durch, addiert dabei den Recht-Wert eurer Siedlung und subtrahiert ihren Verbrechen-Wert. Wenn ihr beide Proben besteht, wird der Kriminelle geschnappt, bevor es irgendwelche negativen Auswirkungen durch dieses Ereignis gibt. Wenn ihr bei einer Probe scheitert, entkommt der Kriminelle, die Unruhe steigt dadurch um 1 und das Ereignis ist andauernd. Wenn ihr bei beiden Proben scheitert, macht der Kriminelle die Autoritäten zum Narren; Recht und Loyalität sinken um 1, ihr verliert 1W4 BP, die Unruhe steigt um 2 und das Ereignis ist andauernd. ')﻿,
(37, 'Vandalen', 'Rowdys und Regimekritiker rufen zum Auf-stand auf und zerstören Gebäude. Führt eine Loyalitäts- und eine Stabilitäts-Probe durch. Wenn ihr beide Proben besteht, werden die Vandalen gestoppt, bevor euer Reich irgendwelche Nachteile davon hat. Wenn eine dieser Proben fehlschlägt, sinkt Gesellschaft um 1 und ein zufälliges Gebäude in der Stadt wird beschädigt. Wenn beide Proben fehl-schlagen, wird ein Gebäude zerstört (Unruhe steigt dabei um 1 für jedes Grundstück, welches das Gebäude belegt hat) und 1W3 zufällige andere Gebäude werden beschädigt. Ein beschädigtes Gebäude bringt keine Vorteile, bis es nicht für die halben Baukosten repariert wurde.')﻿,
(38, 'Verbesserungsforderung', 'Eure Bürger fordern, dass eine bestimmte Geländefeld-Verbesserung gebaut (01-75) oder abgerissen (76-100) wird. Der Verbesserungstyp wird zufällig aus den möglichen Verbesserungstypen ausgewählt. Wenn der Forderung in der nächsten Ereignisphase nicht nachgegangen wurde, steigt die Unruhe um 1. Alternativ könnt ihr eine Loyalitätsprobe dazu benutzen, die Forderungen der Bürger zu unterdrücken. Bei einem Erfolg sinkt die Loyalität um 2 und die Unruhe steigt um 1.')﻿,
(39, 'Wirtschaftlicher Aufschwung', 'Der Handel erlebt ungeahnte Höhen! 1W6 BP wandern in eure Schatzkammer. Jedes Mal, wenn ihr eine 6 würfelt, würfelt erneut und addiert die Ergebnisse.')﻿,
(40, 'Wohlhabender Einwanderer', 'Ein reicher Händler oder ein Adeliger aus einem anderen Land ist beeindruckt von eurem Reich und fragt, ob er ein Herrenhaus (01-75) oder eine Adelsvilla (76-100) in dieser Siedlung errichten darf (auf eigene Kosten natürlich). Wenn ihr dies erlaubt, erhaltet ihr die normalen Vorteile durch dieses Gebäude. ')﻿;
﻿
-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events_general_roll`
--

CREATE TABLE `events_general_roll` (
  `l_id` bigint(20) NOT NULL,
  `vc_name` varchar(255) NOT NULL,
  `i_percentage` int(11) NOT NULL,
  `b_roll_again` tinyint(1) NOT NULL,
  `vc_table_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
﻿
--
-- Daten für Tabelle `events_general_roll`
--

﻿INSERT INTO `events_general_roll` (`l_id`, `vc_name`, `i_percentage`, `b_roll_again`, `vc_table_id`) VALUES
(1, 'Segen der Natur und erneut würfeln', 2, 1, '30')﻿,
(2, 'Gutes Wetter und erneut würfeln', 4, 1, '13')﻿,
(3, 'Positiv Königreich', 25, 0, 'positive kingdom')﻿,
(4, 'Negativ Königreich', 50, 0, 'negative kingdom')﻿,
(5, 'Positiv Siedlung', 75, 0, 'positive settlement')﻿,
(6, 'Negativ Siedlung', 96, 0, 'negative settlement')﻿,
(7, 'Banditenaktivität und erneut würfeln', 97, 1, '4')﻿,
(8, 'Hausbesetzer und erneut würfeln', 98, 1, '14')﻿,
(9, 'Monsterangriff und erneut würfeln', 99, 1, '19')﻿,
(10, 'Vandalen  und erneut würfeln', 100, 1, '37')﻿;
﻿
-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events_roll`
--

CREATE TABLE `events_roll` (
  `l_id` bigint(20) NOT NULL,
  `l_event_id` bigint(20) NOT NULL,
  `i_percentage` int(11) NOT NULL,
  `vc_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
﻿
--
-- Daten für Tabelle `events_roll`
--

﻿INSERT INTO `events_roll` (`l_id`, `l_event_id`, `i_percentage`, `vc_type`) VALUES
(1, 2, 7, 'positive kingdom')﻿,
(2, 7, 12, 'positive kingdom')﻿,
(3, 10, 20, 'positive kingdom')﻿,
(4, 39, 31, 'positive kingdom')﻿,
(5, 9, 39, 'positive kingdom')﻿,
(6, 22, 53, 'positive kingdom')﻿,
(7, 13, 66, 'positive kingdom')﻿,
(8, 27, 75, 'positive kingdom')﻿,
(9, 30, 85, 'positive kingdom')﻿,
(10, 24, 90, 'positive kingdom')﻿,
(11, 28, 100, 'positive kingdom')﻿,
(12, 20, 5, 'negative kingdom')﻿,
(13, 4, 18, 'negative kingdom')﻿,
(14, 11, 28, 'negative kingdom')﻿,
(15, 21, 41, 'negative kingdom')﻿,
(16, 38, 51, 'negative kingdom')﻿,
(17, 15, 59, 'negative kingdom')﻿,
(18, 23, 64, 'negative kingdom')﻿,
(19, 19, 76, 'negative kingdom')﻿,
(20, 31, 84, 'negative kingdom')﻿,
(21, 25, 92, 'negative kingdom')﻿,
(22, 29, 100, 'negative kingdom')﻿,
(23, 33, 14, 'positive settlement')﻿,
(24, 10, 26, 'positive settlement')﻿,
(25, 6, 40, 'positive settlement')﻿,
(26, 1, 46, 'positive settlement')﻿,
(27, 35, 58, 'positive settlement')﻿,
(28, 26, 66, 'positive settlement')﻿,
(29, 3, 72, 'positive settlement')﻿,
(30, 34, 81, 'positive settlement')﻿,
(31, 5, 93, 'positive settlement')﻿,
(32, 40, 100, 'positive settlement')﻿,
(33, 12, 10, 'negative settlement')﻿,
(34, 18, 17, 'negative settlement')﻿,
(35, 16, 25, 'negative settlement')﻿,
(36, 8, 33, 'negative settlement')﻿,
(37, 11, 41, 'negative settlement')﻿,
(38, 15, 49, 'negative settlement')﻿,
(39, 17, 54, 'negative settlement')﻿,
(40, 19, 61, 'negative settlement')﻿,
(41, 31, 66, 'negative settlement')﻿,
(42, 36, 74, 'negative settlement')﻿,
(43, 32, 80, 'negative settlement')﻿,
(44, 14, 90, 'negative settlement')﻿,
(45, 37, 100, 'negative settlement')﻿;
﻿
--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`l_id`);

--
-- Indizes für die Tabelle `events_general_roll`
--
ALTER TABLE `events_general_roll`
  ADD PRIMARY KEY (`l_id`);

--
-- Indizes für die Tabelle `events_roll`
--
ALTER TABLE `events_roll`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `fk_event_id_events_roll_events` (`l_event_id`);
﻿
--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `l_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT für Tabelle `events_general_roll`
--
ALTER TABLE `events_general_roll`
  MODIFY `l_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `events_roll`
--
ALTER TABLE `events_roll`
  MODIFY `l_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
﻿
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `events_roll`
--
ALTER TABLE `events_roll`
  ADD CONSTRAINT `fk_event_id_events_roll_events` FOREIGN KEY (`l_event_id`) REFERENCES `events` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE;
﻿COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
