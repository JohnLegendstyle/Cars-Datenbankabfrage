Drop table if exists autos;

create table autos (
    id INT AUTO_INCREMENT Primary key,
    charakter varchar(100) not null,
    farbe varchar(50),
    fahrzeug varchar(150),
    bild varchar(255)
);

insert into autos
(charakter, farbe, fahrzeug, bild)
values
('Hook', 'Braun', 'Chevrolet 3800', 'hook.png'),
('Lightning McQueen', 'Rot', 'Custom Race Car', 'McQueen.jpg'),
('Doc Hudson', 'Blau', '1951 Hudson Hornet', 'doc-hudson.jpg'),
('Sally Carrera', 'Babyblau', 'Porsche 911 Carrera', 'sally.jpg'),
('Mack', 'Rot', 'American Truck', 'Mack.jpg'),
('Guido', 'Babyblau', 'Gabelstapler', 'guido.jpg'),
('Luigi', 'Gelb', 'Fiat 500', 'luigi.jpg'),
('King', 'Blau', 'Plymoth Superbird', 'king.jpg'),
('Chick Hicks', 'Grün', 'Shyster Cremlin', 'chick-hicks.jpg'),
('Fred', 'Rost', 'Stodgey Suaver LT', 'fred.jpg');