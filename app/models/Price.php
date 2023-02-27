<?php
class Price {
    public int $PriceID;
    public string $PriceType;
    public string $PriceName;
    //we use float, database is in double. Thats the conversion ¯\_(ツ)_/¯
    public float $PricePrice;
}
?>