-- Active: 1744162006557@@localhost@3306@in453
CREATE USER 'IN453A'@'localhost' IDENTIFIED BY 'AccessA111!';
CREATE USER 'IN453B'@'localhost' IDENTIFIED BY 'AccessB222!';
CREATE USER 'IN453C'@'localhost' IDENTIFIED BY 'AccessC333!';

GRANT SELECT ON IN453.IN453A TO 'IN453A'@'localhost';
GRANT SELECT ON IN453.IN453B TO 'IN453A'@'localhost';
GRANT SELECT ON IN453.IN453C TO 'IN453A'@'localhost';

GRANT SELECT ON IN453.IN453B TO 'IN453B'@'localhost';

GRANT SELECT ON IN453.IN453C TO 'IN453C'@'localhost';