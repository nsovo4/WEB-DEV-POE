CREATE DATABASE IF NOT EXISTS PastimesDB;

USE PastimesDB;

CREATE TABLE IF NOT EXISTS Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);



CREATE TABLE tblUser (
  
)

CREATE TABLE tblAdmin (
  
)

CREATE TABLE tblAorder (
  
)

CREATE TABLE tblClothes (
  
)