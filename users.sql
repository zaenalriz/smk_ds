CREATE table users (
  id_user INT AUTO_INCREMENT PRIMARY KEY, 
  nama VARCHAR(255) NOT NULL, 
  pelajaran VARCHAR(50) NOT NULL, 
  nilai INT NOT NULL, 
  tanggal TIMESTAMP DEFAULT NULL
);
INSERT INTO users (nama, pelajaran, nilai, tanggal) 
VALUES 
  (
    'Budi Setiawan', 'Matematika', 90, 
    '2022-03-09'
  ), 
  (
    'Siti Rahayu', 'Matematika', 
    85, '2022-03-09'
  ), 
  (
    'Ahmad Prabowo', 'Matematika', 78, '2022-03-08'
  ), 
  (
    'Dewi Kusuma', 'Matematika', 95, '2022-03-08'
  ), 
  (
    'Iwan Santoso', 'Fisika', 88, '2022-03-06'
  ), 
  (
    'Anita Susanti','Fisika', 75, '2022-03-02'
  ), 
  (
    'Joko Widodo', 'Fisika', 92, '2022-03-06'
  ), 
  (
    'Ratna Dewi','Kimia', 87, '2022-03-03'
  ), 
  (
    'Surya Pratama', 'Kimia', 80, '2022-03-03'
  ), 
  (
    'Dian Sari', 'Kimia', 96, '2022-03-04'
  );
