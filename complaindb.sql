create database Compdb1;
use Compdb1;


create table members (
memberid int not null AUTO_INCREMENT,
login varchar(300) not null,
passwd varchar(30) not null,
Administrator varchar(300) not null,
PRIMARY KEY (memberid)
) ENGINE = INNODB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;

CREATE TABLE Comp(
refNum int unsigned NOT NULL AUTO_INCREMENT,
reported varchar(50) NOT NULL,
name varchar(100) NOT NULL,
surname varchar(100) NOT NULL,
physicaladdress varchar(100) NOT NULL,
contact varchar(30) NOT NULL,
emaila varchar(100) NOT NULL,
compDetail varchar(3000) NOT NULL,
checked varchar(20) not null,
dateRaised varchar(30) not null,
PRIMARY KEY (refNum)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2000;

CREATE TABLE suggestion(
refNumber int unsigned NOT NULL AUTO_INCREMENT,
name varchar(100) NOT NULL,
surname varchar(100) NOT NULL,
physicaladdress varchar(100) NOT NULL,
contact varchar(100) NOT NULL,
suggestion varchar(3000) NOT NULL,
dateRaised varchar(30) not null,
PRIMARY KEY (refNumber)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20000;

CREATE TABLE compliment(
refNumb int unsigned NOT NULL AUTO_INCREMENT,
name varchar(100) NOT NULL,
surname varchar(100) NOT NULL,
physicaladdress varchar(100) NOT NULL,
contact varchar(100) NOT NULL,
compliment varchar(3000) NOT NULL,
dateRaised varchar(30) not null,
PRIMARY KEY (refNumb)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20000;

CREATE TABLE fault(
refNo int unsigned NOT NULL AUTO_INCREMENT,
name varchar(100) NOT NULL,
surname varchar(100) NOT NULL,
physicaladdress varchar(100) NOT NULL,
contact varchar(100) NOT NULL,
emaila varchar(100) NOT NULL,
whereFault varchar(100) NOT NULL,
faultD varchar(3000) NOT NULL,
dateRaised varchar(30) not null,
PRIMARY KEY (refNo)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20000;

CREATE TABLE faultAction(
actNo int unsigned NOT NULL AUTO_INCREMENT,
name varchar(100) NOT NULL,
surname varchar(100) NOT NULL,
Designation varchar(100) NOT NULL,
contact varchar(100) NOT NULL,
emaila varchar(100) NOT NULL,
actionTaken varchar(100) NOT NULL,
dateRaised varchar(30) not null,
PRIMARY KEY (actNo)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20000;



INSERT INTO members(login, passwd, Administrator) VALUES ('muzey','123456','Administrator');


CREATE TABLE blogmembers(
memmberid int unsigned NOT NULL AUTO_INCREMENT,
name varchar(100) NOT NULL,
surname varchar(100) NOT NULL,
gender varchar(20) NOT NULL,
emaila varchar(100) NOT NULL,
password varchar(100) NOT NULL,
contact varchar(100) NOT NULL,
physicalAd varchar(500) NOT NULL,
curCity varchar(100) NOT NULL,
country varchar(100) NOT NULL,
dateRaised varchar(30) not null,
PRIMARY KEY (memmberid)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2000000;


Create Table statusmember(
statusid int unsigned NOT NULL AUTO_INCREMENT,
statusDetails varchar(10000) NOT NULL,
name varchar(100) NOT NULL,
surname varchar(100) NOT NULL,
dateRaised varchar(50) NOT NULL,
PRIMARY KEY (statusid)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3000000;

Create Table comments(
commentsid int unsigned NOT NULL AUTO_INCREMENT,
commentsDetails varchar(10000) NOT NULL,
name varchar(100) NOT NULL,
surname varchar(100) NOT NULL,
dateRaised varchar(50) NOT NULL,
statusid int NOT NULL REFERENCES statusmember(commentsid),
PRIMARY KEY (commentsid)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3000000;

Create Table likes(
likesid int unsigned NOT NULL AUTO_INCREMENT,
likesDetails varchar(10000) NOT NULL,
name varchar(100) NOT NULL,
surname varchar(100) NOT NULL,
dateRaised varchar(50) NOT NULL,
statusid int NOT NULL REFERENCES statusmember(commentsid),
PRIMARY KEY (likesid)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4000000;



