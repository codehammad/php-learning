-- If Statement
SELECT 
    id,
    NAME,
    percentage,
    IF(percentage >= 33, 'Pass', 'Fail') AS Result
FROM test;

-- Case Statement
SELECT id,NAME,percentage,
case
when percentage >=80 AND percentage <=100 then "Merit"
when percentage >=60 AND percentage <80 then "1st Division"
when percentage >=45 AND percentage <60 then "2nd Division"
when percentage >=33 AND percentage <45 then "3rd Division"
when percentage <33 then "Fail"
ELSE "Not Correct %"
END AS Grade
from test

-- Update Entries using Case Statement  run it in seperate file
UPDATE test
SET percentage = CASE 
                    WHEN id = 6 THEN 99
                    ELSE percentage
                 END
WHERE id = 6;



