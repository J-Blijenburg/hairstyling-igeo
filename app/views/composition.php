<main>
    <div class="hamburgerProductStructure">
        <?php
        foreach ($allItemComposition as $row) {
        ?>
            <div class="card">
                <?php $dataUri = "data:image/jpg;charset=utf;base64," . base64_encode($row->ProductImage) ?>
                <img src="<?php echo $dataUri; ?>" class="img-fluid" alt="Image is not shown" width="100%">
                <div id="cardBodyInformation" class="card-body">
                    <h5 class="card-title"><?php echo $row->ProductName ?> </h5>
                    <p id="productCardInformation" class="card-text"><?php echo $row->ProductDescription ?></p>
                    <div id="contentPriceMobile">
                        <h5>
                            €
                        </h5>
                        <h5>

                            <?php
                            $priceFormat = number_format((float)$row->ProductPrice, 2, ',', '');
                            echo $priceFormat;
                            ?>
                        </h5>
                    </div>

                </div>
            </div>

        <?php
        }

        ?>

    </div>
</main>