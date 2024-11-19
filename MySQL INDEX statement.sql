SELECT * FROM test;

CREATE INDEX stdname ON test (NAME);

-- chech table indexes
SHOW INDEX FROM test;

-- del index of column
DROP INDEX stdname ON test;