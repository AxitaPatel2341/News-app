-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 10:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymistakes`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Message`, `id`) VALUES
('student', 'axita@yahoo', 'bsx xahb xhs sb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `heading` varchar(10000) NOT NULL,
  `article` mediumtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `article`, `date`) VALUES
(1, 'Cybercrime department has 7 basic tips for you to stay safe online', 'October is being celebrated as Cyber Security Awareness Month by the ministry of home affairs (MoH).To promote awareness about cyber safety among netizens, Cyber Dost, the cybersecurity handle of the ministry, on twitter has shared some tricks and tips. this tip amis to help online users to keep alert from some cyber attacks.', '2020-10-13'),
(2, 'Microsoft and Other Tech Companies Take Down TrickBot Botnet', 'Days after the US Government took steps to disrupt the notorious TrickBot botnet, a group of cybersecurity and tech companies has detailed a separate coordinated effort to take down the malware\'s back-end infrastructure.\r\n\r\nThe joint collaboration, which involved Microsoft\'s Digital Crimes Unit, Lumen\'s Black Lotus Labs, ESET, Financial Services Information Sharing and Analysis Center (FS-ISAC), NTT, and Broadcom\'s Symantec, was undertaken after their request to halt TrickBot\'s operations were granted by the US District Court for the Eastern District of Virginia.', '2020-10-13'),
(3, 'Microsoft Warns Android Users About A New Ransomware', 'Microsoft has warned about a new strain of mobile ransomware that takes advantage of incoming call notifications and Android\'s Home button to lock the device behind a ransom note.\r\n\r\nThe findings concern a variant of a known Android ransomware family dubbed \"MalLocker.B\" which has now resurfaced with new techniques, including a novel means to deliver the ransom demand on infected devices as well as an obfuscation mechanism to evade security solutions.', '2020-10-12'),
(4, '55 New Security Flaws Reported in Apple Software and Services', 'A team of five security researchers analyzed several Apple online services for three months and found as many as 55 vulnerabilities, 11 of which are critical in severity.\r\n\r\nThe flaws — including 29 high severity, 13 medium severity, and 2 low severity vulnerabilities — could have allowed an attacker to \"fully compromise both customer and employee applications, launch a worm capable of automatically taking over a victim\'s iCloud account, retrieve source code for internal Apple projects, fully compromise an industrial control warehouse software used by Apple, and take over the sessions of Apple employees with the capability of accessing management tools and sensitive resources.\"\r\n\r\nThe flaws meant a bad actor could easily hijack a user\'s iCloud account and steal all the photos, calendar information, videos, and documents, in addition to forwarding the same exploit to all of their contacts.', '2020-10-09'),
(5, 'Researchers Find Vulnerabilities in Microsoft Azure Cloud Service', 'As businesses are increasingly migrating to the cloud, securing the infrastructure has never been more important.\r\n\r\nNow according to the latest research, two security flaws in Microsoft\'s Azure App Services could have enabled a bad actor to carry out server-side request forgery (SSRF) attacks or execute arbitrary code and take over the administration server.\r\n\r\n\"This enables an attacker to quietly take over the App Service\'s git server, or implant malicious phishing pages accessible through Azure Portal to target system administrators,\" cybersecurity firm Intezer said in a report published today and shared with The Hacker News.\r\n\r\nDiscovered by Paul Litvak of Intezer Labs, the flaws were reported to Microsoft in June, after which the company subsequently addressed them.\r\n\r\n\"As a general best practice, runtime cloud security is an important last line of defense and one of the first actions you can to reduce risk, since it can detect malicious code injections and other in-memory threats that take place after a vulnerability has been exploited by an attacker.\"', '2020-10-08'),
(6, 'ALERT! Hackers targeting IoT devices with a new P2P botnet malware', 'Cybersecurity researchers have taken the wraps off a new botnet hijacking Internet-connected smart devices in the wild to perform nefarious tasks, mostly DDoS attacks, and illicit cryptocurrency coin mining.\r\n\r\nDiscovered by Qihoo 360\'s Netlab security team, the HEH Botnet — written in Go language and armed with a proprietary peer-to-peer (P2P) protocol, spreads via a brute-force attack of the Telnet service on ports 23/2323 and can execute arbitrary shell commands.\r\n\r\nThe researchers said the HEH botnet samples discovered so far support a wide variety of CPU architectures, including x86(32/64), ARM(32/64), MIPS(MIPS32/MIPS-III), and PowerPC (PPC).\r\n\r\nThe botnet, despite being in its early stages of development, comes with three functional modules: a propagation module, a local HTTP service module, and a P2P module.', '2020-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `username`, `password`) VALUES
(3, 'abc@example.com', 'student', '123456789'),
(4, 'abcd@mnop.gov', 'mona', 'mona234567'),
(7, 'axitapatel@yahoo.com', 'admin', 'vvvvv'),
(9, 'xyz@example.com', 'maria', 'maria123'),
(10, 'mnop@hb.cm', 'riya', 'riya123'),
(16, 'xyz@example.gov', 'axiii', 'axiii'),
(19, 'axitapatel123@gmail.com', 'Abcd', '1234abcd@'),
(21, 'arry@abc.vb', 'arry', 'abcdefgh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING HASH,
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
