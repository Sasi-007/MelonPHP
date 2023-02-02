# MelonPHP

DBname: melonjobs

Run below sql commands to create table and insert sample data for testing purpose 

CREATE TABLE `jobs` (
  `title` varchar(900) NOT NULL,
  `url` varchar(900) NOT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `salary` varchar(200) DEFAULT NULL
);

INSERT INTO `jobs` (`title`, `url`, `qualification`, `salary`) VALUES
('Indian Institute of Science Education and Research Tirupati for Junior Research Fellow - 2 vacancies', 'test.php', NULL, NULL),
('sasi Institute of Science Education and Research Tirupati for Junior Research Fellow - 2 vacancies', 'home.php', NULL, NULL),
('melon Institute of Science Education and Research Tirupati for Junior Research Fellow - 2 vacancies', 'home.php', 'BE', '25K'),
('melon', 'melon.php', '12', '25k');
