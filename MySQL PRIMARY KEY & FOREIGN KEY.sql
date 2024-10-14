CREATE TABLE foreign_table (
    id INT,
    name VARCHAR(100),
    age INT,
    gender VARCHAR(10),
    city INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (city) REFERENCES city (cid)
);
INSERT INTO foreign_table (id, name, age, gender, city) VALUES
(1, 'Alice', 30, 'Female',2 ),
(2, 'Bob', 25, 'Male',3 ),
(3, 'Charlie', 28, 'Male', 1),
(4, 'Diana', 22, 'Female', 4),
(5, 'Ethan', 35, 'Male', 5);
