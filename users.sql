<<<<<<< HEAD
=======
INSERT INTO `kelas` (`id`, `kelas`) VALUES
(1, 'RPL 1'),
(2, 'RPL 2'),
(3, 'RPL 3'),
(4, 'RPL 4'),
(5, 'RPL 5');


INSERT INTO `siswa` (`id`, `nama`, `umur`, `kelas_id`) VALUES
(1, ' Chantika', 16, 1),
(2, 'Reza ', 16, 2),
(3, 'Alifah Diyan', 16, 2),
(4, 'Reval Meilih', 16, 1),
(5, 'Ratu Regita', 16, 2),
(6, 'aref yuliana', 16, 3),
(7, 'Rafie', 16, 1),
(8, 'AHMAD ', 16, 2),
(9, 'Rizky Trisno', 16, 4);


>>>>>>> b991cc2411bccfbff9d6ed5e4e1501a365e6bc89
CREATE TABLE `user_admin` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL
<<<<<<< HEAD
);
=======
);
>>>>>>> b991cc2411bccfbff9d6ed5e4e1501a365e6bc89
