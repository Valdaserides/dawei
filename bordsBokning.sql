CREATE TABLE bord(

bord_id int(8) PRIMARY KEY AUTO_INCREMENT,
bord_platser int(8)

);

CREATE TABLE bokning(

	bokning_id int(8) PRIMARY KEY AUTO_INCREMENT,
	bokning_bord int(8),
	bokning_tid varchar(32),
	bokning_datum varchar(32),
	bokning_antal int(8),
	bokning_namn varchar(50),
	bokning_extra text(500),
	
	FOREIGN KEY (bokning_bord) REFERENCES bord(bord_id)

);

INSERT INTO bord (bord_platser) VALUES
(8),(5),(6),(3),(5);