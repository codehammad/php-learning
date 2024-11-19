CREATE VIEW studentdata
AS
SELECT id, name, course_name
FROM students s
INNER JOIN courses c ON s.courses = c.course_id
INNER JOIN city ci ON s.city = ci.cid;

-- change view
ALTER VIEW studentdata
AS
SELECT id, name, course_name
FROM students s
INNER JOIN courses c ON s.courses = c.course_id
INNER JOIN city ci ON s.city = ci.cid;

-- same as change
CREATE OR REPLACE VIEW studentdata
AS
SELECT id, name, course_name
FROM students s
INNER JOIN courses c ON s.courses = c.course_id
INNER JOIN city ci ON s.city = ci.cid;

-- rename view
RENAME TABLE studentdata
TO studentinfo;

-- del view
DROP VIEW studentinfo;