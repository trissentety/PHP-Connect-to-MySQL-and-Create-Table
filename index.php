<?php
include("database.php")

//How to connect
//Via MySQL i Extension or PDO (PHP Data Objects). PDO Allows connecting to more than one database.

//If using xampp, open control panel 
//> make sure module sql is started 
//> admin (http://localhost/phpmyadmin/) 
//> database tab
//> choose database name & create database
//> click 3 lines
//> user accounts
//> information used is hostname, user name of root and password


//Create table
//go to name of database created (http://localhost/phpmyadmin/index.php?route=/database/structure&db=businessdb) 
//>Create table name, in this case users
//>Number of columns, in this case 4
//>Press create

//Column 1 Name= id, Type= INT, Length/Values= leave blank, default=None, Collation (Characters)= Leave blank, Null= Unchecked, Index = PRIMARY, Index settings= Press Go, A_I (Auto Increment)= Check

//Column 2 Name= user, Type= VARCHAR, Length/Values= 25, default=None, Collation (Characters)= Leave blank, Null= Unchecked, Index = UNIQUE, Index settings= Press Go, A_I (Auto Increment)= Unchecked

//Column 3 Name= pass, Type= CHAR, Length/Values= 255, default=None, Collation (Characters)= Leave blank, Null= Unchecked, Index = None, A_I (Auto Increment)= Unchecked

//Column 4 Name= register-date, Type= DATE, Length/Values= leave blank, default= CURRENT_TIMESTAMP, Collation (Characters)= Leave blank, Null= Unchecked, Index = none, A_I (Auto Increment)= Unchecked

//Preview SQL Code to see what is written automatically:
// CREATE TABLE `businessdb`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `user` VARCHAR(25) NOT NULL DEFAULT CURRENT_TIMESTAMP , `pass` CHAR(255) NOT NULL , `register-date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`), UNIQUE (`user`)) ENGINE = InnoDB;

//>Press Save

//>Shows table. Under 4 table rows press Browse
//>Press Insert to add rows manually with phpMyAdmin
//>column id: function= leave blank, value= leave blank
//>column user: function= leave blank, value= SpongebobSquarepants
//>column pass: function= leave blank, pass= gary321
//>column register-date: leave unchanged


//Press Go
//Displays what SQL Query should look like:
//INSERT INTO `users` (`id`, `user`, `pass`, `register-date`) VALUES (NULL, 'SpongebobSquarepants', 'gary321', current_timestamp());

//>Press Browse
//>View created row, should look something like:
//> Edit | Copy | Delete | 1 |SpongebobSquarepants | gary321 | 2024-01-21 05:38:10
//> Check box left of edit
//> Press delete
//> Press Ok




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Greetings<br>
</body>

</html>

<!--view main web page http://localhost/website/ -->