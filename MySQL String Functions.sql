SELECT id,UPPER(NAME) AS NAME,percentage
from test;

SELECT id,Lower(NAME) AS NAME,percentage
from test;

SELECT id,NAME,character_length(NAME) AS Characters,percentage
from test;

SELECT id,CONCAT(NAME,"-",percentage) AS Name
from test;

-- Concat_ws pahlai value ko har words ka beech repeat kar da ga
SELECT CONCAT_WS("Hammad","Fayyaz","Bappi") AS NAME;

SELECT LTRIM("    Hammad") AS NAME;

SELECT RTRIM("Hammad      ") AS NAME;

SELECT TRIM("         Hammad      ") AS NAME;

-- Search in String
SELECT POSITION("f" IN "Hammad Fayyaz") AS NAME;

SELECT INSTR("Hammad Fayyaz", "a") AS NAME;

SELECT LOCATE("a", "Hammad Fayyaz",8) AS NAME;

SELECT HEX("Hammad") AS VALUE;

SELECT FORMAT(255.3467,2) AS VALUE;

SELECT FIELD("ali","Hammad","Ali") AS VALUE;

-- Replace
SELECT REPLACE("Hammad Fayyaz","Fayyaz","Wow") AS VALUE;

-- Fill Spaces with items
SELECT RPAD("Hammad Fayyaz",6,"*") AS VALUE;

-- Return value from specifi point to (specific length ya optional ha)
SELECT SUBSTRING("Hammad Fayyaz",4,9) AS VALUE;