CREATE TABLE test(
id INT NOT NULL UNIQUE,
name VARCHAR(50) NOT NULL,
age INT NOT NULL,
gender VARCHAR(1) NOT NULL,
phone VARCHAR(12) NOT NULL UNIQUE,
birth_date DATE UNIQUE
);