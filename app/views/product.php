<main>


    <div class="productStructure">
        <?php foreach ($allProducts as $row) {
        ?>
            <div class="productCard">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <?php $dataUri = "data:image/jpg;charset=utf;base64," . base64_encode($row->ProductImage) ?>
                            <img src="<?php echo $dataUri; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row->ProductName ?></h4>
                                <p class="card-text"><?php echo $row->ProductDescription ?></p>
                                <?php $priceFormat = number_format((float)$row->ProductPrice, 2, '.', ''); ?>
                                <p class="card-text">Prijs: € <?php echo $priceFormat ?>,-</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        } ?>
    </div>


</main>