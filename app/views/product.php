<main>


    <div class="productStructure">

        <div class="card" id="productCard">
            <div class=cardImage>
                <img width="100%" src="/images/test.jpeg" alt="Image is not shown">
            </div>
            <div class="productinformation">
                <div class="productInformationText">
                    A nourishing argan oil that softens, moisturizes and strengthens your hair. The argan oil quickly absorbs and makes the hair smooth while reducing frizz. True Soft Argan Oil has a soft flowery scent of vanilla, rose and jasmine.
                </div>
                <div class="card-body" id="contentBodyCard">

                    <?php foreach ($allProducts as $row) {
                    ?>
                        <div class="card" id="contentSingleProduct">
                            <div class="contentImages">
                                <?php $dataUri = "data:image/jpg;charset=utf;base64," . base64_encode($row->ProductImage) ?>
                                <img src="<?php echo $dataUri; ?>" class="img-fluid rounded-start" alt="Image is not shown">
                            </div>
                            <div class="card-body" id="contentPrice">
                                <h5>
                                    €
                                    <?php
                                    $priceFormat = number_format((float)$row->ProductPrice, 2, '.', '');
                                    echo $priceFormat;
                                    ?>,-
                                </h5>
                            </div>
                        </div>
                    <?php

                    } ?>
                </div>
            </div>

        </div>


    </div>


</main>