<main>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Soort</th>
                <th scope="col">Naam</th>
                <th scope="col">Prijs</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allPrices as $row) {
            ?>
                <tr>
                    <td> <?php echo $row->PriceType ?></td>
                    <td> <?php echo $row->PriceName ?></td>
                    <td> <?php echo $row->PricePrice ?></td>
                </tr>

            <?php
            } ?>
        </tbody>
    </table>
</main>