-- script to create pkr database

DROP DATABASE pkr;
CREATE DATABASE pkr;
USE pkr;


CREATE TABLE person
(emailid VARCHAR(30) NOT NULL, 
fname VARCHAR(30),
lname VARCHAR(30),
city VARCHAR(30),
state CHAR(2),
zip VARCHAR(10),
PRIMARY KEY (emailid)
);

CREATE TABLE tkey
(kid SMALLINT(3) NOT NULL,
ktype VARCHAR(30),
kmaterial VARCHAR(30),
PRIMARY KEY(kid)
);

CREATE TABLE room
(rid SMALLINT(2) NOT NULL,
rtype VARCHAR(30),
PRIMARY KEY(rid)
);

CREATE TABLE personkey
(emailid VARCHAR(30), 
kid SMALLINT(3),
FOREIGN KEY (emailid) REFERENCES person(emailid),
FOREIGN KEY (kid) REFERENCES tkey(kid)
);

CREATE TABLE keyroom
(kid SMALLINT(3),
 rid SMALLINT(2),
FOREIGN KEY (kid) REFERENCES tkey(kid),
FOREIGN KEY (rid) REFERENCES room(rid)
);

-- inserting records into person
INSERT INTO person VALUES
(1001,'bindu','vneni','maryville','MO','64468');

INSERT INTO person VALUES
(1002,'ane','miller','sully station','VA','20120');

INSERT INTO person VALUES
(1003,'jhon','chang','mechanics burg','PA','15006');

INSERT INTO person VALUES
(1004,'dhiren','guduru','maryville','MO','64469');

INSERT INTO person VALUES
(1005,'Lee','dora','washburn','WI','53001');

INSERT INTO person VALUES
(1006,'alissa','edwards','osseo','WI','53001');

INSERT INTO person VALUES
(1007,'pulkit','bansal','maryville','MO','64468');


-- inserting records into tkey
INSERT INTO tkey VALUES (101, 'master','steel');
INSERT INTO tkey VALUES (122, 'normal','aluminium');
INSERT INTO tkey VALUES (134, 'normal','plastic');
INSERT INTO tkey VALUES (102, 'master','aluminium');
INSERT INTO tkey VALUES (108, 'normal','steel');
INSERT INTO tkey VALUES (123, 'normal','steel');
INSERT INTO tkey VALUES (142, 'master','aluminium');

-- inserting records into room
INSERT INTO room VALUES (15, 'double');
INSERT INTO room VALUES (12, 'single');
INSERT INTO room VALUES (13, 'deluxe');
INSERT INTO room VALUES (20, 'standard');
INSERT INTO room VALUES (25, 'double');
INSERT INTO room VALUES (23, 'single');
INSERT INTO room VALUES (22, 'single');

--inserting records into personkey
INSERT INTO personkey VALUES (1001,101);
INSERT INTO personkey VALUES (1002,122);
INSERT INTO personkey VALUES (1003,134);
INSERT INTO personkey VALUES (1004,102);
INSERT INTO personkey VALUES (1005,108);
INSERT INTO personkey VALUES (1006,123);
INSERT INTO personkey VALUES (1007,142);

--inserting records into keyroom
INSERT INTO keyroom VALUES (101,15);
INSERT INTO keyroom VALUES (122,12);
INSERT INTO keyroom VALUES (134,13);
INSERT INTO keyroom VALUES (102,20);
INSERT INTO keyroom VALUES (108,25);
INSERT INTO keyroom VALUES (123,23);
INSERT INTO keyroom VALUES (142,22);









