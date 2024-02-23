CREATE TABLE login (
    email VARCHAR(25) NOT NULL,
    password VARCHAR(25) NOT NULL,
    UNIQUE KEY (email)
);
