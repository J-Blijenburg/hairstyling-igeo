<div class="contactStructure">
    <h1 class="contactHeader">Contact</h1>
    <div class="contactInformation">
            <h2 class="contactLocationTitle">
                Locatie
            </h2>
            <div style="text-align: center;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.92710960958!2d4.6159790157507645!3d52.37174167978648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5ef602fa33c17%3A0xd279f61ee8c04463!2sHairstyling%20Igeo!5e0!3m2!1snl!2snl!4v1676844967621!5m2!1snl!2snl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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
                Van Oosten de Bruijnstraat 209<br>
                2014 VR, Haarlem<br>
                Tel: 06 - 18134056<br>
                @: Igeo@hotmail.nl
            </p>
        </div>
                    <thead>
                        <tr>
                            <th scope="col">Dag</th>
                            <th scope="col">begin</th>
                            <th scope="col">eind</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
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
                                    <?php if($row->Closed == 0){?>
                                        <td> <?php echo $row->BeginTime ?></td>
                                        <td>-</td>
                                        <td> <?php echo $row->EndTime ?></td><?
                                    } 
                                    else{ ?>
                                        <td class="contactTableClosed" colspan="3">GESLOTEN</td><?
                                    }
                                    ?>
                                </tr>
                        <?php
                            }
                        } ?>
                         ?>
                    </tbody>
                </table>
            </div>