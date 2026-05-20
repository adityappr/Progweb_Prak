CREATE DATABASE IF NOT EXISTS db_sekolah;
USE db_sekolah;

CREATE TABLE IF NOT EXISTS siswa (
  id INT(10) NOT NULL AUTO_INCREMENT,
  nama VARCHAR(100) NOT NULL,
  kelas VARCHAR(50) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO siswa (nama, kelas) VALUES
('John Doe', '12'),
('Tim Berners-Lee', '12'),
('Queenel', '12');
