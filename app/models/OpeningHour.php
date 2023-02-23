<?php
class OpeningHour{
    public int $OpeningsHoursID;
    public string $OpeningsHoursDay;
    //?string means a nullable string, not all openingshours have a begin and end, for example closed days
    public ?string $OpeningsHoursBeginTime;
    public ?string $OpeningsHoursEndTime;
    //we use an int, because database doesnt have a boolean
    public int $OpeningsHoursClosed;
}
?>