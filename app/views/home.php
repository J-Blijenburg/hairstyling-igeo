<main>
    <div class="homeStructure">
        <div class="homeMariaNila">
            <?php $dataUri = "data:image/jpg;charset=utf;base64," . base64_encode($singleGroupProduct[0]->ProductImage) ?>
            <img src="<?php echo $dataUri; ?>" class="img-fluid rounded-start" alt="Image is not shown" width="100%">
        </div>

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>





        <div class="pricesAndImage">
            <div class="homePrijzenCard">
                <table class="table table-striped" id="prijzenCardTable">
                    <thead>
                        <tr>
                            <th scope="col">Standaard knippen</th>
                            <th scope="col">Prijs</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pricesDames as $row) {
                            if ($row->PriceName == 'knippen') {
                        ?>
                                <tr>
                                    <td> <?php echo $row->PriceType ?> <?php echo $row->PriceName ?></td>
                                    <td> <?php $priceFormat = number_format((float)$row->PricePrice, 2, '.', '');
                                            echo $priceFormat; ?>,-</td>
                                </tr>

                        <?php
                            }
                        } ?>
                        <?php foreach ($pricesHeren as $row) {
                            if ($row->PriceName == 'knippen') {

                        ?>
                                <tr>
                                    <td><?php echo $row->PriceType ?> <?php echo $row->PriceName ?></td>
                                    <td> <?php $priceFormat = number_format((float)$row->PricePrice, 2, '.', '');
                                            echo $priceFormat; ?>,-</td>
                                </tr>

                        <?php
                            }
                        } ?>
                        <?php foreach ($pricesKinderen as $row) {
                        ?>
                            <tr>
                                <td> <?php echo $row->PriceType ?> <?php echo $row->PriceName ?></td>
                                <td> <?php $priceFormat = number_format((float)$row->PricePrice, 2, '.', '');
                                        echo $priceFormat; ?>,-</td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="homeImage">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                        <?php $dataUri = "data:image/jpg;charset=utf;base64," . base64_encode($imageCarousel[0]->CarouselImage) ?>
                                <img src="<?php echo $dataUri; ?>" class="img-fluid" alt="Image is not shown">
                        </div>
                        <?php
                        foreach ($imageCarousel as $row) {

                        ?>
                            <div class="carousel-item" data-bs-interval="5000">
                                <?php $dataUri = "data:image/jpg;charset=utf;base64," . base64_encode($row->CarouselImage) ?>
                                <img src="<?php echo $dataUri; ?>" class="img-fluid" alt="Image is not shown">
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

    </div>

</main>