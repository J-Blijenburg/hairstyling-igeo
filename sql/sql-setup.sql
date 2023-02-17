CREATE DATABASE igeo_db;

CREATE TABLE igeo_db.prices (
    PriceID INT NOT NULL AUTO_INCREMENT,
    PriceType VARCHAR(8) NOT NULL,
    PriceName VARCHAR(255) NOT NULL,
    PricePrice DOUBLE NOT NULL,
    PRIMARY KEY (PriceID)
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