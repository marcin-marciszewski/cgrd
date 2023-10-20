### Database creation:
##### Connect to mysql and run queries :
#### 
######  Create the 'crdg' database:
#### 
```
CREATE DATABASE crdg;
```
######  Switch to the 'crdg' database:
#### 
```
USE crdg;
```
######  Create the 'users' table:
#### 
```
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
```
######  Create the 'news' table:
#### 
```
CREATE TABLE news (
    news_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);
```

######  Insert admin user:
#### 
```
INSERT INTO users (username, password) VALUES ('admin', 'test');
```