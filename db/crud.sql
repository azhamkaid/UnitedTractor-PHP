

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `umur` int not null
);


INSERT INTO `mahasiswa` (`id`, `nama`, `alamat`,`umur`) VALUES
(1, 'ahmad zaki', 'bandung', 25),
(3, 'alvin', 'jakarta',24);

