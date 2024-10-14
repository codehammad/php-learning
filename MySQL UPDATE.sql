UPDATE personal
SET age="25"
WHERE id = 3; /* where clause dana lazmi ha warna ya sab ma change kar da ga*/

UPDATE personal
SET age="21",phone="92955555"
WHERE id = 4;

UPDATE personal
SET age="24"
WHERE id IN(3,4);/* ak sath multiple rows ka data change */