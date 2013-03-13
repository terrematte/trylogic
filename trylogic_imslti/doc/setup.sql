create database trylogicdb;
grant all on trylogicdb.* to user@'localhost' identified by 'pass';
grant all on trylogicdb.* to user@'127.0.0.1' identified by 'pass';

use trylogicdb;

drop table trylogicdb.blti_keys;
create table trylogicdb.blti_keys (
     id          INT NOT NULL AUTO_INCREMENT,
     oauth_consumer_key   VARCHAR(255) NOT NULL,
     secret      VARCHAR(255) NULL,
     name        VARCHAR(255) NULL,
     enterprise  INT NULL,
     created_at  DATETIME NOT NULL,
     updated_at  DATETIME NOT NULL,
     PRIMARY KEY (id)
 );

drop table trylogicdb.ads;
create table trylogicdb.ads (
     id          INT NOT NULL AUTO_INCREMENT,
     course_key  VARCHAR(255) NOT NULL,
     user_key    VARCHAR(255) NULL,
     user_name   VARCHAR(255) NULL,
     title       VARCHAR(255) NULL,
     description     TEXT NULL,
     created_at  DATETIME NOT NULL,
     updated_at  DATETIME NOT NULL,
     PRIMARY KEY (id)
 );

drop table trylogicdb.enroled;
create table trylogicdb.enroled (
     id         INT NOT NULL AUTO_INCREMENT,
     course_id  VARCHAR(255) NULL, 
     username   VARCHAR(255) NOT NULL,
     fullname   VARCHAR(255) NULL,
     firstname  VARCHAR(255) NULL,
     lastname   VARCHAR(255) NULL,
     email  	VARCHAR(255) NOT NULL,
     role  	INT NOT NULL,
     PRIMARY KEY (id)
 );


drop table trylogicdb.role;
create table trylogicdb.role (
     id         INT NOT NULL AUTO_INCREMENT,
     description   VARCHAR(255) NOT NULL,
     created_at  DATETIME NOT NULL,
     updated_at  DATETIME NOT NULL,
     PRIMARY KEY (id)
 ); 
 
drop table trylogicdb.course;
create table trylogicdb.course (
     id         INT NOT NULL AUTO_INCREMENT,
     name   VARCHAR(255) NOT NULL,
     PRIMARY KEY (id)
 ); 
  
drop table trylogicdb.task;
create table trylogicdb.task (
     id        		INT NOT NULL AUTO_INCREMENT,
     course_id  	INT NOT NULL,
     origin_task_id  	INT NULL,
     user_id         	INT NULL,
     name	    	VARCHAR(255) NOT NULL,
     description     	TEXT  NULL,
     PRIMARY KEY (id)
 ); 
