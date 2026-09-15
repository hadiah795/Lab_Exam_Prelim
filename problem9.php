<?php 

$attendance = ["P", "P", "P", "A", "P"];
$absences = 0;

foreach ($attendance as $records) {
    if ($records == "A"){
        $absences++;
    }
}

if ($absences <= 2) {
    echo "Good Attendance";
}else {
    echo "Poor Attendance";
}

?>