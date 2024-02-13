cd C:\xampp\mysql\bin
mysqladmin -u root password your-root-password
mysql.exe -u root -p
CREATE USER 'Arduino'@'localhost' IDENTIFIED BY 'GenesisAggabao';
GRANT ALL PRIVILEGES ON *.* TO 'Arduino'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
CREATE DATABASE db_arduino CHARACTER SET = 'utf8' COLLATE = 'utf8_general_ci';
USE db_arduino;

CREATE TABLE tbl_temp (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	date DATE,
        time TIME,
        med_name VARCHAR(60),
        comp_num INT,
	comments VARCHAR(250),
	PRIMARY KEY (id)
);
