-- EXERCISE 9.1.2   SQL DATABASE BUILDING AND POPULATING

USE codeup_test_db;

TRUNCATE TABLE albums;

INSERT INTO albums (id, location, name, date_established, area_in_acres)
VALUES 
('29.25 N, 103.25 W', 'Big Bend', 'June 12, 1944', '801163.21'),
('36.06 N, 112.14 W', 'Grand Canyon', 'February 26, 1919', '1217403.32'),
('47.97 N, 123.50 W', 'Olympic', 'June 29, 1938', '922650.86'),
('41.30 N, 124.00 W', 'Redwood', 'October 2, 1968', '112512.05'),
('44.60 N, 110.50 W', 'Yellowstone', 'March 1, 1872', '2219790.71'),
('40.40 N, 105.58 W', 'Rocky Mountain', 'January 26, 1915', '265828.41'),
('38.42 N, 78.35 W', 'Shenandoah', 'May 22, 1926', '199045.23'),
('48.50 N, 92.88 W', 'Voyageurs', 'January 8, 1971' '218200.17'),
('37.83 N, 119.50 W', 'Yosemite', 'October 1, 1890', '761266.19'),
('37.30 N, 113.05 W', 'Zion', 'November 19, 1919', '146597.60'),
);