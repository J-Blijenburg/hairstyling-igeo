<main>
    <div class="homeStructure">

        <div class="pricesAndImage">

            <div class="homeIntroText">
                <div></div>
                <h1>Hairstyling igeo </h1>

                <div class="homeIgeoImage">
                    <img class="imageIgeo" width="40%" src="/images/igeo.jpg" alt="Image is not shown">
                    <div class="homeImageText">
                        <p>
                           blabla bla <br>
                           mooie stukkie tekst <br>
                           vbla bla bcscale <br>
                           40 jaar ervaring!!! <br>
                           gewoon een goeie kapper weetje <br>
                           elke taak wordt een geknipte zaak <br>
                           lorem ipsum <br>
                           kaal zijn is voor losers <br>    
                           nog een stukkie tekst <br>
                           Verkoop een mooie product <br>
                           maria nila <br>
                           wejo <br>    
                           knip je sneller dan een messi <br>
                        </p>

                    </div>
                </div>
            </div>




            <div class="homeImage">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <?php
                        $i = 0;
                        foreach ($imageCarousel as $row) {
                            if ($i == 0) {
                        ?>
                                <div class="carousel-item active" data-bs-interval="3000">
                                    <?php $dataUri = "data:image/jpg;charset=utf;base64," . base64_encode($row->CarouselImage) ?>
                                    <img src="<?php echo $dataUri; ?>" class="img-fluid" alt="Image is not shown">
                                </div>
                            <?php
                                $i++;
                            } else {
                            ?>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <?php $dataUri = "data:image/jpg;charset=utf;base64," . base64_encode($row->CarouselImage) ?>
                                    <img src="<?php echo $dataUri; ?>" class="img-fluid" alt="Image is not shown">
                                </div>

                        <?php
                            }
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

    </div>


</main>