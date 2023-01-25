-- GO TO IMPORT IN PHPMYADMIN AND UPLOAD THIS FILE TO REVIEW CODE
CREATE DATABASE IF NOT EXISTS loginsystem;
USE loginsystem;
CREATE TABLE users (
    usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersName varchar(128) NOT NULL,
    usersEmail varchar(128) NOT NULL,
    usersUid varchar(128) NOT NULL,
    usersPwd varchar(128) NOT NULL
);