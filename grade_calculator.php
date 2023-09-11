<!-- Task 3: Grade Calculator -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #F8F9FA;
        }

        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .mybutton{
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        <div class="card" style="width: 30rem;">
                <div class="card-body">
                <center class="mb-3" > <h5>Task 3: Grade Calculator</h5> </center>
                    <form method="post" action="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Score 1</span>
                            <input type="text" name="score1" class="form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Score 2</span>
                            <input type="text" name="score2" class="form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Score 3</span>
                            <input type="text" name="score3" class="form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3 mb-3 mybutton">Calculate Grade</button>
                    </form>

                    <div id="result">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $score1 = $_POST["score1"];
    $score2 = $_POST["score2"];
    $score3 = $_POST["score3"];

    if (!is_numeric($score1) || !is_numeric($score2) || !is_numeric($score3)) {
        echo "<center><h5 style='color: red;'>Please enter valid numeric test scores</h5></center>";
    } else {

        // Calculate the average
        $average = ($score1 + $score2 + $score3) / 3;

        // Determine the letter grade
        $letterGrade = "";
        if ($average >= 90) {
            $letterGrade = "A";
        } elseif ($average >= 80) {
            $letterGrade = "B";
        } elseif ($average >= 70) {
            $letterGrade = "C";
        } elseif ($average >= 60) {
            $letterGrade = "D";
        } else {
            $letterGrade = "F";
        }

        // Display the result
        echo "<center>Average Score: {$average}</center>";
        echo "<center><h5 style='color: black;'>Letter Grade: {$letterGrade}</h5></center>";
    }

}
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>