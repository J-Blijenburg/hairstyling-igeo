CREATE DATABASE igeo_db;

CREATE TABLE igeo_db.prices (
    PriceID INT NOT NULL AUTO_INCREMENT,
    PriceType VARCHAR(8) NOT NULL,
    PriceName VARCHAR(255) NOT NULL,
    PricePrice DOUBLE NOT NULL,
    PRIMARY KEY (PriceID)
);

CREATE TABLE igeo_db.products (
    ProductID INT NOT NULL AUTO_INCREMENT,
    ProductType INT(1) NOT NULL, 
    ProductName VARCHAR(255) NOT NULL,
    ProductDescription TEXT NULL,
    ProductImage LONGBLOB NOT NULL,
    ProductPrice DOUBLE NULL,
    PRIMARY KEY (ProductID)
);

CREATE TABLE igeo_db.data (
    DataID INT NOT NULL AUTO_INCREMENT,
    DataPage INT NOT NULL,
    DataText LONGTEXT NULL,
    DataImage LONGBLOB NULL,
    PRIMARY KEY (DataID)
);

CREATE TABLE igeo_db.openingHours (
    OpeningsHoursID INT NOT NULL AUTO_INCREMENT,
    OpeningsHoursDay VARCHAR(15) NOT NULL,
    OpeningsHoursBeginTime VARCHAR(10) NULL,
    OpeningsHoursEndTime VARCHAR(10) NULL,
    OpeningsHoursClosed INT(1) NOT NULL,
    PRIMARY KEY(OpeningsHoursID)
);

INSERT INTO igeo_db.prices
VALUES  (NULL, 'Heren', 'Knippen', '25'),
        (NULL, 'Heren', 'Knippen/Wassen', '27.50'),
        (NULL, 'Heren', 'Knippen/Wassen/Föhnen', '30'),
        (NULL, 'Dames', 'Knippen', '25'),
        (NULL, 'Dames', 'Knippen/Wassen', '27.50'),
        (NULL, 'Dames', 'Knippen/Wassen/Föhnen', '30'),
        (NULL, 'Dames', 'Verven', '40'),
        (NULL, 'Dames', 'Kleurspoeling', '30'),
        (NULL, 'Kinderen', 'Knippen (0-5)', '20'),
        (NULL, 'Kinderen', 'Knippen (6-16)', '25');

INSERT INTO igeo_db.openingHours
VALUES  (NULL, 'Maandag', NULL, NULL, '1'),
        (NULL, 'Dinsdag', '09:00', '14:00', '0'),
        (NULL, 'Woensdag', '09:00', '14:00', '0'),
        (NULL, 'Donderdag', '09:00', '14:00', '0'),
        (NULL, 'Vrijdag', '09:00', '14:00', '0'),
        (NULL, 'Zaterdag', '09:00', '14:00', '0'),
        (NULL, 'Zondag', NULL, NULL, '1');