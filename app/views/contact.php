<style>
    .contactStructure {
        display: flex;
        flex-direction: column;
    }

    .contactHeader {
        display: flex;
        justify-content: center;
    }

    .contactInformation {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-top: 2.5%;
    }

    .contactLocation {
        display: flex;
        justify-content: center;
        width: 40%;

    }

    .contactTimeSlots {
        display: flex;
        justify-content: center;
        width: 40%;
        flex-direction: column;
    }
</style>


<div class="contactStructure">
    <h1 class="contactHeader">Contact</h1>
    <div class="contactInformation">
        <div class="contactLocation">
            <h2>
                Locatie
            </h2>
        </div>
        <div class="contactTimeSlots">
            <h2 class="contactHeader">
                Openingstijden
            </h2>

            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Dag</th>
                            <th scope="col">begin</th>
                            <th scope="col">eind</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allOpeningHours as $row) {
                        ?>
                            <tr>
                                <td> <?php echo $row->Day ?></td>
                                <td> <?php echo $row->BeginTime ?></td>
                                <td> <?php echo $row->EndTime ?></td>
                            </tr>

                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>