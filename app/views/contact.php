<style>
    /* Builds the entire structure of the contact page with flex box */
    .contactStructure {
        display: flex;
        flex-direction: column;
    }

    /* The first title of the page */
    .contactHeader {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-bottom: 5%;
    }

    /* All the information that is placed on the page */
    .contactInformation {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-top: 2.5%;

    }

    /* Contains information of the card 'Locatie' */
    .contactLocation {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 40%;
        background-color: lightgrey;
        flex-wrap: wrap;
        padding-bottom: 2.5%;
        border-radius: 2.5%;
    }

    .contactLocation p {
        display: flex;
        justify-content: center;
    }

    .contactLocationTitle {
        display: flex;
        justify-content: center;
        background-color: lightgreen;
        padding-bottom: 5%;
        padding-top: 5%;
        width: 100%;
    }

    /* Contains information of the card 'Openingstijden'  */
    .contactTimeSlots {
        display: flex;
        justify-content: center;
        width: 40%;
        background-color: lightgrey;
        flex-wrap: wrap;
        padding-bottom: 2.5%;
        border-radius: 2.5%;
    }

    /* The Title of the card 'Openingstijden' */
    .contactTimeTableTitle {
        display: flex;
        justify-content: center;
        background-color: lightgreen;
        padding-bottom: 5%;
        padding-top: 5%;
        width: 100%;
    }

    /* the table containing information with the openingstijden */
    .timeTable {
        display: flex;
        align-items: center;
        width: 80%;
        padding-top: 5%;
    }
</style>


<div class="contactStructure">
    <h1 class="contactHeader">Contact</h1>
    <div class="contactInformation">
        <div class="contactLocation">
            <h2 class="contactLocationTitle">
                Locatie
            </h2>
            <p>
                Van Oosten de Bruijnstraat 209
            </p>
            <p>
                2014 VR, Haarlem
            </p>
            <p>
                Tel: 06 - 18134056
            </p>
            <p>
                @: Igeo@hotmail.nl
            </p>
        </div>
        <div class="contactTimeSlots">
            <h2 class="contactTimeTableTitle">
                Openingstijden
            </h2>

            <div class="timeTable">
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
                            if ($row->Open == true) {


                        ?>

                                <tr>
                                    <td> <?php echo $row->Day ?></td>
                                    <td> <?php echo $row->BeginTime ?></td>
                                    <td> <?php echo $row->EndTime ?></td>
                                </tr>

                        <?php
                            }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>