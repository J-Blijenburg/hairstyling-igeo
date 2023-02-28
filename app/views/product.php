<main>
    <div class="productStructure">
        <?php foreach ($allProducts as $firstRow) {
            if ($firstRow->ProductType == 1) {
        ?>
            <div class="card" id="productCard">
                <div class=cardImage>
                    <?php $dataUri = "data:image/jpg;charset=utf;base64," . base64_encode($firstRow->ProductImage) ?>
                    <img src="<?php echo $dataUri; ?>" class="img-fluid" alt="Image is not shown" width="100%">
                </div>
                <div class="productinformation">
                    <div class="productInformationText">
                        <h3> <?php echo $firstRow->ProductName ?> <span id="backgroundBadge" class="badge ">Vegan</span></h3>
                        <?php echo $firstRow->ProductDescription ?>
                    </div>
                    <div class="card-body" id="contentBodyCard">
                        <?php foreach ($allProducts as $row) {
                            if ($row->ProductType == 0 && $firstRow->ProductName == $row->ProductName) {
                        ?>
                                <div class="card" id="contentSingleProduct">
                                    <div class="contentImages">
                                        <?php $dataUri = "data:image/jpg;charset=utf;base64," . base64_encode($row->ProductImage) ?>
                                        <img src="<?php echo $dataUri; ?>" class="img-fluid" alt="Image is not shown">
                                    </div>
                                    <div class="card-body" id="contentPrice">
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
                        <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        <?php } ?>
    </div>
    <div class="hamburgerProductStructure" id="hamburgerProductStructure">
        <?php
        foreach ($allProducts as $row) {
            if ($row->ProductType == 1) {
        ?>
                <div class="card">
                    <?php $dataUri = "data:image/jpg;charset=utf;base64," . base64_encode($row->ProductImage) ?>
                    <img src="<?php echo $dataUri; ?>" class="img-fluid" alt="Image is not shown" width="100%">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row->ProductName ?> </h5>
                        <p class="card-text"><?php echo $row->ProductDescription ?></p>
                    </div>
                    <div>
                        <form method="POST">
                            <button id="btnMoreInfo" class="btn btn-outline-primary" type="submit" value="<?php echo $row->ProductName?>" name="btnComposition">more info</button>
                        </form>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</main>

