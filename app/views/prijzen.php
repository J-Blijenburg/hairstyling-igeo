<main>
    <div class="prijzenStructure">

    
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Heren
            </div>
            <ol class="list-group list-group-numbered">
                <?php foreach ($pricesHeren as $row) {
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><?php echo $row->PriceName ?></div>
                        </div>
                        <span class="badge bg-primary rounded-pill"><?php echo $row->PricePrice ?></span>
                    </li>
                <?php
                } ?>
            </ol>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Dames
            </div>
            <ol class="list-group list-group-numbered">
                <?php foreach ($pricesDames as $row) {
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><?php echo $row->PriceName ?></div>
                        </div>
                        <span class="badge bg-primary rounded-pill"><?php echo $row->PricePrice ?></span>
                    </li>
                <?php
                } ?>
            </ol>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Kinderen
            </div>
            <ol class="list-group list-group-numbered">
                <?php foreach ($pricesKinderen as $row) {
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><?php echo $row->PriceName ?></div>
                        </div>
                        <span class="badge bg-primary rounded-pill"><?php echo $row->PricePrice ?></span>
                    </li>
                <?php
                } ?>
            </ol>
        </div>
    </div>
    <div class="homeStructure">
        <div class="homePrijzenCard">
            <table class="table table-striped" id="prijzenCardTable">
                <thead>
                    <tr>
                        <th scope="col">Heren</th>
                        <th scope="col">Prijs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pricesHeren as $row) {
                    ?>
                        <tr>
                            <td> <?php echo $row->PriceName ?></td>
                            <td> <?php $priceFormat = number_format((float)$row->PricePrice, 2, '.', '');
                                    echo $priceFormat; ?>,-</td>
                        </tr>

                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
        <div class="homePrijzenCard">
            <table class="table table-striped" id="prijzenCardTable">
                <thead>
                    <tr>
                        <th scope="col">Dames</th>
                        <th scope="col">Prijs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pricesDames as $row) {
                    ?>
                        <tr>
                            <td> <?php echo $row->PriceName ?></td>
                            <td> <?php $priceFormat = number_format((float)$row->PricePrice, 2, '.', '');
                                    echo $priceFormat; ?>,-</td>
                        </tr>

                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
        <div class="homePrijzenCard">
            <table class="table table-striped" id="prijzenCardTable">
                <thead>
                    <tr>
                        <th scope="col">Kinderen</th>
                        <th scope="col">Prijs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pricesKinderen as $row) {
                    ?>
                        <tr>
                            <td> <?php echo $row->PriceName ?></td>
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