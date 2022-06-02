--@block
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT NOT NULL,
    name varchar(255) NOT NULL UNIQUE,
    password varchar(255) NOT NULL,
    primary key (user_id)

);


--@block
SHOW DATABASES;


--@block
SHOW COLUMNS FROM users;

--@block
DROP TABLE users;

--@block

INSERT INTO users(name, password)
VALUES
('Garry', 'larom14'),
('Grami', '5421'),
('Guru', '5432'),
('Alfred', 'rrar');



--@block
TRUNCATE TABLE users;

--@block
SELECT * FROM users;


--@block
INSERT INTO users(name, password)
VALUES
('Murka', 'Parapetas');


--@block
IF EXISTS (SELECT * FROM users WHERE name = 'Murka')
BEGIN

INSERT INTO users(name, password)
VALUES
('Murka', 'Parapetas')
END
;


--@block
SELECT name
FROM users
WHERE EXISTS (SELECT * FROM users WHERE name = 'Murka');