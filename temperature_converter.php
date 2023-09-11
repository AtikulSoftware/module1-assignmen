<!-- Task 2: Temperature Converter -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
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
                <center class="mb-3" > <h5>Task 2: Temperature Converter</h5> </center>
                    <form method="post" action="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Temperature</span>
                            <input type="text" name="userInput" class="form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <select class="form-select" name="oprations" aria-label="Default select example">
                            <option selected>Convert to</option>
                            <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
                            <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
                        </select>
                        <button type="submit" class="btn btn-primary mt-3 mb-3 mybutton">Convert</button>
                    </form>

                    <div id="result">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST['userInput'];
    $oprations = $_POST["oprations"];

    switch ($oprations) {
    case "celsiusToFahrenheit":
        $convertedTemperature = ($userInput * 9 / 5) + 32;
        echo "<center><h5 style='color: green;'>$userInput Celsius is equal to $convertedTemperature Fahrenheit.</h5></center>";
        break;
    case "fahrenheitToCelsius":
        $convertedTemperature = ($userInput - 32) * 5 / 9;
        echo "<center><h5 style='color: green;'>$userInput Fahrenheit is equal to $convertedTemperature Celsius.</h5></center>";
        break;

    default:
        echo "<center><h5 style='color: red;'>Select Option Please</h5></center>";
        break;
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