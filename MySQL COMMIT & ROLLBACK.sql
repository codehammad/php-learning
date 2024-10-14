SELECT * FROM test1;

UPDATE test1
SET age="23"
WHERE id = 6;

COMMIT;

UPDATE test1
SET percentage="95"
WHERE id = 5;

ROLLBACK;