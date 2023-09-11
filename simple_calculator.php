<!-- Task 7: Simple Calculator -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator with PHP</title>
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
                    <center class="mb-3" > <h5>Task 7: Simple Calculator</h5> </center>
                    <form method="post" action="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">1st</span>
                            <input type="text" name="num1" class="form-control" placeholder="Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">2nd</span>
                            <input type="text" name="num2" class="form-control" placeholder="Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <select class="form-select" name="oprations" aria-label="Default select example">
                            <option selected>Select Operation</option>
                            <option value="add">Addition (+)</option>
                            <option value="subtract">Subtraction (-)</option>
                            <option value="multiply">Multiplication (*)</option>
                            <option value="divide">Division (/)</option>
                        </select>
                        <button type="submit" class="btn btn-primary mt-3 mb-3 mybutton">Calculate Now</button>
                    </form>

                    <div id="result">
                        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oprations = $_POST["oprations"];

    switch ($oprations) {
    case "add":
        $result = $num1 + $num2;
        echo "<center><h1 style='color: green;'>Addition: {$result}</h1></center>";
        break;
    case "subtract":
        $result = $num1 - $num2;
        echo "<center><h1 style='color: green;'>Subtraction: {$result}</h1></center>";
        break;

    case "multiply":
        $result = $num1 * $num2;
        echo "<center><h1 style='color: green;'>Multiplication: {$result}</h1></center>";
        break;

    case "divide":
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "<center><h1 style='color: green;'>Division: {$result}</h1></center>";
        } else {
            echo "<center><h1 style='color: green;'>{$num2} Division by zero is not allowed </h1></center>";
        }
        break;
    }

}

?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>