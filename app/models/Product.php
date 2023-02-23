<?php
class Product{
    public int $ProductID;
    public int $ProductType;
    public string $ProductName;
     //?string means a nullable string, not all products deserve a description
    public ?string $ProductDescription;
    public string $ProductImage;
    //we use float, database is in double. Thats the conversion ¯\_(ツ)_/¯
    public ?float $ProductPrice;
}
?>