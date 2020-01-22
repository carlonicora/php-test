# PHP Test

Hello and thanks for taking the time to run this test. The test is designed to see how you approach PHP from an Object Oriented language, how you use Docker and xDebug.
Please note: knowledge of and experience wit _OOP_, _Docker_ and _xDebug_ are **required** to complete this test.

## Goals

There are 3 bugs in the setup or code. Your goal is to set up your machine from this docker image and find the three bugs.

You can also complete an additional step (_see below_).

## Setup

To set up the test, please follow the following steps:

1. Duplicate the file `.env.example` and name it `.env`
2. In terminal, navigate to the `.docker` subfolder
3. Run `docker-compose build` to build your image
4. Run `docker-compose up -d` to run the container
5. Run `docker exec -ti test-php bash` to access the container bash
6. Run `composer install`
7. Connect to MySQL and create the database `testdb` and the table `users` with the sql script provided below (MySQL user:`root` password:`root`)
8. Set up xDebug in your IDE to port `10001` on the server `localhost` and (if you need the root to `/var/www/html`)

### SQL scripts

Please use this script to create the `users` table:
```sql
CREATE TABLE `users`
(
 `userId`         int(11) NOT NULL AUTO_INCREMENT,
 `firstName`      varchar(255) NULL DEFAULT NULL ,
 `lastName`       varchar(255) NULL DEFAULT NULL ,
 `email`          varchar(255) NOT NULL ,

PRIMARY KEY (`userId`),
UNIQUE KEY `UK_users_email` (`email`)
);

INSERT INTO users (userId, firstName, lastName, email) VALUES (NULL, 'Anakin', 'Skywalker', 'anakin@skywalker.com'),(NULL, 'Luke', 'Skywalker', 'luke@skywalker.com'),(NULL, 'Rey', '', 'rey@nospoilers.com');
```

## Bugs!

Ok, there are three issues in the code and or setup. Your goal is to find them using xDebug. If you do step-by-step, you will be able to understand the structure of the MVC framework and find where the issues are.

Which are the three bugs?

1. 
2. 
3. 

## Additional Task

If you managed to set up the project and find the three bugs present in the code, you should see a list of Star Wars characters with their email addresses! No, you can expand the system by adding a new `model` to use the view `user` and display the user's data in a different way

## Notes

Just be yourself and do things as you would normally do.

**Good Luck**