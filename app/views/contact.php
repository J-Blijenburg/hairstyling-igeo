<div class="contactStructure">
    <div class="contactContact">
        <div class="contactDetail">
            <a class="contactLink" href="tel:0031618134056">
                <img class="contactImage" src="/images/footer/telefoon.png" alt="Image is not shown">
            </a>
            <span class="contactPara">06 - 181 340 56</span>
        </div>
        <div class="contactDetail">
            <a class="contactLink" href="https://wa.me/31618134056">
                <img class="contactImage" src="/images/footer/whatsapp.png" alt="Image is not shown">
            </a>
            <span class="contactPara">06 - 181 340 56</span>
        </div>
        <div class="contactDetail">
            <a class="contactLink" href="mailto:igeo@hotmail.nl">
                <img class="contactImage" src="/images/footer/mail.png" alt="Image is not shown">
            </a>
            <span class="contactPara">igeo@hotmail.nl</span>
        </div>
        <p style="width:100%;text-align:center;margin:0;">
            Afspraken maken via <span style="text-decoration:underline;">Whatsapp</span>
        </p>
    </div>
    <div class="contactInformation">
        <div class="contactLocation">
            <h2 class="contactLocationTitle">
                Locatie
            </h2>
            <div class="googleMapsImage" style="text-align: center;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.92710960958!2d4.6159790157507645!3d52.37174167978648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5ef602fa33c17%3A0xd279f61ee8c04463!2sHairstyling%20Igeo!5e0!3m2!1snl!2snl!4v1676844967621!5m2!1snl!2snl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="contactTimeSlots">
            <h2 class="contactTimeTableTitle">
                Openingstijden
            </h2>
            <div class="timeTable">
                <table class="table table-striped">
                    <tbody>
                        <?php foreach ($allOpeningHours as $row) {
                        ?>
                            <tr>
                                <td> <?php echo $row->OpeningsHoursDay ?></td>
                                <?php if ($row->OpeningsHoursClosed == 0) { ?>
                                    <td> <?php echo $row->OpeningsHoursBeginTime ?></td>
                                    <td>-</td>
                                    <td> <?php echo $row->OpeningsHoursEndTime ?></td><?
                                } else { ?>
                                    <td class="contactTableClosed" colspan="3">GESLOTEN</td><?php
                                }?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="hamburgerContactStructure">
    <div class="contactContact">
        <div class="contactDetail">
            <a class="contactLink" href="tel:0031618134056">
                <img class="contactImage" src="/images/footer/telefoon.png" alt="Image is not shown">
            </a>
        </div>
        <div class="contactDetail">
            <a class="contactLink" href="https://wa.me/31618134056">
                <img class="contactImage" src="/images/footer/whatsapp.png" alt="Image is not shown">
            </a>
        </div>
        <div class="contactDetail">
            <a class="contactLink" href="mailto:igeo@hotmail.nl">
                <img class="contactImage" src="/images/footer/mail.png" alt="Image is not shown">
            </a>
        </div>
        <p class="contactInformationMobile" style="width:100%;text-align:center;margin:0;">
            <span class="contactPara">06 - 181 340 56</span>
            <span class="contactPara">igeo@hotmail.nl</span>
        </p>
        <p style="width:100%;text-align:center;margin:0;">
            Afspraken maken via <span style="text-decoration:underline;">Whatsapp</span>
        </p>
    </div>
    <div class="contactTimeSlots">
        <h2 class="contactTimeTableTitle">
            Openingstijden
        </h2>
        <div class="timeTable">
            <table class="table table-striped">
                <tbody>
                    <?php foreach ($allOpeningHours as $row) {
                    ?>
                        <tr>
                            <td> <?php echo $row->OpeningsHoursDay ?></td>
                            <?php if ($row->OpeningsHoursClosed == 0) { ?>
                                <td> <?php echo $row->OpeningsHoursBeginTime ?></td>
                                <td>-</td>
                                <td> <?php echo $row->OpeningsHoursEndTime ?></td><?
                            } else { ?>
                                <td class="contactTableClosed" colspan="3">GESLOTEN</td><?php
                            }?>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="contactLocation">
        <h2 class="contactLocationTitle">
            Locatie
        </h2>
        <div style="text-align: center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.92710960958!2d4.6159790157507645!3d52.37174167978648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5ef602fa33c17%3A0xd279f61ee8c04463!2sHairstyling%20Igeo!5e0!3m2!1snl!2snl!4v1676844967621!5m2!1snl!2snl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>