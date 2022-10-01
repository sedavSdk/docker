CREATE DATABASE IF NOT EXISTS appDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE appDB;
CREATE TABLE IF NOT EXISTS books (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  price INT(20) NOT NULL,
  description text NOT NULL,
  image text NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO books (price, description, image)
SELECT * FROM (SELECT '200', 'texts/t1.txt', 
                    'images/1.jpg') AS tmp
WHERE NOT EXISTS (
    SELECT price FROM books WHERE price = '200' AND description = 'texts/t1.txt' AND image = 'images/1.jpg'
) LIMIT 1;

INSERT INTO books (price, description, image)
SELECT * FROM (SELECT '290', 'texts/t2.txt', 'images/2.jpg') AS tmp
WHERE NOT EXISTS (
    SELECT price FROM books WHERE price = '290' AND description = 'texts/t2.txt' AND image = 'images/2.jpg'
) LIMIT 1;

INSERT INTO books (price, description, image)
SELECT * FROM (SELECT '520', 'texts/t3.txt', 'images/3.jpg') AS tmp
WHERE NOT EXISTS (
    SELECT price FROM books WHERE price = '520' AND description = 'texts/t3.txt' AND image = 'images/3.jpg'
) LIMIT 1;

INSERT INTO books (price, description, image)
SELECT * FROM (SELECT '199', 'texts/t4.txt', 'images/4.jpg') AS tmp
WHERE NOT EXISTS (
    SELECT price FROM books WHERE price = '199' AND description = 'texts/t4.txt' AND image = 'images/4.jpg'
) LIMIT 1;

CREATE TABLE IF NOT EXISTS users (user varchar(191) not null, passwd varchar(191), primary key (user));
INSERT INTO users VALUE ('sedav3', '{SHA}QL0AFWMIX8NRZTKeof9cXsvbvu8=');