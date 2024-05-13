CREATE DATABASE contactsystem;
USE contactsystem;

CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(100),
    email VARCHAR(100) NULL,
    phone VARCHAR(20)
);