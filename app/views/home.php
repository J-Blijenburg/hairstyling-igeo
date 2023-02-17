<main>
    <?php foreach($allPrices as $row){
        ?>  
            <h1> <?php echo $row->PriceID ?></h1>
            <h1> <?php echo $row->PriceName ?></h1>
        <?php
    }?>
</main>