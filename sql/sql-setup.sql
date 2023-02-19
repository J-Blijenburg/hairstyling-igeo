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
    ProductName VARCHAR(255) NOT NULL,
    ProductDescription TEXT NULL,
    ProductImage BLOB NOT NULL,
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
    OpeningsHoursId INT NOT NULL AUTO_INCREMENT,
    Day VARCHAR(15) NOT NULL,
    BeginTime VARCHAR(10) NULL,
    EndTime VARCHAR(10) NULL,
    Closed INT(1) NOT NULL,
    PRIMARY KEY(OpeningsHoursId)
);

INSERT INTO igeo_db.prices
VALUES  (NULL, 'Heren', 'knippen', '25'),
        (NULL, 'Heren', 'knippen/wassen', '27.50'),
        (NULL, 'Heren', 'knippen/wassen/fohnen', '30'),
        (NULL, 'Dames', 'knippen', '25'),
        (NULL, 'Dames', 'knippen/wassen', '27.50'),
        (NULL, 'Dames', 'knippen/wassen/fohnen', '30'),
        (NULL, 'Dames', 'verven', '40'),
        (NULL, 'Dames', 'kleurspoeling', '30'),
        (NULL, 'Kinderen', 'knippen (0-5)', '20'),
        (NULL, 'Kinderen', 'knippen (6-16)', '25')

INSERT INTO igeo_db.openingHours
VALUES  (NULL, 'maandag', NULL, NULL, '1'),
        (NULL, 'dinsdag', '09:00', '14:00', '0'),
        (NULL, 'woensdag', '09:00', '14:00', '0'),
        (NULL, 'donderdag', '09:00', '14:00', '0'),
        (NULL, 'vrijdag', '09:00', '14:00', '0'),
        (NULL, 'zaterdag', '09:00', '14:00', '0'),
        (NULL, 'zondag', NULL, NULL, '1')