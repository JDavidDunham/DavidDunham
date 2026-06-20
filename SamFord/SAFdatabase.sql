-- Database Creation
CREATE DATABASE SAFdatabase;
USE SAFdatabase;


-- Customer Information Template
CREATE TABLE customer (
    custnum INT NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    address VARCHAR(50),
    city VARCHAR(35),
    state CHAR(2),
    zip VARCHAR(10),
    phone VARCHAR(12),
    email VARCHAR(50),
    contact VARCHAR(10),
    bday DATE,
    interest VARCHAR(255),
    PRIMARY KEY (custnum)
);


-- Customer Information
INSERT INTO customer 
(firstName, lastName, address, city, state, zip, phone, email, contact, bday, interest)
VALUES (		-- Jane Smith Info
	"Jane", 
	"Smith", 
	"3405 Central Drive", 
	"Hurst", 
	"TX", 
	"76054",
	"817-264-3765", 
	"Jsmith459@gmail.com", 
	"email", "1987-03-25",
	"Interested in a Ford Escape"
);


INSERT INTO customer 
(firstName, lastName, address, city, state, zip, phone, email, contact, bday, interest)
VALUES (		-- Bob Roberts Info
	"Bob", 
	"Roberts", 
	"129 Main Street", 
	"Euless", 
	"TX", 
	"76039",
	"214-628-6534", 
	"bob.roberts35@gmail.com", 
	"email", 
	"1969-07-14",
	"Interested in a Ford F150"
);


INSERT INTO customer 
(firstName, lastName, address, city, state, zip, phone, email, contact, bday, interest)
VALUES (		-- Jessie Ochoa Info
	"Jesse", 
	"Ochoa", 
	"6547 Redbud Street", 
	"Hurst", 
	"TX", 
	"",
	"817-564-2467", 
	"jess.ochoa@yahoo.com", 
	"email", 
	"1980-11-22",
	"Interested in Ford Expedition"
);


INSERT INTO customer 
(firstName, lastName, address, city, state, zip, phone, email, contact, bday, interest)
VALUES (		-- Caroline Blackwell Info
	"Caroline", 
	"Blackwell", 
	"4579 Central Drive", 
	"Hurst", 
	"TX", 
	"76053",
	"817-425-6910", 
	"cblackwell@gmail.com", 
	"email", 
	"1979-04-12",
	"Interested in a Ford Escape Hybrid"
);


INSERT INTO customer 
(firstName, lastName, address, city, state, zip, phone, email, contact, bday, interest)
VALUES (		-- Sam Applewhite Info
	"Sam", 
	"Applewhite", 
	"5489 Donna Drive", 
	"Bedford", 
	"TX", 
	"76022",
	"214-628-6534", 
	"sam.applewhite@gmail.com", 
	"email", 
	"1969-07-14",
	"Interested in a Ford F150"
);


-- Query
SELECT * 
FROM customer;


-- Site Counter
CREATE TABLE visit_counter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    counter INT NOT NULL
);

	
-- Site Records
INSERT INTO visit_counter (id, counter)
VALUES (NULL, 0);