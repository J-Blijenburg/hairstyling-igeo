<main>
    <div class="prijzenStructure">
        <div class="prijzenCard">
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
                            <td><?php echo $row->PriceName ?></td>
                            <td>&#8364;<?php $priceFormat = number_format((float)$row->PricePrice, 2, ',', '');
                                        echo $priceFormat; ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
        <div class="prijzenCard">
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
                            <td><?php echo $row->PriceName ?></td>
                            <td>&#8364;<?php $priceFormat = number_format((float)$row->PricePrice, 2, ',', '');
                                        echo $priceFormat; ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
        <div class="prijzenCard">
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
                            <td><?php echo $row->PriceName ?></td>
                            <td>&#8364;<?php $priceFormat = number_format((float)$row->PricePrice, 2, ',', '');
                                        echo $priceFormat; ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="hamburgerprijzenStructure">
        <div class="prijzenCard">
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
                            <td><?php echo $row->PriceName ?></td>
                            <td>&#8364;<?php $priceFormat = number_format((float)$row->PricePrice, 2, ',', '');
                                        echo $priceFormat; ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
        <div class="prijzenCard">
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
                            <td><?php echo $row->PriceName ?></td>
                            <td>&#8364;<?php $priceFormat = number_format((float)$row->PricePrice, 2, ',', '');
                                        echo $priceFormat; ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
        <div class="prijzenCard">
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
                            <td><?php echo $row->PriceName ?></td>
                            <td>&#8364;<?php $priceFormat = number_format((float)$row->PricePrice, 2, ',', '');
                                        echo $priceFormat; ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>