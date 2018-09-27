CREATE DATABASE aptech_php_14_NVPHONG;
USE aptech_php_14_nvphong;
CREATE TABLE users(id int AUTO_INCREMENT PRIMARY KEY,
name varchar(50), email varchar(50),password varchar(50),created_date timestamp
);
INSERT INTO users (name, email,password)
VALUES 
('phong', 'phong@gmail.com', '123456'),('Nam','@gmail.com','123454');
SELECT * FROM users;
truncate table users;


CREATE TABLE roles (id int AUTO_INCREMENT PRIMARY KEY,name varchar(50));
TRUNCATE TABLE rales;
INSERT INTO roles (name)
VALUES ('director');
TRUNCATE TABLE roles;
SELECT * FROM roles;

CREATE TABLE role_user (id int AUTO_INCREMENT PRIMARY KEY, user_id varchar(50), role_id varchar(50));
INSERT INTO role_user (user_id, role_id)
VALUES ('2','1');
SELECT * FROM role_user;

SELECT * FROM users WHERE name='nam';
SELECT *FROM role_user WHERE user_id=2;
SELECT *FROM roles WHERE id =3;
SELECT *FROM roles WHERE id =1;  

SELECT A.name FROM users
JOIN (SELECT id,name FROM roles) as A
JOIN(SELECT user_id,role_id FROM role_user) as B
ON A.id =B.role_id AND users.id = B.user_id
WHERE users.name = 'phong';
