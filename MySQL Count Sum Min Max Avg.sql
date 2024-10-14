SELECT COUNT(NAME) FROM test1;

SELECT COUNT(distinct city) AS COUNT FROM test1;

SELECT MAX(percentage) AS Percentage FROM test1;

SELECT NAME, city, percentage FROM test1
WHERE percentage = (SELECT MIN(percentage) FROM test1);/* also show name city*/

SELECT SUM(percentage) AS Sum FROM test1;

SELECT AVG(percentage) AS Average FROM test1;