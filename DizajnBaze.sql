CREATE TABLE tbl_users
 (
   userID        INT IDENTITY PRIMARY KEY,
   userRole      CHAR(1) NOT NULL default 'U',
   userName      NVARCHAR(15),
   userEmail     NVARCHAR(64) NOT NULL,
   userPass      CHAR(32) NOT NULL,
   userStatus    CHAR(1) NOT NULL default 'N',
   tokenCode     CHAR(32) NOT NULL
 )
 select * from tbl_users

 CREATE TABLE oglas
(
    ID INT IDENTITY PRIMARY KEY,
    Naziv VARCHAR(32),
    Sifra CHAR(10),
    Cijena INT,
    Kategorija VARCHAR(32),
    Opis VARCHAR(101),
    Arhiviraj CHAR(2),
    URLSlike VARCHAR(64) Default 'noPicture.jpg'
)

select * from oglas
