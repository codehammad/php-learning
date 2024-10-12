SELECT * FROM personal
WHERE NAME LIKE "a%";

SELECT * FROM personal
WHERE NAME LIKE "%ma%";

SELECT * FROM personal
WHERE NAME LIKE "%d";

SELECT * FROM personal
WHERE NAME LIKE "_a%"; /* ya underscore wildcard ak character ka liya hota ha*/

SELECT * FROM personal
WHERE NAME LIKE "h_m%";

SELECT * FROM personal
WHERE BINARY NAME LIKE "A%";/* binary for case sensitive*/

SHOW WARNINGS;