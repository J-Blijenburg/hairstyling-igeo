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
                            Welkom, <br>
                            <br>
                            Bij Hairstyling igeo wordt u met meer dan 40 jaar<br>
                            knip ervaring verzorgd. <br>
                            <br>
                            Alle afsraken kunnen gemaakt worden d.m.v. <br>
                            te bellen of een whatsapp te sturen. <br>
                            <b>06 - 18134056 <br> </b>
                            <br>
                            Bij ons in de winkel is er ook een ruim assortiment aan<b> Maria Nila </b> producten<br>

                            <br>
                            Mochten er vragen zijn. <br>
                            Aarzel niet en bel, whatsapp of kom gerust langs. <br>
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

       

    </div>

    <div class="hamburgerHomeStructure">
        <div class="homeIntroText">
            <div></div>
            <h1>Hairstyling igeo </h1>

            <div class="homeIgeoImage">
                <div class="homeImageText">
                    <p>
                        Welkom, <br>
                        <br>
                        Bij Hairstyling igeo wordt u met meer dan 40 jaar<br>
                        knip ervaring verzorgd. <br>
                        <br>
                        Alle afsraken kunnen gemaakt worden d.m.v. <br>
                        te bellen of een whatsapp te sturen. <br>
                        <b>06 - 18134056 <br> </b>
                        <br>
                        Bij ons in de winkel is er ook een ruim assortiment aan<b> Maria Nila </b> producten<br>

                        <br>
                        Mochten er vragen zijn. <br>
                        Aarzel niet en bel, whatsapp of kom gerust langs. <br>
                    </p>

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