Create Database L11_Eke_52127_School;
Create table L11_Eke_52127_School.music_IE(
    id integer not null auto_increment unique,
    place varchar (70) not null,
    surname varchar (70) not null,
    noOfDays integer not null,
    noOfPerson integer not null,
    comment varchar(70) not null,
    primary key (id)
);
INSERT INTO L11_Eke_52127_School.music_IE(
    id, place, surname, noOfDays, noOfPerson, comment)
VALUES
 (1,'Warsaw', 'EKE',3,10,'Lots Of Polish Songs')
 ,(2,'Harare', 'EKEA',4,10,'Shona songs')
 ,(3,'USA', 'EKEB', 2,5,'Rap Music')
 ,(4,'France', 'EKEC',8,2,'Music with a French Accent')
 ,(5,'Krypton', 'EKED',3,4,'Superman music');