use c9;

DROP TABLE IF EXISTS school_types;
CREATE TABLE school_types ;

DROP TABLE IF EXISTS schools;
CREATE TABLE schools;

DROP TABLE IF EXISTS roles;
CREATE TABLE roles;

DROP TABLE IF EXISTS persons;
CREATE TABLE persons;

DROP TABLE IF EXISTS programmes;
CREATE TABLE programmes;

DROP TABLE IF EXISTS  specialisations;
CREATE TABLE specialisations;

DROP TABLE IF EXISTS programmes_schools;
CREATE TABLE programmes_schools;

set foreign_key_checks=0;
truncate table schools;
truncate table school_types;
truncate table persons;
truncate table roles;
truncate table programmes;
truncate table specialisations;
truncate table programmes_schools;
set foreign_key_checks=1;


insert into school_types values
    (null,'Högskoleförberedande','Skolan fokuserar på högskoleförberedande studier'),
    (null,'Yrkesförberedande','Skolan fokuserar på annat');
select * from school_types;

insert into schools values
    (null,'Berzan','En bra skola',1),
    (null,'Katedral','En nästan lika bra skola',1),
    (null,'REAL','En helt annan skola',2);
select * from schools;

insert into roles values
    (null,'Lärare','Det finaste man kan vara'),
    (null,'Rektor','Ett viktigt jobb');
select * from roles;

insert into persons values
    (null,'Johan','Glad fisk med självdistans',1,1),
    (null,'My','Keep calm and carry on',1,1),
    (null,'Mattias','Tränaren',1,2),
    (null,'Petra','Piskan',3,2);
select * from persons;


insert into programmes values
    (null,'TE','Teknikprogrammet'),
    (null,'NA','Naturvetenskapsprogrammet'),
    (null,'EK','Ekonomiprogrammet');
select * from programmes;

insert into specialisations values
    (null,'IT','Informations- och medieteknik',1),
    (null,'TV','Teknikvetenskap',1),
    (null,'DE','Design och produktutveckling',1),
    (null,'NA','Naturvenskap',2),
    (null,'NA','Spets',2);
select * from specialisations;

insert into programmes_schools values
    (1,1),
    (1,2),
    (2,1),
    (3,2);
select * from programmes_schools;