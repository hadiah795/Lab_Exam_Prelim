<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $grade1 = $_POST["grade1"];
    $grade2 = $_POST["grade2"];
    $grade3 = $_POST["grade3"];
    $grade4 = $_POST["grade4"];
    $grade5 = $_POST["grade5"];
    

    $totalGrade = $grade1 + $grade2 + $grade3 + $grade4 + $grade5;
    $averageGrade =$totalGrade /5;

    if ($averageGrade >= 90) {
        echo "Excellent";
    }
    else if ($averageGrade >= 85) {
        echo "Very Good";
    }
    else if ($averageGrade >= 80) {
        echo "Good";
    }
    else if ($averageGrade >= 75) {
        echo "Passed";
    }
    else {
        echo "Failed";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title> </title>
</head>
<body> 
    <form method="POST">
        <label>Grade 1:</label>
        <input type="number" name="grade1">
        <br>
        <label>Grade 2:</label>
        <input type="number" name="grade2">
        <br>
        <label>Grade 3:</label>
        <input type="number" name="grade3">
        <br>
        <label>Grade 4:</label>
        <input type="number" name="grade4">
        <br>
        <label>Grade 5:</label>
        <input type="number" name="grade5">
        <br>
        <button type="submit">Calculate</button>
    </form>    

</body>