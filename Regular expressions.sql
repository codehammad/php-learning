SELECT * FROM personal
WHERE NAME REGEXP 'a';

SELECT * FROM personal
WHERE NAME REGEXP '^H';

SELECT * FROM personal
WHERE NAME REGEXP 'd$';

SELECT * FROM personal
WHERE NAME REGEXP '[am]'; /* search any a and m */

SELECT * FROM personal
WHERE NAME REGEXP '^[a-m]';

SELECT * FROM personal
WHERE NAME REGEXP '[a-m]s';
