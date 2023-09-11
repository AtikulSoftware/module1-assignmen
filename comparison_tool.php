<!-- Task 6: Comparison Tool -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
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
                    <center class="mb-3" > <h5>Task 6: Comparison Tool</h5> </center>
                    <form method="post" action="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number 1</span>
                            <input type="text" name="number1" class="form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number 2</span>
                            <input type="text" name="number2" class="form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3 mb-3 mybutton">Compare</button>
                    </form>

                    <div id="result">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    // Validate input
    if (!is_numeric($number1) || !is_numeric($number2)) {
        echo "<center><h5 style='color: red;'>Please enter a valid numeric number.</h5></center>";
    } else {
        // Use the ternary operator to determine the larger number
        $result = ($number1 == $number2) ? "<center> {$number1} and {$number2} is equal</center>" : (($number1 > $number2) ? "<center>{$number1} is larger.</center>" : "<center>{$number2} is larger.</center>");
        echo $result;

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