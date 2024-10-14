SELECT * FROM foreign_table INNER JOIN city
ON foreign_table.city = city.cid; /* to show common tables data connected using foreign key*/

SELECT * FROM foreign_table f JOIN city c /* use alias(short name)*/
ON f.city = c.cid;

SELECT f.id,f.name,f.gender,c.cityname FROM foreign_table f JOIN city c
ON f.city = c.cid;

SELECT f.id,f.name,f.gender,c.cityname FROM foreign_table f JOIN city c
ON f.city = c.cid
WHERE f.gender = "Male"
ORDER BY f.name;