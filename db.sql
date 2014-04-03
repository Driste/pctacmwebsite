/** Creates the Database for the PCT ACM website.   **/
/** Author: Tyler Carper                            **/
/** Date: 4/1/2014                                  **/

CREATE DATABASE registration collate utf8_general_ci;

USE registration;

CREATE TABLE lanReg (
	id         int		       NOT NULL	   AUTO_INCREMENT,
    fName      varchar(64)     NOT NULL,
	lName      varchar(64)     NOT NULL,
	email      varchar(100),
	plain      int(2),
	pepperoni  int(2),
	sausage    int(2),
        PRIMARY KEY (id)
);

CREATE TABLE byocReg (
	id         int		       NOT NULL    	AUTO_INCREMENT,
	fName      varchar(64)     NOT NULL,
	lName      varchar(64)     NOT NULL,
	email      varchar(100),
	pctId      int(9),
	bringing   varchar(64),
    games      text,
        PRIMARY KEY (id)
);