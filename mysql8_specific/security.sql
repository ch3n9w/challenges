DROP DATABASE IF EXISTS security;
CREATE database security;
USE security;
CREATE TABLE users
		(
		id int(3) NOT NULL AUTO_INCREMENT,
		username varchar(20) NOT NULL,
		password varchar(20) NOT NULL,
		PRIMARY KEY (id)
		);
CREATE TABLE flag
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		fl4gggg varchar(256) NOT NULL,
		PRIMARY KEY (id)
		);

INSERT INTO security.users (id, username, password) VALUES ('1', 'Dumb', 'Dumb'), ('2', 'Angelina', 'I-kill-you'), ('3', 'Dummy', 'p@ssword'), ('4', 'secure', 'crappy'), ('5', 'stupid', 'stupidity'), ('6', 'superman', 'genious'), ('7', 'batman', 'mob!le'), ('8', 'admin', 'admin');

INSERT INTO security.flag (id, fl4gggg) VALUES (1, 'flag{hello_man}');

