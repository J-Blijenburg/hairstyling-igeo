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

CREATE TABLE `openingHours` (
  `OpeningsHoursId` int(10) NOT NULL,
  `BeginTime` varchar(10) NOT NULL,
  `EndTime` varchar(10) NOT NULL,
  `Day` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `openingHours`
  ADD PRIMARY KEY (`OpeningsHoursId`);
  ALTER TABLE `openingHours`
  
  MODIFY `OpeningsHoursId` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

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