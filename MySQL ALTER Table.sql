ALTER TABLE test
ADD Email VARCHAR(255);

-- change position
ALTER TABLE test
MODIFY Email VARCHAR(255)
AFTER NAME;

-- change datatype
ALTER TABLE test
MODIFY Email INT(10);

-- change name of column
ALTER TABLE test
CHANGE Email Email_id VARCHAR(255);

-- delete column
ALTER TABLE test
DROP COLUMN Email_id;

-- rename Table
ALTER TABLE test
RENAME tests;