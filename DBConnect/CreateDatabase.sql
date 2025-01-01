CREATE DATABASE fnapsy;

USE fnapsy;

CREATE TABLE users (
    userId INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(25),
    userSurname VARCHAR (25),
    userGrade VARCHAR(10),
    userPassword TINYTEXT,
    isQuestionned INT(2),
    userEmail TINYTEXT
);